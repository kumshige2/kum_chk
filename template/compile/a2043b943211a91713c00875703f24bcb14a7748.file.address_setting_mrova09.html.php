<?php /* Smarty version Smarty-3.1.18, created on 2015-11-05 15:26:37
         compiled from ".\template\address_setting_mrova09.html" */ ?>
<?php /*%%SmartyHeaderCode:10876563712352c25e4-39248738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2043b943211a91713c00875703f24bcb14a7748' => 
    array (
      0 => '.\\template\\address_setting_mrova09.html',
      1 => 1446704790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10876563712352c25e4-39248738',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56371235523be9_60734608',
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
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56371235523be9_60734608')) {function content_56371235523be9_60734608($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\php\\pear\\Smarty\\libs\\plugins\\function.html_options.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<!---
   <meta name="description" content="">
  <meta name="author" content="">
  <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">--->
<!-- Import CSS mrova -->
<link rel="stylesheet" href="template/mrova/css/main.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!-----select 2 ---->
<link type="text/css" href="template/css/select2.css" rel="stylesheet"/>
<link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />
<!--- fancyselect  ---->
<link type="text/css" rel="stylesheet" href="template/fancyselect/fancyselect.css">
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

<!--- sidebar navi ---->
<link href="http://jillix.github.io/jQuery-sidebar/css/custom.css" rel="stylesheet">
<!----
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
		var txt = $('#makerPulldown').text();
		
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
<!--  jStageAligner --->
<!--<script type="text/javascript" src="template/jStageAligner-master/sample/jquery-1.4.3.min.js"></script>-->
<script type="text/javascript" src="template/jStageAligner-master/src/jquery.jStageAligner.js"></script>
<script type="text/javascript">

      $(function() {
        $("#box1").jStageAligner("CENTER_BOTTOM", {time: 500, easing: "swing", callback: function() {
        }});
        $("#box2").jStageAligner("CENTER_MIDDLE", {time: 200, easing: "swing"});
        $("#box3").jStageAligner("RIGHT_BOTTOM");
        $("#box4").jStageAligner("LEFT_BOTTOM", {time: 100});
        $("#box5").jStageAligner("RIGHT_MIDDLE", {time: 200});
		$(".menu-btn").jStageAligner("RIGHT_MIDDLE", {time: 200});
        $("#box6").jStageAligner("CENTER_TOP", {marginTop: 200});
      });
	  
    </script>
<!--- side_bar --->
<!----<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>--->
<script src="template/jQuery-sidebar-master/src/jquery.sidebar.js"></script>
<script src="http://jillix.github.io/jQuery-sidebar/js/handlers.js"></script>
<!-- mask money 3keta  -->

<script type="text/javascript" src="template/maskmoney/src/jquery.maskMoney.js"></script>
<!--- fancy_sel --->
<script src="template/fancyselect/fancyselect.js"></script> 
<script>
$(document).ready(function() {
	$('.fancy_sel').fancySelect();   
             
		// Boilerplate
				var repoName = 'fancyselect'

				$.get('https://api.github.com/repos/octopuscreative/' + repoName, function(repo) {
					var el = $('#top').find('.repo');

					el.find('.stars').text(repo.watchers_count);
					el.find('.forks').text(repo.forks_count);
				});

				var menu = $('#top').find('menu');

				function positionMenuArrow() {
					var current = menu.find('.current');

					menu.find('.arrow').css('left', current.offset().left + (current.outerWidth() / 2));
				}

				$(window).on('resize', positionMenuArrow);

				menu.on('click', 'a', function(e) {
					var el = $(this),
						href = el.attr('href'),
						currentSection = $('#main').find('.current');

					e.preventDefault();

					menu.find('.current').removeClass('current');

					el.addClass('current');

					positionMenuArrow();

					if (currentSection.length) {
						currentSection.fadeOut(300).promise().done(function() {
							$(href).addClass('current').fadeIn(300);
						});
					} else {
						$(href).addClass('current').fadeIn(300);
					}
				});

				menu.find('a:first').trigger('click')
			});
		</script>
<!-- class でなく　ＩＤ　で指定する　そのほうが速度速い　
  $('#com3').maskMoney({
    prefix:'',
    thousands:',',
    allowZero: true,
    precision: '0' 
   });

--->
<!---
<script type="text/javascript">
$(document).ready(function(){
   $('#pmh_cost_c-0').maskMoney({
    prefix:'',
    thousands:',',
    allowZero: true,
    precision: '0' 
   });
    $('#post_cost_c-0').maskMoney({
    prefix:'',
    thousands:',',
    allowZero: true,
    precision: '0' 
   });
   $('#pmh_cost_c-0').maskMoney({
    prefix:'',
    thousands:',',
    allowZero: true,
    precision: '0' 
   });
    $('#bes_cost_c-0').maskMoney({
    prefix:'',
    thousands:',',
    allowZero: true,
    precision: '0' 
   });
     $('#any_cost_c-0').maskMoney({
    prefix:'',
    thousands:',',
    allowZero: true,
    precision: '0' 
   });
 }); 
</script>--->

<style type="text/css">
.invisible {
	display: none;
}
</style>
<!--  jStageAligner --->
<style type="text/css">
#box1 {
	width: 100px;
	height: 100px;
	background-color: #000;
}
#box2 {
	width: 100px;
	height: 100px;
	/*---background-color: #f00;---*/
	background-color: #69F;
}
#box3 {
	width: 100px;
	height: 100px;
	background-color: #0f0;
}
#box4 {
	width: 100px;
	height: 100px;
	background-color: #0ff;
}
#box5 {
	width: 100px;
	height: 100px;
	background-color: #ff0;
}
#box6 {
	width: 100px;
	height: 100px;
	background-color: #ccc;
}
.tt {
	font-family: monospace;
} /* フォントを等幅フォントにする */
</style>
<style>
.sidebar.right {
	width: 30%;
}
</style>
</head><!-- To change color change the class "color-1" to "color-2, color-3 ... color-6" -->
<body class="home color-4">
<h2><?php echo $_smarty_tpl->tpl_vars['h1']->value;?>
</h2>
<div style="color:red; font-size:24px;"> <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
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
      <div id="top-nav" style="background-color:#999">
        <ul id="fixed-nav">
          <li class="current"><a href="#home">Home</a></li>
          <li><a href="#aboutus1">基本</a></li>
          <li><a href="#aboutus2">請求</a></li>
          <li><a href="#aboutus3">確認情報</a></li>
          <li><a href="#print">Services</a></li>
        </ul>
      </div>
      <a><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
-<?php echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['html'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</a> </div>
  </div>
</div>
<!-- End Header -->

<div class="menu-btn"> <a href="#" class="btn btn-primary" data-action="toggle" data-side="left">&#9776; Menu</a> </div>
<!-- <div id="box3"></div>---> 
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
 class="def" >
  <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>
 
  
  <?php echo $_smarty_tpl->tpl_vars['form']->value['action']['html'];?>
 
  
  <!-- About Us section --> 
  <!--<div class="section" id="aboutus1" style="background-image: url(template/162006_m_wi/bg.jpg);background-size:cover;">--->
  <div class="section" id="aboutus1">
  <div class="container">
  <div class="title">
    <h2>Pamphlet 基本</h2>
    <div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
    <!--<p>The most important thing to us is building products people love.</p>---> 
  </div>
  <div class="container clearfix">
    <div class="grid4 first">
      <table class="company01">
        <tbody>
          <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['label'];?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
-<?php echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['html'];?>
</td>
          </tr>
          <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['label'];?>
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
            <th style='color:#33ff00'>請求締</th>
            <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sek_knr_kbn_c']['html'];?>
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
    <div class="grid8">
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
            <td><select name="ksy_cd_c" size="<?php echo count($_smarty_tpl->tpl_vars['ksy_names']->value);?>
" id="makerPulldown" style="width:460px;">
                
                
                
               <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ksy_ids']->value,'output'=>$_smarty_tpl->tpl_vars['ksy_names']->value,'selected'=>$_smarty_tpl->tpl_vars['ksy_cd']->value),$_smarty_tpl);?>

                  
              
              
              </select></td>
          </tr>
          <tr id="tr01">
            <th><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_nm_j_c']['label'];?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_nm_j_c']['html'];?>
</td>
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
          </tr>
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
      <div> 
        <!-- end grid8 ----> 
      </div>
      <!---end clearfix ---> 
    </div>
    <!---end conttener ----> 
  </div>
  <!---end seciton ----> 
  <!-- End About US --> 
  <!-- About Us2 section -->
  <div class="section" id="aboutus2"  style="background-color:#9C9">
    <div class="container">
      <div class="title">
        <h2>請　求</h2>
        <div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
      </div>
      <div class="container clearfix">
        <div class="grid4 first">
          <h5 style="color:#eee;">部数サイズ</h5>
          <table  class="company01">
            <tbody>
              <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_size_kbn_c']['label'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_size_kbn_c']['html'];?>
</td>
              </tr>
               <tr>
                <th>ポスタ</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pos_type_kbn_c']['html'];?>
</td>
              </tr>              
              <tr>
                <th>Ｗｅｂ</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['web_pmh_kbn_c']['html'];?>
</td>
              </tr>
              <tr>
                <th>版下</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['han_size_kbn_c']['html'];?>
</td>
              </tr>
              <tr>
                <th>周期</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_cycle_kbn_c']['html'];?>
</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="grid4">
          <h5 style="color:#eee;">3等分</h5>
          <table style="color:#999999;">
            <tbody>
               <tr>
                <th>Ｐｍｈ</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_items_c']['html'];?>
部</td>
              </tr>
              <tr>
                <th>ポスタ</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pos_items_c']['html'];?>
部</td>
              </tr>
              <tr>
                <th>リーフ</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['bes_items_c']['html'];?>
部</td>
              </tr>
             
            </tbody>
          </table>
        </div>
        <div class="grid4">
          <h5 style="color:#eee;">3等分</h5>
          <table style="color:#999999;">
            <tbody>
               <tr>
                <th>その他</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_type_c']['html'];?>
</td>
              </tr>
              <tr>
                <th></th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_items_c']['html'];?>
部</td>
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
      <div class="container clearfix" style="background-color:#eeeeee">
        <div class="grid4 first">
          <h5 style="color:#eee;">aa</h5>
          <table style="color:#999999;">
            <tbody>
              <tr>
                <th style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_cost_c']['label'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_cost_c']['html'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['post_cost_c']['label'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['post_cost_c']['html'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['bes_cost_c']['label'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['bes_cost_c']['html'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['any_cost_c']['label'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['any_cost_c']['html'];?>
</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="grid4">
          <h5 style="color:#eee;">3等分</h5>
          <table style="color:#999999;">
            <tbody>
              <tr>
                <th style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['senyu_page_c']['label'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['senyu_page_c']['html'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['all_page_c']['label'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['all_page_c']['html'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['com_page_c']['label'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['com_page_c']['html'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['sho_page_c']['label'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sho_page_c']['html'];?>
</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="grid4">
          <h5 style="color:#eee;">3等分</h5>
          <table style="color:#999999;">
            <tbody>
              <tr>
                <th style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['page_tanka_c']['label'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['page_tanka_c']['html'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['sekyymm_c']['label'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sekyymm_c']['html'];?>
</td>
              </tr>
            </tbody>
          </table>
        </div>
        
      </div>
      <!--- end  container --->
    
      <div class="container clearfix" style="background-color:#eeeeee;">
        <div class="hr hr-invisible"></div>
        <!--  <div class="row"> 
            <!--　<table border ="1" style="background-color:#cccccc;color:#ccffff">--->
        <h5>請求情報</h5>
        <table class="table210">
          <tr>
            <th rowspan="5">製作総額</th>
            <td rowspan="5"><?php echo $_smarty_tpl->tpl_vars['form']->value['this_year_cost_c']['html'];?>
</td>
            <th rowspan="2">他団体請求</th>
            <td rowspan="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_sek_c']['html'];?>
</td>
            <td rowspan="2" style="background-color:#cccccc"></td>
            <td rowspan="2" style="background-color:#cccccc"></td>
            <td rowspan="2" style="background-color:#cccccc"></td>
            <td rowspan="2" style="background-color:#cccccc"></td>
          </tr>
          <tr> </tr>
          <tr>
            <th rowspan="3">産能掲載費</th>
            <td rowspan="3"><?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_keisai_cost_c']['html'];?>
</td>
            <th>共通ページ費</th>
            <td><?php echo $_smarty_tpl->tpl_vars['form']->value['com_cost_c']['html'];?>
</td>
            <th>管理費</th>
            <td><?php echo $_smarty_tpl->tpl_vars['form']->value['mng_cost_c']['html'];?>
</td>
          </tr>
          <tr>
            <th>紹介ページ費</th>
            <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sho_cost_c']['html'];?>
</td>
            <th rowspan="2">産能大負担費</th>
            <td rowspan="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_cost_c']['html'];?>
</td>
          </tr>
          <tr>
            <th>調整</th>
            <td><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_cost_c']['html'];?>
</td>
          </tr>
        </table>
      </div>
    </div>
    <!--- end container ---->
      <div class="container clearfix" style="background-color:#eeeeee">
        <div class="grid12">
          <h5>MEMO</h5>
          <table style="color:#999999;">
            <tbody>
              <tr>
                <th style="text-align:right;"></th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['memos_c']['html'];?>
</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div> 
  </div>
  <!--- end section ---> 
  <!-- About Us3 section -->
  <div class="section" id="aboutus3">
    <div class="container">
      <div class="title">
        <h2>確認情報</h2>
        <div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
        <!--<p>The most important thing to us is building products people love.</p>---> 
      </div>
      <span class="span1 i-block"><i class="icon-folder-open"></i></span>
      <div class="container clearfix" style="background-color:#eeeeee">
        <div class="grid4 first" >
          <h5>本学確認情報</h5>
          <table style="color:#999999;">
            <tbody>
              <tr>
                <th style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_kbn_c']['label'];?>
</th>
                <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_kbn_c']['html'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['sho_sof_kbn_c']['label'];?>
Ｐ</th>
                <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['sho_sof_kbn_c']['html'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_ren_kbn_c']['label'];?>
</th>
                <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_ren_kbn_c']['html'];?>
</td>
              </tr>
              <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['form']->value['data_select_kbn_c']['label'];?>
</th>
                <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['data_select_kbn_c']['html'];?>
</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="grid4">
          <h5 style="color:#eee;">3等分</h5>
          <table style="color:#999999;">
            <tbody>
              <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_kbn_c']['label'];?>
</th>
                <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_kbn_c']['html'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_policy_kbn_c']['label'];?>
</th>
                <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_policy_kbn_c']['html'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['kjn_inf_kbn_c']['label'];?>
</th>
                <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['form']->value['kjn_inf_kbn_c']['html'];?>
</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="grid4">
          <h5 style="color:#eee;">3等分</h5>
        </div>
      </div>
      <!--- end container clearfix ----> 
      
      <span class="span1 i-block" style="margin-top:50px"><i class="icon-tag"></i></span>
      <div class="container clearfix" style="background-color:#eeeeee">
        <div class="grid3 first" >
          <h5>他団体確認情報</h5>
          <table class="on_off"  style="color:#999999;">
            <tbody>
              <tr class="on_off">
                <th style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['dan_adr_chk_c']['label'];?>
</th>
                <td><input type="checkbox" id="on_off" name="dan_adr_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['dan_adr_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th  style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['saij_chk_c']['label'];?>
</th>
                <td><input type="checkbox" id="on_off" name="saij_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['saij_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['sku_inf_chk_c']['label'];?>
</th>
                <td><input type="checkbox" id="on_off" name="sku_inf_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['sku_inf_chk_c']['html'];?>
 </> </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="grid3">
          <h5 style="color:#eee;">4等分</h5>
          <table style="color:#999999;">
            <tbody>
              <tr class="on_off">
                <th style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['juko_chk_c']['label'];?>
</th>
                <td><input type="checkbox" id="on_off" name="juko_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['juko_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['eig_chk_c']['label'];?>
</th>
                <td><input type="checkbox" id="on_off" name="eig_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['eig_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['lbl_chk_c']['label'];?>
</th>
                <td><input type="checkbox" id="on_off" name="lbl_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['lbl_chk_c']['html'];?>
 </> </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="grid3">
          <h5 style="color:#eee;">4等分</h5>
          <table style="color:#999999;">
            <tbody>
              <tr class="on_off">
                <th style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['one_p_chk_c']['label'];?>
</th>
                <td><input type="checkbox" id="on_off" name="one_p_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['one_p_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['zai_chk_c']['label'];?>
</th>
                <td><input type="checkbox" id="on_off" name="zai_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['zai_chk_c']['html'];?>
 </> </td>
              </tr>
              <tr class="on_off">
                <th style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['juryo_chk_c']['label'];?>
</th>
                <td><input type="checkbox" id="on_off" name="juryo_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['juryo_chk_c']['html'];?>
 </> </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="grid3">
          <h5 style="color:#eee;">4等分</h5>
          <table style="color:#999999;">
            <tbody>
              <tr class="on_off">
                <th style="text-align:left;" ><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_chk_c']['label'];?>
</th>
                <td><input type="checkbox" id="on_off" name="etc_chk_c" selected=<?php echo $_smarty_tpl->tpl_vars['form']->value['etc_chk_c']['html'];?>
 </> </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--- end container clearfix ----> 
      <span class="span1 i-block" style="margin-top:50px"><i class="icon-calendar"></i></span>
      <div class="container clearfix" style="background-color:#eeeeee">
        <div class="grid4 first">
          <h5 style="color:#eee;">発注スケジュール</h5>
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
        <div class="grid4">
          <h5 style="color:#eee;">発注スケジュール</h5>
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
              <tr>
                <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['label'];?>
</th>
                <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['html'];?>
 </td>
              </tr>
              <tr>
                <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['ko3_ymd_c']['label'];?>
</th>
                <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['ko3_ymd_c']['html'];?>
 </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="grid4">
          <h5 style="color:#eee;">発注スケジュール</h5>
          <table class="aaa">
            <tbody>
              <tr>
                <th> <?php echo $_smarty_tpl->tpl_vars['form']->value['sekryo_ymd_c']['label'];?>
</th>
                <td> <?php echo $_smarty_tpl->tpl_vars['form']->value['sekryo_ymd_c']['html'];?>
 </td>
              </tr>
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
    </div>
    <!--- end container ----> 
  </div>
  <!--- end section ---> 
  <!-- End About US --> 
  <!-- Features Section -->
  <div class="section section-alt" id="print">
    <div class="container">
      <div class="content">
        <div class="row" >
          <div class="title">
            <h2>Our Services</h2>
            <div class="hr hr-small hr-center"><span class="hr-inner"></span></div>
            
            <!---<textarea style ="border:0; padding:10px; font-size:1.0em; font-family:Arial, sans-serif; color:#aaa; border:solid 1px #ccc; margin:0 0 20px; width:860px; "><?php echo $_smarty_tpl->tpl_vars['form']->value['memos_c']['html'];?>
</textarea>---> 
            <!--<p><?php echo $_smarty_tpl->tpl_vars['form']->value['memos_c']['html'];?>
</p><p>We develop and market mobile application, websites and ecommerce solutions.</p>--->
            <div style="display: none;"><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</div>
          </div>
        </div>
        <div class="row">
          <div class="span4 i-block"> <i class="icon-print"></i>
            <h3>Print</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat, justo sed tincidunt iaculis, nisl enim rutrum dolor, in posuere purus risus vel quam</p>
            <div class='order_sheetxx' id='order_sheetxx'>
              <button type="submit" value="order_sht01" id ="order_sht01" name="order_sht01" class="button01 icon log" style="width:120px">発注票</button>
              <button type="submit" value="pamph_inf01" id ="pamph_inf01" name="pamph_inf01" class="button01 icon tag" style="width:120px">確認票</button>
            </div>
          </div>
          <div class="span4 i-block"> <i class="icon-star"></i>
            <h3>Schedule</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat, justo sed tincidunt iaculis, nisl enim rutrum dolor, in posuere purus risus vel quam</p>
            <button type="submit" value="order_sche" name="gant_pmh01" class="button01 icon clock">発注スケジュール</button>
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
  
  <!---- navigation ----->
  <div class="container" align="center">
    <h1>
    jQuery Sidebar Demo
    </h3>
    <h3>Toggle sidebars</h3>
    <div> <a href="#" class="btn btn-primary" data-action="toggle" data-side="left"><span>Toggle Left</span></a> <a href="#" class="btn btn-primary" data-action="toggle" data-side="top"><span>Toggle Top</span></a> <a href="#" class="btn btn-primary" data-action="toggle" data-side="right"><span>Toggle Right</span></a> <a href="#" class="btn btn-primary" data-action="toggle" data-side="bottom"><span>Toggle Bottom</span></a> </div>
    <h3>Open sidebars</h3>
    <section class="example-buttons" class="clearfix">
    <a href="#" class="btn btn-success" data-action="open" data-side="left"><span>Open Left</span></a> <a href="#" class="btn btn-success" data-action="open" data-side="top"><span>Open Top</span></a> <a href="#" class="btn btn-success" data-action="open" data-side="right"><span>Open Right</span></a> <a href="#" class="btn btn-success" data-action="open" data-side="bottom"><span>Open Bottom</span></a>
    </section>
    <h3>Close sidebars</h3>
    <section class="example-buttons" class="clearfix">
    <a href="#" class="btn btn-danger" data-action="close" data-side="left"><span>Close Left</span></a> <a href="#" class="btn btn-danger" data-action="close" data-side="top"><span>Close Top</span></a> <a href="#" class="btn btn-danger" data-action="close" data-side="right"><span>Close Right</span></a> <a href="#" class="btn btn-danger" data-action="close" data-side="bottom"><span>Close Bottom</span></a>
    </section>
  </div>
  <div class="sidebars">
    <div class="sidebar left" style="width:150px;">
      <ul>
        <li><a href="#">Item 1</a></li>
        <li><a href="#">Item 2</a></li>
        <li><a href="#">Item 3</a></li>
        <!--- <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['form']->value['buttons']['send']['html'];?>
</a></li>--->
        <li><a>
          <button class="button01 icon edit" type="submit" name="send" style="width:160px; height:30px; ">Update </button>
          </a></li>
        <li><a>
          <button class="button01 icon add" type="submit" name="new" style="width:160px; height:30px; ">CopyPaste</button>
          </a></li>
        <li><a href='index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>Return</a></li>
      </ul>
    </div>
    <div class="sidebar right">Right</div>
    <div class="sidebar top">Top</div>
    <div class="sidebar bottom">Bottom</div>
  </div>
  
  <!------------------------------> 
  <?php if ($_smarty_tpl->tpl_vars['form']->value['requirednote']&&!$_smarty_tpl->tpl_vars['form']->value['frozen']) {?>
  <?php echo $_smarty_tpl->tpl_vars['form']->value['requirednote'];?>

  <?php }?>
</form>

<!-- Pushy JS 
<script src="template/pushy-master/js/pushy.min.js"></script> ---> 

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

<!---- comma3 
 <script src="template/js/comma3.js"></script> ----> 
<!-- class でなく　ＩＤ　で指定する　そのほうが速度速い　----> 
<script language="JavaScript">
$(document).ready(function(){
	            
var price1= $("#this_year_cost_c-0").val();
commaNum = price1.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
$("#this_year_cost_c-0").val(commaNum);
//
var price2= $("#sanno_cost_c-0").val();
commaNum = price2.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
$("#sanno_cost_c-0").val(commaNum)
//
var price3= $("#pmh_cost_c-0").val();
commaNum= price3.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
$("#pmh_cost_c-0").val(commaNum);
//
var price4= $("#post_cost_c-0").val();
commaNum = price4.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
$("#post_cost_c-0").val(commaNum);
//
var price5= $("#bes_cost_c-0").val();
commaNum = price5.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
$("#bes_cost_c-0").val(commaNum);
//
var price6= $("#sanno_keisai_cost_c-0").val();
commaNum = price6.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
$("#sanno_keisai_cost_c-0").val(commaNum);
//
var price11= $("#pmh_items_c-0").val();
commaNum = price11.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
$("#pmh_items_c-0").val(commaNum);
//
var price12= $("#pos_items_c-0").val();
commaNum = price12.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
$("#pos_items_c-0").val(commaNum);
//
var price13= $("#bes_items_c-0").val();
commaNum = price13.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
$("#bes_items_c-0").val(commaNum);
//
var price14= $("#etc_items_c-0").val();
commaNum = price14.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
$("#etc_items_c-0").val(commaNum);
//
//var price15= $("#noh_items_c-0").val();
//commaNum = price15.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
//$("#noh_items_c-0").val(commaNum);
//
//alert("price15");
var price16= $("#tdan_sek_c-0").val();
commaNum16 = price16.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
$("#tdan_sek_c-0").val(commaNum16);
//
var price17= $("#com_cost_c-0").val();
commaNum = price17.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
$("#com_cost_c-0").val(commaNum);
//
var price18= $("#mng_cost_c-0").val();
commaNum = price18.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
$("#mng_cost_c-0").val(commaNum);
//
var price19= $("#sho_cost_c-0").val();
commaNum = price19.toString().replace(/(\d)(?=(\d\d\d)+$)/g , '$1,');
$("#sho_cost_c-0").val(commaNum);
});</script> 
<!---
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>  --->

</body>
</html><?php }} ?>
