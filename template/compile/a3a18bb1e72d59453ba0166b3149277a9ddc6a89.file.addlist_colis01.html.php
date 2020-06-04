<?php /* Smarty version Smarty-3.1.18, created on 2015-08-31 13:46:40
         compiled from ".\template\addlist_colis01.html" */ ?>
<?php /*%%SmartyHeaderCode:921455e3bac6849773-12481972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3a18bb1e72d59453ba0166b3149277a9ddc6a89' => 
    array (
      0 => '.\\template\\addlist_colis01.html',
      1 => 1440996397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '921455e3bac6849773-12481972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e3bac69c8519_34019944',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e3bac69c8519_34019944')) {function content_55e3bac69c8519_34019944($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!--[if IE]><meta http-equiv="imagetoolbar" content="no" /><meta http-equiv="X-UA-Compatible" content="IE=8" /><![endif]-->
	<!--Site by Eirik Backer-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!--
<script src="js/jquery.maximage.js" type="text/javascript"></script>
---->
<script type="text/javascript">
$(function(){
	$('img.bgmaximage').maxImage({
		isBackground: true,
		overflow: 'auto',
		verticalAlign:'top'
 	});
});
</script>
<style>
img.bgmaximage{
  position:fixed !important;
}

#maincontent {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 50;
  width: 100%;
}
</style>    
</head>
<body>
<form name="addlist_f1" method="post" action="index.php">
  <img src="template/img/bg.jpg" alt="" class="bgmaximage"/>
  <div id="maincontent">
   <input type="submit" value="Logout" name="logout">
  </div>
</form>
</body>

</html><?php }} ?>
