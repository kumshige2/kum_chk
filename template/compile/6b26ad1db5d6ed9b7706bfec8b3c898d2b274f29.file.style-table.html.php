<?php /* Smarty version Smarty-3.1.18, created on 2014-11-27 18:47:12
         compiled from ".\template\style-table.html" */ ?>
<?php /*%%SmartyHeaderCode:41425476f32003bd64-64735113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b26ad1db5d6ed9b7706bfec8b3c898d2b274f29' => 
    array (
      0 => '.\\template\\style-table.html',
      1 => 1417081567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41425476f32003bd64-64735113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'index' => 0,
    'perpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5476f320091c61_16748207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5476f320091c61_16748207')) {function content_5476f320091c61_16748207($_smarty_tpl) {?><!DOCTYPE html>
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
<table id="travel" summary="Travel times to work by main mode (Autumn 2006) - Source: London Travel Report 2007 http://www.tfl.gov.uk/assets/downloads/corporate/London-Travel-Report-2007-final.pdf">
  <caption>
  Travel patterns in London - Travel times to work by main mode (Autumn 2006) - Minutes
  </caption>
  <thead>    
    	<tr>
   	<th>P_id</th>
		<th>P_no</th>
		<th>Pamph</th>
		<th>Kigyo</th>
        <th>AD</th>
        <th>開講</th>
		<th>pmh_type</th>
		<th>団体</th>
		<th>詳細</th>
        </tr>        
    </thead>
    <!---
    <tfoot>
    	<tr>
        	<th scope="row">All modes</th>
            <td>55</td>
            <td>39</td>
            <td>27</td>
            <td>39</td>
            <td>20</td>
            <td>23</td>
        </tr>
    </tfoot>--->
    
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
				<th><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_id'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_no'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p_nm'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['kgo_nm_j'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ad_nm'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['kaiko1'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pmh_type'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dname_skip'];?>
</th>
				 <th><input type="submit" value="detail" name="detail" ></th>
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
    </tbody>
</table>
<p>Source: Labour Force Survey</p>
</body>
</html><?php }} ?>
