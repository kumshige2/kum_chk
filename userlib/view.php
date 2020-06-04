<?php
//echo  '<p>' .'view.php ' . date( "Y/m/d (D) H:i:s", time() ) . "</p>\n";
//require_once('smarty/libs/Smarty.class.php');
require '../../vendor/autoload.php';
//===========================================
// View  class
//===========================================
class view {
  
  //==========================================
  //  constructor 
  //===========================================
  function __construct() {
      return $this->getsmarty();   	
  }

  //===========================================
  //  smarty instance  
  //===========================================
  function getsmarty() {
      //------------------------------------------
	  //  smarty Instance    
	  //------------------------------------------
	   $smarty = new Smarty();
	   $smarty->template_dir =TEMPLATESPATH;
	   $smarty->compile_dir =COMPILEPATH;
	 //  $smarty->debugging = true;
	   return $smarty; 	   
  }
  
  //===========================================
  //  redirect処理  
  //===========================================
  function _redirect($module=NULL, $id=NULL) {
      $url = "index.php";
	  if (isset($module)) {
	    $url.= "?module=" . $module;
		if (isset($id)) {
		   $url .= "&id=" . $id;
		}
	  }
	  header("Location:" . $url);
  }
}
 ?>