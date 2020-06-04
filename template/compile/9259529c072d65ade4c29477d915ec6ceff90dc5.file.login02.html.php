<?php /* Smarty version Smarty-3.1.18, created on 2018-07-26 11:09:16
         compiled from ".\template\login02.html" */ ?>
<?php /*%%SmartyHeaderCode:2477654813d9da32104-18293850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9259529c072d65ade4c29477d915ec6ceff90dc5' => 
    array (
      0 => '.\\template\\login02.html',
      1 => 1532570952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2477654813d9da32104-18293850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54813d9da5d083_10787765',
  'variables' => 
  array (
    'form' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54813d9da5d083_10787765')) {function content_54813d9da5d083_10787765($_smarty_tpl) {?><html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Custom Login Form Styling</title>
<meta name="description" content="Custom Login Form Styling with CSS3" />
<meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
<meta name="author" content="Codrops" />
<!--<link rel="shortcut icon" href="favicon.ico"> -->
<link rel="stylesheet" type="text/css" href="template/css/customlogin/style.css" />
<!---- 
bg_01.jpg
wood_pattern.jpg
index_179.jpg
designerspic_056.jpg)
 --->
<script src="template/js/customlogin/modernizr.custom.63321.js"></script>

<style>
body {
	background: #e1c192 url(template/img/wood_pattern.jpg);
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
  <div class="codrops-top"><!--- <a href="http://tympanus.net/Tutorials/RealtimeGeolocationNode/">
   <strong>&laquo; Previous Demo: </strong>Real-Time Geolocation Service with Node.js </a> <span class="right"> <a href="http://tympanus.net/codrops/?p=11372"> <strong>Back to the Fukyu Article</strong> </a> </span>-->
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
    <h1>PPPPP..... <strong>Login </strong></h1>
    <!--<h2>Creative and modern form design with CSS magic</h2>--->
  <!---
    <nav class="codrops-demos"> <a href="index.html">Demo 1</a> <a class="current-demo" href="index2.html">Demo 2</a> <a href="index3.html">Demo 3</a> <a href="index4.html">Demo 4</a> <a href="index5.html">Demo 5</a> </nav>---->
    <div class="support-note"> <span class="note-ie">Sorry, only modern browsers.</span> </div>
  </header>
  <section class="main">
     <form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
 class="form-2 clearfix">
     <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

      <h1><span class="log-in">Log in</span> or <span class="sign-up">sign up</span></h1>
      <p class="float">
        <label for="login"><i class="icon-user"></i>User-Id</label>
        <input type="text" name="uname" placeholder="User-Id">
      </p>
      <p class="float">
        <label for="password"><i class="icon-lock"></i>Password</label>
        <input type="password" name="upass" placeholder="Password" class="showpassword">
      </p>
      <!---
      <p class="clearfix"> <a href="#" class="log-twitter">Log in</a>
        <input type="submit" name="submit" value="Log in">
      </p>---->
       <p class="clearfix"> 
        <input type="submit" name="submit" value="Log in">
      </p>
    </form>
    ​​ </section>
</div>
<!-- jQuery if needed --> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
<script type="text/javascript">
			$(function(){
			    $(".showpassword").each(function(index,input) {
			        var $input = $(input);
			        $("<p class='opt'/>").append(
			            $("<input type='checkbox' class='showpasswordcheckbox' id='showPassword' />").click(function() {
			                var change = $(this).is(":checked") ? "text" : "password";
			                var rep = $("<input placeholder='Password' type='" + change + "' />")
			                    .attr("id", $input.attr("id"))
			                    .attr("name", $input.attr("name"))
			                    .attr('class', $input.attr('class'))
			                    .val($input.val())
			                    .insertBefore($input);
			                $input.remove();
			                $input = rep;
			             })
			        ).append($("<label for='showPassword'/>").text("Show password")).insertAfter($input.parent());
			    });

			    $('#showPassword').click(function(){
					if($("#showPassword").is(":checked")) {
						$('.icon-lock').addClass('icon-unlock');
						$('.icon-unlock').removeClass('icon-lock');    
					} else {
						$('.icon-unlock').addClass('icon-lock');
						$('.icon-lock').removeClass('icon-unlock');
					}
			    });
			});
		</script>
</body>
</html><?php }} ?>
