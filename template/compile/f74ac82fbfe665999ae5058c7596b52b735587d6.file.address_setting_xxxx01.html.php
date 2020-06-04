<?php /* Smarty version Smarty-3.1.21, created on 2016-03-16 19:10:46
         compiled from ".\template\address_setting_xxxx01.html" */ ?>
<?php /*%%SmartyHeaderCode:2932656e931265b7a56-70508984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f74ac82fbfe665999ae5058c7596b52b735587d6' => 
    array (
      0 => '.\\template\\address_setting_xxxx01.html',
      1 => 1458122940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2932656e931265b7a56-70508984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56e931265ea6d2_47024423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e931265ea6d2_47024423')) {function content_56e931265ea6d2_47024423($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


</head>
<body>
<!---
<div style="color:red">
	<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['field_name']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br>
	<?php } ?>
</div>--->
test 
<!--Scripts--> 
<!---   <?php echo '<script'; ?>
 type="text/javascript" src="template/meilleur/js/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>---> 

</body>
</html>
<?php }} ?>
