<?php /* Smarty version Smarty-3.1.18, created on 2015-01-07 17:04:34
         compiled from ".\template\address_setting_zelect.html" */ ?>
<?php /*%%SmartyHeaderCode:807954ace819c97945-25227598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7545c7c1cee18fbdfd34467e314f81aa89635a4d' => 
    array (
      0 => '.\\template\\address_setting_zelect.html',
      1 => 1420617869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '807954ace819c97945-25227598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54ace819cc6749_78016519',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ace819cc6749_78016519')) {function content_54ace819cc6749_78016519($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<head>
 
  <link rel="stylesheet" href="http://css.cdn.tl/normalize.css" />
  <link rel="stylesheet" href="template/zelect/css/style01.css" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="template/zelect/js/zelect.js"></script>
 <!--
  <style>
    body { font-size: 16px; color: #1e1f19; background-color: #f3f3f3; padding: 10px 20px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; }
    h2, h3, h4 { color: #464646; }
    section { margin-bottom: 40px; }
    section:after { content: "."; display: block; height: 0; clear: both; visibility: hidden; }

    #intro .zelect {
      display: inline-block;
      background-color: white;
      min-width: 300px;
      cursor: pointer;
      line-height: 36px;
      border: 1px solid #dbdece;
      border-radius: 6px;
      position: relative;
    }
    #intro .zelected {
      font-weight: bold;
      padding-left: 10px;
    }
    #intro .zelected.placeholder {
      color: #999f82;
    }
    #intro .zelected:hover {
      border-color: #c0c4ab;
      box-shadow: inset 0px 5px 8px -6px #dbdece;
    }
    #intro .zelect.open {
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }
    #intro .dropdown {
      background-color: white;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
      border: 1px solid #dbdece;
      border-top: none;
      position: absolute;
      left:-1px;
      right:-1px;
      top: 36px;
      z-index: 2;
      padding: 3px 5px 3px 3px;
    }
    #intro .dropdown input {
      font-family: sans-serif;
      outline: none;
      font-size: 14px;
      border-radius: 4px;
      border: 1px solid #dbdece;
      box-sizing: border-box;
      width: 100%;
      padding: 7px 0 7px 10px;
    }
    #intro .dropdown ol {
      padding: 0;
      margin: 3px 0 0 0;
      list-style-type: none;
      max-height: 150px;
      overflow-y: scroll;
    }
    #intro .dropdown li {
      padding-left: 10px;
    }
    #intro .dropdown li.current {
      background-color: #e9ebe1;
    }
    #intro .dropdown .no-results {
      margin-left: 10px;
    }
  </style>---->
  <script>
    $(setup)

    function setup() {
      $('#intro select').zelect({ placeholder:'Plz select...' })
    }
  </script>
</head>
<body>
  <section id="intro">
    <h2>$('select').zelect()</h2>
    <select>
      <option>I really have</option>
      <option>to think of some</option>
      <option>significantly more</option>
      <option>relevant example data</option>
      <option>here.</option>
      <option>Also, need more and longer items</option>
      <option>to demo scroll</option>
    </select>
  </section>
</body>
</html><?php }} ?>
