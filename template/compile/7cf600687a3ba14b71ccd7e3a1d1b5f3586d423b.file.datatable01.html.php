<?php /* Smarty version Smarty-3.1.18, created on 2018-06-18 14:11:21
         compiled from ".\template\datatable01.html" */ ?>
<?php /*%%SmartyHeaderCode:6294573c3893d9aa80-55605344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cf600687a3ba14b71ccd7e3a1d1b5f3586d423b' => 
    array (
      0 => '.\\template\\datatable01.html',
      1 => 1529298613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6294573c3893d9aa80-55605344',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_573c3894058205_80992530',
  'variables' => 
  array (
    'par_id' => 0,
    'ary_crs_view' => 0,
    'value' => 0,
    'konma' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573c3894058205_80992530')) {function content_573c3894058205_80992530($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<!---
　wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
 ADMINLTE　DATATABLE　template
 通常　一覧表から詳細画面に飛ぶとき　PHPから $postで　hidden項目をkeyとして詳細画面にPOST送信するが
 hidden項目のkeyが最後の配列のデータを取得してしまうので　今回は　PHPからではなく　JAVASCRIPTにより
 POST送信を行っている　
 javascript:　postform
 2016-05-09
 wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
---!>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>AdminLTE 2 | Data Tables</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="template/AdminLTE-master/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="template/AdminLTE-master/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
<!-- Theme style -->
<link rel="stylesheet" href="template/AdminLTE-master/dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="template/AdminLTE-master/dist/css/skins/_all-skins.min.css">
    <!-- git hub  button ----->
  <link rel="stylesheet" href="template/git_hub_btn/css/gh-buttons01.css">
  <!-- git hub button /prettyify -->
  <link rel="stylesheet" href="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- git hub  button ----->
<script src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">


<div class="wrapper">
  <header class="main-header"> 
    <!-- Logo --> 
    <a href="../../index2.html" class="logo"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><b>A</b>LT</span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><b>Admin</b>LTE</span> </a> 
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation"> 
      <!-- Sidebar toggle button--> 
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i> <span class="label label-success">4</span> </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li> 
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message --> 
                    <a href="#">
                    <div class="pull-left"> <img src="template/AdminLTE-master/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> </div>
                    <h4> Support Team <small><i class="fa fa-clock-o"></i> 5 mins</small> </h4>
                    <p>Why not buy a new awesome theme?</p>
                    </a> </li>
                  <!-- end message -->
                  <li> <a href="#">
                    <div class="pull-left"> <img src="template/AdminLTE-master/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image"> </div>
                    <h4> AdminLTE Design Team <small><i class="fa fa-clock-o"></i> 2 hours</small> </h4>
                    <p>Why not buy a new awesome theme?</p>
                    </a> </li>
                  <li> <a href="#">
                    <div class="pull-left"> <img src="template/AdminLTE-master/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image"> </div>
                    <h4> Developers <small><i class="fa fa-clock-o"></i> Today</small> </h4>
                    <p>Why not buy a new awesome theme?</p>
                    </a> </li>
                  <li> <a href="#">
                    <div class="pull-left"> <img src="template/AdminLTE-master/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image"> </div>
                    <h4> Sales Department <small><i class="fa fa-clock-o"></i> Yesterday</small> </h4>
                    <p>Why not buy a new awesome theme?</p>
                    </a> </li>
                  <li> <a href="#">
                    <div class="pull-left"> <img src="template/AdminLTE-master/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image"> </div>
                    <h4> Reviewers <small><i class="fa fa-clock-o"></i> 2 days</small> </h4>
                    <p>Why not buy a new awesome theme?</p>
                    </a> </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <span class="label label-warning">10</span> </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li> 
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li> <a href="#"> <i class="fa fa-users text-aqua"></i> 5 new members joined today </a> </li>
                  <li> <a href="#"> <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                    page and may cause design problems </a> </li>
                  <li> <a href="#"> <i class="fa fa-users text-red"></i> 5 new members joined </a> </li>
                  <li> <a href="#"> <i class="fa fa-shopping-cart text-green"></i> 25 sales made </a> </li>
                  <li> <a href="#"> <i class="fa fa-user text-red"></i> You changed your username </a> </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-flag-o"></i> <span class="label label-danger">9</span> </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li> 
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item --> 
                    <a href="#">
                    <h3> Design some buttons <small class="pull-right">20%</small> </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">20% Complete</span> </div>
                    </div>
                    </a> </li>
                  <!-- end task item -->
                  <li><!-- Task item --> 
                    <a href="#">
                    <h3> Create a nice theme <small class="pull-right">40%</small> </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">40% Complete</span> </div>
                    </div>
                    </a> </li>
                  <!-- end task item -->
                  <li><!-- Task item --> 
                    <a href="#">
                    <h3> Some task I need to do <small class="pull-right">60%</small> </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">60% Complete</span> </div>
                    </div>
                    </a> </li>
                  <!-- end task item -->
                  <li><!-- Task item --> 
                    <a href="#">
                    <h3> Make beautiful transitions <small class="pull-right">80%</small> </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">80% Complete</span> </div>
                    </div>
                    </a> </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer"> <a href="#">View all tasks</a> </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="template/AdminLTE-master/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> <span class="hidden-xs">Alexander Pierce</span> </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header"> <img src="template/AdminLTE-master/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p> Alexander Pierce - Web Developer <small>Member since Nov. 2012</small> </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center"> <a href="#">Followers</a> </div>
                  <div class="col-xs-4 text-center"> <a href="#">Sales</a> </div>
                  <div class="col-xs-4 text-center"> <a href="#">Friends</a> </div>
                </div>
                <!-- /.row --> 
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left"> <a href="#" class="btn btn-default btn-flat">Profile</a> </div>
                <div class="pull-right"> <a href="#" class="btn btn-default btn-flat">Sign out</a> </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li> <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"> 
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar"> 
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image"> <img src="template/AdminLTE-master/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
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
         <li class="treeview"> <a href="index.php"> <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i> </a></li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
         <ul class="treeview-menu">
           <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[1];?>
"><i class="fa fa-circle-o"></i> Dashboard v1 </a></li>
           <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[2];?>
"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="label label-primary pull-right">4</span>
          </a>
          <ul class="treeview-menu">
           <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[3];?>
"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[4];?>
"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[5];?>
"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[6];?>
"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
           <a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[7];?>
">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <small class="label pull-right bg-green">new</small>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[8];?>
"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[9];?>
"><i class="fa fa-circle-o"></i> Morris</a></li>   
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[10];?>
"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[11];?>
"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
           <ul class="treeview-menu">
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[12];?>
"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[13];?>
"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[14];?>
"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[15];?>
"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[16];?>
"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[17];?>
"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
         <ul class="treeview-menu">
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[18];?>
"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[19];?>
"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[20];?>
"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[21];?>
"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[22];?>
"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[23];?>
">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <small class="label pull-right bg-red">3</small>
          </a>
        </li>
        <li>
           <a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[24];?>
">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <small class="label pull-right bg-yellow">12</small>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
         <ul class="treeview-menu">
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[25];?>
"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[26];?>
"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[27];?>
"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[28];?>
"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[29];?>
"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[30];?>
"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[31];?>
"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[32];?>
"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[33];?>
"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> Data Tables <small>advanced tables</small> </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    
    <!-- Main content -->
   
    <!-- /.content --> 

 
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
 
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           <form  name="data_table_f2" method="post" action="index.php?module=dashboard01">  
          <table id="example1" class="table table-bordered table-striped">
             
           <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ary_crs_view']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->index++;
 $_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->index === 0;
?> 
                 
               <?php if ($_smarty_tpl->tpl_vars['value']->first) {?>
               <thead style="background-color:#CCC">
                  <!--  <tr bgcolor="#adff2f">--->
                  <tr>
                   <th>Shoriym</th>
                   <th>all_budg</th>
                   <th>all_sale</th>
                   <th>%</th>
                   <th>tu_budg</th>
                   <th>tu_sale</th>
                   <th>%</th>
                    <th>type</th>
                    <th>団体</th>
                    <th>###</th>
                  </tr>
              </thead>
              <?php }?>  
     
              <tr>
               	<td><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[4];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[5];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[6];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[7];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[8];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[9];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[10];?>
</td>
                <td>
                <input type="button" class="button01 icon tag" name="details" style="width:100px; height:30px;" value="Edit" onClick="postForm( '<?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
<?php echo $_smarty_tpl->tpl_vars['konma']->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value[1];?>
<?php echo $_smarty_tpl->tpl_vars['konma']->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value[2];?>
')";>
               
               </td>
			 </tr>           
          <?php } ?>               
              </table>    
             
          </form> 
            
            </div>
            <!-- /.box-body --> 
          </div>
          <!-- /.box --> 
    
          <!-- /.box --> 
        </div>
        <!-- /.col --> 
      </div>
      <!-- /.row --> 
    </section>
 
  
    <!-- /.content -->      
   
    <!-- /.content -->  
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs"> <b>Version</b> 2.3.2 </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved. </footer>
  
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
          <li> <a href="javascript::;"> <i class="menu-icon fa fa-birthday-cake bg-red"></i>
            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
              <p>Will be 23 on April 24th</p>
            </div>
            </a> </li>
          <li> <a href="javascript::;"> <i class="menu-icon fa fa-user bg-yellow"></i>
            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
              <p>New phone +1(800)555-1234</p>
            </div>
            </a> </li>
          <li> <a href="javascript::;"> <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
              <p>nora@example.com</p>
            </div>
            </a> </li>
          <li> <a href="javascript::;"> <i class="menu-icon fa fa-file-code-o bg-green"></i>
            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
              <p>Execution time 5 seconds</p>
            </div>
            </a> </li>
        </ul>
        <!-- /.control-sidebar-menu -->
        
        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li> <a href="javascript::;">
            <h4 class="control-sidebar-subheading"> Custom Template Design <span class="label label-danger pull-right">70%</span> </h4>
            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
            </div>
            </a> </li>
          <li> <a href="javascript::;">
            <h4 class="control-sidebar-subheading"> Update Resume <span class="label label-success pull-right">95%</span> </h4>
            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-success" style="width: 95%"></div>
            </div>
            </a> </li>
          <li> <a href="javascript::;">
            <h4 class="control-sidebar-subheading"> Laravel Integration <span class="label label-warning pull-right">50%</span> </h4>
            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
            </div>
            </a> </li>
          <li> <a href="javascript::;">
            <h4 class="control-sidebar-subheading"> Back End Framework <span class="label label-primary pull-right">68%</span> </h4>
            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
            </div>
            </a> </li>
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
            <label class="control-sidebar-subheading"> Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>
            <p> Some information about this general settings option </p>
          </div>
          <!-- /.form-group -->
          
          <div class="form-group">
            <label class="control-sidebar-subheading"> Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>
            <p> Other sets of options are available </p>
          </div>
          <!-- /.form-group -->
          
          <div class="form-group">
            <label class="control-sidebar-subheading"> Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>
            <p> Allow the user to show his name in blog posts </p>
          </div>
          <!-- /.form-group -->
          
          <h3 class="control-sidebar-heading">Chat Settings</h3>
          <div class="form-group">
            <label class="control-sidebar-subheading"> Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->
          
          <div class="form-group">
            <label class="control-sidebar-subheading"> Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->
          
          <div class="form-group">
            <label class="control-sidebar-subheading"> Delete chat history <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a> </label>
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
<script src="template/AdminLTE-master/plugins/jQuery/jQuery-2.1.4.min.js"></script> 
<!-- Bootstrap 3.3.5 --> 
<script src="template/AdminLTE-master/bootstrap/js/bootstrap.min.js"></script> 
<!-- DataTables --> 
<script src="template/AdminLTE-master/plugins/datatables/jquery.dataTables.min.js"></script> 
<script src="template/AdminLTE-master/plugins/datatables/dataTables.bootstrap.min.js"></script> 
<!-- SlimScroll --> 
<script src="template/AdminLTE-master/plugins/slimScroll/jquery.slimscroll.min.js"></script> 
<!-- FastClick --> 
<script src="template/AdminLTE-master/plugins/fastclick/fastclick.js"></script> 
<!-- AdminLTE App --> 
<script src="template/AdminLTE-master/dist/js/app.min.js"></script> 
<!-- AdminLTE for demo purposes --> 
<script src="template/AdminLTE-master/dist/js/demo.js"></script> 
<!-- page script --> 
<script>
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
</script>
 <script language="javascript" type="text/javascript">
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
</script>

</body>
</html>
<?php }} ?>
