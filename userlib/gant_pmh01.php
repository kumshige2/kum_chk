<?php
require_once('HTML/QuickForm2.php');
require_once ('HTML/QuickForm2/Renderer.php');
require_once('HTML/QuickForm2/Element/InputFile.php');
require_once ('HTML/QuickForm2/Container.php');
require_once('address.php');
require_once('encode.php');
//===========================================
// pamph_setting   class
//    パンフ編集  module
//===========================================
// echo "<pre>". 'post ' ;
//print_r($_POST);
//echo "</pre>";

class gant_pmh01    extends view {
   
  //property
  var $smarty;
  public $pub_rows01;
  public $sw;
  //==========================================
  //  constructor 
  //===========================================
  function __construct() {
     //------------------------------------------
	 // smarty instance 
	 //------------------------------------------
	   $this->smarty = parent::__construct();
  }   // end__construct

  //===========================================
  //  pamph order schedule  
  //===========================================
  function dispChannel() {	
	//------------------------------------------
	//  instance   
	//------------------------------------------
	$form = new HTML_Quickform2('qform_smarty','POST',array('action' => 'index.php?module=gant_pmh01'));
	//------------------------------------    
	//addressOperation　instance 
	//------------------------------------
	 //$obj = new addressoperation;
	 //------------------------------------  
	 // gant
	 //------------------------------------ 
	 $id_form = $form->addElement('hidden','action');	 
	//-------------------------------
	//  p_nd 年度の計算
	//-------------------------------
	
	if (isset($_POST['ad_cd'])) {
		$ad_cd_wk = $_POST['ad_cd'];
	  	} else {
		$ad_cd_wk = '';
	 }
     if (isset($_POST['bsy_cd_c'])) {
		 $bsy_cd_wk = $_POST['bsy_cd_c'];	
	} else {
		 $bsy_cd_wk = '';	
	}
	$sd = date('Ymd');
    $st = date('Hi');
	//----------------------------------------------------------------
    // 発注スケジュール　ＡＤ個人
	//   発注Scheduleはここでは作成しない
	//   事前にbatch処理等Localで別アプリ（ACCESS）にて発注スケジュールデータ(EXCEL)を作成,所定の場所にUPLOADする
	//----------------------------------------------------------------
    if (isset($_POST['gant_pmh01'])) {
	switch ($_POST['gant_pmh01']) {
	  case 'order_sche':
	    $this_ndo = date('Y'); 
	    //$this_ndo = $obj  -> select_ndo_kaiko($_POST['kaiko1_c']);
	    $last_ndo = intval($this_ndo) - 1 ;
	    $sf='AD/' . $this_ndo. '_' . str_pad($ad_cd_wk, 5, "0", STR_PAD_LEFT) .'.xlsx';
	    break; 
	  case 'order_sche_mng':
	      if (isset($_POST['ndo_c'])) {
		      $this_ndo = $_POST['ndo_c'];
		      $sf='AD/' . $this_ndo. '_' . $bsy_cd_wk .'.xlsx';
	     } else {
			 $this_ndo = 'xxxx';
		      $sf='AD/' . $this_ndo. '_' . $bsy_cd_wk .'.xlsx';
		 }
	    break; 
	  default:
	    $sf='AD/' . $this_ndo. '_' . str_pad($ad_cd_wk, 5, "0", STR_PAD_LEFT) .'.xlsx';
	    break; 
	  }
	} 
	
	 return array('sf' => $sf);

  }  // end function 
 function setChannel($row01,$sw){
	$this->pub_rows01 =$row01;
	$this->sw =$sw;
  
	//var_dump ('rows01=>' . $row01);
	
	
   $sf2 = $this->dispChannel();
   return $sf2; 
  } // end function
 function day_diff_x($date1, $date2) {
 
    // 日付をUNIXタイムスタンプに変換
    $timestamp1 = $date1;
    $timestamp2 = $date2;
 
    // 何秒離れているかを計算
    $seconddiff = abs($timestamp2 - $timestamp1);
 
    // 日数に変換
    $daydiff_x = $seconddiff / (60 * 60 * 24);
 
    // 戻り値
    return $daydiff_x;
 
} // end function
function day_diff($date1, $date2) {
 
    // 日付をUNIXタイムスタンプに変換
    $timestamp1 = strtotime($date1);
    $timestamp2 = strtotime($date2);
 
    // 何秒離れているかを計算
    $seconddiff = abs($timestamp2 - $timestamp1);
 
    // 日数に変換
    $daydiff = $seconddiff / (60 * 60 * 24);
 
    // 戻り値
    return $daydiff;
 
} // end function

} // end_class
 ?>