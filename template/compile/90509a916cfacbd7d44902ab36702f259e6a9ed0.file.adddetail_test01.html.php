<?php /* Smarty version Smarty-3.1.15, created on 2013-12-12 17:14:33
         compiled from "..\template\adddetail_test01.html" */ ?>
<?php /*%%SmartyHeaderCode:1282152a1289ada3112-10755648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90509a916cfacbd7d44902ab36702f259e6a9ed0' => 
    array (
      0 => '..\\template\\adddetail_test01.html',
      1 => 1386836068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1282152a1289ada3112-10755648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a1289b0422d5_64992432',
  'variables' => 
  array (
    'add_res' => 0,
    'add_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a1289b0422d5_64992432')) {function content_52a1289b0422d5_64992432($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>アドレス帳 ～アドレス詳細画面～</title>
<script Language="JavaScript">
<!--
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
-->
</script>
</head>
<body>
<!--<h1>アドレス詳細（<?php echo $_smarty_tpl->tpl_vars['add_res']->value['name_c'];?>
）</h1>---->
	
<h1>Pamphlet 詳細（<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_nm_j'];?>
）</h1>
 
<table border="0px">
	<tr>
		<td>
			<form name="adddetail_f1" method="post" action="index.php?module=adddetail" >
				<input type="hidden" name="judge" >
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
" name="id" >
				<input type="submit" value="アドレス削除" name="del" onClick="deleterecode('<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
')" >
			</form>
		</td>
		<td>
			<form name="adddetail_f2" method="post" action="index.php?module=adddetail&id=<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
" >
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['add_id']->value;?>
" name="id" >
				<input type="submit" value="アドレス編集" name="edit" >
			</form>
		</td>
		<td>
			<form name="adddetail_f3" method="post" action="index.php">
				<input type="submit" value="戻る">
			</form>
		</td>
	</tr>
</table>
<div>
	
    <div>
		<h4>Pamph_head</h4>
		<ul>
			<li><strong>P_id:</strong>	<?php echo $_smarty_tpl->tpl_vars['add_res']->value['p_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['add_res']->value['p_no'];?>
</li>
			<li><strong>p_nm:</strong><?php echo $_smarty_tpl->tpl_vars['add_res']->value['p_nm'];?>
</li>
			<li><strong>Kigyo:</strong><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_cd'];?>
<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_nm_j'];?>
</li>
			<li><strong>kaiko:</strong><?php echo $_smarty_tpl->tpl_vars['add_res']->value['kaiko1'];?>
 ksy:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['ksy_cd'];?>
</li>
			<li><strong>dantai:</strong><?php echo $_smarty_tpl->tpl_vars['add_res']->value['dname_skip'];?>
</li>
            <li><strong>ad:</strong><?php echo $_smarty_tpl->tpl_vars['add_res']->value['ad_cd'];?>
_<?php echo $_smarty_tpl->tpl_vars['add_res']->value['ad_nm'];?>
</li>
			<li><strong>type:</strong><?php echo $_smarty_tpl->tpl_vars['add_res']->value['pmh_type'];?>
&nbsp<?php echo $_smarty_tpl->tpl_vars['add_res']->value['building_c'];?>
<?php echo $_smarty_tpl->tpl_vars['add_res']->value['snk_kei_kbn'];?>
</li>
            <li>bsy:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['bsy_cd'];?>
_<?php echo $_smarty_tpl->tpl_vars['add_res']->value['bsy_nm'];?>
</li>
            <li>yubin:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_yubin'];?>
 ken:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_ken'];?>
</li>
            <li>addr:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_adr1'];?>
<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_adr2'];?>
<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_adr3'];?>
</li>
            <li>ka:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_ka'];?>
<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_tanto'];?>
 tel <?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_tel'];?>
 fax  <?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_tel'];?>
</li>
            <li>dantai:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['dantai_cd_knj'];?>
:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['dname'];?>
</li>        
     	</ul>
		<!--Googleマップ情報の表示-->		
	</div>
    <div style="float:left;">
		<h4>Pamph_head2</h4>
		<ul>
			<li>申込締切日:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['app_ymd'];?>
</li>
			<li>申込:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['card_type_kbn'];?>
</li>
			<li>標準申込書:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['card_hyojun_kbn'];?>
</li>
			<li>標準申込メモ:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['card_hyojun_memo'];?>
</li>
			<li>印刷会社:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['insatu_kgo_cd'];?>
<?php echo $_smarty_tpl->tpl_vars['add_res']->value['insatu_kgo_nm'];?>
</li>
            <li>pmh_size:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['pmh_size_kbn'];?>
 <?php echo $_smarty_tpl->tpl_vars['add_res']->value['pmh_items'];?>
</li>
			<li>web_pmh:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['web_pmh_kbn'];?>
 han_size:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['han_size_kbn'];?>
</li>
            <li>poster:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['pos_type_kbn'];?>
 <?php echo $_smarty_tpl->tpl_vars['add_res']->value['pos_items'];?>
 部</li>
            <li>bessatu:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['bes_items'];?>
部　その他：<?php echo $_smarty_tpl->tpl_vars['add_res']->value['etc_type'];?>
 <?php echo $_smarty_tpl->tpl_vars['add_res']->value['etc_items'];?>
 部</li>
        </ul>	<!--Googleマップ情報の表示-->		
	</div> 
     <div style="float:left;">
		<h4>Pamph_head3</h4>
		<ul>
			<li>団体数:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['tdandai'];?>
</li>
			<li>費用負担:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['sek_ng_kbn'];?>
</li>
			<li>企業請求:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_sek_kbn'];?>
</li>
			<li>納品ヶ所:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['deli_xx'];?>
 納品日:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['deli_ymd'];?>
<?php echo $_smarty_tpl->tpl_vars['add_res']->value['deli_type'];?>
</li>            
      		<li>総コース数:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['all_crs'];?>
</li>
			<li>産能コース数:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['sanno_crs'];?>
</li>
			<li>コースシェア:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['crs_share_rate'];?>
</li>
			<li>請求締:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['sek_knr_kbn'];?>
</li>
	     </ul>	<!--Googleマップ情報の表示-->		
	</div>
    <div style="float:left;">
		<h4>Pamph_head4</h4>
		<ul>
			<li>受付日:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['uke_ymd'];?>
</li>
			<li>確認日:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['ryo_ymd'];?>
</li>
			<li>発注日:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['hac_ymd'];?>
</li>
			<li>初校上:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['shoko_ymd'];?>
</li>            
      		<li>初校送付:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['shoko_sof_ymd'];?>
</li>
			<li>初校戻:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['shoko_return_ymd'];?>
</li>
			<li>再校上:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['saiko_ymd'];?>
</li>
			<li>再校送付:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['saiko_sof_ymd'];?>
</li>
            <li>再校戻:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['saiko_return_ymd'];?>
</li>
	     </ul>	<!--Googleマップ情報の表示-->		
	</div>
    <div style="float:left;">
		<h4>Pamph_head5</h4>
		<ul>
			<li>三校上:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['ko3_ymd'];?>
</li>
			<li>責了:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['sekryo_ymd'];?>
</li>
			<li>色校:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['color_kosei_ymd'];?>
</li>
			<li>文字校:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['moji_kosei_ymd'];?>
</li>            
      		<li>送付依頼:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['sof_irai_ymd'];?>
</li>
			<li>FAX念校:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['fax_nenko_ymd'];?>
</li>
            <li>表紙色数:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['hyosi_colors'];?>
</li>
			<li>借用物:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['rental'];?>
</li>
			<li>納品先:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['noh_kbn'];?>
 <?php echo $_smarty_tpl->tpl_vars['add_res']->value['noh_item'];?>
 <?php echo $_smarty_tpl->tpl_vars['add_res']->value['noh_ymd'];?>
 </li>            
	     </ul>	<!--Googleマップ情報の表示-->		
	</div> 
     <div style="float:left;">
		<h4>Pamph_head6</h4>
		<ul>
			<li>CancelPolicy:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['cansel_chk'];?>
</li>
			<li>団体住所:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['dan_adr_chk'];?>
</li>
			<li>再受講:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['saij_chk'];?>
</li>
			<li>e-learning:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['e_chk'];?>
</li>            
      		<li>資格受験:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['sku_inf_chk'];?>
</li>
			<li>一般受講料:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['juryo_chk'];?>
</li>
            <li>受講対象:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['juko_chk'];?>
</li>
			<li>科目数:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kmk_chk'];?>
</li>		         
	     </ul>	<!--Googleマップ情報の表示-->		
	 </div>
     <div style="clear: both;"></div>
     <div style="float:left;">
		<h4>Pamph_head7</h4>
		<ul>
			<li>英語レベル:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['eig_chk'];?>
</li>
			<li>レベル:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['lbl_chk'];?>
</li>
			<li>資格:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['sku_chk'];?>
</li>
			<li>難易度:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['nani_chk'];?>
</li>            
      		<li>教育訓練:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kyufu_chk'];?>
</li>
			<li>在籍期間:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['zai_chk'];?>
</li>
            <li>ワンポイント:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['one_p_chk'];?>
</li>
			<li>その他:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['rental'];?>
</li>
            <li>営業担当部署:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['uke_ymd_tntos'];?>
</li>
			<li>営業担当者:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['ryo_ymd_tnto'];?>
</li>				         
	     </ul>	<!--Googleマップ情報の表示-->		
	 </div> 
     <div style="float:left;">
		<h4>Pamph_head8</h4>
		<ul>
		    <li>色校正:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['color_kosei_kbn'];?>
</li>
			<li>個人情報:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kjn_inf_kbn'];?>
</li>
			<li>初校送付:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['sho_sof_kbn'];?>
</li>
			<li>日中連絡先:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['contact_kbn'];?>
</li>            
      		<li>旧コース名:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['old_crs_kbn'];?>
</li>
			<li>e-learning:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['e_learning_kbn'];?>
</li>
            <li>企業連絡:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kgo_ren_kbn'];?>
</li>
			<li>CancelPolicy:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['cansel_policy_kbn'];?>
</li>
            <li>Data収集:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['data_select_kbn'];?>
</li>
            <li>給付金:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kyufu_kbn'];?>
</li>
			<li>日経BP:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['nik_bp_kbn'];?>
</li>
            <li>納品形態:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['web_noh_kbn'];?>
</li>
            <li>納品紹介ページ:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kyu_sho_page'];?>
 DL::<?php echo $_smarty_tpl->tpl_vars['add_res']->value['dl_kbn'];?>
</li>
            <li>納品紹介団体数:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['kyu_sho_dantai'];?>
</li>	     
	     </ul>	<!--Googleマップ情報の表示-->		
	</div>
    <div style="float:left;">
		<h4>Pamph_head9</h4>
		<ul>
			<li>パンフ制作費:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['pmh_cost'];?>
</li>
			<li>ポスター制作費:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['post_cost'];?>
</li>
			<li>別冊制作費:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['bes_cost'];?>
</li>
			<li>その他制作費:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['any_cost'];?>
</li>            
      		<li>専有ページ:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['senyu_page'];?>
</li>
			<li>総ページ:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['all_page'];?>
</li>
            <li>共通ページ:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['com_page'];?>
</li>
			<li>紹介ページ:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['sho_page'];?>
</li>
            <li>ページ単価:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['page_tanka'];?>
</li>
			<li>経理コード:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['nik_ker_cd'];?>
</li>
            <li>請求月:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['sek_yymmdd'];?>
</li>
                
	     </ul>	<!--Googleマップ情報の表示-->		
	</div> 
    <div style="float:left;">
		<h4>Pamph_head10</h4>
		<ul>
			<li>制作総額:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['sum_cos'];?>
</li>
			<li>他団体請求費:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['tdan_sek'];?>
</li>
            <li>産能大掲載費:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['sanno_keisai_cost'];?>
</li>			
            <li>共通ページ費:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['com_cost'];?>
</li>
			<li>紹介ページ費:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['sho_cost'];?>
</li>
            <li>調整金額:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['etc_cost'];?>
</li>
			<li>管理費:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['mng_cost'];?>
</li>
            <li>産能大負担額:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['sanno_cost'];?>
</li>
                
	     </ul>	<!--Googleマップ情報の表示-->		
	</div> 
    <div style="clear: both;"></div>
    <div style="float:left;">
		<h4>Pamph_head11</h4>
		<ul>
			<li>特記事項:<?php echo $_smarty_tpl->tpl_vars['add_res']->value['memos'];?>
</li>                
	     </ul>	<!--Googleマップ情報の表示-->		
	</div>                                                           
</div>
</body>
</html>
<?php }} ?>
