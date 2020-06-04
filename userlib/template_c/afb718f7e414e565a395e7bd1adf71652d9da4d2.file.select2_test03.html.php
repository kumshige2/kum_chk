<?php /* Smarty version Smarty-3.1.18, created on 2014-09-04 11:51:25
         compiled from "..\template\select2_test03.html" */ ?>
<?php /*%%SmartyHeaderCode:146405407d26052c6c4-83780623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afb718f7e414e565a395e7bd1adf71652d9da4d2' => 
    array (
      0 => '..\\template\\select2_test03.html',
      1 => 1409799080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146405407d26052c6c4-83780623',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5407d26057e765_45424988',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5407d26057e765_45424988')) {function content_5407d26057e765_45424988($_smarty_tpl) {?><!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" href="../template/css/select2.css" rel="stylesheet"/>
       <script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="../template/js/select2.js"></script>
    <script>
        $(document).ready(function() { $("#e1").select2(); });
    </script>
    <script>
	    $(document).ready(function() { $("#e9").select2(); });
   </script>
  
</select>

</head>
<body>
    <select id="e1" size=1 style="width:100px;">
        <option value="ara"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
        <option value="and">安藤</option>
        <option value="ito">伊藤</option>
        <option value="ara">安野</option>
        <option value="and">遠藤</option>
        <option value="ito">伊東</option>　
     </select>   

</body>
</html>
<?php }} ?>
