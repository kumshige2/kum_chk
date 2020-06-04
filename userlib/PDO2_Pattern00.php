<html>
<head><title>PHP TEST</title></head>
<body>
<?php
require_once('pdo2.class.php');
require_once('pdostatement2.class.php');
require_once('layout_db.php');
require_once('config.php');
//print 'mysql:dbname=DBNAME;host=DBSERVER';

//$dns = "mysql:host=localhost; dbname=pamphlet;charset=utf8";
//---- mysql ------------------------------------------------------------
 $dsn = 'mysql:dbname=' . DBNAME . ';host=' . DBSERVER . ';charset=utf8' ; 
//-----------------------------------------------------------------------
//
//---- Postgresql  ------------------------------------------------------------
 $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
//----------------------------------------------------------------------------- 
//
 $fruits = array('りんご','みかん','バナナ');
try{
    $pdo_my_num = NULL;
	$pdo_my_aso = NULL;
	$pdo_ps_num = NULL;
	$pdo_ps_aso = NULL;
	//mysql 
	//$pdo_my_aso = new PDO2($dsn,  DBUSER, DBPASSWORD,array(0));                 //mysql  assoc
	//$pdo_my_num = new PDO2_1($dsn,  DBUSER, DBPASSWORD,array(0));             //mysql  num
    //postgresql
	$pdo_ps_aso = new PDO3($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);                //postgresql assoc
	$pdo_ps_num = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);              //postgresql num
	//print('Connection ok:');

	//----------------------------
	// pattern 00 
	//----------------------------
	$sql = 'SELECT * from t_users ';
    $stmt = $pdo_my_num->prepare($sql)
              ->execute()
              ->fetchAll();
	echo '--------- pattern-00 ---------';
	//var_dump ($stmt);
	foreach ($stmt as $row) {
        //vprintf("\n名前: %s\n性別: %s\n", $person);
		//echo '<p>' . htmlspecialchars($row['user_id']) . ':' . htmlspecialchars($row['username']) . "</p>\n";
		echo '<p>' . htmlspecialchars($row[0]) . ':' . htmlspecialchars($row[1]) . "</p>\n";
    }	  
	//----------------------------
	// pattern1 
	//----------------------------
	$sql = 'SELECT * from t_users WHERE user_id = ? and username = ? ';
    $stmt = $pdo_my_aso->prepare($sql)
              ->bind(0, '3000895')
              ->bind(1,  '田口　哲')
              ->execute()
              ->fetchAll();
	echo '--------- pattern-1 ---------';
	var_dump ($stmt);
	foreach ($stmt as $row) {
        //vprintf("\n名前: %s\n性別: %s\n", $person);
		echo '<p>' . htmlspecialchars($row['user_id']) . ':' . htmlspecialchars($row['username']) . "</p>\n";
		echo '<p>' . htmlspecialchars($stmt[0][0]) . ':' . htmlspecialchars($stmt[0][1]) . "</p>\n";
    }	
	//  
	//----------------------------
	//pattern2 
	//----------------------------
	$sql = 'SELECT * from t_users WHERE user_id = :user_id and username like :username';
    $stmt2 = $pdo_my_aso->prepare($sql)
              ->bind('user_id', '3000895')
              ->bind('username','田口　哲', 'L')
              ->execute()
              ->fetchAll();
	echo '--------- pattern-2 ---------';
	var_dump ($stmt2);
	foreach ($stmt2 as $row) {
        //vprintf("\n名前: %s\n性別: %s\n", $person);
		echo '<p>' . htmlspecialchars($row['user_id']) . ':' . htmlspecialchars($row['username']) . "</p>\n";
    }
	//----------------------------
	//pattern3
	//----------------------------
	$sql = 'SELECT * from t_users WHERE user_id = ? and username = ? ';
    $stmt3 = $pdo_my_aso->prepare($sql)
              ->bindAll(array('3000895', '田口　哲'), 's,s')
              ->execute()
              ->fetchAll();	
	echo '--------- pattern-3 ---------';
	var_dump ($stmt3);
	foreach ($stmt3 as $row) {
        //vprintf("\n名前: %s\n性別: %s\n", $person);
		echo '<p>' . htmlspecialchars($row['user_id']) . ':' . htmlspecialchars($row['username']) . "</p>\n";
    }
	//----------------------------
	//pattern4
	//----------------------------
	$sql = 'SELECT * from t_users WHERE user_id = ? and username = ? ';
    $stmt4 = $pdo_my_aso->prepare($sql)
              ->bindAll(array('3000895', '田口　哲'), '1=s,2=s')
              ->execute()
              ->fetchAll();
	echo '--------- pattern-4 ---------';
	var_dump ($stmt4);
	foreach ($stmt4 as $row) {
        //vprintf("\n名前: %s\n性別: %s\n", $person);
		echo '<p>' . htmlspecialchars($row['user_id']) . ':' . htmlspecialchars($row['username']) . "</p>\n";
    }
	//----------------------------
	//pattern5
	//----------------------------
	$user_id ='3000895'; 
	$username = '田口　哲';
	$sql = 'SELECT * from t_users WHERE user_id = :user_id and username like :username';
    $stmt5 = $pdo_my_aso->prepare($sql)
              ->bindAll(array('user_id' => $user_id, 'username' => $username), 'user_id=s,username=s')
              ->execute()
              ->fetchAll();
	$sql = 'SELECT * from t_users WHERE user_id = ? and username = ? ';
   
	echo '--------- pattern-5 ---------';
	var_dump ($stmt5);
	foreach ($stmt5 as $row) {
        //vprintf("\n名前: %s\n性別: %s\n", $person);
		echo '<p>' . htmlspecialchars($row['user_id']) . ':' . htmlspecialchars($row['username']) . "</p>\n";
    }
	//----------------------------
	//pattern6
	//----------------------------
	$sql = 'SELECT * from t_users WHERE user_id = :user_id and username like :username';
    $stmt6 = $pdo_my_aso->prepare($sql)
              ->bindAll(
                  array('user_id' => $user_id, 'username' => $username),
                  array('user_id' => 's',  'username' => 's'     )
                )
              ->execute()
              ->fetchAll();
	echo '--------- pattern-6 ---------';
	var_dump ($stmt6);
	foreach ($stmt6 as $row) {
        //vprintf("\n名前: %s\n性別: %s\n", $person);
		
		echo '<p>' . htmlspecialchars($row['user_id']) . ':' . htmlspecialchars($row['username']) . "</p>\n";
    }
	//----------------------------
	//pattern6-1
	//----------------------------
	echo '--------- pattern-6-1 ---------'	;
	echo '<br>';
	$fruits_str = Fruits::getName();
	var_dump ($fruits_str);
	foreach($fruits_str as $value){
      echo $value;
     echo '<br>';
    }
	//----------------------------
	//pattern6-2
	//----------------------------
	$sql = 'SELECT * from t_saying WHERE s_id = :s_id';
    $stmt6_2 = $pdo_my_aso->prepare($sql)
              ->bindAll(
                  array('s_id' => 140),
                  array('user_id' => 'i'   )
                )
              ->execute()
              ->fetchAll();
	echo '--------- pattern-6-2 ---------';
	var_dump ($stmt6_2);
	foreach ($stmt6_2 as $row) {
        //vprintf("\n名前: %s\n性別: %s\n", $person);
		
		echo '<p>' . htmlspecialchars($row['s_id']) . ':' . htmlspecialchars($row['deccription']) . "</p>\n";
    }

	//----------------------------
	//pattern6-3  insert  postgresql 
	//----------------------------
	$pdo_ps_aso->beginTransaction();
	$sql ='';
	$sql = $sql .  'insert into t_saying (s_id,title,links,deccription,sources,category) ' ;
	$sql = $sql  .  ' values (:s_id,:title,:links,:deccription,:sources,:category ); ';
	//echo $sql ;
    
	$stmt6_4 = $pdo_ps_aso->prepare($sql)
              ->bindAll(
                  array('s_id' => 179, 'title' => '','links' => '','deccription' => 'チャンスは貯蓄できない','sources' => '樋口　廣太郎','category' => '') ,
                  array('s_id' => 'i','title' => 's', 'links' => 's' ,'deccription' => 's', 'sources' => 's', 'category' => 's' )
                )
              ->execute()
              ->fetchAll();	
	echo '--------- pattern-6-3 ---------  '. "</p>\n";
	//----------------------------
	//pattern6-4 insert  postgresql
	//----------------------------
		
	$sql =''	;	  
	$sql =  'insert into t_saying (s_id,title,links,deccription,sources,category) ' ;
	$sql = $sql  .  ' values (:s_id,:title,:links,:deccription,:sources,:category ) ;';
		//echo $sql ;
    $stmt6_4 = $pdo_ps_aso->prepare($sql)
              ->bindAll(
                  array('s_id' => 180, 'title' => '','links' => '','deccription' => 'チャンスは貯蓄できない','sources' => '樋口　廣太郎','category' => '') ,
                  array('s_id' => 'i','title' => 's', 'links' => 's' ,'deccription' => 's', 'sources' => 's', 'category' => 's' )
                )
              ->execute()
              ->fetchAll();
	//$pdo3->commit();
	$pdo_ps_aso->rollback();
	
	echo '--------- pattern-6-4 ---------  '. "</p>\n";
	//----------------------------
	//pattern6-5  insert  mysql 
	//----------------------------
	
	$pdo_my_aso->beginTransaction();
	$sql ='';
	$sql =  'insert into t_saying (s_id,title,links,deccription,sources,category) ' ;
	$sql = $sql  . ' values (:s_id,:title,:links,:deccription,:sources,:category ); ';
	//echo $sql ;
    
	$stmt6_5 = $pdo_my_aso->prepare($sql)
              ->bindAll(
                  array('s_id' => 179, 'title' => '','links' => '','deccription' => 'チャンスは貯蓄できない','sources' => '樋口　廣太郎','category' => '') ,
                  array('s_id' => 'i','title' => 's', 'links' => 's' ,'deccription' => 's', 'sources' => 's', 'category' => 's' )
                )
             
			  ->execute()
              ->fetchAll();	
	        
	echo '--------- pattern-6-5 ---------  '. "</p>\n";
	//$stmt6_5->closeCursor();
	//----------------------------
	//pattern6-6 insert  mysql
	//----------------------------
		
	$sql ='';	  
	$sql =  'insert into t_saying (s_id,title,links,deccription,sources,category) ' ;
	$sql = $sql  .  ' values (:s_id,:title,:links,:deccription,:sources,:category ) ;';
		//echo $sql ;
    $stmt6_5 = $pdo_my_aso->prepare($sql)
              ->bindAll(
                  array('s_id' => 180, 'title' => '','links' => '','deccription' => 'チャンスは貯蓄できない','sources' => '樋口　廣太郎','category' => '') ,
                  array('s_id' => 'i','title' => 's', 'links' => 's' ,'deccription' => 's', 'sources' => 's', 'category' => 's' )
                )
              ->execute()
              ->fetchAll();
			    
	//
	//$pdo_my->commit();
	$pdo_my_aso->rollback();	
	echo '--------- pattern-6-6 ---------  '. "</p>\n";
	
	
	//----------------------------
	//pattern7
	//----------------------------
	$sql ='';
	$sql = 'SELECT * from t_users WHERE user_id = :user_id and username like :username';
    $stmt7 = $pdo_my_aso->prepare($sql,array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true))
              ->bindAll(
                  array('user_id' => $user_id, 'username' => $username),
                  array('age' => PDO::PARAM_STR, 'address' => PDO2::PARAM_STR)
                )
              ->execute()
              ->fetchAll();
	echo '--------- pattern-7 ---------';
	var_dump ($stmt7);
	foreach ($stmt7 as $row) {
        //vprintf("\n名前: %s\n性別: %s\n", $person);
		echo '<p>' . htmlspecialchars($row['user_id']) . ':' . htmlspecialchars($row['username']) . "</p>\n";
    }
	//----------------------------
	//pattern4-1
	//----------------------------
	$sql = 'SELECT * from t_insatu_kgo WHERE insatu_kgo_cd = ? ';
    $stmt4_1 = $pdo_ps_num->prepare($sql)
              ->bindAll(array('009'), '1=s')
              ->execute()
              ->fetchAll();
	echo '--------- pattern-4-1 ---------';
	var_dump ($stmt4_1);
	foreach ($stmt4_1 as $row) {
        //vprintf("\n名前: %s\n性別: %s\n", $person);
		echo '<p>' . htmlspecialchars($row[0]) . ':' . htmlspecialchars($row[1]) . "</p>\n";
    }
	//----------------------------
	//mb_encoding_check  
	//----------------------------
	echo '--------- mb_cncoding check  ---------';
	echo '<br>';
	foreach ($fruits as $value) {
        if (is_array($value)) { $value = implode('',$value);}
		if (!mb_check_encoding($value)) {
		     echo 'error encoding';
			 break;
		} else {
		      echo 'encoding ok  :' . $value;
		      echo '<br>';
		}
		
    }		  	  
}catch (PDOException $e){
    print('Connection failed:'.$e->getMessage());
    die();
}
$pdo = null;


?>
 
</body>
</html>

 