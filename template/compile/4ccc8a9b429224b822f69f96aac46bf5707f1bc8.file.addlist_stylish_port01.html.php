<?php /* Smarty version Smarty-3.1.18, created on 2015-08-31 20:03:41
         compiled from ".\template\addlist_stylish_port01.html" */ ?>
<?php /*%%SmartyHeaderCode:1719655e3e0d23a9f34-69091821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ccc8a9b429224b822f69f96aac46bf5707f1bc8' => 
    array (
      0 => '.\\template\\addlist_stylish_port01.html',
      1 => 1441018982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1719655e3e0d23a9f34-69091821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e3e0d242adb4_03039761',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e3e0d242adb4_03039761')) {function content_55e3e0d242adb4_03039761($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Stylish Portfolio - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="template/stylish_portfolio/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="template/stylish_portfolio/css/stylish_portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="template/stylish_portfolio/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
     <!-- git hub  button ----->
  <link rel="stylesheet" href="template/git_hub_btn/css/gh-buttons01.css">
  <!-- git hub button /prettyify -->
  <link rel="stylesheet" href="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <!-- git hub  button ----->
<script src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"></script>
</head>

<body>
<form name="addlist_f1" method="post" action="index.php">
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Menu Pamphlet</a>
            </li>
            <li>             
              <button type="submit" value="View" id ="view" name="search" class="button01 icon chat" style="width:130px">View</button>               
            </li>          
            <li>             
              <button type="submit" value="search" id ="search" name="pmh_select" class="button01 icon search" style="width:130px">Search</button>               
            </li>
            <li>
              <button type="submit" value="schedule" id ="order_sht01" name="order_sche" class="button01 icon log" style="width:130px">Schedule</button>
            </li>
            <li>
             <button type="submit" value="Logout" id ="logout" name="logout" class="button01 icon home" style="width:130px">Logout</button>            
            </li>
        </ul>
    </nav>
</form>
    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Pamphlet....</h1>
            <h3>Free Bootstrap Themes &amp; Templates</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>


    <!-- jQuery -->
    <script src="template/stylish_portfolio/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="template/stylish_portfolio/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
<?php }} ?>
