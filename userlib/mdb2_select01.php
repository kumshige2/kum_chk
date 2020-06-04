<?php
header ('Content-Type: text/html; charset=UTF-8');
//session_start();
 require('model_base.php');
 require('encode.php');
//------------------------------------------------------ 
 // Conncet to Mysql
 //------------------------------------------------------ 
   $host = 'localhost';
   $user = 'kumkum_shi';
   $pass = 'u01654';
   $db='pamphlet';
   $conn = new DB($host,$user,$pass,$db);
   
//-------------------------------
// sql 1
//-------------------------------
    $wk_id = '3000959';
	$sql=sprintf('select * from t_users where user_id =%d',
	               $wk_id     
	);
	
	//
	$result =  $conn->fetch($sql);
	echo '<---- t_user ---->';
	  foreach ($result as $row2) {
        echo '<p>' . e($row2['user_id']) . ':' . e($row2['username']) . "</p>\n";
     }
	  foreach ($result as $row) {
         $member = array($row['user_id'],$row['username_k'],$row['username'],$row['password']); 
     }
	  echo '<p>';
	  print_r($member);
	  echo '</br>';
	  echo $member[2];
	  echo '</br>';
	  echo $row['username'];
	  echo '</p> ';
	  echo '</br>';
	  echo  'data count='  . count($result); 
      $conn = null;
?>
