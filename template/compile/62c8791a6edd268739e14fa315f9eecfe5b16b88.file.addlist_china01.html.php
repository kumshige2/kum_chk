<?php /* Smarty version Smarty-3.1.18, created on 2015-09-03 09:57:16
         compiled from ".\template\addlist_china01.html" */ ?>
<?php /*%%SmartyHeaderCode:677955e3c2925f8512-72247334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62c8791a6edd268739e14fa315f9eecfe5b16b88' => 
    array (
      0 => '.\\template\\addlist_china01.html',
      1 => 1440995590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '677955e3c2925f8512-72247334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e3c292617912_73632518',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e3c292617912_73632518')) {function content_55e3c292617912_73632518($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" media="screen" type="text/css" href="template/css/china.css" />

<script type="text/javascript" src="template/scotch-panels-master/src/scotchPanels.js"></script>
<script>
$(function(){
  $('#scotch-panel').scotchPanel({
                    containerSelector: 'body',
                    direction: 'left', //出てくる方向 top, left, right, bottom
                    duration: 300,
                    transition: 'ease', //効果 linear, ease, ease-in, ease-out, ease-in-out,
                    clickSelector: '.toggle-panel', //クリックさせる要素
                    distanceX: '25%', //動く量
                    enableEscapeKey: true //ESCKeyで閉じれるか
                });
});
</script>
	<!--[if IE]><meta http-equiv="imagetoolbar" content="no" /><meta http-equiv="X-UA-Compatible" content="IE=8" /><![endif]-->
	<!--Site by Eirik Backer-->
<style>
#main-nav {
    background: #050A16;
    text-align: center;
}
#main-nav a {
    display: block;
    width: 100%;
    height: 50px;
    line-height: 50px;
    color: #fff;
}
#main-nav a i {
    color: #FF6767;
    margin-right: 5px;
}
#main-nav a:hover {
    background: #242424;
}
#main-nav .scotch-panel-wrapper {
    height: 100%;
}
#scotch-panel { background:#333;color:#fff;}
#scotch-panel a { color:#fff;}
</style>   
</head>
<body>
<form name="addlist_f1" method="post" action="index.php">
<div id="scotch-panel">
  <ul>
    <li><a href="#">Home</a></li>
   </ul>
</div>
<a href="#" class="toggle-panel" style="position:absolute;top:0px;right:0px;line-height:50px;height:50px;text-align:center;width:50px;background:#333;color:#fff;">menu</a>
 <!---
	<div id="menu">
		<h1><a href="http://ringvemedia.com"><b>Pamphlet</b>...</a></h1>
		<div>
			<ul>
				<li><a href="introduction">INTRODUCTION</a></li>
				<li><a href="shanghai">SHANGHAI</a></li>
				<li><a href="beijing">BEIJING</a></li>
				<li><input type="submit" value="Logout" name="logout"></li>
			</ul>
		</div>
	</div>--->
<div id="cont">
  <div class="box large left">
	<h2><b>Pamphlet</b>....</h2>
	This website is the result of a study-trip to Shanghai and Beijing, made by 17 
	Norwegian students in February 2008. We hope this site can be helpful for others 
	visiting China. Through this website we will give a presentation of our trip, 
	and share tips and knowledge we gained when traveling.
  </div>
</div>
</form>
 <div id="bg">
     <div>
       <table cellpadding="0" cellspacing="0">
       <tr>
        <td><img alt="" src="template/img/bg.jpg" />
        </td>
       </tr>
       </table>
     </div>
   </div>

    
</body>
</html><?php }} ?>
