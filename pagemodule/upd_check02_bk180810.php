<?php
require_once '../../vendor/autoload.php';
require_once(LIBPATH. 'address.php');
require_once(LIBPATH.'Chromephp.php');
//require_once('HTTP/Download.php');
// echo  '<p>' .'addlist.php ' . date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
//echo "<pre>". 'post ' ;
//print_r($_POST);
//echo "</pre>";
//echo "<pre>". 'session  ';
//print_r($_SESSION);
//echo "</pre>";
//echo "<pre>". 'get  ';
//   print_r($_GET);
//echo "</pre>";
//
//===========================================
// addlist   class
//===========================================
class upd_check02 extends view  {
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
    ChromePhp::log('upd_check02');
  //---------------------------------------------
  //  Post key check
  //---------------------------------------------
	 $key_array1 = array();
	if (empty($_POST['key'])) {
	  $key_array1 = array_map('trim',explode(',',$_GET['key']));
	} else {
	  $key_array1 = array_map('trim',explode(',',$_POST['key']));
	}

	switch ($key_array1[2]) {
	  case 'wk13':
	    $yymm = intval($key_array1[0] -1);
		$keijo_ym =intval($yymm + 100);
		//$keijo_ym = strval(intval($key_array1[0]) +100);
		$this -> smarty -> assign('title','20'.substr($key_array1[0],0,2) . '年締分（過年度分)');
		break;
      default:
	    $keijo_ym = strval($key_array1[0]);
		$this -> smarty -> assign('title','-- DownLoad --');
		$this -> smarty -> assign('msg01','富士電機');
	    break;
    }
	//$p_nd = substr($_GET['KEY'],6,4);
	//$p_pmh_type = substr($_GET['KEY'],7,2);
    ChromePhp::log('keijo_ym-->' . $keijo_ym);
	//
	//$this -> smarty -> assign('add_id', $addid);
	$file=GUIDE_TEMP01; //'template/Data_guide_temp02.html');

	if (isset( $_POST['dw01'])) {
		//ChromePhp::log('sss1');
		if (file_exists($file)) {
    	//ChromePhp::log('sss2');
    	$par = array('file' => $file,'contenttype' => 'text/html');
    	$dl =  new HTTP_Download($par);
    	$dl -> send();
       	} else {
    	  ChromePhp::log('file not found!!');
    	  echo 'file not funoud';
    	}
	}
	if (isset( $_POST['ret01'])) {
	  // if ($sts==='uu1') {
	//	  $this->_redirect('snd_detail_view01');
	 //  } else {
	      $this->_redirect('download01');
	   //}
	 } // end if
	//-----------------
	// folder check
	//------------------
	//$obj = new addressoperation;
	//$ret0 = $this -> getfilelist('out/'. '20' .$keijo_ym);
	//mb_convert_variables('UTF-8' , 'SJIS' , $ret0 );
	//$ff=$ret0[0];
	//echo($ff)
	//exit
	$this -> smarty -> assign('sf1',$file);
	$this -> smarty -> display('upd_check02.html');
  } // end_fucntion

 function getFileList($dir) {
    $files = glob(rtrim($dir, '/') . '/*.zip');
    $list = array();
    foreach ($files as $file) {
        if (is_file($file)) {
            $list[] = $file;
        }
        if (is_dir($file)) {
            $list = array_merge($list, getFileList($file));
		}
    }
    return $list;
}
} // end_class
 ?>

