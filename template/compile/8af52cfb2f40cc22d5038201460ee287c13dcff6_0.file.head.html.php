<?php
/* Smarty version 3.1.32, created on 2019-06-14 14:11:09
  from 'C:\xampp\htdocs\composer\test\kum_chk\template\head.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d032c6debc4b1_41911926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8af52cfb2f40cc22d5038201460ee287c13dcff6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\composer\\test\\kum_chk\\template\\head.html',
      1 => 1477887493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d032c6debc4b1_41911926 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <!-- animsition -->
  <link rel="stylesheet" href="template/animsition-master/src/css/animsition.css">
  <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="template/animsition-master/src/js/animsition.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript"> 
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
  <?php echo '</script'; ?>
>
<title>サンプル</title>
</head>
<body class="anim">

<div><?php echo $_smarty_tpl->tpl_vars['xxx']->value;?>
</div>

<button style='width:120px;margin-top:25px;'><a href="index.php"   class="animsition-link"> <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i></button>
</body>
</html>

<?php }
}
