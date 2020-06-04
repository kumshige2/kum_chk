<?php /* Smarty version Smarty-3.1.18, created on 2014-12-17 16:41:22
         compiled from ".\template\address_setting_singlepager01.html" */ ?>
<?php /*%%SmartyHeaderCode:61405490e0963b0ea8-64211954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddfd34f193feb4e2165a0652688c7312c02b77f9' => 
    array (
      0 => '.\\template\\address_setting_singlepager01.html',
      1 => 1418802071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61405490e0963b0ea8-64211954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5490e0964a4aa3_11549393',
  'variables' => 
  array (
    'title' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490e0964a4aa3_11549393')) {function content_5490e0964a4aa3_11549393($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--<meta name="viewport" content="width=device-width, initial-scale=1" />--->
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<!---
<link type="text/css" href="template/css/select2.css" rel="stylesheet"/>
<link type="text/css" href="template/css/fancyselect.css" rel="stylesheet">--->
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<!---
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
               
<script type ="text/javascript"
                src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>--->
<!--- select2 --->
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="template/customselect/js/jquery.customSelect.js"></script>
<script type="text/javascript">
$(function(){

$('select.styled').customSelect();

});
</script>
<title>Single Page Nav Demo</title>
<style>
body {
	margin: 1.25em 0 75em;
	padding: 0;
	font-size: 100%;
	font-family: sans-serif;
}
a {
	outline: 0;
}
.single-page-nav {
	background: #000;
	/*--padding: 1.25em 0;---*/
	padding: 0.6em 0;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
}
.single-page-nav ul {
	list-style: none;
	padding: 0;
	margin: 0 auto;
	width: 80%;
	overflow: hidden;
}
.single-page-nav li {
	float: left;
	width: 24.75%;
	text-align: center;
}
.single-page-nav a {
	display: block;
	color: #fff;
	text-decoration: none;
	font-size: 1.5em;
	font-weight: 700;
}
.single-page-nav a:hover, .single-page-nav .current {
	color: #38acec;
}
.section {
	width: 80%;
	padding: 1.25em 0;
	margin: 0 auto;
	background: #eee;
	border-top: 1px solid #bbb;
}
#section1 {
	padding-top: 5em;
}
 @media all and (max-width : 64em) { /* 1024px */
body {
	font-size: 90%;
}
.single-page-nav a {
	font-size: 1.375em;
}
.section {
	width: 90%;
}
}
 @media all and (max-width : 37.5em) { /* 600px */
.single-page-nav a {
	font-size: 125%;
}
.single-page-nav ul {
	width: 95%;
}
.single-page-nav li {
	width: 50%;
	padding: 0.5em 0;
}
.section {
	width: 95%;
}
#section1 {
	padding-top: 7.5em;
}
}
span.customSelect {
	font-size: 14px;
	width: 175px;
	background-color: #cccccc;   /*background-color: #f5f0de;  */
	color: #7c7c7c;
	padding: 5px 7px;
	border: 1px solid #e7dab0;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px 5px;
}
span.customSelect.changed {
	background-color: #f0dea4;
}
.customSelectInner {
	background: url(template/customselect/img/customSelect-arrow.gif) no-repeat right;
}
</style>
</head>
<body>
<div class="single-page-nav">
  <ul>
    <li><a href="#section1">Section 1</a></li>
    <li><a href="#section2">Section 2</a></li>
    <li><a href="#section3">Section 3</a></li>
    <li><a class="external" href="http://google.com" target="_blank">Google</a></li>
  </ul>
</div>
<div class="section" id="section1">
  <h1>Section 1</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget enim eu mi volutpat ullamcorper et ut magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus nec sagittis massa. Vivamus ut tellus tellus. Donec in odio eget elit suscipit tincidunt ac eu lacus. Proin interdum sagittis diam, eu aliquam libero tristique at. Fusce elementum, velit eget consequat facilisis, nunc tellus condimentum velit, bibendum iaculis lectus tellus sed sem. Vivamus dapibus tellus at mauris mollis iaculis. Nunc facilisis augue a felis malesuada accumsan bibendum augue luctus. Curabitur pharetra, sapien dapibus tempor interdum, purus tortor aliquam nisi, ut consectetur urna ipsum et quam. Nulla sed tellus urna. </p>
  <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['p_id_c']['required']) {?><font color="red">*</font> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
</dd>
  <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['p_nm_c']['required']) {?><font color="red">*</font><?php }?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</dd>
  <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['required']) {?><font color="red">*</font> <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['html'];?>
</dd>
  <dd><label>Styled:</label>
  <select class="styled" >
    <option>one</option>
    <option>two</option>
    <option>something</option>
    <option>4</option>
    <option>5</option>
  </select></dd>
   <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['required']) {?><font color="red">*</font><?php }?>
       <?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['html'];?>
</dd>
</div>
<div class="section" id="section2">
  <h1>Section 2</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget enim eu mi volutpat ullamcorper et ut magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus nec sagittis massa. Vivamus ut tellus tellus. Donec in odio eget elit suscipit tincidunt ac eu lacus. Proin interdum sagittis diam, eu aliquam libero tristique at. Fusce elementum, velit eget consequat facilisis, nunc tellus condimentum velit, bibendum iaculis lectus tellus sed sem. Vivamus dapibus tellus at mauris mollis iaculis. Nunc facilisis augue a felis malesuada accumsan bibendum augue luctus. Curabitur pharetra, sapien dapibus tempor interdum, purus tortor aliquam nisi, ut consectetur urna ipsum et quam. Nulla sed tellus urna. </p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget enim eu mi volutpat ullamcorper et ut magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus nec sagittis massa. Vivamus ut tellus tellus. Donec in odio eget elit suscipit tincidunt ac eu lacus. Proin interdum sagittis diam, eu aliquam libero tristique at. Fusce elementum, velit eget consequat facilisis, nunc tellus condimentum velit, bibendum iaculis lectus tellus sed sem. Vivamus dapibus tellus at mauris mollis iaculis. Nunc facilisis augue a felis malesuada accumsan bibendum augue luctus. Curabitur pharetra, sapien dapibus tempor interdum, purus tortor aliquam nisi, ut consectetur urna ipsum et quam. Nulla sed tellus urna. </p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget enim eu mi volutpat ullamcorper et ut magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus nec sagittis massa. Vivamus ut tellus tellus. Donec in odio eget elit suscipit tincidunt ac eu lacus. Proin interdum sagittis diam, eu aliquam libero tristique at. Fusce elementum, velit eget consequat facilisis, nunc tellus condimentum velit, bibendum iaculis lectus tellus sed sem. Vivamus dapibus tellus at mauris mollis iaculis. Nunc facilisis augue a felis malesuada accumsan bibendum augue luctus. Curabitur pharetra, sapien dapibus tempor interdum, purus tortor aliquam nisi, ut consectetur urna ipsum et quam. Nulla sed tellus urna. </p>
</div>
<div class="section" id="section3">
  <h1>Section 3</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget enim eu mi volutpat ullamcorper et ut magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus nec sagittis massa. Vivamus ut tellus tellus. Donec in odio eget elit suscipit tincidunt ac eu lacus. Proin interdum sagittis diam, eu aliquam libero tristique at. Fusce elementum, velit eget consequat facilisis, nunc tellus condimentum velit, bibendum iaculis lectus tellus sed sem. Vivamus dapibus tellus at mauris mollis iaculis. Nunc facilisis augue a felis malesuada accumsan bibendum augue luctus. Curabitur pharetra, sapien dapibus tempor interdum, purus tortor aliquam nisi, ut consectetur urna ipsum et quam. Nulla sed tellus urna. </p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget enim eu mi volutpat ullamcorper et ut magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus nec sagittis massa. Vivamus ut tellus tellus. Donec in odio eget elit suscipit tincidunt ac eu lacus. Proin interdum sagittis diam, eu aliquam libero tristique at. Fusce elementum, velit eget consequat facilisis, nunc tellus condimentum velit, bibendum iaculis lectus tellus sed sem. Vivamus dapibus tellus at mauris mollis iaculis. Nunc facilisis augue a felis malesuada accumsan bibendum augue luctus. Curabitur pharetra, sapien dapibus tempor interdum, purus tortor aliquam nisi, ut consectetur urna ipsum et quam. Nulla sed tellus urna. </p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget enim eu mi volutpat ullamcorper et ut magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus nec sagittis massa. Vivamus ut tellus tellus. Donec in odio eget elit suscipit tincidunt ac eu lacus. Proin interdum sagittis diam, eu aliquam libero tristique at. Fusce elementum, velit eget consequat facilisis, nunc tellus condimentum velit, bibendum iaculis lectus tellus sed sem. Vivamus dapibus tellus at mauris mollis iaculis. Nunc facilisis augue a felis malesuada accumsan bibendum augue luctus. Curabitur pharetra, sapien dapibus tempor interdum, purus tortor aliquam nisi, ut consectetur urna ipsum et quam. Nulla sed tellus urna. </p>
</div>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> ---> 
<script>window.jQuery || document.write('<script src="template/singlepage/jsjquery-1.9.1.min.js"><\/script>')</script> 
<script src="template/singlepage/js/jquery.singlePageNav.min.js"></script> 
<script>

            // Prevent console.log from generating errors in IE for the purposes of the demo
            if ( ! window.console ) console = { log: function(){} };

            // The actual plugin
            $('.single-page-nav').singlePageNav({
                offset: $('.single-page-nav').outerHeight(),
                filter: ':not(.external)',
                updateHash: true,
                beforeStart: function() {
                    console.log('begin scrolling');
                },
                onComplete: function() {
                    console.log('done scrolling');
                }
            });
        </script>
</body>
</html>
<?php }} ?>
