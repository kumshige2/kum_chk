<?php /* Smarty version Smarty-3.1.18, created on 2015-09-07 11:09:09
         compiled from ".\template\gant_pmh01.html" */ ?>
<?php /*%%SmartyHeaderCode:2228353f2a896a9cdf3-49517883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd740ead1d2c691cf03bf7623a2cb43416dd1a965' => 
    array (
      0 => '.\\template\\gant_pmh01.html',
      1 => 1441591737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2228353f2a896a9cdf3-49517883',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f2a896aeeeb1_44734232',
  'variables' => 
  array (
    'form' => 0,
    'p_nm' => 0,
    'sf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f2a896aeeeb1_44734232')) {function content_53f2a896aeeeb1_44734232($_smarty_tpl) {?><!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link rel="stylesheet" href="template/js/jQuery.Gantt-master/css/style.css" />
<!-- git hub  button ----->
<link rel="stylesheet" href="template/git_hub_btn/css/gh-buttons01.css">
<!-- git hub button /prettyify -->
<link rel="stylesheet" href="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css">
 <style type="text/css">
			body {
				font-family: Helvetica, Arial, sans-serif;
				font-size: 13px;
				padding: 0 0 50px 0;
			}
			.contain {
				width: 800px;
				margin: 0 auto;
			}
			h1 {
				margin: 40px 0 20px 0;
			}
			h2 {
				font-size: 1.5em;
				padding-bottom: 3px;
				border-bottom: 1px solid #DDD;
				margin-top: 50px;
				margin-bottom: 25px;
			}
			table th:first-child {
				width: 150px;
			}
</style>
<script type ="text/javascript" src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type ="text/javascript" src="template/js/jQuery.Gantt-master/js/jquery.fn.gantt.js"></script>

  <!-- git hub  button ----->
<script src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"></script>

<script type ="text/javascript" src="template/js/aaa.js"></script>

  <title>Pamphlet Gantt</title>
    </head>
    <body style="background-image: url(template/162006_m_wi/black-and-white-ocean.jpg);background-size:cover;">
 <form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
 class="def" method='post'>
   <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>
 
   <?php echo $_smarty_tpl->tpl_vars['form']->value['action']['html'];?>
 
    
     <div class="contain">
     <h1>Pamphlet Order Schedule <small>&mdash; 発注スケジュール</small> </h1>
    <!--
     <h2><?php echo $_smarty_tpl->tpl_vars['p_nm']->value;?>
</h2>
	   <div class="gantt">
       </div>
       --->
       <!--  <input type="button" value="kakunin" onClick="kakunin()">--->
  </form> 
<button type="submit" onclick="location.href='index.php?module=search'" value="return" name="return" class="button01 icon home" style="width:120px">Return</button>
         <!--<p><a href=<?php echo $_smarty_tpl->tpl_vars['sf']->value;?>
><?php echo $_smarty_tpl->tpl_vars['p_nm']->value;?>
</a></p>--->
         <p><a href=<?php echo $_smarty_tpl->tpl_vars['sf']->value;?>
>発注スケジュール Excel</a></p>
    </div>
   </body>
 
</html><?php }} ?>
