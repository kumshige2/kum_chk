<?php /* Smarty version Smarty-3.1.18, created on 2015-04-27 14:05:47
         compiled from ".\template\check_box01.html" */ ?>
<?php /*%%SmartyHeaderCode:2463254bf6dbc0f8bb8-30794255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3eb5e01c2b85d1ddbc931108bb23418e012a9a90' => 
    array (
      0 => '.\\template\\check_box01.html',
      1 => 1430111143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2463254bf6dbc0f8bb8-30794255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54bf6dbc1661b9_19165228',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bf6dbc1661b9_19165228')) {function content_54bf6dbc1661b9_19165228($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>iPhone Style Radios Demo</title>
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>--->
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="template/check_box01/jquery/iphone-style-checkboxes.js" type="text/javascript" charset="utf-8"></script>
  <link rel="stylesheet" href="template/check_box01/style.css" type="text/css" media="screen" charset="utf-8" />
  <style type="text/css">
   
	body {
      padding: 10px; }

    th {
      text-align: right;
      padding: 4px;
      padding-right: 15px;
      vertical-align: top; }
    .css_sized_container .iPhoneCheckContainer {
      width: 250px; }
  </style>

  <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
      $('.on_off :checkbox').iphoneStyle();
      $('.disabled :checkbox').iphoneStyle();
      $('.css_sized_container :checkbox').iphoneStyle({ resizeContainer: false, resizeHandle: false });
      $('.long_tiny :checkbox').iphoneStyle({ checkedLabel: 'Very Long Text', uncheckedLabel: 'Tiny' });
      
      var onchange_checkbox = ($('.onchange :checkbox')).iphoneStyle({
        onChange: function(elem, value) { 
          $('span#status').html(value.toString());
        }
      });
      
      setInterval(function() {
        onchange_checkbox.prop('checked', !onchange_checkbox.is(':checked')).iphoneStyle("refresh");
        return
      }, 2500);
    });
  </script>
  
</head>
<body>
  <table>
    <tr class="disabled">
      <th><label for="disabled">Disabled</label></th>
      <td>
        <input type="checkbox" id="disabled" disabled="disabled" />
      </td>
    </tr>
    <tr class="on_off">
      <th><label for="on_off">Default</label></th>
      <td>
        <input type="checkbox" id="on_off" />
      </td>
    </tr>
    <tr class="on_off">
      <th><label for="on_off_on">Default On</label></th>
      <td>
        <input type="checkbox" checked="checked" id="on_off_on"/>
      </td>
    </tr>
    <tr class="css_sized_container">
      <th><label for="css_sized_container">CSS Sized Container and Handle</label></th>
      <td>
        <input type="checkbox" id="css_sized_container" />
      </td>
    </tr>
    <tr class="long_tiny">
      <th><label class="left" for="long_tiny">Long and short labels</label></th>
      <td>
        <input type="checkbox" id="long_tiny" />
      </td>
    </tr>
    <tr class="onchange">
      <th>Event tracking</th>
      <td>
        <input type="checkbox" id="onchange" />
        <p>Checkbox status is <strong><span id="status">...</span></strong>.</p>
      </td>
    </tr>
  </table>

</body>
</html>
<?php }} ?>
