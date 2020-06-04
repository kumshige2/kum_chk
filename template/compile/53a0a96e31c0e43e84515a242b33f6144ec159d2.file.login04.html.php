<?php /* Smarty version Smarty-3.1.18, created on 2014-12-08 09:40:03
         compiled from ".\template\login04.html" */ ?>
<?php /*%%SmartyHeaderCode:22560548159e71702c3-61931756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53a0a96e31c0e43e84515a242b33f6144ec159d2' => 
    array (
      0 => '.\\template\\login04.html',
      1 => 1417999187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22560548159e71702c3-61931756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_548159e71702c0_69028195',
  'variables' => 
  array (
    'form' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548159e71702c0_69028195')) {function content_548159e71702c0_69028195($_smarty_tpl) {?><html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Custom Login Form Styling</title>
<meta name="description" content="Custom Login Form Styling with CSS3" />
<meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
<meta name="author" content="Codrops" />
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="template/css/customlogin/style.css" />
<script src="template/js/customlogin/modernizr.custom.63321.js"></script>
<style>
@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700|Handlee);
body {
	background: #eedfcc url(template/img/bg2.jpg) no-repeat center top;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size: cover;
}
.container > header h1, .container > header h2 {
	color: #fff;
	text-shadow: 0 1px 1px rgba(0,0,0,0.5);
}
</style>
<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-7243260-2']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
</head>
<body>
<div class="container"> 
  
  <!-- Codrops top bar -->
  <div class="codrops-top"> <a href="http://tympanus.net/Tutorials/RealtimeGeolocationNode/"> <strong>&laquo; Previous Demo: </strong>Real-Time Geolocation Service with Node.js </a> <span class="right"> <a href="http://tympanus.net/codrops/?p=11372"> <strong>Back to the Codrops Article</strong> </a> </span>
    <div style="color:red"> <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['field_name']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
      <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br>
      <?php } ?> </div>
  </div>
  <header>
    <h1>Custom <strong>Login Form</strong> Styling</h1>
    <h2>Creative and modern form design with CSS magic</h2>
    <nav class="codrops-demos"> <a href="index.html">Demo 1</a> <a href="index2.html">Demo 2</a> <a href="index3.html">Demo 3</a> <a class="current-demo" href="index4.html">Demo 4</a> <a  href="index5.html">Demo 5</a> </nav>
    <div class="support-note"> <span class="note-ie">Sorry, only modern browsers.</span> </div>
  </header>
 
  <section class="main">
     <form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
 class="form-4 clearfix">
      <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

      <h1>Login </h1>
      <p>
        <label for="login">Username or email</label>
        <input type="text" name="uname" placeholder="User-Id" required>
      </p>
      <p>
        <label for="password">Password</label>
        <input type="password" name='upass' placeholder="Password" required>
      </p>
      <p>
        <input type="submit" name="submit" value="Login">
      </p>
    </form>
    ​ </section>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script> 
<script type="text/javascript">
		$(function(){
			$('input, textarea').placeholder();
		});
		</script>
</body>
</html><?php }} ?>
