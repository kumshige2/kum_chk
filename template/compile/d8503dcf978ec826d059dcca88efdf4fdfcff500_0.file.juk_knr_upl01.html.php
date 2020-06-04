<?php
/* Smarty version 3.1.32, created on 2020-03-26 09:49:15
  from 'C:\xampp\htdocs\composer\test\kum_chk\template\juk_knr_upl01.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e7bfc0b9eb3c0_51707057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8503dcf978ec826d059dcca88efdf4fdfcff500' => 
    array (
      0 => 'C:\\xampp\\htdocs\\composer\\test\\kum_chk\\template\\juk_knr_upl01.html',
      1 => 1585183751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7bfc0b9eb3c0_51707057 (Smarty_Internal_Template $_smarty_tpl) {
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
  <!-- DataTables -->
<link rel="stylesheet" href="template/AdminLTE-master/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
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
   <!-- loadings--->
<link rel="stylesheet" href="template/css/loading01.css">
<style>
/*--
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
---*/
.displaynone  {
display:none;
}

</style>
<?php echo '<script'; ?>
 Language="JavaScript">

// Match押下
function match01(){
  //alert('yeah');
  if(document.data_table_f1.q_kei_c.value >0) {
    alert('まだエラーがあるようです！');
  } else {
    if(confirm('データを併合してもよろしいですか?')!=false){
     var client_id;
    var client_nm;
    var access_id;
    var id;
    client_id =document.getElementById("client_id01").textContent;
    access_id =document.getElementById("access_id01").textContent;
    client_nm =document.getElementById("client_nm01").textContent;
     id = client_id + ',' + access_id+ ',' + client_nm + ',' + 'mch';
     //alert(id);
     document.data_table_f1.action="index.php?module=juk_knr_upl01&id="+id;
     document.data_table_f1.submit();
   } else {
     //alert('no');
   }
  }
    //document.rcp_detail_f1.judge.value="1";
    //document.rcp_detail_f1.action="index.php?module=rcp_detail_view01&id="+id;
    //document.rcp_detail_f1.submit();
  //} else {
    //document.rcp_detail_f1.judge.value="0";
    //document.rcp_detail_f1.action="index.php?module=rcp_detail_view01&id="+id;
    //document.rcp_detail_f1.submit();
  //}
}

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 Language="JavaScript">
//----------------------------
// suntory2 syainマスターClear
// ---------------------------
// Clear押下
function clear01(){
  var client_id;
  var client_nm;
  var access_id;
  var id;
  client_id =document.getElementById("client_id01").textContent;
  access_id =document.getElementById("access_id01").textContent;
  client_nm =document.getElementById("client_nm01").textContent;
   id = client_id + ',' + access_id+ ',' + client_nm + ',' + 'clr';
  //alert(client_id);
  if (client_id=='234') {
    } else {
      alert('本処理は実行できません');
      exit;
    }
  if(confirm('▼▼年度初めだけ行う処理▼▼  社員データをすべて初期化してもよろしいですか?')!=false){
    document.data_table_f2.judge.value="1";
    document.data_table_f2.action="index.php?module=juk_knr_upl01&id="+id;
    document.data_table_f2.submit();
  } else {
    document.data_table_f2.judge.value="0";
    document.data_table_f2.action="index.php?module=juk_knr_upl01&id="+id;
    document.data_table_f2.submit();
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
      <div class="navbar-custom-menu"></div>
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
        <li class="treeview"> <a href="index.php"> <i class="fa fa-home"></i> <span>Home</span> <!--<i class="fa fa-angle-left pull-right"></i> --></a></li>
        <li class="treeview"> <a href="index.php?module=juk_knr_syain_view01&id=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
,syn"> <i class="fa fa-building"></i> <span>Syain View</span> </a></li>
        <li class="treeview"> <a href="index.php?module=juk_knr_syain_dum_view01&id=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
,syn"> <i class="fa fa-paw"></i> <span>Dummy Syain</span> </a></li>
        <!---<li class="treeview"> <a href="index.php?module=juk_knr_syain_dum_view02&id=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
,syn"> <i class="fa fa-book"></i> <span>Dummy Syain2</span> </a></li>--->
        <li class="treeview"> <a href="index.php?module=juk_knr_dwn01&id=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
"> <i class="fa fa-download"></i> <span>Download</span> <!--<i class="fa fa-angle-left pull-right"></i> --></a></li>
        <li class="treeview"> <a href="index.php?module=juk_knr_sys01&id=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
"> <i class="fa fa-chevron-left"></i>
        <span>Return</span> <!--<i class="fa fa-angle-left pull-right"></i> --></a></li>
        <!---<li class="treeview"> <a href="index.php?module=csv_upl01"> <i class="fa fa-table"></i> <span>Table Upload</span> </a></li>--->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!---- Loading ---->

    <section class="content-header">
      <h4><?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
<small><?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
:<a id='access_id' ><?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
</a></small></h4> 
      <ol class="breadcrumb">
        <li><?php echo $_smarty_tpl->tpl_vars['sts']->value;?>
</li>
        <!--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--->
        <!--<li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>-->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-5">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Upload</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <!--<button type="button" class="btn btn-primary btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>-->
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <!-- form start ---->
            <form enctype="multipart/form-data" method="post" action="index.php?module=juk_knr_upl01&id=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
">
              <div class="box-body">
                <div class="form-group">
                  <label for="upFile">File input--</label><a style='color:#ff00cc;'>xxxxx.txt</a>
                  <input type="file" name="upfile" title='.txt形式のみ!'>
                </div>
                <div class="checkbox">
                  <ul>
                   <li>Name :<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
                   <li>Type :<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</li>
                   <li>Cnt  :<?php echo $_smarty_tpl->tpl_vars['cnt']->value;?>
</li>
                   <li>Error:<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                  </ul>
               </div>
               <div class="box-footer">
                <input type="submit" name='upload' value="Submit" class="btn btn-primary" style="width:100px;" id='uuu2' title='データ取り込み' onclick='loader2()' />
                 <p style="color:<?php echo $_smarty_tpl->tpl_vars['colors']->value;?>
;">Msg :<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
               </div>
              </div>
            </form>
          </div>
          <div class="box box-default">
              <div class="box-header">
                <h5 class="box-title">Syain Master</h5>
                  <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <!--<button type="button" class="btn btn-primary btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>-->
              </div>
              </div>
              <div class="box-body">
               <table id="example9" class="table table-bordered table-striped">
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['syain_now']->value, 'value01');
$_smarty_tpl->tpl_vars['value01']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value01']->value) {
$_smarty_tpl->tpl_vars['value01']->index++;
$_smarty_tpl->tpl_vars['value01']->first = !$_smarty_tpl->tpl_vars['value01']->index;
$__foreach_value01_1_saved = $_smarty_tpl->tpl_vars['value01'];
?>
               <?php if ($_smarty_tpl->tpl_vars['value01']->first) {?>
               <thead style="background-color:#CCC">
                  <tr>
                    <!--<th>No</th>--->
                    <th>Company_ID</th>
                    <th>Count</th>
                  </tr>
              </thead>
              <?php }?>
              <tr>
                <!--<td style="width:30px;"><?php echo $_smarty_tpl->tpl_vars['value01']->index;?>
</td>-->
                <td><span style='font-size: 16px;width:10px;'><?php echo $_smarty_tpl->tpl_vars['value01']->value[1];?>
</span></td>
                <td><span style='font-size: 16px;width:50px;'><?php echo $_smarty_tpl->tpl_vars['value01']->value[0];?>
</span></td>
              </tr>
          <?php
$_smarty_tpl->tpl_vars['value01'] = $__foreach_value01_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </table>
              </div>
          </div>
          <div class="box box-danger">
              <div class="box-header">
                <h5 class="box-title">Data Clear</h5>
                <div class="pull-right box-tools">
                <button type="button" class="btn btn-danger btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <!--<button type="button" class="btn btn-primary btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>-->
              </div>
              </div>
              <div class="box-body">
                <form  name="data_table_f2" method="post" action="index.php?module=juk_knr_upl01">
                  <input type='hidden' name='judge'>
                  <input type="button" class="btn btn-default" name="clr" style="width:100px;color:#ff00cc;" value='CLEAR' title='年度初め初期化' onClick="clear01()"/>
                </form>
              </div>
          </div>
        </div>        <!-- /.box -->
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-7">
          <!-- Horizontal Form -->
           <div class="box box-primary">
           <div class="box-header">
              <h3 class="box-title">Check List</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <!--<button type="button" class="btn btn-danger btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>-->
              </div>
              <!-- /. tools -->
           </div>
            <!-- /.box-header -->
            <div class="box-body">
           <form  name="data_table_f1" method="post" action="index.php?module=juk_knr_upl01">
            <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

             <table id="example2" class="table table-bordered table-striped">
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chk01']->value, 'value');
$_smarty_tpl->tpl_vars['value']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->index++;
$_smarty_tpl->tpl_vars['value']->first = !$_smarty_tpl->tpl_vars['value']->index;
$__foreach_value_2_saved = $_smarty_tpl->tpl_vars['value'];
?>
               <?php if ($_smarty_tpl->tpl_vars['value']->first) {?>
               <thead style="background-color:#CCC">
                  <tr>
                    <th>No</th>
                    <th>Memo</th>
                    <th>Cnt</th>
                    <th style="width:40px; height:20px;">xxx</th>
                    <th class="displaynone">xxx</th>
                  </tr>
              </thead>
              <?php }?>
              <tr>
                <td style="width:30px;"><?php echo $_smarty_tpl->tpl_vars['value']->index;?>
</td>
                <td><span style='font-size: 13px;width:100px;'><?php echo $_smarty_tpl->tpl_vars['value']->value[2];?>
</span></td>
                <td><span style='font-size: 16px;width:20px;'><?php echo $_smarty_tpl->tpl_vars['value']->value[4];?>
</span></td>
                <td>  <input type="button" class="btn btn-default" name="details" style="width:40px; height:20px;" value=""  title='誰 ?' onClick="postForm('<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
,upl,<?php echo $_smarty_tpl->tpl_vars['value']->value[1];?>
,<?php echo $_smarty_tpl->tpl_vars['value']->value[4];?>
')";></td>
                <td class="displaynone"><?php echo $_smarty_tpl->tpl_vars['value']->value[1];?>
</td>
              </tr>
          <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </table>
              <div class="box-footer">
               <!--<input type="button" class="btn btn-primary" name="Match" style="width:100px;" value='Match'  title='' onClick="postForm1('<?php echo $_smarty_tpl->tpl_vars['q_kei2']->value;?>
,su0')";/>--->
               <input type="button" class="btn btn-primary" name="match" style="width:100px;" value='Match' title='' onClick="match01()"; />
               ERR:<?php echo $_smarty_tpl->tpl_vars['form']->value['q_kei_c']['html'];?>
WRN:<?php echo $_smarty_tpl->tpl_vars['form']->value['w_kei_c']['html'];?>
MAS:<?php echo $_smarty_tpl->tpl_vars['m_cnt']->value;?>
TRN:<?php echo $_smarty_tpl->tpl_vars['cnt']->value;?>

               <!-- <input type="submit" name='match2' value="match2" class="btn btn-success" style="width:100px;" />--->
              </div>
          </form>
            </div>
            <!-- /.box-body
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> ReadMore..</button>
            </div>--->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
 <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box displaynone">
            <div id='client_id01'><?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
</div>
            <div id='access_id01'><?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
</div>
            <div id='client_nm01'><?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
</div>
          </div>
        </div>
          <!-- /.box -->
          <!-- /.box -->
      </div>
        <!-- /.col -->


      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<div id="container01"></div>
<!--</div>--->
  <!-- /.content-wrapper -->
  <footer class="main-footer">

   <!-- <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.2
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.--->
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
<!--</div>-->
<!-- ./wrapper -->
<!--- LOADING ---->
<div id="p2">
  <div class="duo duo1">
    <div class="dot dot-a"></div>
    <div class="dot dot-b"></div>
  </div>
  <div class="duo duo2">
    <div class="dot dot-a"></div>
    <div class="dot dot-b"></div>
  </div>
</div>
<!------ loading ----->
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
<!-- DataTables -->
<?php echo '<script'; ?>
 src="template/AdminLTE-master/plugins/datatables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="template/AdminLTE-master/plugins/datatables/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $(function () {
  $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "destroy": true,
      "autoWidth": false
    });
  $("#example1").DataTable({"destroy": true});
  $("#example4").DataTable();
  $('#example3').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "destroy": true,
      "autoWidth": false
    });
   $('#example9').DataTable({
      "paging": false,
      "lengthChange": true,
      "searching": false,
      "ordering": false,
      "info": false,
      "destroy": true,
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
 language="javascript" type="text/javascript">
  function postForm1( value ){
   var form = document.createElement( 'form' );
   document.body.appendChild( form );
   var input = document.createElement( 'input' );
   var value00 = "'" + value + "'";
   input.setAttribute( 'type' , 'hidden' );
   input.setAttribute( 'name' , 'KEY' );
   input.setAttribute( 'value' , value );
   form.appendChild( input );
   form.setAttribute( 'action' , 'index.php?module=upd_check12');
   form.setAttribute( 'method' , 'post' );
   form.submit();
 }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function () {
  var count = 0;
  $(document).on('click','uuu',function(){
    alert('aaaa');
    progress(count);
  });
  function progress(count){
    setTimeout(function(){
      $("#pgss2").css({'width':count+'%'});
      count=count + 1;
      //if(count == 90) return;
      progress(count);
    },100);
  }
})
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  window.onload = function() {
  const loader01 = document.getElementById('p2');
  //alert ('yyy');
  loader01.classList.add('loadoff');
  //p2.style.visibility ="hidden";
}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
 //document.getElementById("loaders").style.visibility ="hidden";
 function loader2(){
  const loader01 = document.getElementById("p2");
//alert ('bbb');
   loader01.classList.remove('loadoff');
   loader01.classList.add('loadon');

  //if(p2.style.visibility=="visible"){
    // hiddenで非表示
    //p2.style.visibility ="visible";
  //}else{
    // visibleで表示
    //p2.style.visibility ="visible";
  //}
}
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
