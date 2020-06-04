<?php /* Smarty version Smarty-3.1.21, created on 2016-02-25 11:04:12
         compiled from ".\template\adddetail.html" */ ?>
<?php /*%%SmartyHeaderCode:946656ce611c345243-53281089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9432677471c056454b29c0476829ff6135e1d10a' => 
    array (
      0 => '.\\template\\adddetail.html',
      1 => 1453355278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '946656ce611c345243-53281089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lng01' => 0,
    'lat01' => 0,
    'add_res' => 0,
    'add_id' => 0,
    'g_flag' => 0,
    'gmap_res' => 0,
    'fb_flag' => 0,
    'tw_flag' => 0,
    'tw_res' => 0,
    'fb_res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56ce611c438e23_60075413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ce611c438e23_60075413')) {function content_56ce611c438e23_60075413($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" /> 

<link rel="stylesheet" type="text/css" href="template/css/style01.css" />
<link rel="stylesheet" type="text/css" media="screen" href="template/css/css-table.css" />

<!--- table grid ---->
<link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style00.css">
<link rel="stylesheet" type="text/css" href="template/pricing_tables/css/style01.css">
<!---
<link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />--->
 <!-- git hub  button ----->
<link rel="stylesheet" href="template/git_hub_btn/css/gh-buttons01.css">
<!-- git hub button /prettyify -->
<link rel="stylesheet" href="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css">

<link rel="stylesheet" media="screen" href="template/fancyselect/index01.css">
  
<title>アドレス帳 ～アドレス詳細画面～</title>

<?php echo '<script'; ?>
 Language="JavaScript">

// 削除ボタン押下
function deleterecode(id){
	if(confirm("削除してもよろしいですか?")!=false){
		document.adddetail_f1.judge.value="1";
		document.adddetail_f1.action="index.php?module=adddetail&id="+id;
		document.adddetail_f1.submit();
	} else {
		document.adddetail_f1.judge.value="0";
		document.adddetail_f1.action="index.php?module=adddetail&id="+id;
		document.adddetail_f1.submit();
	}
}

<?php echo '</script'; ?>
>

 <!-- git hub  button ----->
 <?php echo '<script'; ?>
 src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"><?php echo '</script'; ?>
>
 
 <!--- google map ---->
 <?php echo '<script'; ?>
 type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 type="text/javascript" src="template/js/my.js" id="myjs" data-lng01="<?php echo $_smarty_tpl->tpl_vars['lng01']->value;?>
" data-lat01="<?php echo $_smarty_tpl->tpl_vars['lat01']->value;?>
"><?php echo '</script'; ?>
>
 <!---
 <?php echo '<script'; ?>
 type="text/javascript" src="template/js/my.js" id="myjs" data-myjs-params='{"foo":"FOO","bar":"BAR"}'><?php echo '</script'; ?>
>
                                                         
<?php echo '<script'; ?>
 src="template/js/my.js" id="myjs" data-lng01="<?php echo $_smarty_tpl->tpl_vars['lng01']->value;?>
" data-lat01="<?php echo $_smarty_tpl->tpl_vars['lat01']->value;?>
"><?php echo '</script'; ?>
>

  google.maps.event.addDomListener(window, 'load', function()
        {
            var lng = <?php echo $_smarty_tpl->tpl_vars['lng01']->value;?>
;
			var lat = <?php echo $_smarty_tpl->tpl_vars['lat01']->value;?>
;
            			
            var latlng = new google.maps.LatLng(lat, lng);
            var mapOptions = {
				center: latlng,
				zoom:16,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scaleControl: true
				};
            var mapObj = new google.maps.Map(document.getElementById('gmap'), mapOptions);

            var marker = new google.maps.Marker({
                position: latlng,
                map: mapObj
            });
        });
        ------>

</head>

<body class="body01">
<!--<h1>アドレス詳細（{$add_res.name_c}） </h1>
<h2>アドレス詳細（<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_nm_j'];?>
）</h2>--->
<div class='theme01'>
<h2>Address 検索</h2>
<p>A better select for discerning web developers everywhere.</p>
</div>
<form name='adddetail_f1' method="post">              
<div class="container clearfix" style="background-color:#eeeeee;margin-top:10px;">
  <div class="grid6 first" >
   <button class="button01 icon home" type="button" onclick="location.href='index.php?module=search'" style="width:120px">Return</button>
    <input type="hidden" name="judge" >
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
" name="p_id">
   
     <button class="button01 icon edit" type="submit" name="edit" style="width:120px">Edit</button>
     <button class="button01 icon trash" type="submit" name="del"  onClick="deleterecode('<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
')" style="width:120px; color:#F0C;">Delete</button></a>
   </div>
  <div class="grid6" >
  </div>
</div>  
<!---
<table border="0px">
	<tr>
		<td>
			<form name="adddetail_f1" method="post" action="index.php?module=adddetail" >
				<input type="hidden" name="judge" >
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
" name="p_id" >
				<input type="submit" value="アドレス削除" name="del" onClick="deleterecode('<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
')" >
			</form>
		</td>
		<td>
			<form name="adddetail_f2" method="post" action="index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
" >
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
" name="p_id" >
				<input type="submit" value="アドレス編集" name="edit" >
			</form>
		</td>
		<td>
			
          <form name="adddetail_f3" method="post" action="index.php?module=search">
				<input type="submit" value="   Return     ">
			</form>
		</td>
	</tr>
</table>
---->
<div style="visibility: hidden;"></div>
<div class="container clearfix" style="background-color:#eeeeee;margin-top:10px;">
  <div class="grid5 first" >
         <table class="company" style="color:#999999; font-family: Consolas;">
            <tbody>
              <tr>
                <th style="text-align:left;  " >P_id</th>
                <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['p_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['add_res']->value['p_no'];?>
</td>
              </tr>
               <tr>
                <th style="text-align:left;" >P_nm</th>
                <td style="width:400px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['p_nm'];?>
</td>
              </tr>
               <tr>
                <th style="text-align:left;" >kaiko</th>
                <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kaiko1'];?>
</td>
              </tr>
               <tr>
                <th style="text-align:left;" >Kgo</th>
                <td style="width:400px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_nm_j'];?>
</td>
              </tr>
                <tr>
                <th style="text-align:left;" >Dantai</th>
                <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['dname'];?>
</td>
              </tr>
               <tr>
                <th style="text-align:left;" >AD</th>
                <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['ad_nm'];?>
</td>
              </tr>
             <tr>
                <th style="text-align:left;" >Type</th>
                <td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['pmh_type'];?>
</td>
              </tr>
           
            
           </tbody>
       </table>
   </div>
   
   <div class="grid7" >
      <table class="company" style="color:#999999; font-family: Consolas;">
            <tbody>
              <tr>
                <th  style="text-align:left;  " >Ken</th>
                <td id='ken' style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_ken'];?>
</td>
              </tr>
               <tr>
                <th style="text-align:left;" >Addr1</th>
                <td id='adr1' style="width:400px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_adr1'];?>
</td>
              </tr>
               <tr>
                <th style="text-align:left;" >Addr2</th>
                <td id='adr2' style="width:400px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_adr2'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:left;" >Addr3</th>
                <td id='adr3' style="width:400px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_adr3'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:left;" >Tnto_bsy</th>
                <td style="width:400px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_tnto_bsy_nm_j'];?>
</td>
              </tr>
               <tr>
                <th style="text-align:left;" >Tnto</th>
                <td style="width:400px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_tnto_nm_j'];?>
</td>
              </tr>
                <tr>
                <th style="text-align:left;" >Tel</th>
                <td style="width:400px;">TEL:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_tel'];?>
FAX:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_fax'];?>
</td>
              </tr>
            
           
            
           </tbody>
       </table>
   </div>
 </div>
 
 <div class="container clearfix" style="background-color:#eeeeee;margin-top:10px;">
    <div class="grid7 first" >
      <div id="gmap" style="width: 540px; height: 370px; border: 1px solid Gray;"></div>
    </div>
    
    <div class="grid5" >
     <!-- <div class="span4" style="font-family:consolas">--->
            <h4>Our Location</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_yubin'];
echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_ken'];
echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_adr1'];
echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_adr2'];
echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_adr3'];?>
</p>
            <hr class="grey"/>
            <h4>Email &amp; Phone</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_email'];?>
</p>
            <p>TEL:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_tel'];?>
FAX:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_fax'];?>
</p>
            <hr class="grey"/>
      <!--</div>    --->  
      <!--
      <table class="company" style="color:#999999; font-family: Consolas;">
            <tbody>
              <tr>
                <th  style="text-align:left;  " >Ken</th>
                <td id='ken' style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_ken'];?>
</td>
              </tr>
               <tr>
                <th style="text-align:left;" >Addr1</th>
                <td id='adr1' style="width:400px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_adr1'];?>
</td>
              </tr>
               <tr>
                <th style="text-align:left;" >Addr2</th>
                <td id='adr2' style="width:400px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_adr2'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:left;" >Addr3</th>
                <td id='adr3' style="width:400px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_adr3'];?>
</td>
              </tr>
              <tr>
                <th style="text-align:left;" >Tnto_bsy</th>
                <td style="width:400px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_tnto_bsy_nm_j'];?>
</td>
              </tr>
               <tr>
                <th style="text-align:left;" >Tnto</th>
                <td style="width:400px;"><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_tnto_nm_j'];?>
</td>
              </tr>
            
           
            
           </tbody>
       </table>--->
   </div>
 </div>     
<div>
	<div style="float:left;">
		<h2></h2>
	
		<!--Googleマップ情報の表示-->
		<?php if ($_smarty_tpl->tpl_vars['g_flag']->value==true) {?>
			<h2>Goggleマップ</h2>
			<?php echo $_smarty_tpl->tpl_vars['gmap_res']->value->printOnLoad();?>

			<div style="margin-right:10px;"><?php echo $_smarty_tpl->tpl_vars['gmap_res']->value->printMap();?>
</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['fb_flag']->value==false) {?>
		<?php } else { ?>
		<?php }?>
	</div>
	<div style="float:left;">
		<!--Twitter情報の表示-->
		<?php if ($_smarty_tpl->tpl_vars['tw_flag']->value==true) {?>
		<h2>Twitter</h2>
		<a href="http://twitter.com/#!/<?php echo $_smarty_tpl->tpl_vars['tw_res']->value['id'];?>
" target=_blank><img src = "<?php echo $_smarty_tpl->tpl_vars['tw_res']->value['image'];?>
" border="1"></a>
		<a href="http://twitter.com/#!/<?php echo $_smarty_tpl->tpl_vars['tw_res']->value['id'];?>
" target=_blank><strong>@<?php echo $_smarty_tpl->tpl_vars['tw_res']->value['id'];?>
</strong></a>
		<ul>
			<li><strong>名前</strong><br>
			<?php echo $_smarty_tpl->tpl_vars['tw_res']->value['name'];?>
</li>
			<li><strong>自己紹介</strong><br>
			<?php echo $_smarty_tpl->tpl_vars['tw_res']->value['description'];?>
</li>
			<li><strong>Webサイト</strong><br>
			<a href="<?php echo $_smarty_tpl->tpl_vars['tw_res']->value['web'];?>
" target=_blank><?php echo $_smarty_tpl->tpl_vars['tw_res']->value['web'];?>
</a></li>
			<li><strong>最新ツイート</strong><br>
			<?php echo $_smarty_tpl->tpl_vars['tw_res']->value['latest_tweet'];?>
</li>
		</ul>
		<?php } elseif ($_smarty_tpl->tpl_vars['tw_flag']->value==false) {?>
		<?php } else { ?>
		<?php }?>
		<!--Facebook情報の表示-->
		<?php if ($_smarty_tpl->tpl_vars['fb_flag']->value==true) {?>
			<h2>Facebook</h2>
			<a href="<?php echo $_smarty_tpl->tpl_vars['fb_res']->value['link'];?>
" target=_blank><img src = "<?php echo $_smarty_tpl->tpl_vars['fb_res']->value['img'];?>
" border="1"></a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['fb_res']->value['link'];?>
" target=_blank><strong><?php echo $_smarty_tpl->tpl_vars['fb_res']->value['id'];?>
</strong></a>
			<ul>
				<li><strong>名前</strong><br>
				<?php echo $_smarty_tpl->tpl_vars['fb_res']->value['name'];?>
</li>
			</ul>
		<?php } elseif ($_smarty_tpl->tpl_vars['fb_flag']->value==false) {?>
		<?php } else { ?>
		<?php }?>
	</div>
</div>
<input type="hidden" id="lat" name="lat" value="<?php echo $_smarty_tpl->tpl_vars['lat01']->value;?>
" />
<input type="hidden" id="lng" name="lng" value="<?php echo $_smarty_tpl->tpl_vars['lng01']->value;?>
" />
</form>

<!--<P style="display: none;" id="lng01"><?php echo $_smarty_tpl->tpl_vars['lng01']->value;?>
</P>--->



</body>
</html>
<?php }} ?>
