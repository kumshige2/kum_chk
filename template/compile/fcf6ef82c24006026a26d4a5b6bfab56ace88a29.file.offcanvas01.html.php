<?php /* Smarty version Smarty-3.1.18, created on 2015-11-25 16:45:16
         compiled from ".\template\offcanvas01.html" */ ?>
<?php /*%%SmartyHeaderCode:10271553ed77ab67d61-07218545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf6ef82c24006026a26d4a5b6bfab56ace88a29' => 
    array (
      0 => '.\\template\\offcanvas01.html',
      1 => 1430182790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10271553ed77ab67d61-07218545',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_553ed77ac27433_91370085',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553ed77ac27433_91370085')) {function content_553ed77ac27433_91370085($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
	<!--	<meta http-equiv="X-UA-Compatible" content="IE=edge">---> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Off-Canvas Menu Effects - Top Side</title>
		
	
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


        <script>
$(function () {
  var $body = $('body');
  $('#js__sideMenuBtn').on('click', function () {
    $body.toggleClass('side-open');
    $('#js__overlay').on('click', function () {
      $body.removeClass('side-open');
    });
  });
});
</script>
        <style>
		 .overlay {
  content: '';
  visibility: hidden;
  position: fixed;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0);
  -webkit-transition: all .5s ease;
  transition: all .5s ease;
  z-index: 3;
}
.overlay::after {
  content: "この部分をクリックで閉まる";
  visibility: hidden;
  position: fixed;
  top: 40%;
  left: 0;
  display: block;
  width: 100%;
  height: 50px;
  color: rgba(255,255,255,0);
  font-size: 40px;
  font-weight: bold;
  text-align: center;
  -webkit-transition: all .5s ease;
  transition: all .5s ease;
}
.side-open .overlay {
  visibility: visible;
  cursor: pointer;
  background: rgba(0,0,0,.7);
}
.side-open .overlay::after {
  visibility: visible;
  color: rgba(255,255,255,.8);
}

/* サイドメニュー ※リストのスタイルは省略 */
.side-menu {
  position: fixed;
  top: 0;
  right: 0;
  width: 300px;
  height: 100%;
  padding-top: 150px;
  text-align: left;
  font-size: 13px;
  background: #2A408E;
  z-index: 1;
}

/* 開閉用ボタン ※ボタンの細かいスタイルは省略 */
.side-menu-btn {
  position: fixed;
  top: 20px;
  right: 20px;
  width: 40px;
  height: 40px;
  padding: 5px;
  background: #ccc;
  cursor: pointer;
  z-index: 4;
}

/* メインコンテンツ */
.wrapper {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  font-size: 13px;
  background: #F8F8F8;
  -webkit-transition: all .5s ease;
  transition: all .5s ease;
  z-index: 2;
}
/* メインコンテンツ内のスタイル ※デザインに併せて適当に */
.header {
  padding: 100px 0;
  background: #161616;
  color: #fff;
}
.header h1,
.contents h1 {
  margin-bottom: 30px;
  font-size: 20px;
}
.contents {
  width: 100%;
  padding: 150px 0;
  background: #f5f5f5;
}
.contents p {
  margin-bottom: 50px;
}
.footer {
  padding: 150px 0;
  background: #fff;
}

/* サイドメニューオープン */
.side-open .wrapper,
.side-open .overlay {
  -webkit-transform: translate3d(-300px, 0, 0);
  transform: translate3d(-300px, 0, 0);
}
</style>
	</head>
	<body>
  <!-- サイドオープン時メインコンテンツを覆う -->
  <div class="overlay" id="js__overlay"></div>

  <!-- サイドメニュー -->
  <nav class="side-menu">
    <ul>
      <li><a href="#">メニュータイトル</a></li>
      <li><a href="#">メニュータイトル</a></li>
      <li><a href="#">メニュータイトル</a></li>
    </ul>
  </nav>

  <!-- 開閉用ボタン -->
  <div class="side-menu-btn" id="js__sideMenuBtn"></div>

  <!-- メインコンテンツ -->
  <div class="wrapper">
    <header class="header">
      <h1>ヘッダータイトル</h1>
      <p>ヘッダー</p>
    </header>
    <main class="contents">
      <section class="contents__inner">
        <h1>コンテンツタイトル</h1>
        <p>コンテンツ</p>
      </section>
      <section class="contents__inner">
        <h1>コンテンツタイトル</h1>
        <p>コンテンツ</p>
      </section>
      <section class="contents__inner">
        <h1>コンテンツタイトル</h1>
        <p>コンテンツ</p>
      </section>
    </main>
    <footer class="footer">
      <p>フッター</p>
    </footer>
  </div>

</body>
</html><?php }} ?>
