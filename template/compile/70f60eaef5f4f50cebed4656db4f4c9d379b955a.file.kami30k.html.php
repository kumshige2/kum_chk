<?php /* Smarty version Smarty-3.1.18, created on 2015-04-28 10:55:12
         compiled from ".\template\kami30k.html" */ ?>
<?php /*%%SmartyHeaderCode:26033553ee504dfb080-97165454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70f60eaef5f4f50cebed4656db4f4c9d379b955a' => 
    array (
      0 => '.\\template\\kami30k.html',
      1 => 1430186105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26033553ee504dfb080-97165454',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_553ee504e41597_77070162',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553ee504e41597_77070162')) {function content_553ee504e41597_77070162($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>jquery.sidemenu.js</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" href="template/kami30k/stylesheets/jquery.sidemenu.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="template/kami30k/javascripts/jquery.sidemenu.min.js"></script>
    <script src="template/kami30k/javascripts/jquery.sidemenu.js"></script>
  
    <script>

    $.sidemenu({
      side: 'right',
      speed: 200
    });

    </script>
  </head>
  <body>
    <div id="sidemenu" data-role="sidemenu">
      <ul>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Menu</a></li>
        <li class="divider"></li>
        <li><a href="#sidemenu" data-role="sidemenu-toggle">Close</a></li>
      </ul>
    </div>

    <a href="#sidemenu" data-role="sidemenu-toggle">Open side menu</a>
  </body>
</html>
<?php }} ?>
