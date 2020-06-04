<?php /* Smarty version Smarty-3.1.18, created on 2015-09-15 16:11:29
         compiled from ".\template\min_upload01.html" */ ?>
<?php /*%%SmartyHeaderCode:2305255f66f8291a030-60702692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12f21acde7d78660136171b7622be0d1e014acf7' => 
    array (
      0 => '.\\template\\min_upload01.html',
      1 => 1442301083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2305255f66f8291a030-60702692',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f66f82941135_76528925',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f66f82941135_76528925')) {function content_55f66f82941135_76528925($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


		<title>Mini Ajax File Upload Form</title>

		<!-- Google web fonts -->
		<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

		<!-- The main CSS file

		<link href="template/mini-upload-form/assets/css/style.css" rel="stylesheet" />---->
    <!---
       <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
       <script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>--->
      <script src="template/multiple-file-upload/jquery.js"></script>   
      <script src="template/multiple-file-upload/jquery.MultiFile.js"></script>   
                
<!-- 1-30 乱数　---->
<script>
document.write(~~(Math.random()*(30-1)+1));
</script>
	</head>

	<body>
   <form  <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
 class="def" action="index.php" method='post' name='form1'>  
    <input type="file" class="multi" accept="txt|csv" maxlength="1">  
    <input value="send" type="submit">  
</form>  
<!---
		<form id="upload" method="post" action="mini-upload-form/upload.php" enctype="multipart/form-data">
			<div id="drop">
				Drop Here

				<a>Browse</a>
				<input type="file" name="upl" multiple />
			</div>

			<ul>
				
			</ul>

		</form>--->

		<footer>
         
        </footer>
        
		<!-- JavaScript Includes -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	

	

	</body>
</html><?php }} ?>
