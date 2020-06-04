<?php
/* Smarty version 3.1.32, created on 2020-01-28 13:36:57
  from 'C:\xampp\htdocs\composer\test\kum_chk\template\juko_knr_sys01.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e2fba697bcd82_17528582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3346b572aaef8fd04411ee8c61540603e378eb75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\composer\\test\\kum_chk\\template\\juko_knr_sys01.html',
      1 => 1580186085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2fba697bcd82_17528582 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kum Check</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="template/AdminLTE-master/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="template/AdminLTE-master/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="template/AdminLTE-master/dist/css/skins/_all-skins.min.css">
<!-- Select2 -->
  <link rel="stylesheet" href="template/AdminLTE-master/plugins/select2/select2.min.css">
<!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="template/AdminLTE-master/plugins/iCheck/all.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->
  <!-- git hub  button ----->
<!-- pickmeup  --->
<link rel="stylesheet" href="template/jquery-ui-1.11.4.custom/jquery-ui.css" />
<link rel="stylesheet" href="template/jquery-ui-1.11.4.custom/jquery-ui.theme.css" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->
<style>

#jquery-ui-sortable {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 70%;
}
#jquery-ui-sortable li {
    margin: 0 3px 3px 3px;
    padding: 0.3em;
    padding-left: 1em;
    font-size: 15px;
    font-weight: bold;
    cursor: move;
}
</style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!--<body class="hold-transition skin-red sidebar-mini">-->
<div class="wrapper">

 <header class="main-header">
    <!-- Logo -->
    <a href="index.php"  class="logo">
    <!--<a href="../../index2.html" class="logo"> -->
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>K</b>um..</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Sanno</b>..CSL</span> </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
      <div class="navbar-custom-menu"> </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image"> <img src="template/img/avator/<?php echo $_smarty_tpl->tpl_vars['se_picture']->value;?>
.jpg" class="img-circle" alt="User Image"> </div>
        <div class="pull-left info">
          <p><?php echo $_smarty_tpl->tpl_vars['se_username_x']->value;?>
</p>
          <a href="#"><i class="fa fa-circle text-success"></i><?php echo $_smarty_tpl->tpl_vars['se_staff_type']->value;?>
</a> </div>
      </div>
      <!-- search form
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
          </span> </div>
     </form>--->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <!--<li class="treeview"> <a href="index.php"> <i class="fa fa-glass"></i> <span>Top menu</span> </a></li>--->
        <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>Check</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=juk_knr_sys02"><i class="fa fa-circle-o"></i>Tachi-s</a></li>
              <li><a href="index.php?module=kum_check02"><i class="fa fa-circle-o"></i>Suntory</a></li>
            </ul>
          </li>
        <li class="treeview"> <a href="index.php"> <i class="fa fa-chevron-left"></i> <span>Return</span> <!--<i class="fa fa-angle-left pull-right"></i> --></a></li>
        <!---<li class="treeview"> <a href="index.php?module=csv_upl01"> <i class="fa fa-table"></i> <span>Table Upload</span> </a></li>--->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
 !-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style='background-color: #1c2529'>
  <!-- Content Header (Page header) -->
  <section class="content-header" >
    <h1>Dashboard<small>Control panel</small> </h1>
    <!---
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-suitcase"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>--->
    </section>
    <!-- Main content -->
    <section class="content" > </section>
    <!-- /.control-sidebar --> 
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
 </div>

<!-- jQuery 2.1.4 -->
<?php echo '<script'; ?>
 src="template/AdminLTE-master/plugins/jQuery/jQuery-2.1.4.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.5 -->
<?php echo '<script'; ?>
 src="template/AdminLTE-master/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE select2
<?php echo '<script'; ?>
 src="template/AdminLTE-master/dist/js/select2.full.js"><?php echo '</script'; ?>
>--->
<!-- SlimScroll -->
<?php echo '<script'; ?>
 src="template/AdminLTE-master/plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<!-- FastClick -->
<?php echo '<script'; ?>
 src="template/AdminLTE-master/plugins/fastclick/fastclick.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="template/AdminLTE-master/dist/js/app.min.js"><?php echo '</script'; ?>
>

<!-- AdminLTE for demo purposes -->
<?php echo '<script'; ?>
 src="template/AdminLTE-master/dist/js/demo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="template/jquery-ui-1.11.4.custom/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="template/jquery-ui-1.11.4.custom/jquery-ui.min.js"><?php echo '</script'; ?>
>
<!-- iCheck 1.0.1 -->
<?php echo '<script'; ?>
 src="template/AdminLTE-master/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
   $(document).ready(function(){
      $('.datepicker' ) . datepicker( {
       dateFormat: 'yy-mm-dd',
       numberOfMonths: 3
      });
   });
<?php echo '</script'; ?>
>
<!---
<?php echo '<script'; ?>
>
  $(document).ready(function(){
    history.pushState(null, null, null);
    $(window).on("popstate", function (event) {
    if (!event.originalEvent.state) {
        history.pushState(null, null, null);
        return;
    }
});
   });
<?php echo '</script'; ?>
>--->
<!---
<?php echo '<script'; ?>
>
window.onunload = function() {
    alert('Back buttom is pushed ??');
    location.replace(document.location);
};
<?php echo '</script'; ?>
>--->
<?php echo '<script'; ?>
 type="text/javascript">
window.location.hash="no-back";
window.location.hash="no-back-button";
window.onhashchange=function(){
    window.location.hash="no-back";
}
<?php echo '</script'; ?>
>

<!-------------------------------------
//Enter key を無効にする
//---------+------------------------>
<?php echo '<script'; ?>
>
    $(function(){
        $("input").on("keydown", function(e) {
            if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                return false;
            } else {
                return true;
            }
        });
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
function postForm1( value ){
if (window.File && window.FileReader && window.FileList && window.Blob) {

} else {
  alert('未対応');
  exit;
}
  //alert('gg');
  //var fs;
  //var fs = WScript.CreateObject("Scripting.FileSystemObject");
  //var file = fs.OpenTextFile("test.txt",2);
  //  file.Write("マルペケつくろ～");
  //  file.Close();
  //
  var form = document.createElement( 'form' );
    document.body.appendChild( form );
    var input = document.createElement( 'input' );
    var value00 = "'" + value + "'";
  input.setAttribute( 'type' , 'hidden' );
    input.setAttribute( 'name' , 'key' );
    var obj2 = document.getElementById('rec_seq_c-0');

    input.setAttribute( 'value' ,  obj2.value );
    form.appendChild( input );
    //form.setAttribute( 'action' , 'index.php?module=upd_check01');
    form.setAttribute( 'action' , 'index.php?module=post_check01');
    form.setAttribute( 'method' , 'post' );
    form.submit();
}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$( function() {
    jQuery( function() {
    jQuery( '#jquery-ui-sortable' ) . sortable();
    jQuery( '#jquery-ui-sortable' ) . disableSelection();
    jQuery( '#submitSortable' ) . click( function() {
        var itemNames = '';
        var itemIDs = '';
        jQuery( '#jquery-ui-sortable li' ) . map( function() {
            itemNames += jQuery( this ) . text() + '\n';
            //itemIDs += $('.flat-red:checked').val() + ',';
            itemIDs += jQuery( this ) .children( 'span' ) . text() + ',';
        } );
         //var area = $('.flat-red:checked').map(function() {
         //alert ($(this).val());
         //});
        if( confirm( itemNames + '【この順番でよろしいですか？】' ) ){
            //alert (itemIDs);
            href = 'download01.php?itemIDs=' + itemIDs;
        }
        //
        var texts = [];
        $(".flat-red:checked").each(function() {
        texts.push( $(this).val() );
        });
        //alert(texts)
        ////------------
        var aryJSON = JSON.stringify(texts);
        $.ajax({
            url: 'http://172.16.58.224/composer/test/kum_chk/index.php?module=download01.php',
            type: 'POST',
            data:  {"item": aryJSON},
            success: function (data) {
              //alert('OK');
              //var obj1 = document.getElementById('aaa');
              var obj2 = document.getElementById('rec_seq_c-0');
              //valueに値をセットする
              //obj1.value = texts;
              obj2.value = texts;

            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
              alert('NG');
              obj.value = 'NGNGNGNGNG';
            }
        });
        ///-------------
      });
  } );
} );
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
   //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
