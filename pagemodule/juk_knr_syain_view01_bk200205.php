<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
require_once(LIBPATH.'address_test.php');
require_once(LIBPATH.'Chromephp.php');
require_once(LIBPATH.'excel_out02_spread.php');
//require('Spreadsheet/Excel/Writer.php');

//===========================================
// Search   class
//    パンフ検索  module
//===========================================
// echo  '<p>' .'search.php ' .date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
echo "<pre>". 'get ' ;
print_r($_GET);
echo "</pre>";

echo "<pre>". 'post ' ;
print_r($_POST);
echo "</pre>";
//echo "<pre>". 'session ' ;
//print_r($_SESSION);
//echo "</pre>";
class juk_knr_syain_view01   extends view {
 //$property
 //var $smarty;
  public $pub_rows00;
  public $pub_syn_view00;
  public $pub_client_id;
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
//
//===========================================
  function main() {
	  ChromePhp::log('Hello console');
	  ChromePhp::log('datatable');
//------------------------------------------
//  instance
//------------------------------------------
    $obj = new addressoperation;
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
//$ret = $obj ->table($key_array1);
//--------------------------------------------------
//t_uke
//--------------------------------------------------
$res0 = array();
$res1 = array();
$id_list = array();
$ary_00 = array();
$ary_syn_view = array();
$sqls ='';
//
switch ($key_array1[2]){
  case 'upl':
    //-------------------------------
    // t_syain_sun_wk02
    //-------------------------------
    $sqls='select a.* from t_syain_chk01 as a where a.client_id=? and a.q_id=? ';
    $res0 = $obj -> getlist02_01($sqls,$key_array1[0],$key_array1[1]);
    $ary_00 =$this -> sanitize($res0[RESDATA]);
    $id_list = explode(",", $ary_00[0][3]);
    //
    //$ret0=$obj->table($id_list);
    $sqls='';
    $sqls = 'select a.* FROM t_syain_sun_wk02 as a where a.syainno in (';
    $res1 =$obj->selectin01_01($sqls,$id_list);
    //$ret2 = $obj -> table($res1[RESDATA]);
    break;
  default:
    //-------------------------------
    // t_syain_sun
    //-------------------------------
    $sqls='select a.access_id,a.syainno,a.birth_md,a.license,a.filler4 as client_id,a.company_id from t_syain_sun as a where a.filler4=? order by a.syainno';
    $res1 = $obj  -> getlist01_01($sqls,$key_array1[0]);
    break;
}
$count=count($res1[RESDATA]);
$ary_syn_view =$this -> sanitize($res1[RESDATA]);
$ret1 = $this -> setChannel($ary_syn_view,'syn_view');
//
$this->pub_client_id =$key_array1[0];
// $this -> smarty -> assign('client_id', $key_array1[0]);
//-----------------------------------
//  データを取得
//-----------------------------------
// if (count($res_omt[RESDATA][0])> 0) {
if ($res1[RESFLAG] == TRUE) {
	if (count($res1[RESDATA])  != 0) {
		//echo 'count-->' . $count;
        $res= $this -> sanitize($res1[RESDATA]);
	 	$this->createform(NULL,$res);
	 } else {
		echo  '<p>' .'date exception => ' . $sql ."</p>\n";
		$this -> createform(NULL,NULL);
	 }  //end if
} else  {
	echo  '<p>' .'data invalid => ' . $sql ."</p>\n";
	$this -> createform(NULL,NULL);
}   // end if
   	     //
//-----------------------------------
//  excel out
//-----------------------------------
if (isset ($_POST['excel01'])) {
    $cls = new excel_out02_spread();
    $sf1 = $cls-> setChannel($res);
    //echo('sf--->'. $sf1);
    $pmh_select01= '実績データ_Download !';
  $this->smarty->assign('title',$pmh_select01);
  $this->smarty->assign('sf1',$sf1);
  $this->smarty->display('upd_check03.html');
  //------ shori log ----------
  //$IP = $_SERVER['REMOTE_ADDR'];
  //$ares = $obj -> upd_pmh_log01('PHP:Pamph_book:Search',$total_items,$sql,get_current_user(),
  //gethostbyaddr($IP),'Search',date("Y-m-d H:i:s"),'ins');
  exit();
} else {} // end if

$obj->dbend();
}  // end_function
 //===========================================
 // フォームの表示
 //===========================================
function createForm($form,$rows){
   $smarty = $this->getsmarty();
//HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
//$renderer = HTML_QuickForm2_Renderer::factory('smarty');
//$renderer->setOption(array('required_note' => "<em>*</em> 記入必須項目"));
//$renderer->setOption('old_compat', true);
//$renderer->setOption('group_errors', true);
// フォームの作成
//$FormData = $form->render($renderer)->toArray();
//$smarty->assign('form', $FormData);
    $smarty->assign('res',$rows);
//$smarty->assign('pagedata', $rows['data']);
    $smarty->left_delimiter = '!!-{';
    $smarty->right_delimiter = '}-!!';
  	$smarty->assign('ary_syn_view', $this->pub_syn_view00);
  	$smarty->assign('client_id', $this->pub_client_id);
//-----------------------------------------
//	連想配列-->配列  do not delete
//------------------------------------------
	for ($i = 0 ; $i < count($rows); $i++) {
	  $val_array1[]= array_values($rows[$i]);
	}
//-----------------------------------------------
//java用にencode  連想配列ではなく配列を渡すこと
//-----------------------------------------------
//$val_array2=  $this ->json_safe_encode($val_array0);
//$val_array2=  $this ->json_safe_encode($rows);
    $val_array2=  $this ->json_safe_encode($val_array1);
    $smarty->assign("data_json", $val_array2);
	$smarty->assign("se_user_id", $_SESSION[USER_ID]);
	$smarty->assign("se_picture", $_SESSION[PICTURE]);
	$smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
	$smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
	$smarty->display('juk_knr_syain_view01.html');
	}// FUNCTION

function json_safe_encode($data){
    return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
}
// end function
//------------------------------------------------------
//  配列に　htmlspecialcharsをかける
//------------------------------------------------------

//function h($str){
//    if(is_array($str)){
//	    return array_map($this->h,$str);
//    }else{
//        return htmlspecialchars($str,ENT_QUOTES,"UTF-8");
//    }
//}

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
	 case 'settei_inf':
	   $this->pub_settei_inf00 =$row01;
	   break;
	 case 'syn_view':
	   $this->pub_syn_view00 =$row01;
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