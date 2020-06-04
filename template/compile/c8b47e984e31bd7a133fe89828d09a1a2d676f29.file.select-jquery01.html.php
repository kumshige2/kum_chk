<?php /* Smarty version Smarty-3.1.18, created on 2014-12-17 14:48:01
         compiled from ".\template\select-jquery01.html" */ ?>
<?php /*%%SmartyHeaderCode:175075491049d397ab8-07934336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8b47e984e31bd7a133fe89828d09a1a2d676f29' => 
    array (
      0 => '.\\template\\select-jquery01.html',
      1 => 1418795253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175075491049d397ab8-07934336',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5491049d3d49f6_98999178',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5491049d3d49f6_98999178')) {function content_5491049d3d49f6_98999178($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Making Better Select Elements with jQuery and CSS3 | Tutorialzine Demo</title>
<link rel="stylesheet" type="text/css" href="template/select_jquery/css/styles.css" />
<script>

custom_selectbox = function(select, obj){
    var set_selectbox = function(){
        var value = jQuery(this).find('option:selected').html();
        jQuery(select).find(obj).find('span').html(value);
    }
    jQuery(select).find('select').each(set_selectbox).on('change', set_selectbox);
}
 
jQuery(function(){
    custom_selectbox('.custom-selectbox', '.inner');
});
</script>
<style>
.custom-selectbox {
    position: relative;
}
    .custom-selectbox select {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        width: 240px;
        height: 36px;
        opacity: 0;
    }
    .custom-selectbox .inner {
        position: relative;
        z-index: 0;
        box-sizing: border-box;
        border: 1px solid #000;
        padding: 0 12px;
        width: 240px;
        height: 36px;
        font-size: 14px;
        line-height: 36px;
    }
    .custom-selectbox .inner:before,
    .custom-selectbox .inner:after {
        content: '';
        position: absolute;
        display: block;
    }
    .custom-selectbox .inner:before {
        top: 0;
        right: 0;
        bottom: 0;
        width: 24px;
        background: #000;
    }
    .custom-selectbox .inner:after {
        top: 50%;
        right: 7px;
        margin-top: -3px;
        width: 0;
        height: 0;
        border: solid transparent;
        border-top-color: #fff;
        border-width: 5px 5px 0 5px;
    }
	</style>
</head>
<body>
<div id="page">
<h1>Your Product</h1>
<form method="post" action="">

<!-- We are going to use jQuery to hide the select element and replace it -->

<select name="fancySelect" class="makeMeFancy">
   <option value="0" selected="selected" data-skip="1">Choose Your Product</option>
   <option value="1" data-icon="template/select_jquery/img/bg_minibar_top.jpg" data-html-text="普及事業1課">普及事業1課</option>
   <option value="2" data-icon="template/select_jquery/img/bg_minibar_top.jpg" data-html-text="普及事業2課">普及事業2課</option>
   <option value="3" data-icon="template/select_jquery/img/bg_minibar_top.jpg" data-html-text="普及事業3課">普及事業3課</option>
   <option value="4" data-icon="template/select_jquery/img/bg_minibar_top.jpg" data-html-text="普及事業4課">普及事業4課</option>
  
  <!-- Notice the HTML5 data attributes --> 
  
  <!--
            <option value="0" selected="selected" data-skip="1">Choose Your Product</option>
        	<option value="1" data-icon="template/select_jquery/img/products/iphone.png" data-html-text="iPhone 4&lt;i&gt;in stock&lt;/i&gt;">iPhone 4</option>
        	<option value="2" data-icon="template/select_jquery/img/products/ipod.png" data-html-text="iPod &lt;i&gt;in stock&lt;/i&gt;">iPod</option>
            <option value="3" data-icon="template/select_jquery/img/products/air.png" data-html-text="MacBook Air&lt;i&gt;out of stock&lt;/i&gt;">MacBook Air</option>
            <option value="4" data-icon="template/select_jquery/img/products/imac.png" data-html-text="iMac Station&lt;i&gt;in stock&lt;/i&gt;">iMac Station</option>-->
</select>

</div>
<div class="custom-selectbox">
    <div class="inner"><span></span></div>
    <select name="month">
        <option value="" selected="selected">--</option>
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select>
</div>

<!-- Feel free to remove this footer -->

<div id="footer">
  <div class="tri"></div>
  <h1>Better Select Elements with jQuery and CSS3</h1>
  <a class="tzine" href="http://tutorialzine.com/2010/11/better-select-jquery-css3/">Read &amp; Download on</a> </div>
<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['p_nm_c']['required']) {?><font color="red">*</font><?php }?>
  <?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</dd>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script> 
<script src="template/select_jquery/js/script.js"></script>
</body>
</html>
<?php }} ?>
