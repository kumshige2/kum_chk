<?php /* Smarty version Smarty-3.1.21, created on 2016-02-25 14:29:05
         compiled from ".\template\search_01.html" */ ?>
<?php /*%%SmartyHeaderCode:934956ce912143f591-55287217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b313e63ac90d844c33848021f5cfe497298b33e' => 
    array (
      0 => '.\\template\\search_01.html',
      1 => 1456378138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '934956ce912143f591-55287217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
    'res' => 0,
    'error' => 0,
    'total' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56ce91214a4e93_83406259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ce91214a4e93_83406259')) {function content_56ce91214a4e93_83406259($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<link rel="stylesheet" type="text/css" href="template/css/style01.css" />
<link rel="stylesheet" type="text/css" media="screen" href="template/css/css-table.css" />
<!--- table grid ---->
<link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style00.css">
<link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style978.css">
<link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style_breadcrumb01.css">
<!-- git hub  button ----->
<link rel="stylesheet" href="template/git_hub_btn/css/gh-buttons01.css">
<!-- git hub button /prettyify -->
<link rel="stylesheet" href="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css">
 <!--- fancy_select --->
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" media="screen, projection" href="template/fancyselect/index.css">--->
<link rel="stylesheet" media="screen" href="template/fancyselect/index01.css">
<!-- <link rel="stylesheet" media="screen, projection" href="template/fancyselect/fancySelect.css">--->

<?php echo '<script'; ?>
 type="text/javascript" src="template/js/style_table/jquery-1.2.6.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="template/js/style_table/style-table.js"><?php echo '</script'; ?>
>
 <!-- git hub  button ----->
<?php echo '<script'; ?>
 src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

$(function(){
	//テーブル要素のtr要素をマウスオーバーしたら
	$('.test tr').hover(
		function(){
			//hoverクラス「hv」を追加する
			$(this).addClass('hv');
		},
		//マウスアウトしたら
		function(){
			//hoverクラス「hv」を削除する
			$(this).removeClass('hv');
		}
	);
});

<?php echo '</script'; ?>
>


<style>
table.test tr.hv td {
	background-color: #fff4f8;
}

</style>

<title>アドレス帳 ～アドレス検索画面～</title>
</head>
<body class='body01'>
<div class='theme01'>
 <h2>Address 検索</h2>
 <p>A better select for discerning web developers everywhere.</p>
</div> 
				
<!---		<a href="https://github.com/octopuscreative/fancyselect" class="github">
					<span>GitHub</span>

					<ul>
						<li class="icon stars"></li>
						<li class="icon forks"></li>
					</ul>
				</a>
			</div>---->
<!----<h1>アドレス検索</h1>---->
<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
  method="post" class="def" >
  <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

   <div class="container clearfix">
      <div class="grid12 first"> 
       <table border="0px">
         <tr>
         <td><button type="button" class="button01 icon home" style="width:120px; height:30px;" onclick="location.href='index.php'">Return</button></td>
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
         <td><button type="submit" class="button01 icon search"  name="send" style="width:120px; height:30px;">Search</button></td>
        <td><button type="submit" class="button01 icon reload"  name="reset" style="width:120px; height:30px;">Reset</button></td>
       <td><button type="submit" class="button01 icon log"  name="excel" style="width:120px; height:30px;">Excel</button></td>
        </tr>
      </table>
    </div>
  
  </div>

</form>

<div class = "pager">
  <div class="container">
    <div class="container clearfix" style="background-color:#eeeeee">
      
      <div class="grid12 first"> 
        <!---<table border=1 cellspacing=0 cellpadding=5>-->
         <table >
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['co'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['co']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['name'] = 'co';
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['res']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['co']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['co']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['co']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['co']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['co']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['co']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['co']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['co']['total']);
?>
          <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['co']['iteration']%10==1) {?>
          <thead>
            <tr bgcolor="#adff2f">
		      <th>P_id</th>
		      <th>P_no</th>
		      <th>Pamph</th>
		      <th>Kigyo</th>
              <th>AD</th>
              <th>開講</th>
              <th>締</th>
		      <th>type</th>
		      <th>団体</th>
		      <th>詳細</th>
	       </tr>  
        </thead>
        <?php }?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['co']['index']]['p_id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['co']['index']]['p_no'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->getVariable('smarty')->value['section']['co']['index']]['p_nm'];?>
</td>
         <tr>
         <?php endfor; endif; ?>
       </tbody>
         <div style="color:red"> <?php  $_smarty_tpl->tpl_vars["error"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["error"]->_loop = false;
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
      <!--- end grif12---->
      <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
件
	  <!------------------------------------------------------------------------------->
	 
<!------------------------------------------------------------>
	  
      <table>
        
          <th> <div class = "pager"><?php echo $_smarty_tpl->tpl_vars['link']->value;?>
</div></th>
      </table>
     
    </div>
    <!--- end container clearfix ---> 
  </div>
  <!--- end container ---> 
  
</div>
<!--- end pager --->

</body>
</html>
<?php }} ?>
