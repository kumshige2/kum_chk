<?php
//===========================================
// User  operation  class
//    パンフ情報操作  module
//===========================================
// echo  '<p>' .'address.php ' .date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
require_once('Chromephp.php');
class addressoperation   extends dataoperation {
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
  }   // end__construct

   // PDO2 -> PDO::FETCH_ASSOC
   // PDO3 -> PDO::FETCH_NUM

   //===========================================
  //  pamph 一覧情報取得
  //===========================================
  function sql_exe1($sqls){
	 //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       //$pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //-----------------------------------------------------------------------------
  try {
    $db = new PDO($dsn_pq,DBUSER_PQ, DBPASSWORD_PQ);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->query($sqls);
    echo 'Table created!';
  } catch (PDOException $e) {
    echo htmlspecialchars($e->getMessage(),ENT_QUOTES,'UTF-8');
  }
}
  //===========================================
  //  sql execute
  //===========================================
  function sql_exe($sqls) {
	 //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //-----------------------------------------------------------------------------
		 $result = $pdo->prepare($sqls)
              ->execute()
              ->fetchAll();
		if( count($result) > 0 ) {
		     //foreach ($result as $rows) {
             //    echo '<p>' . e($rows['p_id']) . ':' . e($row2['p_nm']) . "</p>\n";
             //}
			 // echo '<p>' . 'temp  success---' . "</p>\n";
			  return  array(TRUE, 'ok');
		}  else {
		       // echo '<p>' . 'temp  Failed---' . "</p>\n";
			 return  array(FALSE);
		}
   }  // end_function
  //----------------------
  //  key 1
  //----------------------
  function sql_exe01($sqls,$key1) {
   //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
   //-----------------------------------------------------------------------------
     $result = $pdo->prepare($sqls)
              ->bindAll(array($key1), '1=s')
              ->execute()
              ->fetchAll();
    if( count($result) > 0 ) {
         //foreach ($result as $rows) {
             //    echo '<p>' . e($rows['p_id']) . ':' . e($row2['p_nm']) . "</p>\n";
             //}
       // echo '<p>' . 'temp  success---' . "</p>\n";
        return  array(TRUE, 'ok');
    }  else {
           // echo '<p>' . 'temp  Failed---' . "</p>\n";
       return  array(FALSE);
    }
   }  // end_function
//----------------------------------------
// 住所から緯度経度を配列で返す関数
//----------------------------------------
function get_gps_from_address( $address='' ){
    $res = array();
    $req = 'http://maps.google.com/maps/api/geocode/xml';
    $req .= '?address='.urlencode($address);
    $req .= '&sensor=false';
    $xml = simplexml_load_file($req) or die('XML parsing error');
    if ($xml->status == 'OK') {
        $location = $xml->result->geometry->location;
        $res['lat'] = (string)$location->lat[0];
        $res['lng'] = (string)$location->lng[0];
    }
    return $res;
} // end function
  //===========================================
  //  年度設定 開講月より年度設定する
  //===========================================
    function select_ndo_kaiko($kaiko) {
       //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	   if(!mb_check_encoding($kaiko,$this->encoding))  {
			  //return $this -> resreturns(FALSE);
			   return  FALSE;
		  }
		switch (substr($kaiko,4,2))  {
		  case '01';
		      $ndo_wk = intval(substr($kaiko,0,4)) -1;
			  break;
		  case '02';
		       $ndo_wk = intval(substr($kaiko,0,4)) -1;
			   break;
		  case '03';
		       $ndo_wk = intval(substr($kaiko,0,4)) -1;
			   break;
		  default;
		       $ndo_wk = intval(substr($kaiko,0,4)) ;
			   break;
		}
		return  $ndo_wk;
   }// end function
  //===========================================
  //  select   key なし  postgresql num
  //===========================================
  function postget01() {
  //---------------------------------------------
  //  Post key check
  //  $_POST['KEY']  通常表示
  //  $_POST['id']   更新、追加、削除
  //---------------------------------------------
    $key_array0 = array();
    $key_array1 = array();
    if (isset($_POST['KEY'])) {
      $key_array0 = explode(",",$_POST['KEY']);
      $key_array0 = array_filter($key_array0,'strlen');
      $key_array1 = array_map('trim',explode(',',$_POST['KEY']));
    } else {
      if (isset($_GET['KEY'])) {
        $key_array0 = explode(",",$_GET['KEY']);
        $key_array0 = array_filter($key_array0,'strlen');
        $key_array1 = array_map('trim',explode(',',$_GET['KEY']));
      } else {
        if (isset($_GET['id'])) {
          $key_array0 = explode(",",$_GET['id']);
          $key_array0 = array_filter($key_array0,'strlen');
          $key_array1 = array_map('trim',explode(',',$_GET['id']));
        } else {
          //echo POSTNG;
          //exit;
        }
      }
    }
    return $key_array1;
   }  // end_function 
  //===========================================
  //  select   key なし  postgresql num
  //===========================================
  function getlist01($sqls) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //-----------------------------------------------------------------------------
	   $result = $pdo->prepare($sqls)
                           ->execute()
              ->fetchAll();
           //echo $sql;
		   if( count($result) > 0 ) {
		    //var_dump ($result);
			//foreach ($result as $rows) {
            //    echo '<p>' . e($rows['p_id']) . ':' . e($rows['p_nm']) . "</p>\n";
            // }
			 return  array(TRUE, $result);
		    }  else {
		       //echo '<p>' . 'Login  Failed---' . "</p>\n";
			   return  array(FALSE);
		    }
   }  // end_function
   //===========================================
  //  select   key なし   postgresql  assoc
  //===========================================
  function getlist02($sqls) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO3($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //-----------------------------------------------------------------------------
	   $result = $pdo->prepare($sqls)
                           ->execute()
              ->fetchAll();
		if( count($result) > 8500 ) {
			 echo '<p>' . '▼メモリー上限：この条件式ではWEBからEXCELに出力するのに時間がかかってしまうので条件を絞って検索お願いします！' . "</p>\n";
			 return  array(FALSE);
		} else {
           //echo $sql;
		   if( count($result) > 0 ) {
		    //var_dump ($result);
			//foreach ($result as $rows) {
            //    echo '<p>' . e($rows['p_id']) . ':' . e($rows['p_nm']) . "</p>\n";
           // }
		     // echo '<p>' . 'data success---' . "</p>\n";
			    return  array(TRUE, $result);
		   }  else {
		     echo '<p>' . 'data exception Failed---' . "</p>\n";
			 return  array(FALSE);
		   }
		}
   }  // end_function
//---------------------------------------------
//    select in
//---------------------------------------------
function selectin01_01($sqls,$key_ary1) {
//------------------------------------------
//  encoding check
//------------------------------------------
//---- Postgresql  ------------------------------------------------------------
    $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
    $pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
//-----------------------------------------------------------------------------
    $inClause = substr(str_repeat(',?', count($key_ary1)), 1);
  	$sqls = $sqls . "{$inClause}" . ")";
    $result = $pdo->prepare($sqls)
              //->execute(['066078','069311','069353','071043'])
              ->execute($key_ary1)
              ->fetchAll();
		if( count($result) > 0 ) {
			return  array(TRUE, $result);
	   }  else {
		      echo '<p>' . 'pdo select in   Failed---' . "</p>\n";
		    return  array(FALSE);
		}
   }  // end_function
 //
//---------------------------------------------
//    key 1
//---------------------------------------------
function getlist01_01($sqls,$key1) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //-----------------------------------------------------------------------------
	   $result = $pdo->prepare($sqls)
              ->bindAll(array($key1), '1=s')
              ->execute()
              ->fetchAll();
	   //var_dump ($stmt4);
        //echo $sql;
		if( count($result) > 0 ) {
			return  array(TRUE, $result);
	   }  else {
		      //echo '<p>' . 'Login  Failed---' . "</p>\n";
		    return  array(FALSE);
		}
   }  // end_function
 //
//---------------------------------------------
//    key 2
//---------------------------------------------
	 function getlist02_01($sqls,$key1,$key2) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //-----------------------------------------------------------------------------
	   $result = $pdo->prepare($sqls)
              ->bindAll(array($key1,$key2), '1=s,2=s')
              ->execute()
              ->fetchAll();
	   //var_dump ($stmt4);
        //echo $sql;
		if( count($result) > 0 ) {
			return  array(TRUE, $result);
	   }  else {
		      //echo '<p>' . 'Login  Failed---' . "</p>\n";
		    return  array(FALSE);
		}
   }  // end_function
 //
 //---------------------------------------------
//    key 2
//---------------------------------------------
	 function getlist02_01_int($sqls,$key1,$key2) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------

	  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //-----------------------------------------------------------------------------
	   $result = $pdo->prepare($sqls)
              ->bindAll(array($key1,$key2), '1=s,2=i')
              ->execute()
              ->fetchAll();
	   //var_dump ($stmt4);
        //echo $sql;
		if( count($result) > 0 ) {
			return  array(TRUE, $result);
	   }  else {
		      //echo '<p>' . 'Login  Failed---' . "</p>\n";
		    return  array(FALSE);
		}
   }  // end_function
 //
 //---------------------------------------------
//    key 2
//---------------------------------------------
	 function getlist03_01($sqls,$key1,$key2,$key3) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //-----------------------------------------------------------------------------
	   $result = $pdo->prepare($sqls)
              ->bindAll(array($key1,$key2,$key3), '1=s,2=s,3=s')
              ->execute()
              ->fetchAll();
	   //var_dump ($stmt4);
        //echo $sql;
		if( count($result) > 0 ) {
			return  array(TRUE, $result);
	   }  else {
		      //echo '<p>' . 'Login  Failed---' . "</p>\n";
		    return  array(FALSE);
		}
   }  // end_function
//---------------------------------------------
//    key 4
//---------------------------------------------
 function getlist04_01($sqls,$key1,$key2,$key3,$key4) {
    //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //-----------------------------------------------------------------------------
	   $result = $pdo->prepare($sqls)
              ->bindAll(array($key1,$key2,$key3,$key4), '1=s,2=s,3=s,4=s')
              ->execute()
              ->fetchAll();
	   //var_dump ($stmt4);
        //echo $sql;
		if( count($result) > 0 ) {
			return  array(TRUE, $result);
	   }  else {
		      //echo '<p>' . 'Login  Failed---' . "</p>\n";
		    return  array(FALSE);
		}
   }  // end_function
 //
  //---------------------------------------------
//    key 1
//---------------------------------------------
	 function getlist01_01_int ($sqls,$key1) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------

	  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO3($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //-----------------------------------------------------------------------------
	   $result = $pdo->prepare($sqls)
              ->bindAll(array($key1), '1=i')
              ->execute()
              ->fetchAll();
	   //var_dump ($stmt4);
        //echo $sql;
		if( count($result) > 0 ) {
			return  array(TRUE, $result);
	   }  else {
		      //echo '<p>' . 'Login  Failed---' . "</p>\n";
		    return  array(FALSE);
		}
   }  // end_function
 //
 //----------------------------
//  var_dump
//-----------------------------
function table($val){
    if(!$val) echo 'table error';
    if(is_array($val)){
        echo '<table border="1" cellspacing="0" bordercolor="#333333" >';
       $this ->tables($val);
        echo '</table>';
    }else{
        echo var_dump($val);
    }
 } // end function
function tables($val){
    echo '<tr align="left" valign="top">'.chr(10);
    echo ' <td align="left" valign="top" bgcolor="#33EE33">key</td>'.chr(10);
    echo ' <td align="left" valign="top" bgcolor="#33EE33">value</td>'.chr(10);
    echo '</tr>'.chr(10);
    foreach($val as $key => $_val){
        echo '<tr align="left" valign="top">'.chr(10);
        echo ' <td align="left" valign="top" bgcolor="#FFFFFF">'.$key.'</td>'.chr(10);
        echo ' <td align="left" valign="top" bgcolor="#FFFFFF">'.chr(10);
        if(is_array($_val)) $this->table($_val);
        else echo $_val.'</td>'.chr(10).'</tr>'.chr(10);
    }
 } // end function
//------------------------------------------------------
//  配列にhtmlspecialcharsをかける
//------------------------------------------------------
 function h($str){
  if(is_array($str)){
    return array_map($this->h,$str);
  }else{
    return htmlspecialchars($str,ENT_QUOTES,"UTF-8");
  }
 }
//------------------------------------------------------
//  配列にhtmlspecialcharsをかける
//------------------------------------------------------
 function sanitize($value)
 {
  if(is_array($value)){
    $sanitized_array = array();
    foreach($value as $k => $v){
      $sanitized_array[$k] = $this->sanitize($v);
    }
    return $sanitized_array;
  } else {
    return htmlspecialchars($value,ENT_QUOTES,"UTF-8");
  }
 }

  //===========================================
  //  Sort  
  //===========================================
 function datasort ($data)  {
  foreach ((array)$data as $key->$value) {
    $data_res[$key] = mb_convert_kana($value['p_nm'],"cH","UTF-8");
  }
  array_multisort($data_res,SORT_ASC,$data);
  return $data;
   }  // end_function
//====================================
 //   update t_syain_sun
 //====================================
  function upd_syain_160 (
     $access_id,
     $syainno,
     $license,
  $bsy_cd,
   $bsy_nm,
   $birth_md,
   $company_id,
   $client_id,
   $upd_ymd,
   $cre_ymd,
   $sts)
  {
      //------------------------------------------
    //  encoding check
    //------------------------------------------
  $arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
  //echo 'aaa:' . $varArray[0];
  //echo '<br>';
  foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
    if (!mb_check_encoding($value)) {
           echo 'encoding NG  :' . $value;
          echo '<br>';
          return  array(FALSE);

    } else {
           //echo 'encoding OK';
         // echo '<br>';
         //return  array(TRUE, $result);
    }
  }  //end foreach
  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
  //-----------------------------------------------------------------------------
  // print('Connection ok:');
  // echo '$sts: ??? ' .$sts;
   //echo '<br>';
   switch  ($sts) {
     case 'rew' :
       $sql=UPD_SYAIN_TACHI01;
       break;
     case 'ins01' :
       $sql=INS_SYAIN_TACHI01;
       break;
     case 'ins02' :
       $sql=INS_SYAIN_WK02;
       break;
     case 'del' :
       $sql=DEL_SYAIN_TACHI01;
       break;
     default :
       $sql=UPD_SYAIN_TACHI01;
       break;
   }
  //echo  '<P>' . 'SQL-->' . $sql . '</p>';
   $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
   'access_id' =>trim($access_id),
     'syainno' =>trim($syainno),
   'birth_md' =>trim($birth_md),
   'license' =>trim($license),
   'bsy_cd' =>trim($bsy_cd),
   'bsy_nm' =>trim($bsy_nm),
   'company_id' =>trim($company_id),
   'client_id'=>trim($client_id),
   'upd_ymd'=>trim($upd_ymd),
   'cre_ymd'=>trim($cre_ymd)
  ),
     array(
   'access_id' => 's',
     'syainno' => 's',
   'birth_md' => 'i',
   'license' => 's',
   'bsy_cd' => 's',
   'bsy_nm' => 's',
   'company_id' => 's',
   'client__id' => 's',
   'upd_ymd' => 's',
   'cre_ymd' => 's'
     )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
    return  array(TRUE, $result);
  }  else {
    return  array(FALSE);
  }//end if
   } // end_function
//====================================
 //   update t_syain_sun
 //====================================
  function upd_syain_2341 (
   $access_id,
   $syainno,
   $birth_md,
   $bsy_cd,
   $bsy_nm,
   $license,
   $filler1,
	 $company_id,
   $client_id,
   $upd_ymd,
   $cre_ymd,
	 $sts)
   {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	$arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
	echo '234:' . $sts;
	echo '<br>';
	foreach ($varArray as $value) {
   if (is_array($value)) { $value = implode('',$value); }
		if (!mb_check_encoding($value)) {
		       echo 'encoding NG  :' . $value;
			    echo '<br>';
			    return  array(FALSE);

		} else {
		       //echo 'encoding OK';
			   // echo '<br>';
			   //return  array(TRUE, $result);
		}
	}  //end foreach
	//---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	//-----------------------------------------------------------------------------
	// print('Connection ok:');
	// echo '$sts: ??? ' .$sts;
	 //echo '<br>';
	 switch  ($sts) {
		 case 'rew' :
		   echo 'aaa';
       $ret_del =$this->del_syain_xxx('t_syain_sun_dummy',$access_id,'delxx');
       if ($ret_del==false){
        echo 'delete failed';
        exit;
        } else {echo 'delok';
        exit;
      }
       $sql=INS_SYAIN_SUN01;
		   break;
	   case 'ins01' :
		   $sql=INS_SYAIN_TACHI01;
		   break;
		 case 'ins02' :
		    $sql=INS_SYAIN_WK02;
		   break;
		 case 'del' :
		   $sql=DEL_SYAIN_TACHI01;
		   break;
		 default :
		   echo 'sts??';
		   break;
	 }
	//echo  '<P>' . 'SQL-->' . $sql . '</p>';
	 $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
	 //'tbls' => $tbls,
   'access_id' =>$access_id,
   'syainno' =>$syainno,
	 'birth_md' => $birth_md,
   'bsy_cd' =>$bsy_cd,
   'bsy_nm' =>$bsy_nm,
	 'license' =>$license,
   'filler1'=>$filler1,
   'company_id' =>$company_id,
   'client_id'=>$client_id,
   'upd_ymd'=>$upd_ymd,
   'cre_ymd'=>$cre_ymd
	),
     array(
   // 'tbls' => 's',
	 'access_id' => 's',
   'syainno' => 's',
	 'birth_md' => 'i',
   'bsy_cd' => 's',
	 'bsy_nm' => 's',
   'license' => 's',
   'filler1' => 's',
   'company_id' => 's',
   'client__id' => 's',
   'upd_ymd' => 's',
   'cre_ymd' => 's'
   	 )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
	  return  array(TRUE, $result);
	}  else {
	  return  array(FALSE);
	}//end if
   } // end_function
//====================================
 //   update t_syain_sun
 //====================================
  function upd_syain_xxx (
   $access_id,
   $syainno,
   $birth_md,
   $bsy_cd,
   $bsy_nm,
   $license,
   $filler1,
   $company_id,
   $client_id,
   $upd_ymd,
   $cre_ymd,
   $sts)
   {
      //------------------------------------------
    //  encoding check
    //------------------------------------------
  $arg_num = func_num_args(); // 引数の数を取得
  $varArray  = func_get_args(); // 引数リストを配列に格納
  echo '234:' . $sts;
  echo '<br>';
  foreach ($varArray as $value) {
   if (is_array($value)) { $value = implode('',$value); }
    if (!mb_check_encoding($value)) {
           echo 'encoding NG  :' . $value;
          echo '<br>';
          return  array(FALSE);

    } else {
           //echo 'encoding OK';
         // echo '<br>';
         //return  array(TRUE, $result);
    }
  }  //end foreach
  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
  //-----------------------------------------------------------------------------
  // print('Connection ok:');
   echo '$sts: --> ' .$sts;
   echo '<br>';
   switch  ($sts) {
     case 'rew' :
       $ret_del =$this->del_syain_xxx($access_id,$syainno,'delxx');
       if ($ret_del==false){
          echo 'delete failed';
          exit;
        } else {
          //echo 'okdel';
      }
       $sql=INS_SYAIN_XXX;
       break;
     case 'ins' :
       $sql ='';
       $sql="select * from t_syain_sun_dummy  where access_id=:access_id and syainno=:syainno order by syainno";
       $res_ins = $this-> getlist02_01($sql,$access_id,$syainno);
       if ($res_ins[RESFLAG]==true) {
          if (count($res_ins[RESDATA])  != 0) {
            echo "<span style='color:#FF3366;font-size:18px;'>" . 'This data is already existed !? '  . "</span>";
            echo '<br>';
            return  array(FALSE,'This data is already existed !? ');
            exit;
          } else {
            $sql=INS_SYAIN_XXX;
            break;
          }
      } else {
        $sql=INS_SYAIN_XXX;
        break;
      }

     case 'delxx' :
       $ret_del =$this->del_syain_xxx($access_id,$syainno,'delxx');
       if ($ret_del==false){
          $span = "<span style='color:#FF3366'> Deleted Failed!</span><br>";
          echo $span;
         return  array(FALSE);
          exit;
        } else {
         $span = "<span style='color:#FF3366'> Deleted Successfully!</span><br>";
          echo $span;
         return  array(TRUE);
         exit;
       }
       break;
     default :
       echo 'sts??';
       break;
   }
  //echo  '<P>' . 'SQL-->' . $sql . '</p>';
   $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
   'access_id' =>$access_id,
   'syainno' =>$syainno,
   'birth_md' => $birth_md,
   'bsy_cd' =>$bsy_cd,
   'bsy_nm' =>$bsy_nm,
   'license' =>$license,
   'filler1'=>$filler1,
   'company_id' =>$company_id,
   'client_id'=>$client_id,
   'upd_ymd'=>$upd_ymd,
   'cre_ymd'=>$cre_ymd
  ),
     array(
   'access_id' => 's',
   'syainno' => 's',
   'birth_md' => 'i',
   'bsy_cd' => 's',
   'bsy_nm' => 's',
   'license' => 's',
   'filler1' => 's',
   'company_id' => 's',
   'client_id' => 's',
   'upd_ymd' => 's',
   'cre_ymd' => 's'
     )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
    return  array(TRUE, $result);
  }  else {
    return  array(FALSE);
  }//end if
   } // end_function

  //====================================
 //   update t_syain_sun
 //====================================
  function del_syain_xxx (
     $access_id,
     $syainno,
   $sts)
    //
  {
      //------------------------------------------
    //  encoding check
    //------------------------------------------
  $arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
  //echo 'aaa:' . $varArray[0];
  //echo '<br>';
  foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
    if (!mb_check_encoding($value)) {
           echo 'encoding NG  :' . $value;
          echo '<br>';
          return  array(FALSE);

    } else {
           //echo 'encoding OK';
         // echo '<br>';
         //return  array(TRUE, $result);
    }
  }  //end foreach
  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
  //-----------------------------------------------------------------------------
  // print('Connection ok:');
  // echo '$sts: ??? ' .$sts;
   //echo '<br>';
   switch  ($sts) {
      case 'delxx' :
       echo'del';
       $sql=DEL_SYAIN_xxx;
       break;
     default :
       echo 'del_syain_xxx failed';
       //$sql=UPD_SYAIN_TACHI01;
       break;
   }
  //echo  '<P>' . 'SQL-->' . $sql . '</p>';
   $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
    'access_id' =>$access_id,
    'syainno' =>$syainno
   ),
     array(
      'access_id' => 's',
      'syainno' => 's'
   )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
    return  array(TRUE, $result);
  }  else {
    return  array(FALSE);
  }//end if
   } // end_function
//====================================
 //   update t_syain_sun
 //====================================
  function del_syain_160 (
     $access_id,
   $sts)
    //
  {
      //------------------------------------------
    //  encoding check
    //------------------------------------------
  $arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
  //echo 'aaa:' . $varArray[0];
  //echo '<br>';
  foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
    if (!mb_check_encoding($value)) {
           echo 'encoding NG  :' . $value;
          echo '<br>';
          return  array(FALSE);

    } else {
           //echo 'encoding OK';
         // echo '<br>';
         //return  array(TRUE, $result);
    }
  }  //end foreach
  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
  //-----------------------------------------------------------------------------
  // print('Connection ok:');
  // echo '$sts: ??? ' .$sts;
   //echo '<br>';
   switch  ($sts) {
     case 'rew' :
       //$sql=UPD_SYAIN_TACHI01;
       break;
     case 'ins01' :
       //$sql=INS_SYAIN_TACHI01;
       break;
     case 'ins02' :
       //$sql=INS_SYAIN_TACHI02;
       break;
     case 'del01' :
       $sql=DEL_SYAIN_160_01;
       break;
      case 'del02' :
       $sql=DEL_SYAIN_160_02;
       break;  
     default :
       //$sql=UPD_SYAIN_TACHI01;
       break;
   }
  //echo  '<P>' . 'SQL-->' . $sql . '</p>';
   $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
   'access_id' =>$access_id,
   ),
     array(
   'access_id' => 's',
   )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
    return  array(TRUE, $result);
  }  else {
    return  array(FALSE);
  }//end if
   } // end_function
//====================================
 //   update t_has_meisai01
 //====================================
  function upd_syain_chk01 (
     $client_id,
     $q_id,
     $cnts,
	 $sqls,
	 $sts)
    //
  {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	$arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
	//echo 'aaa:' . $varArray[0];
	//echo '<br>';
	foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
		if (!mb_check_encoding($value)) {
		       echo 'encoding NG  :' . $value;
			    echo '<br>';
			    return  array(FALSE);

		} else {
		       //echo 'encoding OK';
			   // echo '<br>';
			   //return  array(TRUE, $result);
		}
	}  //end foreach
	//---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	//-----------------------------------------------------------------------------
	// print('Connection ok:');
	// echo '$sts: ??? ' .$sts;
	 //echo '<br>';
	 switch  ($sts) {
		 case 'rew' :
		   $sql=UPD_SYAIN_CHK01;
		   break;
	     case 'ins' :
		   $sql=INS_SYAIN_TACHI01;
		   break;
		  case 'ins02' :
		   $sql=INS_SYAIN_TACHI02;
		   break;
		 case 'del' :
		   $sql=DEL_SYAIN_TACHI01;
		   break;
		 default :
		   $sql=UPD_SYAIN_TACHI01;
		   break;
	 }
	//echo  '<P>' . 'SQL-->' . $sql . '</p>';
	 $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
	 'client_id' =>$client_id,
     'q_id' =>$q_id,
	 'cnts' =>$cnts,
	 'sqls' =>$sqls

	),
     array(
	 'client_id' => 's',
     'q_id' => 's',
	 'cnts' => 'i',
	 'sqls' => 's'
	 )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
	  return  array(TRUE, $result);
	}  else {
	  return  array(FALSE);
	}//end if
   } // end_function
//====================================
 //   update t_has_meisai01
 //====================================
  function upd_syain_sun01 (
     $access_id,
     $syainno,
     $birth_md,
     $grade,
     $memos,
     $upd_ymd,
   $sts)
    //
  {
      //------------------------------------------
    //  encoding check
    //------------------------------------------
  $arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
  //echo 'aaa:' . $varArray[0];
  //echo '<br>';
  foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
    if (!mb_check_encoding($value)) {
           echo 'encoding NG  :' . $value;
          echo '<br>';
          return  array(FALSE);

    } else {
           //echo 'encoding OK';
         // echo '<br>';
         //return  array(TRUE, $result);
    }
  }  //end foreach
  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
  //-----------------------------------------------------------------------------
  // print('Connection ok:');
  // echo '$sts: ??? ' .$sts;
   //echo '<br>';
   switch  ($sts) {
     case 'rew' :
       $sql=UPD_SYAIN_CHK01;
       break;
       case 'ins' :
       $sql=INS_SYAIN_TACHI01;
       break;
      case 'ins02' :
       $sql=INS_SYAIN_TACHI02;
       break;
     case 'del' :
       $sql=DEL_SYAIN_TACHI01;
       break;
     default :
       $sql=UPD_SYAIN_TACHI01;
       break;
   }
  //echo  '<P>' . 'SQL-->' . $sql . '</p>';
   $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
   'client_id' =>$client_id,
     'q_id' =>$q_id,
   'cnts' =>$cnts,
   'sqls' =>$sqls

  ),
     array(
   'client_id' => 's',
     'q_id' => 's',
   'cnts' => 'i',
   'sqls' => 's'
   )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
    return  array(TRUE, $result);
  }  else {
    return  array(FALSE);
  }//end if
   } // end_function
//====================================
 //   update t_shori_log
 //====================================
function upd_shori_log01 (
  $types,
  $cnt,
  $data_set,
  $user_id,
  $term_id,
  $memos,
  $cre_ymd,
  $sts)
    //
  {
      //------------------------------------------
    //  encoding check
    //------------------------------------------
  $arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
  //echo 'aaa:' . $varArray[0];
  //echo '<br>';
  foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
    if (!mb_check_encoding($value)) {
           echo 'encoding NG  :' . $value;
          echo '<br>';
          return  array(FALSE);

    } else {
           //echo 'encoding OK';
         // echo '<br>';
         //return  array(TRUE, $result);
    }
  }  //end foreach
  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
  //-----------------------------------------------------------------------------
  // print('Connection ok:');
  // echo '$sts: ??? ' .$sts;
   //echo '<br>';
   switch  ($sts) {
    case 'rew' :
       $sql=UPD_SHORI_LOG01;
       break;
    case 'ins' :
       $sql=INS_SHORI_LOG01;
       break;
     default :
       $sql=INS_SHORI_LOG01;
       break;
   }
  //echo  '<P>' . 'SQL-->' . $sql . '</p>';
   $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
  'types' =>$types,
  'cnt' =>$cnt,
  'data_set' =>$data_set,
  'user_id' =>$user_id,
  'term_id' =>$term_id,
  'memos' =>$memos,
  'cre_ymd'=>$cre_ymd
  ),
     array(
  'types' =>'s',
  'cnt' =>'i',
  'data_set' =>'s',
  'user_id' =>'s',
  'term_id' =>'s',
  'memos' =>'s',
  'cre_ymd'=>'s'
         )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
    return  array(TRUE, $result);
  }  else {
    return  array(FALSE);
  }//end if
} // end_function
  //====================================
 //   delete t_uke_meisai
 //====================================
function del_tbl01($keys) {
      //------------------------------------------
    //  encoding check
    //------------------------------------------
    $sss = array();
    //echo "<pre>". 'key ' ;
//echo ($keys);
//echo "</pre>";
    $sss =  explode( ',', $keys);
    $tbl_id = $sss[0];
    $tbl_seq = intval($sss[1]);
    $tbl_kbn = intval($sss[2]);
    if(!mb_check_encoding($tbl_id,$this->encoding) ||
       !mb_check_encoding($tbl_seq,$this->encoding) ||
       !mb_check_encoding($tbl_kbn,$this->encoding)) {
        return array(FALSE);
      }
    //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
    //-----------------------------------------------------------------------------
     $pdo ->beginTransaction();   //"";
     $flg_del_sub = $pdo->prepare(DEL_TBL01)
              ->bindAll(
                  array('tbl_id' => $tbl_id,'tbl_seq' => $tbl_seq,'tbl_kbn' => $tbl_kbn),
                  array('tbl_id' => 's','tbl_seq' => 'i','tbl_kbn' => 'i')
                )
              ->execute()
              ->fetchAll();
      //-------------------------------------------------------
        // DEL_PMH_sek01 del_pmh_sub01 両方とも成功した場合committ
    //-------------------------------------------------------
    if( $flg_del_sub ) {
      $pdo -> commit();
      return array(TRUE, $flg_del_sub);
    } else {
      $pdo -> rollback();
          return array(FALSE);
    } // end if
   }  // end_function
  //====================================
   //   update pmh_sek01
   //====================================
   function upd_pmh_message01 (
   $message,
   $p_id,
   $p_nd,
   $user_id,
   $rep_post_id,
   $upd_ymd,
   $cre_ymd,
   $sts)
    //
  {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	$arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
	//echo 'aaa:' . $varArray[0];
	//echo '<br>';
	foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
		if (!mb_check_encoding($value)) {
		       echo 'encoding NG  :' . $value;
			    echo '<br>';
			    return  array(FALSE);
		} else {
		       //echo 'encoding OK';
			   // echo '<br>';
			   //return  array(TRUE, $result);
		}
	}  //end foreach
	//---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	//-----------------------------------------------------------------------------
	// print('Connection ok:');
	// echo '$sts: ??? ' .$sts;
	 //echo '<br>';
	 switch  ($sts) {
		 case 'rew' :
		   $sql=UPD_PMH_MESSAGE01;
		   break;
	     case 'ins' :
		   $sql=INS_PMH_MESSAGE01;
		   break;
		 case 'del' :
		   $sql=DEL_PMH_MESSAGE01;
		   break;
		 default :
		   $sql=INS_PMH_MESSAGE01;
		   break;
	 }
	//echo  '<P>' . 'SQL-->' . $sql . '</p>';
	 $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
	 'message' =>$message,
	 'p_id' => $p_id,
	 'p_nd' => $p_nd,
     'user_id' => $user_id,
     'rep_post_id' =>$rep_post_id,
	 'upd_ymd'=>$upd_ymd,
	 'cre_ymd'=>$cre_ymd
	),
     array(
	'message' => 's',
	'p_id' => 's',
	'p_nd' => 's',
	'user_id' => 's',
	'rep_post_id' => 's',
	'upd_ymd'=>'s',
	'cre_ymd'=>'s'
	 )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
	  return  array(TRUE, $result);
	}  else {
	  return  array(FALSE);
	}//end if
   } // end_function
   //====================================
   //   update pmh_schedule01
   //====================================
   function upd_pmh_schedule01 (
   $p_id,
   $kgo_cd,
   $kaiko1,
   $ymd01,
   $ymd02,
   $ymd03,
   $ymd04,
   $ymd05,
   $ymd06,
   $ymd07,
   $ymd08,
   $ymd09,
   $ymd10,
   $tes_ymd,
   $tes_sts,
   $memos,
   $upd_ymd,
   $cre_ymd,
   $sts)
    //
  {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	$arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
	//echo 'aaa:' . $varArray[0];
	//echo '<br>';
	foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
		if (!mb_check_encoding($value)) {
		       echo 'encoding NG  :' . $value;
			    echo '<br>';
			    return  array(FALSE);
		} else {
		       //echo 'encoding OK';
			   // echo '<br>';
			   //return  array(TRUE, $result);
		}
	}  //end foreach
	//---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	//-----------------------------------------------------------------------------
	if ($sts != 'del' ) {
	  $sqls='select * from t_pmh_schedule01 where p_id = ? and kgo_cd = ? and kaiko1 = ? ';
	  $key1 = $p_id;
	  $key2 = $kgo_cd;
	  $key3 = $kaiko1;
	  $ares = $this->getlist03_01($sqls,$key1,$key2,$key3);
	  if($ares[RESFLAG] == TRUE) {
	    $sts ='rew'; }
	  else {
	    $sts ='ins';
	  };
	} else {};
	// print('Connection ok:');
	// echo '$sts: ??? ' .$sts;
	 //echo '<br>';
	 switch  ($sts) {
		 case 'rew' :
		   $sql=UPD_PMH_SCHEDULE01;
		   break;
	     case 'ins' :
		   $sql=INS_PMH_SCHEDULE01;
		   break;
		 case 'del' :
		   $sql=DEL_PMH_SCHEDULE01;
		   break;
		 default :
		   $sql=INS_PMH_SCHEDULE01;
		   break;
	 }
	//echo  '<P>' . 'SQL-->' . $sql . '</p>';
	 $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
	 'p_id' => $p_id,
	 'kgo_cd' => $kgo_cd,
     'kaiko1' => $kaiko1,
     'ymd01' =>  $ymd01,
	 'ymd02' =>  $ymd02,
	 'ymd03' =>  $ymd03,
	 'ymd04' =>  $ymd04,
	 'ymd05' =>  $ymd05,
	 'ymd06' =>  $ymd06,
	 'ymd07' =>  $ymd07,
	 'ymd08' =>  $ymd08,
	 'ymd09' =>  $ymd09,
	 'ymd10' =>  $ymd10,
	 'tes_ymd' => $tes_ymd,
     'tes_sts' => $tes_sts,
     'memos' => $memos,
	 'upd_ymd'=>$upd_ymd,
	 'cre_ymd'=>$cre_ymd
	),
     array(
	'p_id' => 's',
	'kgo_cd' => 's',
	'kaiko1' => 's',
	'ymd01' => 's',
	'ymd02' => 's',
	'ymd03' => 's',
	'ymd04' => 's',
	'ymd05' => 's',
	'ymd06' => 's',
	'ymd07' => 's',
	'ymd08' => 's',
	'ymd09' => 's',
	'ymd10' => 's',
	'tes_ymd' => 's',
    'tes_sts' => 's',
    'memos' => 's',
	'upd_ymd'=>'s',
	'cre_ymd'=>'s'
	 )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
	  return  array(TRUE, $result);
	}  else {
	  return  array(FALSE);
	}//end if
   } // end_function
  //====================================
  //   delete t_pmh_sub01 t_pmh_sek01
  //====================================
   function del_pmh_schedule01(
   $p_id,
   $kgo_cd,
   $kaiko1,
   $sts) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	  if(!mb_check_encoding($p_id,$this->encoding) ||
	     !mb_check_encoding($kgo_cd,$this->encoding) ||
	     !mb_check_encoding($kaiko1,$this->encoding))  {
			  return $this_resreturns(FALSE);
		  }
	  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	  //-----------------------------------------------------------------------------
	   $pdo ->beginTransaction();   //"";
	   $flg_del_sub = $pdo->prepare(DEL_PMH_SCHEDULE01)
              ->bindAll(
                  array('p_id' => $p_id, 'kgo_cd' => $kgo_cd,'kaiko1' => $kaiko1),
                  array('p_id' => 's','kgo_cd' => 's','kaiko1' => 's'     )
                )
              ->execute()
              ->fetchAll();
		if( $flg_del_sub ) {
		  $pdo -> commit();
		  return  TRUE;
		}  else {
		     $pdo -> rollback();
			 return  FALSE;
		} // end if
   }  // end_function
  //====================================
  //   delete t_pmh_sub01 t_pmh_sek01
  //====================================
   function del_syain01(
   $client_id,
   $sts) {
      //------------------------------------------
    //  encoding check
    //------------------------------------------
    //if(!mb_check_encoding($p_id,$this->encoding) ||
    //   !mb_check_encoding($kgo_cd,$this->encoding) ||
    //   !mb_check_encoding($kaiko1,$this->encoding))  {
     if(!mb_check_encoding($client_id,$this->encoding))  {
        return $this_resreturns(FALSE);
      }
    //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
    //-----------------------------------------------------------------------------
     $pdo ->beginTransaction();   //"";
     $flg_del_sub = $pdo->prepare(DEL_SYAIN_160_01)
              ->bindAll(
                  array('client_id' => $client_id),
                  array('client_id' => 's')
                )
              ->execute()
              ->fetchAll();
    if( $flg_del_sub ) {
      $pdo -> commit();
      return  TRUE;
    }  else {
         $pdo -> rollback();
       return  FALSE;
    } // end if
   }  // end_function
  //===========================================
  //  機種依存文字CHECK
  //===========================================
function char_check01($str) {
//$str = '12345';
//'①②③④⑤⑥⑦⑧⑨⑩⑪⑫⑬⑭⑮⑯⑰⑱⑲⑳ⅠⅡⅢⅣⅤⅥⅦⅧⅨⅩ㍉㌔㌢㍍㌘㌧㌃㌶㍑㍗㌍㌦㌣㌫㍊㌻㎜㎝㎞㎎㎏㏄㎡㍻〝〟№㏍℡㊤㊥㊦㊧㊨㈱㈲㈹㍾㍽㍼∮∑∟⊿纊褜鍈銈蓜俉炻昱棈鋹曻彅丨仡仼伀伃伹佖侒侊侚侔俍偀倢俿倞偆偰偂傔僴僘兊兤冝冾凬刕劜劦勀勛匀匇匤卲厓厲叝﨎咜咊咩哿喆坙坥垬埈埇﨏塚增墲夋奓奛奝奣妤妺孖寀甯寘寬尞岦岺峵崧嵓﨑嵂嵭嶸嶹巐弡弴彧德忞恝悅悊惞惕愠惲愑愷愰憘戓抦揵摠撝擎敎昀昕昻昉昮昞昤晥晗晙晴晳暙暠暲暿曺朎朗杦枻桒柀栁桄棏﨓楨﨔榘槢樰橫橆橳橾櫢櫤毖氿汜沆汯泚洄涇浯涖涬淏淸淲淼渹湜渧渼溿澈澵濵瀅瀇瀨炅炫焏焄煜煆煇凞燁燾犱犾猤猪獷玽珉珖珣珒琇珵琦琪琩琮瑢璉璟甁畯皂皜皞皛皦益睆劯砡硎硤硺礰礼神祥禔福禛竑竧靖竫箞精絈絜綷綠緖繒罇羡羽茁荢荿菇菶葈蒴蕓蕙蕫﨟薰蘒﨡蠇裵訒訷詹誧誾諟諸諶譓譿賰賴贒赶﨣軏﨤逸遧郞都鄕鄧釚釗釞釭釮釤釥鈆鈐鈊鈺鉀鈼鉎鉙鉑鈹鉧銧鉷鉸鋧鋗鋙鋐﨧鋕鋠鋓錥錡鋻﨨錞鋿錝錂鍰鍗鎤鏆鏞鏸鐱鑅鑈閒隆﨩隝隯霳霻靃靍靏靑靕顗顥飯飼餧館馞驎髙髜魵魲鮏鮱鮻鰀鵰鵫鶴鸙黑ⅰⅱⅲⅳⅴⅵⅶⅷⅸⅹ￤＇＂';
  foreach( preg_split( '//u', $str, -1, PREG_SPLIT_NO_EMPTY ) as $s ) {
   $res=$this->check($s);
  }
  switch ($res) {
    case '1':
      //echo 'NG';
      $res00=FALSE;
	  break;
    default :
      //echo 'OK';
	  $res00=TRUE;
     break;
  }
  return $res00;
} // end_fucntion

//-------------------------------------------------
// assert call back
//------------------------------------------------
 function assert_callback( $script, $line, $message ) {
  echo "Assert Error : {$script} : line {$line} : {$message}\n";
  exit;
}
function check($s){
  return strlen($s) !== strlen(mb_convert_encoding(mb_convert_encoding($s,'SJIS','UTF-8'),'UTF-8','SJIS'));
}
// end function

   //====================================
   //   update pno_com
   //====================================
   function updpno_com01 (
    $p_id,
	$p_no_seq,
	$sts)
  //
  {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	$arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
	//echo 'aaa:' . $varArray[0];
	//echo '<br>';
	foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
		//if (!mb_check_encoding($value)) {
		//       print('encoding NG  :' );
		//	    print_r( $value);
		//	    echo '<br>';
		//	   return  array(FALSE);
		//} else {
		       //echo 'encoding OK';
			   // echo '<br>';
			  // return  array(TRUE, $result);
		//}
	}  //end foreach
	//---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	//-----------------------------------------------------------------------------
	// print('Connection ok:');
	// echo '$sts: ??? ' .$sts;
	 //echo '<br>';
	//ChromePhp::log('upd_pno_com01');
	 switch  ($sts) {
		 case 'rew' :
		    $sql=UPD_PNO_COM01;
			break;
	     case 'ins' :
		    $sql=UPD_PNO_COM01;
			break;
		 case 'upd' :
		    $sql=UPD_PNO_COM01;
			break;
		 default :
			$sql=UPD_PNO_COM01;
			break;
	 }
	//echo  '<P>' . 'SQL-->' . $sql . '</p>';
	//ChromePhp::log('sql--->' . $sql);
	 $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
	'p_id'=>$p_id,
	'p_no_seq'=>$p_no_seq
	),
     array(
	'p_id'=>'s',
	'p_no_seq'=>'i'
	)
                )
              ->execute()
              ->fetchAll();
      if( count($result) > 0 ) {
		     //foreach ($result as $rows) {
             //}
			 return  TRUE;
		}  else {
		       return  FALSE;
		}  //end if
   } // end_function
   //====================================
   //   update pno_com fld08
   //====================================
   function updpno_com08 (
    $p_id,
	$fld08,
	$sts)
  //
  {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	$arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
	//echo 'aaa:' . $varArray[0];
	//echo '<br>';
	foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
		//if (!mb_check_encoding($value)) {
		//       print('encoding NG  :' );
		//	    print_r( $value);
		//	    echo '<br>';
		//	   return  array(FALSE);
		//} else {
		       //echo 'encoding OK';
			   // echo '<br>';
			  // return  array(TRUE, $result);
		//}
	}  //end foreach
	//---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	//-----------------------------------------------------------------------------
	// print('Connection ok:');
	// echo '$sts: ??? ' .$sts;
	 //echo '<br>';
	//ChromePhp::log('upd_pno_com01');
	 switch  ($sts) {
		 case 'rew' :
		    $sql=UPD_PNO_COM08;
			break;
	     case 'ins' :
		    $sql=UPD_PNO_COM08;
			break;
		 case 'upd' :
		    $sql=UPD_PNO_COM08;
			break;
		 default :
			$sql=UPD_PNO_COM08;
			break;
	 }
	//echo  '<P>' . 'SQL-->' . $sql . '</p>';
	//ChromePhp::log('sql--->' . $sql);
	 $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
	'p_id'=>$p_id,
	'fld08'=>$fld08
	),
     array(
	'p_id'=>'s',
	'fld08'=>'i'
	)
                )
              ->execute()
              ->fetchAll();
      if( count($result) > 0 ) {
		     //foreach ($result as $rows) {
             //}
			 return  TRUE;
		}  else {
		       return  FALSE;
		}  //end if
   } // end_function
//====================================
//   update pno_com fld04
//====================================
function updpno_com04 (
    $p_id,
  $fld04,
  $sts)
  //
  {
      //------------------------------------------
    //  encoding check
    //------------------------------------------
  $arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
  //echo 'aaa:' . $varArray[0];
  //echo '<br>';
  foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
    //if (!mb_check_encoding($value)) {
    //       print('encoding NG  :' );
    //      print_r( $value);
    //      echo '<br>';
    //     return  array(FALSE);
    //} else {
           //echo 'encoding OK';
         // echo '<br>';
        // return  array(TRUE, $result);
    //}
  }  //end foreach
  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
  //-----------------------------------------------------------------------------
  // print('Connection ok:');
  // echo '$sts: ??? ' .$sts;
   //echo '<br>';
  //ChromePhp::log('upd_pno_com01');
   switch  ($sts) {
     case 'rew' :
        $sql=UPD_PNO_COM04;
      break;
       case 'ins' :
        $sql=UPD_PNO_COM04;
      break;
     case 'upd' :
        $sql=UPD_PNO_COM04;
      break;
     default :
      $sql=UPD_PNO_COM04;
      break;
   }
  //echo  '<P>' . 'SQL-->' . $sql . '</p>';
  //ChromePhp::log('sql--->' . $sql);
   $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
  'p_id'=>$p_id,
  'fld04'=>$fld04
  ),
     array(
  'p_id'=>'s',
  'fld04'=>'i'
  )
                )
              ->execute()
              ->fetchAll();
      if( count($result) > 0 ) {
         //foreach ($result as $rows) {
             //}
       return  TRUE;
    }  else {
           return  FALSE;
    }  //end if
   } // end_function
   //====================================
   //====================================
   //   delete t_uke
   //====================================
   function del_uke11($keys) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	  $sss =  explode( ',', $keys);
	  $p_id = $sss[0];
	  $p_no_seq = $sss[1];
	  if(!mb_check_encoding($p_id,$this->encoding) ||
	     !mb_check_encoding($p_no_seq,$this->encoding)) {
			  return $this_resreturns(FALSE);
		  }
	  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	  //-----------------------------------------------------------------------------
	   $pdo ->beginTransaction();   //"";
	   $flg_del_sub = $pdo->prepare(DEL_UKE_MEISAI02)
              ->bindAll(
                  array('p_id' => $p_id, 'p_no_seq' => $p_no_seq),
                  array('p_id' => 's',  'p_no_seq' => 'i'     )
                )
              ->execute()
              ->fetchAll();
	   $xxx = $pdo->prepare(DEL_HAS_MEISAI03)
              ->bindAll(
                  array('p_id' => $p_id, 'p_no_seq' => $p_no_seq),
                  array('p_id' => 's',  'p_no_seq' => 'i'     )
                )
              ->execute()
              ->fetchAll();
	    //-------------------------------------------------------
        // DEL_PMH_sek01 del_pmh_sub01 両方とも成功した場合committ
		//-------------------------------------------------------
		if( $flg_del_sub ) {
		    $flg_del_sek = $pdo->prepare(DEL_UKE01)
              ->bindAll(
                  array('p_id' => $p_id, 'p_no_seq' => $p_no_seq),
                  array('p_id' => 's',  'p_no_seq' => 'i'     )
                )
              ->execute()
              ->fetchAll();
			  if ( $flg_del_sek ) {
				  $pdo -> commit();
			       return  TRUE;
		      } else {
			      $pdo -> rollback();
                  return  FALSE;
			  } // end if
		}  else {
		     $pdo -> rollback();
			 return  FALSE;
		} // end if
   }  // end_function
 //====================================
 //   delete t_uke_meisai
 //====================================
   function del_uke_meisai01($keys) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	  $sss = array();
	  //echo "<pre>". 'key ' ;
//echo ($keys);
//echo "</pre>";
	  $sss =  explode( ',', $keys);
	  $p_id = $sss[0];
	  $p_no_seq = intval($sss[1]);
	  $sof_id = $sss[2];
	  if(!mb_check_encoding($p_id,$this->encoding) ||
	     !mb_check_encoding($p_no_seq,$this->encoding) ||
		 !mb_check_encoding($sof_id,$this->encoding)) {
			  return $this_resreturns(FALSE);
		  }
	  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	  //-----------------------------------------------------------------------------
	   $pdo ->beginTransaction();   //"";
	   $flg_del_sub = $pdo->prepare(DEL_UKE_MEISAI01)
              ->bindAll(
                  array('p_id' => $p_id,'p_no_seq' => $p_no_seq,'sof_id' => $sof_id),
                  array('p_id' => 's','p_no_seq' => 'i','sof_id' => 's')
                )
              ->execute()
              ->fetchAll();
	    //-------------------------------------------------------
        // DEL_PMH_sek01 del_pmh_sub01 両方とも成功した場合committ
		//-------------------------------------------------------
		if( $flg_del_sub ) {
		  $pdo -> commit();
		  return array(TRUE, $flg_del_sub);
		} else {
		  $pdo -> rollback();
          return array(FALSE);
		} // end if
   }  // end_function
//====================================
 //   delete t_has_meisai
 //====================================
   function del_has_meisai01($keys) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	  $sss = array();
	  //echo "<pre>". 'key ' ;
//echo ($keys);
//echo "</pre>";
	  $sss =  explode( ',', $keys);
	  $p_id = $sss[0];
	  $p_no_seq = intval($sss[1]);
	  $dantai_cd = $sss[2];
	  $sof_id = $sss[3];
	  if(!mb_check_encoding($p_id,$this->encoding) ||
	     !mb_check_encoding($p_no_seq,$this->encoding) ||
		 !mb_check_encoding($dantai_cd,$this->encoding) ||
		 !mb_check_encoding($sof_id,$this->encoding)) {
			  return $this_resreturns(FALSE);
		  }
	  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	  //-----------------------------------------------------------------------------
	   $pdo ->beginTransaction();   //"";
	   $flg_del_sub = $pdo->prepare(DEL_HAS_MEISAI01)
            ->bindAll(
               array('p_id' => $p_id,'p_no_seq' => $p_no_seq,'dantai_cd' => $dantai_cd,'sof_id' => $sof_id),
               array('p_id' => 's','p_no_seq' => 'i','dantai_cd' => 's','sof_id' => 's')
              )
            ->execute()
            ->fetchAll();
	    //-------------------------------------------------------
        // DEL_PMH_sek01 del_pmh_sub01 両方とも成功した場合committ
		//-------------------------------------------------------
		if( $flg_del_sub ) {
		  $pdo -> commit();
		  return array(TRUE, $flg_del_sub);
		} else {
		  $pdo -> rollback();
          return array(FALSE);
		} // end if
   }  // end_function
//====================================
 //   delete t_has_meisai
 //====================================
   function del_has_meisai02($keys) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	  $sss = array();
	  //echo "<pre>". 'key ' ;
//echo ($keys);
//echo "</pre>";
	  $sss =  explode( ',', $keys);
	  $p_id = $sss[0];
	  $p_no_seq = intval($sss[1]);
	  $dantai_cd = $sss[2];
	  if(!mb_check_encoding($p_id,$this->encoding) ||
	     !mb_check_encoding($p_no_seq,$this->encoding) ||
		 !mb_check_encoding($dantai_cd,$this->encoding)) {
			  return $this_resreturns(FALSE);
		  }
	  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	  //-----------------------------------------------------------------------------
	   $pdo ->beginTransaction();   //"";
	   $flg_del_sub = $pdo->prepare(DEL_HAS_MEISAI02)
            ->bindAll(
               array('p_id' => $p_id,'p_no_seq' => $p_no_seq,'dantai_cd' => $dantai_cd),
               array('p_id' => 's','p_no_seq' => 'i','dantai_cd' => 's')
              )
            ->execute()
            ->fetchAll();
	    //-------------------------------------------------------
        // DEL_PMH_sek01 del_pmh_sub01 両方とも成功した場合committ
		//-------------------------------------------------------
		if( $flg_del_sub ) {
		  $pdo -> commit();
		  return array(TRUE, $flg_del_sub);
		} else {
		  $pdo -> rollback();
          return array(FALSE);
		} // end if
   }  // end_function

  //===========================================
  //  pamph_message update
  //
  //===========================================
 function upd_syain_sun011 ($access_id,
    $syainno,
    $filler01,
    $pmh_judge_kbn,
	$upd_ymd,
	$cre_ymd,
	$message,
	$user_id,
	$rep_post_id,
	$sts)
  //

  {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	$arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納

	foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
	}  //end foreach
	//---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	//-----------------------------------------------------------------------------
	//--------------------------------
	// t_pmh_judge01 にデータ存在するか
	//  ok --> rew
	//  ng --> ins
	//--------------------------------
	$sqls='select * from t_pmh_judge01 where p_id = ? and p_nd = ? ';
	$key1 = $p_id;
	$key2 = $p_nd;
	$ares = $this->getlist02_01($sqls,$key1,$key2);
	if($ares[RESFLAG] == TRUE) {
	   $sts ='rew'; }
	else {
	   $sts ='ins';
	};
	//--------------------------------
	//  update
	//--------------------------------
	$pdo ->begintransaction();"";
	 switch  ($sts) {
		 case 'rew' :
		    $sql01=UPD_PMH_JUD01;
			$sql02=INS_PMH_MES01;
			break;
	     case 'ins' :
	        $sql01=INS_PMH_JUD01;
		    $sql02=INS_PMH_MES01;
			break;
		 case 'del' :
		    $sql01=DEL_PMH_JUD01;
		    $sql02=DEL_PMH_MES01;
			break;
		 default :
		   $sql01=UPD_PMH_JUD01;
		   $sql02=INS_PMH_MES01;
			break;
	 }
	  $bin_jud01 = compact(
	 'p_id',
	 'p_nd',
     'filler01',
     'pmh_judge_kbn',
     'upd_ymd',
	 'cre_ymd');
     //
	  $bin_mes01 = compact(
	 'message',
	 'p_id',
	 'p_nd',
	 'user_id',
	 'rep_post_id',
     'upd_ymd',
     'cre_ymd'
	);
	//echo  '<P>' . 'SQL-->' . $sql01 . '</p>';
	//$result= array();
	 $flg_upd_sub = $pdo->prepare($sql01)
               ->bindall($bin_jud01,TYP_PMH_JUD01)
               ->execute()
               ->fetchAll();
     if($flg_upd_sub) {
		$flg_upd_sek = $pdo->prepare($sql02)
		  ->bindall($bin_mes01,TYP_PMH_MES01)
		  ->execute()
		  ->fetchAll();
		  if($flg_upd_sek) {
		     $pdo -> commit();
			 return  array(TRUE, $flg_upd_sub);
			 //return  array(TRUE, $result);
		   } else {
		     $pdo -> rollback();
			 echo 'aaaa';
		    return  FALSE;
		}  // endif
	  }  else {
		   $pdo -> rollback();
		   echo 'bbb';
		  return  array(FALSE);
	 }  //end if
   } // end_function
  //===========================================
  //  DB close
  //===========================================
  function dbend()  {
      $this->dbclose();
   }// end_function
 //====================================
 //   insert fld
 //====================================
  function ins_fld ($pdopdo,
    $table_name,
    $calam_name,
    $calam_str)
  //
  {
  //------------------------------------------
  //  encoding check
  //------------------------------------------
  //$ret00 = $this->table($calam_str);
  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
  //-----------------------------------------------------------------------------
  $placeholders = array_fill(0, count($calam_str), '?');
  try {
    $sql = sprintf(
      'INSERT INTO %s (%s) VALUES (%s)',
        $table_name,
        implode(', ', $calam_name),
        implode(', ', $placeholders));
    //echo 'sql--->' . $sql;
    $statement = $pdo->prepare($sql);

    $index = 1;
    foreach ($calam_str as $value) {
        $data_type = is_null($value) ? PDO::PARAM_NULL : PDO::PARAM_STR;
        $statement->bindValue($index, $value, $data_type);

        $index++;
    }
    $res=$statement->execute();
    return true;
  }catch(PDOException $e){
    echo $e->getMessage()." - ".$e->getLine().PHP_EOL;
    return false;
  }

}  // end function
//----------------------------------------------------
 //  年度計算
 //----------------------------------------------------
   function get_financial_year($year, $month, $financial_month){

   	if($month > $financial_month){
   		return $year;
   	} else {
   		return $year - 1;
   	}
  } // end function
 //===========================================
  //  Field get
  //===========================================
  function fld_get($sqls)
 {
    //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
   //-----------------------------------------------------------------------------
     $pdoStatement = $pdo->query($sqls);
     $columns = array();
     for ($i = 0; $i < $pdoStatement->columnCount(); $i++) {
        $meta = $pdoStatement->getColumnMeta($i);
       $columns[] = $meta['name'];
      }
    //var_dump($columns);
    //$ret01 = $this ->table($columns);
    if( count($columns) > 0 ) {
       return  array(TRUE, $columns);
    }  else {
       return  array(FALSE);
    }  //end if

   }  // end_function
//====================================
 //   log
 //====================================
    function upd_pmh_log01 (
    $types,
    $cnt,
  $data_set,
  $user_id,
    $term_id,
  $memos,
    $cre_ymd,
  $sts
  )
    //
  {
  //------------------------------------------
    //  encoding check
    //------------------------------------------
  $arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
  //echo '<br>';
  foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
    if (!mb_check_encoding($value)) {
           echo 'encoding NG  :' . $value;
          echo '<br>';
          return  array(FALSE);
    } else {
           //echo 'encoding OK';
         // echo '<br>';
         //return  array(TRUE, $result);
    }
  }  //end foreach
  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
  //-----------------------------------------------------------------------------
  // print('Connection ok:');
  // echo '$sts: ??? ' .$sts;
   //echo '<br>';
   switch  ($sts) {
     case 'upd' :
       $sql=INS_PMH_LOG01;
       break;
       case 'ins' :
       $sql=INS_PMH_LOG01;
       break;
     case 'del' :
       $sql=DEL_PMH_LOG01;
       break;
     default :
       $sql=INS_PMH_LOG01;
       break;
   }
  //echo  '<P>' . 'SQL-->' . $sql . '</p>';

   $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
    'types' =>$types,
      'cnt' => $cnt,
    'data_set' => $data_set,
    'user_id' => $user_id,
      'term_id' => $term_id,
    'memos' => $memos,
      'cre_ymd' =>$cre_ymd
  ),
     array(
  'types' => 's',
  'cnt' => 'i',
  'data_set' => 's',
  'user_id' => 's',
  'term_id' => 's',
  'memos'=>'s',
  'cre_ymd'=>'s'
   )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
    return  array(TRUE, $result);
  }  else {
    return  array(FALSE);
  }//end if
  }
  //===========================================
  //  SQL create
  //===========================================
    function mkSQL($conditions){
		$sql = "";
		$bind = array();//結合のforeign key配列を格納
		if(isset($conditions["bind"])){
			$bind = $coditions["bind"];
			unset($conditions["bind"]);
		}
		if(!empty($conditions)){
			$column = "";
			$join = "";
			$where = "";
			$junnbann = "";
			$seigenn = "";
			if(count($conditions)==1){//bindがない場合
				if(!isHash($conditions)){//テーブル名のみならば
					$sql = "SELECT * FROM {$conditions[0]};";
				}else{//テーブル名以下設定があれば
					$sql = "SELECT \n";
					foreach($conditions as $tbl => $item){
						$condition = $item["conditions"];//
						$order = isset($item["order"])?$item["order"]:"";
						$limit = isset($item["limit"])?$item["limit"]:"";
						$fields = isset($item["fields"])?$item["fields"]:"";//
						$num = 0;
						if(!empty($fields)){//fieldsがあれば
							foreach($fields as $field){//fieldsを設定
								if($num == count($fields)-1){//最後の要素
									$sql .= $field."\n";
								}else{//それ以外
									$sql .= $field.",\n";
									$num++;
								}
							}
						}else{//fieldsの設定がなければ
							$sql .= "*\n";
						}
						$sql .= "FROM\n";
						$sql .= $tbl."\n";
						if(!empty($condition)){//conditionsがあれば
							$sql .= "WHERE\n";
							$num = 0;
							foreach($condition as $fie => $con){
								if(!is_array($con) && strpos($fie,"?")==false){//当てはめ?無しで且つ値での指定の場合
									if($num == count($condition)-1){//最後の要素
										$sql .= $fie."=".(is_string($con)?"'".$con."'":$con)."\n";
									}else{//それ以外
										$sql .= $fie."=".(is_string($con)?"'".$con."'":$con)." AND\n";
										$num++;
									}
								}elseif(is_array($con)){//配列指定の場合（当てはめ?必須）
									//$chgd = str_replace("?", "%s", $fie);
									$fie_arr = explode("?",$fie);
									$comp_str = "";
									for($i=0;$i<count($fie_arr);$i++){
										$comp_str .= $fie_arr[$i];
										if(isset($con[$i])){
											if(is_string($con[$i])){
												$comp_str .= "'".$con[$i]."'";
											}else{
												$comp_str .= $con[$i];
											}
										}
									}
									if($num == count($condition)-1){//最後の要素
										$sql .= $comp_str."\n";
									}else{//それ以外
										$sql .= $comp_str." AND\n";
										$num++;
									}
								}else{//当てはめ?に値を指定してある場合
									$chgd = str_replace("?", "%s", $fie);
									if($num == count($condition)-1){//最後の要素
										$sql .= sprintf($chgd,(is_string($con)?"'".$con."'":$con))."\n";
									}else{//それ以外
										$sql .= sprintf($chgd,(is_string($con)?"'".$con."'":$con))." AND\n";
										$num++;
									}
								}
							}
						}//
						if(!empty($order)){//orderがあれば
							$sql .= "ORDER BY\n";
							$num = 0;
							foreach($order as $by => $jun){
								if($num == count($order)-1){//最後の要素
									$sql .= $by." ".$jun."\n";
								}else{//それ以外
									$sql .= $by." ".$jun.",\n";
								}
							}
						}//
						if(!empty($limit)){//limitがあれば
							$sql .= "LIMIT {$limit}\n";
						}
					}
					$sql .= ";";
				}
			}elseif(count($conditions)>1){//bindがある場合
				if(!isHash($conditions)){//テーブル名のみならば
					$sql = "SELECT * FROM \n";
					$num = 0;
					foreach($conditions as $tbl){
						if($num==0){//最初の要素
							$first_table = $tbl;
							$sql .= $tbl." \n";
							$num++;
						}elseif($num==count($conditions)-1){//最後の要素
							$sql .= "LEFT JOIN ".$tbl." ON (".$first_table.".id=".$tbl.".".$first_table."_id);";
						}else{//それ以外
							$sql .= "LEFT JOIN ".$tbl." ON (".$first_table.".id=".$tbl.".".$first_table."_id) \n";
							$num++;
						}
					}
				}else{//テーブル名以下設定があれば
					//個別に変数に格納し
					$fie_count = 0;
					$conditions_count = 0;
					$order_count = 0;
					$limit_count = 0;
					$tbl_count = 0;
					$fie_count_chk = 0;
					$conditions_count_chk = 0;
					$order_count_chk = 0;
					$limit_count_chk = 0;
					foreach($conditions as $tbl => $item){
						$condition = $item["conditions"];//
						$order = $item["order"];
						$limit = $item["limit"];
						$fields = $item["fields"];//
						if(!empty($fields)){//fieldsがあれば
							$fie_count_chk++;
						}
						if(!empty($condition)){//conditionsがあれば
							$conditions_count_chk++;
						}
						if(!empty($order)){
							$order_count_chk++;
						}
						if(!empty($limit)){//limitがあれば
							$limit_count_chk++;
						}
					}
					foreach($conditions as $tbl => $item){
						$condition = $item["conditions"];//
						$order = $item["order"];
						$limit = $item["limit"];
						$fields = $item["fields"];//
						define("FIRST_TABLE", $tbl);
						$num = 0;
						if(!empty($fields)){//fieldsがあれば
							$fie_count++;
							foreach($fields as $field){//fieldsを設定
								if($num == count($fields)-1 && $fie_count == $fie_count_chk){//最後の要素
									$column .= $field."\n";
								}else{//それ以外
									$column .= $field.",\n";
									$num++;
								}
							}
						}elseif($count == count($conditions)-1 && $fie_count==0){//全てのテーブルにfieldsの設定がなければ
							$column .= "*\n";
						}
						//結合処理ここから
							if($tbl_count==0){//最初の要素
								$first_table = $tbl;
								$tbl_count++;
							}else{//それ以外
								$join .= "LEFT JOIN ".$tbl." ON (".$first_table.".id=".$tbl.".".$first_table."_id) \n";
								$tbl_count++;
							}

						//結合処理ここまで
						if(!empty($condition)){//conditionsがあれば
							//$where .= "WHERE\n";
							$conditions_count++;
							$num = 0;
							foreach($condition as $fie => $con){
								if(!is_array($con) && strpos($fie,"?")==false){//当てはめ?無しで且つ値での指定の場合
									if($num == count($condition)-1 && $conditions_count==$conditions_count_chk){//最後の要素
										$where .= $fie."=".(is_string($con)?"'".$con."'":$con)."\n";
									}else{//それ以外
										$where .= $fie."=".(is_string($con)?"'".$con."'":$con)." AND\n";
										$num++;
									}
								}elseif(is_array($con)){//配列指定の場合（当てはめ?必須）
									//$chgd = str_replace("?", "%s", $fie);
									$fie_arr = explode("?",$fie);
									$comp_str = "";
									for($i=0;$i<count($fie_arr);$i++){
										$comp_str .= $fie_arr[$i];
										if(isset($con[$i])){
											if(is_string($con[$i])){
												$comp_str .= "'".$con[$i]."'";
											}else{
												$comp_str .= $con[$i];
											}
										}
									}
									if($num == count($condition)-1 && $conditions_count==$conditions_count_chk){//最後の要素
										$where .= $comp_str."\n";
									}else{//それ以外
										$where .= $comp_str." AND\n";
										$num++;
									}
								}else{//当てはめ?に値を指定してある場合
									$chgd = str_replace("?", "%s", $fie);
									if($num == count($condition)-1 && $conditions_count==$conditions_count_chk){//最後の要素
										$where .= sprintf($chgd,(is_string($con)?"'".$con."'":$con))."\n";
									}else{//それ以外
										$where .= sprintf($chgd,(is_string($con)?"'".$con."'":$con))." AND\n";
										$num++;
									}
								}
							}
						}//
						if(!empty($order)){//orderがあれば
							//$sql .= "ORDER BY\n";
							$order_count++;
							$num = 0;
							foreach($order as $by => $jun){
								if($num == count($order)-1 && $order_count==$order_count_chk){//最後の要素
									$junnbann .= $by." ".$jun."\n";
								}else{//それ以外
									$junnbann .= $by." ".$jun.",\n";
								}
							}
						}//
						if(!empty($limit)){//limitがあれば
							//$sql .= "LIMIT {$limit}\n";
							$limit_count++;
							$seigenn = $limit;
						}
						$count++;
					}
					//最後に結合
					$sql = "SELECT\n";
					$sql .= $column;
					$sql .= "FROM\n";
					$sql .= FIRST_TABLE."\n";
					$sql .= $join;
					if($conditions_count!=0){
						$sql .= "WHERE\n";
						$sql .= $where;
					}
					if($order_count!=0){
						$sql .= "ORDER BY\n";
						$sql .= $junnbann;
					}
					if($limit_count!=0){
						$sql .= "LIMIT {$limit}\n";
						$sql .= $seigenn;
					}
					$sql .= ";";
				}
			}
		}
		return $sql;
	}

    function isHash(&$array) {
		$i = 0;
		foreach($array as $k => $dummy) {
			if ( $k !== $i++ ) return true;
		}
		return false;
	}
}

// end_class
?>