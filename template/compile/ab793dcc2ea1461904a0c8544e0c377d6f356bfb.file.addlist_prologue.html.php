<?php /* Smarty version Smarty-3.1.18, created on 2014-12-10 16:41:35
         compiled from ".\template\addlist_prologue.html" */ ?>
<?php /*%%SmartyHeaderCode:167095487d7cd82b0c4-07587554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab793dcc2ea1461904a0c8544e0c377d6f356bfb' => 
    array (
      0 => '.\\template\\addlist_prologue.html',
      1 => 1418197292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167095487d7cd82b0c4-07587554',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5487d7cd982d52_89665243',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5487d7cd982d52_89665243')) {function content_5487d7cd982d52_89665243($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Slide Down Box Menu with jQuery and CSS3</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Slide Down Box Menu with jQuery and CSS3" />
        <meta name="keywords" content="jquery, css3, sliding, box, menu, cube, navigation, portfolio, thumbnails"/>
		<link rel="shortcut icon" href="../favicon.ico" type="template/prologue/image/x-icon"/>
        <link rel="stylesheet" href="prologue/css/style.css" type="text/css" media="screen"/>
        <style>
			body{
				background:#333 url(template/prologue/bg.jpg) repeat top left;
				font-family:Arial;
			}
			span.reference{
				position:fixed;
				left:10px;
				bottom:10px;
				font-size:12px;
			}
			span.reference a{
				color:#aaa;
				text-transform:uppercase;
				text-decoration:none;
				text-shadow:1px 1px 1px #000;
				margin-right:30px;
			}
			span.reference a:hover{
				color:#ddd;
			}
			ul.sdt_menu{
				margin-top:150px;
			}
			h1.title{
				text-indent:-9000px;
				background:transparent url(template/prologue/title.png) no-repeat top left;
				width:633px;
				height:69px;
			}
		</style>
    </head>

    <body>
		<div class="content">
			<h1 class="title">Pamphlet Menu</h1>
			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="#">
						<img src="template/prologue/images/2.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">About me</span>
							<span class="sdt_descr">Get to know me</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="template/prologue/images/1.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Portfolio</span>
							<span class="sdt_descr">My work</span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="#">Websites</a>
							<a href="#">Illustrations</a>
							<a href="#">Photography</a>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="template/prologue/images/3.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Inspiration</span>
							<span class="sdt_descr">Where ideas get born</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="template/prologue/images/4.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Photos</span>
							<span class="sdt_descr">I like to photograph</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="template/prologue/images/5.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Blog</span>
							<span class="sdt_descr">I write about design</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="template/prologue/images/6.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Projects</span>
							<span class="sdt_descr">I like to code</span>
						</span>
					</a>
					<div class="sdt_box">
						<a href="#">Job Board Website</a>
						<a href="#">Shopping Cart</a>
						<a href="#">Interactive Maps</a>
					</div>
				</li>
			</ul>
		</div>
        <div>
            <span class="reference">
                <a href="http://tympanus.net/codrops/2010/07/16/slide-down-box-menu/">back to the Codrops Tutorial</a>
				<a href="http://www.flickr.com/photos/arcticpuppy/sets/72157622090180990/">Images by tibchris</a>
            </span>
		</div>

        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="proroluge/js/jquery.easing.1.3.js"></script>
      
    </body>
</html><?php }} ?>
