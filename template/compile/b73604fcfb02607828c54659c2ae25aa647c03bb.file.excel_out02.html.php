<?php /* Smarty version Smarty-3.1.18, created on 2016-03-01 14:22:24
         compiled from ".\template\excel_out02.html" */ ?>
<?php /*%%SmartyHeaderCode:22816547d78cf4cc708-67815469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b73604fcfb02607828c54659c2ae25aa647c03bb' => 
    array (
      0 => '.\\template\\excel_out02.html',
      1 => 1456809726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22816547d78cf4cc708-67815469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_547d78cf66e688_96173073',
  'variables' => 
  array (
    'add_res' => 0,
    'form' => 0,
    'error' => 0,
    'sf1' => 0,
    'pmh_select01' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d78cf66e688_96173073')) {function content_547d78cf66e688_96173073($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<link rel="stylesheet" type="text/css" href="template/css/style01.css" />
<link rel="stylesheet" type="text/css" media="screen" href="template/css/css-table.css" />
<!--- table grid ---->
<link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style00.css">
<link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style01.css">
<link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />
 <!-- git hub  button ----->
<link rel="stylesheet" href="template/git_hub_btn/css/gh-buttons01.css">
<!-- git hub button /prettyify -->
<link rel="stylesheet" href="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css">
<!-----select 2 ---->
  <link type="text/css" href="template/css/select2.css" rel="stylesheet"/>
  <link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />

 <link rel="stylesheet" media="screen" href="template/fancyselect/index01.css">  
<title>アドレス帳 ～アドレス詳細画面～</title>
  
  <!---- select2 ---->
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript" src="template/js/select2.js"></script>

    <script>   //  $("#states").select2();
        $(document).ready(function() {
       
			 $(".states").select2();  
			 $("#makerPulldown").select2();
			 
			 $("div#ksy").addClass('invisible');   
        });
</script>
  <!----select2 end ------>
  <!-----
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>--->

  <!-- git hub  button ----->
 <script src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"></script>

 
</head>
<body>
<!--<h1>アドレス詳細（<?php echo $_smarty_tpl->tpl_vars['add_res']->value['name_c'];?>
） </h1>
<h2>アドレス詳細（<<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_nm_j'];?>
>）</h2>--->
<div class='theme01'>
<h2>Pamphlet 検索</h2>
<p>A better select for discerning web developers everywhere.</p>
</div>
<div style="color:red"> <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['field_name']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
   <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br>
   <?php } ?> </div>
<!--<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
 class="def" method='post'>-->
<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
  method='post'>
   <div class="container clearfix">
     <div class="grid12 firtst"></div>
     <div class="grid6 first" >
       <p><a href=<?php echo $_smarty_tpl->tpl_vars['sf1']->value;?>
><?php echo $_smarty_tpl->tpl_vars['pmh_select01']->value;?>
</a></p>
       <p><button class="button01 icon log" type="button" onclick="location.href='index.php?module=pmh_select'" style="width:120px">Return</button></p>
      
   <!---<td><input type="button" onclick="location.href='index.php'" value="   Return   " /> </td>--->
     </div>
      <div class="grid6" ></div>   
</form>
   </body>
 
</html><?php }} ?>
