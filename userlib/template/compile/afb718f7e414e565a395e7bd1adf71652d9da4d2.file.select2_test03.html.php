<?php /* Smarty version Smarty-3.1.18, created on 2014-09-22 13:52:58
         compiled from "..\template\select2_test03.html" */ ?>
<?php /*%%SmartyHeaderCode:253095407ef4d1ae5d4-27752941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afb718f7e414e565a395e7bd1adf71652d9da4d2' => 
    array (
      0 => '..\\template\\select2_test03.html',
      1 => 1411361573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253095407ef4d1ae5d4-27752941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5407ef4d23ee17_31725875',
  'variables' => 
  array (
    'items' => 0,
    'itemdata' => 0,
    'cust_names' => 0,
    'cust_ids' => 0,
    'customer_id' => 0,
    'ad_cd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5407ef4d23ee17_31725875')) {function content_5407ef4d23ee17_31725875($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\php\\pear\\Smarty\\libs\\plugins\\function.html_options.php';
?><!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<link type="text/css" href="../template/css/select2.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="../template/css/screen.css"  media="screen" title="no title" >
	<script type ="text/javascript" 
      src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
	<script type="text/javascript" src="../template/js/select2.js"></script>
    <script src="../template/js/modernizr.js"></script>
	<script>
        $(document).ready(function() { $("#e1").select2(); });
    </script>
	<script>
$(document).ready(function(){
	if (Modernizr.touch) {
			$(".radio-options").bind("click", function(event) {
				if (!($(this).parent('.radio-container').hasClass("active")))	{
				$(this).parent('.radio-container').addClass("active"); 
				event.stopPropagation();
				}
			});	
	$(".toggle").bind("click", function(){ 
		$(this).parents('.radio-container').removeClass("active"); 
		return false;
		 });  
	}
})
</script>
<link href="http://www.jqueryscript.net/css/top.css" rel="stylesheet" type="text/css">
	</head>
	<body>
<!---
  <select id="e1" size=1 style="width:150px;">
         <option value="ara"><?php echo $_smarty_tpl->tpl_vars['items']->value['ad_nm'];?>
</option>
        <option value="and">安藤</option>
        <option value="ito">伊藤</option>
        <option value="ara">安野</option>
        <option value="and">遠藤</option>
        <option value="ito">伊東</option>　
 </select> 

<select  id="e1" size=1 style="width:165px;">
    <option value="def">-------------</option>
    <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
      <option value="aa"><?php echo $_smarty_tpl->tpl_vars['itemdata']->value;?>
</option>
    <?php } ?>
</select>
---->


</fieldset>
<select  name="customer_id" size="<?php echo count($_smarty_tpl->tpl_vars['cust_names']->value);?>
">
   <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['cust_ids']->value,'output'=>$_smarty_tpl->tpl_vars['cust_names']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value),$_smarty_tpl);?>

</select>

<select name="ad_cd" id="e1" size=20 style="width:165px;">
    <option value="def">-------------</option>
     <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['items']->value,'output'=>$_smarty_tpl->tpl_vars['items']->value,'selected'=>$_smarty_tpl->tpl_vars['ad_cd']->value),$_smarty_tpl);?>

</select>
</form>


</body>
</html>
<?php }} ?>
