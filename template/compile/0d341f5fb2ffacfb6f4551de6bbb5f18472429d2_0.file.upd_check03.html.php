<?php
/* Smarty version 3.1.32, created on 2020-03-02 14:45:43
  from 'C:\xampp\htdocs\composer\test\kum_chk\template\upd_check03.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e5c9d8710d482_04335771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d341f5fb2ffacfb6f4551de6bbb5f18472429d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\composer\\test\\kum_chk\\template\\upd_check03.html',
      1 => 1582880816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5c9d8710d482_04335771 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="template/AdminLTE-master/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="template/AdminLTE-master/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- date pickmeup  --->
  <link rel="stylesheet" href="template/jquery-ui-1.11.4.custom/jquery-ui.css" />
  <link rel="stylesheet" href="template/jquery-ui-1.11.4.custom/jquery-ui.theme.css" />
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="template/AdminLTE-master/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="template/AdminLTE-master/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="template/AdminLTE-master/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="template/AdminLTE-master/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="template/AdminLTE-master/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="template/AdminLTE-master/dist/css/skins/_all-skins.min.css">
   <!-- animsition -->
   <link rel="stylesheet" href="template/animsition-master/src/css/animsition.css">
   <style>
   .example-modal .modal {
    position: relative;
    top: auto;
    bottom: auto;
    right: auto;
    left: auto;
    display: block;
    z-index: 1;
  }

  .example-modal .modal {
    background: transparent !important;
  }
</style>
<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="template/animsition-master/src/js/animsition.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  $(document).ready(function() {
    $(".anim").animsition({
    inClass               :   'fade-in-left', //ページ表示時のアニメーション
    outClass              :   'fade-out', //遷移時のアニメーション
    inDuration            :    0700,　//inするときの時間
    outDuration           :    0700, //out時の時間
    linkElement           :   '.animsition-link',  //対象のリンク
    touchSupport          :    true, //タップOK
    loading               :    true,　//ローディングOK
    loadingParentElement  :   'body', //アニメーション対象
    loadingClass          :   'animsition-loading', //ローディングのclass
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
<title>サンプル</title>
</head>
<body class="anim">
  <!--<div><?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
</div>-->

  <form  method="post" >
   <section class="content">
    <div class="example-modal">
      <div class="modal modal-success ">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
              </div>
              <div class="modal-body">
                <p><?php echo $_smarty_tpl->tpl_vars['msg01']->value;?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['msg02']->value;?>
</p>
                  <p><a href=<?php echo $_smarty_tpl->tpl_vars['sf1']->value;?>
 download style='color:#ccff66;text-decoration:underline'>社員データ（Excel）</a></p>
              </div>
              <div class="modal-footer">
                <button type="button" style='color:#eeeeee;width:100px;' class="btn btn-default"><a href="index.php?module=juk_knr_upl01&id=<?php echo $_smarty_tpl->tpl_vars['access_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['client_nm']->value;?>
,syn">Return</a></button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
      <!-- /.example-modal -->
      <div><?php echo $_smarty_tpl->tpl_vars['xxx']->value;?>
</div>

      <!--<div><?php echo $_smarty_tpl->tpl_vars['yyy']->value;?>
</div>-->
<!--
 <button style='width:140px;margin-top:20px;height:40px;'>
    <a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['p_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['p_no']->value;?>
"
    class="animsition-link"> <i class="fa fa-home"></i>Return
    </a>
  </button>--->
</section>
</form>
</body>
</html>

<?php }
}
