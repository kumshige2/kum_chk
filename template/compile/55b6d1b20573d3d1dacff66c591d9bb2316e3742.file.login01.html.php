<?php /* Smarty version Smarty-3.1.18, created on 2014-12-05 13:52:53
         compiled from ".\template\customlogin\login01.html" */ ?>
<?php /*%%SmartyHeaderCode:70745480337f7791c9-25739686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55b6d1b20573d3d1dacff66c591d9bb2316e3742' => 
    array (
      0 => '.\\template\\customlogin\\login01.html',
      1 => 1417755168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70745480337f7791c9-25739686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5480337f794741_13332406',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5480337f794741_13332406')) {function content_5480337f794741_13332406($_smarty_tpl) {?><html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="template/customlogin/css/style.css" />
		<!--<script src="template/sustomlogin/js/modernizr.custom.63321.js"></script>--->
		
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(template/customlogin/images/bg2.jpg) no-repeat center top;
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
            <div class="codrops-top">
                <a href="http://tympanus.net/Tutorials/RealtimeGeolocationNode/">
                    <strong>&laquo; Previous Demo: </strong>Real-Time Geolocation Service with Node.js
                </a>
                <span class="right">
                	<a href="http://www.flickr.com/photos/12943476@N04/4017721337/in/photostream">Background by Robert Hamilton</a>
                    <a href="http://tympanus.net/codrops/?p=11372">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
            </div><!--/ Codrops top bar -->
			
			<header>
			
				<h1>Pamphlet Sheet  <strong>Login Form</strong></h1>
				<h2>Creative and modern form design with CSS magic</h2>
				
				<nav class="codrops-demos">
					<a href="index.html">Demo 1</a>
					<a href="index2.html">Demo 2</a>
					<a href="index3.html">Demo 3</a>
					<a class="current-demo" href="index4.html">Demo 4</a>
					<a href="index5.html">Demo 5</a>
				</nav>

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
				<form class="form-4">
				    <h1>Login or Register</h1>
				    <p>
				        <label for="login">Username or email</label>
				        <input type="text" name="login" placeholder="Username or email" required>
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input type="password" name='password' placeholder="Password" required> 
				    </p>

				    <p>
				        <input type="submit" name="submit" value="Continue">
				    </p> 
                    <dl>
		<dt><?php echo $_smarty_tpl->tpl_vars['form']->value['uname']['label'];?>
</dt><dd><?php echo $_smarty_tpl->tpl_vars['form']->value['uname']['html'];?>
</dd>
		<dt><?php echo $_smarty_tpl->tpl_vars['form']->value['upass']['label'];?>
</dt><dd><?php echo $_smarty_tpl->tpl_vars['form']->value['upass']['html'];?>
</dd>
		<dd><?php echo $_smarty_tpl->tpl_vars['form']->value['send']['html'];?>
</dd>
	</dl>      
				</form>​
			</section>
			
        </div>
       
    </body>
</html><?php }} ?>
