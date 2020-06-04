<?php /* Smarty version Smarty-3.1.21, created on 2016-04-05 15:55:17
         compiled from ".\template\address_setting_xxxx02.html" */ ?>
<?php /*%%SmartyHeaderCode:9197570327bdb70ee0-01119305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0f47ef3c1bf498f6c3681b4867b54ad007788f9' => 
    array (
      0 => '.\\template\\address_setting_xxxx02.html',
      1 => 1459839250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9197570327bdb70ee0-01119305',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_570327bde66be8_33534198',
  'variables' => 
  array (
    'form' => 0,
    'error' => 0,
    'ssts' => 0,
    'msg' => 0,
    'id' => 0,
    'ary_ad_ids' => 0,
    'ary_ad_names' => 0,
    'ad_cd_c' => 0,
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
    'ksy_kgo_a_cd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570327bde66be8_33534198')) {function content_570327bde66be8_33534198($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\nginx\\php\\pear\\smarty\\libs\\plugins\\function.html_options.php';
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meilleur - Free Responsive Single Page BS3 Template</title>
<!-- Stylesheets -->
<!--- meilleur --->
<link type="text/css" href="template/meilleur/css/bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic,500italic,500,300italic,300'
        rel='stylesheet' type='text/css'>
<link type="text/css" href="template/meilleur/icons/font-awesome/css/font-awesome.css" rel="stylesheet">
<link type="text/css" href="template/meilleur/icons/rondo/style.css" rel="stylesheet">
<link href="template/meilleur/css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="template/meilleur/css/style.css" rel="stylesheet">
<link type="text/css" href="template/meilleur/css/style_upd01.css" rel="stylesheet">
<!-----select 2 ---->
<link type="text/css" href="template/css/select2.css" rel="stylesheet"/>
<link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />
<!--- fancyselect  ---->
<link type="text/css" rel="stylesheet" href="template/fancyselect/fancyselect.css">
<!-- Bootstrap datapicker
<link href="template/bootstrap-datepicker/css/bootstrap.min.css" rel="stylesheet">
<link href="template/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">--->
<!-- pickmeup  --->
<link rel="stylesheet" href="template/jquery-ui-1.11.4.custom/jquery-ui.css" />
<link rel="stylesheet" href="template/jquery-ui-1.11.4.custom/jquery-ui.theme.css" />
<!--- sticky scroll ---->
<link rel="stylesheet" href="template/sidr/css/jquery.sidr.dark01.css">
<!-- git hub  button ----->
<link rel="stylesheet" href="template/git_hub_btn/css/gh-buttons01.css">
<!-- git hub button /prettyify -->
<link rel="stylesheet" href="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css">

<!---- select2  --->

<?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="template/js/select2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>   //  $("#states").select2();
        $(document).ready(function() {
       
			 $(".states").select2();  
			 $("#makerPulldown").select2();
			 
			 $("div#ksy").addClass('invisible');   
        });
<?php echo '</script'; ?>
>
<!--- maker pulldown for IE --->
<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
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
		$("tr#tr14").removeClass('invisible');
        $("tr#tr01").addClass('invisible');
		$("tr#tr02").addClass('invisible');
		$("tr#tr03").addClass('invisible');
		//alert(txt);
		//alert(num);
		var select = document.getElementById('makerPulldown');
        var options =
        document.getElementById('makerPulldown').options;
        var value = options.item(select.selectedIndex).value;
		var texts = options.item(select.selectedIndex).text;
        //alert(value);
		//alert(texts);
		source = texts;
        kekka = source.split(":");

		$('#kgo_cd_c-0').val(kekka[2]);
		$('#ksy_cd_dummy_c-0').val(kekka[0]);
		//	$('#ksy_cd_c-0').val(kekka[0]);
    });
});
<?php echo '</script'; ?>
>
<!--- fancy_sel --->
<?php echo '<script'; ?>
 src="template/fancyselect/fancyselect.js"><?php echo '</script'; ?>
>
<!--
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>---->
<?php echo '<script'; ?>
>   
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
 
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>   
   $(document).ready(function(){
	 
	  //alert("aaa");
	   $('#kaiko1_c-0').change(function(){ 
      var kaiko =$("#kaiko1_c-0").val();
	  var n = toNendo(kaiko.substring(0,4),kaiko.substring(4,7));
	  $('#p_nd_c-0').val(n);
	  //alert(kaiko.substring(0,4));
	  //alert(kaiko.substring(4,7));
      }); 
   });
 
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
function toNendo(y,m){
y = parseInt(y);
m = parseInt(m);
if ((m >= 4 ) && ( m <= 12)) return y; else return y-1;
}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="template/jStageAligner-master/src/jquery.jStageAligner.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

      $(function() {
        $("#box1").jStageAligner("CENTER_BOTTOM", {time: 500, easing: "swing", callback: function() {
        }});
        $("#box2").jStageAligner("CENTER_MIDDLE", {time: 200, easing: "swing"});
        $("#box3").jStageAligner("RIGHT_BOTTOM");
        $("#box4").jStageAligner("LEFT_BOTTOM", {time: 100});
        $("#box5").jStageAligner("RIGHT_MIDDLE", {time: 200});
		$("#menu-btns").jStageAligner("RIGHT_MIDDLE", {time: 200});
		$("#menu-btn").jStageAligner("LEFT_MIDDLE", {time: 600});
        $("#box6").jStageAligner("CENTER_TOP", {marginTop: 200});
      });
	  
    <?php echo '</script'; ?>
>
<!-- git hub  button ----->
<?php echo '<script'; ?>
 src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"><?php echo '</script'; ?>
>

<!--
<?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>--->
<!-- sidr saori 
<?php echo '<script'; ?>
>
$(function(){
var menu = $('#slide_menu'), // スライドインするメニューを指定
	menuBtn = $('#menu-btn'), // トリガーとなるボタンを指定
	body = $(document.body), 	
    menuWidth = menu.outerWidth();	            

    menuBtn.on('click', function(){
	body.toggleClass('open');
        if(body.hasClass('open')){
			body.animate({'left' : menuWidth }, 300);			
			menu.animate({'left' : 0 }, 300);					
		} else {
			menu.animate({'left' : -menuWidth }, 300);
			body.animate({'left' : 0 }, 300);			
		}		     
    });
});    
<?php echo '</script'; ?>
>--->
<!--- sticky scroll --->
<?php echo '<script'; ?>
 type="text/javascript" src="template/sidr/js/jquery.sidr.min.js"><?php echo '</script'; ?>
>
<!--
<?php echo '<script'; ?>
 type="text/javascript" src="template/stickyscroll/js/jquery-contained-sticky-scroll.js"><?php echo '</script'; ?>
>--->
<?php echo '<script'; ?>
>
$(document).ready(function() {
$('#menu-btn').sidr(
);
});
<?php echo '</script'; ?>
>
<!---
<?php echo '<script'; ?>
>   
  $(document).ready(function(){
 	    
		var fruit = $("#sek_knr_kbn_c-00").val();
		switch (fruit) {
          case "0":
            $('#sek_knr_kbn_nm_c-0').val("未");
            break;
          case "1":
            $('#sek_knr_kbn_nm_c-0').val("締");
            break;
	      default:
		    $('#sek_knr_kbn_nm_c-0').val("未");
            break;
		}		
   });
 
<?php echo '</script'; ?>
> ---->
<?php echo '<script'; ?>
> 
 
function gokei01(){ 	 
	  var gokei99 = 0 ;
	  var pmh_costx  = $('#pmh_cost_c-0').val().replace( /,/g , "" ) ;
	  var post_costx  = $('#post_cost_c-0').val().replace( /,/g , "" ) ;
	  var bes_costx  = $('#bes_cost_c-0').val().replace( /,/g , "" ) ;
	  var any_costx  = $('#any_cost_c-0').val().replace( /,/g , "" ) ;
      var gokei99 =eval(pmh_costx) + eval(post_costx) + eval(bes_costx) + eval(any_costx);
	  $('#this_year_cost_c-0').val(0); 
	  //alert(separate(gokei99));
	  $('#this_year_cost_c-0').val(separate(gokei99));
	  // alert(gokei99);
     }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
function addComma(num) {
    var _num = num.replace( /^(-?\d+)(\d{3})/, "$1,$2" );
    if(_num !== num) {
      return addComma(_num);
    }
    return _num;
}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
function separate(num){
    return String(num).replace( /(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
}
<?php echo '</script'; ?>
>

<style type="text/css">
.invisible {
	display: none;
}
#menu-btn {
	width: 70px;
	height: 35px;
	background-color: #999;
	text-align: center;
}
</style>
</head>
<body>
<!---
<div style="color:red">
	<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form']->value['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['field_name']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br>    class="def"
	<?php } ?>
</div>--->
<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
  class="def" method='post'>
  <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>
   
  <?php echo $_smarty_tpl->tpl_vars['form']->value['action']['html'];?>

  
  <header class="header" id="jump">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header"> 
          <!---<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">          <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
         <span class="icon-bar"></span><span class="icon-bar"></span>
         </button>--->
          <p>>>>> <?php echo $_smarty_tpl->tpl_vars['ssts']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p> 
          <p><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
-<?php echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['html'];?>
:<?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</p>       
         
          <!---  <a class="navbar-brand" href="#"> <img src="template/img/xxx.gif" alt="" /></a>-->
     
       </div>
      
      <div class="collapse navbar-collapse hidden-xs">
      
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#jump0">Home</a></li>
          <li><a href="#jump1">Services</a></li>
          <li><a href="#jump2">SeiQ</a></li>
          <li><a href="#jump3">Paid</a></li>
         <!-- <li><a href="#jump4">Our Team</a></li>
          <li><a href="#jump5">Testimonials</a></li>--->
          <li><a href="#jump6">Schedule</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse 
      <div class="collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#jump0" data-toggle="collapse" data-target=".navbar-responsive-collapse"> Home</a></li>
          <li><a href="#jump1" data-toggle="collapse" data-target=".navbar-responsive-collapse"> Services</a></li>
          <li><a href="#jump2" data-toggle="collapse" data-target=".navbar-responsive-collapse"> SeiQ</a></li>
          <li><a href="#jump3" data-toggle="collapse" data-target=".navbar-responsive-collapse"> Paid</a></li>
        <li><a href="#jump4" data-toggle="collapse" data-target=".navbar-responsive-collapse"> Team</a></li>
     <li><a href="#jump5" data-toggle="collapse" data-target=".navbar-responsive-collapse"> Clients</a></li>
          <li><a href="#jump6" data-toggle="collapse" data-target=".navbar-responsive-collapse"> Schedule</a></li>
        </ul>
      </div>
      <!-- /.navbar-responsive-collapse --> 
      </div>
	  <!-- Menu Button --->
  
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
    </nav>
    
      <div id="menu-btn"> &#9776;</div>
    <!--- <button id="menu-btn"><i class="fa fa-bars"></i> Menu</button>---> 
  </header>
  <div class="jumper" id="jump0"> </div>
  <div class="section type-1 big splash">
    <div class="splash-cover"> </div>
    <div class="container">
      <div class="splash-block">
        <div class="centered">
          <!--<div class="container">---->
            <div class="section-headlines">
              <h1> Meilleur - A Bootstrap 3 based single page responsive free template</h1>
              <p> Finally, a free website template - Easier, Prettier, Smarter and Fun!</p>
            </div>
            <a class="btn btn-outline btn-lg" href='index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>R e t u r n</a>&nbsp; 
            <!---   <a href="#jump2" class="btn btn-outline btn-lg">Our Portfolio </a>
        <a href="#jump6" class="btn btn-outline btn-lg">Hire Us </a>---> 
          <!----</div>---->
        </div>
      </div>
    </div>
  </div>
  <div id="jump1" class="jumper"> </div>
  <div class="section type-2"> <!-- style='background-image:url(template/img/hue/38-Autumn.png)'>--->
    <div class="container" >
      <div class="section-headlines">
        <h4> Our Services</h4>
        <h2> Pamphlet Work.....</h2>
        <!--<div>We love creating innovative strategies for the web. All kind of brands hire us:
        we make difficult things easy, but never take anything lightly.</div>---->
      </div>
      <div class="row">
        <div class="col-lg-6 features" style="font-size:12px">
          <div class="media"> <i class=" icon-wrench pull-left animated bounce"></i>
            <div class="media-body"  style='background-color:#eeeeee'>
              <h3> Pamphlet Item 1</h3>
              <div>
               <!-- <p><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
-<?php echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['html'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</p>--->
                <table class="table" style='font-size:12px;'>
                  <tbody>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['label'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['kaiko1_c']['html'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['snk_kei_kbn_c']['html'];?>
</td>
                    </tr>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['label'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_type_c']['html'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sek_knr_kbn_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['sek_knr_kbn_nm_c']['html'];?>
</td>
                    </tr>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['label'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['html'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['ad_cd_c']['html'];?>
</td> 
                      <!--
                      <td><select  name="ad_cd" class="states"  style="width:130px;">
                          
                                   <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ary_ad_ids']->value,'output'=>$_smarty_tpl->tpl_vars['ary_ad_names']->value,'selected'=>$_smarty_tpl->tpl_vars['ad_cd_c']->value),$_smarty_tpl);?>

                      
                        </select></td>--->
                    </tr>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['dantai_cd_knj_c']['label'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['dantai_cd_knj_c']['html'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['p_nd_c']['html'];?>
</td>
                    </tr>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['insatu_kgo_cd_c']['label'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['insatu_kgo_cd_c']['html'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_cd_c']['label'];?>
:<?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_cd_c']['html'];?>
</td>
                    </tr>
                  </tbody>
                </table>
                
              </div>
            </div>
          </div>
          <br class="gap-30" />
          <?php echo $_smarty_tpl->tpl_vars['form']->value['ksy_cd_dummy_c']['html'];?>

          <div class="media"> <i class=" icon-bar-chart pull-left animated bounce"></i>
            <div class="media-body"  style='background-color:#eeeeee'>
              <h3> Pamphlet Item 2</h3>
              <div> <!---The point of using Lorem Ipsum is that it has a more-or-less normal dist.--->
                <table class="table" style='font-size:12px;'>
                  <tbody>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_size_kbn_c']['label'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_size_kbn_c']['html'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_items_c']['html'];?>
部</td>
                    </tr>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['web_pmh_kbn_c']['label'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['web_pmh_kbn_c']['html'];?>
</td>
                    </tr>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['han_size_kbn_c']['label'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['han_size_kbn_c']['html'];?>
</td>
                    </tr>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pos_type_kbn_c']['label'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pos_type_kbn_c']['html'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pos_items_c']['html'];?>
部</td>
                    </tr>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['bes_items_c']['label'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['bes_items_c']['html'];?>
部</td>
                    </tr>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_type_c']['label'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_type_c']['html'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['form']->value['etc_items_c']['html'];?>
部</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <br class="gap-30" />
          <!---- <div class="media"> <i class=" icon-mobile-phone pull-left animated bounce"></i>
          <div class="media-body"  style='background-color:#eeeeee'>
            <h3> iOS and Android Apps</h3>
            <div>
              <table class="table" style='font-size:12px;'>
                <tbody>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['label'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['html'];?>
</td>
                  </tr>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['label'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['html'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['html'];?>
</td>
                  </tr>
                </tbody>
              </table>
              It is a long established fact that a reader will be distracted by the readable content
              of a page when looking at its layout.
              <p><?php echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['html'];?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['html'];?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['form']->value['insatu_kgo_cd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['insatu_kgo_cd_c']['html'];?>
</p> 
            </div>
          </div>
        </div>--->
          <div class="visible-xs visible-sm"> <br class="gap-30" />
            <hr class="gap-divider" />
            <br class="gap-30" />
          </div>
        </div>
        <div class="col-lg-6 features">
          <div class="panel-group" id="accordion">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> Kensyu Information <i class="icon-plus"></i><i class="icon-minus"></i></a> </h3>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body"  style='background-color:#eeeeee'> 
                  <!----start-------------------------------------------->
                  <table class="table table-striped" style="font-size:12px">
                    <tbody>
                  	  
					  <tr>
                      <!--  <th><?php echo $_smarty_tpl->tpl_vars['form']->value['ksy_cd_c']['label'];?>
</th>-->
						 <th>ksy</th>
						
					  <!--
					  <td><?php echo $_smarty_tpl->tpl_vars['form']->value['ksy_cd_c']['html'];?>
</td> 
                       --->
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
                     </tr>
                     <tr id="tr02">
                        <th>Addr</th>
                        <td><p><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_ken_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['kgo_adr1_c']['html'];?>
</p>
                          <p><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_adr2_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['kgo_adr3_c']['html'];?>
</p></td>
                      </tr>
                      <tr id="tr03">
                        <th>Section</th>
                        <td><p><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_tnto_bsy_nm_j_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['kgo_tnto_nm_j_c']['html'];?>
</p>
                          <p><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_tel_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['kgo_fax_c']['html'];?>
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
                          <?php endfor; endif; ?> 
                          <!--
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['name'] = 'kgo_a_cd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ksy_kgo_a_cd']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kgo_a_cd']['total']);
?>
                        <p id="note<?php echo $_smarty_tpl->tpl_vars['ksy_ids']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_a_cd']['index']];?>
"  class="invisible"> 
                        <?php echo $_smarty_tpl->tpl_vars['ksy_kgo_a_cd']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kgo_a_cd']['index']];?>
</p>
                        <?php endfor; endif; ?> ---></td>
                      </tr>
                    </tbody>
                  </table>
               
                  <!---   Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                    in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    <br />
                                    <br />
                                    Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked
                                    up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
                                    and going through the cites of the word in classical literature, discovered the
                                    undoubtable source.----> 
                  
                  <!--------end-----------------------------------------> 
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo">Pamphlet Item 3 <i class="icon-plus"></i><i class="icon-minus"> </i></a> </h3>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body" style='background-color:#eeeeee'>
                  <table class="table" style='font-size:12px;'>
                    <tbody>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['tdantai_c']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['tdantai_c']['html'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['html'];?>
</td>
                      </tr>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sek_ng_kbn_c']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sek_ng_kbn_c']['html'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['html'];?>
</td>
                      </tr>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_sek_kbn_c']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_sek_kbn_c']['html'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['html'];?>
%</td>
                      </tr>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['html'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['html'];?>
</td>
                      </tr>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['html'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_cycle_kbn_c']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_cycle_kbn_c']['html'];?>
</td>
                      </tr>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['app_ymd_c']['html'];?>
</td>
                      </tr>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_ymd_c']['html'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['deli_xx_c']['html'];?>
</td>
                      </tr>
                    </tbody>
                  </table>
                  <table style='font-size:12px;'>
                    <tbody>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_eig_tnto_bsy_c']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_eig_tnto_bsy_c']['html'];?>
</td>
                      </tr>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_eig_tnto_c']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_eig_tnto_c']['html'];?>
</td>
                      </tr>
                    </tbody>
                  </table>
                  
                  <!--- Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                in a piece of classical Latin literature from 45 BC, making it over 2000 years old. <br />
                <br />
                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked
                up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
                and going through the cites of the word in classical literature, discovered the
                undoubtable source. 
                <p><?php echo $_smarty_tpl->tpl_vars['form']->value['tdantai_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['tdantai_c']['html'];?>

                  <?php echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['all_crs_c']['html'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['form']->value['sek_ng_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sek_ng_kbn_c']['html'];?>

                  <?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['sanno_crs_c']['html'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_sek_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['kgo_sek_kbn_c']['html'];?>

                  <?php echo $_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['crs_share_rate_c']['html'];?>
%</p>
                <p><?php echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['card_type_kbn_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_memo_c']['html'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['card_hyojun_kbn_c']['html'];?>

                  <?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_cycle_kbn_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['pmh_cycle_kbn_c']['html'];?>
</p>
                <input type="text" class="form-control datepicker" id="mydate1">----> 
                  
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree">Print Services<i class="icon-plus"></i><i class="icon-minus"> </i></a> </h3>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body"><!----- Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked
                up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
                and going through the cites of the word in classical literature, discovered the
                undoubtable source.---->
                  <button type="submit" value="order_sht01" id ="order_sht01" name="order_sht01" class="btn btn-info" style="width:120px">発注票</button>
                  <button type="submit" value="pamph_inf01" id ="pamph_inf01" name="pamph_inf01" class="btn btn-success" style="width:120px">確認票</button>
                </div>
               
              </div>
            </div>
          </div>
          <div class="visible-xs visible-sm"> <br class="gap-30" />
            <hr class="gap-divider" />
            <br class="gap-30" />
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <div class="row">
        <div class="col-lg-6 features">
          <h3> Our Skills</h3>
          <div class="skills">
            <p> HTML5 and CSS3 </p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 70%;"> </div>
            </div>
            <hr>
            <p> Mobile Apps Development</p>
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 90%;"> </div>
            </div>
            <hr>
            <p> Software Development</p>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 90%;"> </div>
            </div>
            <hr>
            <p> Search Engine Optimization</p>
            <div class="progress">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 features">
          <h3> Get To Now Us</h3>
          <!--
          <table class="table" style='font-size:12px;'>
           <tr>
             <td><?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_eig_tnto_bsy_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['tdan_eig_tnto_bsy_c']['html'];?>
</td>
           </tr>
            <tr>
             <td><?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_eig_tnto_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['tdan_eig_tnto_c']['html'];?>
</td>
           </tr>
         </table>-->
          <p> Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"
            (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise
            on the theory of ethics, very popular during the Renaissance. The first line of
            Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. </p>
          <p> The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
            interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
            Cicero are also reproduced in their exact original form, accompanied by English
            versions from the 1914 translation by H. Rackham.</p>
        </div>
      </div>
    </div>
  </div>
  <div id="jump2" class="jumper"> </div>
  <div class="section type-1" style="padding-bottom: 0">
    <div class="container">
      <div class="section-headlines">
        <h4> Account Works</h4>
        <h2> SeiQ work.....</h2>
        <!--- <div> There are many variations of passages of Lorem Ipsum available, but the majority
        have suffered alteration in some form, by injected humour, or randomised words which
        don't look even slightly believable. </div>---> 
      </div>
      <div class="gallery-control">
        <div data-toggle="buttons"> 
          <!-- <label class="btn btn-outline filter active" data-filter="phone tablet desktop">---> 
          
          <a id ="gokei01" name="gokei01" class="btn btn-outline btn-lg" onclick='gokei01()'
          style ='font-size:18px;width:120px;'>&#931;</a>&nbsp; <a href="#" id ="goto_seiq_inf01" name="goto_seiq_inf01" class="btn btn-outline btn-lg" style ='font-size:18px;width:120px;'>SeiQ Inf </a> 
          
          <!---
        <label class="btn btn-outline filter active" data-filter="phone tablet desktop">
          <input type="radio" name="options" id="option1">
          All </label>
      
        <label class="btn btn-outline filter" data-filter="phone">
          <input type="radio" name="options" id="option2">
          Phone </label>
        <label class="btn btn-outline filter" data-filter="tablet">
          <input type="radio" name="options" id="option3">
          Tablet </label>
        <label class="btn btn-outline filter" data-filter="desktop">
          <input type="radio" name="options" id="option3">
          Desktop </label>---> 
        </div>
      </div>
      <!-----start----------------------------------------------------->
      <div class="pricing-plans row">
        <div class="col-lg-3">
          <div class="plan plan-featured radius3">
            <div class="plan-name"> 
              <!---<h2> Beginner</h2>--->
              <p class="muted"> 制作費/円</p>
            </div>
            <!---<div class="plan-price"> <b>1</b> / month </div>--->
            <div class="plan-details02">
              <div>Pamph<?php echo $_smarty_tpl->tpl_vars['form']->value['pmh_cost_c']['html'];?>
 </div>
              <div class="success">Poster<?php echo $_smarty_tpl->tpl_vars['form']->value['post_cost_c']['html'];?>
 </div>
              <div>Booklet<?php echo $_smarty_tpl->tpl_vars['form']->value['bes_cost_c']['html'];?>
 </div>
              <div class="success">Etc<?php echo $_smarty_tpl->tpl_vars['form']->value['any_cost_c']['html'];?>
 </div>
            </div>
            <!--<div class="plan-action"> <a href="#" class="btn btn-inverse btn-block btn-large">Buy</a> </div>---> 
          </div>
          <div class="visible-xs visible-sm"> <br class="gap-30" />
            <hr class="gap-divider" />
            <br class="gap-30" />
          </div>
        </div>
        <div class="col-lg-3">
          <div class="plan plan-featured radius3">
            <div class="plan-name"> 
              <!---<h2> Beginner</h2>--->
              <p class="muted"> Pages/ページ</p>
            </div>
            <!--<div class="plan-price"> <b>$1</b> / month </div>--->
            <div class="plan-details02">
              <div>Sanno<?php echo $_smarty_tpl->tpl_vars['form']->value['senyu_page_c']['html'];?>
 </div>
              <div>All<?php echo $_smarty_tpl->tpl_vars['form']->value['all_page_c']['html'];?>
 </div>
              <div>共通<?php echo $_smarty_tpl->tpl_vars['form']->value['com_page_c']['html'];?>
 </div>
              <div>紹介<?php echo $_smarty_tpl->tpl_vars['form']->value['sho_page_c']['html'];?>
 </div>
            </div>
            <!--  <div class="plan-action"> <a href="#" class="btn btn-inverse btn-block btn-large">Buy</a> </div>--> 
          </div>
          <div class="visible-xs visible-sm"> <br class="gap-30" />
            <hr class="gap-divider" />
            <br class="gap-30" />
          </div>
        </div>
        <div class="col-lg-3">
          <div class="plan plan-featured radius3">
            <div class="plan-name"> 
              <!---<h2> Beginner</h2>--->
              <p class="muted"> Price</p>
            </div>
            <!---<div class="plan-price"> <b>$1</b> / month </div>---->
            <div class="plan-details02" >
              <div>Page単価<?php echo $_smarty_tpl->tpl_vars['form']->value['page_tanka_c']['html'];?>
 </div>
              <div>請求年月<?php echo $_smarty_tpl->tpl_vars['form']->value['sekyymm_c']['html'];?>
 </div>
            </div>
            <!--<div class="plan-action"> <a href="#" class="btn btn-inverse btn-block btn-large">Buy</a> </div>--> 
          </div>
          <div class="visible-xs visible-sm"> <br class="gap-30" />
            <hr class="gap-divider" />
            <br class="gap-30" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12"><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
</div>
      </div>
      <!-------------------------------------------------------------------->
      <div class="pricing-plans row">
        <div class="col-lg-3">
          <div class="plan plan-featured radius3">
            <div class="plan-name01"> 
              <!---<h2> Beginner</h2>--->
              <p class="muted">製作費計/円</p>
            </div>
            <!---<div class="plan-price"> <b>1</b> / month </div>--->
            <div class="plan-details02">
              <div>計<?php echo $_smarty_tpl->tpl_vars['form']->value['this_year_cost_c']['html'];?>
</div>
              <div><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
 </div>
              <div><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
 </div>
              <div><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
 </div>
            </div>
            <!--<div class="plan-action"> <a href="#" class="btn btn-inverse btn-block btn-large">Buy</a> </div>---> 
          </div>
          <div class="visible-xs visible-sm"> <br class="gap-30" />
            <hr class="gap-divider" />
            <br class="gap-30" />
          </div>
        </div>
        <div class="col-lg-3">
          <div class="plan plan-featured radius3">
            <div class="plan-name01"> 
              <!---<h2> Beginner</h2>--->
              <p class="muted"> 制作費内訳/円</p>
            </div>
            <!--<div class="plan-price"> <b>$1</b> / month </div>--->
            <div class="plan-details02">
              <div>他団請求<?php echo $_smarty_tpl->tpl_vars['form']->value['tdan_sek_c']['html'];?>
 </div>
              <div>産能請求<?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_keisai_cost_c']['html'];?>
 </div>
              <div><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
 </div>
              <div><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
 </div>
            </div>
            <!--  <div class="plan-action"> <a href="#" class="btn btn-inverse btn-block btn-large">Buy</a> </div>--> 
          </div>
          <div class="visible-xs visible-sm"> <br class="gap-30" />
            <hr class="gap-divider" />
            <br class="gap-30" />
          </div>
        </div>
        <div class="col-lg-3">
          <div class="plan plan-featured radius3">
            <div class="plan-name01"> 
              <!---<h2> Beginner</h2>--->
              <p class="muted">産能分内訳/円</p>
            </div>
            <!---<div class="plan-price"> <b>$1</b> / month </div>---->
            <div class="plan-details02" >
              <div><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
 </div>
              <div>共通<?php echo $_smarty_tpl->tpl_vars['form']->value['com_cost_c']['html'];?>
 </div>
              <div>紹介<?php echo $_smarty_tpl->tpl_vars['form']->value['sho_cost_c']['html'];?>
 </div>
              <div>調整<?php echo $_smarty_tpl->tpl_vars['form']->value['etc_cost_c']['html'];?>
 </div>
            </div>
            <!--<div class="plan-action"> <a href="#" class="btn btn-inverse btn-block btn-large">Buy</a> </div>--> 
          </div>
          <div class="visible-xs visible-sm"> <br class="gap-30" />
            <hr class="gap-divider" />
            <br class="gap-30" />
            q </div>
        </div>
        <div class="col-lg-3">
          <div class="plan plan-featured radius3">
            <div class="plan-name01"> 
              <!---<h2> Beginner</h2>--->
              <p class="muted">産能分内訳/円</p>
            </div>
            <!---<div class="plan-price"> <b>$1</b> / month </div>---->
            <div class="plan-details02" >
              <div><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
 </div>
              <div>管理<?php echo $_smarty_tpl->tpl_vars['form']->value['mng_cost_c']['html'];?>
 </div>
              <div>産能負担<?php echo $_smarty_tpl->tpl_vars['form']->value['sanno_cost_c']['html'];?>
 </div>
              <div><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
 </div>
            </div>
            <!--<div class="plan-action"> <a href="#" class="btn btn-inverse btn-block btn-large">Buy</a> </div>--> 
          </div>
          <div class="visible-xs visible-sm"> <br class="gap-30" />
            <hr class="gap-divider" />
            <br class="gap-30" />
            q </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12"><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
</div>
        <div class="col-lg-12"><?php echo $_smarty_tpl->tpl_vars['form']->value['memos_c']['html'];?>
</div>
      </div>
      <div class="row">
        <div class="col-lg-12"><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
</div>
        <div class="col-lg-12"><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
</div>
        <div class="col-lg-12"><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
</div>
      </div>
      <!---end row ---> 
      
    </div>
    <!-------end---------------------------------------------------------------------> 
    
    <!--</div>---> 
    <!--------start--------------------------------------------------------------------> 
    <!-----------end ------------------------------------------------------------------> 
    
  </div>
  <div id="jump3" class="jumper"> </div>
  <div class="section type-2" style='background-image:url(template/img/hue/18-Unicorn.png)'>
    <div class="container">
      <div class="section-headlines">
        <h4> Income Balance 貢献利益率</h4>
        <h2> Well Paid Job !?</h2>
        <div></div>
      </div>
      <div class="pricing-plans row">
        <div class="col-lg-3">
          <div class="plan radius3">
            <div class="plan-name">
              <h2> <?php echo $_smarty_tpl->tpl_vars['form']->value['koken_ndo03_c']['html'];?>
</h2>
              <p class="muted"> Simple dummy text of the printing and typesetting industry</p>
            </div>
            <div class="plan-price"> <b style='font-size:44px'><?php echo $_smarty_tpl->tpl_vars['form']->value['koken_rate03_c']['html'];?>
</b>%</div>
            <div class="plan-details01">
              <div> &#165;<b style='font-size:16px'><?php echo $_smarty_tpl->tpl_vars['form']->value['koken_income03_c']['html'];?>
</b> </div>
              <div> <?php echo $_smarty_tpl->tpl_vars['form']->value['koken_dname03_c']['html'];?>
 </div>
              <div> <?php echo $_smarty_tpl->tpl_vars['form']->value['koken_ad_nm03_c']['html'];?>
 </div>
            </div>
            <div class="plan-action"> <a href="#" class="btn btn-inverse btn-block btn-large"><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
</a> </div>
          </div>
          <div class="visible-xs visible-sm"> <br class="gap-30" />
            <hr class="gap-divider" />
            <br class="gap-30" />
          </div>
        </div>
        <div class="col-lg-3">
          <div class="plan radius3">
            <div class="plan-name">
              <h2> <?php echo $_smarty_tpl->tpl_vars['form']->value['koken_ndo02_c']['html'];?>
</h2>
              <p class="muted"> Simple dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="plan-price"> <b style='font-size:44px'><?php echo $_smarty_tpl->tpl_vars['form']->value['koken_rate02_c']['html'];?>
</b>%</div>
            <div class="plan-details01">
              <div> &#165;<b style='font-size:16px'><?php echo $_smarty_tpl->tpl_vars['form']->value['koken_income02_c']['html'];?>
</b> </div>
              <div> <?php echo $_smarty_tpl->tpl_vars['form']->value['koken_dname02_c']['html'];?>
 </div>
              <div> <?php echo $_smarty_tpl->tpl_vars['form']->value['koken_ad_nm02_c']['html'];?>
 </div>
            </div>
            <div class="plan-action"> <a href="#" class="btn btn-inverse btn-block btn-large"><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
</a> </div>
          </div>
          <div class="visible-xs visible-sm"> <br class="gap-30" />
            <hr class="gap-divider" />
            <br class="gap-30" />
          </div>
        </div>
        <div class="col-lg-3">
          <div class="plan radius3">
            <div class="plan-name">
              <h2> <?php echo $_smarty_tpl->tpl_vars['form']->value['koken_ndo01_c']['html'];?>
</h2>
              <p class="muted"> Simple dummy text of the printing and typesetting industry</p>
            </div>
            <div class="plan-price"> <b style='font-size:44px'><?php echo $_smarty_tpl->tpl_vars['form']->value['koken_rate01_c']['html'];?>
</b>%</div>
            <div class="plan-details01">
              <div> &#165;<b style='font-size:16px'><?php echo $_smarty_tpl->tpl_vars['form']->value['koken_income01_c']['html'];?>
</b> </div>
              <div> <?php echo $_smarty_tpl->tpl_vars['form']->value['koken_dname01_c']['html'];?>
 </div>
              <div> <?php echo $_smarty_tpl->tpl_vars['form']->value['koken_ad_nm01_c']['html'];?>
 </div>
            </div>
            <div class="plan-action"> <a href="#" class="btn btn-inverse btn-block btn-large"><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
</a> </div>
          </div>
          <div class="visible-xs visible-sm"> <br class="gap-30" />
            <hr class="gap-divider" />
            <br class="gap-30" />
          </div>
        </div>
        <div class="col-lg-3">
          <div class="plan plan-featured radius3">
            <div class="plan-name">
              <h2> <?php echo $_smarty_tpl->tpl_vars['form']->value['koken_ndo00_c']['html'];?>
</h2>
              <p class="muted"> Simple dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="plan-price"> <b style='font-size:44px'><?php echo $_smarty_tpl->tpl_vars['form']->value['koken_rate00_c']['html'];?>
</b>%</div>
            <div class="plan-details01">
              <div> &#165;<b style='font-size:16px'><?php echo $_smarty_tpl->tpl_vars['form']->value['koken_income00_c']['html'];?>
</b> </div>
              <div> <?php echo $_smarty_tpl->tpl_vars['form']->value['koken_dname00_c']['html'];?>
 </div>
              <div> <?php echo $_smarty_tpl->tpl_vars['form']->value['koken_ad_nm00_c']['html'];?>
 </div>
            </div>
            <div class="plan-action"> <a href="#" class="btn btn-inverse btn-block btn-large"><?php echo $_smarty_tpl->tpl_vars['form']->value['nulls_c']['html'];?>
</a> </div>
          </div>
        </div>
        <div class="visible-xs visible-sm"> <br class="gap-30" />
          <hr class="gap-divider" />
          <br class="gap-30" />
        </div>
      </div>
      <div> 1:貢献利益率　2：収入　3：幹事団体　4:AD </div>
    </div>
    <!--end:.pricing-table--> 
  </div>
  <!--</div>---->
  <!---
<div id="jump4" class="jumper"> </div>
<div class="section type-3">
  <div class="container">
    <div class="section-headlines">
      <h4> Our Team</h4>
      <h2> We are a small team with lots of friends!</h2>
      <div> It is a long established fact that a reader will be distracted by the readable content
        of a page when looking at its layout. </div>
      <i class=" icon-wrench pull-left animated bounce"></i> </div>
    <div class="row">
      <div class="col-lg-12">col-xs-10</div>
    
     
     
    </div>
   
  </div>
  
</div>


<div id="jump5" class="jumper"> </div>
------>
  <div id="jump6" class="jumper"> </div>
  <div class="section type-1 section-contact">
    <div class="container">
      <div class="section-headlines">
        <h4>
        Schedule
        </h4>
        <h2> Pamphlet Calendar and Other Notes</h2>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <address>
          <div class="address-row">
            <div class="address-sign"> <i class="icon-map-marker"></i> </div>
            <div style="address-info"> <b>Sanno pamphlet</b>,<br>
              Other Notes<br>
            </div>
          </div>
          </address>
          <div class="visible-xs visible-sm"> <br class="gap-30" />
            <hr class="gap-divider" />
            <br class="gap-30" />
          </div>
        </div>
        <div class="col-lg-8 col-lg-offset-1">
          <table class="table" style='font-size:14px;'>
            <tbody>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_kbn_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_kbn_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['old_crs_kbn_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['old_crs_kbn_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_kbn_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['kyufu_kbn_c']['html'];?>
</td>
              </tr>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['kjn_inf_kbn_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['kjn_inf_kbn_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['e_learning_kbn_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['e_learning_kbn_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['nik_bp_kbn_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['nik_bp_kbn_c']['html'];?>
</td>
              </tr>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sho_sof_kbn_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sho_sof_kbn_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_policy_kbn_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['cansel_policy_kbn_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['web_noh_kbn_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['web_noh_kbn_c']['html'];?>
</td>
              </tr>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_ren_kbn_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['kgo_ren_kbn_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['data_select_kbn_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['data_select_kbn_c']['html'];?>
</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!------------------------------>
  <div id="jump7" class="jumper"> </div>
  <div class="section type-1 section-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <address>
          <div class="address-row">
            <div class="address-sign"> <i class="icon-map-marker"></i> </div>
            <div style="address-info"> <b>Pamphlet Order Schedule</b>,<br>
              Using Datepicer:Pickmeup<br>
              Copyright (c) 2013-2014 Nazar Mokrynsky </div>
          </div>
          </address>
        </div>
        <div class="col-lg-7">
          <table class='table table-condensed ' style='font-size:12px;'>
            <tbody>
              <tr class="text-center">
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['uke_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['uke_ymd_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_ymd_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_ymd_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['ko3_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['ko3_ymd_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['moji_kosei_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['moji_kosei_ymd_c']['html'];?>
</td>
              </tr>
              <tr class="text-center">
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['ryo_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['ryo_ymd_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_sof_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_sof_ymd_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_sof_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_sof_ymd_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sekryo_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sekryo_ymd_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sof_irai_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['sof_irai_ymd_c']['html'];?>
</td>
              </tr>
              <tr class="text-center">
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['hac_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['hac_ymd_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_return_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['shoko_return_ymd_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['saiko_return_ymd_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['color_kosei_ymd_c']['html'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['fax_nenko_ymd_c']['label'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['fax_nenko_ymd_c']['html'];?>
</td>
              </tr>
            </tbody>
          </table>
          <!--------------------------> 
            <P style='text-align:right;'><?php echo $_smarty_tpl->tpl_vars['form']->value['upd_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['upd_ymd_c']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['cre_ymd_c']['label'];
echo $_smarty_tpl->tpl_vars['form']->value['cre_ymd_c']['html'];?>
</P> 
          <!----------------------------> 
        </div>
      </div>
    </div>
  </div>
  <!------------------------>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12"> Sanno  - Institute Of Management - <a href="http://www.sanno.ac.jp"> 産業能率大学 総合研究所 普及支援課</a> </div>
      </div>
    </div>
  </footer>
  <div id="sidr">
    <ul>
      <li><a>
        <button type="button" class="button01 icon home" style="width:140px; height:30px;" onclick="location.href='index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'">Return</button>
        </a></li>
      <!---<li><a href="#">Top</a></li>
    <li><a href="#">First</a></li>
    <li><a href="#">Second</a></li>
    <li><a href="#">Third</a></li>--->
      <li><a>
        <button class="button01 icon edit" type="submit" name="send" style="width:140px; height:30px; ">Update </button>
        </a></li>
      <li><a>
        <button class="button01 icon add" type="submit" name="new" style="width:140px; height:30px; ">CopyPaste</button>
        </a></li>
      <!-- <li><a href='index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>Return</a></li>--->
    </ul>
  </div>
  
  <!----------------------------> 
  <!---------  <?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>  --------> 
  <!---------------------------->
</form>
<?php if ($_smarty_tpl->tpl_vars['form']->value['requirednote']&&!$_smarty_tpl->tpl_vars['form']->value['frozen']) {?>
	<?php echo $_smarty_tpl->tpl_vars['form']->value['requirednote'];?>

<?php }?> 
<!--Scripts--> 
<!---   <?php echo '<script'; ?>
 type="text/javascript" src="template/meilleur/js/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>---> 
<?php echo '<script'; ?>
 type="text/javascript" src="template/meilleur/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="template/meilleur/js/jquery.smooth-scroll.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="template/meilleur/js/jquery.mixitup.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="template/meilleur/js/jquery.easing.1.3.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="template/meilleur/js/modernizr.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="template/meilleur/js/jquery.fancybox.pack.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="template/meilleur/js/custom.js"><?php echo '</script'; ?>
> 
<!-- Bootstrap datapicker

<?php echo '<script'; ?>
 src="template/bootstrap-datepicker/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="template/bootstrap-datepicker/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="template/bootstrap-datepicker/js/bootstrap-datepicker.ja.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $('.datepicker').datepicker({
  Format: "yyyy-mm-dd",
  autoclose: true,
  orientation: "top auto"  
 
});
<?php echo '</script'; ?>
>--> 

<?php echo '<script'; ?>
 type="text/javascript" src="template/jquery-ui-1.11.4.custom/jquery-ui.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="template/jquery-ui-1.11.4.custom/jquery-ui.min.js"><?php echo '</script'; ?>
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

</body>
</html>
<?php }} ?>
