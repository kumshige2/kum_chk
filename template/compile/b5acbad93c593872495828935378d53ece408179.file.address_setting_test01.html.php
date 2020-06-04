<?php /* Smarty version Smarty-3.1.15, created on 2014-03-25 13:31:45
         compiled from ".\template\address_setting_test01.html" */ ?>
<?php /*%%SmartyHeaderCode:18463533106b1c142e0-19018453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5acbad93c593872495828935378d53ece408179' => 
    array (
      0 => '.\\template\\address_setting_test01.html',
      1 => 1395721636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18463533106b1c142e0-19018453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533106b1cbd465_45400644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533106b1cbd465_45400644')) {function content_533106b1cbd465_45400644($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<link href="css/pickadate.01.default.css" rel="stylesheet" />
<!--<meta charset="utf-8">-->
<title>aaaaaaaa</title>


<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<!--
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/i18n/jquery.ui.datepicker-ja.js"></script>
 -->
<script type="text/javascript" src="js/pickadate.min.js"></script>
<script type="text/javascript">
$(function () {
   $('.datepicker').pickadate()
});
</script>


</head>

<body>


<h1>aaaa</h1>
<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
 class="def">
<?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

<?php echo $_smarty_tpl->tpl_vars['form']->value['action']['html'];?>
  

<input class="datepicker" type="text">
 
</form>
</body>
</html>
<?php }} ?>
