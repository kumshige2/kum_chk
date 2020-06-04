<?php
// echo  '<p>' .'execute.php ' . date( "Y/m/d (D) H:i:s", time() ) . "</p>\n";
//===========================================
// execute class
//    ページ全体の操作を統括する
//===========================================
class execute {
  //property
  var $_db;
  ///==========================================
  //  constructor
  //===========================================
  function __construct() {
      //------------------------------------------
	  // session start
	  //------------------------------------------
       session_start();
   }  // end_construct

  //===========================================
  //  $_get の値により各ページのモジュールを実行
  //===========================================
  function main() {
      //------------------------------------------
	  // Logout
	  //------------------------------------------
	    $this->logout();
	  //------------------------------------------
	  // $_get に値あるかCHECK
	  //------------------------------------------
	     $this->checkget();
		//echo   '<p>' . '$_get module is --> : '  .  $_GET[MODULE] . "</p>\n";
	  //------------------------------------------
	  // $_get_moduleの名前のインスタンスを作成し そのmain関数を実行
	  //------------------------------------------
	    $page_module = new $_GET[MODULE]();
		$page_module ->main();
   } // end_function
  //===========================================
  //  $_get の値がなかった場合の処理
  //===========================================
  function checkget() {
      //------------------------------------------
	  // When  session ID is valid
	  //------------------------------------------
        if ( !empty($_SESSION['user_id'])) {
		   // echo '$_session useid: '  .  $_SESSION[user_id];
		   //When $_get_module is empty
		    if (empty($_GET[MODULE])) {
			  //defaulst mode へii移動
			 //  echo '$_get module is empty : '  .  $_GET[MODULE];
			   $_GET[MODULE] = DEFAULT_MODULE;
			}
	  //------------------------------------------
	  // When  session ID is invalid
	  //------------------------------------------
		} else {
			//Login へ移動する設定
			$_GET[MODULE] = LOGIN;
		}
	  //------------------------------------------
	  // $_get_moduleの名前のインスタンスを作成
	  //------------------------------------------
        //require_once( MODULEPATH . '/' .  $_GET[MODULE] . '.php' );
		require_once( MODULEPATH .  $_GET[MODULE] . '.php' );
   } // end_function
  //===========================================
  //  既存のsessionを消去しLOgin画面への遷移設定を行う
  //===========================================
  function sccleartologin() {
	  $_SESSION = array();
   } // end_function
  //===========================================
  //  Logout
  //===========================================
  function logout() {
	  if (!empty($_POST[P_LOGOUT])) {
	    // 環境変数に値を書き込み
        apache_setenv("MEMBER_ID","Log-out-->" .$_SESSION['user_id']);
	    $this->sccleartologin();
		$_POST = NULL;
		//session_unset; //— 全てのセッション変数を開放する
		session_destroy();
	  }
  }  // end_function
}  // end_class
 ?>
