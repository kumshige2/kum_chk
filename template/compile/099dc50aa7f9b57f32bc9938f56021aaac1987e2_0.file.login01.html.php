<?php
/* Smarty version 3.1.32, created on 2018-11-29 15:57:21
  from 'C:\xampp\htdocs\composer\test\kum_cafe\template\login01.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bff8dd1791e75_18901547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '099dc50aa7f9b57f32bc9938f56021aaac1987e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\composer\\test\\kum_cafe\\template\\login01.html',
      1 => 1543474637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bff8dd1791e75_18901547 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Custom Login Form Styling</title>
<meta name="description" content="Custom Login Form Styling with CSS3" />
<meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
<meta name="author" content="Codrops" />
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="template/CustomLoginFormStyling/css/style.css" />
<?php echo '<script'; ?>
 src="template/CustomLoginFormStyling/js/modernizr.custom.63321.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-7243260-2']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		<?php echo '</script'; ?>
>
</head>
<body>
<div class="container"> 
 <!-- Codrops top bar -->
  <div class="codrops-top"><!--- <a href="http://tympanus.net/Tutorials/RealtimeGeolocationNode/">
   <strong>&laquo; Previous Demo: </strong>Real-Time Geolocation Service with Node.js </a> <span class="right"> <a href="http://tympanus.net/codrops/?p=11372"> <strong>Back to the Fukyu Article</strong> </a> </span>-->
    <div style="color:red"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['errors'], 'error', false, 'field_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->value => $_smarty_tpl->tpl_vars['error']->value) {
?>
      <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </div>
  </div>
  <!--/ Codrops top bar -->
  <header>
    <h1>Kum Check..... <strong>Login </strong></h1>
    <!--<h2>Creative and modern form design with CSS magic</h2>--->
  <!---
    <nav class="codrops-demos"> <a href="index.html">Demo 1</a> <a class="current-demo" href="index2.html">Demo 2</a> <a href="index3.html">Demo 3</a> <a href="index4.html">Demo 4</a> <a href="index5.html">Demo 5</a> </nav>---->
    <div class="support-note"> <span class="note-ie">Sorry, only modern browsers.</span> </div>
  </header>
  <section class="main">
    <form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
 class="form-1 clearfix">
     <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

      <p class="field">
        <input type="text" name="uname" placeholder="User-Id">
        <i class="icon-user icon-large"></i> </p>
      <p class="field">
        <input type="password" name="upass" placeholder="Password">
        <i class="icon-lock icon-large"></i> </p>
      <p class="submit">
        <button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
      </p>
    </form>
  </section>
</div>
</body>
</html><?php }
}
