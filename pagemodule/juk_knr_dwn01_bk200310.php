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
class juk_knr_dwn01   extends view {
 //$property
 var $smarty;
  public $pub_wk03;
  public $pub_wk13;
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
  //  pamph 一覧情報/取得
  //===========================================
function main() {
$obj = new addressoperation;
$key_array1 =$obj ->postget01();
	ChromePhp::log('Hello console');
	ChromePhp::log('juk_knr_upl01');
$cnt_ary=count($key_array1);
  switch ($cnt_ary) {
    case 0:
      $key_array1[1]=$_SESSION[ACCESSID];
      $key_array1[0]=$_SESSION[CLIENTID];
      $key_array1[2]=$_SESSION[CLIENTNM];
      //$key_array1[3]=$_POST['sts_c'];
      //$key_array1[4]=$_POST['q_id_c'];
      break;
    default:
      break;
  }
if (isset($key_array1[3])) {
    $sts=$key_array1[3];
  } else {
    $sts=NULL;
  }
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
	$ret1 = $this -> setChannel($ndo_ary,'ndo');
	// echo 'ndo--->' .  $this_ndo;
//---------------------------------------------
  //  Post key check
  //  $_POST['KEY']  通常表示
  //  $_POST['id']   更新、追加、削除
  //---------------------------------------------
//   $key_array0 = array();
//    $key_array1 = array();
//    if (isset($_POST['KEY'])) {
//      $key_array0 = explode(",",$_POST['KEY']);
//      $key_array0 = array_filter($key_array0,'strlen');
//      $key_array1 = array_map('trim',explode(',',$_POST['KEY']));
//    } else {
//      if (isset($_GET['KEY'])) {
//        $key_array0 = explode(",",$_GET['KEY']);
//        $key_array0 = array_filter($key_array0,'strlen');
//        $key_array1 = array_map('trim',explode(',',$_GET['KEY']));
//      } else {
//        if (isset($_GET['id'])) {
//          $key_array0 = explode(",",$_GET['id']);
//          $key_array0 = array_filter($key_array0,'strlen');
//          $key_array1 = array_map('trim',explode(',',$_GET['id']));
//        } else {
//          //echo POSTNG;
//          //exit;
//        }
//      }
//    }
    $ret = $obj ->table($key_array1);
    //
//------------------------------------------
// syain master count
//------------------------------------------
//  $res4 = array();
//  $ary_sum04 = array();
//  $strsql4 ='';
//  $strsql4 ="select count(*) from t_syain_sun where access_id=? and syainno <> 'ZZZZZ'";
//  $res4 = $obj ->getlist01_01($strsql4,$key_array1[1]);
//  $m_cnt=count($res4[RESDATA]);
//  if ($m_cnt > 0) {
//    $ary_sum04 =$this -> sanitize($res4[RESDATA]);
//    //$ret0= $obj -> table($ary_sum04);
//    $this -> smarty -> assign('m_cnt', $m_cnt);
//    $ret1 = $this -> setChannel($res,'syn_view');
//    //$cls = new excel_out02_spread();
//    //$sf1 = $cls-> setChannel($res);
//    //$this -> smarty->assign('sf',$sf1);
//  } else {
//    echo '抽出件数：0';
//    $m_cnt = 0;
//  }

//
//-------------------------------------------------
//  Download
//  企業ごと,CSL Upload用Layoutは違うので,ここでは textデータを出力するのみ。
//  出力後,企業ごとCSL_Upload用.xlsxに貼り付ける
//  CSL
//  :dummy data あり 企業ごとdummyレコード違う
//  :見出しなし
//  :.txt
//  JUK
//  Upload用Layoutは同じ。 textデータを出力。
//  :dummy data なし 
//  :見出しなし
//  :.txt
//
//--------------------------------------------------
//--------------
//  csl
//--------------
	switch ($sts) {
    case 'csl':
	  $res2 = array();
      $ary_chk01 = array();
      $res2 = $obj ->getlist01_01(SELECTSYAINCSL160,$key_array1[1]);
     //$res2 = $obj ->getlist01_01('select * from t_syain_sun where access_id =? order by syainno',ACCESSID);
      $m_cnt = count($res2[RESDATA]);
      if (m_cnt=== 0) {
      	echo "<span sytle=\"color:#FF0000\">" . 'DownLoad t_syain_sun --->' . PMHSELECT0 . "</span>";
      	exit;
      } else {
        $ary_chk01 =$this -> sanitize($res2[RESDATA]);
        //$ret0= $obj -> table($ary_chk01);
        //exit;
      }
    //-----------------------
    // text ---->
    //-----------------------
     //$file = fopen("out/tachi_syain_" . date('Ymd') . ".txt", "w");
     $file = fopen(SYAINCSL01, "w");
    //
    if ($file ==FALSE) {
      	fclose($file);
        $title01= 'Download Fail!';
        $this->_redirect('upd_check13',$title01 .','.SYAINCSL01.','.'si9');
        exit;
      } else {
        // foreach($ary_chk01 as $data){
        //  $line = implode(',' , $data);
	      //fwrite($file, $line . "\n");
        //-------------------------------
       // ダブルクォーテーションで囲う
       //-------------------------------
        foreach ($ary_chk01 as $row) {
            $out = '';
            $row_tmp = '"';
            $row_tmp .= implode('","', $row);
            $row_tmp .= '"' . "\n";
            $out .= $row_tmp;
            fwrite($file, $out);
	      }
        $res0 =$obj->upd_shori_log01($_SESSION[CLIENTID],$m_cnt,'t-syain_sun:'.$_SESSION[ACCESSID],$_SESSION[USERNAME_X],$_SERVER['REMOTE_ADDR'],$sts,date("Y-m-d H:i:s"),'dwn');
      }
      fclose($file);
      $title01= 'Download Successful!';
      $this->_redirect('upd_check13',$title01 .','.SYAINCSL01.','.'si0');
      ////----------------------
      ///------------------------
      exit;
      //
     break;
//--------------
//  juk
//--------------
  //if (isset($key_array1[1]) =='juk') {
    case 'juk':
    $res2 = array();
    $ary_chk01 = array();
    $res2 = $obj ->getlist01_01(SELECTSYAINJUK160,$key_array1[1]);
    $m_cnt = count($res2[RESDATA]);
     //$res2 = $obj ->getlist01_01('select * from t_syain_sun where access_id =? order by syainno',ACCESSID);
      if ($m_cnt=== 0) {
        echo "<span sytle=\"color:#FF0000\">" . 'DownLoad t_syain_sun --->' . PMHSELECT0 . "</span>";
        exit;
      } else {
        $ary_chk01 =$this -> sanitize($res2[RESDATA]);
        //$ret0= $obj -> table($ary_chk01);
      }
    //-----------------------
    // text ---->
    //-----------------------
     //$file = fopen("out/tachi_syain_" . date('Ymd') . ".txt", "w");
     $file = fopen(SYAINJUK01, "w");
    //
    if ($file ==FALSE) {
        fclose($file);
        $title01= 'Download Fail!';
        $this->_redirect('upd_check13',$title01 .','.SYAINJUK01.','.'si9');
        exit;
      } else {
       //  foreach($ary_chk01 as $data){
       //   $line = implode(',' , $data);
       // fwrite($file, $line . "\n");
       //-------------------------------
       // ダブルクォーテーションで囲う
       //-------------------------------
        foreach ($ary_chk01 as $row) {
            $out = '';
            $row_tmp = '"';
            $row_tmp .= implode('","', $row);
            $row_tmp .= '"' . "\n";
            $out .= $row_tmp;
            fwrite($file, $out);
        }
      $res0 =$obj->upd_shori_log01($_SESSION[CLIENTID],$m_cnt,'t-syain_sun:'.$_SESSION[ACCESSID],$_SESSION[USERNAME_X],$_SERVER['REMOTE_ADDR'],$sts,date("Y-m-d H:i:s"),'ins');
      }
      fclose($file);
      $title01= 'Download Successful!';
      $this->_redirect('upd_check13',$title01 .','.SYAINJUK01.','.'si0');
      exit;
      break;
    default:
      break;
  }
//------------------------------------------
//  前回処理件数取得
//------------------------------------------
  $res3 = array();
  $ary_res3 = array();
  $res3 = $obj ->getlist01_01('select * from t_shori_log where types=?  order by cre_ymd desc ' ,$_SESSION[CLIENTID]);
  //$ret00= $obj -> table($res3[RESDATA]);
  if ($res3[RESFLAG]=true) {
     $cntss=0;
  } else {
     $cntss = count($res3[RESDATA]);
  }
     //$res2 = $obj ->getlist01_01('select * from t_syain_sun where access_id =? order by syainno',ACCESSID);
      if ($cntss=== 0) {
        $this -> smarty -> assign('csl_cnt', 0);
        $this -> smarty -> assign('juk_cnt', 0);
        $this -> smarty -> assign('csl_ymd', NULL);
        $this -> smarty -> assign('juk_ymd', NULL);
      } else {
        $ary_res3 =$this -> sanitize($res3[RESDATA]);
        $this -> smarty -> assign('csl_cnt', $ary_res3[0][2]);
        $this -> smarty -> assign('juk_cnt', $ary_res3[1][2]);
        $this -> smarty -> assign('csl_ymd', $ary_res3[0][7]);
        $this -> smarty -> assign('juk_ymd', $ary_res3[1][7]);
        //$ret0= $obj -> table($ary_chk01);
      }
  //$this -> smarty -> assign('csl_cnt', $ary_res3[0][2]);
  //$this -> smarty -> assign('juk_cnt', $ary_res3[1][2]);
  //$this -> smarty -> assign('csl_ymd', $ary_res3[0][7]);
  //$this -> smarty -> assign('juk_ymd', $ary_res3[1][7]);

	$this -> createform($form);
	 //$res2 = $obj -> tables($res);
}  // end_function
//===========================================
// フォームの表示
//===========================================
//===========================================
 // フォームの表示
 //===========================================
//	function createForm($form,$rows,$ndo_ary){
 function createForm($form){
    //    $smarty = $this->getsmarty();
		//HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
		//$renderer = HTML_QuickForm2_Renderer::factory('smarty');
		//$renderer->setOption(array('required_note' => "<em>*</em> 記入必須項目"));
		//$renderer->setOption('old_compat', true);
		//$renderer->setOption('group_errors', true);

		// フォームの作成
		//$FormData = $form->render($renderer)->toArray();
		//$smarty->assign('form', $FormData);
        //$smarty->assign('res',$rows);
		$this -> smarty->left_delimiter = '!!-{';
    $this -> smarty->right_delimiter = '}-!!';
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
	  $this -> smarty->assign("access_id", $_SESSION[ACCESSID]);
    $this -> smarty->assign("client_id", $_SESSION[CLIENTID]);
    $this -> smarty->assign("client_nm", $_SESSION[CLIENTNM]);
		$this -> smarty->assign("se_user_id", $_SESSION[USER_ID]);
		$this -> smarty->assign("se_picture", $_SESSION[PICTURE]);
		$this -> smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
		$this -> smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
		$this -> smarty->display('juk_knr_dwn01.html');
		//$smarty->display('datatable01_01.html');
 }// FUNCTION
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
			case 'chk01':
			$this->pub_chk01 =$row01;
			break;
			case 'wk01':
			$this->pub_syain01 =$row01;
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
} // end function

//
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
function reload01()
 {
  //echo'rrrr';
  $obj2 = new addressoperation;
  $res2 = array();
  $ary_chk01 = array();
  $res2 = $obj2 ->getlist01_01('select * from t_syain_chk01 where client_id =? order by client_id,q_id',CLIENTID);
  //$cnt_i=count($res1[RESDATA]);
  //$cnt_j=count($res1[RESDATA][0]);
  //echo 'cnt_i-->' . $cnt_i .'    cnt_j-->' . $cnt_j;
  $ary_chk01 =$this -> sanitize($res2[RESDATA]);
  $ret22 = $this -> setChannel($ary_chk01,'chk01');
  $obj2->dbend();
 }
//--------------------------------
//
//----------------------------------
function dw01_234($pdo,$key_array1)
 {
  $obj2 = new addressoperation;

 } // end function
} // end_class

 ?>