<?php /* Smarty version Smarty-3.1.18, created on 2018-07-20 11:46:06
         compiled from ".\template\home01_test02.html" */ ?>
<?php /*%%SmartyHeaderCode:302125b4569080f24b6-17481603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32a427e054ab3929aa022c1c7b69c2c8ff8cefc9' => 
    array (
      0 => '.\\template\\home01_test02.html',
      1 => 1532054747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302125b4569080f24b6-17481603',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b4569083c11e1_01608400',
  'variables' => 
  array (
    'se_picture' => 0,
    'se_username_x' => 0,
    'se_staff_type' => 0,
    'ndo' => 0,
    'par_id' => 0,
    'wk01' => 0,
    'wk00' => 0,
    'data_json' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4569083c11e1_01608400')) {function content_5b4569083c11e1_01608400($_smarty_tpl) {?><!DOCTYPE html>
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
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> 20<?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][0];?>
 <small><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][3];?>
</small> </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content"> 
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6"> 
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner" title='達成率'>
              <h3><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][6];?>
<sup style="font-size: 20px">%</sup></h3>
              <p title='予算/収益　単位万円'><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][4];?>
/<?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][5];?>
</p>
            </div>
            <div class="icon"> <i class="ion ion-ios-pulse"></i> </div>
            <p class="small-box-footer">当月計</p>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6"> 
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][9];?>
<sup style="font-size: 20px">%</sup></h3>
              <p title='予算/収益　単位万円'><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][7];?>
/<?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][8];?>
</p>
            </div>
            <div class="icon"> <i class="ion ion-stats-bars"></i> </div>
            <p class="small-box-footer">通信講座</p>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6"> 
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][12];?>
<sup style="font-size: 20px">%</sup></h3>
              <p title='予算/収益　単位万円'><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][10];?>
/<?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][11];?>
</p>
            </div>
            <div class="icon"> <i class="ion ion-person-add"></i> </div>
            <p class="small-box-footer">派遣研修</p>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6"> 
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][15];?>
<sup style="font-size: 20px">%</sup></h3>
              <p title='予算/収益　単位万円'><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][13];?>
/<?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][14];?>
</p>
            </div>
            <div class="icon"> <i class="ion ion-ios-grid-view"></i> </div>
            <p class="small-box-footer">指導</p>
            <!---<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>---> 
          </div>
        </div>
        <div class="col-lg-3 col-xs-6"> 
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][18];?>
<sup style="font-size: 20px">%</sup></h3>
              <p title='予算/収益　単位万円'><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][16];?>
/<?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][17];?>
</p>
            </div>
            <div class="icon"> <i class= "ion ion-ios-paper"></i> </div>
            <p class="small-box-footer">受託</p>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6"> 
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][21];?>
<sup style="font-size: 20px">%</sup></h3>
              <p title='予算/収益　単位万円'><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][19];?>
/<?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][20];?>
</p>
            </div>
            <div class="icon"> <i class="ion ion-ios-pricetag"></i> </div>
            <p class="small-box-footer">テスト</p>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6"> 
          <!-- small box -->
          <div class="small-box bg-lime">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][24];?>
<sup style="font-size: 20px">%</sup></h3>
              <p title='予算/収益　単位万円'><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][22];?>
/<?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][23];?>
</p>
            </div>
            <div class="icon"> <i class="ion ion-ios-keypad"></i> </div>
            <p class="small-box-footer">講習会</p>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6"> 
          <!-- small box -->
          <div class="small-box bg-light-blue">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][27];?>
<sup style="font-size: 20px">%</sup></h3>
              <p title='予算/収益　単位万円'><?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][25];?>
/<?php echo $_smarty_tpl->tpl_vars['wk01']->value[0][26];?>
</p>
            </div>
            <div class="icon"> <i class="ion ion-ios-cart-outline"></i> </div>
            <p class="small-box-footer">商品</p>
            <!---<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>---> 
          </div>
        </div>
        <!-- ./col --> 
      </div>
      <!-- /.row --> 
      <!-- Main row -->
      <div class="row"> 
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable"> 
     <div class="box">
            <div class="box-header with-border"><i class="ion ion-stats-bars"></i>
              <h3 class="box-title" title='Blue:本年度,Gray:昨年度　単位:万円' >Monthly Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <!--
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>--->
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <p class="text-center ">
                    <strong>Sales: <?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
/<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive"-->
                </div>
                <!-- /.col 
                <div class="col-md-4">
                 
                </div>--->
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header"> <i class="fa fa-comments-o"></i>
              <h3 class="box-title">Chat</h3>
              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i> </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
              </div>
            </div>
            <div class="box-body chat" id="chat-box"> 
              <!-- chat item -->
              <div class="item"> <img src="template/AdminLTE-master/dist/img/user4-128x128.jpg" alt="user image" class="online">
                <p class="message"> <a href="#" class="name"> <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small> Jaco Pastrius </a> I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market </p>
                <div class="attachment">
                  <h4>Attachments:</h4>
                  <p class="filename"> Theme-thumbnail-image.jpg </p>
                  <div class="pull-right">
                    <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                  </div>
                </div>
                <!-- /.attachment --> 
              </div>
              <!-- /.item --> 
              <!-- chat item -->
              <div class="item"> <img src="template/AdminLTE-master/dist/img/user3-128x128.jpg" alt="user image" class="offline">
                <p class="message"> <a href="#" class="name"> <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small> Alexander Pierce </a> I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market </p>
              </div>
              <!-- /.item --> 
              <!-- chat item -->
              <div class="item"> <img src="template/AdminLTE-master/dist/img/user2-160x160.jpg" alt="user image" class="offline">
                <p class="message"> <a href="#" class="name"> <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small> Susan Doe </a> I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market </p>
              </div>
              <!-- /.item --> 
            </div>
            <!-- /.chat -->
            <div class="box-footer">
              <div class="input-group">
                <input class="form-control" placeholder="Type message...">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box (chat box) --> 
        </section>
        <!-- /.Left col --> 
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable"> 
          
          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header"> 
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"> <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"> <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools --> 
              
              <i class="fa fa-map-marker"></i>
              <h3 class="box-title"> Visitors </h3>
            </div>
            <div class="box-body">
              <!--<div id="world-map" style="height: 250px; width: 100%;"></div>--->
               <div id="world-map" style="height: 180px; width: 100%;"></div>
            </div>
            <!-- /.box-body-->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-1"></div>
                  <div class="knob-label">Visitors</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-2"></div>
                  <div class="knob-label">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="knob-label">Exists</div>
                </div>
                <!-- ./col --> 
              </div>
              <!-- /.row --> 
            </div>
          </div>
          <!-- /.box --> 
          
          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header"> <i class="fa fa-th"></i>
              <h3 class="box-title">Sales Graph</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i> </button>
                <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i> </button>
              </div>
            </div>
            <div class="box-body border-radius-none">
              <div class="chart" id="line-chart" style="height: 250px;"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">
                  <div class="knob-label">Mail-Orders</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">
                  <div class="knob-label">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">
                  <div class="knob-label">In-Store</div>
                </div>
                <!-- ./col --> 
              </div>
              <!-- /.row --> 
            </div>
            <!-- /.box-footer --> 
          </div>
          <!-- /.box --> 
          
          
          
        </section>
        <!-- right col --> 
      </div>
      <!-- /.row (main row) --> 
      
    </section>
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
<!-- jQuery UI 1.11.4 --> 
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> 
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --> 

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script> 

<!-- jQuery 2.1.4 -->
<script src="template/AdminLTE-master/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="template/AdminLTE-master/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="template/AdminLTE-master/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="template/AdminLTE-master/dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="template/AdminLTE-master/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="template/AdminLTE-master/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="template/AdminLTE-master/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="template/AdminLTE-master/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="template/AdminLTE-master/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes)
<script src="template/AdminLTE-master/dist/js/pages/dashboard2_01.js"></script>--->
<!-- AdminLTE for demo purposes -->
<script src="template/AdminLTE-master/dist/js/demo.js"></script>
<!-------json--------------------------------------------------> 
<script type="text/javascript" src="template/json/json2.js"></script> 

<script type="text/javascript">
$(function () {
console.log('chart start!!');
  //'use strict';

  /* ChartJS
   * -------
   * Here we will create a few charts using ChartJS
   */

  //-----------------------
  //- MONTHLY SALES CHART -
  //-----------------------

  // Get context with jQuery - using jQuery's .get() method.
  var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
  // This will get the first returned node in the jQuery collection.
  var salesChart = new Chart(salesChartCanvas);
  var salesChartData = {
    labels: ["04", "05", "06", "07", "08", "09", "10","11","12","01","02","03"],
    datasets: [
      {
        // label: "2014"
		label: "<?php echo $_smarty_tpl->tpl_vars['ndo']->value[2];?>
",
		fillColor: "rgb(210, 214, 222)",
        strokeColor: "rgb(210, 214, 222)",
        pointColor: "rgb(210, 214, 222)",
        pointStrokeColor: "#c1c7d1",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgb(220,220,220)",
        data: ["<?php echo $_smarty_tpl->tpl_vars['wk00']->value[36][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[37][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[38][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[39][5];?>
",
		"<?php echo $_smarty_tpl->tpl_vars['wk00']->value[40][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[41][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[42][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[43][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[44][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[45][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[46][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[47][5];?>
"]
      },
      {
        //label:"2015",
		label: "<?php echo $_smarty_tpl->tpl_vars['ndo']->value[1];?>
",
        fillColor: "rgba(60,141,188,0.9)",
        strokeColor: "rgba(60,141,188,0.8)",
        pointColor: "#3b8bba",
        pointStrokeColor: "rgba(60,141,188,1)",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(60,141,188,1)",
        data: ["<?php echo $_smarty_tpl->tpl_vars['wk00']->value[48][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[49][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[50][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[51][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[52][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[53][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[54][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[55][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[56][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[57][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[58][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[59][5];?>
","<?php echo $_smarty_tpl->tpl_vars['wk00']->value[60][5];?>
"]
      }
    ]
  };

  var salesChartOptions = {
    //Boolean - If we should show the scale at all
    showScale: true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines: false,
    //String - Colour of the grid lines
    scaleGridLineColor: "rgba(0,0,0,.05)",
    //Number - Width of the grid lines
    scaleGridLineWidth: 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines: true,
    //Boolean - Whether the line is curved between points
    bezierCurve: true,
    //Number - Tension of the bezier curve between points
    bezierCurveTension: 0.3,
    //Boolean - Whether to show a dot for each point
    pointDot: false,
    //Number - Radius of each point dot in pixels
    pointDotRadius: 4,
    //Number - Pixel width of point dot stroke
    pointDotStrokeWidth: 1,
    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    pointHitDetectionRadius: 20,
    //Boolean - Whether to show a stroke for datasets
    datasetStroke: true,
    //Number - Pixel width of dataset stroke
    datasetStrokeWidth: 2, 
    //Boolean - Whether to fill the dataset with a color
    datasetFill: true,
    //String - A legend template
    legendTemplate: "<ul class=\"<<?php ?>%=name.toLowerCase()%<?php ?>>-legend\"><<?php ?>% for (var i=0; i<datasets.length; i++){%<?php ?>><li><span style=\"background-color:<<?php ?>%=datasets[i].lineColor%<?php ?>>\"></span><<?php ?>%=datasets[i].label%<?php ?>></li><<?php ?>%}%<?php ?>></ul>",
    //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: true,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true
  };

  //Create the line chart
  salesChart.Line(salesChartData, salesChartOptions);

  //---------------------------
  //- END MONTHLY SALES CHART -
  //---------------------------

  //-------------
  //- PIE CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.
  var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
  var pieChart = new Chart(pieChartCanvas);
  var PieData = [
    {
      value: 700,
      color: "#f56954",
      highlight: "#f56954",
      label: "Chrome"
    },
    {
      value: 500,
      color: "#00a65a",
      highlight: "#00a65a",
      label: "IE"
    },
    {
      value: 400,
      color: "#f39c12",
      highlight: "#f39c12",
      label: "FireFox"
    },
    {
      value: 600,
      color: "#00c0ef",
      highlight: "#00c0ef",
      label: "Safari"
    },
    {
      value: 300,
      color: "#3c8dbc",
      highlight: "#3c8dbc",
      label: "Opera"
    },
    {
      value: 100,
      color: "#d2d6de",
      highlight: "#d2d6de",
      label: "Navigator"
    }
  ];
  var pieOptions = {
    //Boolean - Whether we should show a stroke on each segment
    segmentShowStroke: true,
    //String - The colour of each segment stroke
    segmentStrokeColor: "#fff",
    //Number - The width of each segment stroke
    segmentStrokeWidth: 1,
    //Number - The percentage of the chart that we cut out of the middle
    percentageInnerCutout: 50, // This is 0 for Pie charts
    //Number - Amount of animation steps
    animationSteps: 100,
    //String - Animation easing effect
    animationEasing: "easeOutBounce",
    //Boolean - Whether we animate the rotation of the Doughnut
    animateRotate: true,
    //Boolean - Whether we animate scaling the Doughnut from the centre
    animateScale: false,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true,
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: false,
    //String - A legend template
    legendTemplate: "<ul class=\"<<?php ?>%=name.toLowerCase()%<?php ?>>-legend\"><<?php ?>% for (var i=0; i<segments.length; i++){%<?php ?>><li><span style=\"background-color:<<?php ?>%=segments[i].fillColor%<?php ?>>\"></span><<?php ?>%if(segments[i].label){%<?php ?>><<?php ?>%=segments[i].label%<?php ?>><<?php ?>%}%<?php ?>></li><<?php ?>%}%<?php ?>></ul>",
    //String - A tooltip template
    tooltipTemplate: "<<?php ?>%=value %<?php ?>> <<?php ?>%=label%<?php ?>> users"
  };
  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  pieChart.Doughnut(PieData, pieOptions);
  //-----------------
  //- END PIE CHART -
  //-----------------

  /* jVector Maps
   * ------------
   * Create a world map with markers
   */
  $('#world-map-markers').vectorMap({
    map: 'world_mill_en',
    normalizeFunction: 'polynomial',
    hoverOpacity: 0.7,
    hoverColor: false,
    backgroundColor: 'transparent',
    regionStyle: {
      initial: {
        fill: 'rgba(210, 214, 222, 1)',
        "fill-opacity": 1,
        stroke: 'none',
        "stroke-width": 0,
        "stroke-opacity": 1
      },
      hover: {
        "fill-opacity": 0.7,
        cursor: 'pointer'
      },
      selected: {
        fill: 'yellow'
      },
      selectedHover: {}
    },
    markerStyle: {
      initial: {
        fill: '#00a65a',
        stroke: '#111'
      }
    },
    markers: [
      {latLng: [41.90, 12.45], name: 'Vatican City'},
      {latLng: [43.73, 7.41], name: 'Monaco'},
      {latLng: [-0.52, 166.93], name: 'Nauru'},
      {latLng: [-8.51, 179.21], name: 'Tuvalu'},
      {latLng: [43.93, 12.46], name: 'San Marino'},
      {latLng: [47.14, 9.52], name: 'Liechtenstein'},
      {latLng: [7.11, 171.06], name: 'Marshall Islands'},
      {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},
      {latLng: [3.2, 73.22], name: 'Maldives'},
      {latLng: [35.88, 14.5], name: 'Malta'},
      {latLng: [12.05, -61.75], name: 'Grenada'},
      {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},
      {latLng: [13.16, -59.55], name: 'Barbados'},
      {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},
      {latLng: [-4.61, 55.45], name: 'Seychelles'},
      {latLng: [7.35, 134.46], name: 'Palau'},
      {latLng: [42.5, 1.51], name: 'Andorra'},
      {latLng: [14.01, -60.98], name: 'Saint Lucia'},
      {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},
      {latLng: [1.3, 103.8], name: 'Singapore'},
      {latLng: [1.46, 173.03], name: 'Kiribati'},
      {latLng: [-21.13, -175.2], name: 'Tonga'},
      {latLng: [15.3, -61.38], name: 'Dominica'},
      {latLng: [-20.2, 57.5], name: 'Mauritius'},
      {latLng: [26.02, 50.55], name: 'Bahrain'},
      {latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'}
    ]
  });

  /* SPARKLINE CHARTS
   * ----------------
   * Create a inline charts with spark line
   */

  //-----------------
  //- SPARKLINE BAR -
  //-----------------
  $('.sparkbar').each(function () {
    var $this = $(this);
    $this.sparkline('html', {
      type: 'bar',
      height: $this.data('height') ? $this.data('height') : '30',
      barColor: $this.data('color')
    });
  });

  //-----------------
  //- SPARKLINE PIE -
  //-----------------
  $('.sparkpie').each(function () {
    var $this = $(this);
    $this.sparkline('html', {
      type: 'pie',
      height: $this.data('height') ? $this.data('height') : '90',
      sliceColors: $this.data('color')
    });
  });

  //------------------
  //- SPARKLINE LINE -
  //------------------
  $('.sparkline').each(function () {
    var $this = $(this);
    $this.sparkline('html', {
      type: 'line',
      height: $this.data('height') ? $this.data('height') : '90',
      width: '100%',
      lineColor: $this.data('linecolor'),
      fillColor: $this.data('fillcolor'),
      spotColor: $this.data('spotcolor')
    });
  });
 
});

</script>
<!---
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
</script>--->
</body>
</html>
<?php }} ?>
