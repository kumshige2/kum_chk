<?php /* Smarty version Smarty-3.1.18, created on 2015-09-03 10:14:58
         compiled from ".\template\order_sche01.html" */ ?>
<?php /*%%SmartyHeaderCode:32555cd4855f27b93-16232158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28bb509d615bfc147c92c7435681fa4fefaac4ff' => 
    array (
      0 => '.\\template\\order_sche01.html',
      1 => 1441242895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32555cd4855f27b93-16232158',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55cd4855f2ba17_92988806',
  'variables' => 
  array (
    'add_res' => 0,
    'form' => 0,
    'ary_ad_ids' => 0,
    'ary_ad_names' => 0,
    'ad_cd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cd4855f2ba17_92988806')) {function content_55cd4855f2ba17_92988806($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\php\\pear\\Smarty\\libs\\plugins\\function.html_options.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
  
<title>アドレス帳 ～アドレス詳細画面～</title>
  
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

 
</head>

<body>
<!--<h1>アドレス詳細（<?php echo $_smarty_tpl->tpl_vars['add_res']->value['name_c'];?>
） </h1>---->
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
 <div class="container clearfix" style="background-color:#eeeeee;margin-top:10px;">
  <div class="grid12 first" >
   <table></table>
  </div>
</form>
</body>
</html>
<?php }} ?>
