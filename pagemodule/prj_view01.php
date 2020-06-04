<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
require_once(LIBPATH.'address_test.php');
require_once(LIBPATH.'Chromephp.php');

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
class prj_view01   extends view {
 //$property
 //var $smarty;
  public $pub_rows00;
  public $pub_crs_view00;
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
	  ChromePhp::log('prj_view01');
//------------------------------------------
//  instance
//------------------------------------------
    $obj = new addressoperation;
//--------------------------------------------------
//t_uke
//--------------------------------------------------
$res1 = array();
$ary_crs_view = array();
$strsql="";
$strsql="SELECT
    a.*,
    b.client_nm,
    cast(xxx_ymd as date) - cast(now() as date) as sa,
    CASE
      WHEN cast(xxx_ymd as date) - cast(now() as date)   < 0  THEN 'badge bg-gray'
      WHEN cast(xxx_ymd as date) - cast(now() as date)   >=0 and cast(xxx_ymd as date) - cast(now() as date) <=2 THEN 'badge bg-red'
      WHEN cast(xxx_ymd as date) - cast(now() as date)   >=3 and cast(xxx_ymd as date) - cast(now() as date) <=7 THEN 'badge bg-yellow'
      WHEN cast(xxx_ymd as date) - cast(now() as date)   >=8  THEN 'badge bg-blue'
      ELSE 'badge bg-blue' end
    FROM t_prj01 as a left join t_client_id as b on a.id = b.client_id
    ORDER BY a.id,xxx_ymd asc";

//$res1 = $obj  -> getlist01('select a.*,b.client_nm,cast(xxx_ymd as date) - cast(now() as date) as sa  from t_prj01 as a left join t_client_id as b on a.id = b.client_id order by a.sts,a.id,xxx_ymd desc');
$res1 = $obj  -> getlist01($strsql);
//var_dump ($res1[RESDATA]);
$count=count($res1[RESDATA]);
$ary_crs_view =$this -> sanitize($res1[RESDATA]);
$ret1 = $this -> setChannel($ary_crs_view,'prj_view');
//-----------------------------------
//  データを取得
//-----------------------------------
if ($res1[RESFLAG] == TRUE) {
	if (count($res1[RESDATA])  != 0) {
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
  	$smarty->assign('ary_crs_view', $this->pub_crs_view00);
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
	$smarty->display('prj_view01.html');
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
	 case 'prj_view':
	   $this->pub_crs_view00 =$row01;
	   break;
	 case 'pmh_sub':
	   $this->pub_pmh_sub00 =$row01;
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