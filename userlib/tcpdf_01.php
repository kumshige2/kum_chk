<?php
// require('TCPDF-master/tcpdf.php');
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
   $format1 = $workbook->addformat(array('size' => 10,'color'=>'black','fontfamily'=>"ＭＳ　明朝"));
//format 2
   $format2 = $workbook->addformat(array('size' => 11,'align'=> 'center','color'=>'white','fgcolor'=> 24));
                                          
//データを書き出し
   
   $worksheet1->write(0,0,mb_convert_encoding( 'P_id',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,1,mb_convert_encoding( 'P_no',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,2,mb_convert_encoding( 'kaiko',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,3,mb_convert_encoding( 'Pmh_type',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,4,mb_convert_encoding( 'P_nm',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,5,mb_convert_encoding( 'kgo',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,6,mb_convert_encoding( 'bsy_nm',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,7,mb_convert_encoding( 'ad_nm',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,8,mb_convert_encoding( '主催団体cd',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,9,mb_convert_encoding( '団体名',"SJIS","UTF-8"),$format2);
   //
   $worksheet1->write(0,10,mb_convert_encoding( '製作総額',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,11,mb_convert_encoding( '産能大負担額',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,12,mb_convert_encoding( '印刷会社',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,13,mb_convert_encoding( '製作部数',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,14,mb_convert_encoding( '団体数',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,15,mb_convert_encoding( '掲載コース数',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,16,mb_convert_encoding( '締',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,17,mb_convert_encoding( 'ksy_cd',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,18,mb_convert_encoding( 'kgo_a_cd',"SJIS","UTF-8"),$format2);
   $worksheet1->write(0,19,mb_convert_encoding( 'kgo_b_cd',"SJIS","UTF-8"),$format2);  
   $worksheet1->write(0,20,mb_convert_encoding( 'kgo_c_cd',"SJIS","UTF-8"),$format2);    
   //
   $count=count($this->pub_rows01);
   for ( $i = 0; $i < $count; ++$i){
	 
	 $val='';
	 $val = str_pad( $this->pub_rows01[$i]['p_id'], 5, "0", STR_PAD_LEFT);
	 $worksheet1->writestring($i + 1,0,mb_convert_encoding(htmlspecialchars($val),"SJIS","UTF-8"),$format1);
	 $val='';
	 $val = str_pad( $this->pub_rows01[$i]['p_no'], 3, "0", STR_PAD_LEFT);
	 $worksheet1->writestring($i + 1,1,mb_convert_encoding(htmlspecialchars($val),"SJIS","UTF-8"),$format1);
	 //
	 $worksheet1->write($i + 1,2,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['kaiko1']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i + 1,3,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['pmh_type']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i + 1,4,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['p_nm']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i + 1,5,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['kgo_nm']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i + 1,6,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['ad_nm']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i + 1,7,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['bsy_nm']),"SJIS","UTF-8"),$format1);					
	 $worksheet1->write($i + 1,8,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['dantai_cd_knj']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i + 1,9,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['dname']),"SJIS","UTF-8"),$format1);
	 //
	 $worksheet1->write($i + 1,10,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['this_year_cost']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i + 1,11,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['sanno_cost']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i + 1,12,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['insatu_kgo_nm']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i + 1,13,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['pmh_items']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i + 1,14,mb_convert_encoding(htmlspecialchars(
	                   $this->pub_rows01[$i]['tdantai']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i + 1,15,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['all_crs']),"SJIS","UTF-8"),$format1);
	 $worksheet1->write($i + 1,16,mb_convert_encoding(htmlspecialchars(
	                    $this->pub_rows01[$i]['sek_knr_kbn']),"SJIS","UTF-8"),$format1);
     $val='';
	 $val = str_pad( $this->pub_rows01[$i]['ksy_cd'], 5, "0", STR_PAD_LEFT);
	 $worksheet1->writestring($i + 1,17,mb_convert_encoding(htmlspecialchars($val),"SJIS","UTF-8"),$format1);
	 //
	 $val='';
	 $val = str_pad( $this->pub_rows01[$i]['kgo_a_cd'], 5, "0", STR_PAD_LEFT);
	 $worksheet1->writestring($i + 1,18,mb_convert_encoding(htmlspecialchars($val),"SJIS","UTF-8"),$format1);
	 $val='';
	 $val =  str_pad( $this->pub_rows01[$i]['kgo_b_cd'], 3, "0", STR_PAD_LEFT) ;					
	 $worksheet1->writestring($i + 1,19,mb_convert_encoding(htmlspecialchars($val),"SJIS","UTF-8"),$format1);
	 $val='';
	 $val = str_pad( $this->pub_rows01[$i]['kgo_c_cd'], 3, "0", STR_PAD_LEFT);			
	 $worksheet1->writestring($i + 1,20,mb_convert_encoding(htmlspecialchars($val),"SJIS","UTF-8"),$format1);											
	 
	}  // end fr 
   //excel send
   //$workbook->send('test01.xls');
  
   $workbook->close(); 
   
   $ret_00='index.php?module=search';
   
   print('<html>');
   print('<head>');
   print('<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />');
   print('<style>');
   print(' h2 { font-family: "consolas"; } ');
   print('</style>');
   print('</head>');
 
   print('<body>');
   //
   print('<div class="container">');
   print('<div class="container clearfix" ');
   print('<div class="grid12 first">');
   print('<h2><a href=\''.$sf.'\'">Excelファイル</a></h2>');
   print('</div></div></div>');
   //print('<p><a href="out\test011.xls">Excelファイル</a></p>');
   //print('<a href="index.php?module=search">Return</a>');
   //print '<input type="button" value="Return" onClick="location.href=\''.$ret_00.'\'">';
   print('</body></html>'); 

  } // end function
  function setChannel($row01){
	$this->pub_rows01 =$row01;
    //var_dump($this->pub_rows01);
	
    $this->dispChannel(); 
  } // end function
} // end_class

 ?>