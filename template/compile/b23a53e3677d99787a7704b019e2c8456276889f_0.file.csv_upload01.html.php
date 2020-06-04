<?php
/* Smarty version 3.1.32, created on 2020-01-29 14:22:50
  from 'C:\xampp\htdocs\composer\test\kum_chk\template\csv_upload01.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e3116aaa38815_74201462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b23a53e3677d99787a7704b019e2c8456276889f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\composer\\test\\kum_chk\\template\\csv_upload01.html',
      1 => 1580273483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3116aaa38815_74201462 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!---<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">--->
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title>C1 List /CSV Upload </title>
<link rel="stylesheet" href="template/03c/common/js/colorbox/colorbox.css">
<link rel="stylesheet" href="template/03c/common/css/common.css">
<link rel="stylesheet" type="text/css" href="template/css/style01.css" />
<link rel="stylesheet" type="text/css" media="screen" href="template/css/css-table.css" />
<!-- git hub  button ----->
<link rel="stylesheet" href="template/git_hub_btn/css/gh-buttons01.css">
<!-- git hub button /prettyify -->

<!----pricing_table ---->
<link rel="stylesheet" type="text/css" href="template/pricing-tables/css/style.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:Condensed" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>

<?php echo '<script'; ?>
 src="template/03c/common/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="template/03c/common/js/colorbox/jquery.colorbox-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="template/03c/common/js/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="template/js/style_table/jquery-1.2.6.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="template/js/style_table/style-table.js"><?php echo '</script'; ?>
>
<!-- git hub  button ----->
<?php echo '<script'; ?>
 src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"><?php echo '</script'; ?>
>

<!----pricing_table ---->
<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="template/pricing-tables/js/script.js"><?php echo '</script'; ?>
>
<style>
#site-info {
	 background: #000;
	 height: 120px;
}
/*---
body {
	style="background-image: url(template/img/162006_m_wi/bg02.png);
	background-size:cover;"
}---*/
</style>
</head>
<body style="background-color:#eeeeee">
<!---
<body style="background-image: url(template/img/162006_m_wi/bg02.png);
	background-size:cover;">--->
<header>
  <div id="site-info">
    <div> 
      <!-- ↓サイト名・ロゴ↓ -->
      <h1>C1_List</h1>
      <div> 
        <!-- ↓キャッチ↓ -->
        <p><br></p>
      </div>
    </div>
  </div>
</header>

<form enctype="multipart/form-data" <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
  method="post" class="def" action="index.php">

<div id="container" style="margin-top:10px;margin-bottom:30px">
	<!---
    <div class="whole">
	  <div class="type"><p>Simple</p></div>
	  <div class="plan">
         <div class="header">
			<span>$</span>29<sup>99</sup>
			<p class="month">per month</p>
		 </div>
		 <div class="content">
			<ul>
				<li>15 Email Accounts</li>
				<li>100GB Space</li>
				<li>1 Domain Name</li>
				<li>500GB Bandwidth</li>
			</ul>
		 </div>
		 <div class="price">
            <a href="#" class="bottom"><p class="cart">Add to cart</p></a>
	 	 </div>
	  </div>  end of plan 
    </div>   end of whole --->
	<div class="whole">
	  <div class="type standard"><p>Upload</p></div>
	  <div class="plan">
        <div class="header1"></div>
		<div class="content">
			<ul>
                <li>Select file Filename(CSV,TXT is only supported):<input class="button01 icon tag" type="file" name="upfile"  style="width:200px;" />
                <input type="submit" name='upload' value="Upload" class="button01 icon tag" style="width:150px;"/></li>
				<li>Name :<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
                <li>Type :<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</li>
				<li>Cnt  :<?php echo $_smarty_tpl->tpl_vars['cnt']->value;?>
</li>
				<li>Error:<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
			</ul>
		</div>
		<div class="price">
			<a href="#" class="bottom"><p class="cart">Msg  :<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p></a>
		</div>  
	</div>   <!--- end of plan --->
  </div>  <!--- end of whole --->

</div> <!--- end of container --->


<button class="button01 icon home" type="button" onclick="location.href='index.php'" style="width:120px">
Return</button>
<button class="button01 icon search" type="submit" name="search" style="width:120px">View</button>  

</form>
</body>
</html><?php }
}
