<?php /* Smarty version Smarty-3.1.18, created on 2014-12-05 17:45:27
         compiled from ".\template\login03.html" */ ?>
<?php /*%%SmartyHeaderCode:1923554814bdd648bb2-91251178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c671e733cc845831ae492938ba50ff478dcfe4e5' => 
    array (
      0 => '.\\template\\login03.html',
      1 => 1417769122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1923554814bdd648bb2-91251178',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54814bdd648bb8_94874316',
  'variables' => 
  array (
    'form' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54814bdd648bb8_94874316')) {function content_54814bdd648bb8_94874316($_smarty_tpl) {?><html lang="en">
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
        <input type="text" name="login" id="uname" placeholder="Username">
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
</html><?php }} ?>
