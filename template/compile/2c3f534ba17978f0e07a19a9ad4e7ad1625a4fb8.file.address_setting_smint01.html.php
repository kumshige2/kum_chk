<?php /* Smarty version Smarty-3.1.18, created on 2015-01-08 10:43:53
         compiled from ".\template\address_setting_smint01.html" */ ?>
<?php /*%%SmartyHeaderCode:2138654abb186bf7250-94223464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c3f534ba17978f0e07a19a9ad4e7ad1625a4fb8' => 
    array (
      0 => '.\\template\\address_setting_smint01.html',
      1 => 1420681429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2138654abb186bf7250-94223464',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54abb186c34157_47863599',
  'variables' => 
  array (
    'form' => 0,
    'ary_ad_ids' => 0,
    'ary_ad_names' => 0,
    'ad_cd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54abb186c34157_47863599')) {function content_54abb186c34157_47863599($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\php\\pear\\Smarty\\libs\\plugins\\function.html_options.php';
?><!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Smint sample</title>
<link href="template/smint/css/demo.css" rel="stylesheet" type="text/css">
<link type="text/css" href="template/css/select2.css" rel="stylesheet"/>
<link type="text/css" href="template/smint/css/demo_01.css" rel="stylesheet"/>


<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<!----smint ---->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<script	type="text/javascript" src="template/smint/js/jquery.smint.js"></script>
<script type="text/javascript">
$(document).ready( function() {
    $('.subMenu').smint({
    	'scrollSpeed' : 1000
    });
});
</script>

<!---- select2 ---->
<!---
<script type ="text/javascript" 
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> 
<script type ="text/javascript"
                src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
<script type="text/javascript" src="template/js/select2.min.js"></script>---> 
<script type="text/javascript" src="template/js/select2.js"></script>
<script>
        $(document).ready(function() {
          //  $("#states").select2();
			 $(".states").select2();     
        });
</script>

<!----select2 end ------>
</head>
<body>
<div class="wrap ">
  <div class="section sTop">
    <div class="inner">
      <h1 class="title">SMINT Demo Page</h1>
      <h2 class="subtitle">Feel free to use this as your starting template</h2>
    </div>
  </div>
  <div class="subMenu" >
    <div class="inner"> <a href="#sTop" class="subNavBtn">Home</a> <a href="#s1" class="subNavBtn">Section 1</a> <a href="#s2" class="subNavBtn">Section 2</a> <a href="#s3" class="subNavBtn">Section 3</a> <a href="#s4" class="subNavBtn">Section 4</a> <a href="#s5" class="subNavBtn">Section 5</a> <a href="https://twitter.com/rabmyself" class="subNavBtn extLink end">External Link</a> </div>
  </div>
  <div class="section s1">
    <div class="inner ">
      <h1>Section 1</h1>
      <!-- ↓お知らせ1ここから↓ -->
      <article>
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
      </article>
      <!-- ↑お知らせ1ここまで↑ --> 
      <select  class="states"  style="width:175px;">
                  
                  
                      
    
     <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['ary_ad_ids']->value,'output'=>$_smarty_tpl->tpl_vars['ary_ad_names']->value,'selected'=>$_smarty_tpl->tpl_vars['ad_cd']->value),$_smarty_tpl);?>
  
  
  
                    
                
                </select>
    </div>
  </div>
  <div class="section s2">
    <div class="inner">
      <h1>Section 2</h1>
    </div>
  </div>
  <div class="section s3">
    <div class="inner">
      <h1>Section 3</h1>
      <!-- ↓お知らせ1ここから↓ -->
      <article>
        <div class="infoData"> 
          <!-- ↓表ここから↓ -->
          <table>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['p_id_c']['html'];?>
-<?php echo $_smarty_tpl->tpl_vars['form']->value['p_no_c']['html'];?>
</td>
            </tr>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['label'];?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</td>
            </tr>
            <tr>
              <th>FAX</th>
              <td>00-0000-0000</td>
            </tr>
            <tr>
              <th>E-Mail</th>
              <td><a href="mailto:info@********">info@********</a></td>
            </tr>
            <tr>
              <th>住所</th>
              <td>〒000-0000<br>
                大阪市○○町1-2-3<br>
                △△△10階</td>
            </tr>
            <tr>
              <th>営業時間</th>
              <td>10:00〜21:00</td>
            </tr>
            <tr>
              <th>定休日</th>
              <td>月曜日<br>
                <span class="mini"> 臨時休業がある場合はINFORMATIONでお知らせいたします。 </span></td>
            </tr>
          </table>
          <dd><?php if ($_smarty_tpl->tpl_vars['form']->value['p_nm_c']['required']) {?><font color="red">*</font><?php }?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['label'];?>
<?php echo $_smarty_tpl->tpl_vars['form']->value['p_nm_c']['html'];?>
</dd>
          <!-- ↑表ここまで↑ --> 
          
          <!-- ↓補足説明↓ -->
          <p>◎ なんば駅から徒歩５分です。<br>
            ◎ 駐車場完備！<br>
            ◎ △△△ビルが目印です。</p>
        </div>
      </article>
      <!-- ↑お知らせ1ここまで↑ --> 
    </div>
  </div>
  <div class="section s4">
    <div class="inner">
      <h1>Section 4</h1>
     
     
    </div>
  </div>
  <div class="section s5">
    <div class="inner">
      <h1>Section 5</h1>
    </div>
  </div>
</div>

</body>

<!----smint end ------>


</html>><?php }} ?>
