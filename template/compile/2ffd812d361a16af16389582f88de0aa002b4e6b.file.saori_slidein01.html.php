<?php /* Smarty version Smarty-3.1.18, created on 2015-11-25 16:41:01
         compiled from ".\template\saori_slidein01.html" */ ?>
<?php /*%%SmartyHeaderCode:2101256555dafd0c062-03004725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ffd812d361a16af16389582f88de0aa002b4e6b' => 
    array (
      0 => '.\\template\\saori_slidein01.html',
      1 => 1448437218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2101256555dafd0c062-03004725',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56555dafd0c063_26714457',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56555dafd0c063_26714457')) {function content_56555dafd0c063_26714457($_smarty_tpl) {?><html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>横からスライドインするメニュー demo｜memocarilog</title>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="template/SlideIn_Menu-master/style.css" media="screen, projection, print">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>--->


<script>
$(function(){
var menu = $('#slide_menu'), // スライドインするメニューを指定
	menuBtn = $('#menu-btn'), // トリガーとなるボタンを指定
	body = $(document.body), 	
    menuWidth = menu.outerWidth();	            

    menuBtn.on('click', function(){
	body.toggleClass('open');
        if(body.hasClass('open')){
			body.animate({'left' : menuWidth }, 300);			
			menu.animate({'left' : 0 }, 300);					
		} else {
			menu.animate({'left' : -menuWidth }, 300);
			body.animate({'left' : 0 }, 300);			
		}		     
    });
});    
</script>

</head>
<body>
<div class="container">

    <h1>←ボタンをクリックで横からスライドインするメニュー demo｜memocarilog</h1>
    
    <!-- スライドメニュー部分-->
    <nav id="slide_menu">
        <ul>
            <li><a href="#">menu1</a></li>
            <li><a href="#">menu2</a></li>
            <li><a href="#">menu3</a></li>
            <li><a href="#">menu4</a></li>
            <li><a href="#">menu5</a></li>
        </ul>
    </nav>

    <!--メニューを出すボタン
    <button id="button"><i class="fa fa-bars"></i> Menu</button>--->
    <div id="menu-btn"> &#9776; Menu</div>
    <div class="content">
        <section>
            <h2>#Title</h2>
            <img src="SlideIn_Menu-master/image/1.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>
    </div><!-- /.content -->	

</div><!-- /.container -->
</body>
</html><?php }} ?>
