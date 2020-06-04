<?php
require_once('HTML/QuickForm2.php');
require_once ('HTML/QuickForm2/Renderer.php');
require_once('HTML/QuickForm2/Element/InputFile.php');
require_once ('HTML/QuickForm2/Container.php');
require_once('address.php');
require_once('encode.php');

set_include_path(get_include_path().PATH_SEPARATOR.$_SERVER["DOCUMENT_ROOT"].'/Classes/');
include_once 'PHPExcel.php';  
include_once 'PHPExcel/IOFactory.php';


//===========================================
// pamph_setting   class
//    パンフ編集  module
//===========================================
 
class gant_pmh00    extends view {
   
  //property
  var $smarty;
  public $pub_rows01;
  public $sw;
  //==========================================
  //  constructor 
  //===========================================
  function __construct() {
     //------------------------------------------
	 // smarty instance 
	 //------------------------------------------
	   $this->smarty = parent::__construct();
  }   // end__construct

  //===========================================
  //  pamph 一覧情報　取得 
  //===========================================
  function dispChannel() {
	
	//------------------------------------------
	//  instance   
	//------------------------------------------
	$form = new HTML_Quickform2('qform_smarty','POST',array('action' => 'index.php?module=gant_pmh00'));
	
	//------------------------------------    
	//addressOperation　instance 
	//------------------------------------
	 $obj = new addressoperation;
	 //------------------------------------  
	 // gant
	 //------------------------------------ 
	 $id_form = $form->addElement('hidden','action');	 
	           if  (empty($_POST['uke_ymd_c'])) {
				    $date01_frx = '';
					$date01_tox = '';
			   } else {
				   $date01_fr = $_POST['uke_ymd_c'];
                   $date01_frx = '/Date(' .  strtotime($date01_fr) * 1000 .')/';	
			       $date01_to  = date('Y-m-d H:i:s', strtotime($_POST['ryo_ymd_c'] . " -1 days"));
			       if   (empty($_POST['ryo_ymd_c'])) {
			          $date01_tox = '/Date(' .  strtotime($date01_fr) * 1000 .')/';	
			       } else {
			          $date01_tox = '/Date(' .  strtotime($date01_to) * 1000 .')/';	 
			       }
			   }		
			 
			   if  (empty($_POST['ryo_ymd_c'])) {
				    $date02_frx = '';
					$date02_tox = '';
			   } else {
				   $date02_fr = $_POST['ryo_ymd_c'];
                   $date02_frx = '/Date(' .  strtotime($date02_fr) * 1000 .')/';	
			       $date02_to  = date('Y-m-d H:i:s', strtotime($_POST['hac_ymd_c'] . " -1 days"));
			       if   (empty($_POST['hac_ymd_c'])) {
			          $date02_tox = '/Date(' .  strtotime($date02_fr) * 1000 .')/';	
			       } else {
			          $date02_tox = '/Date(' .  strtotime($date02_to) * 1000 .')/';	 
			       }
			   }	
			   
			   if  (empty($_POST['hac_ymd_c'])) {
				    $date03_frx = '';
					$date03_tox = '';
			   } else {
				   $date03_fr = $_POST['hac_ymd_c'];
                   $date03_frx = '/Date(' .  strtotime($date03_fr) * 1000 .')/';	
			       $date03_to  = date('Y-m-d H:i:s', strtotime($_POST['shoko_ymd_c'] . " -1 days"));
			       if   (empty($_POST['shoko_ymd_c'])) {
			          $date03_tox = '/Date(' .  strtotime($date03_fr) * 1000 .')/';	
			       } else {
			          $date03_tox = '/Date(' .  strtotime($date03_to) * 1000 .')/';	 
			       }
			   }		
			  
			   if  (empty($_POST['shoko_ymd_c'])) {
				    $date04_frx = '';
					$date04_tox = '';
			   } else {
				   $date04_fr = $_POST['shoko_ymd_c'];
                   $date04_frx = '/Date(' .  strtotime($date04_fr) * 1000 .')/';	
			       $date04_to  = date('Y-m-d H:i:s', strtotime($_POST['shoko_sof_ymd_c'] . " -1 days"));
			       if   (empty($_POST['shoko_sof_ymd_c'])) {
			          $date04_tox = '/Date(' .  strtotime($date04_fr) * 1000 .')/';	
			       } else {
			          $date04_tox = '/Date(' .  strtotime($date04_to) * 1000 .')/';	 
			       }
			   }	
			   if  (empty($_POST['shoko_sof_ymd_c'])) {
				    $date05_frx = '';
					$date05_tox = '';
			   } else {
				   $date05_fr = $_POST['shoko_sof_ymd_c'];
                   $date05_frx = '/Date(' .  strtotime($date05_fr) * 1000 .')/';	
			       $date05_to  = date('Y-m-d H:i:s', strtotime($_POST['shoko_return_ymd_c'] . " -1 days"));
			       if   (empty($_POST['shoko_return_ymd_c'])) {
			          $date05_tox = '/Date(' .  strtotime($date05_fr) * 1000 .')/';	
			       } else {
			          $date05_tox = '/Date(' .  strtotime($date05_to) * 1000 .')/';	 
			       }
			   }	
			  if  (empty($_POST['shoko_return_ymd_c'])) {
				    $date06_frx = '';
					$date06_tox = '';
			   } else {
				   $date06_fr = $_POST['shoko_return_ymd_c'];
                   $date06_frx = '/Date(' .  strtotime($date06_fr) * 1000 .')/';	
			       $date06_to  = date('Y-m-d H:i:s', strtotime($_POST['saiko_ymd_c'] . " -1 days"));
			       if   (empty($_POST['saiko_ymd_c'])) {
			          $date06_tox = '/Date(' .  strtotime($date06_fr) * 1000 .')/';	
			       } else {
			          $date06_tox = '/Date(' .  strtotime($date06_to) * 1000 .')/';	 
			       }
			   }	
			   			   			   
			   if  (empty($_POST['saiko_ymd_c'])) {
				    $date07_frx = '';
					$date07_tox = '';
			   } else {
				   $date07_fr = $_POST['saiko_ymd_c'];
                   $date07_frx = '/Date(' .  strtotime($date07_fr) * 1000 .')/';	
			       $date07_to  = date('Y-m-d H:i:s', strtotime($_POST['saiko_sof_ymd_c'] . " -1 days"));
			       if   (empty($_POST['saiko_sof_ymd_c'])) {
			          $date07_tox = '/Date(' .  strtotime($date07_fr) * 1000 .')/';	
			       } else {
			          $date07_tox = '/Date(' .  strtotime($date07_to) * 1000 .')/';	 
			       }
			   }	
			   if  (empty($_POST['saiko_sof_ymd_c'])) {
				    $date08_frx = '';
					$date08_tox = '';
			   } else {
				   $date08_fr = $_POST['saiko_sof_ymd_c'];
                   $date08_frx = '/Date(' .  strtotime($date08_fr) * 1000 .')/';	
			       $date08_to  = date('Y-m-d H:i:s', strtotime($_POST['saiko_return_ymd_c'] . " -1 days"));
			       if   (empty($_POST['saiko_return_ymd_c'])) {
			          $date08_tox = '/Date(' .  strtotime($date08_fr) * 1000 .')/';	
			       } else {
			          $date08_tox = '/Date(' .  strtotime($date08_to) * 1000 .')/';	 
			       }
			   }
			   
			   if  (empty($_POST['saiko_return_ymd_c'])) {
				   $date09_frx = NULL;
				   $date09_tox = NULL;
			   } else {
				   $date09_fr = $_POST['saiko_return_ymd_c'];
                   $date09_frx = '/Date(' .  strtotime($date09_fr) * 1000 .')/';	
			       $date09_to  = date('Y-m-d H:i:s', strtotime($_POST['ko3_ymd_c'] . " -1 days"));
			       if   (empty($_POST['ko3_ymd_c'])) {
			         $date09_tox = '/Date(' .  strtotime($date09_fr) * 1000 .')/';	
			       } else {
			         $date09_tox = '/Date(' .  strtotime($date09_to) * 1000 .')/';	 
			       }
			   }
			   
			   if  (empty($_POST['ko3_ymd_c'])) {
				   $date10_frx = NULL;
				   $date10_tox = NULL;
			   } else {
				   $date10_fr = $_POST['ko3_ymd_c'];
                   $date10_frx = '/Date(' .  strtotime($date10_fr) * 1000 .')/';	
			       $date10_to  = date('Y-m-d H:i:s', strtotime($_POST['sekryo_ymd_c'] . " -1 days"));
			       if   (empty($_POST['sekryo_ymd_c'])) {
			         $date10_tox = '/Date(' .  strtotime($date10_fr) * 1000 .')/';	
			       } else {
			         $date10_tox = '/Date(' .  strtotime($date10_to) * 1000 .')/';	 
			       }
			   }
			   //--------------------------------------------------------------------------------
			   if  (empty($_POST['sekryo_ymd_c'])) {
				   $date101_frx = NULL;
				   $date101_tox = NULL;
			   } else {
				   $date101_fr = $_POST['sekryo_ymd_c'];
                   $date101_frx = '/Date(' .  strtotime($date101_fr) * 1000 .')/';	
			       $date101_to  = date('Y-m-d H:i:s', strtotime($_POST['moji_kosei_ymd_c'] . " -1 days"));
			       if   (empty($_POST['moji_kosei_ymd_c'])) {
			         $date101_tox = '/Date(' .  strtotime($date101_fr) * 1000 .')/';	
			       } else {
			         $date101_tox = '/Date(' .  strtotime($date101_to) * 1000 .')/';	 
			       }
			   }
			   if  (empty($_POST['moji_kosei_ymd_c'])) {
				   $date102_frx = NULL;
				   $date102_tox = NULL;              
			   } else {
				   $date102_fr = $_POST['moji_kosei_ymd_c'];
                   $date102_frx = '/Date(' .  strtotime($date102_fr) * 1000 .')/';	
			       $date102_to  = date('Y-m-d H:i:s', strtotime($_POST['color_kosei_c'] . " -1 days"));
			       if   (empty($_POST['color_kosei_c'])) {
			         $date102_tox = '/Date(' .  strtotime($date102_fr) * 1000 .')/';	
			       } else {
			         $date102_tox = '/Date(' .  strtotime($date102_to) * 1000 .')/';	 
			       }
			   }
			   if  (empty($_POST['color_kosei_ymd_c'])) {
				   $date103_frx = NULL;
				   $date103_tox = NULL;  
			   } else {
				   $date103_fr = $_POST['color_kosei_ymd_c'];
                   $date103_frx = '/Date(' .  strtotime($date103_fr) * 1000 .')/';	
			       $date103_to  = date('Y-m-d H:i:s', strtotime($_POST['sof_irai_ymd_c'] . " -1 days"));
			       if   (empty($_POST['sof_irai_ymd_c'])) {
			         $date103_tox = '/Date(' .  strtotime($date103_fr) * 1000 .')/';	
			       } else {
			        $date103_tox = '/Date(' .  strtotime($date103_to) * 1000 .')/';	 
			       }
			   }
			 
	//------------------------------------------
	// 有効な日付のみを　配列に溜め込む
	//------------------------------------------	  
	$ary_ymd = array();
	if (!empty($_POST['uke_ymd_c'])) {$ary_ymd[]='受付日'. '#'. $_POST['uke_ymd_c']; }
	if (!empty($_POST['ryo_ymd_c'])) {$ary_ymd[]='確認日'. '#'. $_POST['ryo_ymd_c']; }
	if (!empty($_POST['hac_ymd_c'])) {$ary_ymd[]='発注日'. '#'. $_POST['hac_ymd_c']; }
	if (!empty($_POST['shoko_ymd_c'])) {$ary_ymd[]='初校日'. '#'. $_POST['shoko_ymd_c']; }
	if (!empty($_POST['shoko_sof_ymd_c'])) {$ary_ymd[] ='初校送付'. '#'. $_POST['shoko_sof_ymd_c']; }
	if (!empty($_POST['shoko_return_ymd_c'])) {$ary_ymd[] ='初校戻'. '#'. $_POST['shoko_return_ymd_c']; }
	if (!empty($_POST['saiko_ymd_c'])) {$ary_ymd[] ='再校日'. '#'. $_POST['saiko_ymd_c']; }
	if (!empty($_POST['saiko_sof_ymd_c'])) {$ary_ymd[] ='再校送付'. '#'. $_POST['saiko_sof_ymd_c']; }
	if (!empty($_POST['saiko_return_ymd_c'])) {$ary_ymd[] ='再校戻'. '#'. $_POST['saiko_return_ymd_c']; }
	if (!empty($_POST['ko3_ymd_c'])) {$ary_ymd[] ='三校日'. '#'. $_POST['ko3_ymd_c']; }
	if (!empty($_POST['sekyo_ymd_c'])) {$ary_ymd[] ='責了日'. '#'. $_POST['sekryo_ymd_c']; }
	if (!empty($_POST['sof_irai_ymd_c'])) {$ary_ymd[]='送付依頼日'. '#'. $_POST['sof_irai_ymd_c']; }
	if (!empty($_POST['deli_ymd_c'])) {$ary_ymd[]='納品日'. '#'. $_POST['deli_ymd_c']; }      
    //print_r($ary_ymd);
	//-------------------------------
	//  p_nd 年度の計算
	//-------------------------------
	$this_ndo = date('Y'); 
	//$this_ndo = $obj  -> select_ndo_kaiko($_POST['kaiko1_c']);
	$last_ndo = intval($this_ndo) - 1 ;
	$ad_cd_wk = $_POST['ad_cd'];
	//-------------------------------
	//  対象ＡＤ該当年度のデータを取得する
	//
	//  起点日を追加する
	//   受付日≠NULL　受付日　-　45日    (11)
	//   受付日＝NULL　納品日　-　120日   (12)
	//------------------------------------
    $res1 = array();
	$ary_kgo_sek = array();
	$teian_ymd = "t_pmh_sub01.uke_ymd " . intval(-45). " as teian_uke_ymd,";
	$teian_ymd = $teian_ymd . "t_pmh_sub01.deli_ymd " . intval(-120). " as teian_deli_ymd ";
	//
	$sql1 = "SELECT p_id,p_no,t_pmh_sub01.ad_cd,t_ad.ad_nm,kaiko1,p_nm,ksy_cd,uke_ymd,deli_ymd,p_nd,pmh_items,";
	$sql1 = $sql1 . $teian_ymd . ",t_pmh_sub01.pmh_type,t_bsy.bsy_nm  ";
	$sql1 = $sql1 . " from t_pmh_sub01 ";
	$sql1 = $sql1 . " left join t_ad on t_ad.ad_cd = t_pmh_sub01.ad_cd ";
	$sql1 = $sql1 . " left join t_bsy on t_bsy.bsy_cd = t_pmh_sub01.bsy_cd ";
	$sql1 = $sql1 . "WHERE ";
	$sql1 = $sql1 . "(t_pmh_sub01.ad_cd = '" . $ad_cd_wk . "' and  t_pmh_sub01.kaiko1 <= '" . intval($this_ndo +1) ."03"; 
	$sql1 = $sql1 . "' and t_pmh_sub01.kaiko1 >= '" . $this_ndo . "04";
	$sql1 = $sql1 . "' and ksy_cd is not null)";
	//$sql1 = $sql1 . " or (t_pmh_sub01.ad_cd = '" . $ad_cd_wk . "' and p_nd = '" . $this_ndo; 
	//$sql1 = $sql1 . "' and t_pmh_sub01.deli_ymd >= '" . $last_ndo . "-04-01";
	//$sql1 = $sql1 . "' and ksy_cd is not null  and pmh_type = '" . strtolower('SP') . "')";
	$sql1 = $sql1 . " order by uke_ymd asc,kaiko1 asc,p_id asc ";
    echo $sql1;
	$res1 = $obj  -> getlist01($sql1);
    	
	if (count($res1[RESDATA]) == 0) {
	  echo '<p>' .  'data exception sql :'  . "</p>\n";
    } else {
      $count=count($res1[RESDATA]);
	  //print_r ($res1[RESDATA]); 
		//for ( $i = 0; $i < $count; ++$i){
		  // $ary_kgo_sek +=array(htmlspecialchars($res1[RESDATA][$i][0]) => htmlspecialchars($res1[RESDATA][$i][1]));	        //   $ary_kgo_sek_ids[] = htmlspecialchars($res1[RESDATA][$i][0]);
	  	//   $ary_kgo_sek_names[] = htmlspecialchars($res1[RESDATA][$i][1]);  
       //  }	 	
	}   // end if
    
	//------------------------------------------------------------
    // excel gantto 
    //------------------------------------------------------------
    $sd = date('Ymd');
    $st = date('Hi');
	$temp_f = 'template/pmh_gant00_temp03_02.xlsx';
	$objReader = new PHPExcel_Reader_Excel2007();
    $objPHPExcel = $objReader->load($temp_f);
    // 0番目のシートをアクティブにする（シートは左から順に、0、1，2・・・）
    $objPHPExcel->setActiveSheetIndex(0);
    // アクティブにしたシートの情報を取得
    $objSheet = $objPHPExcel->getActiveSheet();
    $sht_nm = $ad_nm_w . $_POST['p_id_c'];
    //$objSheet->setTitle($_POST['kaiko1_c'].'開講');
	$objSheet->setTitle($res1[RESDATA][0][3]);				
    //-----------------------------------------
    // Header
    //-----------------------------------------
    //start date create from uke-ymd
    //$pieces = explode("-", $res1[RESDATA][0][7]);
    //$objSheet->setCellValue('B3',$pieces[0]);
    //$objSheet->setCellValue('C3',$pieces[1]);
    //$objSheet->setCellValue('D3',$pieces[2]);
    
	$objSheet->setCellValue('B5','通信研修　Pamphlet Schedule');
    $objSheet->setCellValue('F6', $last_ndo . '-11-01 --> '. $this_ndo .'-10-30');
	$objSheet->setCellValue('D6', $res1[RESDATA][0][3]);
	$objSheet->setCellValue('C6', $res1[RESDATA][0][14]);
	//$objSheet->setCellValue('D6', $_POST['kaiko1_c'].'開講');
	//$objSheet->setCellValue('C7', '団体数:'. $_POST['tdantai_c']);
    //-----------------------------------------
    //  提案日～受付日
	//  受付日=null　 納品日=Null --->data201_fr=null  data201_to=null
	//  受付日<>null　納品日=Null --->data201_fr=teian_ymd (11)   data201_to=uke_ymd
	//  受付日=null　 納品日<>Null -->data201_fr=dali_ymd         data201_to=deli_ymd
	//  受付日<>null 納品日<>Null -->data201_fr=taian_ymd(11)    data201_to=uke_ymd  
	//  提案日：受付日-45
    //  (7) uke_ymd (11) teian_ymd:uke_ymd -45  　(12)teian_ymd:deli_ymd -120
	//-----------------------------------------
	 $row_x=12;
	 $start=0;
	 $const_positon = 9;
	// $start_ymd = $res1[RESDATA][0][7];
	 for ( $i = 0; $i < $count; ++$i){
	 //
	   switch (true) {
         case empty($res1[RESDATA][$i][7]) && empty($res1[RESDATA][$i][8]):
	       $date201_fr = NULL;
		   $date201_to = NULL; 
		   break;
         case !empty($res1[RESDATA][$i][7]) && empty($res1[RESDATA][$i][8]):
	       $date201_fr = $res1[RESDATA][$i][11];
		   $date201_to = $res1[RESDATA][$i][7];
		   break;
		 case empty($res1[RESDATA][$i][7]) && !empty($res1[RESDATA][$i][8]):
	      $date201_fr = $res1[RESDATA][$i][8];
		   $date201_to = $res1[RESDATA][$i][8];
		   // $date201_fr = NULL;
		   //$date201_to = NULL; 		 
		   break;
		 case !empty($res1[RESDATA][$i][7]) && !empty($res1[RESDATA][$i][8]):
	       $date201_fr = $res1[RESDATA][$i][11];
		   $date201_to = $res1[RESDATA][$i][7];
		   break;      
	     default:
		   $date201_fr = NULL;
		   $date201_to = NULL; 		 
		    break;  
	    } // end switch 
       
        $objSheet->setCellValue('B'.$row_x,$res1[RESDATA][$i][0]. '-' .$res1[RESDATA][$i][1]);
		$objSheet->setCellValue('C'.$row_x,$res1[RESDATA][$i][5]);    //p_nm
		$objSheet->setCellValue('D'.$row_x,$res1[RESDATA][$i][4]);    //kaiko
		$objSheet->setCellValue('E'.$row_x,$res1[RESDATA][$i][13]);    //pmh_type
		$objSheet->setCellValue('F'.$row_x,$res1[RESDATA][$i][10]. '部');    //pmh_itmes
		//$objSheet->setCellValue('G'.$row_x,$date201_fr);    //teian_ymd
		$objSheet->setCellValue('G'.$row_x,$res1[RESDATA][$i][11]);    //teian_ymd
		$objSheet->setCellValue('H'.$row_x,$res1[RESDATA][$i][7]);    //uke_ymd	
		$objSheet->setCellValue('I'.$row_x,$res1[RESDATA][$i][8]);    //deli_ymd	
		//----------------------------------------------
		//  提案日～受付日
		//----------------------------------------------
		$daydiff = $this -> day_diff($date201_fr,$date201_to) + 1;
		$start = $this -> day_diff(intval($last_ndo).'-11-01',$date201_fr) + $const_positon;
		
		//if ($daydiff ===0) {
        //  $daydiff = 1;
		//} else {};
        $kikan= intval($start + $daydiff);
       
		switch (true) {
			case empty($date201_fr) && empty($date201_to):
			  break;
			default:  
		      while ($start < $kikan ){	
                $objSheet->getStyleByColumnAndRow($start,$row_x )->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
                $objSheet->getStyleByColumnAndRow($start,$row_x )->getFill()->getStartColor()->setRGB('ccff00');
               $start++;
		     } //end while
			 //----------------------------------------------
		     //納品日
		     //----------------------------------------------
			   $deli_start =  $this -> day_diff(intval($last_ndo).'-11-01',$res1[RESDATA][$i][8]) + $const_positon;
			   echo ('<p>' . ':row:' . $row_x . ':deli_start:' . $deli_start .'</p>');
		       $objSheet->getStyleByColumnAndRow($deli_start,$row_x )->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
               $objSheet->getStyleByColumnAndRow($deli_start,$row_x )->getFill()->getStartColor()->setRGB('99ffcc');
			   break;			   
			
		} // end switch
		
		$row_x = $row_x + 3 ; 
		//
		$date201_fr = NULL;
		$date201_to = NULL;
		$start = 0;
		$daydiff=0;
		$kikan=0;
	  } // end for 
	    $objSheet->freezePane('J1');
     //----------------------------------------------------------------
     // Excel2007.phpを利用する場合
     //----------------------------------------------------------------
       $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
       //$objWriter->setPreCalculateFormulas(false);
	 
       $objWriter->save('out/pmh_schedule_'. e($_POST['p_id_c']) . '_'. e($_POST['kaiko1_c']) .'.xlsx');
      //書き出し
      //$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      //$objwriter->setIncludeCharts(true);
 	  //$objWriter->save('out/pmh_gant00_' . $sd . $st . '.xlsx');
      // $objWriter->save('php://output');
     $sf='out/pmh_schedule_'. e($_POST['p_id_c']) . '_' . e($_POST['kaiko1_c']) .'.xlsx';
				return array(
				'date01_frx' => $date01_frx,
				'date01_tox' => $date01_tox,
				'date02_frx' => $date02_frx,
				'date02_tox' => $date02_tox,
				'date03_frx' => $date03_frx,
				'date03_tox' => $date03_tox,
				'date04_frx' => $date04_frx,
				'date04_tox' => $date04_tox,
				'date05_frx' => $date05_frx,
				'date05_tox' => $date05_tox,
				'date06_frx' => $date06_frx,
				'date06_tox' => $date06_tox,
				'date07_frx' => $date07_frx,
				'date07_tox' => $date07_tox,
				'date08_frx' => $date08_frx,
				'date08_tox' => $date08_tox,
				'date09_frx' => $date09_frx,
				'date09_tox' => $date09_tox,
				'date10_frx' => $date10_frx,
				'date10_tox' => $date10_tox,
				'date101_frx' => $date101_frx,
				'date101_tox' => $date101_tox,
				'date102_frx' => $date102_frx,
				'date102_tox' => $date102_tox,
				'date103_frx' => $date103_frx,
				'date103_tox' => $date103_tox,
				'sf' => $sf);
				//$this -> smarty -> assign('sf', $sf);
				//$this -> smarty -> display('gant_pmh01.html');  

 

  }  // end function 
 function setChannel($row01,$sw){
	$this->pub_rows01 =$row01;
	$this->sw =$sw;
  
	//var_dump ('rows01=>' . $row01);
	
	
   $sf2 = $this->dispChannel();
   return $sf2; 
  } // end function
 function day_diff_x($date1, $date2) {
 
    // 日付をUNIXタイムスタンプに変換
    $timestamp1 = $date1;
    $timestamp2 = $date2;
 
    // 何秒離れているかを計算
    $seconddiff = abs($timestamp2 - $timestamp1);
 
    // 日数に変換
    $daydiff_x = $seconddiff / (60 * 60 * 24);
 
    // 戻り値
    return $daydiff_x;
 
} // end function
function day_diff($date1, $date2) {
 
    // 日付をUNIXタイムスタンプに変換
    $timestamp1 = strtotime($date1);
    $timestamp2 = strtotime($date2);
 
    // 何秒離れているかを計算
    $seconddiff = abs($timestamp2 - $timestamp1);
 
    // 日数に変換
    $daydiff = $seconddiff / (60 * 60 * 24);
 
    // 戻り値
    return $daydiff;
 
} // end function

} // end_class
 ?>