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

class excel_out02  {

  public $pub_rows01;
  public $sw;

function dispChannel(){
  $sd = date('Ymd');
  $st = date('His');
 
  
  //----------------------------------------------------
  //$sts  template select 　　
  // template すべてのFIELDが文字属性のシート
 
  //----------------------------------------------------
  //$excel = new PHPExcel();
  // シートの設定
  $count=count($this->pub_rows01);
  //抽出件数:0　のとき
  if ($count==0) {
     //$sf='out/pmh_order_search_' . $sd . $st.'.xlsx';
	 $sf='pagemodule/oops_404_02.php';
	 return $sf;
	 exit();
  }
  
  $temp_f = 'template/pmh_order_search_temp00.xlsx';
  $objReader = new PHPExcel_Reader_Excel2007();
  
//  $cacheMethod = PHPExcel_CachedObjectStorageFactory::cache_to_phpTemp;
//$cacheSettings = array( 'memoryCacheSize' => '128MB');
//PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings);
  
  //$objPHPExcel = $objReader->load('template/pmh_order_sht04_temp00.xlsx');
  $objPHPExcel = $objReader->load($temp_f);
  
  // 0番目のシートをアクティブにする（シートは左から順に、0、1，2・・・）
  $objPHPExcel->setActiveSheetIndex(0);
  // アクティブにしたシートの情報を取得
  $objsheet = $objPHPExcel->getActiveSheet();
  $objsheet->setTitle('Pamphlet  Data');
  //-----------------------------------------
  // セルに値を入れる
  //-----------------------------------------
  // line1   HEADER  
  //-----------------------------------------
  //$objsheet->getStyleByColumnAndRow(1, 2)->getFill()->getStartColor()->setARGB('FFCCFFCC');
  $objsheet->getStyle('A1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('B1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('C1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('D1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('E1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('F1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('G1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('H1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('I1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('J1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('K1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('L1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('M1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('N1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('O1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('P1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('Q1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('R1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('S1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('T1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('U1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('V1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('W1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('X1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('Y1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
  $objsheet->getStyle('Z1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
  
   $objsheet->getStyle('AA1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AB1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
  
   $objsheet->getStyle('AC1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AD1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AE1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AF1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AG1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AH1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AI1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AJ1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AK1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AL1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AM1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AN1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AO1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AP1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AQ1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AR1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
   $objsheet->getStyle('AS1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  getStartColor()->setRGB('adff2f');
  // $objsheet->getStyle('AT1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->
  //getStartColor()->setRGB('adff2f');
  
  $objsheet->setCellValueByColumnAndRow(0,1,e("P_no"));
  $objsheet->setCellValueByColumnAndRow(1,1,e("P_id"));
  $objsheet->setCellValueByColumnAndRow(2,1,e("kaiko1"));
  $objsheet->setCellValueByColumnAndRow(3,1,e("pmh_type"));
  $objsheet->setCellValueByColumnAndRow(4,1,e("P_nm"));
  $objsheet->setCellValueByColumnAndRow(5,1,e("kgo_nm_j"));
  $objsheet->setCellValueByColumnAndRow(6,1,e("ad_nm"));
  $objsheet->setCellValueByColumnAndRow(7,1,e("bsy_nm"));
  $objsheet->setCellValueByColumnAndRow(8,1,e("主催団体Cd"));
  $objsheet->setCellValueByColumnAndRow(9,1,e("団体名"));
  $objsheet->setCellValueByColumnAndRow(10,1,e("dantai_cd_sek"));
  $objsheet->setCellValueByColumnAndRow(11,1,e("納品日"));
  $objsheet->setCellValueByColumnAndRow(12,1,e("製作総額"));
  $objsheet->setCellValueByColumnAndRow(13,1,e("産能大負担額"));
  $objsheet->setCellValueByColumnAndRow(14,1,e("産能大管理費"));
  $objsheet->setCellValueByColumnAndRow(15,1,e("産能大掲載費"));
 
  $objsheet->setCellValueByColumnAndRow(16,1,e("印刷会社"));
  $objsheet->setCellValueByColumnAndRow(17,1,e("製作部数"));
  $objsheet->setCellValueByColumnAndRow(18,1,e("団体数"));
  $objsheet->setCellValueByColumnAndRow(19,1,e("掲載コース数"));
  $objsheet->setCellValueByColumnAndRow(20,1,e("size"));
  $objsheet->setCellValueByColumnAndRow(21,1,e("版下サイズ"));
  $objsheet->setCellValueByColumnAndRow(22,1,e("ポスター"));
  $objsheet->setCellValueByColumnAndRow(23,1,e("ポスター部数"));
  $objsheet->setCellValueByColumnAndRow(24,1,e("別冊部数"));
 //
  $objsheet->setCellValueByColumnAndRow(25,1,e("その他"));
  $objsheet->setCellValueByColumnAndRow(26,1,e("その他部数"));
  $objsheet->setCellValueByColumnAndRow(27,1,e("総ページ"));
  $objsheet->setCellValueByColumnAndRow(28,1,e("共通ページ"));
  $objsheet->setCellValueByColumnAndRow(29,1,e("紹介ページ"));
  $objsheet->setCellValueByColumnAndRow(30,1,e("page_tanka"));
  $objsheet->setCellValueByColumnAndRow(31,1,e("sanno_crs"));
  $objsheet->setCellValueByColumnAndRow(32,1,e("crs_tanka"));
  $objsheet->setCellValueByColumnAndRow(33,1,e("uke_ymd"));
  $objsheet->setCellValueByColumnAndRow(34,1,e("納品ヶ所"));
  $objsheet->setCellValueByColumnAndRow(35,1,e("請求年月"));
  $objsheet->setCellValueByColumnAndRow(36,1,e("他団体営業担当部署"));
  $objsheet->setCellValueByColumnAndRow(37,1,e("他団体営業担当"));
  $objsheet->setCellValueByColumnAndRow(38,1,e("作成周期"));
  $objsheet->setCellValueByColumnAndRow(39,1,e("新規"));
  $objsheet->setCellValueByColumnAndRow(40,1,e("特記事項"));
  $objsheet->setCellValueByColumnAndRow(41,1,e("締"));
  $objsheet->setCellValueByColumnAndRow(42,1,e("kgo_ken"));
  $objsheet->setCellValueByColumnAndRow(43,1,e("kgo_adr1"));
  $objsheet->setCellValueByColumnAndRow(44,1,e("ksy_cd"));
  //$objsheet->setCellValueByColumnAndRow(45,1,e("dantai_cd_sek")); 
 
  //-----------------------------------------
  // line2		   				
  //-----------------------------------------   				   
  //var_dump ($this->pub_rows01);
 
 
	  
   for ( $i = 0; $i < $count; ++$i){
     $val=''; 
	 $val = ' ' . str_pad( $this->pub_rows01[$i]['p_id'], 5, '0', STR_PAD_LEFT);
	 //print  "<pre>". 'val  '  . $val . '</pre>';
	 $objsheet->setCellValueByColumnAndRow(0,$i+2,e($val));
	 $val=''; 
     $val = ' ' . str_pad( $this->pub_rows01[$i]['p_no'], 3, '0', STR_PAD_LEFT);
	 $objsheet->setCellValueByColumnAndRow(1,$i+2,e($val));
	 $objsheet->setCellValueByColumnAndRow(2,$i+2,e($this->pub_rows01[$i]['kaiko1'])); 
   	 $objsheet->setCellValueByColumnAndRow(3,$i+2,e($this->pub_rows01[$i]['pmh_type'])); 
     $objsheet->setCellValueByColumnAndRow(4,$i+2,e($this->pub_rows01[$i]['p_nm']));
	 $objsheet->setCellValueByColumnAndRow(5,$i+2,e($this->pub_rows01[$i]['kgo_nm_j']));
	 $objsheet->setCellValueByColumnAndRow(6,$i+2,e($this->pub_rows01[$i]['ad_nm']));
	 $objsheet->setCellValueByColumnAndRow(7,$i+2,e($this->pub_rows01[$i]['bsy_nm']));
	 $val=''; 
     $val = ' ' . str_pad( $this->pub_rows01[$i]['dantai_cd_knj'], 8, '0', STR_PAD_LEFT);
	 $objsheet->setCellValueByColumnAndRow(8,$i+2,e($val));
	 $objsheet->setCellValueByColumnAndRow(9,$i+2,e($this->pub_rows01[$i]['dname']));
	 $val=''; 
     $val = ' ' . str_pad( $this->pub_rows01[$i]['dantai_cd_sek'], 8, '0', STR_PAD_LEFT);	 
	 $objsheet->setCellValueByColumnAndRow(10,$i+2,e($val));
	 $objsheet->setCellValueByColumnAndRow(11,$i+2,e($this->pub_rows01[$i]['deli_ymd']));
	 $objsheet->setCellValueByColumnAndRow(12,$i+2,e($this->pub_rows01[$i]['this_year_cost']));
	 $objsheet->setCellValueByColumnAndRow(13,$i+2,e($this->pub_rows01[$i]['sanno_cost']));
	 $objsheet->setCellValueByColumnAndRow(14,$i+2,e($this->pub_rows01[$i]['mng_cost']));
	 $objsheet->setCellValueByColumnAndRow(15,$i+2,e($this->pub_rows01[$i]['sanno_keisai_cost']));
	 
	 $objsheet->setCellValueByColumnAndRow(16,$i+2,e($this->pub_rows01[$i]['insatu_kgo_nm']));
	 $objsheet->setCellValueByColumnAndRow(17,$i+2,e($this->pub_rows01[$i]['pmh_items']));
	 $objsheet->setCellValueByColumnAndRow(18,$i+2,e($this->pub_rows01[$i]['tdantai']));
	 $objsheet->setCellValueByColumnAndRow(19,$i+2,e($this->pub_rows01[$i]['all_crs']));
	 $objsheet->setCellValueByColumnAndRow(20,$i+2,e($this->pub_rows01[$i]['pmh_size_kbn']));
	 $objsheet->setCellValueByColumnAndRow(21,$i+2,e($this->pub_rows01[$i]['han_size_kbn']));
	 $objsheet->setCellValueByColumnAndRow(22,$i+2,e($this->pub_rows01[$i]['pos_type_kbn']));
	 $objsheet->setCellValueByColumnAndRow(23,$i+2,e($this->pub_rows01[$i]['pos_items']));
	 $objsheet->setCellValueByColumnAndRow(24,$i+2,e($this->pub_rows01[$i]['bes_items']));
	 $objsheet->setCellValueByColumnAndRow(25,$i+2,e($this->pub_rows01[$i]['etc_type']));
	 $objsheet->setCellValueByColumnAndRow(26,$i+2,e($this->pub_rows01[$i]['etc_items']));
	 $objsheet->setCellValueByColumnAndRow(27,$i+2,e($this->pub_rows01[$i]['all_page']));
	 $objsheet->setCellValueByColumnAndRow(28,$i+2,e($this->pub_rows01[$i]['com_page']));
	 $objsheet->setCellValueByColumnAndRow(29,$i+2,e($this->pub_rows01[$i]['sho_page']));
	 $objsheet->setCellValueByColumnAndRow(30,$i+2,e($this->pub_rows01[$i]['page_tanka']));

	 $objsheet->setCellValueByColumnAndRow(31,$i+2,e($this->pub_rows01[$i]['sanno_crs']));
	 $objsheet->setCellValueByColumnAndRow(32,$i+2,e($this->pub_rows01[$i]['crs_tanka']));
	 $objsheet->setCellValueByColumnAndRow(33,$i+2,e($this->pub_rows01[$i]['uke_ymd']));
	 $objsheet->setCellValueByColumnAndRow(34,$i+2,e($this->pub_rows01[$i]['deli_xx']));
	 $objsheet->setCellValueByColumnAndRow(35,$i+2,e($this->pub_rows01[$i]['sekyymm']));
	 $objsheet->setCellValueByColumnAndRow(36,$i+2,e($this->pub_rows01[$i]['tdan_eig_tnto_bsy']));
	 $objsheet->setCellValueByColumnAndRow(37,$i+2,e($this->pub_rows01[$i]['tdan_eig_tnto']));
	 $objsheet->setCellValueByColumnAndRow(38,$i+2,e($this->pub_rows01[$i]['pmh_cycle_kbn']));
	 $objsheet->setCellValueByColumnAndRow(39,$i+2,e($this->pub_rows01[$i]['snk_kei_kbn']));
	 $objsheet->setCellValueByColumnAndRow(40,$i+2,e($this->pub_rows01[$i]['memos']));
	 $objsheet->setCellValueByColumnAndRow(41,$i+2,e($this->pub_rows01[$i]['sek_knr_kbn']));
	 $objsheet->setCellValueByColumnAndRow(42,$i+2,e($this->pub_rows01[$i]['kgo_ken']));
	 $objsheet->setCellValueByColumnAndRow(43,$i+2,e($this->pub_rows01[$i]['kgo_adr1']));
	 $val=''; 
     $val = ' ' . str_pad( $this->pub_rows01[$i]['ksy_cd'], 9, '0', STR_PAD_LEFT);
	 $objsheet->setCellValueByColumnAndRow(44,$i+2,e($val));
	
   }  // end for 
   
  // Excel2007 形式で出力
 
  $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
  $objWriter->save('out/pmh_order_search_' . $sd . $st . '.xlsx');
  $sf='out/pmh_order_search_' . $sd . $st.'.xlsx';
  return $sf;
	
  

  } // end function
  function setChannel($row01){
	$this->pub_rows01 =$row01;
	
    //var_dump($this->pub_rows01);
	
	
   $sf2 = $this->dispChannel();
   return $sf2; 
  } // end function
} // end_class

 ?>