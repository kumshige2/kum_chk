<?php /* Smarty version Smarty-3.1.18, created on 2016-05-25 13:45:18
         compiled from ".\template\head.html" */ ?>
<?php /*%%SmartyHeaderCode:23372572fec524ad691-78233201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a7ab4cf055fd5e667811e95367c1a5717bb75a8' => 
    array (
      0 => '.\\template\\head.html',
      1 => 1464151507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23372572fec524ad691-78233201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_572fec525035b0_42032094',
  'variables' => 
  array (
    'add_id' => 0,
    'xxx' => 0,
    'yyy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572fec525035b0_42032094')) {function content_572fec525035b0_42032094($_smarty_tpl) {?><html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <!-- animsition -->
  <link rel="stylesheet" href="template/animsition-master/src/css/animsition.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="template/animsition-master/src/js/animsition.js"></script>
  <script type="text/javascript"> 
$(document).ready(function() {
  $(".anim").animsition({
    inClass               :   'fade-in-left', //ページ表示時のアニメーション
    outClass              :   'fade-out', //遷移時のアニメーション
    inDuration            :    0700,　//inするときの時間
    outDuration           :    0700, //out時の時間
    linkElement           :   '.animsition-link',  //対象のリンク
    touchSupport          :    true, //タップOK
    loading               :    true,　//ローディングOK
    loadingParentElement  :   'body', //アニメーション対象
    loadingClass          :   'animsition-loading', //ローディングのclass
  });
}); 
  </script>
<title>サンプル</title>
</head>
<body class="anim">
<!--<div><?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
</div>-->
<div><?php echo $_smarty_tpl->tpl_vars['xxx']->value;?>
</div>
<!--<div><?php echo $_smarty_tpl->tpl_vars['yyy']->value;?>
</div>-->
<button style='width:120px;margin-top:25px;'><a href="index.php"   class="animsition-link"> <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i></button>
</body>
</html>

<?php }} ?>
