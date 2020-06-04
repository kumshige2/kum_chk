<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
//require '../../vendor/autoload.php';
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
class sendmail01   extends view {
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
	ChromePhp::log('sendmail01');
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
	//-----------------------------------------
	//mb_language("Japanese");
	//mb_internal_encoding("UTF-8");
	//		$to = 'kumashiro_shigetaka@hj.sanno.ac.jp';
	//		$title = 'test';
	//		$content ='ああああああああああああああああ';
    //$header = "From: kumashiro_shigetaka@hj.sanno.ac.jp";
	//		if(mb_send_mail($to, $title, $content ,$header)){
	//			echo "メールを送信しました";
	//		} else {
	//			echo "メールの送信に失敗しました";
	//		}
	//exit;
	//------------------------------------------
	//  instance
	//------------------------------------------
	// SETUP
    $to[] = 'kumashiro_shigetaka@hj.sanno.ac.jp';
    $to[] = 'kumashiro_shigetaka@hj.sanno.ac.jp';
    $from_email= 'kumashiro_shigetaka@hj.sanno.ac.jp';
    $from_name = 'Kumashiro';
    $subject = 'Test';

    $body = "
    このメールは、自動で送信されるメールです。
    資料を送信致します。
    添付ファイルをご参考して下さい。
     以上です。
    ";

    $attach_file = "template/img/bg4.jpg";

    // send the email
    foreach( $to as $to_email ) {
      $ret2 = $this->sendmail_jpn($to_email, $subject, $body, $from_email,$from_name, $attach_file);
      sleep(1);
    }

     echo "送信完了";
	//-------------------------------------------
 	//
 	//-------------------------------------------
	$obj->dbend();
	 $this -> smarty -> display('sendmail01.html');
   	//$res2 = $obj -> tables($res);
}  // end_function

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
//---------------------------------------------------
//  Send Mail
//---------------------------------------------------
function sendmail_jpn($to, $subject, $message, $from_email,$from_name, $filepath)
{
$mime_type = "application/octet-stream";

// 添付ファイルのエンコード
$filename = basename( $filepath );

// マルチパートなので、パートの区切り文字列を指定
$boundary = '----=_Boundary_' . uniqid(rand(1000,9999) . '_') . '_';

// 件名のエンコード
$subject = mb_convert_encoding($subject, 'ISO-2022-JP', 'SJIS');
$subject = $this->mb_encode_mimeheader_ex($subject);

// 本文のエンコード
$message = mb_convert_encoding($message, 'ISO-2022-JP', 'SJIS');

// toをエンコード
// $to = mb_convert_encoding($mail['to']['name'], "SJIS", "SJIS");
$to = "=?ISO-2022-JP?B?" . base64_encode($to) . '?= <' . $to . '>';

// fromをエンコード
// $from = mb_convert_encoding($mail['from']['name'], "SJIS", "SJIS");
$from = "=?ISO-2022-JP?B?" . base64_encode($from_name) . '?= <' . $from_email . '>';

// 添付ファイルのエンコード
$filename = mb_convert_encoding($filename, 'ISO-2022-JP', 'SJIS');
$filename = "=?ISO-2022-JP?B?" . base64_encode($filename) . "?=";

// ヘッダーの指定
$head = "";
$head .= "From: {$from}\n";
$head .= "MIME-Version: 1.0\n";
$head .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\n";
$head .= "Content-Transfer-Encoding: 7bit";

$body = "";

// 本文
$body .= "--{$boundary}\n";
$body .= "Content-Type: text/plain; charset=ISO-2022-JP;" .
"Content-Transfer-Encoding: 7bit\n";
$body .= "\n";
$body .= "{$message}\n";
$body .= "\n";

// 添付ファイルの処理
$body .= "--{$boundary}\n";
$body .= "Content-Type: {$mime_type}; name=\"{$filename}\"\n" .
"Content-Transfer-Encoding: base64\n" .
"Content-Disposition: attachment; filename=\"{$filename}\"\n";
$body .= "\n";

$fp = fopen( $filepath, "r" ) or die("Error on mailing. (attachment file cannot open)");
$contents = fread( $fp, filesize($filepath) );
fclose( $fp );
$f_encoded = chunk_split(base64_encode($contents)); //添付ファイルをbase64エンコードする
$body .= "{$f_encoded}\n";
$body .= "\n";

if (mail($to, $subject, $body, $head)) {
echo 'sendmail_jpn : OK.';
} else {
echo 'sendmail_jpn : FAILURE.';
}
} // end function
//------------------------------------------------------------
// mb_encode_mimeheaderのバグ対策用
//------------------------------------------------------------
function mb_encode_mimeheader_ex($text, $split_count = 34) {
$position = 0;
$encorded = '';

while ($position < mb_strlen($text, 'ISO-2022-JP')) {
if ($encorded != '') {
$encorded .= "\r\n ";
}
$output_temp = mb_strimwidth($text, $position, $split_count, '', 'ISO-2022-JP');
$position = $position + mb_strlen($output_temp, 'ISO-2022-JP');
$encorded .= "=?ISO-2022-JP?B?" . base64_encode($output_temp) . "?=";
}

return $encorded;
}  // end fucntion

} // end_class
?>