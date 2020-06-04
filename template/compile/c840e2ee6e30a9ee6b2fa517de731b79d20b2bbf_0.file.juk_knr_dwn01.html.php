<?php
/* Smarty version 3.1.32, created on 2020-03-24 09:57:46
  from 'C:\xampp\htdocs\composer\test\kum_chk\template\juk_knr_dwn01.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e795b0a9e9636_60031806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c840e2ee6e30a9ee6b2fa517de731b79d20b2bbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\composer\\test\\kum_chk\\template\\juk_knr_dwn01.html',
      1 => 1585011454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e795b0a9e9636_60031806 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Widgets</title>
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
<!-- DataTables -->
<link rel="stylesheet" href="template/AdminLTE-master/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
   <!-- git hub  button ----->
  <link rel="stylesheet" href="template/git_hub_btn/css/gh-buttons01.css">
  <!-- git hub button /prettyify -->
  <link rel="stylesheet" href="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css">
  <!-- git hub  button ----->
<?php echo '<script'; ?>
 src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"><?php echo '</script'; ?>
>
 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 <header class="main-header"> 
    <!-- Logo --> 
    <a href="index.php"  class="logo"> 
    <!--<a href="../../index2.html" class="logo"> --> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><b>Y</b>uka..</span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><b>Sanno</b>MBP</span> </a> 
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
      <li class="treeview"> <a href="index"> <i class="fa fa-home"></i> <span>Home</span>
         <!-- <i class="fa fa-angle-left pull-right"></i>--> </a></li>
          <li class="treeview"> <a href="index.php?module=juk_knr_upl01&&id=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
,syn"> <i class="fa fa-chevron-left"></i> <span>Return</span> <!--<i class="fa fa-angle-left pull-right"></i> --></a></li>
      </ul>
    </section>
    <!-- /.sidebar --> 
  </aside>

  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <!--<h1> Data Tables <small>advanced tables</small> </h1>-->
      <h4><?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
<small><?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
:<a id='access_id' ><?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
</a></small></h4>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>---> 
    </section>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-sticky-note-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">CSL_Navi</span>
              <span class="info-box-test"><?php echo $_smarty_tpl->tpl_vars['m_cnt']->value;?>
件</span>
              <!--<span class="info-box-test" title='前回件数/前回日時'><?php echo $_smarty_tpl->tpl_vars['csl_cnt']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['csl_ymd']->value;?>
</span>-->
            </div>
           <a href="index.php?module=juk_knr_dwn01&id=&id=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
,csl" class="small-box-footer">
             DownLoad <i class="fa fa-arrow-circle-right"></i>
            </a>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
            <div class="info-box-content">
              <span class="info-box-number">受講管理sys</span>
               <span class="info-box-test"><?php echo $_smarty_tpl->tpl_vars['m_cnt']->value;?>
件</span>
               <!--<span class="info-box-test"title='前回件数/前回日時'><?php echo $_smarty_tpl->tpl_vars['juk_cnt']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['juk_ymd']->value;?>
</span>--->

            </div>
             <a href="index.php?module=juk_knr_dwn01&&id=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
,juk" class="small-box-footer">
             DownLoad <i class="fa fa-arrow-circle-right"></i>
            </a>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-gray"><i class="fa fa-book-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-number"></span>
              <span class="info-box-text"></span>
            </div>
             <a href="index.php?module=juk_knr_dwn01&id=tachi-s,xxx" class="small-box-footer">
              <!---<i class="fa fa-arrow-circle-right"></i>--->
            </a>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-gray"><i class="fa fa-book-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-number"></span>
              <span class="info-box-text"></span>
            </div>
             <a href="index.php?module=juk_knr_dwn01&id=tachi-s,xxx" class="small-box-footer">
              <!--<i class="fa fa-arrow-circle-right"></i>--->
            </a>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
      </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- =========================================================== -->

      <div class="row">
      </div>
      <!-- /.row -->

      <!-- =========================================================== -->

      <!-- Small boxes (Stat box) -->
      <div class="row">
      </div>
      <!-- /.row -->
    </section>
      <section class="content">
      <div class="row">
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.2
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<?php echo '<script'; ?>
 src="template/AdminLTE-master/plugins/jQuery/jQuery-2.1.4.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.5 -->
<?php echo '<script'; ?>
 src="template/AdminLTE-master/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Slimscroll -->
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
<!-- DataTables -->
<?php echo '<script'; ?>
 src="template/AdminLTE-master/plugins/datatables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="template/AdminLTE-master/plugins/datatables/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- page script -->
<?php echo '<script'; ?>
>
  $(function () {
	$('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
	 $("#example1").DataTable();

	$("#example4").DataTable();
	$('#example3').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
<?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
function postForm( value ){
   var form = document.createElement( 'form' );
    document.body.appendChild( form );
    var input = document.createElement( 'input' );
    var value00 = "'" + value + "'";
	input.setAttribute( 'type' , 'hidden' );
    input.setAttribute( 'name' , 'name' );
    input.setAttribute( 'value' , value );
    form.appendChild( input );
    form.setAttribute( 'action' , 'index.php?module=post_check01');
    form.setAttribute( 'method' , 'post' );
    form.submit();
}
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
