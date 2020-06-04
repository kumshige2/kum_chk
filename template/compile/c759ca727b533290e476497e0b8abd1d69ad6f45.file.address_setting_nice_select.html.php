<?php /* Smarty version Smarty-3.1.18, created on 2014-12-25 17:32:43
         compiled from ".\template\address_setting_nice_select.html" */ ?>
<?php /*%%SmartyHeaderCode:25519549bcbabd85195-68273299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c759ca727b533290e476497e0b8abd1d69ad6f45' => 
    array (
      0 => '.\\template\\address_setting_nice_select.html',
      1 => 1419496281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25519549bcbabd85195-68273299',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_549bcbabdeaac3_66782024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549bcbabdeaac3_66782024')) {function content_549bcbabdeaac3_66782024($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nice Select Box Replacement Demo</title>
<link href="template/nice_select/reset.css" rel="stylesheet">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<style class="cp-pen-styles">
body {
  background: #a1ca6c;
  font-family: arial;
  font-size: 13px;
}

form {
  width: 400px;
  padding: 25px 50px 25px 50px;
  background: #84a659;
  display: block;
  margin: 100px auto;
  border-radius: 3px;
  color: #fff;
}

form fieldset { margin: 25px 0; }

.select_wrapper {
  background: #6a8547 url("arrow.png") no-repeat top 15px right 12px;
  line-height: 36px;
  border-radius: 3px;
  cursor: pointer;
  position: relative;
}

.select_wrapper:hover { background: #566c3a url("arrow.png") no-repeat top 15px right 12px; }

.select_wrapper span {
  display: block;
  margin: 0 30px 0 15px;
}

.select_wrapper .select_inner {
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  color: #687278;
  display: none;
  position: absolute;
  left: 0;
  top: -100%;
  width: 100%;
  z-index: 3;
}

.select_wrapper .select_inner li {
  border-bottom: 1px solid #eee;
  padding: 0 15px;
}

.select_wrapper .select_inner li:hover { background: #eee; }

.select_wrapper .select_inner li:last-child {
  border: none;
  border-radius: 0 0 5px 5px;
}

.select_wrapper .select_inner li:first-child { border-radius: 5px 5px 0 0; }
</style>
</head>

<body><div id="jquery-script-menu">
<div class="jquery-script-center">
<ul>
<li><a href="http://www.jqueryscript.net/form/Nice-Select-Box-Replacement-with-jQuery-CSS.html">Download This Plugin</a></li>
<li><a href="http://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
</ul>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
<h1 align="center" style="margin-top:150px;">Nice Select Box Replacement Demo</h1>
<form action='#' method='post'>
  <fieldset>
    <select id="demo" name="demo">
      <option value="Html5">Html5</option>
      <option value="CSS3">CSS3</option>
      <option value="Javascript">Javascript</option>
      <option value="Ruby">Ruby</option>
      <option value="Python">Python</option>
      <option value="C++">C++</option>
    </select>
  </fieldset>
</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script>
$(document).ready(function (){
$('select').wrap('<div class="select_wrapper"></div>')
$('select').parent().prepend('<span>'+ $(this).find(':selected').text() +'</span>');
$('select').parent().children('span').width($('select').width());	
$('select').css('display', 'none');					
$('select').parent().append('<ul class="select_inner"></ul>');
$('select').children().each(function(){
  var opttext = $(this).text();
  var optval = $(this).val();
  $('select').parent().children('.select_inner').append('<li id="' + optval + '">' + opttext + '</li>');
});



$('select').parent().find('li').on('click', function (){
  var cur = $(this).attr('id');
  $('select').parent().children('span').text($(this).text());
  $('select').children().removeAttr('selected');
  $('select').children('[value="'+cur+'"]').attr('selected','selected');					
  console.log($('select').children('[value="'+cur+'"]').text());
});
$('select').parent().on('click', function (){
  $(this).find('ul').slideToggle('fast');
});
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
<?php }} ?>
