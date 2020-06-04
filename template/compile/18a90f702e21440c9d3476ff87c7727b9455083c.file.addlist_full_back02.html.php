<?php /* Smarty version Smarty-3.1.18, created on 2015-09-03 17:24:27
         compiled from ".\template\addlist_full_back02.html" */ ?>
<?php /*%%SmartyHeaderCode:2083255e7acf1097c66-68226243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18a90f702e21440c9d3476ff87c7727b9455083c' => 
    array (
      0 => '.\\template\\addlist_full_back02.html',
      1 => 1441268663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2083255e7acf1097c66-68226243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e7acf10bed77_18000962',
  'variables' => 
  array (
    'form' => 0,
    'ary_ad_ids' => 0,
    'ary_ad_names' => 0,
    'ad_cd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e7acf10bed77_18000962')) {function content_55e7acf10bed77_18000962($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\php\\pear\\Smarty\\libs\\plugins\\function.html_options.php';
?><!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Responsive Full Background Image</title>
<link rel="icon" href="http://sixrevisions.com/favicon.ico" type="image/x-icon" />
<link href="http://fonts.googleapis.com/css?family=Kotta+One|Cantarell:400,700" rel="stylesheet" type="text/css">

<!-- responsive-full  --->
<!---
<link rel="stylesheet" href="template/responsive-full-background-image-master/presentational-only/presentational-only.css">
<link rel="stylesheet" href="template/responsive-full-background-image-master/responsive-full-background-image02.css">
--->
<!--- table grid ---->
<link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style00.css">
<link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style01.css">
<link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />
 <!-- git hub  button ----->
<link rel="stylesheet" href="template/git_hub_btn/css/gh-buttons01.css">
<!-- git hub button /prettyify -->
<link rel="stylesheet" href="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css">
<!-----select 2 ---->
<link type="text/css" href="template/css/select2.css" rel="stylesheet"/>
<link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />

<!-- responsive-full  -->
<!--[if lt IE 9]
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<!----[endif]  -->
<!---
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>--->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <!---- select2 ---->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="template/js/select2.js"></script>
<script>   //  $("#states").select2();
 $(document).ready(function() {       
   $(".states").select2();  
	 $("#makerPulldown").select2();			 
	 $("div#ksy").addClass('invisible');   
     });
</script>

  <!----select2 end ------>
  <!-----
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>--->

  <!-- git hub  button ----->
 <script src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"></script>

 
<!---
</head>
<body id ='bd' style="background-image: url(template/responsive-full-background-image-master/images/the-capsule.png);"  >
--->
<body style="background-image: url(template/162006_m_wi/bg.jpg);background-size:cover;">
<h2>アドレス詳細</h2>
<form name='adddetail_f1' method="post">              
<div class="container clearfix" style="background-color:#eeeeee;margin-top:10px;">
  <div class="grid6 first" >
   <button class="button01 icon home" type="button" onclick="location.href='index.php?'" style="width:120px">Return</button>
    <input type="hidden" name="judge" >    
   </div>
  <div class="grid6" >
  </div>
</div>  
<div style="visibility: hidden;"></div>
<div class="container clearfix" style="background-color:#eeeeee;margin-top:10px;">
  <div class="grid6 first" >
         <table class="company" style="color:#999999; font-family: Consolas;">
            <tbody>
              <tr>
                <th style="text-align:left;  " >P_id</th>
                <td style="width:150px;"></td>
              </tr>
              <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['label'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['bsy_cd_c']['html'];?>
</td>
              </tr>
                <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['form']->value['ndo_c']['label'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['form']->value['ndo_c']['html'];?>
</td>
              </tr>            
            
                <tr>
                <th style="text-align:left;" >Schedule</th>
                <td style="width:150px;"> <button class="button01 icon clock" type="submit" name="gant_pmh01" value="order_sche_mng" style="width:120px">for MANAGER</button></td>
              </tr>
            
           </tbody>
       </table>
   </div>
   
   <div class="grid6">
      <table class="company" style="color:#999999; font-family: Consolas;">
            <tbody>
              <tr>
                <th style="text-align:left;" >AD</th>
                <td style="width:400px;"></td>
              </tr>
              <tr>
                <th  style="text-align:left;  " >AD</th>
                <td>
                   <select  name="ad_cd" class="states" style="width:200px;">
                    
                     <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ary_ad_ids']->value,'output'=>$_smarty_tpl->tpl_vars['ary_ad_names']->value,'selected'=>$_smarty_tpl->tpl_vars['ad_cd']->value),$_smarty_tpl);?>
 
                  </select>
                </td>
               </tr>
              <tr>
                <th style="text-align:left;" >Schedule</th>
                <td style="width:150px;"> <button class="button01 icon clock" type="submit" name="gant_pmh01" value="order_sche" style="width:120px">for AD</button></td>
              </tr>
                       
           </tbody>
       </table>
   </div>
 </div>

</form>
</body>
</html>
<?php }} ?>
