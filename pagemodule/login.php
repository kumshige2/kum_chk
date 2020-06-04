<?php
//require_once('HTML/Quickform2.php');
//require_once('HTML/Quickform2/Renderer.php');
require '../../vendor/autoload.php';
// echo  '<p>' .'login.php ' . date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
//===========================================
// Login  class
//===========================================
//echo "<pre>". 'session ' ;
//print_r($_SESSION);
//echo "</pre>";
//echo "<pre>". 'POST ' ;
//print_r($_POST);
//echo "</pre>";
class login extends view  {
  //property
  var $smarty;
  //==========================================
  //  constructor
  //===========================================
  function __construct() {
      $this->smarty = parent::__construct();
  } // end_construct

  //===========================================
  //  pamph 一覧情報取得
  //===========================================
  function main() {
      //------------------------------------------
	  //  Quickform2 Instance
	  //------------------------------------------
	   $form = new HTML_Quickform2('qform_smarty','POST',array('action' => 'index.php'));
	  //------------------------------------------
	  //  Form 要素
	  //------------------------------------------
	   $uname = $form->addelement('text','uname',
	     array('style' => 'width: 300px;'),
		 array('label' => 'User ID :'));
	   $upass = $form->addelement('password','upass',
	     array('style' => 'width: 300px;'),
		 array('label' => 'Pass :'));
	   $button = $form->addelement('submit','send',
	    array('value' => '      Login      '));
	  //------------------------------------------
	  //  Parameter Rule
	  //------------------------------------------
	   $uname -> addrule('required',USERIDEMPTY);
	   $uname -> addrule('required',PASSEMPTY);
	   $uname -> addrule('regex',USERIDERR,'/^[ -~]+$/');
	  //------------------------------------------
	  //  Filter
	  //------------------------------------------
	   //name -> htmlspecialchars
	   $uname -> addfilter('htmlspecialchars');
	   $form -> addrecursivefilter('trim');
	  //------------------------------------------
	  //  Form 出力入力
	  //------------------------------------------
	   if($form->validate()) {
		    //ユーザーＩＤとパスワードが両方入力されたとき
			if ((isset( $_POST[P_USERID] )) && (isset($_POST[P_USERPASS] ))) {
				apache_setenv("MEMBER_ID","Log-in-->" . $_POST[P_USERID]);
				require_once(LIBPATH. 'user.php');
				//echo 'post u_id :' . $_POST[P_USERID] ;
				$usr_ins = new useroperation;
				$res = $usr_ins -> userlogin($_POST[P_USERID], $_POST[P_USERPASS]);
                foreach ($res as $rows) {
                  //echo '<p>' . $rows['user_id'] . ':' . $rows['picture'] . "</p>\n";
                }
			 //データの取得成功
			    if ($res[RESFLAG] == TRUE)  {
	               $usr_ins->dbend();
				   //session に値がない場合
				   if (empty($_SESSION[USER_ID])) {
				      //echo 'user id empty' .  $rows[0]['user_id'] . ':' . $rows[1]['user_id'] ;
					  // session 作成
					  //$_SESSION[USER_ID] = $res[RESDATA]['user_id'];
					  $_SESSION[USER_ID] = $rows[0]['user_id'];
					  $_SESSION[PICTURE] = $rows[0]['picture'];
					  $_SESSION[USERNAME_X] = $rows[0]['username_x'];
					  $_SESSION[STAFF_TYPE] = $rows[0]['staff_type'];
				   }
				    //session に値がある場合
				   //var_dump($rows[0]);
				   if  ( !empty($_SESSION[USER_ID])) {
					    //echo 'bbb';
				       $this ->_redirect(DEFAULT_MODULE);
				   }
			 //データの取得failed !
				} else {
			            echo "<span style =\"color:#ff0000\">" . LOGINERR . "</span>";
			            // db close
				        $usr_ins -> dbend();
		           }
			      $this -> createform($form);
	             }
        } else {
		      $this -> createform($form);
		}
   } //end_function
  //===========================================
  //  フォームの表示
  //===========================================

	function createForm($form){
		HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
        $renderer = HTML_QuickForm2_Renderer::factory('smarty');
        $renderer->setOption('old_compat', true);
        $renderer->setOption('group_errors', true);
		// フォームの作成
        $FormData = $form->render($renderer)->toArray();
        $this->smarty->assign('form', $FormData);
		//$this->smarty->display('login01.html');
		$this->smarty->display('login02.html');
		//$this->smarty->display('login04.html');
        //$this->smarty->display('login05.html');
		//----------------------------------------
		//login03は使用しない
		//
		//$this->smarty->display('login03.html');
        //----------------------------------------
	}// end_FUNCTION

} // end_ class
 ?>

