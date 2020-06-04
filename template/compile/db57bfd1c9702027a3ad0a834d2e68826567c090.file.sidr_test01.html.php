<?php /* Smarty version Smarty-3.1.18, created on 2015-11-25 17:53:13
         compiled from ".\template\sidr_test01.html" */ ?>
<?php /*%%SmartyHeaderCode:855154896ab2331644-93051643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db57bfd1c9702027a3ad0a834d2e68826567c090' => 
    array (
      0 => '.\\template\\sidr_test01.html',
      1 => 1448441561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '855154896ab2331644-93051643',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54896ab234cbc3_68046805',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54896ab234cbc3_68046805')) {function content_54896ab234cbc3_68046805($_smarty_tpl) {?><!DOCTYPE html>
<!-- <html lang="ja"> --->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!---<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">--->
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="stylesheet" href="template/sidr/css/jquery.sidr.dark01.css">
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="template/sidr/js/jquery.sidr.min.js"></script>

<script type="text/javascript" src="template/stickyscroll/js/jquery-contained-sticky-scroll.js"></script>

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
   <ul>
    <li style="height:40px"><a href="#">Top</a></li>
    <li style="height:40px"><a href="#">First</a></li>
    <li style="height:40px"><a href="#">Second</a></li>
    <li style="height:40px"><a href="#">Third</a></li>
    <li><a>
        <button class="button01 icon edit" type="submit" name="send" style="width:160px; height:30px; ">Update </button>
        </a></li>
    <li><a>
        <button class="button01 icon add" type="submit" name="new" style="width:160px; height:30px; ">CopyPaste</button>
        </a></li>
    
      <li style="height:40px"><a href='index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>Return</a></li>
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
