<?php /* Smarty version Smarty-3.1.18, created on 2014-12-25 19:51:23
         compiled from ".\template\address_setting_easy_select.html" */ ?>
<?php /*%%SmartyHeaderCode:17076549bd92af37f91-68808814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14c2775aeda760083f5638d0ca063771650507a5' => 
    array (
      0 => '.\\template\\address_setting_easy_select.html',
      1 => 1419504666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17076549bd92af37f91-68808814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_549bd92b030518_67432262',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549bd92b030518_67432262')) {function content_549bd92b030518_67432262($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Drop-Down List Styling</title>
        <meta name="description" content="Custom Drop-Down List Styling with CSS3" />
        <meta name="author" content="Codrops" />
       <!-- <link rel="shortcut icon" href="../favicon.ico"> -->
        <link rel="stylesheet" type="text/css" href="template/custom_drop/css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="template/custom_drop/js/modernizr.custom.79639.js"></script> 
		<noscript><link rel="stylesheet" type="text/css" href="template/custom_drop/css/noJS.css" /></noscript>
    </head>
    <body>
        <div class="container">
		
			<!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="http://tympanus.net/Tutorials/VerticalShowcaseSlider/">
                    <strong>« Previous Demo: </strong>Vertical Showcase Slider
                </a>
                <span class="right">
                    <a href="http://tympanus.net/codrops/?p=11112">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
            </div><!--/ Codrops top bar -->
			
			<header>
			
				<h1>Custom <strong>Drop-Down List</strong> Styling</h1>
				<h2>Stylish drop-down lists using various CSS techniques</h2>
				
				<nav class="codrops-demos">
					<a class="current-demo" href="template/custom_drop/index.html">Demo 1</a>
					<a href="template/custom_drop/index2.html">Demo 2</a>
					<a href="template/custom_drop/index3.html">Demo 3</a>
					<a href="template/custom_drop/index4.html">Demo 4</a>
					<a href="template/custom_drop/index5.html">Demo 5</a>
				</nav>
				
			</header>
			
			<section class="main">
				<div class="wrapper-demo">
					<div id="dd" class="wrapper-dropdown-1" tabindex="1">
						<span>Gender</span>
					    <ul class="dropdown" tabindex="1">
					        <li><a href="#">Male</a></li>
					        <li><a href="#">Female</a></li>
					    </ul>
					</div>
				​</div>
			</section>
			
        </div>
		<!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			
			function DropDown(el) {
				this.dd = el;
				this.placeholder = this.dd.children('span');
				this.opts = this.dd.find('ul.dropdown > li');
				this.val = '';
				this.index = -1;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						return false;
					});

					obj.opts.on('click',function(){
						var opt = $(this);
						obj.val = opt.text();
						obj.index = opt.index();
						obj.placeholder.text('Gender: ' + obj.val);
					});
				},
				getValue : function() {
					return this.val;
				},
				getIndex : function() {
					return this.index;
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-1').removeClass('active');
				});

			});
			
		</script>
	</body>
</html><?php }} ?>
