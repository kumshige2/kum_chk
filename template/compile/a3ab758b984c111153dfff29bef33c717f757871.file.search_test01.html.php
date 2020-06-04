<?php /* Smarty version Smarty-3.1.18, created on 2015-04-10 11:15:56
         compiled from ".\template\search_test01.html" */ ?>
<?php /*%%SmartyHeaderCode:109925476f0e95ece47-33873661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3ab758b984c111153dfff29bef33c717f757871' => 
    array (
      0 => '.\\template\\search_test01.html',
      1 => 1425350640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109925476f0e95ece47-33873661',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5476f0e9679884_64176139',
  'variables' => 
  array (
    'form' => 0,
    'total' => 0,
    'perpage' => 0,
    'curentpage_id' => 0,
    'index' => 0,
    'res' => 0,
    'data' => 0,
    'value' => 0,
    'error' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5476f0e9679884_64176139')) {function content_5476f0e9679884_64176139($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="template/css/style01.css" />
<link rel="stylesheet" type="text/css" media="screen" href="template/css/css-table.css" />
<script type="text/javascript" src="js/style_table/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="js/style_table/style-table.js"></script>
<title>アドレス帳 ～アドレス検索画面～</title>
</head>
<body>
<h1>アドレス検索</h1>
<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
  method="post" class="def" >
	<?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

	<table border="0px">
		<tr>
		    <td><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_q']['label'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_q']['html'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_q']['label'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_q']['html'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['form']->value['ad_nm_q']['label'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['form']->value['ad_nm_q']['html'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['form']->value['buttons']['send']['html'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['form']->value['buttons']['reset']['html'];?>
</td>
            <td><input type="submit" value="   Reset   " name="reset"> </td>
            <td><input type="submit" value="   Excel   " name="excel"></td>
			<td><input type="button" onclick="location.href='index.php'" value="  Return  " /></td>
		</tr>
	</table>
</form>
<!--
<form method="get" action="pagemodule/excel_out02.php" class="def">
   <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>
  
	<table border="0px">
		<tr>
		  <td><input type="submit" value="   Excel00   " name="excel00"></td>			
		</tr>
	</table>
</form>
--->
<div class = "pager">

<table border=1 cellspacing=0 cellpadding=5>
	<thead>
    <tr bgcolor="#adff2f">
		<th>P_id</th>
		<th>P_no</th>
		<th>Pamph</th>
		<th>Kigyo</th>
        <th>ADad</th>
        <th>開講</th>
		<th>pmh_type</th>
		<th>団体</th>
		<th>詳細</th>
	</tr>  
    </thead>
<!--
    <p>totalitems は<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
です！</p>
    <p>perpage  は<?php echo $_smarty_tpl->tpl_vars['perpage']->value;?>
です！</p>
    <p>curentpage_id は  <?php echo $_smarty_tpl->tpl_vars['curentpage_id']->value;?>
です！</p>
    <p>index   は  <?php echo $_smarty_tpl->tpl_vars['index']->value;?>
です！</p> -->
   <tbody>
    <?php if ($_smarty_tpl->tpl_vars['res']->value!=null) {?>
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int) $_smarty_tpl->tpl_vars['index']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['index']->value+$_smarty_tpl->tpl_vars['perpage']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
         <form name="addlist_f1" method="post" action="index.php">       
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_id'];?>
<?php echo ",";?>
<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_no'];?>
" name="p_id" >
          		
	
            <tr>
				<td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_no'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_nm'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['kgo_nm_j'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ad_nm'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['kaiko1'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pmh_type'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dname_skip'];?>
</td>
				 <td><input type="submit" value="*****" name="detail" ></td>
			</tr>
		</form>
          
        <?php endfor; endif; ?>	
        <?php } else { ?>
        	 <div style="margin-right:50px; height:=50px">
              <tr>
               <td width="90" height="30"></td>
               <td width="90" height="30"></td>
               <td width="90" height="30"></td>
               <td width="90" height="30"></td>
               <td width="90" height="30"></td>
               <td width="90" height="30"></td>
               <td width="90" height="30"></td>
               <td width="90" height="30"></td>
               <td width="90" height="30"></td>     
			</tr>
            </div>
	<?php }?>
    
    <!--<?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
?>
		<form name="addlist_f2" method="POST" action="index.php">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_id'];?>
<?php echo ",";?>
<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_no'];?>
" name="p_id" >
			<tr>
				<td width="50px"><?php echo $_smarty_tpl->tpl_vars['value']->value['p_id'];?>
</td>
                <td width="20px"><?php echo $_smarty_tpl->tpl_vars['value']->value['p_no'];?>
</td>
                <td width="300px"><?php echo $_smarty_tpl->tpl_vars['value']->value['p_nm'];?>
</td>
                <td width="300px"><?php echo $_smarty_tpl->tpl_vars['value']->value['kgo_nm_j'];?>
</td>
                <td width="50px"><?php echo $_smarty_tpl->tpl_vars['value']->value['ad_nm'];?>
</td>
                <td width="50px"><?php echo $_smarty_tpl->tpl_vars['value']->value['kaiko1'];?>
</td>
                <td width="20px"><?php echo $_smarty_tpl->tpl_vars['value']->value['pmh_type'];?>
</td>
                <td width="50px"><?php echo $_smarty_tpl->tpl_vars['value']->value['dname_skip'];?>
</td>
				<td>
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" name="id" >
					<input type="submit" value="詳細" name="detail" >
				</td>
			</tr>
		</form>
	<?php } ?>
    -->
   </tbody>
<div style="color:red">
    <?php  $_smarty_tpl->tpl_vars["error"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["error"]->_loop = false;
 $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["error"]->key => $_smarty_tpl->tpl_vars["error"]->value) {
$_smarty_tpl->tpl_vars["error"]->_loop = true;
 $_smarty_tpl->tpl_vars['field_name']->value = $_smarty_tpl->tpl_vars["error"]->key;
?>
         <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br>
    <?php } ?>
 </div>  
</table>
</div>
 <table>
 <th> <div class = "pager"><?php echo $_smarty_tpl->tpl_vars['link']->value;?>
</div></th>
 </table>
</body>
</html>
<?php }} ?>
