<?php
require '../../vendor/autoload.php';
require_once(LIBPATH.'address.php');
require_once(LIBPATH.'Chromephp.php');
require_once(LIBPATH.'pdo2.class.php');
require_once(LIBPATH.'pdostatement2.class.php');
require_once(LIBPATH.'layout_db.php');
require_once(LIBPATH.'config.php');
//require_once(LIBPATH.'dw_sheet01.php');
//require('Spreadsheet/Excel/Writer.php');
//===========================================
// Search   class
//    パンフ検索  module
//===========================================
// echo  '<p>' .'search.php ' .date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
//echo "<pre>". 'get ' ;
//print_r($_GET);
//echo "</pre>";
//echo "<pre>". 'post ' ;
//print_r($_POST);
//echo "</pre>";
//echo "<pre>". 'session ' ;
//print_r($_SESSION);
//echo "</pre>";
class pdo2_pattern01 extends view {
//$property
var $smarty;
//	public $pub_wk03;
	public $pub_pas;
	public $pub_ndo;
//==========================================
//  constructor
//===========================================
function __construct() {
//------------------------------------------
// smarty instance
//------------------------------------------
	$this->smarty = parent::__construct();
	// $cls = new excel_00();
}   // end__construct

//===========================================
//  pamph 一覧情報取得
//===========================================
function main()
{
	$obj = new addressoperation;
	ChromePhp::log('Hello console');
	ChromePhp::log('pdo_pattrn01');
  //------------------------------------------
  //  年度計算
  //------------------------------------------
	$year = date('Y');
	$month = date('m');
	$this_ndo = intval($obj ->get_financial_year($year, $month, 3));
	$last_ndo = intval($this_ndo) - 1;
	$next_ndo = intval($this_ndo) + 1;
	$this_ndo_1 = intval($this_ndo) - 1;
	$this_ndo_2 = intval($this_ndo) - 2;
	$this_ndo_3 = intval($this_ndo) - 3;
	$this_ndo_4 = intval($this_ndo) - 4;
	$this_ndo_5 = intval($this_ndo) - 5;

	$ndo_ary=array($next_ndo,$this_ndo,$this_ndo_1,$this_ndo_2,$this_ndo_3,$this_ndo_4,$this_ndo_5);
	//$ret1 = $this -> setChannel($ndo_ary,'ndo');
	// echo 'ndo--->' .  $this_ndo;
//-------------------------------------------------
//  Pdo pattern
//-------------------------------------------------
	if (isset($_POST['send1'])) {
  		$this->_redirect('PDO2_Pattern01');
  	};
//------------------------------------------
//  instance
//------------------------------------------
$form = new HTML_Quickform2('qform_smarty','POST',array('action' => 'index.php?module=pdo2_pattern01'));
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
    //$pdo_my_num = NULL;
	//$pdo_my_aso = NULL;
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
    $stmt = $pdo_ps_num->prepare($sql)
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
    $stmt = $pdo_ps_aso->prepare($sql)
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
    $stmt2 = $pdo_ps_aso->prepare($sql)
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
    $stmt3 = $pdo_ps_aso->prepare($sql)
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
    $stmt4 = $pdo_ps_aso->prepare($sql)
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
    $stmt5 = $pdo_ps_aso->prepare($sql)
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
    $stmt6 = $pdo_ps_aso->prepare($sql)
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
    $stmt6_2 = $pdo_ps_aso->prepare($sql)
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
	$pdo_ps_aso->beginTransaction();
	$sql ='';
	$sql =  'insert into t_saying (s_id,title,links,deccription,sources,category) ' ;
	$sql = $sql  . ' values (:s_id,:title,:links,:deccription,:sources,:category ); ';
	//echo $sql ;
	$stmt6_5 = $pdo_ps_aso->prepare($sql)
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
    $stmt6_5 = $pdo_ps_aso->prepare($sql)
              ->bindAll(
                  array('s_id' => 180, 'title' => '','links' => '','deccription' => 'チャンスは貯蓄できない','sources' => '樋口　廣太郎','category' => '') ,
                  array('s_id' => 'i','title' => 's', 'links' => 's' ,'deccription' => 's', 'sources' => 's', 'category' => 's' )
                )
              ->execute()
              ->fetchAll();
	//
	//$pdo_my->commit();
	$pdo_ps_aso->rollback();
	echo '--------- pattern-6-6 ---------  '. "</p>\n";
	//----------------------------
	//pattern7
	//----------------------------
	$sql ='';
	$sql = 'SELECT * from t_users WHERE user_id = :user_id and username like :username';
    $stmt7 = $pdo_ps_aso->prepare($sql,array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true))
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
    //----------------------------
    // pattern8
    //----------------------------
    $sql = 'SELECT * from t_tbl_sub01 limit 1';
    $select = $pdo_ps_num->query($sql);
    $total_column = $select->columnCount();
    //var_dump($total_column);

    for ($counter = 0; $counter < $total_column; $counter ++) {
      $meta = $select->getColumnMeta($counter);
      $column[] = $meta['name'];
    }
    print_r($column[0]);


}catch (PDOException $e){
    print('Connection failed:'.$e->getMessage());
    die();
}
$pdo = null;
$this->createForm($form);
//$obj->dbend();
}// FUNCTION
//===========================================
// フォームの表示
//===========================================
function createForm($form){
	$smarty = $this->getsmarty();
	HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
	$renderer = HTML_QuickForm2_Renderer::factory('smarty');
					//$renderer->setOption(array('required_note' => "<em>*</em> 記入必須項目"));
	$renderer->setOption('old_compat', true);
	$renderer->setOption('group_errors', true);

	// フォームの作成
	$FormData = $form->render($renderer)->toArray();
	$smarty->assign('form', $FormData);

	//$smarty->assign('res',$rows);
	//$smarty->assign('wk03',$this->pub_wk03);
	//$smarty->assign('wk13',$this->pub_wk13);
	//$smarty->assign('ndo_ary',$this->pub_ndo);
	//$smarty->assign('pas_ary',$this->pub_pas);
					//print_r($this->pub_wk03);
	$smarty->left_delimiter = '!!-{';
	$smarty->right_delimiter = '}-!!';

	//-----------------------------------------
	//	連想配列-->配列  do not delete
	//------------------------------------------
	//
	//$val_array2=array();
	//$val_array2=  $this ->json_safe_encode($this->pub_ndo);
				    //print_r($val_array2);
	//$smarty->assign("ndo", $val_array2);
	//$val_array2=array();
	//$val_array2=  $this ->json_safe_encode($this->pub_wk03);
	//$smarty->assign("json_wk03", $val_array2);
	//$val_array2=array();
	//$val_array2=  $this ->json_safe_encode($this->pub_wk13);
	//$smarty->assign("json_wk13", $val_array2);
	//-----------------------------------------------
	// nendo
	//-----------------------------------------------
	//-----------------------------------------------
	//java用にencode  連想配列ではなく配列を渡すこと
    //-----------------------------------------------
	//$val_array2=  $this ->json_safe_encode($val_array0);
	//$val_array2=  $this ->json_safe_encode($rows);
	//$val_array2=  $this ->json_safe_encode($val_array1);
	//$smarty->assign("ndo", $val_array2);
	$smarty->assign("sql", $strsql);
	$smarty->assign("se_user_id", $_SESSION[USER_ID]);
	$smarty->assign("se_picture", $_SESSION[PICTURE]);
	$smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
	$smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
	//$smarty->display('download01_01.html');
	$smarty->display('pdo2_pattern01.html');


}// FUNCTION
function json_safe_encode($data){
		return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
}
// end function
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
function setChannel($row01,$sw){
		switch ($sw) {
			case 'wk03':
			$this->pub_wk03 =$row01;
			break;
			case 'pas':
			$this->pub_pas =$row01;
			break;
			case 'ndo':
			$this->pub_ndo =$row01;
			break;
			default:
			break;
		}
				//var_dump ('rows01=>' . $row01);
			   //$sf2 = $this->dispChannel();
			   //return $sf2;
} // end function

// end function


} // end_class
?>