<?php /* Smarty version Smarty-3.1.15, created on 2013-12-06 11:04:29
         compiled from ".\template\adddetail_test01.html" */ ?>
<?php /*%%SmartyHeaderCode:1717952a130ad12d4d3-26791541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '555ae4b7d842544d2bfa68b35d34db3809438430' => 
    array (
      0 => '.\\template\\adddetail_test01.html',
      1 => 1386294738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1717952a130ad12d4d3-26791541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add_res' => 0,
    'add_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a130ad1c1ed7_27315445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a130ad1c1ed7_27315445')) {function content_52a130ad1c1ed7_27315445($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>アドレス帳 ～アドレス詳細画面～</title>
<script Language="JavaScript">
<!--
// 削除ボタン押下
function deleterecode(id){
	if(confirm("削除してもよろしいですか?")!=false){
		document.adddetail_f1.judge.value="1";
		document.adddetail_f1.action="index.php?module=adddetail&id="+id;
		document.adddetail_f1.submit();
	} else {
		document.adddetail_f1.judge.value="0";
		document.adddetail_f1.action="index.php?module=adddetail&id="+id;
		document.adddetail_f1.submit();
	}
}
-->
</script>
</head>
<body>
<!--<h1>アドレス詳細（<?php echo $_smarty_tpl->tpl_vars['add_res']->value['name_c'];?>
）</h1>---->
	
<h1>Pamphlet 詳細（<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_nm_j'];?>
）</h1>
 
<table border="0px">
	<tr>
		<td>
			<form name="adddetail_f1" method="post" action="index.php?module=adddetail" >
				<input type="hidden" name="judge" >
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
" name="id" >
				<input type="submit" value="アドレス削除" name="del" onClick="deleterecode('<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
')" >
			</form>
		</td>
		<td>
			<form name="adddetail_f2" method="post" action="index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
" >
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
" name="id" >
				<input type="submit" value="アドレス編集" name="edit" >
			</form>
		</td>
		<td>
			<form name="adddetail_f3" method="post" action="index.php">
				<input type="submit" value="戻る">
			</form>
		</td>
	</tr>
</table>
<div>
	
    <div style="float:left;">
		<h2>Pamph</h2>
		<ul>
			<li><strong>P_id</strong><br>
			<?php echo $_smarty_tpl->tpl_vars['add_res']->value['p_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['add_res']->value['p_no'];?>
</li>
			<li><strong>p_nm</strong><br>
			<?php echo $_smarty_tpl->tpl_vars['add_res']->value['p_nm'];?>
</li>
			<li><strong>Kigyo</strong><br>
			<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_nm_j'];?>
</li>
			<li><strong>kaiko</strong><br>
			<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kaiko1'];?>
</li>
			<li><strong>dantai</strong><br>
			<?php echo $_smarty_tpl->tpl_vars['add_res']->value['dname_skip'];?>
</li>
			<li><strong>ad</strong><br>
			<?php echo $_smarty_tpl->tpl_vars['add_res']->value['ad_nm'];?>
</li>
			<li><strong>type</strong><br>
			<?php echo $_smarty_tpl->tpl_vars['add_res']->value['pmh_type'];?>
&nbsp<?php echo $_smarty_tpl->tpl_vars['add_res']->value['building_c'];?>
</li>
		</ul>
		<!--Googleマップ情報の表示-->
		
	</div>
   
</div>
</body>
</html>
<?php }} ?>
