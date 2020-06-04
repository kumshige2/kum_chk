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
class wget01   extends view {
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

//------------------------------------------
//  apache Log
//------------------------------------------

//
$url = 'http://www.pref.kanagawa.jp/osirase/1369/data/csv/patient.csv';
//1
 $filename="xxx.txt";

    $data = file_get_contents($url);
    file_put_contents($filename,$data);
echo 'end';
exit;
//2
//$this->download(mb_convert_encoding($url, 'SJIS-win', 'UTF-8'));
//echo 'end';
//3
$filename ='./'. explode('.',basename(__FILE__))[0].'.json';;
$this->saveRemoteFile($url,$filename);
echo 'end';
}  // end_function
//===========================================
// sub
//===========================================
//===========================================
// フォームの表示
//===========================================
function export($file_name, $data)
{
    $fp = fopen('php://output', 'w');

    foreach ($data as $row) {
        fputcsv($fp, $row, ',', '"');
    }
    fclose($fp);
    header('Content-Type: application/octet-stream');
    header("Content-Disposition: attachment; filename={$file_name}");
    header('Content-Transfer-Encoding: binary');
    exit;
}
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
function saveRemoteFile($url, $filename) {
  $GlobalFileHandle = null;
  global $GlobalFileHandle;
  set_time_limit(0);

  # Open the file for writing...
  $GlobalFileHandle = fopen($filename, 'w+');
  $tmp = tmpfile();
  $ch = curl_init();
  curl_setopt_array($ch,[
  CURLOPT_URL => $url,
  CURLOPT_HEADERFUNCTION => function ($ch, $header) use (&$filename) {
        $regex = '/^Content-Disposition: attachment; filename="(.+?)"$/i';
        if (preg_match($regex, $header, $matches)) {
            $filename = $matches[1];
        }
        return strlen($header);
    },
  CURLOPT_FILE =>$GlobalFileHandle,
  CURLOPT_HEADER=> 0,
  CURLOPT_USERAGENT => "MY+USER+AGENT", //Make this valid if possible
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_BINARYTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_TIMEOUT => -1,
  CURLOPT_VERBOSE => false,
  CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_WRITEFUNCTION =>'curlWriteFile',
  ]);
  # Exceute the download - note we DO NOT put the result into a variable!
  curl_exec($ch);
  if (!curl_exec($ch)) {
    echo curl_error($ch) . PHP_EOL;
} elseif ($filename === null) {
    echo 'Failed to detect a valid Content-Dispotition header' . PHP_EOL;
//} elseif (!@rename(stream_get_meta_data($tmp)['uri'], $filename)) {
//    echo error_get_last()['message'] . PHP_EOL;
} else {
    echo 'Done' . PHP_EOL;
}
  # Close CURL
  curl_close($ch);

  # Close the file pointer
  fclose($GlobalFileHandle);
}

function curlWriteFile($cp, $data) {
  global $GlobalFileHandle;
  $len = fwrite($GlobalFileHandle, $data);
  return $len;
}
function download($input_filename, $output_filename = '') {
    static $pattern = '/Chrome|Firefox|(Opera)|(MSIE|IEMobile)|(Safari)/';
    if (headers_sent() || ($size = @filesize($input_filename)) === false) {
        return false;
    }
    if ((string)$output_filename === '') {
        $output_filename = $input_filename;
    }
    $output_filename = mb_convert_encoding(
        $output_filename,
        'UTF-8',
        'ASCII,JIS,UTF-8,CP51932,SJIS-win'
    );
    switch (true) {
        case !isset($_SERVER['HTTP_USER_AGENT']):
        case !preg_match($pattern, $_SERVER['HTTP_USER_AGENT'], $matches):
        case !isset($matches[1]):
            $enc = '=?utf-8?B?' . base64_encode($output_filename) . '?=';
            header('Content-Disposition: attachment; filename="' . $enc . '"');
            break;
        case !isset($matches[2]):
            $enc = "utf-8'ja'" . urlencode($output_filename);
            header('Content-Disposition: attachment; filename*=' . $enc);
            break;
        case !isset($matches[3]):
            $enc = urlencode($output_filename);
            header('Content-Disposition: attachment; filename="' . $enc . '"');
            break;
        default:
            header('Content-Disposition: attachment; filename="' .$output_filename . '"');
    }
    $finfo = new finfo(FILEINFO_MIME);
    header('Content-Type: ' . $finfo->file($input_filename));
    header('Content-Length: ' . $size);
    return readfile($input_filename);
}
} // end_class
?>