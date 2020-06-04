<?php /* Smarty version Smarty-3.1.18, created on 2015-09-16 11:16:19
         compiled from ".\template\min_upload02.html" */ ?>
<?php /*%%SmartyHeaderCode:206855f8be98a65816-84324744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20015c9a0ae26644e5038bfa0e8063044b0e49f1' => 
    array (
      0 => '.\\template\\min_upload02.html',
      1 => 1442369756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206855f8be98a65816-84324744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f8be98a8c915_63592669',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f8be98a8c915_63592669')) {function content_55f8be98a8c915_63592669($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<head>
  <title>CSV to MySQL importation test</title>
</head>
<body>
<<?php ?>?php if (isset($msg)): ?<?php ?>>
  <fieldset>
    <legend>Result</legend>
    <span style="color:<<?php ?>?=h($msg[0])?<?php ?>>;"><<?php ?>?=h($msg[1])?<?php ?>></span>
  </fieldset>
<<?php ?>?php endif; ?<?php ?>>
  <form enctype="multipart/form-data" method="post">
    <fieldset>
      <legend>Select File</legend>
      Filename(CSV is only supported): <input type="file" name="upfile" /><br />
      <input type="submit" value="Upload" />
    </fieldset>
  </form>
</body>
</html><?php }} ?>
