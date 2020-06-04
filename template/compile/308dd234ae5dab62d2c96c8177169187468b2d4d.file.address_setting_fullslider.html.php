<?php /* Smarty version Smarty-3.1.18, created on 2014-12-16 16:51:06
         compiled from ".\template\address_setting_fullslider.html" */ ?>
<?php /*%%SmartyHeaderCode:27425548fe46aea12d5-74528401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '308dd234ae5dab62d2c96c8177169187468b2d4d' => 
    array (
      0 => '.\\template\\address_setting_fullslider.html',
      1 => 1418716161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27425548fe46aea12d5-74528401',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_548fe46aede1d2_76415451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548fe46aede1d2_76415451')) {function content_548fe46aede1d2_76415451($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Easing effect - fullPage.js</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage demo easing effect." />
	<meta name="keywords"  content="fullpage,jquery,demo,easing,effect,jqueui" />
	<meta name="Resource-type" content="Document" />


	<link rel="stylesheet" type="text/css" href="template/fullslider/css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="template/fullslider/css/examples.css" />

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="template/fullslider/js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="template/fullslider/js/examples.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
				anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
				menu: '#menu',

				//equivalent to jQuery `easeOutBack` extracted from http://matthewlein.com/ceaser/
				easingcss3: 'cubic-bezier(0.175, 0.885, 0.320, 1.275)'
			});

		});
	</script>

</head>
<body>

<select id="demosMenu">
  <option selected>Choose Demo</option>
  <option id="backgrounds">Background images</option>
  <option id="backgroundVideo">Background video</option>
  <option id="gradientBackgrounds">Gradient backgrounds</option>
  <option id="looping">Looping</option>
  <option id="noAnchor">No anchor links</option>
  <option id="scrollingSpeed">Scrolling speed</option>
  <option id="easing">Easing</option>
  <option id="callbacks">Callbacks</option>
  <option id="css3">CSS3</option>
  <option id="continuous">Continuous scrolling</option>
  <option id="normalScroll">Normal scrolling</option>
  <option id="scrollBar">Scroll bar enabled</option>
  <option id="scrolling">Scroll inside sections and slides</option>
  <option id="navigationV">Vertical navigation dots</option>
  <option id="navigationH">Horizontal navigation dots</option>
  <option id="fixedHeaders">Fixed headers</option>
  <option id="apple">Apple iPhone demo (animations)</option>
  <option id="oneSection">One Single Section</option>
  <option id="responsive">Responsive</option>
  <option id="methods">Methods</option>
</select>

<ul id="menu">
	<li data-menuanchor="firstPage"><a href="#firstPage">First slide</a></li>
	<li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
	<li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
</ul>

<div id="fullpage">
	<div class="section " id="section0">
		<h1>fullPage.js</h1>
		<p>Configure the easing jQuery UI effect!</p>
		<img src="template/fullslider/examples/imgs/fullPage.png" alt="fullPage" />
	</div>
	<div class="section" id="section1">
		<div class="intro">
			<img src="imgs/1.png" alt="Cool" />
			<h1>easeOutBack</h1>
			<p>This example is working with `easeOutBack` effect instead of the default</p>
			<p>You can see more about them <a href="http://jqueryui.com/resources/demos/effect/easing.html" target="_blank">here</a></p>
		</div>
	</div>
	<div class="section" id="section2">
		<div class="intro">
			<h1>Cool uh?</h1>
			<p>Choose the best easing effect for your site!</p>
		</div>
	</div>
</div>


</body>
</html>
<?php }} ?>
