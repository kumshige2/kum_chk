<?php /* Smarty version Smarty-3.1.18, created on 2015-11-25 17:19:26
         compiled from ".\template\sidr_test02.html" */ ?>
<?php /*%%SmartyHeaderCode:22474548e6ed0a13737-24044170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e707834f1d3f52b28d249b56eae013891b459e96' => 
    array (
      0 => '.\\template\\sidr_test02.html',
      1 => 1448439559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22474548e6ed0a13737-24044170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_548e6ed0a8d547_83673051',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e6ed0a8d547_83673051')) {function content_548e6ed0a8d547_83673051($_smarty_tpl) {?><!DOCTYPE html>
<!-- <html lang="ja"> --->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type"  content="text/css" />
<link rel="stylesheet" href="template/sidr/css/jquery.sidr.dark.css">
<link href="components/css/default.css" rel="stylesheet" type="text/css" />
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="template/sidr/js/jquery.sidr.min.js"></script>
<script type="text/javascript" src="template/stickyscroll/js/jquery-contained-sticky-scroll.js"></script>
<script type="text/javascript" src="template/ex_scroll/js/jquery.exscrollevent.js"> </script>
<style>

#nav1 {
	width: 280px;
	height: 50px;
	background-color: #DCDCDC;
	float: right;
}
#nav2 {
	width: 200px;
	height: 100px;
	border: 2px solid #36C;
	position: absolute;
	top: 10px;
	left: 350px;
	background-color: #ffffff;
}
charset "UTF-8";

* {
	margin:0;
	padding:0;
}
body {
	background:#000000 url(../img/bg_contents.png) top center repeat-y fixed;
	font-family:"ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size:12px;
	color:#333333;
	letter-spacing:0.1em;

}
a:link,
a:visited {
	color:#3399CC;
	text-decoration:underline;
}
a:hover,
a:active {
	color:#FF6600;
}
.box {
	height: 500px;
	border: 1px solid #666;
}

#main_area {
	width: 720px;
	margin: 20px 20px 0 0;
	/*float: right;--*/
}

*html #main_area {
	width: 720px;
	margin: 20px 10px 0 0;
	/*--float: right;---*/
}

#main {
	padding: 10px;
	background: #FFFFFF;
}

.tit_top {
	clear:both;
	width:820px;
	height:35px;
	margin-top:20px;
	background:url(../img/bg_tit.png) no-repeat;
	color:#FFFFFF;
}
.tit_top h2 {
	width:340px;
	padding:7px 0 0 10px;
	/*--float:left;--*/
	font-size:14px;
	font-weight:bold;
	line-height:1.6em;
}

.tit_top .copy {
	width:340px;
	padding:8px 10px 0 0;
	/**--float:right;---*/
	text-align:right;
	color:#CCCCCC;
	line-height:1.6em;
}


</style>
<style>
.style00 {
background-color: #666666;
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: rgba(255,255,255,0.5) 0px 3px 3px;

}

</style>
<!--
<script type="text/javascript">
$(function() {	
	$(window).scroll(function(){	
		$(window).exScrollEvent({
			delay : 10,
			callback : function(evt,param){
				if(param.status == 0){
					$('#nav2').queue([]).animate({
						top : 10 + param.scroll.top
					},1000)
				}
			}
		});
	});
	
});
</script>--->
<script>
$(document).ready(function(){
	$('#nav1').containedStickyScroll({
		duration: 300,
        	unstick: true,
        	closeChar: 'xx' 
	});
});
</script>
<script>
$(document).ready(function() {
$('#simple-menu').sidr();
});
</script>
</head>
<body>
<div id="nav1"> <a id="simple-menu" href="#sidr">付いてくんな！ sticky scroll</a> </div>
<!--
<div id="nav2">
  <p>付いてくんな！ exscrollevent</p>
    <a id="simple-menu" href="#sidr">いでよメニュー！</a> 
</div>--->

<div id="main_area"> 
  <!-- ▼メインイメージ -->
   <div class='style00'>aaaaaaaaaaaaaa<span></span></div> 
  <div class="tit_top"> 
    <!-- ▼ピックアップタイトル -->
    <h2>Recent Works</h2>
    <!-- ▼ピックアップ説明 -->
    <p class="copy">最近の作品をご紹介します。</p>
  </div>
  <ul class="pickup clearfix">
    <!-- ▼▼ピックアップ1ここから▼▼ -->
    <li>
      <p class="photo"><a href="img/pickup/pickup_01.jpg" rel="lightbox[pickup]" title="ブナの木"><img src="img/pickup/pickup_th_01.jpg" width="150" height="150" alt="ブナの木 写真" /></a></p>
      <h3>ブナの木</h3>
      <p class="date">2011.09.12</p>
    </li>
    <!-- ▲▲ピックアップ1ここまで▲▲ --> 
    <!-- ▼▼ピックアップ2ここから▼▼ -->
    <li>
      <p class="photo"><a href="img/pickup/pickup_02.jpg" rel="lightbox[pickup]" title="海中の魚"><img src="img/pickup/pickup_th_02.jpg" width="150" height="150" alt="海中の魚 写真" /></a></p>
      <h3>海中の魚</h3>
      <p class="date">2011.09.11</p>
    </li>
    <!-- ▲▲ピックアップ2ここまで▲▲ --> 
    <!-- ▼▼ピックアップ3ここから▼▼ -->
    <li>
      <p class="photo"><a href="img/pickup/pickup_03.jpg" rel="lightbox[pickup]" title="山脈"><img src="img/pickup/pickup_th_03.jpg" width="150" height="150" alt="山脈 写真" /></a></p>
      <h3>山脈</h3>
      <p class="date">2011.09.10</p>
    </li>
    <!-- ▲▲ピックアップ3ここまで▲▲ --> 
    <!-- ▼▼ピックアップ4ここから▼▼ -->
    <li>
      <p class="photo"><a href="img/pickup/pickup_04.jpg" rel="lightbox[pickup]" title="9月の空"><img src="img/pickup/pickup_th_04.jpg" width="150" height="150" alt="9月の空 写真" /></a></p>
      <h3>9月の空</h3>
      <p class="date">2011.09.09</p>
    </li>
    <!-- ▲▲ピックアップ4ここまで▲▲ -->
  </ul>
  <div class="tit_top"> 
    <!-- ▼お知らせタイトル -->
    <h2>Information</h2>
    <!-- ▼お知らせ説明 -->
    <p class="copy">NATURE PHOTOGRAPHYからのお知らせ。</p>
  </div>
  <ul class="info clearfix">
    <!-- ▼▼お知らせここから▼▼ -->
    <li>
      <p class="photo"><a href="schedule.html"><img src="img/info_01.jpg" width="80" height="80" alt="チャリティー写真展" /></a></p>
      <p class="date">2011.10.29</p>
      <p class="text"><a href="schedule.html">毎日フォトギャラリーにて開催されるチャリティー写真展に参加いたします。</a></p>
    </li>
    <li>
      <p class="photo"><a href="schedule.html"><img src="img/info_02.jpg" width="80" height="80" alt="写真セミナー" /></a></p>
      <p class="date">2011.09.05</p>
      <p class="text"><a href="schedule.html">「自然を美しく撮ろう！」写真セミナーに講師として参加いたします。</a></p>
    </li>
    <!-- ▲▲お知らせここまで▲▲ -->
  </ul>
  <!-- ▼コピーライト -->
  <address>
  &copy; 2011 NATURE PHOTOGRAPHY. All rights reserved.
  </address>
</div>

<!---
<h3>サンプル</h3>
    <a id="simple-menu" href="#sidr">いでよメニュー！</a>--->

<div id="sidr">
  <h1><a href="index.html"><img src="template/ceevee/images/loader.gif" alt="NATURE PHOTOGRAPHY" /></a></h1>
  <!-- ▼キャッチコピー -->
  <p class="copy">自然の写真を専門にする<br />
    フォトグラファーNATUのサイト</p>
 <!---
  <ul>
    <li><a href="#">Top</a></li>
    <li><a href="#">First</a></li>
    <li><a href="#">Second</a></li>
    <li><a href="#">Third</a></li>
  </ul>--->
     <ul>
      <li><a href="#">Item 1</a></li>
      <li><a href="#">Item 2</a></li>
      <li><a href="#">Item 3</a></li>
       <li><a>
        <button class="button01 icon edit" type="submit" name="send" style="width:160px; height:30px; ">Update </button>
        </a></li>
      <li><a>
        <button class="button01 icon add" type="submit" name="new" style="width:160px; height:30px; ">CopyPaste</button>
        </a></li>
    
      <li><a href='index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>Return</a></li>
    </ul>
</div>
</body>
</html>
<?php }} ?>
