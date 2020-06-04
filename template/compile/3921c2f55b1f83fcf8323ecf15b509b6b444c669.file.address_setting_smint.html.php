<?php /* Smarty version Smarty-3.1.18, created on 2015-01-06 18:13:52
         compiled from ".\template\address_setting_smint.html" */ ?>
<?php /*%%SmartyHeaderCode:6372548f9bf8a67707-50814201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3921c2f55b1f83fcf8323ecf15b509b6b444c669' => 
    array (
      0 => '.\\template\\address_setting_smint.html',
      1 => 1420535616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6372548f9bf8a67707-50814201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_548f9bf8aadc26_54058758',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f9bf8aadc26_54058758')) {function content_548f9bf8aadc26_54058758($_smarty_tpl) {?><!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible"  content="IE=edge">
<title>Smint sample </title>
<link href="template/smint/css/demo.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="template/smint/js/jquery.min.js"></script>

<script	src="template/smint/js/jquery.smint.js" type="text/javascript" ></script>

<script type="text/javascript">
	

$(document).ready( function() {
    $('.subMenu').smint({
    	'scrollSpeed' : 1000
    });
});


</script>


</head>
<body>
<div class="wrap ">
	<div class="section sTop">
		<div class="inner">
			<h1 class="title">SMINT Demo Page</h1>
			<h2 class="subtitle">Feel free to use this as your starting template</h2>
		</div>
	</div>

	<div class="subMenu" >
	 	<div class="inner">
	 		<a href="#sTop" class="subNavBtn">Home</a>
	 		<a href="#s1" class="subNavBtn">Section 1</a> 
			<a href="#s2" class="subNavBtn">Section 2</a>
			<a href="#s3" class="subNavBtn">Section 3</a>
			<a href="#s4" class="subNavBtn">Section 4</a>
			<a href="#s5" class="subNavBtn">Section 5</a>
			<a href="https://twitter.com/rabmyself" class="subNavBtn extLink end">External Link</a>
		</div>
	</div>

	<div class="section s1">
		<div class="inner ">
			<h1>Section 1</h1>
		</div>
	</div>

	<div class="section s2">
		<div class="inner">
			<h1>Section 2</h1>
			<p><a href="#s4" class="intLink">Internal Link: Jump to Section 4</a></p>
			<p><a href="#sTop" class="intLink">Internal Link: Back to Top</a></p>
		</div>
	</div>



	<div class="section s3">
		<div class="inner">
			<h1>Section 3</h1>
		</div>
	</div>

	<div class="section s4">
		<div class="inner">
			<h1>Section 4</h1>
		</div>
	</div>

	<div class="section s5">
		<div class="inner">
			<h1>Section 5</h1>
		</div>
	</div>

	
</div>

</body>
</html><?php }} ?>
