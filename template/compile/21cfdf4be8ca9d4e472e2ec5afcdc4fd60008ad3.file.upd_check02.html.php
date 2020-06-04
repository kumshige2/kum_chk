<?php /* Smarty version Smarty-3.1.18, created on 2018-07-31 11:19:00
         compiled from ".\template\upd_check02.html" */ ?>
<?php /*%%SmartyHeaderCode:150875b31a564f33a08-81977375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21cfdf4be8ca9d4e472e2ec5afcdc4fd60008ad3' => 
    array (
      0 => '.\\template\\upd_check02.html',
      1 => 1533003528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150875b31a564f33a08-81977375',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b31a56505ec23_18721991',
  'variables' => 
  array (
    'add_id' => 0,
    'title' => 0,
    'msg01' => 0,
    'sf1' => 0,
    'p_id' => 0,
    'p_no' => 0,
    'xxx' => 0,
    'yyy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b31a56505ec23_18721991')) {function content_5b31a56505ec23_18721991($_smarty_tpl) {?><html>
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
   <!-- animsition --->
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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="template/animsition-master/src/js/animsition.js"></script>
  <script type="text/javascript"> 
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
  </script>
  <script type="text/javascript">
window.location.hash="no-back";
window.location.hash="no-back-button";
window.onhashchange=function(){
    window.location.hash="no-back";
}
</script>
<!---------------------------------------
//Enter key を無効にする
//----------------------------------->
<script>
    $(function(){
        $("input").on("keydown", function(e) {
            if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                return false;
            } else {
                return true;
            }
        });
    });
</script>
<!---------------------------------------
//Download
//----------------------------------->
 <script type='text/javascript'>
            function handleDownload() {
              alert('ccc');
              let anchor = document.createElement("download");
              anchor.href = "Data_guide_temp02.html"  //url;
              anchor.click();  
                
                
            }
</script>             
<title>富士電機様　DownLoad</title>
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
</h6></h4>
              </div>
              <div class="modal-body">
                <!--<p><?php echo $_smarty_tpl->tpl_vars['msg01']->value;?>
</p>--->
                <button type="submit" style='width:140px;' name = "dw01" class="btn btn-block btn-success">データ仕様書</button>
                <!--- available for chrome,firefox not available for ie
                <p><a href=<?php echo $_smarty_tpl->tpl_vars['sf1']->value;?>
 download style='color:#ccff66;text-decoration:underline'>データ仕様書 </a></p>-->
              </div>             
              <div class="modal-footer">
                <button type="submit" style='width:110px;' name = "ret01" class="btn btn-outline pull-left"> <i class="fa fa-home"></i>  Return </button>
                <!--<button type="button" class="btn btn-outline"><a href="index.php?module=home01&id=<?php echo $_smarty_tpl->tpl_vars['p_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['p_no']->value;?>
"> Save changes</a></button>-->
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

<?php }} ?>
