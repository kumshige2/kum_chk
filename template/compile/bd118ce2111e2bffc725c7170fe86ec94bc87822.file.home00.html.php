<?php /* Smarty version Smarty-3.1.18, created on 2018-07-09 10:35:52
         compiled from ".\template\home00.html" */ ?>
<?php /*%%SmartyHeaderCode:322045b3c1d57ef0ec6-37048148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd118ce2111e2bffc725c7170fe86ec94bc87822' => 
    array (
      0 => '.\\template\\home00.html',
      1 => 1531100085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322045b3c1d57ef0ec6-37048148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b3c1d58279972_69028693',
  'variables' => 
  array (
    'se_picture' => 0,
    'se_username_x' => 0,
    'se_staff_type' => 0,
    'ndo' => 0,
    'par_id' => 0,
    'data_json' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3c1d58279972_69028693')) {function content_5b3c1d58279972_69028693($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Flot Charts</title>
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
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header"> 
  <!-- Logo --> 
  <a href="index.php" class="logo"> 
  <!--<a href="../../index2.html" class="logo"> --> 
  <!-- mini logo for sidebar mini 50x50 pixels --> 
  <span class="logo-mini"><b>D</b>uh..</span> 
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
      <li class="treeview"> <a href="index.php"> <i class="fa fa-home"></i> <span>Home</span> 
        <!-- <i class="fa fa-angle-left pull-right"></i>--> </a></li>
      <!-- <li class="treeview"> <a href="index.php"> <i class="fa fa-glass"></i> <span>Top menu</span>
         </a></li>--->
      <li class="treeview"> <a href="#"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li><a href="#" title='普及事業本部'><i class="fa fa-circle-o"></i> ALL </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li><a href="index.php?module=home01&id={<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,'all'}"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 </a></li>
            </ul>
          </li>
          <li><a href="#" title='普及事業1'><i class="fa fa-circle-o"></i> PA <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,PA"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,PA"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,PA"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,PA"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,PA"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,PA"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,PA"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,PA"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,PA"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,PA"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,PA"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,PA"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,PA"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,PA"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,PA"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
           <li><a href="#" title='普及事業2'><i class="fa fa-circle-o"></i> PB <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,PB"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,PB"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,PB"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,PB"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,PB"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,PB"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,PB"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,PB"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,PB"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,PB"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,PB"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,PB"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,PB"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,PB"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,PB"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" title='普及事業3'><i class="fa fa-circle-o"></i> PC <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,PC"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,PC"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,PC"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,PC"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,PC"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,PC"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,PC"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,PC"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,PC"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,PC"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,PC"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,PC"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,PC"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,PC"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,PC"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
           <li><a href="#" title='普及事業4'><i class="fa fa-circle-o"></i> PD <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,PD"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,PD"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,PD"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,PD"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,PD"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,PD"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,PD"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,PD"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,PD"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,PD"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,PD"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,PD"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,PD"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,PD"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,PD"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
         <li><a href="#" title='普及事業5'><i class="fa fa-circle-o"></i> PE <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,PE"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,PE"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,PE"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,PE"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,PE"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,PE"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,PE"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,PE"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,PE"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,PE"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,PE"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,PE"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,PE"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,PE"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,PE"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
           <li><a href="#" title='普及事業6'><i class="fa fa-circle-o"></i> PF <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,PF"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,PF"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,PF"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,PF"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,PF"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,PF"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,PF"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,PF"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,PF"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,PF"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,PF"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,PF"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,PF"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,PF"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,PF"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
           <li><a href="#" title='普及事業7'><i class="fa fa-circle-o"></i> PH <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,PH"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,PH"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,PH"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,PH"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,PH"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,PH"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,PH"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,PH"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,PH"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,PH"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,PH"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,PH"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,PH"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,PH"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,PH"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" title='普及事業8'><i class="fa fa-circle-o"></i> PM <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,PM"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,PM"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,PM"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,PM"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,PM"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,PM"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,PM"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,PM"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,PM"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,PM"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,PM"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,PM"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,PM"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,PM"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,PM"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
         <li><a href="#" title='東日事業1'><i class="fa fa-circle-o"></i> HA <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,HA"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,HA"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,HA"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,HA"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,HA"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,HA"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,HA"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,HA"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,HA"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,HA"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,HA"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,HA"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,HA"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,HA"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,HA"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" title='東日事業2'><i class="fa fa-circle-o"></i> HB <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,HB"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,HB"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,HB"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,HB"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,HB"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,HB"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,HB"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,HB"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,HB"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,HB"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,HB"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,HB"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,HB"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,HB"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,HB"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
        <li><a href="#" title='東北'><i class="fa fa-circle-o"></i> TS <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,TS"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,TS"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,TS"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,TS"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,TS"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,TS"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,TS"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,TS"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,TS"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,TS"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,TS"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,TS"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,TS"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,TS"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,TS"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" title='中部事業1'><i class="fa fa-circle-o"></i> NO <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,NO"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,NO"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,NO"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,NO"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,NO"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,NO"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,NO"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,NO"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,NO"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,NO"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,NO"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,NO"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,NO"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,NO"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,NO"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
           <li><a href="#" title='中部事業2'><i class="fa fa-circle-o"></i> NP <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,NP"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,NP"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,NP"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,NP"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,NP"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,NP"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,NP"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,NP"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,NP"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,NP"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,NP"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,NP"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,NP"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,NP"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,NP"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" title='中国'><i class="fa fa-circle-o"></i> OF <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,OF"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,OF"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,OF"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,OF"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,OF"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,OF"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,OF"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,OF"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,OF"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,OF"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,OF"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,OF"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,OF"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,OF"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,OF"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
        <li><a href="#" title='九州'><i class="fa fa-circle-o"></i> OH <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,OH"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,OH"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,OH"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,OH"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,OH"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,OH"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,OH"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,OH"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,OH"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,OH"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,OH"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,OH"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,OH"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,OH"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,OH}"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
         <li><a href="#" title='関西事業1'><i class="fa fa-circle-o"></i> OJ <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,OJ"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,OJ"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,OJ"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,OJ"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,OJ"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,OJ"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,OJ"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,OJ"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,OJ"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,OJ"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,OJ"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,OJ"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,OJ"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,OJ"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,OJ"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" title='関西事業2'><i class="fa fa-circle-o"></i> OM <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
,OM"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[4];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
,OM"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[3];?>
 </a></li>
              <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
,OM"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
 </a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,04,OM"><i class="fa fa-circle-o"></i> 04</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,05,OM"><i class="fa fa-circle-o"></i> 05</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,06,OM"><i class="fa fa-circle-o"></i> 06</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,07,OM"><i class="fa fa-circle-o"></i> 07</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,08,OM"><i class="fa fa-circle-o"></i> 08</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,09,OM"><i class="fa fa-circle-o"></i> 09</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,10,OM"><i class="fa fa-circle-o"></i> 10</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,11,OM"><i class="fa fa-circle-o"></i> 11</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,12,OM"><i class="fa fa-circle-o"></i> 12</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,01,OM"><i class="fa fa-circle-o"></i> 01</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,02,OM"><i class="fa fa-circle-o"></i> 02</a></li>
                  <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
,03,OM"><i class="fa fa-circle-o"></i> 03</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
       </li>  
      <li class="treeview"> <a href="#"> <i class="fa fa-dashboard"></i> <span>Data Download</span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li><a href="#" title='過年度'><i class="fa fa-circle-o"></i> Last </a> 
            <!---
                 <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> 201403 </a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> 201503 </a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> 201603 </a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> 201703 </a></li>
                 </ul>   ---> 
          </li>
          <li><a href="#" title='本年度'><i class="fa fa-circle-o"></i> This </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> 201804 </a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> 2016 </a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> 2017 </a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> 2018 </a></li>
            </ul>
          </li>
        </ul>
      </li>
      
      <!---
       <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
           <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[1];?>
"><i class="fa fa-circle-o"></i> 2014 </a>
             <ul class="treeview-menu">
               <li><a href="#" title='普及事業1'><i class="fa fa-circle-o"></i> PA </a></li>
               <li><a href="#" title='普及事業2'><i class="fa fa-circle-o"></i> PB </a></li>
               <li><a href="#" title='普及事業3'><i class="fa fa-circle-o"></i> PC </a></li>
               <li><a href="#" title='普及事業4'><i class="fa fa-circle-o"></i> PD </a></li>
               <li><a href="#" title='普及事業5'><i class="fa fa-circle-o"></i> PE </a></li>
               <li><a href="#" title='普及事業6'><i class="fa fa-circle-o"></i> PF </a></li>
               <li><a href="#" title='普及事業7'><i class="fa fa-circle-o"></i> PH </a></li>
               <li><a href="#" title='普及事業8'><i class="fa fa-circle-o"></i> PM </a></li>
               <li><a href="#" title='東日事業1'><i class="fa fa-circle-o"></i> HA </a></li>
               <li><a href="#" title='東日事業2'><i class="fa fa-circle-o"></i> HB </a></li>
               <li><a href="#" title='東 北'><i class="fa fa-circle-o"></i> TS </a></li>
               <li><a href="#" title='中部事業1'><i class="fa fa-circle-o"></i> NO </a></li>
               <li><a href="#" title='中部事業2'><i class="fa fa-circle-o"></i> NP </a></li>
               <li><a href="#" title='中　国'><i class="fa fa-circle-o"></i> OF </a></li>
               <li><a href="#" title='九　州'><i class="fa fa-circle-o"></i> OH </a></li>
               <li><a href="#" title='関西事業1'><i class="fa fa-circle-o"></i> OJ </a></li>
               <li><a href="#" title='関西事業2'><i class="fa fa-circle-o"></i> OM </a></li>
             </ul>
           </li>
           <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[2];?>
"><i class="fa fa-circle-o"></i> 2015 </a></li>
   <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[1];?>
"><i class="fa fa-circle-o"></i> 2016 </a></li>
           <li><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['par_id']->value[2];?>
"><i class="fa fa-circle-o"></i> 2017 </a></li>
          </ul>
        </li> ---->
      <li class="treeview"> <a href="#"> <i class="fa fa-share"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          <li> <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
              <li> <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
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
    </ul>
  </section>
  <!-- /.sidebar --> 
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style='background-color: #1c2529'> 
  <!-- Content Header (Page header) -->
  <section class="content-header" >
    <h1>Dashboard<small>Control panel</small> </h1>
    <!---
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>---> 
  </section>
  
  <!-- Main content -->
  <section class="content" > </section>
  
  <!-- /.control-sidebar --> 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar --> 
  
</div>
<!-- ./wrapper --> 

<!-- jQuery 2.1.4 --> 
<script src="template/AdminLTE-master/plugins/jQuery/jQuery-2.1.4.min.js"></script> 
<!-- jQuery UI 1.11.4 --> 
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> 
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --> 

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script> 
<!-- Bootstrap 3.3.5 --> 
<script src="template/AdminLTE-master/bootstrap/js/bootstrap.min.js"></script> 
<!-- Morris.js charts --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> 
<script src="template/AdminLTE-master/plugins/morris/morris.min.js"></script> 
<!-- Sparkline --> 
<script src="template/AdminLTE-master/plugins/sparkline/jquery.sparkline.min.js"></script> 
<!-- jvectormap --> 
<script src="template/AdminLTE-master/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> 
<script src="template/AdminLTE-master/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> 
<!-- jQuery Knob Chart --> 
<script src="template/AdminLTE-master/plugins/knob/jquery.knob.js"></script> 
<!-- daterangepicker --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script> 
<script src="template/AdminLTE-master/plugins/daterangepicker/daterangepicker.js"></script> 
<!-- datepicker --> 
<script src="template/AdminLTE-master/plugins/datepicker/bootstrap-datepicker.js"></script> 
<!-- Bootstrap WYSIHTML5 --> 
<script src="template/AdminLTE-master/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> 
<!-- Slimscroll --> 
<script src="template/AdminLTE-master/plugins/slimScroll/jquery.slimscroll.min.js"></script> 
<!-- FastClick --> 
<script src="template/AdminLTE-master/plugins/fastclick/fastclick.js"></script> 
<!-- AdminLTE App --> 
<script src="template/AdminLTE-master/dist/js/app.min.js"></script> 
<!-- AdminLTE dashboard demo (This is only for demo purposes) --> 
<script src="template/AdminLTE-master/dist/js/pages/dashboard_01.js"></script> 
<!-- AdminLTE for demo purposes --> 
<script src="template/AdminLTE-master/dist/js/demo.js"></script> 
<!-------json--------------------------------------------------> 
<script type="text/javascript" src="template/json/json2.js"></script> 
<script type="text/javascript">
	$(function () {
		console.log('start!!');
	 	var jsonstring = '<?php echo $_smarty_tpl->tpl_vars['data_json']->value;?>
';	
		//---------------------------------改行を削除
		var jsonstring2 = jsonstring.replace(/\r?\n/g,"");
		var json_text = jsonstring2.split(",");	
		var datas = JSON.parse(json_text);
		//
		console.log(datas[0][3]);
		//console.log(datas);
		console.log('start2');
	
    });
</script>
</body>
</html>
<?php }} ?>
