<?php /* Smarty version Smarty-3.1.18, created on 2015-11-25 15:49:37
         compiled from ".\template\sidr_test01_a.html" */ ?>
<?php /*%%SmartyHeaderCode:564354c99e9b4cd3d6-76310193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd19efa9e501d44a663191a80c58fd7c8ff864634' => 
    array (
      0 => '.\\template\\sidr_test01_a.html',
      1 => 1448434169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '564354c99e9b4cd3d6-76310193',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54c99e9b503ee8_25402121',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c99e9b503ee8_25402121')) {function content_54c99e9b503ee8_25402121($_smarty_tpl) {?><!DOCTYPE html>
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
<script>
$(document).ready(function() {
$('#simple-menu').sidr();
});
</script>

<style>

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

</head>
<body>
  <a id="simple-menu" href="#sidr">いでよメニュー！</a>
 
<div id="sidr">
<!-- Your content -->
<ul>
<li><a href="#">List 1</a></li>
<li><a href="#">List 11</a></li>
<!----<li class="active"><a href="#">List 2</a></li>
<li class="active"><a href="#">List 12</a></li>--->
<li><a href="#">List 3</a></li>
</ul>
</div>

</body>
</html>
<?php }} ?>
