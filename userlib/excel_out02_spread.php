<?php
require '../../vendor/autoload.php';
//$tv->setChannel(pub_rows00);
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as Writer;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as Reader;
//===========================================
// php spreadeheet   class
//===========================================
class excel_out02_spread  {

	public $pub_rows01;

function dispChannel(){
	$sd = date('Ymd');
    $st = date('His');
	$count=count($this->pub_rows01);
  //抽出件数:0　のとき
	if ($count==0) {
     //$sf='out/pmh_order_search_' . $sd . $st.'.xlsx';
		 $this->_redirect('pagemodule/oops_404_02.php');
		//return $sf;
		exit();
	}
//
	$reader = new Reader();
	$temp_f = 'template/juk_knr_dw_temp01.xlsx';
	$spreadsheet = $reader->load($temp_f);

	$sheet = $spreadsheet->getActiveSheet();
    $sheet ->setTitle($_SESSION[CLIENTNM]);
//
	for ( $i = 0; $i < $count; ++$i){
		//$sheet->setCellValueByColumnAndRow(3,2,e($this->pub_rows01[$i][3]));
		$sheet->setCellValueByColumnAndRow(1,$i+2,e($this->pub_rows01[$i][0]));
		$sheet->setCellValueByColumnAndRow(2,$i+2,e($this->pub_rows01[$i][1]));
		$sheet->setCellValueByColumnAndRow(3,$i+2,e($this->pub_rows01[$i][2]));
		$sheet->setCellValueByColumnAndRow(4,$i+2,e($this->pub_rows01[$i][3]));
		$sheet->setCellValueByColumnAndRow(5,$i+2,e($this->pub_rows01[$i][6]));
		$sheet->setCellValueByColumnAndRow(6,$i+2,e($this->pub_rows01[$i][5]));
		$sheet->setCellValueByColumnAndRow(7,$i+2,e($this->pub_rows01[$i][4]));
		$sheet->setCellValueByColumnAndRow(8,$i+2,e($this->pub_rows01[$i][7]));
		$sheet->setCellValueByColumnAndRow(9,$i+2,e($this->pub_rows01[$i][8]));
		$sheet->setCellValueByColumnAndRow(10,$i+2,e($this->pub_rows01[$i][9]));
		$sheet->setCellValueByColumnAndRow(11,$i+2,e($this->pub_rows01[$i][10]));
		$sheet->setCellValueByColumnAndRow(12,$i+2,e($this->pub_rows01[$i][11]));
	  //
    }
	$writer = new Writer($spreadsheet);
	$sf='out/Juk_knr_dw_' . $sd . $st.'.xlsx';
	$writer->save($sf);
	//echo('ssssf--->'. $sf);
	return $sf;
  } // end function
  function setChannel($row01){
  	$this->pub_rows01 =$row01;
    //var_dump($this->pub_rows01);
  	//$this->dispChannel();
  	$sf2 = $this->dispChannel();
    return $sf2;
  } // end function
} // end_class

?>