<?php /* Smarty version Smarty-3.1.15, created on 2014-04-15 11:00:53
         compiled from ".\template\address_setting_bk140407.html" */ ?>
<?php /*%%SmartyHeaderCode:26530534c89c781abf5-61813357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c274ac0471ff4f775f6ba2b15696044f5b962e46' => 
    array (
      0 => '.\\template\\address_setting_bk140407.html',
      1 => 1397527222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26530534c89c781abf5-61813357',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_534c89c84edf17_26457230',
  'variables' => 
  array (
    'title' => 0,
    'form' => 0,
    'error' => 0,
    'h1' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534c89c84edf17_26457230')) {function content_534c89c84edf17_26457230($_smarty_tpl) {?><!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>

<script type="text/javascript" src="js/pickadate.min.js"></script>

<script type="text/javascript">
$(function(){
    $('.datepicker').datepicker({      
        dateFormat: 'yy-mm-dd',
		showAnim: 'show'       
    });
	
	//$('.datepicker').datepicker('setDate', new Date());
});

</script>
 
<!--
 yearRange: '2010:2040'  
$(function(){
　$(".datepicker").datepicker();
});
$(function(){
    $('.datepicker').datepicker({
      
        dateFormat: 'yy-mm-dd',
		showAnim: 'show'
		
       
    });
});

$(function() {
	$(".datepicker").datepicker();
	$('.datepicker').datepicker("option", "dateFormat", 'yy-mm-dd' );

});
-->
</head>
<body>

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
</div>
<h1><?php echo $_smarty_tpl->tpl_vars['h1']->value;?>
</h1>
<!--
<input type="text" id="datepicker" style="width: 50px;" name="app_ymd_ww" />
-->
<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
 class="def">
	<?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value['action']['html'];?>
  

	<dl>
        <!--- <dt><?php if ($_smarty_tpl->tpl_vars['form']->value['kaiko_ptn_kbn_c']['required']) {?><font color="red">*</font> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko_ptn_kbn_c']['label'];?>
</dt><dd><?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko_ptn_kbn_c']['html'];?>
</dd>  -->
	 <div style="float:left;">
        
         <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['p_id_c']['required']) {?><font color="red">*</font> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
</dd>
         <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['p_no_c']['required']) {?><font color="red">*</font> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['html'];?>
</dd>
         <dd style="background-color:#66ff66"><?php if ($_smarty_tpl->tpl_vars['form']->value['p_noxx_c']['required']) {?><font color="red">*</font> <?php }?><font color='blue'><?php echo $_smarty_tpl->tpl_vars['form']->value['p_noxx_c']['label'];?>
</font>  <?php echo $_smarty_tpl->tpl_vars['form']->value['p_noxx_c']['html'];?>
</p></dd>
          
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['required']) {?><font color="red">*</font> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['html'];?>
</dd>
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['required']) {?><font color="red">*</font> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kaiko_ptn_kbn_c']['required']) {?><font color="red">*</font><?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko_ptn_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko_ptn_kbn_c']['html'];?>
</dd>
		
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['p_nm_c']['required']) {?><font color="red">*</font>  <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</dd>
		
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['required']) {?><font color="red">*</font> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['html'];?>
 </dd>
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['snk_kei_kbn_c']['required']) {?><font color="red">*</font> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['snk_kei_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['snk_kei_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['ad_cd_c']['required']) {?><font color="red">*</font>  <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['ad_cd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['ad_cd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['ad_nm_c']['required']) {?><font color="red">*</font>  <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['ad_nm_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['ad_nm_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['required']) {?><font color="red">*</font>  <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['bsy_nm_c']['required']) {?><font color="red">*</font>  <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_nm_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_nm_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['insatu_kgo_cd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['insatu_kgo_cd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['insatu_kgo_cd_c']['html'];?>
</dd>
      	<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['all_crs_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['html'];?>
</dd>
      </div>
       <div style="float:left;">
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['required']) {?><font color="red">*</font> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['required']) {?><font color="red">*</font><?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['tdantai_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['tdantai_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['tdantai_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['dantai_cd_knj_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['dantai_cd_knj_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['dantai_cd_knj_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pmh_size_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_size_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_size_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['han_size_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['han_size_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['han_size_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pmh_items_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_items_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_items_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pos_items_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['pos_items_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pos_items_c']['html'];?>
</dd>
      </div>
       <div style="float:left;">
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['bes_items_c']['required']) {?><font color="red">*</font> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['bes_items_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['bes_items_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['etc_items_c']['required']) {?><font color="red">*</font><?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_items_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['etc_items_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['noh_items_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['noh_items_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['noh_items_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pos_size_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['pos_size_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pos_size_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pos_type_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['pos_type_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pos_type_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['bes_type_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['bes_type_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['bes_type_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['etc_type_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_type_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['etc_type_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['noh_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['noh_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['noh_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['noh_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['noh_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['noh_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['uke_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['uke_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['uke_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['ryo_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['ryo_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['ryo_ymd_c']['html'];?>
</dd>
      </div> 
       <div style="float:left;">
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['hac_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['hac_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['hac_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['shoko_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['shoko_sof_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_sof_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_sof_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['return_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['return_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['return_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['saiko_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['saiko_sof_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_sof_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_sof_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['ko3_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['ko3_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['ko3_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sekryo_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['sekryo_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['sekryo_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['moji_kosei_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['moji_kosei_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['moji_kosei_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['color_kosei_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_ymd_c']['html'];?>
</dd>
      </div> 
        <div style="float:left;">
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sof_irai_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['sof_irai_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['sof_irai_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['fax_nenko_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['fax_nenko_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['fax_nenko_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sof_yotei_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['sof_yotei_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['sof_yotei_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['shoko_seki_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_seki_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_seki_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['saiko_yotei_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_yotei_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_yotei_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sek_yotei_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['sek_yotei_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['sek_yotei_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['color_kosei_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['this_year_sales_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['this_year_sales_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['this_year_sales_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['this_year_cost_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['this_year_cost_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['this_year_cost_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sanno_cost_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_cost_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_cost_c']['html'];?>
</dd>
      </div> 
		<!---   --->
         <div style="clear: both;"></div>
          <p>-------------------------------------------------------------------------------</p>
         <div style="float:left;">
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pmh_cost_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_cost_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_cost_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['post_cost_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['post_cost_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['post_cost_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['bes_cost_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['bes_cost_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['bes_cost_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sanno_keisai_cost_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_keisai_cost_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_keisai_cost_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sek_knr_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['sek_knr_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['sek_knr_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['tdan_sek_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_sek_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_sek_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['any_cost_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['any_cost_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['any_cost_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['bunrui_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['bunrui_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['bunrui_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sek_ng_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['sek_ng_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['sek_ng_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kgo_sek_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_sek_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_sek_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['data_select_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['data_select_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['data_select_kbn_c']['html'];?>
</dd>
      </div> 
       <div style="float:left;">
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['web_pmh_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['web_pmh_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['web_pmh_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sho_sof_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['sho_sof_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['sho_sof_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kgo_ren_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_ren_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_ren_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kjn_inf_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['kjn_inf_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['kjn_inf_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['cansel_policy_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_policy_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_policy_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['e_learning_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['e_learning_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['e_learning_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kyufu_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['contact_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['contact_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['contact_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['old_crs_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['old_crs_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['old_crs_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['special_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['special_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['special_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['rental_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['rental_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['rental_c']['html'];?>
</dd>
      </div>
      <div style="float:left;">
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['memos_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['memos_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['memos_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['web_pmh_url_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['web_pmh_url_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['web_pmh_url_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['id_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['id_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['id_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pass_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['pass_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pass_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['dl_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['dl_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['dl_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['nik_bp_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['nik_bp_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['nik_bp_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['web_noh_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['web_noh_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['web_noh_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['ker_cd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['ker_cd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['ker_cd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kyufu_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['cansel_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['dan_adr_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['dan_adr_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['dan_adr_chk_c']['html'];?>
</dd>
      </div>
       <div style="float:left;">
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['zai_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['zai_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['zai_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['saij_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['saij_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['saij_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['e_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['e_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['e_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sku_inf_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['sku_inf_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['sku_inf_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['one_p_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['one_p_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['one_p_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['juryo_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['juryo_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['juryo_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['juko_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['juko_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['juko_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['eig_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['eig_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['eig_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['lbl_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['lbl_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['lbl_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sku_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['sku_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['sku_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['nani_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['nani_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['nani_chk_c']['html'];?>
</dd>
      </div>
        <div style="clear: both;"></div>
       <p>-------------------------------------------------------------------------------</p>       
      <div style="float:left;">
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kmk_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['kmk_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['kmk_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['etc_chk_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_chk_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['etc_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['tdan_kyufu_memo_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_kyufu_memo_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_kyufu_memo_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['tdan_zai_memo_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_zai_memo_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_zai_memo_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['tdan_one_p_memo_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_one_p_memo_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_one_p_memo_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['tdan_etc_memo_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_etc_memo_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_etc_memo_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['ksy_cd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['ksy_cd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['ksy_cd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pmh_cycle_kbn_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_cycle_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_cycle_kbn_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['html'];?>
</dd>
      </div>
       <div style="float:left;">
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['deli_type_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_type_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['deli_type_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['hyosi_colors_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['hyosi_colors_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['hyosi_colors_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['p_nd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['html'];?>
</dd>
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['upd_ymd_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['upd_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['upd_ymd_c']['html'];?>
</dd>	
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pmh_type_dantai_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_dantai_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_dantai_c']['html'];?>
</dd>
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['insatu_dantai_c']['required']) {?> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['insatu_dantai_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['insatu_dantai_c']['html'];?>
</dd>		
      </div>
      
      	<!---   --->
       <div style="clear: both;"></div>
        
    <dd>
    <?php if (!isset($_smarty_tpl->tpl_vars['sts'])) $_smarty_tpl->tpl_vars['sts'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['sts']->value = 'ins') {?>          
        <?php echo $_smarty_tpl->tpl_vars['form']->value['buttons']['insert']['html'];?>

    <?php } else { ?>
	    <?php echo $_smarty_tpl->tpl_vars['form']->value['buttons']['send']['html'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['buttons']['reset']['html'];?>

        <form name="addlist_f1" method="post" action="index.php">
	         <input type="submit" value="Pamphlet情報　複写作成 " name="new">
        </form>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value!=null) {?>
        <input type="button" onclick="location.href='index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'" value="戻る" />
	<?php } else { ?>
		<input type="button" onclick="location.href='index.php'" value="戻る" />
	<?php }?>
    </dd>
</form>
<?php if ($_smarty_tpl->tpl_vars['form']->value['requirednote']&&!$_smarty_tpl->tpl_vars['form']->value['frozen']) {?>
	<?php echo $_smarty_tpl->tpl_vars['form']->value['requirednote'];?>

<?php }?>
</body>
</html>
<?php }} ?>
