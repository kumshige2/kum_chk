<?php
/* Smarty version 3.1.32, created on 2018-12-27 16:37:36
  from 'C:\xampp\htdocs\composer\test\kum_chk\template\login02.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c2481407e1727_82174086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51da34957efe5b683a1bd24b6883b303aa93a87b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\composer\\test\\kum_chk\\template\\login02.html',
      1 => 1545896209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2481407e1727_82174086 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kum Check</title>
<meta name="description" content="Custom Login Form Styling with CSS3" />
<meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
<meta name="author" content="Codrops" />
<!--<link rel="shortcut icon" href="favicon.ico"> -->
<link rel="stylesheet" type="text/css" href="template/CustomLoginFormStyling/css/style.css" />
<!---- 
bg_01.jpg
wood_pattern.jpg
index_179.jpg
designerspic_056.jpg)
 --->
<?php echo '<script'; ?>
 src="template/CustomLoginFormStyling/js/modernizr.custom.63321.js"><?php echo '</script'; ?>
>

<style>
body {
	background: #e1c192 url(template/img/hue/48-ice.png);
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
<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript">
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
		<?php echo '</script'; ?>
>
</body>
</html><?php }
}
