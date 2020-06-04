<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
require '../../vendor/autoload.php';
require_once(LIBPATH.'address.php');
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
class apache_log01   extends view {
//$property
var $smarty;
//	public $pub_wk03;
//	public $pub_wk13;
//	public $pub_ndo;
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
//  pamph 一覧情報　取得 
//===========================================
function main()
{
	$obj = new addressoperation;
	ChromePhp::log('Hello console');
	ChromePhp::log('apache_log');
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
//------------------------------------------
//  apache Log
//------------------------------------------
 if(empty($_COOKIE['test1'])){
	//日付の取得
	$time=date("Y/m/d H:i:s");
	//ＵＲＬの取得
	$requestUrl=$_SERVER['REQUEST_URI'];
	//リクエストメソッドの取得
	$requestMethod=$_SERVER['REQUEST_METHOD'];
	//ブラウザ情報の取得
	$requestbrowser=$_SERVER['HTTP_USER_AGENT'];
	//IPアドレス(ローカルでの::1は自分を示す)
	$requestIp=$_SERVER['REMOTE_ADDR'];
	//ホスト名を取得
	$hostName=@gethostbyaddr($requestIp);
	//遷移元ページを取得
	$httpReferer=$_SERVER['HTTP_REFERER'];
	$log="日時は".$time.",接続先は".$requestUrl.",リクエストメソッドは".$requestMethod.",ブラウザは".$requestbrowser.",相手のIPは".$requestIp.",HOSTNAMEは".$hostName.",遷移元は".$httpReferer.",\r\n";

	$fp=@fopen('./log.txt','a')or die("ファイル取得できません");
		if(flock($fp,LOCK_EX)){
			fwrite($fp,$log);
		}
		flock($fp,LOCK_UN);

setcookie("test1",1,time()+1);
}

 $start = strtotime(date("Y-m-d H:i:00", strtotime("-30 minute")));
 $end = strtotime(date("Y-m-d H:i:00"));
 //$fp = fopen($logfile, "r");
  $fpp = fopen("./access_wk01.log", "r") or die("ファイル取得できません");;
 //$handle = fopen("test.txt", "r");

  if ($fpp)  {
        while (!feof($fpp)) {
            $info = explode(",", preg_replace('/^([\S]+)[^\[]+\[([^\]]+)\]\s+"(\S+)\s(\S+).*/', "$1,$2,$3,$4,", fgets($fpp)));
            $access = strtotime($info[1]);

        if($access > $start && $access < $end){
            /* 必要な処理 */
        }
        fclose($fpp);
    }
  }
  $obj->dbend();
}  // end_function
//===========================================
// フォームの表示
//===========================================
function createForm($form){
	$smarty = $this->getsmarty();
	HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
	$renderer = HTML_QuickForm2_Renderer::factory('smarty');
					//$renderer->setOption(array('required_note' => "<em>*</em> 記入必須項目"));
	$renderer->setOption('old_compat', true);
	$renderer->setOption('group_errors', true);

	// フォームの作成
	$FormData = $form->render($renderer)->toArray();
	$smarty->assign('form', $FormData);

	//$smarty->assign('res',$rows);
	//$smarty->assign('wk03',$this->pub_wk03);
	//$smarty->assign('wk13',$this->pub_wk13);
	$smarty->assign('ndo_ary',$this->pub_ndo);
					//print_r($this->pub_wk03);
	$smarty->left_delimiter = '!!-{';
	$smarty->right_delimiter = '}-!!';

	//-----------------------------------------
	//	連想配列-->配列  do not delete
	//------------------------------------------
	//for ($i = 0 ; $i < count($this->pub_ndo); $i++) {
	//  $val_array1[]= array_values($this->pub_ndo[$i]);
	//}
	$val_array2=array();
	$val_array2=  $this ->json_safe_encode($this->pub_ndo);
				    //print_r($val_array2);
	$smarty->assign("ndo", $val_array2);
	$val_array2=array();
	$val_array2=  $this ->json_safe_encode($this->pub_wk03);
	$smarty->assign("json_wk03", $val_array2);
	$val_array2=array();
	$val_array2=  $this ->json_safe_encode($this->pub_wk13);
	$smarty->assign("json_wk13", $val_array2);
	//-----------------------------------------------
	// nendo
	//-----------------------------------------------
	//-----------------------------------------------
	//java用にencode  連想配列ではなく配列を渡すこと
    //-----------------------------------------------
	//$val_array2=  $this ->json_safe_encode($val_array0);
	//$val_array2=  $this ->json_safe_encode($rows);
	$val_array2=  $this ->json_safe_encode($val_array1);
	$smarty->assign("ndo", $val_array2);
	$smarty->assign("se_user_id", $_SESSION[USER_ID]);
	$smarty->assign("se_picture", $_SESSION[PICTURE]);
	$smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
	$smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
	//$smarty->display('download01_01.html');
	$smarty->display('download01.html');


}// FUNCTION
function json_safe_encode($data){
		return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
}
// end function
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
			case 'wk03':
			$this->pub_wk03 =$row01;
			break;
			case 'wk13':
			$this->pub_wk13 =$row01;
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
				//var_dump ('rows01=>' . $row01);
			   //$sf2 = $this->dispChannel();
			   //return $sf2;
} // end function
} // end_class
?>