<?php
require_once(LIBPATH. 'address.php');
require_once(LIBPATH.'ChromePhp.php');
// echo  '<p>' .'addlist.php ' . date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
// echo "<pre>". 'post ' ;
//print_r($_POST);
//echo "</pre>";
//echo "<pre>". 'session  ';
//print_r($_SESSION);
//echo "</pre>";
//echo "<pre>". 'get  ';
//   print_r($_GET);
// echo "</pre>";
//	 ChromePhp::log($_POST); // 配列も大丈夫
//===========================================
// addlist   class
//===========================================
class addlist extends view  {
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
    //echo ($_SESSION[USER_ID]);
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
     if (isset($_POST["menu01"]) ) {
       //一覧
      $this->_redirect("menu01");
    };
    $this->smarty->display(P_ADDLIST);
		//$add_ins->dbend();

        //--------------------------------------------------------
  } // end_fucntion
} // end_class
?>

