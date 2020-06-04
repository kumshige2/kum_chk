<?php
require_once(LIBPATH. 'address.php');
require_once(LIBPATH. 'md5.php');
require_once(LIBPATH.'ChromePhp.php');
// echo  '<p>' .'addlist.php ' . date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
//echo "<pre>". 'post ' ;
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
class user_md5ss extends view  {
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
    $pass = "3000895";
$salt = 'xxxxx';

echo "パスワード：" . $pass . "<br />";

echo "MD5表示：" . md5($pass) . "<br />";
echo "SHA256：" . hash_hmac('sha256', $pass, false) . "<br />";
echo "SHA256 salt ：" . hash('sha256', $salt.$pass) . "<br />";
$num =0;
for ($num = 0; $num < 10; $num++ ){
   print 'num_fr = '. intval($num * 60 + 1) .'<br />';
   print 'num_to = '. ($num + 1) * 60 .'<br />';
   //define('C1_RANGE03','A1:H60,A61:H120,A121:H180');
   $sss = $sss . 'A'. intval($num * 60 + 1) . ':' . 'H' . ($num + 1) * 60 .',';
}
$str00 = rtrim($sss,',');

echo '<p>' . $str00 . ',</p>';
//-----------------------------------------------------------koseki kumiko----
$pass = "3008220";
$salt = 'xxxxx';

echo "パスワード：" . $pass . "<br />";

echo "MD5表示：" . md5($pass) . "<br />";
echo "SHA256：" . hash_hmac('sha256', $pass, false) . "<br />";
echo "SHA256 salt ：" . hash('sha256', $salt.$pass) . "<br />";
$num =0;
for ($num = 0; $num < 10; $num++ ){
   print 'num_fr = '. intval($num * 60 + 1) .'<br />';
   print 'num_to = '. ($num + 1) * 60 .'<br />';
   //define('C1_RANGE03','A1:H60,A61:H120,A121:H180');
   $sss = $sss . 'A'. intval($num * 60 + 1) . ':' . 'H' . ($num + 1) * 60 .',';
}
$str00 = rtrim($sss,',');

echo'<p>' . $str00 . ',</p>';
//-----------------------------------------------------------tanaka tatsuyoshi----
$pass = "3002755";
$salt = 'xxxxx';

echo "パスワード：" . $pass . "<br />";

echo "MD5表示：" . md5($pass) . "<br />";
echo "SHA256：" . hash_hmac('sha256', $pass, false) . "<br />";
echo "SHA256 salt ：" . hash('sha256', $salt.$pass) . "<br />";
$num =0;
for ($num = 0; $num < 10; $num++ ){
   print 'num_fr = '. intval($num * 60 + 1) .'<br />';
   print 'num_to = '. ($num + 1) * 60 .'<br />';
   //define('C1_RANGE03','A1:H60,A61:H120,A121:H180');
   $sss = $sss . 'A'. intval($num * 60 + 1) . ':' . 'H' . ($num + 1) * 60 .',';
}
$str00 = rtrim($sss,',');

echo '<p>' . $str00 . ',</p>';
//-----------------------------------------------------------arakawa akiko----
$pass = "3005265";
$salt = 'xxxxx';

echo "パスワード：" . $pass . "<br />";

echo "MD5表示：" . md5($pass) . "<br />";
echo "SHA256：" . hash_hmac('sha256', $pass, false) . "<br />";
echo "SHA256 salt ：" . hash('sha256', $salt.$pass) . "<br />";
$num =0;
for ($num = 0; $num < 10; $num++ ){
   print 'num_fr = '. intval($num * 60 + 1) .'<br />';
   print 'num_to = '. ($num + 1) * 60 .'<br />';
   //define('C1_RANGE03','A1:H60,A61:H120,A121:H180');
   $sss = $sss . 'A'. intval($num * 60 + 1) . ':' . 'H' . ($num + 1) * 60 .',';
}
$str00 = rtrim($sss,',');

echo'<p>' . $str00 . ',</p>';
//-----------------------------------------------------------jinza fumiko----
$pass = "3005294";
$salt = 'xxxxx';

echo "パスワード：" . $pass . "<br />";

echo "MD5表示：" . md5($pass) . "<br />";
echo "SHA256：" . hash_hmac('sha256', $pass, false) . "<br />";
echo "SHA256 salt ：" . hash('sha256', $salt.$pass) . "<br />";
$num =0;
for ($num = 0; $num < 10; $num++ ){
   print 'num_fr = '. intval($num * 60 + 1) .'<br />';
   print 'num_to = '. ($num + 1) * 60 .'<br />';
   //define('C1_RANGE03','A1:H60,A61:H120,A121:H180');
   $sss = $sss . 'A'. intval($num * 60 + 1) . ':' . 'H' . ($num + 1) * 60 .',';
}
$str00 = rtrim($sss,',');

echo '<p>' . $str00 . ',</p>';
//-----------------------------------------------------------furuta ayumi----
$pass = "3005412";
$salt = 'xxxxx';

echo "パスワード：" . $pass . "<br />";

echo "MD5表示：" . md5($pass) . "<br />";
echo "SHA256：" . hash_hmac('sha256', $pass, false) . "<br />";
echo "SHA256 salt ：" . hash('sha256', $salt.$pass) . "<br />";
$num =0;
for ($num = 0; $num < 10; $num++ ){
   print 'num_fr = '. intval($num * 60 + 1) .'<br />';
   print 'num_to = '. ($num + 1) * 60 .'<br />';
   //define('C1_RANGE03','A1:H60,A61:H120,A121:H180');
   $sss = $sss . 'A'. intval($num * 60 + 1) . ':' . 'H' . ($num + 1) * 60 .',';
}
$str00 = rtrim($sss,',');

echo'<p>' . $str00 . ',</p>';
//-----------------------------------------------------------yotsuyanagi keiko ----
$pass = "4002358";
$salt = 'xxxxx';

echo "パスワード：" . $pass . "<br />";

echo "MD5表示：" . md5($pass) . "<br />";
echo "SHA256：" . hash_hmac('sha256', $pass, false) . "<br />";
echo "SHA256 salt ：" . hash('sha256', $salt.$pass) . "<br />";
$num =0;
for ($num = 0; $num < 10; $num++ ){
   print 'num_fr = '. intval($num * 60 + 1) .'<br />';
   print 'num_to = '. ($num + 1) * 60 .'<br />';
   //define('C1_RANGE03','A1:H60,A61:H120,A121:H180');
   $sss = $sss . 'A'. intval($num * 60 + 1) . ':' . 'H' . ($num + 1) * 60 .',';
}
$str00 = rtrim($sss,',');

echo '<p>' . $str00 . ',</p>';
//-----------------------------------------------------------kutsuzawa yuuka----
$pass = "3008371";
$salt = 'xxxxx';

echo "パスワード：" . $pass . "<br />";

echo "MD5表示：" . md5($pass) . "<br />";
echo "SHA256：" . hash_hmac('sha256', $pass, false) . "<br />";
echo "SHA256 salt ：" . hash('sha256', $salt.$pass) . "<br />";
$num =0;
for ($num = 0; $num < 10; $num++ ){
   print 'num_fr = '. intval($num * 60 + 1) .'<br />';
   print 'num_to = '. ($num + 1) * 60 .'<br />';
   //define('C1_RANGE03','A1:H60,A61:H120,A121:H180');
   $sss = $sss . 'A'. intval($num * 60 + 1) . ':' . 'H' . ($num + 1) * 60 .',';
}
$str00 = rtrim($sss,',');

echo'<p>' . $str00 . ',</p>';


echo'<p>' . $str00 . ',</p>';

        //--------------------------------------------------------
  } // end_fucntion
} // end_class
?>

