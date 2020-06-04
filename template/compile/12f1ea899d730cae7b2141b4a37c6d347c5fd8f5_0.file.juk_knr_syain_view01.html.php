<?php
/* Smarty version 3.1.32, created on 2020-03-23 16:51:40
  from 'C:\xampp\htdocs\composer\test\kum_chk\template\juk_knr_syain_view01.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e786a8c7f9100_62291129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12f1ea899d730cae7b2141b4a37c6d347c5fd8f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\composer\\test\\kum_chk\\template\\juk_knr_syain_view01.html',
      1 => 1584949884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e786a8c7f9100_62291129 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<!---
wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
 ADMINLTE DATATABLE template
 通常一覧表から詳細画面に飛ぶと PHPから $postでhidden項目をkeyとして詳細画面にPOST送信するが
 hidden項目のkeyが最後の配列のデータを取得してしまうので今回はPHPからではなくJAVASCRIPTにより
 POST送信を行っている
  javascript:postform
 2016-05-09
 wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
--->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>JukoKnrSys</title>
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
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->
  <!-- git hub  button ----->
<?php echo '<script'; ?>
 src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"><?php echo '</script'; ?>
>
</head>
<body class="hold-transition skin-blue sidebar-mini">


<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>K</b>um</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Sanno</b>..CSL</span> </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
      <div class="navbar-custom-menu">
      </div>
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4><?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
<small><?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
:<a id='access_id' ><?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
</a></small></h4>
      <ol class="breadcrumb">
        <li><?php echo $_smarty_tpl->tpl_vars['sts']->value;?>
</li>
        <!--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
        <!--<li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>-->
      </ol>
    </section>
    <!-- Main content -->
    <!-- /.content -->
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Syain View</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           <!--<form  name="data_table_f2" method="post" action="index.php?module=juk_knr_syain_view01">-->
           <form  name="data_table_f2" method="post">
              <table id="example1" class="table table-bordered table-striped">
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ary_syn_view']->value, 'value');
$_smarty_tpl->tpl_vars['value']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->index++;
$_smarty_tpl->tpl_vars['value']->first = !$_smarty_tpl->tpl_vars['value']->index;
$__foreach_value_0_saved = $_smarty_tpl->tpl_vars['value'];
?>
               <?php if ($_smarty_tpl->tpl_vars['value']->first) {?>
               <thead style="background-color:#CCC">
                  <!-- select u.p_id,u.p_no_seq,u.kaiko,u.kgo_nm,u.has_ira_ymd,u.has_ymd,u.seq,u.upd_ymd,u.cre_ymd from t_uke  order by cre_ymd <tr bgcolor="#adff2f">--->
                  <tr>
                    <th>AccessID</th>
                    <th>SyainNo</th>
                    <th>Birth</th>
                    <th>Grade</th>
                    <th style='width:400px;'>Memo</th>
                    <th>Ksy_ID</th>
                    <th title='company-id'>ID</th>
                    <th>Upd_ymd</th>
                    <th>Cre_ymd</th>
                  </tr>
              </thead>
              <?php }?>
              <tr>
               	<td><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[1];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[2];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[5];?>
</td>
                <td style="font-size:11px;"><?php echo $_smarty_tpl->tpl_vars['value']->value[6];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[12];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[11];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[13];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value[14];?>
</td>
  		      	 </tr>
          <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </table>
              <?php echo $_smarty_tpl->tpl_vars['form']->value['access_id_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['client_id_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['client_nm_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['sts_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['q_id_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['cnt_c']['html'];?>

               <button type="submit" class="btn btn-info pull-right" style='width:100px' id="excel01" name="excel01">Excel</button>
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
<?php echo '<script'; ?>
 src="template/AdminLTE-master/plugins/jQuery/jQuery-2.1.4.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.5 -->
<?php echo '<script'; ?>
 src="template/AdminLTE-master/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- DataTables -->
<?php echo '<script'; ?>
 src="template/AdminLTE-master/plugins/datatables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="template/AdminLTE-master/plugins/datatables/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
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
    input.setAttribute( 'name' , 'KEY' );
    input.setAttribute( 'value' , value );
    form.appendChild( input );
    form.setAttribute( 'action' , 'index?module=juk_knr_syain_view01');
    form.setAttribute( 'method' , 'post' );
    form.submit();

}
<?php echo '</script'; ?>
>
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
//----------------------------------->
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
</body>
</html>
<?php }
}
