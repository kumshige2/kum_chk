<?php
//set_include_path(get_include_path().PATH_SEPARATOR.$_SERVER["DOCUMENT_ROOT"].'/Classes/');
//include_once 'PHPExcel.php';  
//include_once 'PHPExcel/IOFactory.php';
require '../../vendor/autoload.php';
require_once('encode.php');

//===========================================
// Search   class
//    パンフ検索  module
//===========================================
//print  "<pre>". 'post ' ;
  //  var_dump($_POST['p_id_c']);
//print  "</pre>";
//print  "<pre>". 'get  ';
//   var_dump($_GET);
//print  "</pre>";
//var_dump ($_SESSION);

class order_sheet02  {

  public $pub_rows01;

function dispChannel(){
  $sd = date('Ymd');
  $st = date('Hi');
  //$sf =  'out\pmh_data' . $sd . '.xls';	
  //$sf =  EXCEL_PMH_DATA01 . $sd . '.xls';
  //exit();
  //
  $objReader = new PHPExcel_Reader_Excel2007();
  $objPHPExcel = $objReader->load('template/pmh_order_sht04_temp00.xlsx');
  
  // 0番目のシートをアクティブにする（シートは左から順に、0、1，2・・・）
  $objPHPExcel->setActiveSheetIndex(0);
  // アクティブにしたシートの情報を取得
  $objSheet = $objPHPExcel->getActiveSheet();
  
  $objSheet->setTitle('テストシート');
  //-----------------------------------------
  // line1
  //-----------------------------------------
  $objSheet->setCellValue("D1",htmlspecialchars($this->pub_rows01['bsy_nm']));
  $objSheet->setCellValue("F1",htmlspecialchars($this->pub_rows01['ad_nm']));
  $objSheet->setCellValue("H1",htmlspecialchars($this->pub_rows01['p_nd']));
			    
  //-----------------------------------------
  // line2		   				
  //-----------------------------------------   				   
  $val='';
  $val = ' ' . str_pad($this->pub_rows01['ksy_cd'], 9, "0", STR_PAD_LEFT);
  //$objSheet->setCellValue("B2",htmlspecialchars($val));
   $objSheet->setCellValue("B2",' ' .htmlspecialchars($this->pub_rows01['ksy_cd']));
   //p_id
  $val = str_pad( $this->pub_rows01['p_id'], 5, "0", STR_PAD_LEFT) . '-' .
         str_pad( $this->pub_rows01['p_no'], 3, "0", STR_PAD_LEFT);
  $objSheet->setCellValue("D2",htmlspecialchars($val));
  $objSheet->setCellValue("F2",htmlspecialchars($this->pub_rows01['tdantai']));
  $objSheet->setCellValue("H2",htmlspecialchars($this->pub_rows01['snk_kei_kbn']));
  //-----------------------------------------
  //  line3
  //-----------------------------------------
  $objSheet->setCellValue("B3",htmlspecialchars($this->pub_rows01['kgo_nm_j']));
  $objSheet->setCellValue("F3",htmlspecialchars($this->pub_rows01['all_crs']));
  $objSheet->setCellValue("H3",htmlspecialchars($this->pub_rows01['pmh_cycle_kbn']));
  //-----------------------------------------
  //  line 4 
  //-----------------------------------------
  $objSheet->setCellValue("B4",htmlspecialchars($this->pub_rows01['p_nm']));
  $objSheet->setCellValue("F4",htmlspecialchars($this->pub_rows01['sanno_crs']));
  //-----------------------------------------
  //  line5
  //-----------------------------------------
  $objSheet->setCellValue("B5",htmlspecialchars($this->pub_rows01['kgo_ken']));
  $objSheet->setCellValue("D5",htmlspecialchars($this->pub_rows01['kaiko1']));
   //crs_share_rate 
  $val='';
 
  switch  (intval($this->pub_rows01['all_crs']))  {
	case 0: 
	  $val= '0%';
	  break; 
	default:
	  $val =  round(intval($this->pub_rows01['sanno_crs']) /  
	  intval($this->pub_rows01['all_crs']),3,PHP_ROUND_HALF_UP) * 100 . '%';
	  break;	 	 
  }
  $objSheet->setCellValue("F5",htmlspecialchars($val));
  $objSheet->setCellValue("H5",htmlspecialchars($this->pub_rows01['kgo_tel']));
  //-----------------------------------------
  // line6
  //-----------------------------------------
  $val='';
  $val = ' ' . str_pad($this->pub_rows01['kgo_cd'], 5, "0", STR_PAD_LEFT);

  $objSheet->setCellValue("B6",htmlspecialchars($val));
  //pmh_type
  $val ='';
  $val = $this->pub_rows01['pmh_type'] . ':' . $this->pub_rows01['pmh_type_nm'];
  $objSheet->setCellValue("D6",htmlspecialchars($val));
  $objSheet->setCellValue("H6",htmlspecialchars($this->pub_rows01['kgo_fax']));
  //-----------------------------------------
  //  line7
  //-----------------------------------------
  $val ='';
  $val = '〒'.$this->pub_rows01['kgo_yubin'] . ':' . $this->pub_rows01['kgo_adr1'];
  $objSheet->setCellValue("B7",htmlspecialchars($val));
  $objSheet->setCellValue("F7",htmlspecialchars($this->pub_rows01['kgo_tnto_bsy_nm_j']));
  //-----------------------------------------
  //   line8
  //-----------------------------------------
  $objSheet->setCellValue("B8",htmlspecialchars($this->pub_rows01['kgo_adr2']));
  $objSheet->setCellValue("F8",htmlspecialchars($this->pub_rows01['kgo_tnto_nm_j']));

  //-----------------------------------------
  //   line9
  //-----------------------------------------
  $objSheet->setCellValue("B9",htmlspecialchars($this->pub_rows01['kgo_adr3']));
  $objSheet->setCellValue("F9",htmlspecialchars($this->pub_rows01['dname']));
  //-----------------------------------------
  //  line11
  //-----------------------------------------
	 $val='';
	 //echo 'pmh_size' . htmlspecialchars($this->pub_rows01['pmh_size_kbn']);
	 switch (htmlspecialchars($this->pub_rows01['pmh_size_kbn'])) {
	   
	   case "A5":
         $val = "■Ａ５ □Ａ４ □Ａ３ □Ｂ５ □Ｂ４ □Ｂ３ □備考";
		 break;
	   case "A4":
         $val =  "□Ａ５ ■Ａ４ □Ａ３ □Ｂ５ □Ｂ４ □Ｂ３ □備考";
		  break;
       case "A3":
         $val  = "□Ａ５ □Ａ４ ■Ａ３ □Ｂ５ □Ｂ４ □Ｂ３ □備考";
		  break;
       case "B5":
         $val = "□Ａ５ □Ａ４ □Ａ３ ■Ｂ５ □Ｂ４ □Ｂ３ □備考";
		  break;
       case "B4":
         $val = "□Ａ５ □Ａ４ □Ａ３ □Ｂ５ ■Ｂ４ □Ｂ３ □備考";
		  break;
       case "B3":
         $val = "□Ａ５ □Ａ４ □Ａ３ □Ｂ５ □Ｂ４ ■Ｂ３ □備考";
		  break;
       case "その他（特記事項明記）":
	     $val= "□Ａ５ □Ａ４ □Ａ３ □Ｂ５ □Ｂ４ □Ｂ３ ■備考";
		  break;
       default:
	     $val = "□Ａ５ □Ａ４ □Ａ３ □Ｂ５ □Ｂ４ □Ｂ３ □備考";
		  break;
	 }
	 $objSheet->setCellValue("B11",$val);
	 $objSheet->setCellValue("F11","部");
	 $objSheet->setCellValue("H11","部");
 //-----------------------------------------
 //  line12
 //-----------------------------------------
	  $val='';
	 switch ($this->pub_rows01['web_pmh_kbn']) {
       case "1":
         $val= "■WEBなし □WEBのみ □WEB+紙 □備考";
		  break;
       case "2":
         $val="□WEBなし ■WEBのみ □WEB+紙 □備考";
		  break;
       case "3":
         $val = "□WEBなし □WEBのみ ■WEB+紙 □備考";
		  break;
       case "9":
         $val = "□WEBなし □WEBのみ □WEB+紙 ■備考";
		  break;
       default:     
         $val= "□WEBなし □WEBのみ □WEB+紙 □備考";
		  break;
	 }
	$objSheet->setCellValue("B12",$val);
 //-----------------------------------------
 //  line13
 //-----------------------------------------
	  $val='';
	  switch ($this->pub_rows01['han_size_kbn']) {
        case "1":
          $val = "□1/2 □1/3 □1/4 ■1 □コース一覧のみ □備考";
		   break;
        case "1/2":
          $val = "■1/2 □1/3 □1/4 □1 □コース一覧のみ □備考";
		   break;
        case "1/3":
          $val = "□1/2 ■1/3 □1/4 □1 □コース一覧のみ □備考";
		   break;
        case "1/4":
          $val= "□1/2 □1/3 ■1/4 □1 □コース一覧のみ □備考";
		   break;
		case  "コース一覧のみ":
          $val = "□1/2 □1/3 □1/4 □1 ■コース一覧のみ □備考";
		   break;
        case  "その他（特記事項に明記）":
          $val = "□1/2 □1/3 □1/4 □1 □コース一覧のみ ■備考";
		   break;
        default:
          $val="□1/2 □1/3 □1/4 □1 □コース一覧のみ □備考";
		   break;
    	 }
		 
      $objSheet->setCellValue("B13",$val);
	 //-----------------------------------------
	 // line14
	 //-----------------------------------------
	 $val='';
	  switch ($this->pub_rows01['pos_type_kbn']) {
        case "無":
          $val= "■無 □出庫 □作成 □刷込(出庫要) □備考";
		   break;
        case "出庫":
          $val= "□無 ■出庫 □作成 □刷込(出庫要) □備考";
		   break;
        case "作成":
          $val= "□無 □出庫 ■作成 □刷込(出庫要) □備考";
		   break;
        case "刷込(出庫要)":
          $val= "□無 □出庫 □作成 ■刷込(出庫要) □備考";
		   break;
        case "その他（特記事項に明記）":
          $val= "□無 □出庫 □作成 □刷込(出庫要) ■備考";
		   break;
        default:
          $val= "□無 □出庫 □作成 □刷込(出庫要) □備考";
		   break;
	  }
	 //kgo_tnto_nm
	$objSheet->setCellValue("B14",$val);
	$objSheet->setCellValue("F14","部");
	//-----------------------------------------
	// line15
	//-----------------------------------------
	//$objSheet->setCellValue("B15",htmlspecialchars($this->pub_rows01['kgo_adr3']));
	$val= '';
	//$val = htmlspecialchars(str_replace($this->pub_rows01['insatu_kgo_nm'], '株式会社', ''));
	$val = htmlspecialchars($this->pub_rows01['insatu_kgo_nm']);
	$objSheet->setCellValue("H15",$val);
	//-----------------------------------------
	// line17
	//-----------------------------------------
	 $val= '';
	 switch ($this->pub_rows01['sek_ng_kbn']) {
       case "1":
         $val= "■請求NG団体なし □請求NG団体あり　企業負担 □請求NG団体あり　本学負担 □備考";
		  break;
       case "2":
         $val= "□請求NG団体なし ■請求NG団体あり　企業負担 □請求NG団体あり　本学負担 □備考";
		  break;
       case "3":
         $val= "□請求NG団体なし □請求NG団体あり　企業負担 ■請求NG団体あり　本学負担 □備考";
		  break;
       case "9":
         $val= "□請求NG団体なし □請求NG団体あり　企業負担 □請求NG団体あり　本学負担 ■備考";
		  break;
       default:
         $val= "□請求NG団体なし □請求NG団体あり　企業負担 □請求NG団体あり　本学負担 □備考";
		  break;
	 }
	$objSheet->setCellValue("B17",$val);
    //-----------------------------------------
	//s  line18
	//-----------------------------------------
	  $val= '';
	 switch ($this->pub_rows01['kgo_sek_kbn']) {	 
	   case "1":
         $val= "■企業請求なし □企業請求あり　印刷会社請求書発行 □企業請求あり　本学請求書発行 □備考";
		  break;
       case "2":
         $val= "□企業請求なし ■企業請求あり　印刷会社請求書発行 □企業請求あり　本学請求書発行 □備考";
		  break;
       case "3":
         $val= "□企業請求なし □企業請求あり　印刷会社請求書発行 ■企業請求あり　本学請求書発行 □備考";
		  break;
	   case "9":
         $val= "□企業請求なし □企業請求あり　印刷会社請求書発行 □企業請求あり　本学請求書発行 ■備考";
		  break;
       default:
         $val= "□企業請求なし □企業請求あり　印刷会社請求書発行 □企業請求あり　本学請求書発行 □備考";
		  break;
	 }
	$objSheet->setCellValue("B18",$val);
	 //-----------------------------------------
	 //  line19
	 //-----------------------------------------	
	  $val= '';
	 switch ($this->pub_rows01['data_select_kbn']) {	
	   case "無":
         $val="■無 □HTML □PDF □備考";
		  break;
       case "HTML":
         $val="□無 ■HTML □PDF □備考";
		  break;
       case "PDF":
         $val="□無 □HTML ■PDF □備考";
		  break;
       case "その他（特記事項に明記）":
         $val="□無 □HTML □PDF ■備考";
		  break;
       default:
         $val="□無 □HTML □PDF □備考";
		  break;
	 }
	 $objSheet->setCellValue("B19",$val);
	
	 $val= '';
	 switch ($this->pub_rows01['kgo_ren_kbn']) {	
	   case "要　印刷会社から":
         $val= "■要:印刷会社から □要:ＡＤから □不要 □備考";
		  break;
       case "要　ＡＤから":
         $val= "□要:印刷会社から ■要:ＡＤから □不要 □備考";
		  break;
	   case "不要":
         $val= "□要:印刷会社から □要:ＡＤから ■不要 □備考";
		  break;
       case "その他（特記事項に明記）":
         $val= "□要:印刷会社から □要:ＡＤから □不要 ■備考";
		  break;
       default:
         $val= "□要:印刷会社から □要:ＡＤから □不要 □備考";
		  break;
	 }
	 $objSheet->setCellValue("F19",$val);
	 //-----------------------------------------
	 //  line20
	 //-----------------------------------------	
	 $val= '';
	 switch ($this->pub_rows01['cansel_policy_kbn']) {	
	   case "有　キャンセル可":
         $val= "■有 cancel不可 □有 cancel可 □不要 □備考";
		  break;
       case "有　キャンセル不可":
         $val="□有 cancel不可 ■有 cancel可 □不要 □備考";
		  break;
       case "無し":
         $val="□有 cancel不可 □有 cancel可 ■不要 □備考";
		  break;
       default:
         $val="□有 cancel不可 □有 cancel可 □不要 □備考";
		  break;
	 }
     $objSheet->setCellValue("B20",$val);      
    $val= '';
	 switch ($this->pub_rows01['color_kosei_kbn']) {	        
       case "有":
         $val= "■有 □無";
		  break;
       case "無":
         $val= "□有 ■無";
		  break;
       default:
         $val= "□有 □無";
		  break;
		  
	 }
	 $objSheet->setCellValue("F20",$val);              
	 //
	 //-----------------------------------------
	 // line21
	 //-----------------------------------------	
	 $val= '';
	 switch ($this->pub_rows01['kjn_inf_kbn']) {	
	   case "Ａタイプ（１ページで案内)":
         $val= "■１ページで案内 □申込書にとりまとめない □申込書にとりまとめ □備考";
		  break;
       case "Ｂタイプ１（申込書にとりまとめない）":
         $val= "□１ページで案内 ■申込書にとりまとめない □申込書にとりまとめ □備考";
		  break;
       case "Ｂタイプ２（申込書にとりまとめる）":
         $val= "□１ページで案内 □申込書にとりまとめない ■申込書にとりまとめ □備考";
		  break;
       case "その他（特記事項に明記）":
         $val= "□１ページで案内 □申込書にとりまとめない □申込書にとりまとめ ■備考";
		  break;
       default:
         $val= "□１ページで案内 □申込書にとりまとめない □申込書にとりまとめ □備考";
		  break;
	 }
	  $objSheet->setCellValue("B21",$val);   
     //-----------------------------------------
	 //  line22
	 //-----------------------------------------	     
     $val= '';
	 switch ($this->pub_rows01['kyufu_kbn']) {
       case "有　勤務先払（申込書に同意書）":
         $val="■有　勤務先払（申込書に同意書） □有　個人払 □無 □備考";
		  break;
       case "有　個人払":
         $val="□有　勤務先払（申込書に同意書） ■有　個人払 □無 □備考";
		  break;
       case "無":
         $val= "□有　勤務先払（申込書に同意書） □有　個人払 ■無 □備考";
		  break;
       case "その他（特記事項に明記）":
         $val= "□有　勤務先払（申込書に同意書） □有　個人払 □無 ■備考";
		  break;
       default:
         $val="□有　勤務先払（申込書に同意書） □有　個人払 □無 □備考";
		  break;
	 }
	 $objSheet->setCellValue("B22",$val);   
	
     //-----------------------------------------
	 //  line23
	 //-----------------------------------------	
	 $val= '';
	 switch ($this->pub_rows01['sho_sof_kbn']) {
	   case "企業に直送":
         $val= "■企業に直送 □ＡＤ持参 □ＡＤチェック後企業に送付 □備考";
		  break;
       case "ＡＤ持参":
         $val= "□企業に直送 ■ＡＤ持参 □ＡＤチェック後企業に送付 □備考";
		  break;
       case "ＡＤチェック後企業に送付":
         $val= "□企業に直送 □ＡＤ持参 ■ＡＤチェック後企業に送付 □備考";
		  break;
       default:
         $val= "□企業に直送 □ＡＤ持参 □ＡＤチェック後企業に送付 □備考";
		  break;
	 }
	 $objSheet->setCellValue("B23",$val);   
	
    //-----------------------------------------
	 //card_type_kbn  line25 26
	 //-----------------------------------------
	 $val01='';
     $val02='';
     switch ($this->pub_rows01['card_type_kbn']) {
       case "1":
         $val01= "■とじこみ □挟込巻頭 □挟込巻末 □複写巻頭";
         $val02= "□複写巻末 □別納 □WEB申込 □その他 □なし";
		  break;
       case "2":
         $val01= "□とじこみ ■挟込巻頭 □挟込巻末 □複写巻頭";
         $val02= "□複写巻末 □別納 □WEB申込 □その他 □なし";
		  break;
       case "3":
         $val01= "□とじこみ □挟込巻頭 ■挟み込巻末 □複写巻頭";
         $val02= "□複写巻末 □別納 □WEB申込 □その他 □なし";
		  break;
       case "4":
	     $val01= "□とじこみ □挟込巻頭 □挟込巻末 ■複写巻頭";
         $val02= "□複写巻末 □別納 □WEB申込 □その他 □なし";
		  break;
       case "5":
         $val01= "□とじこみ □挟込巻頭 □挟込巻末 □複写巻頭";
		 $val02= "■複写巻末 □別納 □WEB申込 □その他 □なし";
		  break;
       case "6":
	     $vaL01= "□とじこみ □挟込巻頭 □挟込巻末 □複写巻頭";
		 $val02= "□複写巻末 ■別納 □WEB申込 □その他 □なし";
		  break;
       case "7":
         $val01= "□とじこみ □挟込巻頭 □挟込巻末 □複写巻頭";
		 $val02= "□複写巻末 □別納 ■WEB申込 □その他 □なし";
		  break;
       case "9":
         $val01= "□とじこみ □挟込巻頭 □挟込巻末 □複写巻頭";
         $val02= "□複写巻末 □別納 □WEB申込 ■その他 □なし";
		  break;
       case "A":
         $val01= "□とじこみ □挟込巻頭 □挟込巻末 □複写巻頭";
         $val02= "□複写巻末 □別納 □WEB申込 □その他 ■なし";
		  break;
       default:
         $val01= "□とじこみ □挟込巻頭 □挟込巻末 □複写巻頭";
         $val02= "□複写巻末 □別納 □WEB申込 □その他 □なし";
		  break;
	 }
	 $objSheet->setCellValue("B25",$val01);   
	 $objSheet->setCellValue("B26",$val02);   
	 //-----------------------------------------
	 //card_type_memo card_hyojun_kbn   line28
	 //----------------------------------------- 
	 $val= '';
	 switch ($this->pub_rows01['card_hyojun_kbn']) {
       case "未使用":
          $val= "■未使用 □１部使用 □使用";
		   break;
       case "１部使用":
          $val= "□未使用 ■１部使用 □使用";
		   break;
       case "使用";
          $val= "□未使用 □１部使用 ■使用";
		   break;
       default:
          $val= "□未使用 □１部使用 □使用";
		   break;
	 }
	 $objSheet->setCellValue("B28",$val);   
	 $objSheet->setCellValue("B29",htmlspecialchars($this->pub_rows01['card_hyojun_memo']));   

  //-----------------------------------------
  //  line35  ichi_tbl
  //----------------------------------------- 
  $val= '';
  switch ($this->pub_rows01['p_id_ichi']) {
    case '':
  	  $val = '□総合ガイドと同様　□特別設定あり';
	  break;
    case  NULL:
	  $val = '□総合ガイドと同様　□特別設定あり';
	  break;
	default:
	   switch ($this->pub_row01['toku_no_kbn']) {
         case True:
           $val = '■総合ガイドと同じ　□特別設定あり';
		   break;
         case False:
           $val = '□総合ガイドと同じ　■特別設定あり';
		   break;
	   }
  }
   $objSheet->setCellValue('B35',$val); 
  //-----------------------------------------
  //  line36  在籍期間
  //----------------------------------------- 
  $val= '';
  switch ($this->pub_rows01['p_id_ichi']) {
	case '':
  	  $val='□受講期間 + (    )ヶ月 □開講日 +  (    )ヶ月  □その他';
	  break;
    case  NULL:
	  $val='□受講期間 + (    )ヶ月 □開講日 +  (    )ヶ月  □その他';
	  break;
	default:
	   switch ($this->pub_row01['toku_no_kbn']) {
         case True:
		    $val='■本学基準';
			break;
         default:  			
           switch  ($this->pub_row01['zai_f']) {
			  case NULL:
			    $val='';
				break;     
              case '':
			    $val='';
				break;				
              case 0:
			    $val='■本学基準';
				break;
			  case 3:   //■その他
                $val='■' . e($this->pub_row01[Kikan_F1.Kikan]) . '下記参照';
				break;
		      default:
			    $val='■' . e($this->pub_row01[Kikan_F1.Kikan]) . 
				mb_convert_kana($this->pub_row01[Zai_mnt],'R','UTF-8') & 'ヶ月';
                break;
		   }
	   }
  }
   $objSheet->setCellValue('B36',$val); 
  //-----------------------------------------
  //  line37  ichi_tbl 表示chk受講期間
  //-----------------------------------------
  $val= '';
  switch ($this->pub_rows01['p_id_ichi']) {
	case '':
  	  $val='□受講期間 + (    )ヶ月 □開講日 +  (    )ヶ月  □その他';
	  break;
    case  NULL:
	  $val='□受講期間 + (    )ヶ月 □開講日 +  (    )ヶ月  □その他';
	  break;
    default:
	  switch ($this->pub_row01['toku_no_kbn']) {
         case True:
		    $val='■本学基準';
			break;
         default:     
            switch  ($this->pub_row01['hyozai_f']) {
			  case NULL:
			    $val='';
				break;     
              case '':
			    $val='';
				break;				
              case 0:
			    $val='■本学基準';
				break;
			  case 3:   //■その他
                $val='■' . e($this->pub_row01[Kikan_F1_1.Kikan]) . '下記参照';
				break;
		      default:
			    $val='■' . e($this->pub_row01[Kikan_F1_1.Kikan]) . 
				mb_convert_kana($this->pub_row01[HyoZai_mnt],'R','UTF-8') & 'ヶ月';
                break;
		   }
	   }
  }
   $objSheet->setCellValue('B37',$val); 
  //-----------------------------------------
  //  line38 優秀期間
  //-----------------------------------------   
  $val= '';
  switch ($this->pub_rows01['p_id_ichi']) {
	case '':
  	  $val='□受講期間 + (    )ヶ月 □開講日 +  (    )ヶ月  □その他';
	  break;
    case  NULL:
	  $val='□受講期間 + (    )ヶ月 □開講日 +  (    )ヶ月  □その他';
	  break;
    default:
	  switch ($this->pub_row01['toku_no_kbn']) {
         case True:
		    $val='■本学基準';
			break;
         default:        
            switch  ($this->pub_row01['yusyu_f']) {
			  case NULL:
			    $val='';
				break;     
              case '':
			    $val='';
				break;				
              case 0:
			    $val='■本学基準';
				break;
			  case 3:   //■その他
                $val='■' . e($this->pub_row01[Kikan_F1_2.Kikan]) . '下記参照';
				break;
		      default:
			    $val='■' . e($this->pub_row01[Kikan_F1_2.Kikan]) . 
				mb_convert_kana($this->pub_row01[yusyu_mnt],'R','UTF-8') & 'ヶ月';
                break;
		   }
	   }
  }
   $objSheet->setCellValue('B38',$val); 
  //-----------------------------------------
  //  line39 コース名変更
  //-----------------------------------------
  $val= '';
  switch ($this->pub_rows01['p_id_ichi']) {
    case '':
  	  $val='□なし  □あり';
	  break;
    case  NULL:
	  $val='□なし  □あり';
	  break;
    default:
	   switch ($this->pub_row01['toku_no_kbn']) {
         case True:
		    $val="■なし";
			break;
         default:
		   switch  ($this->pub_row01['crs_nm_hk_kbn']) {
			  case TRUE:
			    $val='■あり';
				break;     
              case FALSE:
			    $val='■なし';
				break;				
		   }
	   }
  }
   $objSheet->setCellValue('B39',$val);               
  //-----------------------------------------
  //  line40 受講料変更
  //-----------------------------------------
  $val= '';
  switch ($this->pub_rows01['p_id_ichi']) {
    case '':
  	  $val='□なし  □あり';
	  break;
    case  NULL:
	  $val='□なし  □あり';
	  break;
    default:
	   switch ($this->pub_row01['toku_no_kbn']) {
         case True:
		    $val="■なし";
			break;
         default:
		   switch  ($this->pub_row01['Juko_hk_kbn']) {
			  case TRUE:
			    $val='■あり';
				break;     
              case FALSE:
			    $val='■なし';
				break;				
		   }
	   }
  }
   $objSheet->setCellValue('B40',$val);   
 //-----------------------------------------
  //  line36 併用払
  //-----------------------------------------
  $val= '';
  switch ($this->pub_rows01['p_id_ichi']) {
    case '':
  	  $val='□なし  □あり';
	  break;
    case  NULL:
	  $val='□なし  □あり';
	  break;
    default:
	   switch ($this->pub_row01['toku_no_kbn']) {
         case True:
		    $val="■なし";
			break;
         default:
		   switch  ($this->pub_row01['heiyo_kbn']) {
			  case TRUE:
			    $val='■あり';
				break;     
              case FALSE:
			    $val='■なし';
				break;				
		   }
	   }
  }
   $objSheet->setCellValue('G36',$val);  
 //-----------------------------------------
 //  line37 38  拠点確認不要 コース追加OK
 //-----------------------------------------
  $val1='';
  $val2='';
  
  switch ($this->pub_rows01['keisai_crs_add']) {
    case TRUE:
  	  $val1= '拠点確認不要 コース追加OK';
      $val2= '□拠点確認必要';
	  break;
    case FALSE:
	  $val1='□拠点確認不要 コース追加OK';
      $val2='■拠点確認必要';
	  break;
  }
   $objSheet->setCellValue('G36',$val);  
 //-----------------------------------------
 //  line41  memo
 //-----------------------------------------         
     $val= e($this->pub_row01['otr_t']);
	 $objSheet->setCellValue('B41',$val);      
 //-----------------------------------------
 //  line42  memo
 //-----------------------------------------     
     switch ($this->pub_rows01['Kigyo_crs_kbn']) { 
       case true:
	     $val  = e('企業専用（フレックス）コースの申請必要！');
		 $objSheet->setCellValue('A42',$val); 
		 break;
       case false: 
	     $val  = '';
		 $objSheet->setCellValue('A42',$val); 
		 break;
	 }
     switch ($this->pub_rows01['rpt_rnh_kbn']) { 
       case true:
	     $val  = e('リポート特別対応連絡票』起票必要！');
		 $objSheet->setCellValue('E42',$val); 
		 break;
       case false: 
	     $val  = '';
		 $objSheet->setCellValue('E42',$val); 
		 break;
	 }
 
  //----------------------------------------------------------------
  // Excel2007.phpを利用する場合
  $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
  $objWriter->save('out/pmh_order_sht04_temp00_' . $sd . $st . '.xlsx');
  
  $sf='out/pmh_order_sht04_temp00_' . $sd . $st.'.xlsx';
  
					
	 
	//}   end fr 
   //excel send
   //$workbook->send('test01.xls');
  
  // $objsheet->close(); 
   
   $ret_00='index.php';
   
   print('<html>');
   print('<head>');
   print('<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />');
   print('</head>');
   print('<body>');
   print('<p><a href=\''.$sf.'\'">発注票　Excelファイル</a></p>');
   //print('<p><a href="out\test011.xls">Excelファイル</a></p>');
   //print('<a href="index.php?module=search">Return</a>');
   print '<input type="button" value="Return" onClick="location.href=\''.$ret_00.'\'">';
   print('</body></html>'); 

  } // end function
  function setChannel($row01){
	$this->pub_rows01 =$row01;
    var_dump($this->pub_rows01);
	
    $this->dispChannel(); 
  } // end function
} // end_class

 ?>