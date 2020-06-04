<?php /* Smarty version Smarty-3.1.18, created on 2015-01-27 15:28:23
         compiled from ".\template\address_setting_stickyscroll01.html" */ ?>
<?php /*%%SmartyHeaderCode:1938254c71ffd9db090-79641317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88162a6572a3efe30c982194ae765f76a8a22e10' => 
    array (
      0 => '.\\template\\address_setting_stickyscroll01.html',
      1 => 1422340095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1938254c71ffd9db090-79641317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54c71ffda09ea7_97567044',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c71ffda09ea7_97567044')) {function content_54c71ffda09ea7_97567044($_smarty_tpl) {?><!DOCTYPE html>
<!-- <html lang="ja"> --->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!---<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">--->
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="stylesheet" href="template/sidr/css/jquery.sidr.dark.css">
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="template/sidr/js/jquery.sidr.min.js"></script>
<script type="text/javascript" src="template/stickyscroll/js/jquery-contained-sticky-scroll.js"></script>
<!---
<script type="text/javascript" src="template/ex_scroll/js/jquery.exscrollevent.js"> </script>--->
<style>
.box {
	height: 500px;
	border: 1px solid #666;
}
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
<div id="nav1">
   <a id="simple-menu" href="#sidr">付いてくんな！ sticky scroll</a> 
</div>
<!--
<div id="nav2">
  <p>付いてくんな！ exscrollevent</p>
    <a id="simple-menu" href="#sidr">いでよメニュー！</a> 
</div>--->
<h3>sample sample</h3>


  <div>
    <select name="pretty1" tabindex="1" class="default">
      <option value="">部署</option>
      <option value="bb1">普及事業１課</option>
      <option value="bb2">普及事業２課</option>
      <option value="bb3">普及事業３課</option>
    </select>
  </div>
  <div>
    <select name="pretty2" tabindex="2" class="custom">
      <option value="">Choose a reaction</option>
      <option value="amazed">Amazed</option>
      <option value="bored">Bored</option>
      <option value="surprised">Surprised</option>
    </select>
  </div>
  <div>
    <select name="pretty3" tabindex="3" class="default">
      <option value="">bsy</option>
      <option value="bs1">bs1</option>
      <option value="bs2">bs2</option>
      <option value="bs3">bs3</option>
    </select>
  </div>
  <div>
    <select name="pretty4" tabindex="4" class="custom">
      <option value="">b</option>
      <option value="1">a</option>
      <option value="2">b</option>
      <option value="3">c</option>
    </select>
  </div>
</div>

<!---
<h3>サンプル</h3>
    <a id="simple-menu" href="#sidr">いでよメニュー！</a>--->

<div id="sidr"> 
  <h1><a href="index.html"><img src="template/ceevee/images/loader.gif" alt="NATURE PHOTOGRAPHY" /></a></h1>
    <!-- ▼キャッチコピー -->
    <p class="copy">自然の写真を専門にする<br />
      フォトグラファーNATUのサイト</p>
  <ul>
    <li><a href="#">Top</a></li>
    <li class="active"><a href="#">First</a></li>
    <li><a href="#">Second</a></li>
    <li><a href="#">Third</a></li>
  </ul>
</div>


<p>-------------------------------------------------------------------------------</p>
<!-- <div id="nav" style="width:300px;float:right;padding:5px;background:#FF66FF;top:30px;right:10px;">---->
<!---
<div id="nav" style="width:300px;float:right;background:#DCDCDC;padding:5px; top:30px;right:10px;">
  <h3>サンプル</h3>
  <a id="simple-menu" href="#sidr">いでよメニュー！</a> </div>
<div style="clear: both;"></div>
--->
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
</body>
</html>
<?php }} ?>
