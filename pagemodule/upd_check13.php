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
//   print_r($_GET);
// echo "</pre>";
//===========================================
// addlist   class
//===========================================
class upd_check13 extends view  {
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
    ChromePhp::log('upd_check12');
    $obj = new addressoperation;
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
        }
      }
    }
    $sts= $key_array1[2];
   //	ChromePhp::log('p_id-->' . $p_id .  ':' .$_POST['KEY']);
    //--------------------------------------------------
    //
    //--------------------------------------------------
	//
	if (isset( $_POST['ret01'])) {
	   //echo 'aaa';
     //$this->_redirect('juk_knr_upl01',CLIENTID,'int');
     $this->_redirect('juk_knr_upl01', $_SESSION[CLIENTID].','.$_SESSION[ACCESSID].','.$_SESSION[CLIENTNM].','.'int');
     exit;
	 } // end if
	switch (true) {
    case $sts === 'si0':
	  //$this -> smarty -> assign('msg01',ADDINSERTOK);
	  $this -> smarty -> assign('title',$key_array1[0]);
    //echo "<span style=\"color:#33cc99\">" . ADDUPDATEOK .  "</span><br>";
    break;
	case $sts === 'si9':
    //echo "<span style=\"color:#FF0000\">" . ADDUPDATENG . "</span><br>";
    // $this -> smarty -> assign('msg01',ADDINSERTNG);
	  $this -> smarty -> assign('title',$key_array1[0]);
	  break;
  case $sts === 'su0':
    $this -> smarty -> assign('msg01',ADDUPDATEOK);
    $this -> smarty -> assign('title','-- UPDATE --');
      //echo "<span style=\"color:#33cc99\">" . ADDUPDATEOK .  "</span><br>";
      break;
  case $sts === 'su9':
      //echo "<span style=\"color:#FF0000\">" . ADDUPDATENG . "</span><br>";
       $this -> smarty -> assign('msg01',ADDUPDATENG);
      $this -> smarty -> assign('title','-- UPDATE --');
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
  case $sts === 'err9':
    $this -> smarty -> assign('msg01',ERRCNT0);
    $this -> smarty -> assign('title','-- ERROR --');
      //echo "<span style=\"color:#FF0000\">" . DELNG . "</span><br>";
      break;
    default:
      echo "sts-->" .$sts;
	  break;
    }
	//$this -> smarty -> assign('title','---- UpdateCheck ----');
  $this -> smarty -> assign('sf1',$key_array1[1]);
  $this -> smarty->assign("access_id", $_SESSION[ACCESSID]);
  $this -> smarty->assign("client_id", $_SESSION[CLIENTID]);
  $this -> smarty->assign("client_nm", $_SESSION[CLIENTNM]);
  $this -> smarty -> display('upd_check13.html');
  } // end_fucntion
} // end_class
 ?>

