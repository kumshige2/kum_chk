<?php /* Smarty version Smarty-3.1.18, created on 2014-12-17 15:39:49
         compiled from ".\template\select-jquery02.html" */ ?>
<?php /*%%SmartyHeaderCode:1151554911c68a1f870-69259292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed8e133ba04977c98bc234d84776d2047aec8e65' => 
    array (
      0 => '.\\template\\select-jquery02.html',
      1 => 1418798381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1151554911c68a1f870-69259292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54911c68a7d478_43303646',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54911c68a7d478_43303646')) {function content_54911c68a7d478_43303646($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Style Select Boxes Using jQuery + CSS</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="template/customselect/js/jquery.customSelect.js"></script>
<script type="text/javascript">
$(function(){

$('select.styled').customSelect();

});
</script>
<style type="text/css">
body {
	font-family:Arial, Helvetica, sans-serif
}
span.customSelect {
	font-size:14px;
	width:175px;
	background-color: #f5f0de;
	color:#7c7c7c;
	padding:5px 7px;
	border:1px solid #e7dab0;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px 5px;
}
span.customSelect.changed {
	background-color: #f0dea4;
}
.customSelectInner {
	background:url(template/customselect/img/customSelect-arrow.gif) no-repeat right;
}
</style>
</head>

<body>
<h1>Custom Select Box CSS Style Plugin: jQuery + CSS</h1>
<p>This lightweight, unintrusive technique uses the native select box functionality of the web browser, and overlays a stylable &lt;span&gt; element in order to acheive your desired look. Since it makes use of default browser functionality, it can be treated just like any ordinary HTML select box. This concept is based on <a href="http://ryanfait.com/resources/custom-checkboxes-and-radio-buttons/">Ryan Fait's method</a> of styling select boxes, but as a jQuery Plugin.</p>
<h2>Demo:</h2>
<label>Unstyled:</label>
<select>
  <option>one</option>
  <option>two</option>
  <option>something</option>
  <option>4</option>
  <option>5</option>
</select>
<label>Styled:</label>
<select class="styled" >
  <option>one</option>
  <option>two</option>
  <option>something</option>
  <option>4</option>
  <option>5</option>
</select>
<h3>Notes:</h3>
<p>This technique will not work for browsers IE6 and older, but rather safely and cleanly degrades to default styling for those select boxes.</p>
<h3>Download from github:</h3>
<p><a href="https://github.com/adamcoulombe/jquery.customSelect/raw/master/jquery.customSelect.min.js">Click here to download the production-ready, minified jQuery Plugin </a></p>
<p><a href="https://github.com/adamcoulombe/jquery.customSelect/raw/master/jquery.customSelect.js">Click here to download the uncompressed jQuery Plugin </a></p>
<h3>Usage:</h3>
<table border="0" cellspacing="15" cellpadding="0">
  <tr>
    <td valign="top"><strong>Javascript: </strong>
      <pre>$(document).ready(function(){
	$('.mySelectBoxClass').customSelect();
});</pre></td>
    <td valign="top">&nbsp;</td>
    <td valign="top"><strong>CSS:</strong>
      <pre>
.customSelect {
/* Styles For Your Select Box */
position: relative;
}
<br />
.customSelect.changed {
/* You can use this if you want a different style after user has made a selection */
}

.customSelectFocus {
/* You can use this if you want a different style after user has made a selection */
}

.customSelectOpen {
/* You can use this if you want a different style after user has made a selection */
}
<br />
/* We can style the inner box, too */
.customSelectInner {
background:url(canvas-list-nav-item-arrow.gif) no-repeat center right;
}
</pre></td>
  </tr>
</table>
<h3>Fork on github:</h3>
<p> <a href="https://github.com/adamcoulombe/jquery.customSelect">jquery.customSelect on github</a></p>
</body>
</html>
<?php }} ?>
