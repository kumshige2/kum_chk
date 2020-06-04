<?php /* Smarty version Smarty-3.1.18, created on 2015-01-07 15:08:22
         compiled from ".\template\address_setting_singlepager03.html" */ ?>
<?php /*%%SmartyHeaderCode:22852549b7337c4a258-63657154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8c0a42a791e103a1a4e2f598141bcd74fb862fd' => 
    array (
      0 => '.\\template\\address_setting_singlepager03.html',
      1 => 1420610897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22852549b7337c4a258-63657154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_549b7337d19335_84386565',
  'variables' => 
  array (
    'title' => 0,
    'form' => 0,
    'ary_ad_ids' => 0,
    'ary_ad_names' => 0,
    'ad_cd' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549b7337d19335_84386565')) {function content_549b7337d19335_84386565($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\php\\pear\\Smarty\\libs\\plugins\\function.html_options.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--<meta name="viewport" content="width=device-width, initial-scale=1" />--->
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" href="template/css/select2_01.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="template/gridster/dist/jquery.gridster.css">
<link rel="stylesheet" type="text/css" href="template/gridster/dist/demo.css">
<link href="template/datepicker/css/glDatePicker.default.css" rel="stylesheet" type="text/css">
<link href="template/datepicker/css/glDatePicker.darkneon.css" rel="stylesheet" type="text/css">
<!-- custom drop---->
 <link rel="stylesheet" type="text/css" href="template/custom_drop/css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="template/custom_drop/js/modernizr.custom.79639.js"></script> 
		<noscript><link rel="stylesheet" type="text/css" href="template/custom_drop/css/noJS.css" /></noscript>

<!---
<link type="text/css" href="template/css/select2.css" rel="stylesheet"/>
<link type="text/css" href="template/css/fancyselect.css" rel="stylesheet">--->
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.jse"></script>
<!---
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  --->
<script type ="text/javascript"
                src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="template/customselect/js/jquery.customSelect.js"></script>
<script type="text/javascript">
$(function(){

$('select.styled').customSelect();

});
<!---- select 2 ------>
</script>
<script type="text/javascript" src="template/js/select2_01.js"></script>
<script>
        $(document).ready(function() {
          //  $("#states").select2();
			 $(".states").select2();     
        });
    </script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<title>Single Page Nav Demo</title>
<style>
body {
	margin: 1.25em 0 75em;
	padding: 0;
	font-size: 100%;
	font-family: sans-serif;
}
a {
	outline: 0;
}
.single-page-nav {
	background: #000;
	/*--padding: 1.25em 0;---*/
	padding: 0.6em 0;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
}
.single-page-nav ul {
	list-style: none;
	padding: 0;
	margin: 0 auto;
	width: 80%;
	overflow: hidden;
}
.single-page-nav li {
	float: left;
	width: 24.75%;
	text-align: center;
}
.single-page-nav a {
	display: block;
	color: #fff;
	text-decoration: none;
	font-size: 1.5em;
	font-weight: 700;
}
.single-page-nav a:hover, .single-page-nav .current {
	color: #38acec;
}
.section {
	width: 80%;
	padding: 1.25em 0;
	margin: 0 auto;
	background: #eee;
	border-top: 1px solid #bbb;
}
#section1 {
	padding-top: 5em;
}
 @media all and (max-width : 64em) { /* 1024px */
body {
	font-size: 90%;
}
.single-page-nav a {
	font-size: 1.375em;
}
.section {
	width: 90%;
}
}
 @media all and (max-width : 37.5em) { /* 600px */
.single-page-nav a {
	font-size: 125%;
}
.single-page-nav ul {
	width: 95%;
}
.single-page-nav li {
	width: 50%;
	padding: 0.5em 0;
}
.section {
	width: 95%;
}
#section1 {
	padding-top: 7.5em;
}
}
span.customSelect {
	font-size: 14px;
	width: 175px;
	background-color: #cccccc;   /*background-color: #f5f0de;  */
	color: #7c7c7c;
	padding: 5px 7px;
	border: 1px solid #e7dab0;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px 5px;
}
span.customSelect.changed {
	background-color: #f0dea4;
}
.customSelectInner {
	background: url(template/customselect/img/customSelect-arrow.gif) no-repeat right;
}
</style>
<style>
.easy_sel {
  background: #FFFDF4;
  border: 2px solid #D2BA85;
  border-radius: 5px;
  color: #0C2245;
  font-size: 14px;
  height: 30px;
  line-height: 30px;
  text-align: left;
  text-indent: 5px;
  vertical-align: middle;
  width: 140px;
}


</style>

</head>
<body>
<div class="single-page-nav">
  <ul>
    <li><a href="#section1">Section 1</a></li>
    <li><a href="#section2">Section 2</a></li>
    <li><a href="#section3">Section 3</a></li>
    <li><a class="external" href="http://google.com" target="_blank">Google</a></li>
  </ul>
</div>
<div class="section" id="section1">
  <h1>Section 1</h1>
   <div class="infoData"> 
              <!-- ↓表ここから↓ -->
              <table>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['label'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
-<?php echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['html'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['label'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['html'];?>
</td>
                  <td>AD:</td>
                  <td><select  class="states"  style="width:175px;">
                      
    
     <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ary_ad_ids']->value,'output'=>$_smarty_tpl->tpl_vars['ary_ad_names']->value,'selected'=>$_smarty_tpl->tpl_vars['ad_cd']->value),$_smarty_tpl);?>
  
  
  
                    </select></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['label'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['html'];?>
</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>A-1</td>
                  <td>B-1</td>
                  <td>C-1</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>A-2</td>
                  <td>B-2</td>
                  <td>C-2</td>
                </tr>
                <tr>
                  <td>合計</td>
                  <td>A合計</td>
                  <td>B合計</td>
                  <td>C合計</td>
                </tr>
              </table>
              
              <!-- ↑表ここまで↑ --> 
              
              <!-- ↓補足説明↓ -->
              <p>◎ なんば駅から徒歩５分です。<br>
                ◎ 駐車場完備！<br>
                ◎ △△△ビルが目印です。</p>
            </div>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget enim eu mi volutpat ullamcorper et ut magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus nec sagittis massa. Vivamus ut tellus tellus. Donec in odio eget elit suscipit tincidunt ac eu lacus. Proin interdum sagittis diam, eu aliquam libero tristique at. Fusce elementum, velit eget consequat facilisis, nunc tellus condimentum velit, bibendum iaculis lectus tellus sed sem. Vivamus dapibus tellus at mauris mollis iaculis. Nunc facilisis augue a felis malesuada accumsan bibendum augue luctus. Curabitur pharetra, sapien dapibus tempor interdum, purus tortor aliquam nisi, ut consectetur urna ipsum et quam. Nulla sed tellus urna. </p>
  <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['p_id_c']['required']) {?><font color="red">*</font> <?php }?><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
</dd>
  <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['p_nm_c']['required']) {?><font color="red">*</font><?php }?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</dd>
  <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['required']) {?><font color="red">*</font> <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['html'];?>
</dd>
 
  <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['required']) {?><font color="red">*</font><?php }?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['html'];?>
</dd>
  <select  class="states"  style="width:175px;">
    
     <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ary_ad_ids']->value,'output'=>$_smarty_tpl->tpl_vars['ary_ad_names']->value,'selected'=>$_smarty_tpl->tpl_vars['ad_cd']->value),$_smarty_tpl);?>
  
  
  </select>
  <div>ＡＤ：
    <select  name="ad_cd"  class="states"  style="width:175px;">
      
       <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['items']->value,'output'=>$_smarty_tpl->tpl_vars['items']->value,'selected'=>$_smarty_tpl->tpl_vars['ad_cd']->value),$_smarty_tpl);?>

    
    </select>
  </div>
 
  <section class="main">
				<div class="wrapper-demo">
					<div id="dd" class="wrapper-dropdown-1" tabindex="1">
						<span>Gender</span>
					    <ul class="dropdown" tabindex="1">
					        <li><a href="#">Male</a></li>
					        <li><a href="#">Female</a></li>
					    </ul>
					</div>
                    
				​</div>
                <div class="wrapper-demo">
					<div id="dd" class="wrapper-dropdown-1" tabindex="1">
						<span>Gender</span>
					    <ul class="dropdown" tabindex="1">
					        <li><a href="#">Male</a></li>
					        <li><a href="#">Female</a></li>
					    </ul>
					</div>
                    
				​</div>
			</section>
</div>
<div class="section" id="section2">
  <h1>Section 2</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget enim eu mi volutpat ullamcorper et ut magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus nec sagittis massa. Vivamus ut tellus tellus. Donec in odio eget elit suscipit tincidunt ac eu lacus. Proin interdum sagittis diam, eu aliquam libero tristique at. Fusce elementum, velit eget consequat facilisis, nunc tellus condimentum velit, bibendum iaculis lectus tellus sed sem. Vivamus dapibus tellus at mauris mollis iaculis. Nunc facilisis augue a felis malesuada accumsan bibendum augue luctus. Curabitur pharetra, sapien dapibus tempor interdum, purus tortor aliquam nisi, ut consectetur urna ipsum et quam. Nulla sed tellus urna. </p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget enim eu mi volutpat ullamcorper et ut magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus nec sagittis massa. Vivamus ut tellus tellus. Donec in odio eget elit suscipit tincidunt ac eu lacus. Proin interdum sagittis diam, eu aliquam libero tristique at. Fusce elementum, velit eget consequat facilisis, nunc tellus condimentum velit, bibendum iaculis lectus tellus sed sem. Vivamus dapibus tellus at mauris mollis iaculis. Nunc facilisis augue a felis malesuada accumsan bibendum augue luctus. Curabitur pharetra, sapien dapibus tempor interdum, purus tortor aliquam nisi, ut consectetur urna ipsum et quam. Nulla sed tellus urna. </p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget enim eu mi volutpat ullamcorper et ut magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus nec sagittis massa. Vivamus ut tellus tellus. Donec in odio eget elit suscipit tincidunt ac eu lacus. Proin interdum sagittis diam, eu aliquam libero tristique at. Fusce elementum, velit eget consequat facilisis, nunc tellus condimentum velit, bibendum iaculis lectus tellus sed sem. Vivamus dapibus tellus at mauris mollis iaculis. Nunc facilisis augue a felis malesuada accumsan bibendum augue luctus. Curabitur pharetra, sapien dapibus tempor interdum, purus tortor aliquam nisi, ut consectetur urna ipsum et quam. Nulla sed tellus urna. </p>
  <div>ＡＤ：
    <select  name="ad_cd"  class="states"  style="width:175px;">
      
       <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['items']->value,'output'=>$_smarty_tpl->tpl_vars['items']->value,'selected'=>$_smarty_tpl->tpl_vars['ad_cd']->value),$_smarty_tpl);?>

    
    </select>
  </div>
  <div id ="main">
    <select  class="states"  style="width:175px;">
     <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ary_ad_ids']->value,'output'=>$_smarty_tpl->tpl_vars['ary_ad_names']->value,'selected'=>$_smarty_tpl->tpl_vars['ad_cd']->value),$_smarty_tpl);?>

    </select>
  </div>
  <div class="gridster">
    <ul>
      <li data-row="1" data-col="1" data-sizex="1" data-sizey="1"> <?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['html'];?>
</li>
      <li data-row="1" data-col="2" data-sizex="3" data-sizey="1"> <?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</li>
      <li data-row="1" data-col="3" data-sizex="1" data-sizey="1"> <?php echo $_smarty_tpl->tpl_vars['form']->value['p_noxx_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_noxx_c']['html'];?>
</li>
      <li data-row="1" data-col="4" data-sizex="1" data-sizey="1"> <?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['html'];?>
</li>
      <li data-row="1" data-col="5" data-sizex="2" data-sizey="1"> <?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['html'];?>
</li>
      <li data-row="2" data-col="1" data-sizex="1" data-sizey="1"> <?php echo $_smarty_tpl->tpl_vars['form']->value['snk_kei_kbn_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['snk_kei_kbn_c']['html'];?>
</li>
      <li data-row="2" data-col="2" data-sizex="2" data-sizey="1"> <?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['html'];?>
</li>
      <li data-row="2" data-col="3" data-sizex="1" data-sizey="1"> <?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_cd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_cd_c']['html'];?>
</li>
      <li data-row="2" data-col="4" data-sizex="1" data-sizey="1"> <?php echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['html'];?>
 </li>
      <li data-row="2" data-col="5" data-sizex="4" data-sizey="1"> <?php echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['html'];?>
 </li>
      <li data-row="3" data-col="1" data-sizex="2" data-sizey="1">
        <select  class="states" style="width:175px;"  >
         <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ary_ad_ids']->value,'output'=>$_smarty_tpl->tpl_vars['ary_ad_names']->value,'selected'=>$_smarty_tpl->tpl_vars['ad_cd']->value),$_smarty_tpl);?>

        </select>
      </li>
    </ul>
    
     <section class="main">
				<div class="wrapper-demo">
					<div id="dd" class="wrapper-dropdown-1" tabindex="1">
						<span>Gender</span>
					    <ul class="dropdown" tabindex="1">
					        <li><a href="#">Male</a></li>
					        <li><a href="#">Female</a></li>
					    </ul>
					</div>
				​</div>
			</section>
                
  </div>
</div>
<div class="section" id="section3">
  <h1>Section 3</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget enim eu mi volutpat ullamcorper et ut magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus nec sagittis massa. Vivamus ut tellus tellus. Donec in odio eget elit suscipit tincidunt ac eu lacus. Proin interdum sagittis diam, eu aliquam libero tristique at. Fusce elementum, velit eget consequat facilisis, nunc tellus condimentum velit, bibendum iaculis lectus tellus sed sem. Vivamus dapibus tellus at mauris mollis iaculis. Nunc facilisis augue a felis malesuada accumsan bibendum augue luctus. Curabitur pharetra, sapien dapibus tempor interdum, purus tortor aliquam nisi, ut consectetur urna ipsum et quam. Nulla sed tellus urna. </p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget enim eu mi volutpat ullamcorper et ut magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus nec sagittis massa. Vivamus ut tellus tellus. Donec in odio eget elit suscipit tincidunt ac eu lacus. Proin interdum sagittis diam, eu aliquam libero tristique at. Fusce elementum, velit eget consequat facilisis, nunc tellus condimentum velit, bibendum iaculis lectus tellus sed sem. Vivamus dapibus tellus at mauris mollis iaculis. Nunc facilisis augue a felis malesuada accumsan bibendum augue luctus. Curabitur pharetra, sapien dapibus tempor interdum, purus tortor aliquam nisi, ut consectetur urna ipsum et quam. Nulla sed tellus urna. </p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget enim eu mi volutpat ullamcorper et ut magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus nec sagittis massa. Vivamus ut tellus tellus. Donec in odio eget elit suscipit tincidunt ac eu lacus. Proin interdum sagittis diam, eu aliquam libero tristique at. Fusce elementum, velit eget consequat facilisis, nunc tellus condimentum velit, bibendum iaculis lectus tellus sed sem. Vivamus dapibus tellus at mauris mollis iaculis. Nunc facilisis augue a felis malesuada accumsan bibendum augue luctus. Curabitur pharetra, sapien dapibus tempor interdum, purus tortor aliquam nisi, ut consectetur urna ipsum et quam. Nulla sed tellus urna. </p>
</div>

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> ---> 
<!--- page scroll ---------------> 
<script>window.jQuery || document.write('<script src="template/singlepage/jsjquery-1.9.1.min.js"><\/script>')</script> 
<script src="template/singlepage/js/jquery.singlePageNav.min.js"></script> 
<script>

            // Prevent console.log from generating errors in IE for the purposes of the demo
            if ( ! window.console ) console = { log: function(){} };

            // The actual plugin
            $('.single-page-nav').singlePageNav({
                offset: $('.single-page-nav').outerHeight(),
                filter: ':not(.external)',
                updateHash: true,
                beforeStart: function() {
                    console.log('begin scrolling');
                },
                onComplete: function() {
                    console.log('done scrolling');
                }
            });
        </script> 
<!--- page scroll end -------------------> 
<!----gridtster -------------------------> 
<script src="template/gridster/dist/jquery.gridster.js" type="text/javascript" charset="utf-8"></script> 
<script type="text/javascript">
        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    </script> 
<script type="text/javascript">
      var gridster;

      $(function(){

        gridster = $(".gridster ul").gridster({
          widget_base_dimensions: [100, 55],
          widget_margins: [5, 5],
          helper: 'clone',
          resize: {
            enabled: true
          }
        }).data('gridster');


        $('.js-resize-random').on('click', function() {
            gridster.resize_widget(gridster.$widgets.eq(getRandomInt(0, 9)),
                getRandomInt(1, 4), getRandomInt(1, 4))
        });

      });
    </script> 
<!----gridtster end -------------------------> 

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
<!-------------custom_drop ----------------------------
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->
		<script type="text/javascript">
			
			function DropDown(el) {
				this.dd = el;
				this.placeholder = this.dd.children('span');
				this.opts = this.dd.find('ul.dropdown > li');
				this.val = '';
				this.index = -1;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						return false;
					});

					obj.opts.on('click',function(){
						var opt = $(this);
						obj.val = opt.text();
						obj.index = opt.index();
						obj.placeholder.text('Gender: ' + obj.val);
					});
				},
				getValue : function() {
					return this.val;
				},
				getIndex : function() {
					return this.index;
				}
			}

			$(function() {

				/*--var dd = new DropDown( $('#dd') );----*/
				var dd = new DropDown( $('.wrapper-dropdown-1') );  wrapper-dropdown0-1

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-1').removeClass('active');
				});

			});
			
		</script>
	
</body>
</html>
<?php }} ?>
