<?php
/* Smarty version 3.1.32, created on 2019-09-05 17:46:21
  from 'C:\xampp\htdocs\composer\test\kum_chk\template\layout_detail02_ins.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d70cb5da89c25_67889859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4fff035f05f54bfed1b9092aeddc52e63e241ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\composer\\test\\kum_chk\\template\\layout_detail02_ins.html',
      1 => 1567673145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d70cb5da89c25_67889859 (Smarty_Internal_Template $_smarty_tpl) {
?>  <!DOCTYPE html>
  <!------------------------------------------------>
  <!--  jquery  --------Sortable drag and drop ----->
  <!------------------------------------------------>
  <!------------------------------------------------>
  <!------------------------------------------------>
  <!------------------------------------------------>
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
  <!-- Select2--->
    <link rel="stylesheet" href="template/AdminLTE-master/plugins/select2/select2.min.css">
  <!-- iCheck for checkboxes and radio inputs
    <link rel="stylesheet" href="template/AdminLTE-master/plugins/iCheck/all.css">--->
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

  <style>
  ul.jquery-ui-sortable {
    list-style-type: none;
      margin: 0 2px;
      margin-left: 10px;
      margin-top: 0px;
      padding: 1px;
      width: 31%;
      float: left;
      background-color: beige;
      border: solid 1px #606060;
  }
  ul.jquery-ui-sortable li {
    /*--  margin: 3px;--*/
      padding: 0.3em;
    /*-- padding-left: 1em;---*/
      font-size: 13px;
    /*--  font-weight: bold;--*/
      cursor: move;
      width:96%;
  }
  li.border-color-red {
      border-color: red;
  }
  li.border-color-blue {
      border-color: blue;
  }
  li.border-color-green {
      border-color: green;
  }
  </style>
  <?php echo '<script'; ?>
 Language="JavaScript">

// 削除ボタン押下
function deleterecode(id){
  //alert(id);
  if(confirm("削除してもよろしいですか?")!=false){
    document.f1.judge.value="1";
    document.f1.action="index.php?module=layout_detail02_ins&id="+id;
    document.f1.submit();
  } else {
    document.f1.judge.value="0";
    document.f1.action="index.php?module=layout_detail02_ins&id="+id;
    document.f1.submit();
  }
}

<?php echo '</script'; ?>
>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
  <!--<body class="hold-transition skin-red sidebar-mini">-->
  <div class="wrapper">
   <div style="color:red">
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['errors'], 'error', false, 'field_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->value => $_smarty_tpl->tpl_vars['error']->value) {
?>
       <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </div>
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
          <li class="treeview"> <a href="index.php"> <i class="fa fa-chevron-left"></i> <span>Return</span> <!--<i class="fa fa-angle-left pull-right"></i> --></a></li>
          <!---<li class="treeview"> <a href="index.php?module=csv_upl01"> <i class="fa fa-table"></i> <span>Table Upload</span> </a></li>--->
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <section class="content-header">
       <form  method="post">
        <h4>Procedure
          <small>:::<?php echo $_smarty_tpl->tpl_vars['sts']->value;?>
</small><!---<?php echo $_smarty_tpl->tpl_vars['form']->value['memos_c']['html'];?>
<p id="log"></p>--->
        </h4>
      </form>
        <!--<ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Forms</a></li>
          <li class="active">General Elements</li>
        </ol>--->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-9">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <!---<h3 class="box-title">Horizontal Form1</h3>--->
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal"  method="post">
               <div class="box-body">
                <div class="form-group">
                  <ul class="jquery-ui-sortable" id='u1'>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ary_fld01']->value, 'data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value == null) {?> <?php break 1;?> <?php }?>
                        <li  class="ui-state-default" id="A<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><i class="fa fa-sort"></i>
                        <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                   <ul  class="jquery-ui-sortable" id='u2'>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ary_fld02']->value, 'data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value == null) {?> <?php break 1;?> <?php }?>
                        <li  class="ui-state-default" id="B<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><i class="fa fa-adjust"></i><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                   <ul class="jquery-ui-sortable" id='u3'>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ary_fld03']->value, 'data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value == null) {?> <?php break 1;?> <?php }?>
                        <li  class="ui-state-default" id="C<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><i class="fa fa-sort"></i>
                        <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                 </div>
               </div>
                <!-- /.box-body -->
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.box -->
            <!-- general form elements disabled -->
            <div class="box box-info">
              <div class="box-header with-border">
                <!---<h3 class="box-title">Horizontal Form2</h3>--->
              </div>
               <form class="form-horizontal" method="post">
                <div class="box-body">
                 <div class="form-group">
                   <ul class="jquery-ui-sortable" id='u4'>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ary_fld04']->value, 'data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value == null) {?> <?php break 1;?> <?php }?>
                        <li class="ui-state-default" id="D<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                   <ul class="jquery-ui-sortable" id='u5'>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ary_fld05']->value, 'data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
                       <?php if ($_smarty_tpl->tpl_vars['data']->value == null) {?> <?php break 1;?> <?php }?>
                        <li class="ui-state-default" id="E<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                   <ul class="jquery-ui-sortable" id='u6'>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ary_fld06']->value, 'data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value == null) {?> <?php break 1;?> <?php }?>
                        <li class="ui-state-default" id="F<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
               </div>
              </div>
              </form>
              <!-- /.box-body -->
              <?php echo $_smarty_tpl->tpl_vars['form']->value['memos_c']['html'];?>

            </div>
            <!-- /.box -->
          </div>
          <div class="col-md-3">
            <div class="box box-success">
              <div class="box-header with-border">
                <!---<h3 class="box-title">Horizontal Form3</h3>--->
              </div>
               <form class="form-horizontal" name="f1" method="post">
                <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

                <div class="box-body">
                  <div class="form-group">
                   <ul class="jquery-ui-sortable"  style="width:204px;height:1242px;" id='rec01'>
                      <?php if ($_smarty_tpl->tpl_vars['sts']->value == 'rew') {?>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ary_sel_view']->value, 'data', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value == null) {?> <?php break 1;?> <?php }?>
                        <li class="ui-state-default" id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</li>
                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      <?php }?>
                      <!--<li class="ui-state-default" style="width:201px;" id='xx1'>Layout:Dummy01</li>--->
                      <!--<li class="ui-state-default" style="width:201px;"></li>--->
                   </ul>
                </div>
                <button type="submit" class="btn btn-info pull-right" id="btn_upd2" name="upd" onClick="postForm2('upd,<?php echo $_smarty_tpl->tpl_vars['ary_crs_view']->value[0];?>
,<?php echo $_smarty_tpl->tpl_vars['ary_crs_view']->value[1];?>
,<?php echo $_smarty_tpl->tpl_vars['ary_crs_view']->value[2];?>
')">Upd_new!!</button>
                <button type="submit" class="btn btn-warning pull-right" name="del" id="btn_del" onClick="deleterecode('del,<?php echo $_smarty_tpl->tpl_vars['ary_crs_view']->value[0];?>
,<?php echo $_smarty_tpl->tpl_vars['ary_crs_view']->value[1];?>
,0}-!!')" >Delete</button>
                <button type="submit" class="btn btn-info pull-right" id="btn_upd" name="send1">Postcheck</button>
              </div>
              <input type="hidden" id="result2" name="result2" />
              <input type="hidden" id="memos" name="memos" />
              <input type="hidden" id="result" name="result" />
              <input type="hidden" id="judge" name="judge"/>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['tbl_id_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['tbl_seq_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['tbl_kbn_c']['html'];?>

             </form>
            </div>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
     <!-- <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.2
      </div>
      <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
      reserved.--->
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
  <!-- iCheck 1.0.1 
  <?php echo '<script'; ?>
 src="template/AdminLTE-master/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>--->
  <!-- sortable 
  <?php echo '<script'; ?>
 src="template/Sortable-master/sortable.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="template/Sortable-master/sortable.min.js"><?php echo '</script'; ?>
>--->
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
  <?php echo '<script'; ?>
 type="text/javascript">
  window.location.hash="no-back";
  window.location.hash="no-back-button";
  window.onhashchange=function(){
  window.location.hash="no-back";
  }
  <?php echo '</script'; ?>
>

  <!---------------------------------------
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
 <!---------------------------------------
  // postform  key=key_array1 value=sortable.array
  //     以下の二行は不要かも。。。
  //    $("#rec01").sortable();
  //    $("#rec01").disableSelection();
  //---------+------------------------>
  <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
  function postForm1( value ){
  if (window.File && window.FileReader && window.FileList && window.Blob) {

  } else {
    alert('未対応');
    exit;
  }
  	 $("#rec01").sortable();
      $("#rec01").disableSelection();
      /*----
    var form = document.createElement( 'form' );
      document.body.appendChild( form );
      var input = document.createElement( 'input' );
      var value00 = "'" + value + "'";
  	  input.setAttribute( 'type' , 'hidden' );
      input.setAttribute( 'name' , 'KEY' );
      input.setAttribute( 'value' , value );----*/
    //result
    var result = $("#rec01").sortable("toArray");
    document.getElementById( "result" ).value = result;
    //result2
    var fld_ary = [];
    var textList = document.getElementById('u1'),li01 = textList.getElementsByTagName('li');
    for (var j = 0; j < li01.length; j++) {
      fld_ary.push(li01[j].textContent);
    }
    var textList = document.getElementById('u2'),li02 = textList.getElementsByTagName('li');
    for (var j = 0; j < li02.length; j++) {
      fld_ary.push(li02[j].textContent);
    }
    var textList = document.getElementById('u3'),li03 = textList.getElementsByTagName('li');
    for (var j = 0; j < li03.length; j++) {
      fld_ary.push(li03[j].textContent);
    }
    var textList = document.getElementById('u4'),li04 = textList.getElementsByTagName('li');
    for (var j = 0; j < li04.length; j++) {
      fld_ary.push(li04[j].textContent);
    }
    var textList = document.getElementById('u5'),li05 = textList.getElementsByTagName('li');
    for (var j = 0; j < li05.length; j++) {
      fld_ary.push(li05[j].textContent);
    }
    var textList = document.getElementById('u6'),li06 = textList.getElementsByTagName('li');
    for (var j = 0; j < li06.length; j++) {
      fld_ary.push(li06[j].textContent);
    }
    document.getElementById( "result2" ).value = fld_ary;
  }
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
  //--------------------------------------
  //     ul li の要素を取得する
  //--------------------------------------
  function postForm2( value ){
  if (window.File && window.FileReader && window.FileList && window.Blob) {

  } else {
    alert('未対応');
    exit;
  }
    //--------------
    //result 2
    //--------------
    var fld_ary = [];
    var textList = document.getElementById('u1'),li01 = textList.getElementsByTagName('li');
    for (var j = 0; j < li01.length; j++) {
      fld_ary.push(li01[j].textContent);
    }
    var textList = document.getElementById('u2'),li02 = textList.getElementsByTagName('li');
    for (var j = 0; j < li02.length; j++) {
      fld_ary.push(li02[j].textContent);
    }
    var textList = document.getElementById('u3'),li03 = textList.getElementsByTagName('li');
    for (var j = 0; j < li03.length; j++) {
      fld_ary.push(li03[j].textContent);
    }
    var textList = document.getElementById('u4'),li04 = textList.getElementsByTagName('li');
    for (var j = 0; j < li04.length; j++) {
      fld_ary.push(li04[j].textContent);
    }
    var textList = document.getElementById('u5'),li05 = textList.getElementsByTagName('li');
    for (var j = 0; j < li05.length; j++) {
      fld_ary.push(li05[j].textContent);
    }
    var textList = document.getElementById('u6'),li06 = textList.getElementsByTagName('li');
    for (var j = 0; j < li06.length; j++) {
      fld_ary.push(li06[j].textContent);
    }
    document.getElementById( "result2" ).value = fld_ary;
    //
    //--------------
    //result 1
    //--------------
    var fld_ary = [];
    var textList = document.getElementById('rec01'),li01 = textList.getElementsByTagName('li');
    for (var j = 0; j < li01.length; j++) {
      fld_ary.push(li01[j].textContent);
    }
    document.getElementById( "result" ).value = fld_ary;
    //
    //--------------
    //memo
    //--------------
    document.getElementById( "memos" ).value =  document.getElementById( "memos_c-0" ).value;
    //
  }
<?php echo '</script'; ?>
>
<!----fld_ary.push(li02[j].textContent);
   <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
  $('#rec01').sortable({
        update: function(){
          alert('aa0');
$.post("layout_detail01.php",{sort: $(this).sortable("toArray")},
  function(data){
    alert('aa1');
 $("#log").append('<p>' + data + '</p>');
  });
 }
});
  <?php echo '</script'; ?>
>---->
<?php echo '<script'; ?>
>
$( function() {
    $( '.jquery-ui-sortable' ) . sortable( {
        connectWith: '.jquery-ui-sortable'
    } );
    $( '.jquery-ui-sortable' ) . disableSelection();
} );
<?php echo '</script'; ?>
>


  </body>
  </html>
<?php }
}
