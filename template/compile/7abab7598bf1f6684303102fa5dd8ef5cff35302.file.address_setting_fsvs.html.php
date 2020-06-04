<?php /* Smarty version Smarty-3.1.18, created on 2015-01-06 13:38:38
         compiled from ".\template\address_setting_fsvs.html" */ ?>
<?php /*%%SmartyHeaderCode:5754ab4f5894a172-30062712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7abab7598bf1f6684303102fa5dd8ef5cff35302' => 
    array (
      0 => '.\\template\\address_setting_fsvs.html',
      1 => 1420518274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5754ab4f5894a172-30062712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54ab4f5896d3f4_87086723',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ab4f5896d3f4_87086723')) {function content_54ab4f5896d3f4_87086723($_smarty_tpl) {?><!doctype html>
<html class="fsvs" lang="en">
    <head>
        <link href="template/fsvs/assets/css/style.css" media="all" rel="stylesheet" type="text/css" />
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
       <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="template/fsvs/assets/js/bundle.js"></script>
        <script>
        jQuery(document).ready(function($){
            var slider = $.fn.fsvs({
                speed               : 1000,
                bodyID              : 'fsvs-body',
                selector            : '> .slide',
                mouseSwipeDisance   : 40,
                afterSlide          : function(){},
                beforeSlide         : function(){},
                endSlide            : function(){},
                mouseWheelEvents    : true,
                mouseWheelDelay     : false,
                mouseDragEvents     : true,
                touchEvents         : true,
                arrowKeyEvents      : true,
                pagination          : true,
                nthClasses          : true,
                detectHash          : true
            });
        });
        </script>
    </head>
    <body>
        <div id="fsvs-body">
            <div class="slide">Slide 1</div>
            <div class="slide">Slide 2</div>
            <div class="slide">Slide 3</div>
            <div class="slide">Slide 4</div>
        </div>
    </body>
</html><?php }} ?>
