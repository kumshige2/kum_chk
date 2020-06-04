<?php
//===========================================
// User  operation  class
//    ユーザー情報  module
//===========================================
// echo  '<p>' .'uesr.php' . "</p>\n";
class useroperation  extends dataoperation {
  //property
  
  //==========================================
  //  constructor 
  //===========================================
  function __construct() {
      $this->options['crypttype'] = CRYPTTYPE;    
	  $this->options['security_salt'] = SECURITY_SALT;   
	  $this->encoding = 'UTF-8';	
	  
	  //------------------------------------------
	  // $flagによって処理を分岐
	  //------------------------------------------
	 
	 
	  parent::__construct();
  }  // end_construct

  //===========================================
  //  Login 確認 
  //===========================================
  function userlogin($user_id,$user_pass) {
      //------------------------------------------
	  // login data  
	  //------------------------------------------
	   //------------------------
	   // pass convert
	   //------------------------
	   if(!mb_check_encoding($user_id,$this->encoding) ||
	      !mb_check_encoding($user_pass,$this->encoding)) {
			  return $this_resreturns(FALSE);
		  }
			   
	   $string =  $this->options['security_salt'] . $user_pass;
	   $pass_cnv= hash($this->options['crypttype'], $string);
	  
	   //
	   //$conn = new DB(DBSERVER,DBUSER,DBPASSWORD,DBNAME);
	   //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	   //----------------------------------------------------------------------------- 
       //
	   $data = array($user_id,$pass_cnv);  
	   $sql = 'SELECT  a.user_id,a.username,a.username_k,a.password,a.picture,a.staff_kbn,
              b.staff_type,a.username_x,a.ml_kbn,a.upd_ymd,a.cre_ymd     
			  from t_users as a left join t_staff_kbn as b on a.staff_kbn = b.staff_kbn 
			  where user_id = :user_id';
	   $result = $pdo->prepare($sql)
              ->bindAll(
                  array('user_id' => $user_id),
                  array('user_id' => 's' )
                )
              ->execute()
              ->fetchAll();
		
		if( count($result) > 0 ) {
		     foreach ($result as $row2) {
             //    echo '<p>' . e($row2['user_id']) . ':' . e($row2['username']) . "</p>\n";
              }
			 if (e($pass_cnv) == e($row2['password'])) {
			     //return $this->resreturn(TRUE,$result->fetchrow());	
				 return  array(TRUE, $result);			
			 }  else  {
			      return  array(FALSE);
			 }
			
		}  else {
		        echo '<p>' . 'Login  Failed---' . "</p>\n";
			 return  array(FALSE);
		}
   }   // end_fucntion
  //===========================================
  //  User 確認 
  //===========================================
  function usercheck($user_id) {
      //------------------------------------------
	  // user data   
	  //------------------------------------------
	   	//---- Postgresql  ------------------------------------------------------------
         $dsn_pq =  'pgsql:dbname=' . DBNAME_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
         $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
		//-----------------------------------------------------------------------------
		 $data = array($user_id);  
	     $sql = 'SELECT * from t_users WHERE user_id = :user_id';
	     $result = $pdo->prepare($sql)
              ->bindAll(
                  array('user_id' => $user_id),
                  array('user_id' => 's' )
                )
              ->execute()
              ->fetchAll();
	   
       
		if( count($result) > 0 ) {
		     //foreach ($result as $row2) {
             //echo '<p>' . e($row2['user_id']) . ':' . e($row2['username']) . "</p>\n";
             //}
			  return  array(TRUE, $result);	
		}  else {
		      return  array(FALSE);
		}
   } // end_fucntion
  //===========================================
  //  Pass 確認 
  //===========================================
  function passcheck($user_pass) {
     //------------------------
	   // pass convert
	   //------------------------
	    if (!mb_check_encoding($user_pass,$this->encoding)) {
			  return  array(FALSE);
		}
			   
	    $string =  $this->options['security_salt'] . $user_pass;
	    $pass_cnv= hash($this->options['crypttype'], $string);
	    $data = array($user_pass);  
		//---- Postgresql  ------------------------------------------------------------
         $dsn_pq =  'pgsql:dbname=' . DBNAME_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
         $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
		//-----------------------------------------------------------------------------
         $sql= 'select * from t_users where password =:password';
		 $result = $pdo->prepare($sql)
              ->bindAll(
                  array('password' => $pass_cnv),
                  array('password' => 's' )
                )
              ->execute()
              ->fetchAll();
	   
        
		if( count($result) > 0 ) {
		    // 行が存在した場合は　エラー　既存にある
			return  array(FALSE);
		}  else {
		    return  array(TRUE, $result);	
		}
   } // end_fucntion
  //===========================================
  //  User設定Update
  //===========================================
  function userupdate($user_id,$user_pass,$sessonuser) {
       //------------------------
	   // encoding check
	   //------------------------
	    if (!mb_check_encoding($user_id,$this->encoding)) {
			 return  array(FALSE);
		}
		if (!mb_check_encoding($user_pass,$this->encoding)) {
			 return  array(FALSE);
		}
					   
	    $string =  $this->options['security_salt'] . $user_pass;
	    $pass_cnv= hash($this->options['crypttype'], $string);
	    $data = array($user_id,$user_pass,$sessonuser);  
		$pdo = $this->_db;  
		$conn = new DB(DBSERVER,DBUSER,DBPASSWORD,DBNAME);
		$sql=sprintf('update  t_users set username = %s password = %s where user_id = %s',
	                quote_smart($sessionuser),$user_pass,quote_smart($user_id)
	    );
        $result =  $conn->execute($sql);
		if( count($result) > 0 ) {
		    // 行が存在した場合は　エラー　既存にある
			return  array(FALSE);
		}  else {
		    return  array(TRUE, $result);	
		}
   } // end_fucntion

  //===========================================
  //  DB close
  //===========================================
   function dbend() {
       $this  -> dbclose();
	   
   } // end_fucntion
  //===========================================
  // 数値以外をクオートする
  //===========================================
  function quote_smart($value)
  {
    // 数値以外をクオートする
   // if (!is_numeric($value)) {
        $value = "'" . mysql_real_escape_string($value) . "'";
    //}
    return $value;
   } // end_fucntion
} // end_class

 ?>