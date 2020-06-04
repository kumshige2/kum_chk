<?php
require_once(LIBPATH. 'address_test.php');
require_once(LIBPATH.'Chromephp.php');
// echo  '<p>' .'addlist.php ' . date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
//
// echo "<pre>". 'post ' ;
//print_r($_POST);
//echo "</pre>";
//echo "<pre>". 'session  ';
//print_r($_SESSION);
//echo "</pre>";
//echo "<pre>". 'get  ';
// print_r($_GET);
// echo "</pre>";
//===========================================
// addlist   class
//===========================================
class upd_check11 extends view  {
  //property
  var $smarty;
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
    ChromePhp::log('upd_check01');
	//-------------------------------------------
	// sts xxx
	//  1byte:データの種類
	//    s:pamph schedule   u:user
	//  2byte:更新の種類
	//    u:update d:delete i:insert
	//  3byte:結果
	//    0:success 9:fail
	//-------------------------------------------
	//$this -> smarty -> assign('add_id', $addid);
	//------------------------------------------
   //  年度計算
   //------------------------------------------
  	//$year = date('Y');
  	//$month = date('m');
  	//$this_ndo = $this ->get_financial_year($year, $month, 3);
  	//$last_ndo = intval($this_ndo) - 1;
  	//$next_ndo = intval($this_ndo) + 1;
  	//$this_ndo_1 = intval($this_ndo) - 1;
  	//$this_ndo_2 = intval($this_ndo) - 2;
  	//$this_ndo_3 = intval($this_ndo) - 3;
  //---------------------------------------------
  //  Post key check
  //  $_POST['KEY']  通常表示
  //  $_POST['id']   更新、追加、削除
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
    $sts =$key_array1[2];
    $rtn_apl =$key_array1[1];
   //	ChromePhp::log('p_id-->' . $p_id .  ':' .$_POST['KEY']);
    //--------------------------------------------------
    //
    //--------------------------------------------------
	//
	if (isset( $_POST['ret01'])) {
	  //$this->_redirect('juk_knr_upl01' ,$_SESSION[CLIENTID].','. $_SESSION[ACCESSID].','. $_SESSION[CLIENTNM].','. 'int');
    $this->_redirect($rtn_apl ,$_SESSION[CLIENTID].','. $_SESSION[ACCESSID].','. $_SESSION[CLIENTNM].','. 'int');
    //index.php?module=juk_knr_syain_view01&id=!!-{$client_id}-!!,!!-{$access_id}-!!,!!-{$client_nm}-!!,syn"> <
    exit;
	 } // end if
	switch (true) {
    case $sts === 'su0':
	  $this -> smarty -> assign('msg01',ADDUPDATEOK);
	  $this -> smarty -> assign('title','-- UPDATE --');
      //echo "<span style=\"color:#33cc99\">" . ADDUPDATEOK .  "</span><br>";
      break;
	case $sts === 'su9':
      //echo "<span style=\"color:#FF0000\">" . ADDUPDATENG . "</span><br>";
       $this -> smarty -> assign('msg01',ADDUPDATENG);
	    $this -> smarty -> assign('title','▼▼-- UPDATE --▼▼'.$key_array1[0]);
	  break;
  case $sts === 'su8':
      //echo "<span style=\"color:#FF0000\">" . ADDUPDATENG . "</span><br>";
      $this -> smarty -> assign('msg01',ADDUPDATENG.'-->' . FLDNOSELECT);
      $this -> smarty -> assign('title','-- UPDATE --');
    break;
	case $sts === 'sd0':
	  $this -> smarty -> assign('msg01',DELOK);
	  $this -> smarty -> assign('title','-- DELETE --');
     // echo "<span style=\"color:#33cc99\">" . DELOK . "</span><br>";
      break;
	case $sts === 'sd9':
	  $this -> smarty -> assign('msg01',DELNG);
	  $this -> smarty -> assign('title','-- DELETE --');
      //echo "<span style=\"color:#FF0000\">" . DELNG . "</span><br>";
      break;
  case $sts === 'si9':
    $this -> smarty -> assign('msg01',ADDINSERTNG);
    $this -> smarty -> assign('title','-- Insert --');
      //echo "<span style=\"color:#FF0000\">" . DELNG . "</span><br>";
      break;
   case $sts === 'si9d':
    $this -> smarty -> assign('msg01',ACCESSIDERR);
    $this -> smarty -> assign('title','-- Insert --');
      //echo "<span style=\"color:#FF0000\">" . DELNG . "</span><br>";
      break;
  case $sts === 'xu9':
    $this -> smarty -> assign('msg01',CNTZERO);
    $this -> smarty -> assign('title','-- Insert --');
      //echo "<span style=\"color:#FF0000\">" . DELNG . "</span><br>";
      break;
    default:
      echo "sts-->" .$sts;
	  break;
    }
	//echo 'aaa';
  //$this -> smarty -> assign('title','---- UpdateCheck ----');
    $this -> smarty -> display('upd_check12.html');
  } // end_fucntion
} // end_class
 ?>

