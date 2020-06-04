<?php /* Smarty version Smarty-3.1.18, created on 2015-04-15 09:56:59
         compiled from ".\template\address_setting_smint08a.html" */ ?>
<?php /*%%SmartyHeaderCode:18062552db75bd419c1-19021291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '705a99417678cd2f0df1540fa57c893b30e08e35' => 
    array (
      0 => '.\\template\\address_setting_smint08a.html',
      1 => 1422857380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18062552db75bd419c1-19021291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
    'error' => 0,
    'items' => 0,
    'ad_cd' => 0,
    'ary_ad_ids' => 0,
    'ary_ad_names' => 0,
    'sf1' => 0,
    'id' => 0,
    'ksy_names' => 0,
    'ksy_ids' => 0,
    'ksy_cd' => 0,
    'ksy_kgo_nm' => 0,
    'ksy_kgo_ken' => 0,
    'ksy_kgo_adr1' => 0,
    'ksy_kgo_adr2' => 0,
    'ksy_kgo_adr3' => 0,
    'ksy_kgo_tnto_bsy' => 0,
    'ksy_kgo_tnto' => 0,
    'ksy_kgo_tel' => 0,
    'ksy_kgo_fax' => 0,
    'insertflag' => 0,
    'add_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_552db75c1916e8_30041762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552db75c1916e8_30041762')) {function content_552db75c1916e8_30041762($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\php\\pear\\Smarty\\libs\\plugins\\function.html_options.php';
?><!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!---<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">--->
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title>Smint sample</title>
<link href="template/smint/css/demo.css" rel="stylesheet" type="text/css">
<link type="text/css" href="template/css/select2.css" rel="stylesheet"/>
<link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />
<link rel="stylesheet" type="text/css" href="template/table_price/css/styles.css" media="all" />
<link rel="stylesheet" type="text/css" href="template/table_price/css/styles2.css" media="all" />
<link rel="stylesheet" type="text/css" href="template/table_price/css/styles3.css" media="all" />
<link rel="stylesheet" type="text/css" href="template/table_price/css/demo.css" media="all" />
<link href="template/datepicker/css/glDatePicker.default.css" rel="stylesheet" type="text/css">
<link href="template/datepicker/css/glDatePicker.darkneon.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="template/check_box01/style.css" type="text/css" media="screen" charset="utf-8" />
<link href="template/legend/css/fontello.css" type="text/css" rel="stylesheet">
<!-- pricing_table ----->
<link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style.css">
<link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style2.css">
<!-- git hub  button ----->
<link rel="stylesheet" href="template/git_hub_btn/css/gh-buttons01.css">
<!-- git hub button /prettyify -->
<link rel="stylesheet" href="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css">

<!---- select2 ---->
<!---
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>--->
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="template/js/select2.js"></script>
<script>   //  $("#states").select2();
        $(document).ready(function() {
       
			 $(".states").select2();  
			 $("#makerPulldown").select2();   
        });
</script>
<!--- maker pulldown for IE --->
<script type="text/javascript">
$(function() {
$(document).change(function(e) {
//発生源がselect要素だったら処理を実行
if(e.target.tagName == "SELECT") { 
        //alert('ccccccc');
        // select 値の初期化
        $("p[id ^= 'note']").addClass('invisible');
		// 選択されたオプションのkey番号を取得
		var num = $('#makerPulldown').val();
		//var txt = $('#makerPulldown').text()
		
        // 選択値以外に class="invisible" を追加
        //$("p[id != 'note+num']").addClass('invisible');
		//if(document.getElementById('ksy') && document.getElementById('note+num')){
        //  $("p[id != 'note+num']").addClass('invisible');
        // }
		// 取得したkey番号の class="invisible" を削除
        $("p#note"+num).removeClass('invisible');
}
});
});
</script>

<!----select2 end ------>

<!----smint --->
<!----<script	type="text/javascript" src="template/smint/js/jquery.min.js"></script>--->
<script	type="text/javascript" src="template/smint/js/jquery.smint.js"></script>
<script type="text/javascript">
$(document).ready( function() {
    $('.subMenu').smint({
    	'scrollSpeed' : 1000
    });
});
</script>
<!----smint end ---->
<!--- maker pulldown for chrome firefox --->

<script>
$(function(){
    $('#makerPulldown').change(function(){
        //document.open
		//alert('aaaaa');
		// select 値の初期化
        $("p[id ^= 'note']").addClass('invisible');
		// 選択されたオプションのkey番号を取得
		var num = $('#makerPulldown').val();
		//var txt = $('#makerPulldown').text()
		
        // 選択値以外に class="invisible" を追加
        //$("p[id != 'note+num']").addClass('invisible');
		//if(document.getElementById('ksy') && document.getElementById('note+num')){
        //  $("p[id != 'note+num']").addClass('invisible');
        // }
		// 取得したkey番号の class="invisible" を削除
        $("p#note"+num).removeClass('invisible');
        //
		//document.getElementById("kekka").innerHTML = num;
		//alert(ksy.innerHTML);
		
		//$('#makerPulldown').val()=0;
		//document.close
		
    });
});
</script>
<script>
$(".button").click(function () {
  $("#sForm").toggleClass("open");   
});

$(".controlTd").click(function () {
  $(this).children(".settingsIcons").toggleClass("display"); 
  $(this).children(".settingsIcon").toggleClass("openIcon"); 
});
</script>

<!---  Iphone style checkbox radio box  
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>---->
<script src="template/check_box01/jquery/iphone-style-checkboxes.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
    $(window).load(function() {
      $('.on_off :checkbox').iphoneStyle();
      $('.disabled :checkbox').iphoneStyle();
      $('.css_sized_container :checkbox').iphoneStyle({ resizeContainer: false, resizeHandle: false });
      $('.long_tiny :checkbox').iphoneStyle({ checkedLabel: 'Very Long Text', uncheckedLabel: 'Tiny' });
      
      var onchange_checkbox = ($('.onchange :checkbox')).iphoneStyle({
        onChange: function(elem, value) { 
          $('span#status').html(value.toString());
        }
      });
      
      setInterval(function() {
        onchange_checkbox.prop('checked', !onchange_checkbox.is(':checked')).iphoneStyle("refresh");
        return
      }, 2500);
    });
  </script>
<!-- git hub  button ----->
<script src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"></script>

<!---select2 ----->
<style type="text/css">
.invisible {
	display: none;
}
</style>
<!----iphone sw ---->
<style type="text/css">
body {
	padding: 10px;
}
th {
	text-align: right;
	padding: 4px;
	padding-right: 15px;
	vertical-align: top;
}
.css_sized_container .iPhoneCheckContainer {
	width: 250px;
}
</style>
</head>
<body>
<div style="color:red"> <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['field_name']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
  <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br>
  <?php } ?> </div>
<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
 class="def" method='post'>

  <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

  <?php echo $_smarty_tpl->tpl_vars['form']->value['action']['html'];?>

  <div class="wrap ">
  <div class="section sTop">
    <div class="inner">
      <h1 class="title">SMINT Demo Page</h1>
      <h2 class="subtitle">Feel free to use this as your starting template</h2>
    </div>
  </div>
  <div class="subMenu" >
    <div class="inner"> <a href="#sTop" class="subNavBtn">Home</a> <a href="#s1" class="subNavBtn">Section 1</a> <a href="#s2" class="subNavBtn">Section 2</a> <a href="#s3" class="subNavBtn">Section 3</a> <a href="#s4" class="subNavBtn">Section 4</a> <a href="#s5" class="subNavBtn">Section 5</a><button class="button01 icon tag" type="button" onclick="location.href='index.php'">Return</button> </div>
  </div>
  <div class="section s1">
 
          
          
    <div class="inner ">
      <h2>Section 1 <?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
<a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
-<?php echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['html'];?>
</h2>
      <div style="font-size:10em; text-align: center;"><i class="icon-desktop-circled"></i></div>
      <!--<a><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</a>--->
      <div class="container"> 
        
        <!-- start header here --->
        <header>
          <div id="fdw-pricing-table">
            <div class="plan plan1">
              <div class="header">Section1-1</div>
              <ul style="text-align:left">
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
-<?php echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['html'];?>
</li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['html'];?>
</li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['html'];?>
</li>
                <!---<li><a class="signup">AD:</a>
                <select  name="ad_cd" class="states"  style="width:175px;">
                   <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['items']->value,'output'=>$_smarty_tpl->tpl_vars['items']->value,'selected'=>$_smarty_tpl->tpl_vars['ad_cd']->value),$_smarty_tpl);?>

                </select> </li>--->
                <li><a class="signup">AD:</a>
                  <select  name="ad_cd" class="states"  style="width:175px;">
                    
                    
                <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ary_ad_ids']->value,'output'=>$_smarty_tpl->tpl_vars['ary_ad_names']->value,'selected'=>$_smarty_tpl->tpl_vars['ad_cd']->value),$_smarty_tpl);?>
 
              
                  
                  </select>
                </li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['html'];?>
</li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['snk_kei_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['snk_kei_kbn_c']['html'];?>
</li>
                <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['dantai_cd_knj_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['dantai_cd_knj_c']['html'];?>
</li>
                <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['insatu_kgo_cd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['insatu_kgo_cd_c']['html'];?>
</li>
                <!---<li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['snk_kei_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['snk_kei_kbn_c']['html'];?>
</li>---->
              </ul>
            </div>
            <!---end plan1 --->
            <div class="plan plan1">
              <div class="header">Section1-2</div>
              <ul style="text-align:left">
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_size_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_size_kbn_c']['html'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_items_c']['html'];?>
部</li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['web_pmh_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['web_pmh_kbn_c']['html'];?>
</li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['han_size_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['han_size_kbn_c']['html'];?>
</li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['pos_type_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['pos_type_kbn_c']['html'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pos_items_c']['html'];?>
部</li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_type_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_type_c']['html'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['etc_items_c']['html'];?>
部</li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['bes_items_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['bes_items_c']['html'];?>
部</li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_cycle_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_cycle_kbn_c']['html'];?>
</li>
              </ul>
            </div>
            <!--- end plan1 --->
            <div class="plan plan1">
              <div class="header">Section1-3</div>
              <ul style="text-align:left">
                <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['html'];?>
</li>
                <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['html'];?>
</li>
                <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['html'];?>
</li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['tdantai_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['tdantai_c']['html'];?>
</li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['html'];?>
</li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['html'];?>
</li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['html'];?>
%</li>
              </ul>
            </div>
              <a id="simple-menu" href="#sidr">いでよメニュー！</a>
            <!--- end plan1 ---> 
          </div>
         
          <!--- end fdw-pricing-table ---> 
        </header>
      </div>
      <!---end container ---> 
    </div>
    <!-- end inner ----> 
  </div>
  <!--- end section--->
  
  <div class="section s2">
    <div class="inner">
      <div class="container">
        <h2>Section 2 <?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
Kaiko:<?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['html'];?>
</h2>
        <div style="font-size:10em; text-align: center;"><i class="icon-cog-circled"></i></div>
        <div id="fdw-pricing-table">
          <div class="plan plan2">
            <div class="header">Section2-1</div>
            <ul style="text-align:left">
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['sek_ng_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['sek_ng_kbn_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_sek_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_sek_kbn_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['data_select_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['data_select_kbn_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_policy_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_policy_kbn_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['kjn_inf_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['kjn_inf_kbn_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_kbn_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['sho_sof_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['sho_sof_kbn_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_ren_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_ren_kbn_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_kbn_c']['html'];?>
</li>
            </ul>
          </div>
          
          <!-- end plan3 --->
          
          <div class="plan plan2">
            <div class="header">Section2-2</div>
            <table>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="kyufu_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="cansel_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_chk_c']['html'];?>
 </></td>
              </tr>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['dan_adr_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="dan_adr_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['dan_adr_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['zai_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="zai_chk_c" name="zai_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['zai_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['saij_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="saij_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['saij_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['e_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="e_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['e_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['sku_inf_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="sku_inf_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['sku_inf_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['one_p_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="one_p_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['one_p_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['juryo_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="juryo_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['juryo_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['juko_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="juko_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['juko_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['eig_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="eig_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['eig_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['lbl_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="lbl_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['lbl_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['sku_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="sku_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['sku_chk_c']['html'];?>
 </> </td>
              </tr>
            </table>
          </div>
          <!-- end plan --->
          <div class="plan plan2">
            <div class="header">Section2-3</div>
            <table>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['nani_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="nani_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['nani_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['kmk_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="kmk_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['kmk_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th><label for="on_off"><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_chk_c']['label'];?>
</label></th>
                <td><input type="checkbox" id="on_off" name="etc_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['etc_chk_c']['html'];?>
 </> </td>
              </tr>
            </table>
            <ul>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['html'];?>
</li>
            </ul>
          </div>
          <!-- end plan ---> 
        </div>
        <!--- end fdw-pricing-table ---> 
        
      </div>
      <!--- end container ---> 
    </div>
    <!-- end inner ---> 
  </div>
  <!--- end section s2 --->
  <div class="section s3">
    <div class="inner">
      <div class="container">
        <h2>Section 3 <?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
Kaiko:<?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['html'];?>
</h2>
        <div style="font-size:10em; text-align: center;"><i class="icon-cog-circled"></i></div>
        <p> <?php echo $_smarty_tpl->tpl_vars['form']->value['memos_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['memos_c']['html'];?>
</p>
        <div id="fdw-pricing-table">
          <div class="plan plan3">
            <div class="header">Section3-1</div>
            <ul style="text-align:left">
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['html'];?>
</li>
            </ul>
          </div>
          <div class="plan plan3">
            <div class="header">Section3-2</div>
            <ul style="text-align:left">
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['uke_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['uke_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['ryo_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['ryo_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['hac_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['hac_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_sof_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_sof_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_return_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_return_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_sof_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_sof_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['html'];?>
</li>
            </ul>
          </div>
          <!-- end plan3 --->
          
          <div class="plan plan3">
            <div class="header">Section3-3</div>
            <ul style="text-align:left">
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['ko3_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['ko3_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['moji_kosei_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['moji_kosei_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['sekryo_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['sekryo_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['hac_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['hac_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_sof_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_sof_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_return_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_return_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_ymd_c']['html'];?>
</li>
              <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_sof_ymd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_sof_ymd_c']['html'];?>
</li>
            </ul>
          </div>
          <!-- end plan3 ---> 
        </div>
        <!--- end fdw-pricing-table ---> 
        
      </div>
      <!--- end container ---> 
    </div>
    <!-- end inner ---> 
  </div>
  <!-- end section 3 --->
  <div class="section s4">
    <div class="inner">
      <div class="container">
        <h2>Section 4</h2>
        <table>
          <tr class="on_off">
            <th><label for="on_off"> Pamphlet 発注票:</label></th>
            <td><input type="checkbox" id="on_off" name="order_sht01"  value="1" /> </td>
            <!--<td><a href=<?php echo $_smarty_tpl->tpl_vars['sf1']->value;?>
><input type="checkbox" id="on_off" name="order_sht01" checked /></a> </td>-->
          </tr>
          <tr class="on_off">
            <th><label for="on_off"> Pamphlet 情報:</label></th>
            <td><input type="checkbox" id="on_off" name="order_inf01"  /> </td>
          </tr>
        </table>
        <div class='order_sheetxx' id='order_sheetxx'>
       
     
          <?php if ($_smarty_tpl->tpl_vars['id']->value!=null) {?>
          <button class="button01 icon tag" type="button" 
           onclick="location.href='index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'"   style="width:120px">Return</button>
          <?php } else { ?>
          <button class="button01 icon tag" type="button" onclick="location.href='index.php'">Return</button>
          <?php }?> </div>
      </div>
       <input type="submit" value="--- Print2 ---" id ="order_sheet01" name="order_sheet01" class="button01" style="width:120px">
        
        <td><input type="submit" value="   old Print   " id ="ordr_sheet01" name="order_sheet01"></td>
       
      <!--
      <button class="button01 icon tag" type="button" onclick="location.href='index.php'">Return</button>
      <!-- end container  ---> 
      
    </div>
    <!-- end inner ---> 
    
  </div>
  <!-- end section 4 --->
  <div class="section s5">
    <div class="inner">
      <div class="container">
        <h1>Section 5</h1>
        <div class="whole">
          <div class="type standard">
            <p>製作総額</p>
          </div>
          <div class="plan00">
            <div class="header"> <span>￥419,414</span>
              <p class="month">per month</p>
            </div>
            <div class="header"> <span>　</span>
              <p class="month">　</p>
            </div>
            <div class="content">
              <ul class="ul0">
                <li class="li0">　</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="whole">
          <div class="type02">
            <p>　</p>
          </div>
          <div class="plan02">
            <div class="header02"><span>他団体請</span>
              <p class="month02">per month</p>
            </div>
            <div class="header02"><span>産能大掲載</span>
              <p class="month02">per month</p>
            </div>
            <div class="content2">
              <ul class="ul0">
                <li class="li0">　</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="whole">
          <div class="type02">
            <p>　</p>
          </div>
          <div class="plan02">
            <div class="header03"><span>￥5,552,711</span>
              <p class="month02">　</p>
            </div>
            <div class="header03"><span>￥263,887</span>
              <p class="month02">　</p>
            </div>
            <div class="content02">
              <ul class="ul0">
                <li class="li0">　</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="whole">
          <div class="type03">
            <p>　</p>
          </div>
          <div class="plan03"> 
            <!--
    <div class="header2"> <span>$</span>29
      <p class="month2">per month</p>
    </div>--->
            <div class="content03">
              <ul class="ul2">
                <li class="li0">共通ページ費</li>
                <li class="li0">紹介ページ費</li>
                <li class="li0">調整費用</li>
                <li class="li0">　</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="whole">
          <div class="type03">
            <p>　</p>
          </div>
          <div class="plan03"> 
            <!--
    <div class="header2"> <span>$</span>29
      <p class="month2">per month</p>
    </div>--->
            <div class="content03">
              <ul class="ul3">
                <li class="li0">￥54,172</li>
                <li class="li0"> ￥209,700</li>
                <li class="li0">￥15</li>
                <li class="li0">　</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="whole">
          <div class="type03a">
            <p>　</p>
          </div>
          <div class="plan03"> 
            <!--
    <div class="header2"> <span>$</span>29
      <p class="month2">per month</p>
    </div>--->
            <div class="content03">
              <ul class="ul2">
                <li class="li0">管理費</li>
                <li class="li0">産能大負担費</li>
                <li class="li0">　</li>
                <li class="li0">　</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="whole">
          <div class="type03a">
            <p>　</p>
          </div>
          <div class="plan03"> 
            <!--
    <div class="header2"> <span>$</span>29
      <p class="month2">per month</p>
    </div>--->
            <div class="content03">
              <ul class="ul3">
                <li class="li0">￥32,970</li>
                <li class="li0">￥230,917</li>
                <li class="li0">　　</li>
                <li class="li0">　　</li>
              </ul>
            </div>
          </div>
        </div>
        <table>
          <tr>
            <td>ksy:</td>
            <td><select name="ksy_cd" size="<?php echo count($_smarty_tpl->tpl_vars['ksy_names']->value);?>
" id="makerPulldown" style="width:400px;">
                
                
            
            
            
              
                  
                             
               <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ksy_ids']->value,'output'=>$_smarty_tpl->tpl_vars['ksy_names']->value,'selected'=>$_smarty_tpl->tpl_vars['ksy_cd']->value),$_smarty_tpl);?>

                
                
              
                
            
          
          
          
              
              </select></td>
          </tr>
        </table>
        <table>
          <tr>
            <div id="ksy">
              <td width="200" > <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['name'] = 'tuk_kgo_nm_j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ksy_kgo_nm']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']['total']);
?>
                <p id="note<?php echo $_smarty_tpl->tpl_vars['ksy_ids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tuk_kgo_nm_j']['index']];?>
" class="invisible"> <?php echo $_smarty_tpl->tpl_vars['ksy_kgo_nm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tuk_kgo_nm_j']['index']];?>
</p>
                
                <!--
          <input type="text" name="note<?php echo $_smarty_tpl->tpl_vars['ksy_ids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tuk_kgo_nm_j']['index']];?>
" class="invisible" 
           id="note<?php echo $_smarty_tpl->tpl_vars['ksy_ids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tuk_kgo_nm_j']['index']];?>
" value = "<?php echo $_smarty_tpl->tpl_vars['ksy_kgo_nm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tuk_kgo_nm_j']['index']];?>
" /> ---> 
                
                <?php endfor; endif; ?> </td>
              <td width="50"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['name'] = 'kgo_ken';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ksy_kgo_ken']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']['total']);
?>
                <p id="note<?php echo $_smarty_tpl->tpl_vars['ksy_ids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_ken']['index']];?>
" class="invisible"> <?php echo $_smarty_tpl->tpl_vars['ksy_kgo_ken']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_ken']['index']];?>
</p>
                <?php endfor; endif; ?> </td>
              <td width="150"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['name'] = 'kgo_adr1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ksy_kgo_adr1']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']['total']);
?>
                <p id="note<?php echo $_smarty_tpl->tpl_vars['ksy_ids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_adr1']['index']];?>
" class="invisible"> <?php echo $_smarty_tpl->tpl_vars['ksy_kgo_adr1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_adr1']['index']];?>
</p>
                <?php endfor; endif; ?> </td>
              <td width="150"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['name'] = 'kgo_adr2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ksy_kgo_adr2']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']['total']);
?>
                <p id="note<?php echo $_smarty_tpl->tpl_vars['ksy_ids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_adr2']['index']];?>
" class="invisible"> <?php echo $_smarty_tpl->tpl_vars['ksy_kgo_adr2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_adr2']['index']];?>
</p>
                <?php endfor; endif; ?> </td>
              <td width="150"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['name'] = 'kgo_adr3';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ksy_kgo_adr3']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']['total']);
?>
                <p id="note<?php echo $_smarty_tpl->tpl_vars['ksy_ids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_adr3']['index']];?>
" class="invisible"> <?php echo $_smarty_tpl->tpl_vars['ksy_kgo_adr3']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_adr3']['index']];?>
</p>
                <?php endfor; endif; ?> </td>
              <td width="150"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['name'] = 'kgo_tnto_bsy_nm_j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ksy_kgo_tnto_bsy']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']['total']);
?>
                <p id="note<?php echo $_smarty_tpl->tpl_vars['ksy_ids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_tnto_bsy_nm_j']['index']];?>
" class="invisible"> <?php echo $_smarty_tpl->tpl_vars['ksy_kgo_tnto_bsy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_tnto_bsy_nm_j']['index']];?>
</p>
                <?php endfor; endif; ?> </td>
              <td width="50"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['name'] = 'kgo_tnto_nm_j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ksy_kgo_tnto']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']['total']);
?>
                <p id="note<?php echo $_smarty_tpl->tpl_vars['ksy_ids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_tnto_nm_j']['index']];?>
" class="invisible"> <?php echo $_smarty_tpl->tpl_vars['ksy_kgo_tnto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_tnto_nm_j']['index']];?>
</p>
                <?php endfor; endif; ?> </td>
              <td width=50""><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['name'] = 'kgo_tel';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ksy_kgo_tel']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']['total']);
?>
                <p id="note<?php echo $_smarty_tpl->tpl_vars['ksy_ids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_tel']['index']];?>
" class="invisible"> <?php echo $_smarty_tpl->tpl_vars['ksy_kgo_tel']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_tel']['index']];?>
</p>
                <?php endfor; endif; ?> </td>
              <td width="50"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['name'] = 'kgo_fax';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ksy_kgo_fax']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']['total']);
?>
                <p id="note<?php echo $_smarty_tpl->tpl_vars['ksy_ids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_fax']['index']];?>
" class="invisible"> <?php echo $_smarty_tpl->tpl_vars['ksy_kgo_fax']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_fax']['index']];?>
</p>
                <?php endfor; endif; ?> </td>
            </div>
            <!-- end end ksy ---> 
          </tr>
        </table>
        <a><?php if ($_smarty_tpl->tpl_vars['insertflag']->value!=true) {?><?php echo $_smarty_tpl->tpl_vars['form']->value['buttons']['send']['html'];?>
<?php }?></a><a><?php echo $_smarty_tpl->tpl_vars['form']->value['buttons']['reset']['html'];?>
</a>
        <div name="addlist_f1" method="post" action="index.php"> 
          <!-- <form name="addlist_f1" action="index.php">--->
          <input type="submit" value="アドレス複写作成 " name="new">
        </div>
        <td><input type="submit" value="発注スケジュール" name="gant_pmh01"></td>
        <p>------------------------------------</p>
        <div>
          <input type="button" value="  PRINT  " onClick="ChDsp2('order_sheetxx','detail_xx');">
        </div>
        <p>------------------------------------</p>
        <!--- <form name="addlist_f2" method="post" action="index.php?module=order_sheet00&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
           <td><input type="submit" value="発注票Print" name="order_sheet00"></td>
        </form>----> 
        <!--
        <form name="adddetail_f4" method="post" action="index.php?module=gant_pmh01" >
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
" name="p_id" >
				<input type="submit" value="発注スケジュール" name="gant_pmh01" >
		</form> --> 
        
        <?php if ($_smarty_tpl->tpl_vars['id']->value!=null) {?>
        <button class="button01 icon tag" type="button" onclick="location.href='index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'"   style="width:120px">Return</button>
        <?php } else { ?>
        <button class="button01 icon tag" type="button" onclick="location.href='index.php'">Return</button>
        <?php }?> </div>
      <!-- end container ---> 
      
    </div>
    <!-- end inner  ---> 
  </div>
  <!-- end section 5 ---> 
  <!--</div>---> 
   <div id="sidr"> 
            <!-- Your content -->
            <ul>
              <li><a href="#">List 1</a></li>
              <li class="active"><a href="#">List 2</a></li>
              <li><a href="#">List 3</a></li>
            </ul>
          </div>
          
  <?php if ($_smarty_tpl->tpl_vars['form']->value['requirednote']&&!$_smarty_tpl->tpl_vars['form']->value['frozen']) {?>
  <?php echo $_smarty_tpl->tpl_vars['form']->value['requirednote'];?>

  <?php }?>
</form>
<script src="template/resposive_price_tbl/js/prefixfree.min.js" type="text/javascript"></script> 
<!------- datepicker ----------------> 
<script src="template/datepicker/js/glDatePicker.min.js"></script> 
<script type="text/javascript">
 //       $(window).load(function()
   //     {
		  
 $(".mydate").glDatePicker(
 {
   onClick: function(target, cell, date, data) {
            target.val(date.getFullYear() + '-' +
                (date.getMonth() + 1)+ '-' +
                date.getDate());

            if(data != null) {
                alert(data.message + '\n' + date);
            }  // end if
        }      // end function      
    
});  // end gldatepicker 
  //      });
    </script>
</body>
</html>

<!-- <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['tdantai_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['tdantai_c']['html'];?>
</li>
              <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['html'];?>
</li>
              <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['html'];?>
</li>
              <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['html'];?>
</li>
               <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_items_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_items_c']['html'];?>
</li>
              <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['pos_items_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['pos_items_c']['html'];?>
</li>
              <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['bes_items_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['bes_items_c']['html'];?>
</li>
              <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_type_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_type_c']['html'];?>
</li>
              <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_items_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_items_c']['html'];?>
</li
              <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['html'];?>
</li>
               <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['html'];?>
</li>
                <li><a class="signup"><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['html'];?>
</li>
                 <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['html'];?>
</li>
             <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['html'];?>
</li>
             <li><a class="signup"> <?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['label'];?>
</a><?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['html'];?>
</li>
              
              
            </ul>
            <!--<a class="signup" href="http://www.freshdesignweb.com">Sign up</a> ----><?php }} ?>
