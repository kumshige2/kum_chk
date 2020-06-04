<?php /* Smarty version Smarty-3.1.18, created on 2015-05-08 16:26:26
         compiled from ".\template\jstage_aligner01.html" */ ?>
<?php /*%%SmartyHeaderCode:7211554c628cd3d746-95491894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5539ee911ce4bb6a41c6f2c73bf5ad6209cefca3' => 
    array (
      0 => '.\\template\\jstage_aligner01.html',
      1 => 1431069979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7211554c628cd3d746-95491894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_554c628cd3d747_43155543',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c628cd3d747_43155543')) {function content_554c628cd3d747_43155543($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="content-language" content="ja">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <title>jStageAligner sample</title>

    <meta http-equiv="content-script-type" content="text/javascript">
    <meta http-equiv="content-style-type" content="text/css">
    <script type="text/javascript" src="template/jStageAligner-master/sample/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="template/jStageAligner-master/src/jquery.jStageAligner.js"></script>
  
   <script type="text/javascript">

      $(function() {
        $("#box1").jStageAligner("CENTER_BOTTOM", {time: 500, easing: "swing", callback: function() {
          //alert("ok"); 
        }});
        $("#box2").jStageAligner("CENTER_MIDDLE", {time: 200, easing: "swing"});
        $("#box3").jStageAligner("RIGHT_BOTTOM");
        $("#box4").jStageAligner("LEFT_BOTTOM", {time: 100});
        $("#box5").jStageAligner("RIGHT_MIDDLE", {time: 200});
        $("#box6").jStageAligner("CENTER_TOP", {marginTop: 200});
      });
	  
    </script>

    <style type="text/css">
      body {
        margin: 0;
        padding: 0;
      }

      h1, pre, p {
        margin: 20px;
      }


      #container {
        height: 1000px;
      }

      #box1 {
        width: 100px;
        height: 100px;
        background-color: #000;
      }

      #box2 {
        width: 100px;
        height: 100px;
        /*---background-color: #f00;---*/
		background-color:#69F;
      }

      #box3 {
        width: 100px;
        height: 100px;
        background-color: #0f0;
      }

      #box4 {
        width: 100px;
        height: 100px;
        background-color: #0ff;
      }

      #box5 {
        width: 100px;
        height: 100px;
        background-color: #ff0;
      }

      #box6 {
        width: 100px;
        height: 100px;
        background-color: #ccc;
      }
      
    </style>

  </head>
  <body>
    <h1>jStageAligner sample</h1>
    <p><a href="https://github.com/tanabe/jStageAligner">tanabe's jStageAligner at master - GitHub</a></p>

    <div id="container">
      <div id="box1"></div>
      <div id="box2"></div>
      <div id="box3"></div>
      <div id="box4"></div>
      <div id="box5"></div>
      <div id="box6"></div>
    </div>
  </body>
</html>
<?php }} ?>
