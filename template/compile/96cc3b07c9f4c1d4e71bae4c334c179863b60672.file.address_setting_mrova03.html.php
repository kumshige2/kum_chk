<?php /* Smarty version Smarty-3.1.18, created on 2015-05-11 10:01:59
         compiled from ".\template\address_setting_mrova03.html" */ ?>
<?php /*%%SmartyHeaderCode:244435535d6d35c6021-31434058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96cc3b07c9f4c1d4e71bae4c334c179863b60672' => 
    array (
      0 => '.\\template\\address_setting_mrova03.html',
      1 => 1431306072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244435535d6d35c6021-31434058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5535d6d37fa117_79105142',
  'variables' => 
  array (
    'title' => 0,
    'h1' => 0,
    'form' => 0,
    'error' => 0,
    'ary_ad_ids' => 0,
    'ary_ad_names' => 0,
    'ad_cd' => 0,
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
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5535d6d37fa117_79105142')) {function content_5535d6d37fa117_79105142($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\php\\pear\\Smarty\\libs\\plugins\\function.html_options.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Import CSS mrova -->
<link rel="stylesheet" href="template/mrova/css/main.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!-----select 2 ---->
<link type="text/css" href="template/css/select2.css" rel="stylesheet"/>
<link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />
<!--- droopkick --->
<link rel="stylesheet" href="template/css/dropkick.css"    type="text/css">
<link rel="stylesheet" href="template/css/black_theme.css" type="text/css">

<!--<link rel="stylesheet" href="template/03c/common/css/site_info01.css">
<link rel="stylesheet" type="text/css" href="template/table_price/css/styles4_2.css" media="all" />
<!--<link rel="stylesheet" type="text/css" href="template/table_price/css/demo.css" media="all" />--->
<!--- datepicker ---->
<link href="template/datepicker/css/glDatePicker.default.css" rel="stylesheet" type="text/css">
<link href="template/datepicker/css/glDatePicker.darkneon.css" rel="stylesheet" type="text/css">

<!--- table grid ---->
<link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style00.css">
<link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style01.css">
<!-- git hub  button ----->
<link rel="stylesheet" href="template/git_hub_btn/css/gh-buttons01.css">
<!-- git hub button /prettyify -->
<link rel="stylesheet" href="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css">
<!--- checkbox ---->
<link rel="stylesheet" href="template/check_box01/style.css" type="text/css" media="screen" charset="utf-8" />
<!-- Pushy CSS -->
<!--<link rel="stylesheet" href="template/pushy-master/css/normalize.css">--->
<link rel="stylesheet" href="template/pushy-master/css/demo.css">
<link rel="stylesheet" href="template/pushy-master/css/pushy.css">
<!--
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>--->

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="template/mrova/js/jquery.min.js"></script>
<script src="template/mrova/js/jquery.easing.min.js"></script>
<script src="template/mrova/js/jquery.scrollto.min.js"></script>
<script src="template/mrova/js/slabtext.min.js"></script>
<script src="template/mrova/js/jquery.nav.js"></script>
<script src="template/mrova/js/main.js"></script>

<!---- select2 ---->
<!-----
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>--->

<script type="text/javascript" src="template/js/select2.js"></script>
<script>   //  $("#states").select2();
        $(document).ready(function() {
       
			 $(".states").select2();  
			 $("#makerPulldown").select2();
			 
			 $("div#ksy").addClass('invisible');   
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
<script>
$(function(){
    $('#makerPulldown').change(function(){
        //document.open
		//alert('aaaaa');
		// select 値の初期化
        $("p[id ^= 'note']").addClass('invisible');
		
		// 選択されたオプションのkey番号を取得
		var num = $('#makerPulldown').val();
		var txt = $('#makerPulldown').text()
		
        // 選択値以外に class="invisible" を追加
        //$("p[id != 'note+num']").addClass('invisible');
		//if(document.getElementById('ksy') && document.getElementById('note+num')){
        //  $("p[id != 'note+num']").addClass('invisible');
        // }
		// 取得したkey番号の class="invisible" を削除
        $("p#note"+num).removeClass('invisible');
		$("tr#tr11").removeClass('invisible');
		$("tr#tr12").removeClass('invisible');
		$("tr#tr13").removeClass('invisible');
        //
		//document.getElementById("kekka").innerHTML = num;
		//alert($("p#note"+num).val);
		//$("th#th01").addClass('invisible');
		//$("td#td01").addClass('invisible');
	    $("tr#tr01").addClass('invisible');
		$("tr#tr02").addClass('invisible');
		$("tr#tr03").addClass('invisible');
		
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

<!-- git hub  button ----->
<script src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"></script>
<script type="text/javascript">
<!--- selectbox ---->
   $(document).ready(function(){
      sel1 = $("#card_type_kbn_c-0");
      $('#card_type_kbn_c-0').change(function(){
	    var fruit = $("#card_type_kbn_c-0 option:selected").val();
		switch (fruit) {
          case "1":
            $('#card_hyojun_memo_c-0').val("とじ込み　ＸＸＸ枚");
            break;
          case "2":
            $('#card_hyojun_memo_c-0').val("はさみ込み　ＸＸＸ枚");
            break;
	      case "3":
            $('#card_hyojun_memo_c-0').val("はさみ込み　ＸＸＸ枚");
            break;
          case "4":
            $('#card_hyojun_memo_c-0').val("複写　ＸＸＸ枚");
            break;
	      case "5":
            $('#card_hyojun_memo_c-0').val("複写　ＸＸＸ枚");
            break;
          case "6":
            $('#card_hyojun_memo_c-0').val("別納　ＸＸＸ部");
            break;
		}
		
      });
   });
</script>
<!--- dropkick ----->
<script src="template/js/jquery.dropkick-1.0.0.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('.custom').dropkick({
	  theme: 'black'
	});
	$('.dropkick').dropkick({
	  theme: 'black'
	});
	$('.default').dropkick();
});
</script>

<!---  Iphone style checkbox radio box 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>--->
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

<style type="text/css">
.invisible {
	display: none;
}
</style>



</head>
<!-- To change color change the class "color-1" to "color-2, color-3 ... color-6" -->
<body class="home color-4">
<h2><?php echo $_smarty_tpl->tpl_vars['h1']->value;?>
</h2>
<div style="color:red; font-size:18px;"> <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['field_name']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
  <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br>
  <?php } ?> </div>
<div id="header">
  <div class="container">
    <div class="row"> <i id="nav-button" class="icon-circle-arrow-down"></i> 
      <!--- <h2 id="logo"><a href="index.html">mrova <span class="highlight">Solutions</span></a></h2>--->
      <div id="top-nav" class="">
        <ul id="fixed-nav">
          <li class="current"><a href="#home">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#services2">Services2</a></li>
          <li><a href="#aboutus1">About Us1</a></li>
          <li><a href="#aboutus2">About Us2</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </div>
      <a><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['html'];?>
</a><a><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</a> </div>
  </div>
</div>
<!-- End Header --> 

<div class="menu-btn"> &#9776; Menu</div>

<!-- Big Full screen Banner -->

<div class="hero bg-fixed bg-color" id="home">
  <div class="slogan">
    <div  class="vcenter container">
      <div class="row">
        <div class="span12">
          <h1>We Create Beautiful, Intuitive &amp; Powerful Web Applications</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Full screen banner  -->

<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
 class="def" method='post'>
  <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>
 
  
  <?php echo $_smarty_tpl->tpl_vars['form']->value['action']['html'];?>
 
  
  <!-- Services Section --> 
  <!-- class section-alt is to give a different color please edit css/style.css to change the color -->
  <div class="section section-alt" id="services">
    <div class="container">
      <div class="content">
        <div class="row" >
          <div class="title">
            <h2>Our Services</h2>
            <div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
            <!--<p>We develop and market mobile application, websites and ecommerce solutions.</p>--> 
            
          </div>
        </div>
        <div class="row">
          <div class="span4 i-block"> <i class="icon-mobile-phone"></i>
            <h3>Block-A</h3>
            
            <!---<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat, justo sed tincidunt iaculis, nisl enim rutrum dolor, in posuere purus risus vel quam</p>---->
            <table class="aaa">
              <tbody>
                <tr>
                  <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['uke_ymd_c']['label'];?>
</th>
                  <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['uke_ymd_c']['html'];?>
 </td>
                </tr>
                <tr>
                  <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['ryo_ymd_c']['label'];?>
</th>
                  <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['ryo_ymd_c']['html'];?>
 </td>
                </tr>
                <tr>
                  <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['hac_ymd_c']['label'];?>
</th>
                  <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['hac_ymd_c']['html'];?>
 </td>
                </tr>
                <tr>
                  <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_ymd_c']['label'];?>
</th>
                  <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_ymd_c']['html'];?>
 </td>
                </tr>
                <tr>
                  <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_sof_ymd_c']['label'];?>
</th>
                  <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_sof_ymd_c']['html'];?>
 </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="span4 i-block"> <i class="icon-star"></i>
            <h3>Block-B</h3>
            <!---<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat, justo sed tincidunt iaculis, nisl enim rutrum dolor, in posuere purus risus vel quam</p>--->
            <table class="aaa">
              <tbody>
                <tr>
                  <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_return_ymd_c']['label'];?>
</th>
                  <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_return_ymd_c']['html'];?>
 </td>
                </tr>
                <tr>
                  <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_ymd_c']['label'];?>
</th>
                  <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_ymd_c']['html'];?>
 </td>
                </tr>
                <tr>
                  <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_sof_ymd_c']['label'];?>
</th>
                  <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_sof_ymd_c']['html'];?>
 </td>
                </tr>
                  </tr>
                
                <tr>
                  <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['ko3_ymd_c']['label'];?>
</th>
                  <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['ko3_ymd_c']['html'];?>
 </td>
                </tr>
                  </tr>
                
                <tr>
                  <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['sekryo_ymd_c']['label'];?>
</th>
                  <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['sekryo_ymd_c']['html'];?>
 </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="span4 i-block"> <i class="icon-thumbs-up-alt"></i>
            <h3>Block-C</h3>
            <!---<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat, justo sed tincidunt iaculis, nisl enim rutrum dolor, in posuere purus risus vel quam</p>--->
            <table class="aaa">
              <tbody>
                <tr>
                  <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_ymd_c']['label'];?>
</th>
                  <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_ymd_c']['html'];?>
 </td>
                </tr>
                <tr>
                  <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['moji_kosei_ymd_c']['label'];?>
</th>
                  <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['moji_kosei_ymd_c']['html'];?>
 </td>
                </tr>
                <tr>
                  <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['fax_nenko_ymd_c']['label'];?>
</th>
                  <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['fax_nenko_ymd_c']['html'];?>
 </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="hr hr-invisible"></div>
        <div class="row"> 
          <!--　<table border ="1" style="background-color:#cccccc;color:#ccffff">--->
          <table class="table210">
            <caption>
            <b>スマートフォンで視聴する場合</b>
            </caption>
            <tr>
              <th></th>
              <th>Android</th>
              <th rowspan="5">製作総額</th>
              <td rowspan="5">10000</td>
              <th rowspan="2">他団体請求計</th>
              <td rowspan="2">1500</td>
              <td rowspan="2" style="background-color:#cccccc"></td>
              <td rowspan="2" style="background-color:#cccccc"></td>
              <td rowspan="2" style="background-color:#cccccc"></td>
              <td rowspan="2" style="background-color:#cccccc"></td>
            </tr>
            <tr>
              <th>OS</th>
              <td>Android2.2以上</td>
            </tr>
            <tr>
              <th>再生アプリケーション</th>
              <td>専用アプリ「クラストミル」<br />
                ※GooglePlay<br />
                ※専用アプリの利用に </td>
              <th rowspan="3">産能掲載費</th>
              <td rowspan="3">8500</td>
              <th>共通ページ</th>
              <td>3000
                </th>
              <th>管理費</th>
              <td>4000
                </th>
            </tr>
            <tr>
              <th>回線速度</th>
              <td>・4G(LTE)通信<br />
                （3Gの場合、映像や音<br />
                ・Wi-Fi環境 </td>
              <th>紹介ページ</th>
              <td>4000</td>
              <th rowspan="2">産能大負担費</th>
              <td rowspan="2">4500</td>
            </tr>
            <tr>
              <th></th>
              <td></td>
              <th>調整</th>
              <td>1500</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="hr hr-invisible"></div>
      <div class="row">
        <table border ="1" style="background-color:#cccccc;color:#00cc99">
          <caption>
          <b>Pamphlet Seikyu Table</b>
          </caption>
          <tr>
            <th rowspan="8">製作総額</th>
            <td rowspan="8">10000</td>
            <th rowspan="2">他団体請求計</th>
            <td rowspan="2">1500</td>
            <td rowspan="2" style="background-color:#cccccc"></td>
            <td rowspan="2" style="background-color:#cccccc"></td>
            <td rowspan="2" style="background-color:#cccccc"></td>
            <td rowspan="2" style="background-color:#cccccc"></td>
          </tr>
          <tr> </tr>
          <tr>
            <th rowspan="6">産能掲載費</th>
            <td rowspan="6">8500</td>
            <th rowspan="2">共通ページ</th>
            <td rowspan="2">3000
              </th>
            <th rowspan="3">管理費</th>
            <td rowspan="3">4000
              </th>
          </tr>
          <tr>
            <th rowspan="2">紹介ページ</th>
            <td rowspan="2">4000</td>
            <th rowspan="3">産能大負担費</th>
            <td rowspan="3">4500</td>
          </tr>
          <tr>
            <th rowspan="2">調整</th>
            <td rowspan="2">1500</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  </div>
  
  <!-- End Services Section --> 
  <!-- Services Section --> 
  <!-- class section-alt is to give a different color please edit css/style.css to change the color -->
  <div class="section section-alt" id="services2">
    <div class="container">
      <div class="content">
        <div class="row" >
          <div class="title">
            <h2>Our Services</h2>
            <div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
            <p>We develop and market mobile application, websites and ecommerce solutions.</p>
          </div>
        </div>
        <div class="row">
          <div class="span4 i-block"> <i class="icon-mobile-phone"></i>
            <h3>Block-A</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat, justo sed tincidunt iaculis, nisl enim rutrum dolor, in posuere purus risus vel quam</p>
          </div>
          <div class="span4 i-block"> <i class="icon-star"></i>
            <h3>Block-B</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat, justo sed tincidunt iaculis, nisl enim rutrum dolor, in posuere purus risus vel quam</p>
          </div>
          <div class="span4 i-block"> <i class="icon-thumbs-up-alt"></i>
            <h3>Block-C</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat, justo sed tincidunt iaculis, nisl enim rutrum dolor, in posuere purus risus vel quam</p>
          </div>
        </div>
        <div class="hr hr-invisible"></div>
        <div class="row">
          <div class="span4 i-block"> <i class="icon-briefcase"></i>
            <h3>Block-D</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat, justo sed tincidunt iaculis, nisl enim rutrum dolor, in posuere purus risus vel quam</p>
          </div>
          <div class="span4 i-block"> <i class="icon-camera"></i>
            <h3>Block-E</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat, justo sed tincidunt iaculis, nisl enim rutrum dolor, in posuere purus risus vel quam</p>
          </div>
          <div class="span4 i-block"> <i class="icon-desktop"></i>
            <h3>Block-F</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat, justo sed tincidunt iaculis, nisl enim rutrum dolor, in posuere purus risus vel quam</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Services Section --> 
  
  <!-- About Us section -->
  <div class="section" id="aboutus1">
  <div class="container">
    <div class="title">
      <h2>About Us</h2>
      <div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
      <!--<p>The most important thing to us is building products people love.</p>---> 
    </div>
    <div class="container clearfix">
      <div class="grid4 first">grid4
        <table class="company01">
          <tbody>
            <tr>
              <th class="arrow_box">P_id</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
-<?php echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['html'];?>
</td>
            </tr>
            <tr>
              <th class="arrow_box"><?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['html'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['snk_kei_kbn_c']['html'];?>
</td>
            </tr>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['html'];?>
</td>
            </tr>
            <tr>
              <th>A D</th>
              <td><select  name="ad_cd" class="states"  style="width:132px;">
                  
                  
                
                
              
                     <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ary_ad_ids']->value,'output'=>$_smarty_tpl->tpl_vars['ary_ad_names']->value,'selected'=>$_smarty_tpl->tpl_vars['ad_cd']->value),$_smarty_tpl);?>
 
              
            
              
              
                
                </select></td>
            </tr>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['html'];?>
</td>
            </tr>
            <tr>
              <th>団体数</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['tdantai_c']['html'];?>
</td>
            </tr>
            <tr>
              <th>総コース</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['html'];?>
</td>
            </tr>
            <tr>
              <th>産コース</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['html'];?>
</td>
            </tr>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['html'];?>
%</td>
            </tr>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['html'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['html'];?>
</td>
            </tr>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['html'];?>
</td>
            </tr>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['sek_ng_kbn_c']['label'];?>
</th>
              <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['sek_ng_kbn_c']['html'];?>
</td>
            </tr>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_sek_kbn_c']['label'];?>
</th>
              <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_sek_kbn_c']['html'];?>
</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="grid8">grid8
        <table class="company01">
          <tbody>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['dantai_cd_knj_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['dantai_cd_knj_c']['html'];?>
</td>
            </tr>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['insatu_kgo_cd_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['insatu_kgo_cd_c']['html'];?>
</td>
            </tr>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['html'];?>
</td>
            </tr>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['html'];?>
</td>
            </tr>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['html'];?>
</td>
            </tr>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['ksy_cd_c']['label'];?>
</th>
              <td><select name="ksy_cd" size="<?php echo count($_smarty_tpl->tpl_vars['ksy_names']->value);?>
" id="makerPulldown" style="width:460px;">
                  
                  
                
                
              
               <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ksy_ids']->value,'output'=>$_smarty_tpl->tpl_vars['ksy_names']->value,'selected'=>$_smarty_tpl->tpl_vars['ksy_cd']->value),$_smarty_tpl);?>

              
            
              
              
                
                </select></td>
            </tr>
            <tr id="tr01">
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_nm_j_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_nm_j_c']['html'];?>
</td>
              <!---
            <th id="th01"><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_nm_j_c']['label'];?>
</th>
            <td id="td01"><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_nm_j_c']['html'];?>
</td> ---> 
            </tr>
            <tr id="tr02">
              <th>Addr</th>
              <td><p><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_ken_c']['html'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_adr1_c']['html'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_adr2_c']['html'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_adr3_c']['html'];?>
</p></td>
              <!---
            <th id="th01"><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_nm_j_c']['label'];?>
</th>
            <td id="td01"><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_nm_j_c']['html'];?>
</td> ---> 
            </tr>
            <tr id="tr03">
              <th>Section</th>
              <td><p><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_tnto_bsy_nm_j_c']['html'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_tnto_nm_j_c']['html'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_tel_c']['html'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_fax_c']['html'];?>
</p></td>
              <!---
            <th id="th01"><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_nm_j_c']['label'];?>
</th>
            <td id="td01"><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_nm_j_c']['html'];?>
</td> ---> 
            </tr>
            <div id="ksy">
          
          <tr id="tr11" class="invisible">
            <th>Kgo</th>
            <td> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tuk_kgo_nm_j']);
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
              <?php endfor; endif; ?> </td>
          </tr>
          <tr id="tr12" class="invisible">
            <th>Addr</th>
            <td> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_ken']);
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
              <?php endfor; endif; ?> 
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr1']);
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
              <?php endfor; endif; ?>
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr2']);
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
              <?php endfor; endif; ?>
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_adr3']);
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
          </tr>
          <tr id="tr13" class="invisible">
            <th>Section</th>
            <td> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_bsy_nm_j']);
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
              <?php endfor; endif; ?>
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tnto_nm_j']);
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
              <?php endfor; endif; ?>
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_tel']);
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
              <?php endfor; endif; ?>
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_fax']);
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
          </tr>
            </tbody>
          
        </table>
      </div>
      <!-- end ksy ----> 
    </div>
    <!---end grid8 ---> 
  </div>
  <!---end container ----> 
  
  <!--- end grid --->
  
  <div class="container clearfix">
    <div class="grid3 first">3カラム</div>
    <div class="grid9">
      <div class="grid3 first">3カラム</div>
      <div class="grid3">3カラム</div>
      <div class="grid3">3カラム</div>
      <div class="grid5 first">5カラム</div>
      <div class="grid4">4カラム</div>
    </div>
  </div>
  <div class="container clearfix">
    <div class="grid3 first"> grid3</div>
    <div class="grid9"> grid9</div>
  </div>
  <!-- End About US --> 
  <!-- About Us section -->
  <div class="section" id="aboutus2">
  <div class="container">
    <div class="title">
      <h2>About Us</h2>
      <div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
      <!--<p>The most important thing to us is building products people love.</p>---> 
    </div>
    <div class="container clearfix" style="background-color:#f0ffff">
      <div class="grid4 first">3等分
        <table >
          <tbody>
            <tr>
              <th>PmhSize</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_size_kbn_c']['html'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_items_c']['html'];?>
部</td>
            </tr>
            <tr>
              <th>WebPmh</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['web_pmh_kbn_c']['html'];?>
</td>
            </tr>
            <tr>
              <th>版下size</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['han_size_kbn_c']['html'];?>
</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="grid4">3等分
        <table>
          <tbody>
            <tr>
              <th>ポスタ</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pos_type_kbn_c']['html'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pos_items_c']['html'];?>
部</td>
            </tr>
            <tr>
              <th>リーフ</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['bes_items_c']['html'];?>
部</td>
            </tr>
            <tr>
              <th>その他</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_type_c']['html'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['etc_items_c']['html'];?>
部</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="grid4">3等分
        <table>
          <tbody>
            <tr>
              <th>その他</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_type_c']['html'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['etc_items_c']['html'];?>
部</td>
            </tr>
            <tr>
              <th>周期</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_cycle_kbn_c']['html'];?>
</td>
            </tr>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['html'];?>
</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    <!--- end grid ---> 
  </div>
  <div class="container clearfix">
    <div class="grid4 first">3等分
      <table class="company01">
        <tbody>
          <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['form']->value['data_select_kbn_c']['label'];?>
</th>
            <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['data_select_kbn_c']['html'];?>
</td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_policy_kbn_c']['label'];?>
</th>
            <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_policy_kbn_c']['html'];?>
</td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['form']->value['kjn_inf_kbn_c']['label'];?>
</th>
            <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['kjn_inf_kbn_c']['html'];?>
</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="grid4">3等分
      <table class="company01">
        <tbody>
          <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_kbn_c']['label'];?>
</th>
            <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_kbn_c']['html'];?>
</td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['form']->value['sho_sof_kbn_c']['label'];?>
Ｐ</th>
            <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['sho_sof_kbn_c']['html'];?>
</td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_ren_kbn_c']['label'];?>
</th>
            <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_ren_kbn_c']['html'];?>
</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="grid4">3等分
      <table class="company01">
        <tbody>
          <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_kbn_c']['label'];?>
</th>
            <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_kbn_c']['html'];?>
</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!--- end grid --->
  <div class="container clearfix">
    <div class="grid3 first">4等分
      <table class="on_off">
        <tbody>
          <tr class="on_off">
            <th><label for="on_off">Default</label></th>
            <td><input type="checkbox" id="on_off" /></td>
          </tr>
          <tr class="on_off">
            <th><?php echo $_smarty_tpl->tpl_vars['form']->value['dan_adr_chk_c']['label'];?>
</th>
            <td><input type="checkbox" id="on_off" name="dan_adr_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['dan_adr_chk_c']['html'];?>
 </> </td>
          </tr>
          <tr class="on_off">
            <th class="arrow_box"><?php echo $_smarty_tpl->tpl_vars['form']->value['saij_chk_c']['label'];?>
</th>
            <td><input type="checkbox" id="on_off" name="saij_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['saij_chk_c']['html'];?>
 </> </td>
          </tr>
          <tr class="on_off">
            <th class="arrow_box"><?php echo $_smarty_tpl->tpl_vars['form']->value['sku_inf_chk_c']['label'];?>
</th>
            <td><input type="checkbox" id="on_off" name="sku_inf_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['sku_inf_chk_c']['html'];?>
 </> </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="grid3">4等分
      <table>
        <tbody>
          <tr class="on_off">
            <th class="arrow_box"><?php echo $_smarty_tpl->tpl_vars['form']->value['juko_chk_c']['label'];?>
</th>
            <td><input type="checkbox" id="on_off" name="juko_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['juko_chk_c']['html'];?>
 </> </td>
          </tr>
          <tr class="on_off">
            <th class="arrow_box"><?php echo $_smarty_tpl->tpl_vars['form']->value['eig_chk_c']['label'];?>
</th>
            <td><input type="checkbox" id="on_off" name="eig_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['eig_chk_c']['html'];?>
 </> </td>
          </tr>
          <tr class="on_off">
            <th class="arrow_box"><?php echo $_smarty_tpl->tpl_vars['form']->value['lbl_chk_c']['label'];?>
</th>
            <td><input type="checkbox" id="on_off" name="lbl_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['lbl_chk_c']['html'];?>
 </> </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="grid3">4等分
      <table>
        <tbody>
          <tr class="on_off">
            <th class="arrow_box"><?php echo $_smarty_tpl->tpl_vars['form']->value['one_p_chk_c']['label'];?>
</th>
            <td><input type="checkbox" id="on_off" name="one_p_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['one_p_chk_c']['html'];?>
 </> </td>
          </tr>
          <tr class="on_off">
            <th class="arrow_box"><?php echo $_smarty_tpl->tpl_vars['form']->value['zai_chk_c']['label'];?>
</th>
            <td><input type="checkbox" id="on_off" name="zai_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['zai_chk_c']['html'];?>
 </> </td>
          </tr>
          <tr class="on_off">
            <th class="arrow_box"><?php echo $_smarty_tpl->tpl_vars['form']->value['juryo_chk_c']['label'];?>
</th>
            <td><input type="checkbox" id="on_off" name="juryo_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['juryo_chk_c']['html'];?>
 </> </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="grid3">4等分
      <table>
        <tbody>
          <tr class="on_off">
            <th class="arrow_box"><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_chk_c']['label'];?>
</th>
            <td><input type="checkbox" id="on_off" name="etc_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['etc_chk_c']['html'];?>
 </> </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!--- end grid ---> 
  
  <!-- End About US --> 
  
  <!-- Features Section -->
  <div class="section section-alt" id="features">
    <div class="container">
      <div class="content">
        <div class="row">
          <div class="span12">
            <div class="title">
              <h2>Features</h2>
              <div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
              <!--- <p>Heading, Buttons &amp; Font Awesome Icons.</p>--->
              <div style="display: none;"><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</div>
              <p><?php echo $_smarty_tpl->tpl_vars['form']->value['memos_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['memos_c']['html'];?>
</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <h1>Heading h1</h1>
            <h2>Heading h2</h2>
            <h3>Heading h3</h3>
            <h4>Heading h4</h4>
            <h5>Heading h5</h5>
            <h6>Heading h6</h6>
          </div>
          <div class="span8">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Button</th>
                  <th>class=""</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><button type="button" class="btn">Default</button></td>
                  <td><code>btn</code></td>
                  <td>Standard gray button with gradient</td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-primary">Primary</button></td>
                  <td><code>btn btn-primary</code></td>
                  <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-info">Info</button></td>
                  <td><code>btn btn-info</code></td>
                  <td>Used as an alternative to the default styles</td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-success">Success</button></td>
                  <td><code>btn btn-success</code></td>
                  <td>Indicates a successful or positive action</td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-warning">Warning</button></td>
                  <td><code>btn btn-warning</code></td>
                  <td>Indicates caution should be taken with this action</td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-danger">Danger</button></td>
                  <td><code>btn btn-danger</code></td>
                  <td>Indicates a dangerous or potentially negative action</td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-inverse">Inverse</button></td>
                  <td><code>btn btn-inverse</code></td>
                  <td>Alternate dark gray button, not tied to a semantic action or use</td>
                </tr>
                <tr>
                  <td><button type="button" class="btn btn-link">Link</button></td>
                  <td><code>btn btn-link</code></td>
                  <td>Deemphasize a button by making it look like a link while maintaining button behavior</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Features --> 
  <!-- Contact Section -->
  <div class="section" id="contact" >
    <div class="container">
      <div class="content">
        <div class="row">
          <div class="span12">
            <div class="title">
              <h2>Contact Us</h2>
              <div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
              <p>We bring a personal and effective approach to every project we work on.</p>
            </div>
          </div>
          <div class="span8">
            <iframe width="100%" height="317" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=mRova+Solutions,+Pune,+Maharashtra&amp;aq=0&amp;oq=mrova&amp;sll=18.815427,76.775144&amp;sspn=14.731137,19.577637&amp;ie=UTF8&amp;hq=mRova+Solutions,&amp;hnear=Pune,+Maharashtra&amp;t=m&amp;ll=18.526817,73.903141&amp;spn=0.073244,0.132008&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe>
          </div>
          <div class="span4">
            <h4>Our Location</h4>
            <p>F 4, Vidhi Apartment, Jambulkar Chowk, Near Camelia, Wanowari</p>
            <hr class="grey"/>
            <h4>Email &amp; Phone</h4>
            <p>info@mrova.com</p>
            <p>020-60600340</p>
            <hr class="grey"/>
            <h4>Socialize With Us</h4>
            <div class="social"> <a href="#fb"><i class="icon-facebook-sign"></i></a> <a href="#fb"><i class="icon-twitter-sign"></i></a> <a href="#fb"><i class="icon-google-plus-sign"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Section --> 
  <!-- Pushy Menu
<p class="gotop">
    <a href="#"><img src="template/img/w09_a05.jpg" alt="ページトップへ戻る"></a>
</p>--->
  
  <div id="footer"> &copy; 2013 mRova Solutions. Designed with lots of love at <a id="attribution" href="http://www.mrova.com">mRova</a>. </div>
  <nav class="pushy pushy-left">
    <ul>
      <li><a href="#">Item 1</a></li>
      <li><a href="#">Item 2</a></li>
      <li><a href="#">Item 3</a></li>
      <li><a href="#">Item 4</a></li>
      <li><a><?php echo $_smarty_tpl->tpl_vars['form']->value['buttons']['insert']['html'];?>
</a></li>
      <li><a><?php if ($_smarty_tpl->tpl_vars['insertflag']->value!=true) {?><?php echo $_smarty_tpl->tpl_vars['form']->value['buttons']['send']['html'];?>
<?php }?></a></li>
      <li><a>
        <button class="button01 icon tag" type="button" onclick="location.href='index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'"   style="width:120px">Return</button>
        </a></li>
      <li><a href='index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>Return</a></li>
      <li><a><?php echo $_smarty_tpl->tpl_vars['form']->value['buttons']['reset']['html'];?>
</a></li>
    </ul>
  </nav>
  <?php if ($_smarty_tpl->tpl_vars['form']->value['requirednote']&&!$_smarty_tpl->tpl_vars['form']->value['frozen']) {?>
  <?php echo $_smarty_tpl->tpl_vars['form']->value['requirednote'];?>

  <?php }?>
</form>

<!-- Pushy JS --> 
<script src="template/pushy-master/js/pushy.min.js"></script> 

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
</html><?php }} ?>
