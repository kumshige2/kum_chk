<?php
/* Smarty version 3.1.32, created on 2018-11-29 15:59:17
  from 'C:\xampp\htdocs\composer\test\kum_cafe\template\login03.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bff8e4517f008_39727229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e139fe37fe638d07d768fc41d28b49a9fbbcb5c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\composer\\test\\kum_cafe\\template\\login03.html',
      1 => 1543474039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bff8e4517f008_39727229 (Smarty_Internal_Template $_smarty_tpl) {
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
	<style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
				background: #563c55 url(template/img/blurred.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
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
  <div class="codrops-top"> <a href="http://tympanus.net/Tutorials/RealtimeGeolocationNode/"> <strong>&laquo; Previous Demo: </strong>Real-Time Geolocation Service with Node.js </a> <span class="right"> <a href="http://tympanus.net/codrops/?p=11372"> <strong>Back to the Codrops Article</strong> </a> </span>
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
    <h1>Custom <strong>Login Form</strong> Styling</h1>
    <h2>Creative and modern form design with CSS magic</h2>
    <nav class="codrops-demos"> <a href="index.html">Demo 1</a> <a href="index2.html">Demo 2</a> <a class="current-demo" href="index3.html">Demo 3</a> <a href="index4.html">Demo 4</a> <a href="index5.html">Demo 5</a> </nav>
    <div class="support-note"> <span class="note-ie">Sorry, only modern browsers.</span> </div>
  </header>
  <section class="main">
    <form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
 class="form-3 clearfix">
     <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

     
      <p class="clearfix">
        <label for="login">Username</label>
        <input type="text" name="login" id="uname" placeholder="User-Id">
      </p>
      <p class="clearfix">
        <label for="password">Password</label>
        <input type="password" name="password" id="upass" placeholder="Password">
      </p>
      <p class="clearfix">
        <!---<input type="checkbox" name="remember" id="remember">--->
        <label for="dummy">         </label>
        <label for="remember">         </label>
      </p>
      <p class="clearfix">
        <input type="submit" name="submit" value="Sign in">
      </p>
    </form>
    ​ </section>
</div>
</body>
</html><?php }
}
