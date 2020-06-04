<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
require '../../vendor/autoload.php';
require_once(LIBPATH.'address_test.php');
require_once(LIBPATH.'Chromephp.php');
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
class menu01   extends view {
 //property
 //var $smarty;
  //==========================================
  //  constructor
  //===========================================
	function __construct() {
		$this->smarty = parent::__construct();
  }  // end_construct
  //===========================================
  //  pamph 一覧表示
  //===========================================
 function main() {
	$obj = new addressoperation;
//-------------------------------------------
//  Post Get Session
//-------------------------------------------
	$key_array1 =$obj ->postget01();
	//$ret = $obj ->table($key_array1);
//------------------------------------------
//  年度計算
//------------------------------------------
	$year = date('Y');
    $month = date('m');
    $this_ndo = $obj ->get_financial_year($year, $month, 4);
    $last_ndo = intval($this_ndo) - 1;
	$next_ndo = intval($this_ndo) + 1;
	$this_ndo_1 = intval($this_ndo) - 1;
	$this_ndo_2 = intval($this_ndo) - 2;
	$this_ndo_3 = intval($this_ndo) - 3;
	$this_ndo_4 = intval($this_ndo) - 4;
	$this_ndo_5 = intval($this_ndo) - 5;
	$ndo_ary=array($next_ndo,$this_ndo,$this_ndo_1,$this_ndo_2,$this_ndo_3,$this_ndo_4,$this_ndo_5);
	$ret1 = $this -> setChannel($ndo_ary,'ndo');

//------------------------------------------------------
//振り分け
//------------------------------------------------------
    if (isset($_POST[P_DW01]) ) {
       //一覧
      $this->_redirect(P_DW01);
    };
    if (isset($_POST["user_md5"]) ) {
       //一覧
      $this->_redirect("user_md5");
    };
    if (isset($_POST["uke_view01"]) ) {
       //一覧
      $this->_redirect("uke_view01");
    };
    if (isset($_POST["data_layout_view01"]) ) {
       //一覧
      $this->_redirect("data_layout_view01");
    };
    if($_SESSION[USER_ID]= "P_JACO") {
      if (isset($_POST[P_KUMA00]) ) {
         $this->_redirect(P_KUMA00);
       }
    };
    if (isset($_POST["prj_view01"]) ) {
       //一覧
      $this->_redirect("prj_view01");
    };
     if (isset($_POST["juk_knr_view01"]) ) {
       //一覧
      $this->_redirect("juk_knr_view01");
    };
    $this -> createform(NULL,NULL);
  } // end_fucntion
//===========================================
 // フォームの表示
 //===========================================
	function createForm($form,$rows){
        //$smarty = $this->getsmarty();
		//HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
		//$renderer = HTML_QuickForm2_Renderer::factory('smarty');
		//$renderer->setOption('old_compat', true);
		//$renderer->setOption('group_errors', true);

		// フォームの作成
		//$FormData = $form->render($renderer)->toArray();
		//$smarty->assign('form', $FormData);
        //$smarty->assign('res',$rows);
		//$smarty->assign('pagedata', $rows['data']);
		$this ->smarty->left_delimiter = '!!-{';
		$this ->smarty->right_delimiter = '}-!!';
        //
		//var_dump ($val_array12);
		//$smarty->assign("konma", ",");
		//var_dump($this->pub_bsy00);
		//$smarty->assign("ary_bsy", $this->pub_bsy00);
		//$smarty->assign("ary_pmh_type", $this->pub_pmh_type00);
		//$smarty->assign("ary_pmh_sub",  $this->pub_pmh_sub00);
		$this ->smarty->assign("ndo", $this->pub_ndo);
		$this ->smarty->assign("se_user_id", $_SESSION[USER_ID]);
		$this ->smarty->assign("se_picture", $_SESSION[PICTURE]);
		$this ->smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
		$this ->smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
		$xxx_html = 'menu01.html';
		$this ->smarty->display($xxx_html);
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
	 case 'wk03':
	   $this->pub_wk03 =$row01;
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
} // end_class
?>