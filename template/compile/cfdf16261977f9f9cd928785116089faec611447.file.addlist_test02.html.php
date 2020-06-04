<?php /* Smarty version Smarty-3.1.15, created on 2013-12-09 14:21:22
         compiled from "..\template\addlist_test02.html" */ ?>
<?php /*%%SmartyHeaderCode:2331852a55352df2994-73021138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfdf16261977f9f9cd928785116089faec611447' => 
    array (
      0 => '..\\template\\addlist_test02.html',
      1 => 1386564842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2331852a55352df2994-73021138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'pagedata' => 0,
    'value' => 0,
    'page_nums' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a55352e89638_10800496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a55352e89638_10800496')) {function content_52a55352e89638_10800496($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Pager+PDO+Smarty(Pager_Wrapper.php)</title>
</head>
<body>
<div><?php echo $_smarty_tpl->tpl_vars['link']->value;?>
</div>
<br />
<table border="1">
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagedata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
 <form name="addlist_f2" method="post" action="index.php">
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['p_id'];?>
<?php echo ",";?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['p_no'];?>
" name="p_id" >
			<tr>
				<th><?php echo $_smarty_tpl->tpl_vars['value']->value['p_id'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['value']->value['p_no'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['value']->value['p_nm'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['value']->value['kgo_nm_j'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['value']->value['ad_nm'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['value']->value['kaiko1'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['value']->value['pmh_type'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['value']->value['dname_skip'];?>
</th>
				<th><input type="submit" value="詳細" name="detail" ></th>
			</tr>
		</form>
<?php } ?>
</table>
<br />
<div> [<?php echo $_smarty_tpl->tpl_vars['page_nums']->value['current'];?>
/<?php echo $_smarty_tpl->tpl_vars['page_nums']->value['total'];?>
ページを表示]</div>
</body>
</html>
	
         

<?php }} ?>
