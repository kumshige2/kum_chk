<?php
// require_once('config.php');
//require_once(LIBPATH.'address.php');
// require('Spreadsheet/Excel/Writer.php');
require '../../vendor/autoload.php';
 //require('layout_db.php');

//===========================================
// Search   class
//    パンフ検索  module
//===========================================
//print  "<pre>". 'post ' ;
//print  ($_POST['p_id_q']);
//    var_dump($_POST);
//print  "</pre>";
//print  "<pre>". 'get  ';
//   var_dump($_GET);
//print  "</pre>";
//var_dump ($_SESSION);
 
 
//$tv = new excel_01();
//$tv->setChannel(22222);

//$tv->setChannel(pub_rows00);

class excel_01  {

  public $pub_rows01;

function dispChannel(){
  $sd = date('Ymd');
  //$sf =  'out\pmh_data' . $sd . '.xls';	
  $sf =  EXCEL_PMH_DATA01 . $sd . '.xls';
  //exit();
  //
  $workbook = new Spreadsheet_Excel_Writer($sf);
  $worksheet1 =& $workbook->addWorksheet();
  if (PEAR::isError($worksheet1)) {
    die($worksheet1->getMessage());
	//echo 'err addworksheet1';
  }
//format 1
   $format1 = $workbook->addformat(array('size' => 11,'color'=>'blue','fontfamily'=>"ＭＳ　明朝"));
//format 2
   $format2 = $workbook->addformat(array('size' => 11,'align'=> 'center','color'=>'white','fgcolor'=>'magenta'));
                                          
//データを書き出し
   $worksheet1->write(0,0,mb_convert_encoding( 'P_id',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,1,mb_convert_encoding( 'P_no',"SJIS","UTF-8"));
   $worksheet1->write(0,2,mb_convert_encoding( 'kaiko',"SJIS","UTF-8"));
   $worksheet1->write(0,3,mb_convert_encoding( 'Pmh_type',"SJIS","UTF-8"));
   $worksheet1->write(0,4,mb_convert_encoding( 'P_nm',"SJIS","UTF-8"));
   $worksheet1->write(0,5,mb_convert_encoding( 'kgo',"SJIS","UTF-8"));
   $worksheet1->write(0,6,mb_convert_encoding( 'ad_nm',"SJIS","UTF-8"));
   $worksheet1->write(0,7,mb_convert_encoding( 'bsy_nm',"SJIS","UTF-8"));
   $worksheet1->write(0,8,mb_convert_encoding( '主催団体cd',"SJIS","UTF-8"));
   $worksheet1->write(0,9,mb_convert_encoding( '団体名',"SJIS","UTF-8"));
   $worksheet1->write(0,10,mb_convert_encoding( '団体略称',"SJIS","UTF-8"));
   //
   $worksheet1->write(0,11,mb_convert_encoding( '納品日',"SJIS","UTF-8"));
   $worksheet1->write(0,12,mb_convert_encoding( '製作総額',"SJIS","UTF-8"));
   $worksheet1->write(0,13,mb_convert_encoding( '産能大負担額',"SJIS","UTF-8"));
   $worksheet1->write(0,14,mb_convert_encoding( '産能大管理費',"SJIS","UTF-8"));
   $worksheet1->write(0,15,mb_convert_encoding( '産能大掲載費',"SJIS","UTF-8"));
   $worksheet1->write(0,16,mb_convert_encoding( '印刷会社',"SJIS","UTF-8"));
   $worksheet1->write(0,17,mb_convert_encoding( '製作部数',"SJIS","UTF-8"));
   $worksheet1->write(0,18,mb_convert_encoding( '団体数',"SJIS","UTF-8"));
   $worksheet1->write(0,19,mb_convert_encoding( '掲載コース数',"SJIS","UTF-8"));
   $worksheet1->write(0,20,mb_convert_encoding( 'size',"SJIS","UTF-8"));
   //
   
   $worksheet1->write(0,21,mb_convert_encoding( '版下サイズ',"SJIS","UTF-8"));
   $worksheet1->write(0,22,mb_convert_encoding( 'ポスター',"SJIS","UTF-8"));
   $worksheet1->write(0,23,mb_convert_encoding( 'ポスター部数',"SJIS","UTF-8"));
   $worksheet1->write(0,24,mb_convert_encoding( '別冊部数',"SJIS","UTF-8"));
   $worksheet1->write(0,25,mb_convert_encoding( 'その他',"SJIS","UTF-8"));
   $worksheet1->write(0,26,mb_convert_encoding( 'その他部数',"SJIS","UTF-8"));
   $worksheet1->write(0,27,mb_convert_encoding( '総ページ',"SJIS","UTF-8"));
   $worksheet1->write(0,28,mb_convert_encoding( '共通ページ',"SJIS","UTF-8"));
   $worksheet1->write(0,29,mb_convert_encoding( '紹介ページ',"SJIS","UTF-8"));
   $worksheet1->write(0,30,mb_convert_encoding( 'ページ単価',"SJIS","UTF-8"));
   //
   $worksheet1->write(0,31,mb_convert_encoding( 'sanno_crs',"SJIS","UTF-8"));
   $worksheet1->write(0,32,mb_convert_encoding( '申込締切日',"SJIS","UTF-8"));
   $worksheet1->write(0,33,mb_convert_encoding( '納品ヶ所',"SJIS","UTF-8"));	
   $worksheet1->write(0,34,mb_convert_encoding( '請求年月',"SJIS","UTF-8"));
   $worksheet1->write(0,35,mb_convert_encoding( '他団体営業担当部署',"SJIS","UTF-8"));
   $worksheet1->write(0,36,mb_convert_encoding( '他団体営業担当',"SJIS","UTF-8"));
   $worksheet1->write(0,37,mb_convert_encoding( '作成周期',"SJIS","UTF-8"));
   $worksheet1->write(0,38,mb_convert_encoding( '開講状況',"SJIS","UTF-8"));
   $worksheet1->write(0,39,mb_convert_encoding( '特記事項',"SJIS","UTF-8"));
   $worksheet1->write(0,40,mb_convert_encoding( '締',"SJIS","UTF-8"));
   //
   $worksheet1->write(0,41,mb_convert_encoding( 'kgo_ken',"SJIS","UTF-8"));
   $worksheet1->write(0,42,mb_convert_encoding( 'kgo_adr1',"SJIS","UTF-8"));
   $worksheet1->write(0,43,mb_convert_encoding( 'ksy_cd',"SJIS","UTF-8"));

   //
   $count=count($this->pub_rows01);
   for ( $i = 0; $i < $count; ++$i){
	 $worksheet1->write($i,0,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['p_id']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,1,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['p_no']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,2,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['kaiko1']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,3,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['pmh_type']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,4,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['p_nm']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,5,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['kgo_nm']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,6,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['ad_nm']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,7,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['bsy_nm']),"SJIS","UTF-8"),$format1);					
	 $worksheet1->write($i,8,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['dantai_cd_knj']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,9,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['dname']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,10,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['dname_skip']),"SJIS","UTF-8"),$format1);
	 //
	 $worksheet1->write($i,11,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['deli_ymd']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,12,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['this_year_cost']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,13,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['sanno_cost']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,14,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['mng_cost']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,15,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['sanno_keisai_cost']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,16,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['insatu_kgo_nm']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,17,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['pmh_items']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,18,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['tdantai']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,19,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['all_crs']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,20,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['pmh_size_kbn']),"SJIS","UTF-8"),$format1);
	  //
	 $worksheet1->write($i,21,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['han_size_kbn']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,22,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['pos_type_kbn']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,23,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['pos_items']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,24,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['bes_items']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,25,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['etc_type']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,26,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['etc_items']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,27,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['all_page']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,28,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['com_page']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,29,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['sho_page']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,30,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['page_tanka']),"SJIS","UTF-8"),$format1);					   				    //		 		   
	 $worksheet1->write($i,31,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['sanno_crs']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,32,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['app_ymd']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,33,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['deli_xx']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,34,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['sekyymm']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,35,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['uke_ymd_tnto']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,36,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['ryo_ymd_tnto']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,37,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['pmh_cycle_kbn']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,38,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['e_learning_kbne']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,39,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['memos']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,40,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['sek_knr_kbn']),"SJIS","UTF-8"),$format1);
						//
	 $worksheet1->write($i,41,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['kgo_ken']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,42,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['kgo_adr1']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i,43,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['ksy_cd']),"SJIS","UTF-8"),$format1);
	}  // end fr 
   //excel send
   //$workbook->send('test01.xls');
   $workbook->close(); 
   
   $ret_00='index.php?module=search';
   
   print('<html>');
   print('<head>');
   print('<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />');
   print('</head>');
   print('<body>');
   print('<p><a href=\''.$sf.'\'">Excelファイル</a></p>');
   //print('<p><a href="out\test011.xls">Excelファイル</a></p>');
   //print('<a href="index.php?module=search">Return</a>');
   print '<input type="button" value="Return" onClick="location.href=\''.$ret_00.'\'">';
   print('</body></html>'); 

  } // end function
  function setChannel($row01){
	$this->pub_rows01 =$row01;
    //var_dump($this->pub_rows01);
	
    $this->dispChannel(); 
  } // end function
} // end_class

 ?>