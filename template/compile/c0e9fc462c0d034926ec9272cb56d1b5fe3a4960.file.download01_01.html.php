<?php /* Smarty version Smarty-3.1.18, created on 2018-07-03 10:06:11
         compiled from ".\template\download01_01.html" */ ?>
<?php /*%%SmartyHeaderCode:415b318e686263a5-97146893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0e9fc462c0d034926ec9272cb56d1b5fe3a4960' => 
    array (
      0 => '.\\template\\download01_01.html',
      1 => 1530579916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '415b318e686263a5-97146893',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b318e68829da9_00824200',
  'variables' => 
  array (
    'se_picture' => 0,
    'se_username_x' => 0,
    'se_staff_type' => 0,
    'ndo_ary' => 0,
    'wk13' => 0,
    'wk03' => 0,
    'value' => 0,
    'json_wk13' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b318e68829da9_00824200')) {function content_5b318e68829da9_00824200($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Simple Tables</title>
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
    <a href="index.php"  class="logo"> 
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
        <!--<li class="treeview"> <a href="index.php"> <i class="fa fa-glass"></i> <span>Top menu</span> </a></li>--->
        <li class="treeview"> <a href="index.php"> <i class="fa fa-chevron-left"></i> <span>Return</span> <!--<i class="fa fa-angle-left pull-right"></i> --></a></li>
      </ul>
    </section>
    <!-- /.sidebar --> 
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DownLoad 
        <small>過去配布した帳票</small>
      </h1>
      
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>--->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header" title='普及事業本部全体　過年度締分 単位：万円'>
              <h3 class="box-title">Previous Years</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <th style="width: 10px" title='年度'>#</th>
                  <th align="right">Budget</th>
                  <th align="right">Income</th>
                  <th title='達成率'>Rate</th>
                  <th style="width: 40px" title='達成率'>%</th>
                  <th title='Download'>Dw</th>
                </tr>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['ndo_ary']->value[6];?>
</td>
                  <td align="right" title='予算'><?php echo $_smarty_tpl->tpl_vars['wk13']->value[0][4];?>
</td>
                  <td align="right" title='収益'><?php echo $_smarty_tpl->tpl_vars['wk13']->value[0][5];?>
</td>
                  <td title='達成率'>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: <?php echo $_smarty_tpl->tpl_vars['wk13']->value[0][6];?>
%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red"><?php echo $_smarty_tpl->tpl_vars['wk13']->value[0][6];?>
%</span></td>
                   <td><input type="button" class="btn btn-block btn-default" style='width:50px;height:25px;' name="details"  title='Download' onClick="postForm1('<?php echo $_smarty_tpl->tpl_vars['wk13']->value[0][0];?>
,<?php echo $_smarty_tpl->tpl_vars['wk13']->value[0][4];?>
,wk13')"></td>
                </tr>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['ndo_ary']->value[5];?>
</td>
                  <td align="right" title='予算'><?php echo $_smarty_tpl->tpl_vars['wk13']->value[1][4];?>
</td>
                  <td align="right" title='収益'><?php echo $_smarty_tpl->tpl_vars['wk13']->value[1][5];?>
</td>
                  <td title='達成率'>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: <?php echo $_smarty_tpl->tpl_vars['wk13']->value[1][6];?>
%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow"><?php echo $_smarty_tpl->tpl_vars['wk13']->value[1][6];?>
%</span></td>
                   <td><input type="button" class="btn btn-block btn-default" style='width:50px;height:25px;' name="details"  title='Download' onClick="postForm1('<?php echo $_smarty_tpl->tpl_vars['wk13']->value[1][0];?>
,<?php echo $_smarty_tpl->tpl_vars['wk13']->value[1][4];?>
,wk13')"></td>
                </tr>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['ndo_ary']->value[4];?>
</td>
                  <td align="right" title='予算'><?php echo $_smarty_tpl->tpl_vars['wk13']->value[2][4];?>
</td>
                  <td align="right" title='収益'><?php echo $_smarty_tpl->tpl_vars['wk13']->value[2][5];?>
</td>
                   <td title='達成率'>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: <?php echo $_smarty_tpl->tpl_vars['wk13']->value[2][6];?>
%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue"><?php echo $_smarty_tpl->tpl_vars['wk13']->value[2][6];?>
%</span></td>
                   <td><input type="button" class="btn btn-block btn-default" style='width:50px;height:25px;' name="details"  title='Download' onClick="postForm1('<?php echo $_smarty_tpl->tpl_vars['wk13']->value[2][0];?>
,<?php echo $_smarty_tpl->tpl_vars['wk13']->value[2][4];?>
,wk13')"></td>
                </tr>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['ndo_ary']->value[3];?>
</td>
                  <td align="right" title='予算'><?php echo $_smarty_tpl->tpl_vars['wk13']->value[3][4];?>
</td>
                  <td align="right" title='収益'><?php echo $_smarty_tpl->tpl_vars['wk13']->value[3][5];?>
</td>
                  <td title='達成率'>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: <?php echo $_smarty_tpl->tpl_vars['wk13']->value[3][6];?>
%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green"><?php echo $_smarty_tpl->tpl_vars['wk13']->value[3][6];?>
%</span></td>
                 <td><input type="button" class="btn btn-block btn-default" style='width:50px;height:25px;' name="details"  title='Download' onClick="postForm1('<?php echo $_smarty_tpl->tpl_vars['wk13']->value[3][0];?>
,<?php echo $_smarty_tpl->tpl_vars['wk13']->value[3][4];?>
,wk13')"></td>

                </tr>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['ndo_ary']->value[2];?>
</td>
                  <td align="right" title='予算'><?php echo $_smarty_tpl->tpl_vars['wk13']->value[4][4];?>
</td>
                  <td align="right" title='収益'><?php echo $_smarty_tpl->tpl_vars['wk13']->value[4][5];?>
</td>
                  <td title='達成率'>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-blue" style="width: <?php echo $_smarty_tpl->tpl_vars['wk13']->value[4][6];?>
%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green"><?php echo $_smarty_tpl->tpl_vars['wk13']->value[4][6];?>
%</span></td>
                 <td><input type="button" class="btn btn-block btn-default" style='width:50px;height:25px;' name="details"  title='Download' onClick="postForm1('<?php echo $_smarty_tpl->tpl_vars['wk13']->value[4][0];?>
,<?php echo $_smarty_tpl->tpl_vars['wk13']->value[4][4];?>
,wk13')"></td>

                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box">
            <div class="box-header" title='本年度分'>
              <h3 class="box-title">This Year</h3>

              <!---<div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                 <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>---->
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                  <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wk03']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->index++;
 $_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->index === 0;
?> 
                  
                  <?php if ($_smarty_tpl->tpl_vars['value']->first) {?>
                <!--  <thead style="background-color:#CCC">--->                  
                    <tr>
                      <th style="width: 10px" title='年度'>#</th>
                  <th align="right">Budget</th>
                  <th align="right">Income</th>
                  <th title='達成率'>Rate</th>
                  <th style="width: 40px" title='達成率'>%</th>
                  <th title='Download'>Dw</th>
                    </tr>
                  <!--</thead>--->
                  <?php }?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
</td>
                    <td align="right" title='予算'><?php echo $_smarty_tpl->tpl_vars['value']->value[4];?>
</td>
                    <td align="right" title='収益'><?php echo $_smarty_tpl->tpl_vars['value']->value[5];?>
</td>
                    
                    <td> <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: <?php echo $_smarty_tpl->tpl_vars['value']->value[6];?>
%"></div>
                    </div></td>
                    <td><span class="badge bg-light-blue"><?php echo $_smarty_tpl->tpl_vars['value']->value[6];?>
%</span></td>
                    <td><input type="button" class="btn btn-default" style='width:50px;height:25px;'name="details" onClick="postForm1( '<?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
,<?php echo $_smarty_tpl->tpl_vars['value']->value[1];?>
,<?php echo $_smarty_tpl->tpl_vars['value']->value[2];?>
')"></td>
                    
                  </tr>
                  <?php } ?>
                </table>
         
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
           <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border" title='Gray:予算,Blue:収益 単位:万円'>
              <h3 class="box-title">Line Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      
      
      <!-- /.row -->
      <!---<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
              </table>
            </div>
            
          </div>　
          
        </div>
      </div>--->
        <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" title='本年度分'>
              <h3 class="box-title">This Year</h3>

              <!---<div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                 <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>---->
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                  <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wk03']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->index++;
 $_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->index === 0;
?> 
                  
                  <?php if ($_smarty_tpl->tpl_vars['value']->first) {?>
                <!--  <thead style="background-color:#CCC">--->                  
                    <tr>
                      <th title='計上年月'>#</th>
                      <th title='普及部門予算'>予算</th>
                      <th title='普及部門収益'>収益</th>
                      <th title='達成率'>%</th>
                      <th></th>                      
                      <th title='Download'>Dw</th>
                    </tr>
                  <!--</thead>--->
                  <?php }?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value[4];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value[5];?>
</td>
                    
                    <td> <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: <?php echo $_smarty_tpl->tpl_vars['value']->value[6];?>
%"></div>
                    </div></td>
                    <td><span class="badge bg-light-blue"><?php echo $_smarty_tpl->tpl_vars['value']->value[6];?>
%</span></td>
                    <td><input type="button" class="btn btn-default" style='width:100px;'name="details" onClick="postForm1( '<?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
,<?php echo $_smarty_tpl->tpl_vars['value']->value[1];?>
,<?php echo $_smarty_tpl->tpl_vars['value']->value[2];?>
')"></td>
                    
                  </tr>
                  <?php } ?>
                </table>
         
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
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
<script src="template/AdminLTE-master/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="template/AdminLTE-master/bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="template/AdminLTE-master/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="template/AdminLTE-master/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="template/AdminLTE-master/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="template/AdminLTE-master/dist/js/demo.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="template/AdminLTE-master/plugins/chartjs/Chart.min.js"></script>


<script language="javascript" type="text/javascript">
function postForm1( value ){
   var form = document.createElement( 'form' );
    document.body.appendChild( form );
    var input = document.createElement( 'input' );
    var value00 = "'" + value + "'";
	input.setAttribute( 'type' , 'hidden' );
    input.setAttribute( 'name' , 'key' );
    input.setAttribute( 'value' , value );
    form.appendChild( input );
    form.setAttribute( 'action' , 'index.php?module=upd_check02');
    form.setAttribute( 'method' , 'post' );
    form.submit();
}
</script>
<!-- page script -->
<script>
  $(function () {
    console.log('start!!');
	/* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
   	//>>>>>>>>>>>>>>>>>>>>>>>>>>>
	//  data get 
	//>>>>>>>>>>>>>>>>>>>>>>>>>>>
	var jsonstring = '<?php echo $_smarty_tpl->tpl_vars['json_wk13']->value;?>
';	
	//---------------------------------改行を削除
	var jsonstring2 = jsonstring.replace(/\r?\n/g,"");
	var json_text = jsonstring2.split(",");	
	var wk13 = JSON.parse(json_text);
	//
	//console.log('aaaa5'); 
	//console.log(wk03); 
    //
	//--------------
    //- AREA CHART -
    //--------------
    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas);

    var areaChartData = {
      //labels: ["2013", "2014", "2015", "2016", "2017"],
 labels:   ['<?php echo $_smarty_tpl->tpl_vars['ndo_ary']->value[6];?>
','<?php echo $_smarty_tpl->tpl_vars['ndo_ary']->value[5];?>
','<?php echo $_smarty_tpl->tpl_vars['ndo_ary']->value[4];?>
','<?php echo $_smarty_tpl->tpl_vars['ndo_ary']->value[3];?>
','<?php echo $_smarty_tpl->tpl_vars['ndo_ary']->value[2];?>
'],
 
      datasets: [
        {
          label: "Budets",
          fillColor: "rgba(210, 214, 222, 1)",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [wk13[0][4],wk13[1][4],wk13[2][4],wk13[3][4],wk13[4][4]]
		   },
        {
          label: "Income",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [wk13[0][5],wk13[1][5],wk13[2][5],wk13[3][5],wk13[4][5]]
		  //data: [757394, 788070, 779554, 849305, 865683]
        }
      ]
    };

    var areaChartOptions = {
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
      legendTemplate: "<ul class=\"<<?php ?>%=name.toLowerCase()%<?php ?>>-legend\"><<?php ?>% for (var i=0; i<datasets.length; i++){%<?php ?>><li><span style=\"background-color:<<?php ?>%=datasets[i].lineColor%<?php ?>>\"></span><<?php ?>%if(datasets[i].label){%<?php ?>><<?php ?>%=datasets[i].label%<?php ?>><<?php ?>%}%<?php ?>></li><<?php ?>%}%<?php ?>></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions);

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas);
    var lineChartOptions = areaChartOptions;
    lineChartOptions.datasetFill = false;
    lineChart.Line(areaChartData, lineChartOptions);

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
      segmentStrokeWidth: 2,
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
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<<?php ?>%=name.toLowerCase()%<?php ?>>-legend\"><<?php ?>% for (var i=0; i<segments.length; i++){%<?php ?>><li><span style=\"background-color:<<?php ?>%=segments[i].fillColor%<?php ?>>\"></span><<?php ?>%if(segments[i].label){%<?php ?>><<?php ?>%=segments[i].label%<?php ?>><<?php ?>%}%<?php ?>></li><<?php ?>%}%<?php ?>></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    barChartData.datasets[1].fillColor = "#00a65a";
    barChartData.datasets[1].strokeColor = "#00a65a";
    barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<<?php ?>%=name.toLowerCase()%<?php ?>>-legend\"><<?php ?>% for (var i=0; i<datasets.length; i++){%<?php ?>><li><span style=\"background-color:<<?php ?>%=datasets[i].fillColor%<?php ?>>\"></span><<?php ?>%if(datasets[i].label){%<?php ?>><<?php ?>%=datasets[i].label%<?php ?>><<?php ?>%}%<?php ?>></li><<?php ?>%}%<?php ?>></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
  });
</script>
</body>
</html>
<?php }} ?>
