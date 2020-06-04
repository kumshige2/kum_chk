<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
require '../../vendor/autoload.php';
require_once(LIBPATH.'address.php');
require_once(LIBPATH.'Chromephp.php');
//===========================================
// kum_check02   class
//    recent sql check  module
//===========================================
//echo "<pre>". 'get ' ;
//print_r($_GET);
//echo "</pre>";
//
//echo "<pre>". 'post ' ;
//print_r($_POST);
//echo "</pre>";
//echo "<pre>". 'session ' ;
//print_r($_SESSION);
//echo "</pre>";
class kum_check02   extends view {
 //$property
 //var $smarty;
	public $pub_test01;
	public $pub_real01;
	public $pub_ndo;
  public $pub_usename;
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
  function main() {
  	ChromePhp::log('Hello console');
  	ChromePhp::log('kum_check02');
	//------------------------------------------
	//  instance
	//------------------------------------------
    $form = new HTML_Quickform2('qform_smarty','POST',array('action' => 'index.php?module=kum_check02'));
    if (isset($_POST['send1']) ) {
		   //一覧
      $this->_redirect('post_check01');
    };
    if (isset($_POST['send2']) ) {
		   //一覧
      $this->_redirect('post_check01');
    };
	//------------------------------------
	//ボタン 要素の追加
	//------------------------------------
	//  $buttongroup = $form->addElement('group','buttons');
	//  $buttongroup ->addElement('submit','detail_c',array('style' => 'border:0px;background-color:#eeeeee;cursor:pointer;width:100px;','value'=>'edit'));
	  //$form->addRecursiveFilter('trim');
	  //-------------------------------------------
	  //フォームの出力or入力後処理
	  //-------------------------------------------

    $obj = new addressoperation;
	//------------------------------------------
	//  年度計算
	//------------------------------------------

    $year = date('Y');
    $month = date('m');
    $this_ndo = $obj ->get_financial_year($year, $month, 3);
    $last_ndo = intval($this_ndo) - 1;
    $next_ndo = intval($this_ndo) + 1;
    $this_ndo_1 = intval($this_ndo) - 1;
    $this_ndo_2 = intval($this_ndo) - 2;
    $this_ndo_3 = intval($this_ndo) - 3;
    $this_ndo_4 = intval($this_ndo) - 4;
    $this_ndo_5 = intval($this_ndo) - 5;
    $ndo_ary=array($next_ndo,$this_ndo,$this_ndo_1,$this_ndo_2,$this_ndo_3,$this_ndo_4,$this_ndo_5);
    $ret1 = $this -> setChannel($ndo_ary,'ndo');
  //---------------------------------------------
  //  Post key check
  //---------------------------------------------
    $key_array0 = array();
    $key_array1 = array();
    if (empty($_POST['KEY'])) {
      $key_array0 = explode(",",$_GET['id']);
      $key_array0 = array_filter($key_array0,'strlen');
      $key_array1 = array_map('trim',explode(',',$_GET['id']));
    } else {
      $key_array0 = explode(",",$_POST['KEY']);
      $key_array0 = array_filter($key_array0,'strlen');
      $key_array1 = array_map('trim',explode(',',$_POST['KEY']));
    }
    $key_ym= $obj->h(strval(substr($key_array1[0],2,2).$key_array1[1]));
    $key_bsy = $obj ->h($key_array1[2]);
    ChromePhp::log('keijo_ym-->' . $key_ym .  ': bsy-->' .$key_bsy);
	// $res2= $obj -> table($key_array1);
//--------------------------------------------------
//Postgresql activity check
//--------------------------------------------------
  //snno3_test
    $res0 = array();
    //$ary_pmh_sub = array();
    $result =array();
    $sqls ='';
    $sqls ="select datname,pid,usename,client_addr,backend_start,query from pg_stat_activity where datname = '". DBNAME_TEST_PQ ."'";
    $res0 = $obj -> getlist01_x1($sqls,DBNAME_TEST_PQ,DBSERVER_PQ);
    //$tt0 = $obj ->table($res0[RESDATA]);
    if (count($res0[RESDATA]) === 0) {
    } else {
      $result = array_merge($result,$res0[RESDATA]);
      $ip   = $result[0][3];
      $host = gethostbyaddr($ip);
      $result[0][6] = ($host);
    }
    $res1 = array();
    //$sqls ='';
    //$sqls ="select datname,pid,usename,client_addr,backend_start,query from pg_stat_activity where datname = '". DBNAME_TEST_PQ ."'";
    //$res1 = $obj -> getlist01_x1($sqls,DBNAME_TEST_PQ,DBSERVER_PQ_X1);
    //$tt1 = $obj ->table($res1[RESDATA]);
    //if (count($res1[RESDATA]) === 0) {
    //} else {
    //  $result = array_merge($result,$res1[RESDATA]);
    //  $ip   = $result[1][3];
    //  $host = gethostbyaddr($ip);
    //  $result[1][6] = ($host);
   // }
//Pamphlet
    $res3 = array();
    $sqls ='';
    $sqls ="select datname,pid,usename,client_addr,backend_start,query from pg_stat_activity where datname = '". DBNAME_PQ ."'";
    $res3 = $obj -> getlist01_x1($sqls,DBNAME_PQ,DBSERVER_PQ);
    //$tt3 = $obj ->table($res3[RESDATA]);
    if (count($res3[RESDATA]) === 0) {
    } else {
      $result = array_merge($result, $res3[RESDATA]);
      $ip   = $result[2][3];
      $host = gethostbyaddr($ip);
      $result[2][6] = ($host);
    }
    $res4 = array();
    //$sqls ='';
    //$sqls ="select datname,pid,usename,client_addr,backend_start,query from pg_stat_activity where datname = '". DBNAME_PQ ."'";
    //$res4 = $obj -> getlist01_x1($sqls,DBNAME_PQ,DBSERVER_PQ_X1);
    //$tt4 = $obj ->table($res4[RESDATA]);
    //if (count($res4[RESDATA]) === 0) {
    //} else {
    //  $result = array_merge($result, $res4[RESDATA]);
    //  $ip   = $result[3][3];
    //  $host = gethostbyaddr($ip);
    //  $result[3][6] = ($host);
    //}
    //$tt5 = $obj ->table($result);
    $ret1 = $this -> setChannel($this ->sanitize($result),'snno3_user');
//
    $this->createForm($form);
    $obj->dbend();
}  // end_function
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
  $smarty->assign('result',$this->pub_usename);
  //$smarty->assign('real_user',$this->pub_real_user);
	//$smarty->assign('ndo_ary',$this->pub_ndo);
					//print_r($this->pub_wk03);
  $smarty->left_delimiter = '!!-{';
  $smarty->right_delimiter = '}-!!';
//
	//-----------------------------------------
	//	連想配列-->配列  do not delete
	//------------------------------------------
	//for ($i = 0 ; $i < count($this->pub_ndo); $i++) {
	//  $val_array1[]= array_values($this->pub_ndo[$i]);
	//}
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
  $smarty->assign("se_user_id", $_SESSION[USER_ID]);
  $smarty->assign("se_picture", $_SESSION[PICTURE]);
  $smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
  $smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
	//$smarty->display('download01_01.html');
  $smarty->display('kum_check02.html');


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
function setChannel($row01,$sw){
  switch ($sw) {
   case 'snno3_test':
   $this->pub_test01 =$row01;
   break;
   case 'pamphlet':
   $this->pub_real01 =$row01;
   break;
   case 'snno3_user':
   $this->pub_usename =$row01;
   break;
   case 'wk13':
   $this->pub_wk13 =$row01;
   break;
   case 'ndo':
   $this->pub_ndo =$row01;
   break;
   case 'nko_view':
   $this->pub_nko_view00 =$row01;
   break;
   default:
   break;
 }
	//var_dump ('rows01=>' . $row01);
   //$sf2 = $this->dispChannel();
   //return $sf2;
  } // end function
//--------------------------------
//
//----------------------------------

} // end_class

?>