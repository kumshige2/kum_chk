<?php /* Smarty version Smarty-3.1.18, created on 2016-04-11 09:43:17
         compiled from ".\template\order_sheet01.html" */ ?>
<?php /*%%SmartyHeaderCode:27416546431180e50d4-78933777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dca575d7ee6bbe2b0b5c7dee97b13923e4023f7' => 
    array (
      0 => '.\\template\\order_sheet01.html',
      1 => 1459320453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27416546431180e50d4-78933777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5464311814a971_89362419',
  'variables' => 
  array (
    'form' => 0,
    'sf1' => 0,
    'pmh_sht01' => 0,
    'sf2' => 0,
    'pmh_inf01' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5464311814a971_89362419')) {function content_5464311814a971_89362419($_smarty_tpl) {?><!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="template/css/style01.css" />
<link rel="stylesheet" type="text/css" media="screen" href="template/css/css-table.css" />
 <!--- table grid ---->
  <link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style00.css">
  <link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style01.css">
<!-- git hub  button ----->
  <link rel="stylesheet" href="template/git_hub_btn/css/gh-buttons01.css">
<!-- git hub button /prettyify -->
  <link rel="stylesheet" href="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css">

<link rel="stylesheet" media="screen" href="template/fancyselect/index01.css">
  
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
<script type ="text/javascript"
                src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
  <!-- git hub  button ----->
  <script src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"></script>
  
<!---  Iphone style checkbox radio box  ---->
<!---  Iphone style checkbox radio box  ---->
<title>Pamphlet Order Sheet</title>
</head>
<body>
<div class='theme01'>
<h2>Order Sheet</h2>
<p>A better select for discerning web developers everywhere.</p>
</div>
<!---
<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
  method="post" class="def" >
--->
<form>
   <div class="container clearfix" style="background-color:#eeeeee">
      <div class="grid2 first">
          
        <p><a href=<?php echo $_smarty_tpl->tpl_vars['sf1']->value;?>
 id='sht01'><?php echo $_smarty_tpl->tpl_vars['pmh_sht01']->value;?>
</a></p>
        <p><a href=<?php echo $_smarty_tpl->tpl_vars['sf2']->value;?>
 id='inf01'><?php echo $_smarty_tpl->tpl_vars['pmh_inf01']->value;?>
</a></p>
        <p></p>
         <button type="button" class="button01 icon home" style="width:120px; height:30px;" onclick="location.href='index.php?module=search'">Return</button> 
              
      </div>
      <div class="grid10">       
      </div>
  </div>     
</form>
</body> 
</html><?php }} ?>
