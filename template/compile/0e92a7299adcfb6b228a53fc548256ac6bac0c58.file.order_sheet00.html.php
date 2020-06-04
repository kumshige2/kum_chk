<?php /* Smarty version Smarty-3.1.18, created on 2014-11-14 15:40:57
         compiled from ".\template\order_sheet00.html" */ ?>
<?php /*%%SmartyHeaderCode:1571354656fe0b3d542-84994064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e92a7299adcfb6b228a53fc548256ac6bac0c58' => 
    array (
      0 => '.\\template\\order_sheet00.html',
      1 => 1415947242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1571354656fe0b3d542-84994064',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54656fe0b77ee7_17025093',
  'variables' => 
  array (
    'ord_array' => 0,
    'p_nm' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54656fe0b77ee7_17025093')) {function content_54656fe0b77ee7_17025093($_smarty_tpl) {?><!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
<!--
<link type="text/css" href="template/css/select2.css" rel="stylesheet"/>
<link type="text/css" href="template/css/dropkick.css" rel="stylesheet">
<link type="text/css" href="template/css/black_theme.css" rel="stylesheet">
<link type="text/css" href="template/css/fancyselect.css" rel="stylesheet">

<link type="text/css" href="css/style.sw.css" rel="stylesheet"  >
<link type="text/css" href="css/style.sw01.css" rel="stylesheet"  >--->
<!---->
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
<script type ="text/javascript"
                src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.sw.js"></script>

<!---  Iphone style checkbox radio box  ---->
<script type="text/javascript">
$(document).ready( function(){ 
	$(".cb-enable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-disable',parent).removeClass('selected');
		$(this).addClass('selected');
		$('.checkbox',parent).attr('checked', true);
	});
	$(".cb-disable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-enable',parent).removeClass('selected');
		$(this).addClass('selected');
		$('.checkbox',parent).attr('checked', false);
	});
});

  
 </script>


<!---  Iphone style checkbox radio box  ---->
<style>
.cb-enable, .cb-disable, .cb-enable span, .cb-disable span {
	background: url(template/img/switch_01.gif) repeat-x;
	display: block;
	float: left;
}
.cb-enable span, .cb-disable span {
	line-height: 30px;
	display: block;
	background-repeat: no-repeat;
	font-weight: bold;
}
.cb-enable span {
	background-position: left -90px;
	padding: 0 10px;
}
.cb-disable span {
	background-position: right -180px;
	padding: 0 10px;
}
.cb-disable.selected {
	background-position: 0 -30px;
}
.cb-disable.selected span {
	background-position: right -210px;
	color: #fff;
}
.cb-enable.selected {
	background-position: 0 -60px;
}
.cb-enable.selected span {
	background-position: left -150px;
	color: #fff;
}
.switch label {
	cursor: pointer;
}
</style>
<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
  display: block;
}

body {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

blockquote, q {
  quotes: none;
}

blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

.about {
  margin: 70px auto 40px;
  padding: 8px;
  width: 260px;
  font: 10px/18px 'Lucida Grande', Arial, sans-serif;
  color: #bbb;
  text-align: center;
  text-shadow: 0 -1px rgba(0, 0, 0, 0.3);
  background: #383838;
  background: rgba(34, 34, 34, 0.8);
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
  background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
  background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
  -webkit-box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.2), 0 0 6px rgba(0, 0, 0, 0.4);
  box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.2), 0 0 6px rgba(0, 0, 0, 0.4);
}
.about a {
  color: #eee;
  text-decoration: none;
  border-radius: 2px;
  -webkit-transition: background 0.1s;
  -moz-transition: background 0.1s;
  -o-transition: background 0.1s;
  transition: background 0.1s;
}
.about a:hover {
  text-decoration: none;
  background: #555;
  background: rgba(255, 255, 255, 0.15);
}

.about-links {
  height: 30px;
}
.about-links > a {
  float: left;
  width: 50%;
  line-height: 30px;
  font-size: 12px;
}

.about-author {
  margin-top: 5px;
}
.about-author > a {
  padding: 1px 3px;
  margin: 0 -1px;
}

/*
 * Copyright (c) 2012-2013 Thibaut Courouble
 * http://www.cssflow.com
 *
 * Licensed under the MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 */
body {
  font: 13px/20px 'Lucida Grande', Tahoma, Verdana, sans-serif;
  color: #404040;
  background: black url("../img/bg.jpg") 0 0 no-repeat;
  background-size: cover;
}

.window {
  margin: 80px auto;
  width: 450px;
  background: rgba(48, 48, 48, 0.9);
  border: 1px solid rgba(0, 0, 0, 0.9);
  border-radius: 7px;
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.15), 0 0 15px rgba(0, 0, 0, 0.6);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.15), 0 0 15px rgba(0, 0, 0, 0.6);
}

.window-titlebar {
  margin: 0 0 5px;
  padding: 0 7px;
  height: 25px;
  border-radius: 7px 7px 0 0;
  background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.03) 64%, rgba(255, 255, 255, 0) 65%);
  background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.03) 64%, rgba(255, 255, 255, 0) 65%);
  background-image: -o-linear-gradient(top, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.03) 64%, rgba(255, 255, 255, 0) 65%);
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.03) 64%, rgba(255, 255, 255, 0) 65%);
}

.window-titlebar-button {
  position: relative;
  float: left;
  margin: 9px 4px 0 4px;
  width: 14px;
  height: 14px;
  background-color: rgba(17, 17, 17, 0.9);
  border-radius: 7px;
  font: 0/0 serif;
  text-shadow: none;
  color: transparent;
  background-image: -webkit-radial-gradient(bottom, circle cover, rgba(255, 255, 255, 0.17), rgba(255, 255, 255, 0));
  background-image: -moz-radial-gradient(bottom, circle cover, rgba(255, 255, 255, 0.17), rgba(255, 255, 255, 0));
  background-image: -o-radial-gradient(bottom, circle cover, rgba(255, 255, 255, 0.17), rgba(255, 255, 255, 0));
  background-image: radial-gradient(bottom, circle cover, rgba(255, 255, 255, 0.17), rgba(255, 255, 255, 0));
  -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.7), 0 1px rgba(255, 255, 255, 0.15);
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.7), 0 1px rgba(255, 255, 255, 0.15);
}
.window-titlebar-button:before {
  content: '';
  position: absolute;
  top: 3px;
  left: 6px;
  width: 2px;
  height: 1px;
  background: rgba(255, 255, 255, 0.7);
  border-radius: 2px;
  -webkit-box-shadow: 0 0 1px white, 0 0 3px rgba(255, 255, 255, 0.18);
  box-shadow: 0 0 1px white, 0 0 3px rgba(255, 255, 255, 0.18);
}

.window-toolbar {
  padding: 0 7px;
  height: 45px;
  border-bottom: 1px solid #151515;
  -webkit-box-shadow: 0 1px rgba(255, 255, 255, 0.05);
  box-shadow: 0 1px rgba(255, 255, 255, 0.05);
  color:#33cc99;
}

.window-toolbar-button {
  float: left;
  padding: 0 10px 5px;
}
.window-toolbar-button.active {
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.25));
  background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.25));
  background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.25));
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.25));
  -webkit-box-shadow: inset 0 -1px 1px rgba(0, 0, 0, 0.25);
  box-shadow: inset 0 -1px 1px rgba(0, 0, 0, 0.25);
}
.window-toolbar-button:active > a {
  -webkit-filter: brightness(-10%);
}

.window-body {
  margin: 6px;
  color: #303030;
  text-shadow: 0 1px rgba(255, 255, 255, 0.3);
  background: #ababab;
  background-clip: content-box;
  border: 1px solid #151515;
  border-radius: 3px;
  -webkit-box-shadow: 0 0 2px rgba(0, 0, 0, 0.4);
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.4);
}

.switch-container {
  display: block;
  padding: 5px 5px 5px 10px;
  line-height: 23px;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.switch-container + .switch-container {
  border-top: 1px solid rgba(0, 0, 0, 0.12);
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.05);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.05);
}

.switch {
  position: relative;
  float: right;
  line-height: 21px;
  width: 74px;
  overflow: hidden;
  background: #4b4b4b;
  border: 1px solid;
  border-color: rgba(0, 0, 0, 0.6) rgba(0, 0, 0, 0.45) rgba(0, 0, 0, 0.4);
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #4b4b4b, #494949 50%, #505050 51%, #5b5b5b);
  background-image: -moz-linear-gradient(top, #4b4b4b, #494949 50%, #505050 51%, #5b5b5b);
  background-image: -o-linear-gradient(top, #4b4b4b, #494949 50%, #505050 51%, #5b5b5b);
  background-image: linear-gradient(to bottom, #4b4b4b, #494949 50%, #505050 51%, #5b5b5b);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
}

.switch-label {
  float: left;
  width: 37px;
  font-size: 12px;
  color: #fafafa;
  text-shadow: 0 -1px rgba(0, 0, 0, 0.8);
  text-align: center;
  text-transform: uppercase;
}

.switch-handle {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 35px;
  background: #c8c8c8;
  border-radius: 3px;
  background-image: -webkit-linear-gradient(top, #d2d2d2, #888888);
  background-image: -moz-linear-gradient(top, #d2d2d2, #888888);
  background-image: -o-linear-gradient(top, #d2d2d2, #888888);
  background-image: linear-gradient(to bottom, #d2d2d2, #888888);
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), 0 0 1px 1px rgba(0, 0, 0, 0.5);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), 0 0 1px 1px rgba(0, 0, 0, 0.5);
  -webkit-transition: left 0.15s ease-out;
  -moz-transition: left 0.15s ease-out;
  -o-transition: left 0.15s ease-out;
  transition: left 0.15s ease-out;
}

.switch-input {
  display: none;
}
.switch-input:checked + .switch {
  background: #a92488;
  background-image: -webkit-linear-gradient(top, #a92488, #a52485 50%, #bb0096 51%, #c331a0);
  background-image: -moz-linear-gradient(top, #a92488, #a52485 50%, #bb0096 51%, #c331a0);
  background-image: -o-linear-gradient(top, #a92488, #a52485 50%, #bb0096 51%, #c331a0);
  background-image: linear-gradient(to bottom, #a92488, #a52485 50%, #bb0096 51%, #c331a0);
}
.switch-input:checked + .switch .switch-handle {
  left: 39px;
}

[class*="icon-"] {
  display: block;
  width: 40px;
  height: 40px;
  background-image: url("../img/icons.png");
  background-repeat: no-repeat;
  background-color: transparent;
  font: 0/0 serif;
  text-shadow: none;
  color: transparent;
}

.icon-cloud {
  background-position: 0 0;
}

.icon-settings {
  background-position: -40px 0;
}
</style>
<!---  -->
  <title>Pamphlet Order Sheet</title>
    </head>
    <body>
   <!---
     <div class="contain">
     <h1>Pamphlet Order Sheet <small>&mdash; 発注票 Print</small> </h1>
    
   
	
    </div>
   <div style="clear: both;"></div>
      <p class="field switch"  ><span>  発注票: </span> 
      <?php if ($_smarty_tpl->tpl_vars['ord_array']->value[0]==1) {?>
                  <input type="radio" id="order_sheet_on" name="order_sheet_chk_c" value =1 checked />  On
                  <input type="radio" id="order_sheet_off" name="order_sheet_chk_c" value =0 />  Off
                  <label for="order_sheet_on" class="cb-enable selected"><span>On</span></label>
                  <label for="order_sheet_off" class="cb-disable"><span>Off</span></label> 
     	<?php } else { ?>
				  <input type="radio" id="order_sheet_on" name="order_sheet_c" value =1 />  On
                  <input type="radio" id="order_sheet_off" name="order_sheet_c" value =0 checked />  Off
                  <label for="order_sheet_on" class="cb-enable"><span>On</span></label>
                  <label for="order_sheet_off" class="cb-disable selected"><span>Off</span></label> 
       <?php }?>      
      </p>
      <p class="field switch"  ><span>  発注票　請求情報: </span>
      <?php if ($_smarty_tpl->tpl_vars['ord_array']->value[1]==1) {?>
                  <input type="radio" id="order_sheet_sek_on" name="order_sheet_sek_chk_c" value =1 checked />  On
                  <input type="radio" id="order_sheet_sek_off" name="order_sheet_sek_chk_c" value =0 />  Off
                  <label for="order_sheet_sek_on" class="cb-enable selected"><span>On</span></label>
                  <label for="order_sheet_sek_off" class="cb-disable"><span>Off</span></label> 
     	<?php } else { ?>
				  <input type="radio" id="order_sheet_sek_on" name="order_sheet_sek_c" value =1 />  On
                  <input type="radio" id="order_sheet_sek_off" name="order_sheet_sek_c" value =0 checked />  Off
                  <label for="order_sheet_sek_on" class="cb-enable"><span>On</span></label>
                  <label for="order_sheet_sek_off" class="cb-disable selected"><span>Off</span></label> 
       <?php }?>    
      </p>
      <p class="field switch"  ><span>  発注票　製作日程: </span>
     <?php if ($_smarty_tpl->tpl_vars['ord_array']->value[2]==1) {?>
                  <input type="radio" id="order_sheet_ymd_on" name="order_sheet_ymd_chk_c" value =1 checked />  On
                  <input type="radio" id="order_sheet_ymd_off" name="order_sheet_ymd_chk_c" value =0 />  Off
                  <label for="order_sheet_ymd_on" class="cb-enable selected"><span>On</span></label>
                  <label for="order_sheet_ymd_off" class="cb-disable"><span>Off</span></label> 
     	<?php } else { ?>
				  <input type="radio" id="order_sheet_ymd_on" name="order_sheet_ymd_c" value =1 />  On
                  <input type="radio" id="order_sheet_ymd_off" name="order_sheet_ymd_c" value =0 checked />  Off
                  <label for="order_sheet_ymd_on" class="cb-enable"><span>On</span></label>
                  <label for="order_sheet_ymd_off" class="cb-disable selected"><span>Off</span></label> 
       <?php }?>    
      </p> --->
  <section class="window">
    <div class="window-titlebar">
      <a href="index.html" class="window-titlebar-button">Close</a>
      <a href="index.html" class="window-titlebar-button">Minimize</a>
      <a href="index.html" class="window-titlebar-button">Zoom</a>
    </div>

    <ul class="window-toolbar">
      <li class="window-toolbar-button active"><a href="index.html" class="icon-settings">Settings</a></li>
      <li class="window-toolbar-button"><a href="index.html" class="icon-cloud">Cloud</a></li>
      <P><?php echo $_smarty_tpl->tpl_vars['p_nm']->value;?>
</P>
    </ul>

    <div class="window-body">
      <label for="one" class="switch-container">
        発注票:
        <input type="checkbox" id="one" name="one" value="1" class="switch-input" checked>
        <div class="switch">
          <span class="switch-label">On</span>
          <span class="switch-label">Off</span>
          <span class="switch-handle"></span>
        </div>
      </label>
      <label for="two" class="switch-container">
         発注票　請求情報
        <input type="checkbox" id="two" name="two" value="1" class="switch-input">
        <div class="switch">
          <span class="switch-label">On</span>
          <span class="switch-label">Off</span>
          <span class="switch-handle"></span>
        </div>
      </label>
      <label for="three" class="switch-container">
       発注票　製作日程:
        <input type="checkbox" id="three" name="three" value="1" class="switch-input">
        <div class="switch">
          <span class="switch-label">On</span>
          <span class="switch-label">Off</span>
          <span class="switch-handle"></span>
        </div>
      </label>
    </div>
  </section>

     <td><input type="submit" value="   Print    " name="excel"></td>
      <form name="addlist_f2" method="post" action="index.php?module=order_sheet01&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
           <td><input type="submit" value="発注票Print" name="order_sheet01"></td>
        </form>
     <td><input type="button" onclick="location.href='index.php?module=search'" value="   Return   " /> </td>
   </body>
 
</html><?php }} ?>
