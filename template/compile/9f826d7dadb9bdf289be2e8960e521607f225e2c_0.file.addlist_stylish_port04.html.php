<?php
/* Smarty version 3.1.32, created on 2018-09-12 11:27:12
  from 'C:\xampp\htdocs\test_composer\test\csl\template\addlist_stylish_port04.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b98798048eec9_61855808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f826d7dadb9bdf289be2e8960e521607f225e2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test_composer\\test\\csl\\template\\addlist_stylish_port04.html',
      1 => 1536719226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b98798048eec9_61855808 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Stylish Portfolio - Start Bootstrap Theme</title>

  <!-- Bootstrap Core CSS -->
  <link href="template/stylish_portfolio/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="template/stylish_portfolio/css/stylish_portfolio.css" rel="stylesheet">
  <link href="template/stylish_portfolio/css/stylish_portfolio_kum01.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="template/stylish_portfolio/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- git hub  button ----->
  <link rel="stylesheet" href="template/git_hub_btn/css/gh-buttons01.css">
  <!-- git hub button /prettyify
    <link rel="stylesheet" href="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css">-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
      <![endif]-->
      <?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>
  <!-- git hub  button
    <?php echo '<script'; ?>
 src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"><?php echo '</script'; ?>
>--->
    <?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
  $(document).ready( function(){
 // document.getElementById('Mon').style.display = "table";
// var nObj = new Date()
 //var weekDayEN = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"] ;
 //var wDE = weekDayEN[nObj.getDay()] ;
 //document.getElementById(weekday[today.getDay()]).style.display="table";
 //document.getElementById(wDE).style.display="table";
 //var minute2 =  nObj.getMinutes();
 var minute2 =(~~(Math.random()*(200-1)+1));

 if (131 <= minute2  && minute2 <= 300 ){
 }else if (31 <= minute2  && minute2 <= 130 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header11");
 }else if (30 <= minute2  && minute2 <= 30 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header30");
 }else if (29 <= minute2  && minute2 <= 29 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header29");
 }else if (28 <= minute2  && minute2 <= 28 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header28");
 }else if (27 <= minute2  && minute2 <= 27 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header27");
 }else if (26 <= minute2  && minute2 <= 26 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header26");
 }else if (25 <= minute2  && minute2 <= 25 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header25");
 }else if (24 <= minute2  && minute2 <= 24 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header24");
 }else if (23 <= minute2  && minute2 <= 23 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header23");
 }else if (22 <= minute2  && minute2 <= 22 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header22");
 }else if (21 <= minute2  && minute2 <= 21 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header21");
 }else if (20 <= minute2  && minute2 <= 20 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header20");
 }else if (19 <= minute2  && minute2 <= 19 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header19");
 }else if (18 <= minute2  && minute2 <= 18 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header18");
 }else if (17 <= minute2  && minute2 <= 17 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header17");
 }else if (16 <= minute2  && minute2 <= 16 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header16");
 }else if (15 <= minute2  && minute2 <= 15 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header15");
 }else if (14 <= minute2  && minute2 <= 14 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header14");
 }else if (13 <= minute2  && minute2 <= 13 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header13");
 }else if (12 <= minute2  && minute2 <= 12 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header12");
 }else if (11 <= minute2  && minute2 <= 11 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header11");
 }else if (10 <= minute2  && minute2 <= 10 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header10");
 }else if (09 <= minute2  && minute2 <= 09 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header09");
 }else if (08 <= minute2  && minute2 <= 08 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header08");
 }else if (07 <= minute2  && minute2 <= 07 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header07");
 }else if (06 <= minute2  && minute2 <= 06 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header06");
 }else if (05 <= minute2  && minute2 <= 05 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header05");
 }else if (04 <= minute2  && minute2 <= 04 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header04");
 }else if (03 <= minute2  && minute2 <= 03 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header03");
 }else if (02 <= minute2  && minute2 <= 02 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header02");
 }else if (01 <= minute2  && minute2 <= 01 ){
   $("#top").removeClass("header00");
   $("#top").addClass("header01");
 }else{
 }
});
function add0(str)
{
	return ( "0" + str ).substr( -2 ) ;
}
<?php echo '</script'; ?>
>

</head>

<body>
  <form name="addlist_f1" method="post" action="index.php">
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
          <a href="#top"  onclick = $("#menu-close").click(); >Menu</a>
        </li>
            <!----
            <li>
              <button type="submit" value="View" id ="view" name="search" class="button01 icon chat" style="width:130px">View</button>
            </li>
             <li>
              <button type="submit" value="dashboard" id ="dashboard" name="dashboard" class="button01 icon log" style="width:130px">Dashboard</button>
            </li>
            <li>
            <li>
              <button type="submit" value="chartjs" id ="chartjs" name="chartjs" class="button01 icon move" style="width:130px">Chart</button>
            </li>
            <li>
              <button type="submit" value="datatable" id ="datatable" name="datatable" class="button01 icon tag" style="width:130px">Datatable</button>
            </li>--->
            <li>
              <button type="submit" value="datatable" id ="download" name="download" class="button01 icon tag" style="width:130px;color:#3396dd;">Blue</button>
            </li>
            <li>
              <button type="submit" value="kum_check00" id ="kum_check00" name="kum_check00" class="button01 icon log" style="width:130px">Kum Check</button>
            </li>
            <li>
              <li>
               <button type="submit" value="Logout" id ="logout" name="logout" class="button01 icon home" style="width:130px">Logout</button>
             </li>
           </ul>
         </nav>
       </form>
       <!-- Header -->
       <header id="top" class="header00">
        <div class="text-vertical-center">
          <h1>CSL....</h1>
          <h4>What's Up CustomSupport!</h4>
          <br>
          <!--<a href="#about" class="btn btn-dark btn-lg">Find Out More</a>--->
        </div>
      </header>


      <!-- jQuery -->
      <?php echo '<script'; ?>
 src="template/stylish_portfolio/js/jquery.js"><?php echo '</script'; ?>
>

      <!-- Bootstrap Core JavaScript -->
      <?php echo '<script'; ?>
 src="template/stylish_portfolio/js/bootstrap.min.js"><?php echo '</script'; ?>
>

      <!-- Custom Theme JavaScript -->
      <?php echo '<script'; ?>
>
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
  <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
