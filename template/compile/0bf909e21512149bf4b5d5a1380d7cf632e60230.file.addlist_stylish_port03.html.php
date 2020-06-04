<?php /* Smarty version Smarty-3.1.18, created on 2016-01-28 10:11:30
         compiled from ".\template\addlist_stylish_port03.html" */ ?>
<?php /*%%SmartyHeaderCode:113756a96ac20f5d55-62400364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bf909e21512149bf4b5d5a1380d7cf632e60230' => 
    array (
      0 => '.\\template\\addlist_stylish_port03.html',
      1 => 1446451937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113756a96ac20f5d55-62400364',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56a96ac216fb60_76737000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a96ac216fb60_76737000')) {function content_56a96ac216fb60_76737000($_smarty_tpl) {?><!DOCTYPE html>
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
<script>
function Settoday(){
var today = new Date() ;
var weekday = [ "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat" ] ;
// 日時オブジェクトを作成
var nObj = new Date() ;

// 日時 (先頭に0が付かない)
var year = nObj.getFullYear() ;			// 年
var month = nObj.getMonth() + 1 ;		// 月
var date = nObj.getDate() ;					// 日
var hour = nObj.getHours() ;					// 時
var minute = nObj.getMinutes() ;			// 分
var second = nObj.getSeconds() ;			// 秒

// 日時 (1桁の場合、先頭を0埋めにする)
var month2 = add0( (nObj.getMonth() + 1) ) ;	// 月
var date2 = add0( nObj.getDate() ) ;					// 日
var hour2 = add0( nObj.getHours() ) ;				// 時
var minute2 = add0( nObj.getMinutes() ) ;		// 分
var second2 = add0( nObj.getSeconds() ) ;		// 秒

// 曜日 (日本語)
var weekDayJP = ["日","月","火","水","木","金","土"] ;
var wDJ = weekDayJP[nObj.getDay()] ;

// 曜日 (英語)
var weekDayEN = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"] ;
var wDE = weekDayEN[nObj.getDay()] ;
  
  //document.getElementById(weekday[today.getDay()]).style.display="table";
}
</script>

<script type="text/javascript">
$(document).ready( function(){ 
 // document.getElementById('Mon').style.display = "table";
// var nObj = new Date() 
 //var weekDayEN = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"] ;
 //var wDE = weekDayEN[nObj.getDay()] ;
 //document.getElementById(weekday[today.getDay()]).style.display="table";
 //document.getElementById(wDE).style.display="table";
 //var minute2 =  nObj.getMinutes();
 var minute2 =(~~(Math.random()*(50-1)+1));
 
 if (50 <= minute2  && minute2 <= 50 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header03");
  }else if (49 <= minute2  && minute2 <= 49 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header04");
  }else if (48 <= minute2  && minute2 <= 48 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header05"); 
  }else if (47 <= minute2  && minute2 <= 47 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header06");
  }else if (46 <= minute2  && minute2 <= 46 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header07");
  }else if (45 <= minute2  && minute2 <= 45 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header08");
  }else if (44 <= minute2  && minute2 <= 44 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header09");
  }else if (43 <= minute2  && minute2 <= 43 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header10");
  }else if (42 <= minute2  && minute2 <= 42 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header11"); 
  }else if (31 <= minute2  && minute2 <= 41 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header02");  
  }else if (21 <= minute2  && minute2 <= 30 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header01"); 
  }else{
  }
  
});
function add0(str)
{
	return ( "0" + str ).substr( -2 ) ;
}
</script>

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
    <header id="top" class="header00">
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
