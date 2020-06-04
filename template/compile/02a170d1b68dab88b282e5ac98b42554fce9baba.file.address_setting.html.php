<?php /* Smarty version Smarty-3.1.21, created on 2016-03-15 11:04:15
         compiled from ".\template\address_setting.html" */ ?>
<?php /*%%SmartyHeaderCode:968956e76d9ff22d69-57941268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02a170d1b68dab88b282e5ac98b42554fce9baba' => 
    array (
      0 => '.\\template\\address_setting.html',
      1 => 1421901330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '968956e76d9ff22d69-57941268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'form' => 0,
    'error' => 0,
    'h1' => 0,
    'kaiko1_items' => 0,
    'itemdata' => 0,
    'kaiko1' => 0,
    'pmh_type_names' => 0,
    'pmh_type_ids' => 0,
    'pmh_type' => 0,
    'snk_kei_items' => 0,
    'snk_kei_kbn' => 0,
    'bsy_names' => 0,
    'bsy_ids' => 0,
    'bsy_cd' => 0,
    'items' => 0,
    'ad_cd' => 0,
    'insatu_kgo_names' => 0,
    'insatu_kgo_ids' => 0,
    'insatu_kgo_cd' => 0,
    'dantai_knj_names' => 0,
    'dantai_knj_ids' => 0,
    'dantai_cd_knj' => 0,
    'pmh_size_items' => 0,
    'pmh_size_kbn' => 0,
    'han_size_items' => 0,
    'han_size_kbn' => 0,
    'card_type_names' => 0,
    'card_type_ids' => 0,
    'card_type_kbn' => 0,
    'card_hyojun_items' => 0,
    'card_hyojun_kbn' => 0,
    'pos_type_items' => 0,
    'pos_type_kbn' => 0,
    'noh_items' => 0,
    'noh_kbn' => 0,
    'sek_knr_names' => 0,
    'sek_knr_ids' => 0,
    'sek_knr_kbn' => 0,
    'bunrui_items' => 0,
    'bunrui_kbn' => 0,
    'sek_ng_kbn_c' => 0,
    'sek_ng_names' => 0,
    'sek_ng_ids' => 0,
    'sek_ng_kbn' => 0,
    'kgo_sek_kbn_c' => 0,
    'kgo_sek_names' => 0,
    'kgo_sek_ids' => 0,
    'kgo_sek_kbn' => 0,
    'data_select_kbn_c' => 0,
    'data_select_items' => 0,
    'data_select_kbn' => 0,
    'web_pmh_names' => 0,
    'web_pmh_ids' => 0,
    'web_pmh_kbn' => 0,
    'sho_sof_items' => 0,
    'sho_sof_kbn' => 0,
    'kgo_ren_items' => 0,
    'kgo_ren_kbn' => 0,
    'kjn_inf_items' => 0,
    'kjn_inf_kbn' => 0,
    'cancel_policy_items' => 0,
    'cancel_policy_kbn' => 0,
    'e_learning_items' => 0,
    'e_learning_kbn' => 0,
    'kyufu_items' => 0,
    'kyufu_kbn' => 0,
    'contact_items' => 0,
    'contact_kbn' => 0,
    'old_crs_items' => 0,
    'old_crs_kbn' => 0,
    'dl_items' => 0,
    'dl_kbn' => 0,
    'nik_bp_items' => 0,
    'nik_bp_kbn' => 0,
    'ksy_names' => 0,
    'ksy_ids' => 0,
    'ksy_cd' => 0,
    'pmh_cycle_items' => 0,
    'pmh_cycle_kbn' => 0,
    'deli_type_items' => 0,
    'deli_type' => 0,
    'hyosi_colors_items' => 0,
    'hyosi_colors' => 0,
    'chk_array' => 0,
    'xxxx' => 0,
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
    'add_id' => 0,
    'err_01' => 0,
    'p_nm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56e76da0779e64_27378719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e76da0779e64_27378719')) {function content_56e76da0779e64_27378719($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\nginx\\php\\pear\\smarty\\libs\\plugins\\function.html_options.php';
?><!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
		<link type="text/css" href="template/css/select2.css" rel="stylesheet"/>
		<!---<link type="text/css" href="template/css/dropkick.css" rel="stylesheet">
		<link type="text/css" href="template/css/black_theme.css" rel="stylesheet">-->
		<link type="text/css" href="template/css/fancyselect.css" rel="stylesheet">
		<link type="text/css" href="template/css/order_sheet00.css" rel="stylesheet">
		<!-- <link type="text/css" href="template/css/style.sw.css" rel="stylesheet"  />-->
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        	<?php echo '<script'; ?>
 type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"><?php echo '</script'; ?>
>
		<!---
<?php echo '<script'; ?>
 type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"><?php echo '</script'; ?>
>
                --->
		<?php echo '<script'; ?>
 type ="text/javascript"
                src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.sw.js"><?php echo '</script'; ?>
>
		<!--
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.dropkick-1.0.0.js" ><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/fancyselect.js"><?php echo '</script'; ?>
>
--->
		<!---->
		<?php echo '<script'; ?>
 type="text/javascript" src="js/pickadate.min.js"><?php echo '</script'; ?>
>
		<!--- datapicker ---->
	
    	<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
    $('.datepicker').datepicker({      
        dateFormat: 'yy-mm-dd',
		showAnim: 'show',
		showButtonPanel: true
		       
    });
	
	//$('.datepicker').datepicker('setDate', new Date());
});

//$(function() {
//    $(".datepicker").datepicker();
//    $(".datepicker").datepicker("option", "showOn", 'button');
//    $(".datepicker").datepicker("option", "autoSize", 'true');
//    $(".datepicker").datepicker("option", "dateFormat", 'yy-mm-dd');
//    $(".datepicker").datepicker("option", "numberOfMonths", [1,2]);
//    $(".datepicker").datepicker("option", "showButtonPanel", 'true');
//    $(".datepicker").datepicker("option", "duration", 'slow');
//    $(".datepicker").datepicker("option", "showAnim", 'fade');
//    $(".datepicker").datepicker("option", "maxDate", '+1y');
//    $(".datepicker").datepicker("option", "minDate", '-1y');
//});
<?php echo '</script'; ?>
>

		<!---  Iphone style checkbox radio box  ---->
		<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready( function(){ 
	$(".cb-enable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-disable',parent).removeClass('selected');
		$(this).addClass('selected');
		$('.checkbox',parent).attr('checked', true);
	});
	$(".cb-disable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-enable',parent).removeClass('selected');
		$(this).addClass('selected');
		$('.checkbox',parent).attr('checked', false);
	});
});
 <?php echo '</script'; ?>
>
<!--- select2 --->    
<?php echo '<script'; ?>
 type="text/javascript" src="template/js/select2.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
        $(document).ready(function() { $("#e1").select2(); });
 <?php echo '</script'; ?>
>

		<!-- drop kick ---
<?php echo '<script'; ?>
 src="template/js/jquery.dropkick-1.0.0.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function() {
	$('.custom').dropkick({
	  theme: 'black'
	});
	$('.default').dropkick();
});
<?php echo '</script'; ?>
>
--->
		<!--- fancy select ---->
		<?php echo '<script'; ?>
 type="text/javascript" src="template/js/fancyselect.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			$(document).ready(function() {
				/* $('#basic-usage-demo').fancySelect(); */  
                 $('.fancy_sel').fancySelect()   
			/*	 $('#fancy_sel').fancySelect()     */

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
		<?php echo '</script'; ?>
>
		<!--- select box makerpulldown   -->
<?php echo '<script'; ?>
>
$(function(){
    $('#makerPulldown').change(function(){
        //document.open
		
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
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="JavaScript" type="text/JavaScript">
<!--
/****************************************************************
* 機　能： オブジェクトの表示非表示を制御する 2
*        （表示/非表示を指定する）
* 引　数： ch 表示/非表示を切り替えるオブジェクト名
* 　　　　 flg 表示非表示フラグ（0:非表示、1:表示）
* 戻り値： なし
****************************************************************/
function ChDsp(flg,ch){
    var obj=document.all && document.all(ch) || document.getElementById && document.getElementById(ch);
    if(obj && obj.style){
        if(flg){
            obj.style.display = "block";
        } else {
            obj.style.display = "none";
        }
    }
}
//-->
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="JavaScript" type="text/JavaScript">
<!--
/****************************************************************
* 機　能： オブジェクトの表示非表示を制御する 3
* 　　　　 （表示/非表示のオブジェクトを切り替える）
* 引　数： strShow 表示するオブジェクト名
* 　　　　 strHidden 非表示にするオブジェクト名
* 戻り値： なし
****************************************************************/
function ChDsp2(strShow,strHidden){
    var obj='';
    obj=document.all && document.all(strShow) || document.getElementById && document.getElementById(strShow);
    obj.style.display = "block";
    obj=document.all && document.all(strHidden) || document.getElementById && document.getElementById(strHidden);
    obj.style.display = "none";
	//オンロードさせ、リロード時に選択を保持
	//window.onload = chdsp2;
}
//-->
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
/****************************************************************
* 機　能： 発注票を非表示にする id=order_sheetxx
****************************************************************/
 $(document).ready(function() { 
    document.getElementById("order_sheetxx").style.display="none";
	});
<?php echo '</script'; ?>
>     
<!---
<?php echo '<script'; ?>
>
$(function(){
  //  if($('p#note070484907')) {
	if	($('#ksy').children($("p#note070484908"))) {
        $('p').text('見つかりました');
    } else {
        $('p').text('見つかりませんでした');
    }
});
<?php echo '</script'; ?>
>---> 

<!---  Iphone style checkbox radio box  ---->
<style>
.cb-enable, .cb-disable, .cb-enable span, .cb-disable span {
	background: url(template/img/switch_01.gif) repeat-x;
	display: block;
	float: left;
}
.cb-enable span, .cb-disable span {
	line-height: 30px;
	display: block;
	background-repeat: no-repeat;
	font-weight: bold;
}
.cb-enable span {
	background-position: left -90px;
	padding: 0 10px;
}
.cb-disable span {
	background-position: right -180px;
	padding: 0 10px;
}
.cb-disable.selected {
	background-position: 0 -30px;
}
.cb-disable.selected span {
	background-position: right -210px;
	color: #fff;
}
.cb-enable.selected {
	background-position: 0 -60px;
}
.cb-enable.selected span {
	background-position: left -150px;
	color: #fff;
}
.switch label {
	cursor: pointer;
}
</style>
<!--- maker pulldown --->
  <style type="text/css">
     .invisible{
    display: none;
     }
</style>
<!---  -->


<!--
 yearRange: '2010:2040'  
$(function(){
　$(".datepicker").datepicker();
});
$(function(){
    $('.datepicker').datepicker({
      
        dateFormat: 'yy-mm-dd',
		showAnim: 'show'
		
       
    });
});

$(function() {
	$(".datepicker").datepicker();
	$('.datepicker').datepicker("option", "dateFormat", 'yy-mm-dd' );

});
-->
</head>
<body>

<div style="color:red">
	<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['field_name']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br>
	<?php } ?>
</div>

<h1><?php echo $_smarty_tpl->tpl_vars['h1']->value;?>
</h1>

<!--
<input type="text" id="datepicker" style="width: 50px;" name="app_ymd_ww" />
-->
<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
 class="def" method='post'>
	<?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value['action']['html'];?>
  
<div id='detail_xx'>
	<dl>
        <!--- <dt><?php if ($_smarty_tpl->tpl_vars['form']->value['kaiko_ptn_kbn_c']['required']) {?><font color="red">*</font> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['kaiko_ptn_kbn_c']['label'];?>
</dt><dd><?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko_ptn_kbn_c']['html'];?>
</dd>  -->
	 <div style="float:left;">
        
         <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['p_id_c']['required']) {?><font color="red">*</font> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
</dd>
         <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['p_no_c']['required']) {?><font color="red">*</font> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['html'];?>
</dd>
         <dd style="background-color:#66ff66"><?php if ($_smarty_tpl->tpl_vars['form']->value['p_noxx_c']['required']) {?><font color="red">*</font> <?php }?><font color='blue'><?php echo $_smarty_tpl->tpl_vars['form']->value['p_noxx_c']['label'];?>
</font>  <?php echo $_smarty_tpl->tpl_vars['form']->value['p_noxx_c']['html'];?>
</dd>
          
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['required']) {?><font color="red">*</font> <?php }?>
             <?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['html'];?>
</dd>
        <!--
        <dd>kaiko: 
          <section id="basic-usage">
			<select id="basic-usage-demo" name="kaiko1"class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kaiko1_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['kaiko1']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
          </section>
       </dd>-->
       <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['required']) {?><font color="red">*</font><?php }?>
       <?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['html'];?>
</dd>
       <!---
        <dd>pmh_type: 
       <select name="pmh_type" size="<?php echo count($_smarty_tpl->tpl_vars['pmh_type_names']->value);?>
" class="fancy_sel">
            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['pmh_type_ids']->value,'output'=>$_smarty_tpl->tpl_vars['pmh_type_names']->value,'selected'=>$_smarty_tpl->tpl_vars['pmh_type']->value),$_smarty_tpl);?>

       </select></dd>--->
        <p></p>
	<!--	<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kaiko_ptn_kbn_c']['required']) {?><font color="red">*</font><?php }
echo $_smarty_tpl->tpl_vars['form']->value['kaiko_ptn_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['kaiko_ptn_kbn_c']['html'];?>
</dd>--->
		
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['p_nm_c']['required']) {?><font color="red">*</font><?php }?>
         <?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</dd>
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['required']) {?><font color="red">*</font><?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['html'];?>
 </dd> 
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['snk_kei_kbn_c']['required']) {?><font color="red">*</font><?php }?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['snk_kei_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['snk_kei_kbn_c']['html'];?>
</dd>
     <!--   <dd>新規継続：
        <select id="basic-usage-demo" name="snk_kei_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['snk_kei_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
             
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['snk_kei_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
         <p></p>
        </dd> --->
       <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['required']) {?><font color="red">*</font>
       <?php }
echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['html'];?>
</dd>
    <!---<dd>bsy_cd：
           <select name="bsy_cd" size="<?php echo count($_smarty_tpl->tpl_vars['bsy_names']->value);?>
" class="fancy_sel">
            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['bsy_ids']->value,'output'=>$_smarty_tpl->tpl_vars['bsy_names']->value,'selected'=>$_smarty_tpl->tpl_vars['bsy_cd']->value),$_smarty_tpl);?>

            </select> 
        </dd>
       </dd>--->
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kgo_cd_c']['required']) {?><font color="red">*</font>
        <?php }
echo $_smarty_tpl->tpl_vars['form']->value['kgo_cd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['kgo_cd_c']['html'];?>
</dd>
        
		<!--
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['ad_cd_c']['required']) {?><font color="red">*</font>  <?php }
echo $_smarty_tpl->tpl_vars['form']->value['ad_cd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['ad_cd_c']['html'];?>
</dd>
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['ad_nm_c']['required']) {?><font color="red">*</font>  <?php }
echo $_smarty_tpl->tpl_vars['form']->value['ad_nm_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['ad_nm_c']['html'];?>
</dd>   --->

		<dd>ＡＤ：
          <select name="ad_cd" id="e1" size=20 style="width:175px;" >
            <option value="def">-------------</option>
            
            
            
           <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['items']->value,'output'=>$_smarty_tpl->tpl_vars['items']->value,'selected'=>$_smarty_tpl->tpl_vars['ad_cd']->value),$_smarty_tpl);?>

        
          
          
          </select>
        </dd>
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['insatu_kgo_cd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['insatu_kgo_cd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['insatu_kgo_cd_c']['html'];?>
</dd>
        <!----  <dd>insatu_kgo_cd：
            <select name="insatu_kgo_cd" size="<?php echo count($_smarty_tpl->tpl_vars['insatu_kgo_names']->value);?>
" class="fancy_sel">
            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['insatu_kgo_ids']->value,'output'=>$_smarty_tpl->tpl_vars['insatu_kgo_names']->value,'selected'=>$_smarty_tpl->tpl_vars['insatu_kgo_cd']->value),$_smarty_tpl);?>

            </select>
        </dd>--->
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['all_crs_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['html'];?>
</dd>
        </div>
        <div style="float:left;">
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['required']) {?><font color="red">*</font> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['required']) {?><font color="red">*</font><?php }
echo $_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['tdantai_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['tdantai_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['tdantai_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['dantai_cd_knj_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['dantai_cd_knj_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['dantai_cd_knj_c']['html'];?>
</dd>
          <!---   <dd>dantai_knj：
            <select name="dantai_cd_knj" size="<?php echo count($_smarty_tpl->tpl_vars['dantai_knj_names']->value);?>
" class="fancy_sel">
            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['dantai_knj_ids']->value,'output'=>$_smarty_tpl->tpl_vars['dantai_knj_names']->value,'selected'=>$_smarty_tpl->tpl_vars['dantai_cd_knj']->value),$_smarty_tpl);?>

            </select>
        </dd> --->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pmh_size_kbn_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['pmh_size_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['pmh_size_kbn_c']['html'];?>
</dd>
          <!---		<dd>pmh_size：
        <select id="basic-usage-demo" name="pmh_size_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pmh_size_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
             
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['pmh_size_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
         </dd>--->
          
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['han_size_kbn_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['han_size_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['han_size_kbn_c']['html'];?>
</dd>
          <!---     <dd>han_size：
        <select id="basic-usage-demo" name="han_size_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['han_size_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
             
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['han_size_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
         </dd> --->
          <dd id="basic-usage-demo" name="card_type_kbn" class="fancy_sel"><?php if ($_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['html'];?>
</dd>
          <!---<dd>card_type_kbn：
            <select name="card_type_kbn" size="<?php echo count($_smarty_tpl->tpl_vars['card_type_names']->value);?>
" class="fancy_sel">
            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['card_type_ids']->value,'output'=>$_smarty_tpl->tpl_vars['card_type_names']->value,'selected'=>$_smarty_tpl->tpl_vars['card_type_kbn']->value),$_smarty_tpl);?>

            </select>
        </dd>--->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['html'];?>
</dd>
          <!---    <dd>card_hyojun_kbn：
        <select id="basic-usage-demo" name="card_hyojun_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['card_hyojun_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
             
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['card_hyojun_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd> --->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pmh_items_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['pmh_items_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['pmh_items_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pos_items_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['pos_items_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['pos_items_c']['html'];?>
</dd>
        </div>
        <div style="float:left;">
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['bes_items_c']['required']) {?><font color="red">*</font> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['bes_items_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['bes_items_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['etc_items_c']['required']) {?><font color="red">*</font><?php }
echo $_smarty_tpl->tpl_vars['form']->value['etc_items_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['etc_items_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['noh_items_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['noh_items_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['noh_items_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pos_type_kbn_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['pos_type_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['pos_type_kbn_c']['html'];?>
</dd>
          <!---<dd>pos_type_kbn：
        <select id="basic-usage-demo" name="pos_type_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pos_type_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['pos_type_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>--->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['bes_type_kbn_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['bes_type_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['bes_type_kbn_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['etc_type_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['etc_type_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['etc_type_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['noh_kbn_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['noh_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['noh_kbn_c']['html'];?>
</dd>
          <!---<dd>noh_kbn：
        <select id="basic-usage-demo" name="noh_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noh_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['noh_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>--->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['noh_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['noh_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['noh_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['uke_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['uke_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['uke_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['ryo_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['ryo_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['ryo_ymd_c']['html'];?>
</dd>
        </div>
        <div style="float:left;">
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['hac_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['hac_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['hac_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['shoko_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['shoko_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['shoko_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['shoko_sof_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['shoko_sof_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['shoko_sof_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['shoko_return_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['shoko_return_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['shoko_return_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['saiko_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['saiko_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['saiko_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['saiko_sof_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['saiko_sof_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['saiko_sof_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['ko3_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['ko3_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['ko3_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sekryo_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['sekryo_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sekryo_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['moji_kosei_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['moji_kosei_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['moji_kosei_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['color_kosei_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_ymd_c']['html'];?>
</dd>
        </div>
        <div style="float:left;">
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sof_irai_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['sof_irai_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sof_irai_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['fax_nenko_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['fax_nenko_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['fax_nenko_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sof_yotei_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['sof_yotei_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sof_yotei_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['shoko_seki_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['shoko_seki_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['shoko_seki_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['saiko_yotei_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['saiko_yotei_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['saiko_yotei_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sek_yotei_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['sek_yotei_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sek_yotei_ymd_c']['html'];?>
</dd>
          <!--<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['html'];?>
</dd>-->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['color_kosei_kbn_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_kbn_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['this_year_sales_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['this_year_sales_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['this_year_sales_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['this_year_cost_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['this_year_cost_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['this_year_cost_c']['html'];?>
</dd>
          <!--
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sanno_cost_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['sanno_cost_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sanno_cost_c']['html'];?>
</dd>
        ---> 
        </div>
        <!---   --->
        <div style="clear: both;"></div>
        <p>-------------------------------------------------------------------------------</p>
        <div style="float:left;">
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pmh_cost_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['pmh_cost_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['pmh_cost_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['post_cost_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['post_cost_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['post_cost_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['bes_cost_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['bes_cost_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['bes_cost_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sanno_keisai_cost_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['sanno_keisai_cost_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sanno_keisai_cost_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sek_knr_kbn_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['sek_knr_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sek_knr_kbn_c']['html'];?>
</dd>
          <!---<dd>sek_knr_kbn：
            <select name="sek_knr_kbn" size="<?php echo count($_smarty_tpl->tpl_vars['sek_knr_names']->value);?>
" class="fancy_sel">
            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['sek_knr_ids']->value,'output'=>$_smarty_tpl->tpl_vars['sek_knr_names']->value,'selected'=>$_smarty_tpl->tpl_vars['sek_knr_kbn']->value),$_smarty_tpl);?>

            </select>
        </dd>-->
       
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['tdan_sek_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['tdan_sek_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['tdan_sek_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['any_cost_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['any_cost_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['any_cost_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['bunrui_kbn_c']['required']) {?><font color="red">*</font> <?php }?>
             <?php echo $_smarty_tpl->tpl_vars['form']->value['bunrui_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['bunrui_kbn_c']['html'];?>
</dd>
        <!--<dd>bunrui_kbn：
          <select id="basic-usage-demo" name="bunrui_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bunrui_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['bunrui_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>-->
        <dd><?php if ($_smarty_tpl->tpl_vars['sek_ng_kbn_c']->value['required']) {?><font color="red">*</font> <?php }?>
             <?php echo $_smarty_tpl->tpl_vars['form']->value['sek_ng_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sek_ng_kbn_c']['html'];?>
</dd>
        <!---<dd>sek_ng_kbn：
            <select name="sek_ng_kbn" size="<?php echo count($_smarty_tpl->tpl_vars['sek_ng_names']->value);?>
" class="fancy_sel">
            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['sek_ng_ids']->value,'output'=>$_smarty_tpl->tpl_vars['sek_ng_names']->value,'selected'=>$_smarty_tpl->tpl_vars['sek_ng_kbn']->value),$_smarty_tpl);?>

            </select>
        </dd>--->
         <dd><?php if ($_smarty_tpl->tpl_vars['kgo_sek_kbn_c']->value['required']) {?><font color="red">*</font> <?php }?>
             <?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_sek_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['kgo_sek_kbn_c']['html'];?>
</dd>   
		<!---<dd>kgo_sek_kbn：
            <select name="kgo_sek_kbn" size="<?php echo count($_smarty_tpl->tpl_vars['kgo_sek_names']->value);?>
" class="fancy_sel">
            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['kgo_sek_ids']->value,'output'=>$_smarty_tpl->tpl_vars['kgo_sek_names']->value,'selected'=>$_smarty_tpl->tpl_vars['kgo_sek_kbn']->value),$_smarty_tpl);?>

            </select>
        </dd>---> 
        <dd><?php if ($_smarty_tpl->tpl_vars['data_select_kbn_c']->value['required']) {?><font color="red">*</font> <?php }?>
             <?php echo $_smarty_tpl->tpl_vars['form']->value['data_select_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['data_select_kbn_c']['html'];?>
</dd> 
     <!---<dd>data_select_kbn：
          <select id="basic-usage-demo" name="data_select_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_select_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['data_select_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>--->
      </div> 
       <div style="float:left;">
       <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['web_pmh_kbn_c']['required']) {?><font color="red">*</font> <?php }?>
             <?php echo $_smarty_tpl->tpl_vars['form']->value['web_pmh_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['web_pmh_kbn_c']['html'];?>
</dd>
 <!--   <dd>web_pmh_kbn：
            <select name="web_pmh_kbn" size="<?php echo count($_smarty_tpl->tpl_vars['web_pmh_names']->value);?>
" class="fancy_sel">
            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['web_pmh_ids']->value,'output'=>$_smarty_tpl->tpl_vars['web_pmh_names']->value,'selected'=>$_smarty_tpl->tpl_vars['web_pmh_kbn']->value),$_smarty_tpl);?>

            </select>
        </dd> --->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sho_sof_kbn_c']['required']) {?><font color="red">*</font> <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['sho_sof_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sho_sof_kbn_c']['html'];?>
</dd>
          <!---<dd>sho_sof_kbn：
          <select id="basic-usage-demo" name="sho_sof_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sho_sof_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['sho_sof_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>--->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kgo_ren_kbn_c']['required']) {?><font color="red">*</font> <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_ren_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['kgo_ren_kbn_c']['html'];?>
</dd>
          <!---<dd>kgo_ren_kbn：
          <select id="basic-usage-demo" name="kgo_ren_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kgo_ren_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['kgo_ren_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>--->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kjn_inf_kbn_c']['required']) {?><font color="red">*</font> <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['kjn_inf_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['kjn_inf_kbn_c']['html'];?>
</dd>
          <!--   <dd>kjn_inf_kbn：
          <select id="basic-usage-demo" name="kjn_inf_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kjn_inf_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['kjn_inf_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>  --->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['cansel_policy_kbn_c']['required']) {?><font color="red">*</font> <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_policy_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['cansel_policy_kbn_c']['html'];?>
</dd>
          <!--   <dd>cancel_policy_kbn：
          <select id="basic-usage-demo" name="cancel_policy_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cancel_policy_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['cancel_policy_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>  --->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['e_learning_kbn_c']['required']) {?><font color="red">*</font> <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['e_learning_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['e_learning_kbn_c']['html'];?>
</dd>
          <!--   <dd>e_leaning_kbn：
          <select id="basic-usage-demo" name="e_learning_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['e_learning_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['e_learning_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>--->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kyufu_kbn_c']['required']) {?><font color="red">*</font> <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['kyufu_kbn_c']['html'];?>
</dd>
          <!--    <dd>kyufu_kbn：
          <select id="basic-usage-demo" name="kyufu_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kyufu_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['kyufu_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>--->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['contact_kbn_c']['required']) {?><font color="red">*</font> <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['contact_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['contact_kbn_c']['html'];?>
</dd>
          <!---      <dd>contact_kbn：
          <select id="basic-usage-demo" name="contact_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contact_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['contact_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>--->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['old_crs_kbn_c']['required']) {?><font color="red">*</font> <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['old_crs_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['old_crs_kbn_c']['html'];?>
</dd>
          <!--     <dd>old_crs_kbn：
          <select id="basic-usage-demo" name="old_crs_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['old_crs_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['old_crs_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>--->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['special_kbn_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['special_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['special_kbn_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['rental_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['rental_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['rental_c']['html'];?>
</dd>
        </div>
        <div style="float:left;">
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['memos_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['memos_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['memos_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['web_pmh_url_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['web_pmh_url_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['web_pmh_url_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['id_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['id_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['id_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pass_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['pass_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['pass_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['dl_kbn_c']['required']) {?><font color="red">*</font> <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['dl_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['dl_kbn_c']['html'];?>
</dd>
          <!---      <dd>dl_kbn：
          <select id="basic-usage-demo" name="dl_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dl_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['dl_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>--->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['nik_bp_kbn_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['nik_bp_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['nik_bp_kbn_c']['html'];?>
</dd>
          <!--    <dd>nik_bp_kbn：
          <select id="basic-usage-demo" name="nik_bp_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nik_bp_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['nik_bp_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>-->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['web_noh_kbn_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['web_noh_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['web_noh_kbn_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['ker_cd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['ker_cd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['ker_cd_c']['html'];?>
</dd>
        </div>
        <div style="float:left;"> 
          <!---  
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kyufu_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['kyufu_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['kyufu_chk_c']['html'];?>
</dd>
		 <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['cansel_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['cansel_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['cansel_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['dan_adr_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['dan_adr_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['dan_adr_chk_c']['html'];?>
</dd>
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['zai_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['zai_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['zai_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['saij_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['saij_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['saij_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['e_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['e_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['e_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sku_inf_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['sku_inf_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sku_inf_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['one_p_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['one_p_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['one_p_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['juryo_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['juryo_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['juryo_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['juko_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['juko_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['juko_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['eig_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['eig_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['eig_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['lbl_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['lbl_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['lbl_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sku_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['sku_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sku_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['nani_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['nani_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['nani_chk_c']['html'];?>
</dd>
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kmk_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['kmk_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['kmk_chk_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['etc_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['etc_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['etc_chk_c']['html'];?>
</dd>-->
        
      </div>
        <div style="clear: both;"></div>
       <p>-------------------------------------------------------------------------------</p>       
      <div style="float:left;">
        
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['tdan_kyufu_memo_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['tdan_kyufu_memo_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['tdan_kyufu_memo_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['tdan_zai_memo_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['tdan_zai_memo_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['tdan_zai_memo_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['tdan_one_p_memo_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['tdan_one_p_memo_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['tdan_one_p_memo_c']['html'];?>
</dd>
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['tdan_etc_memo_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['tdan_etc_memo_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['tdan_etc_memo_c']['html'];?>
</dd>
<!---	<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['ksy_cd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['ksy_cd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['ksy_cd_c']['html'];?>
</dd>--->
         
         <dd>ksy_cd：
            <select name="ksy_cd" size="<?php echo count($_smarty_tpl->tpl_vars['ksy_names']->value);?>
" id="makerPulldown" class="fancy_sel">
            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ksy_ids']->value,'output'=>$_smarty_tpl->tpl_vars['ksy_names']->value,'selected'=>$_smarty_tpl->tpl_vars['ksy_cd']->value),$_smarty_tpl);?>

             
            </select>
        </dd>
         <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pmh_cycle_kbn_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['pmh_cycle_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['pmh_cycle_kbn_c']['html'];?>
</dd>
      <!--   <dd>pmh_cycle_kbn：
          <select id="basic-usage-demo" name="pmh_cycle_kbn" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pmh_cycle_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['pmh_cycle_kbn']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>-->
		<dd><?php if ($_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['html'];?>
</dd>
      </div>
       <div style="float:left;">
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['cansel_chk_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['cansel_chk_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['cansel_chk_c']['html'];?>
</dd>
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['html'];?>
</dd>
        <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['deli_type_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['deli_type_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['deli_type_c']['html'];?>
</dd>
     <!--   <dd>deli_type：
          <select id="basic-usage-demo" name="deli_type" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deli_type_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['deli_type']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>--->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['hyosi_colors_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['hyosi_colors_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['hyosi_colors_c']['html'];?>
</dd>
          <!---   <dd>hyosi_colors：
          <select id="basic-usage-demo" name="hyosi_colors" class="fancy_sel">
		     <option value="">Select Section !</option>
               <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hyosi_colors_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
                  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value,'selected'=>$_smarty_tpl->tpl_vars['hyosi_colors']->value),$_smarty_tpl);?>

               <?php } ?>
			</select>
        </dd>--->
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['p_nd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['upd_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['upd_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['upd_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['cre_ymd_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['cre_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['cre_ymd_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pmh_type_dantai_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_dantai_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_dantai_c']['html'];?>
</dd>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['insatu_dantai_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['insatu_dantai_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['insatu_dantai_c']['html'];?>
</dd>
        </div>
        <div style="float:left;">
          <dd><?php echo $_smarty_tpl->tpl_vars['form']->value['all_page_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['all_page_c']['html'];?>
</dd>
          <dd><?php echo $_smarty_tpl->tpl_vars['form']->value['com_page_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['com_page_c']['html'];?>
</dd>
          <dd><?php echo $_smarty_tpl->tpl_vars['form']->value['sho_page_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sho_page_c']['html'];?>
</dd>
          <a>------以下は　参照のみ----(t_pmh_sek01)</a>
          <dd><?php echo $_smarty_tpl->tpl_vars['form']->value['senyu_page_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['senyu_page_c']['html'];?>
</dd>
          <dd><?php echo $_smarty_tpl->tpl_vars['form']->value['page_tanka_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['page_tanka_c']['html'];?>
</dd>
          <dd><?php echo $_smarty_tpl->tpl_vars['form']->value['sekyymm_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sekyymm_c']['html'];?>
</dd>
          <dd><?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_cost_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sanno_cost_c']['html'];?>
</dd>
          <dd><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_cost_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['etc_cost_c']['html'];?>
</dd>
          <dd><?php echo $_smarty_tpl->tpl_vars['form']->value['mng_cost_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['mng_cost_c']['html'];?>
</dd>
          <dd><?php echo $_smarty_tpl->tpl_vars['form']->value['com_cost_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['com_cost_c']['html'];?>
</dd>
          <dd><?php echo $_smarty_tpl->tpl_vars['form']->value['sho_cost_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sho_cost_c']['html'];?>
</dd>
          <!-- <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['required']) {?> <?php }
echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['html'];?>
</dd> --> 
          
        </div>
        <div style="clear: both;"></div>
        <p class="field switch"  ><span>kyufu_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[0]==1) {?>
          <input type="radio" id="kyufu_chk_on" name="kyufu_chk_c" value =1 checked />
          On
          <input type="radio" id="kyufu_chk_off" name="kyufu_chk_c" value =0 />
          Off
          <label for="kyufu_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="kyufu_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="kyufu_chk_on" name="kyufu_chk_c" value =1 />
          On
          <input type="radio" id="kyufu_chk_off" name="kyufu_chk_c" value =0 checked />
          Off
          <label for="kyufu_chk_on" class="cb-enable"><span>On</span></label>
          <label for="kyufu_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> 
          <!--
        <input type="radio" id="kyufu_chk_on" name="kyufu_chk_c" value =1 checked = <?php echo $_smarty_tpl->tpl_vars['xxxx']->value;?>
/>
         On
        <input type="radio" id="kyufu_chk_off" name="kyufu_chk_c" value =0  checked = <?php echo $_smarty_tpl->tpl_vars['xxxx']->value;?>
/>
         Off  ---> 
          
        </p>
        <!-- --->
        <p class="field switch"><span>cancel_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[1]==1) {?>
          <input type="radio" id="cansel_chk_on" name="cansel_chk_c" value =1 checked />
          On
          <input type="radio" id="cansel_chk_off" name="cansel_chk_c" value =0 />
          Off
          <label for="cansel_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="cansel_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="cansel_chk_on" name="cansel_chk_c" value =1 />
          On
          <input type="radio" id="cansel_chk_off" name="cansel_chk_c" value =0 checked />
          Off
          <label for="cansel_chk_on" class="cb-enable"><span>On</span></label>
          <label for="cansel_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
        <!-- --->
        <p class="field switch"><span>dan_adr_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[2]==1) {?>
          <input type="radio" id="dan_adr_chk_on" name="dan_adr_chk_c" value =1 checked />
          On
          <input type="radio" id="dan_adr_chk_off" name="dan_adr_chk_c" value =0 />
          Off
          <label for="dan_adr_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="dan_adr_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="dan_adr_chk_on" name="dan_adr_chk_c" value =1 />
          On
          <input type="radio" id="dan_adr_chk_off" name="dan_adr_chk_c" value =0 checked />
          Off
          <label for="dan_adr_chk_on" class="cb-enable"><span>On</span></label>
          <label for="dan_adr_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
        <!-- --->
        <p class="field switch"><span>zai_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[3]==1) {?>
          <input type="radio" id="zai_chk_on" name="zai_chk_c" value =1 checked />
          On
          <input type="radio" id="zai_chk_off" name="zai_chk_c" value =0 />
          Off
          <label for="zai_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="zai_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="zai_chk_on" name="zai_chk_c" value =1 />
          On
          <input type="radio" id="zai_chk_off" name="zai_chk_c" value =0 checked />
          Off
          <label for="zai_chk_on" class="cb-enable"><span>On</span></label>
          <label for="zai_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
        <!-- --->

        <p class="field switch"><span>saij_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[4]==1) {?>
          <input type="radio" id="saij_chk_on" name="saij_chk_c" value =1 checked />
          On
          <input type="radio" id="saij_chk_off" name="saij_chk_c" value =0 />
          Off
          <label for="saij_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="saij_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="saij_chk_on" name="saij_chk_c" value =1 />
          On
          <input type="radio" id="saij_chk_off" name="saij_chk_c" value =0 checked />
          Off
          <label for="saij_chk_on" class="cb-enable"><span>On</span></label>
          <label for="saij_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
        <!-- --->
        <p class="field switch"><span>e_adr: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[5]==1) {?>
          <input type="radio" id="e_chk_on" name="e_chk_c" value =1 checked />
          On
          <input type="radio" id="e_chk_off" name="e_chk_c" value =0 />
          Off
          <label for="e_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="e_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="e_chk_on" name="e_chk_c" value =1 />
          On
          <input type="radio" id="e_chk_off" name="e_chk_c" value =0 checked />
          Off
          <label for="e_chk_on" class="cb-enable"><span>On</span></label>
          <label for="e_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
        <!-- --->
        <p class="field switch"><span>sku_inf_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[6]==1) {?>
          <input type="radio" id="sku_inf_chk_on" name="sku_inf_chk_c" value =1 checked />
          On
          <input type="radio" id="sku_inf_chk_off" name="sku_inf_chk_c" value =0 />
          Off
          <label for="sku_inf_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="sku_inf_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="sku_inf_chk_on" name="sku_inf_chk_c" value =1 />
          On
          <input type="radio" id="sku_inf_chk_off" name="sku_inf_chk_c" value =0 checked />
          Off
          <label for="sku_inf_chk_on" class="cb-enable"><span>On</span></label>
          <label for="sku_inf_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
        <!-- --->
        <p class="field switch"><span>one_p_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[7]==1) {?>
          <input type="radio" id="one_p_chk_on" name="one_p_chk_c" value =1 checked />
          On
          <input type="radio" id="one_p_chk_off" name="one_p_chk_c" value =0 />
          Off
          <label for="one_p_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="one_p_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="one_p_chk_on" name="one_p_chk_c" value =1 />
          On
          <input type="radio" id="one_p_chk_off" name="one_p_chk_c" value =0 checked />
          Off
          <label for="one_p_chk_on" class="cb-enable"><span>On</span></label>
          <label for="one_p_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
        <!-- --->
        <p class="field switch"><span>juryo_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[8]==1) {?>
          <input type="radio" id="juryo_chk_on" name="juryo_chk_c" value =1 checked />
          On
          <input type="radio" id="juryo_chk_off" name="juryo_chk_c" value =0 />
          Off
          <label for="juryo_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="juryo_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="juryo_chk_on" name="juryo_chk_c" value =1 />
          On
          <input type="radio" id="juryo_chk_off" name="juryo_chk_c" value =0 checked />
          Off
          <label for="juryo_chk_on" class="cb-enable"><span>On</span></label>
          <label for="juryo_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
        <!-- ---> 
        <!-- --->
        <p class="field switch"><span>juko_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[9]==1) {?>
          <input type="radio" id="juko_chk_on" name="juko_chk_c" value =1 checked />
          On
          <input type="radio" id="juko_chk_off" name="juko_chk_c" value =0 />
          Off
          <label for="juko_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="juko_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="juko_chk_on" name="juko_chk_c" value =1 />
          On
          <input type="radio" id="juko_chk_off" name="juko_chk_c" value =0 checked />
          Off
          <label for="juko_chk_on" class="cb-enable"><span>On</span></label>
          <label for="juko_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
        <!-- --->
        <p class="field switch"><span>eig_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[10]==1) {?>
          <input type="radio" id="eig_chk_on" name="eig_chk_c" value =1 checked />
          On
          <input type="radio" id="eig_chk_off" name="eig_chk_c" value =0 />
          Off
          <label for="eig_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="eig_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="eig_chk_on" name="eig_chk_c" value =1 />
          On
          <input type="radio" id="eig_chk_off" name="eig_chk_c" value =0 checked />
          Off
          <label for="eig_chk_on" class="cb-enable"><span>On</span></label>
          <label for="eig_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
        <!-- --->
        <p class="field switch"><span>lbl_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[11]==1) {?>
          <input type="radio" id="lbl_chk_on" name="lbl_chk_c" value =1 checked />
          On
          <input type="radio" id="lbl_chk_off" name="lbl_chk_c" value =0 />
          Off
          <label for="lbl_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="lbl_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="lbl_chk_on" name="lbl_chk_c" value =1 />
          On
          <input type="radio" id="lbl_chk_off" name="lbl_chk_c" value =0 checked />
          Off
          <label for="lbl_chk_on" class="cb-enable"><span>On</span></label>
          <label for="lbl_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
        <!-- --->
        <p class="field switch"><span>sku_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[12]==1) {?>
          <input type="radio" id="sku_chk_on" name="sku_chk_c" value =1 checked />
          On
          <input type="radio" id="sku_chk_off" name="sku_chk_c" value =0 />
          Off
          <label for="sku_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="sku_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="sku_chk_on" name="sku_chk_c" value =1 />
          On
          <input type="radio" id="sku_chk_off" name="sku_chk_c" value =0 checked />
          Off
          <label for="sku_chk_on" class="cb-enable"><span>On</span></label>
          <label for="sku_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
        <!-- --->
        <p class="field switch"><span>nani_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[13]==1) {?>
          <input type="radio" id="nani_chk_on" name="nani_chk_c" value =1 checked />
          On
          <input type="radio" id="nani_chk_off" name="nani_chk_c" value =0 />
          Off
          <label for="nani_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="nani_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="nani_chk_on" name="nani_chk_c" value =1 />
          On
          <input type="radio" id="nani_chk_off" name="nani_chk_c" value =0 checked />
          Off
          <label for="nani_chk_on" class="cb-enable"><span>On</span></label>
          <label for="nani_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
        <!-- --->
        <p class="field switch"><span>kmk_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[14]==1) {?>
          <input type="radio" id="kmk_chk_on" name="kmk_chk_c" value =1 checked />
          On
          <input type="radio" id="kmk_chk_off" name="kmk_chk_c" value =0 />
          Off
          <label for="kmk_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="kmk_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="kmk_chk_on" name="kmk_chk_c" value =1 />
          On
          <input type="radio" id="kmk_chk_off" name="kmk_chk_c" value =0 checked />
          Off
          <label for="kmk_chk_on" class="cb-enable"><span>On</span></label>
          <label for="kmk_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
        <!-- --->
        <p class="field switch"><span>etc_chk: </span> <?php if ($_smarty_tpl->tpl_vars['chk_array']->value[15]==1) {?>
          <input type="radio" id="etc_chk_on" name="etc_chk_c" value =1 checked />
          On
          <input type="radio" id="etc_chk_off" name="etc_chk_c" value =0 />
          Off
          <label for="etc_chk_on" class="cb-enable selected"><span>On</span></label>
          <label for="etc_chk_off" class="cb-disable"><span>Off</span></label>
          <?php } else { ?>
          <input type="radio" id="etc_chk_on" name="etc_chk_c" value =1 />
          On
          <input type="radio" id="etc_chk_off" name="etc_chk_c" value =0 checked />
          Off
          <label for="etc_chk_on" class="cb-enable"><span>On</span></label>
          <label for="etc_chk_off" class="cb-disable selected"><span>Off</span></label>
          <?php }?> </p>
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
          </td>
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
        <!-----
        <div id="sample">
         <div class="text">
           <p>サンプルです</p>
         </div>
        </div>
        <div id="kekka">ここに判断結果を表示します</div> --->

        <div style="clear: both;"></div>
        <dt></dt>
        <!--
        <dd><?php if ($_smarty_tpl->tpl_vars['insertflag']->value!=true) {
echo $_smarty_tpl->tpl_vars['form']->value['buttons']['send']['html'];
}
echo $_smarty_tpl->tpl_vars['form']->value['buttons']['insert']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['buttons']['reset']['html'];?>

        -->
        <dd><?php if ($_smarty_tpl->tpl_vars['insertflag']->value!=true) {
echo $_smarty_tpl->tpl_vars['form']->value['buttons']['send']['html'];
}
echo $_smarty_tpl->tpl_vars['form']->value['buttons']['reset']['html'];?>

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
          <input type="button" onclick="location.href='index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'" value="戻る" />
          <?php } else { ?>
          <input type="button" onclick="location.href='index.php'" value="戻る" />
          <?php }?> </dd>
        </dl>
        <div style="color:red"> <?php  $_smarty_tpl->tpl_vars['itemdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['err_01']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemdata']->key => $_smarty_tpl->tpl_vars['itemdata']->value) {
$_smarty_tpl->tpl_vars['itemdata']->_loop = true;
?>
          <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['itemdata']->value,'output'=>$_smarty_tpl->tpl_vars['itemdata']->value),$_smarty_tpl);?>

          <?php } ?> </div>
        </div>
        </form>
        <form method="post">
      
        <div class='order_sheetxx' id='order_sheetxx'>
          <section class="window" >
            <div class="window-titlebar"> <a href="index.html" class="window-titlebar-button">Close</a> <a href="index.html" class="window-titlebar-button">Minimize</a> <a href="index.html" class="window-titlebar-button">Zoom</a> </div>
            <ul class="window-toolbar">
              <!---
      <li class="window-toolbar-button active"><a href="index.html" class="icon-settings">Settings</a></li>
      <li class="window-toolbar-button"><a href="index.html" class="icon-cloud">Cloud</a></li>
      <P><?php echo $_smarty_tpl->tpl_vars['p_nm']->value;?>
</P> --->
             <p><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</p>
            </ul>
            <div class="window-body">
              <label for="one" class="sswitch-container">
              Pamphlet 発注票:
              <input type="checkbox" id="one" name="order_sht01" value="1" class="sswitch-input" checked>
              <div class="sswitch"> <span class="sswitch-label">On</span> <span class="sswitch-label">Off</span> <span class="sswitch-handle"></span> </div>
              </label>
              <label for="two" class="sswitch-container">
              Pamphlet 情報:
              <input type="checkbox" id="two" name="pamph_inf01" value="1" class="sswitch-input">
              <div class="sswitch"> <span class="sswitch-label">On</span> <span class="sswitch-label">Off</span> <span class="sswitch-handle"></span> </div>
              </label>
              <label for="three" class="sswitch-container">
              xxxxxxxx:
              <input type="checkbox" id="three" name="three" value="1" class="sswitch-input">
              <div class="sswitch"> <span class="sswitch-label">On</span> <span class="sswitch-label">Off</span> <span class="sswitch-handle"></span> </div>
              </label>
            </div>
          </section>
          <td><input type="submit" value="   Print   " id ="ordr_sheet01" name="order_sheet01"></td>
          <!--
      <td>form name="addlist_f2" method="post" action="index.php?module=order_sheet01&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
           <td><input type="submit" value="発注票Print" name="order_sheet01"></td>
        </form>--->
          <td><input type="button" value="  Return  " onClick="ChDsp2('detail_xx','order_sheetxx');">
            </td>
        </div>
        </form>
<?php if ($_smarty_tpl->tpl_vars['form']->value['requirednote']&&!$_smarty_tpl->tpl_vars['form']->value['frozen']) {?>
	<?php echo $_smarty_tpl->tpl_vars['form']->value['requirednote'];?>

<?php }?>

	

</body>
</html>
 <?php }} ?>
