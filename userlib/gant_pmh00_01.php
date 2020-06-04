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
	//$obj  -> select_ndo_kaiko($_POST['kaiko1_c']);
	$last_ndo = intval($this_ndo) - 1 ;
	$ad_cd_wk = $_POST['ad_cd'];
	//-------------------------------
	//  対象ＡＤ該当年度のデータを取得する
	//
	//  起点日を追加する
	//   受付日≠NULL　受付日　-　45日    (11)
	//   受付日＝NULL　納品日　-　120日   (12)
	//------------------------------
	//-------------------------------
    $res1 = array();
    $kiten_ymd = "t_pmh_sub01.uke_ymd " . intval(-45). " as kiten_uke_ymd,";
	$kiten_ymd = $kiten_ymd . "t_pmh_sub01.deli_ymd " . intval(-120). " as kiten_deli_ymd ";

	 
	$ary_kgo_sek = array();
	$sql1 = "SELECT p_id,p_no,t_pmh_sub01.ad_cd,t_ad.ad_nm,kaiko1,p_nm,ksy_cd,uke_ymd,deli_ymd,p_nd,pmh_items,";
	$sql1 = $sql1 . $kiten_ymd ;
	$sql1 = $sql1 . " from t_pmh_sub01 join t_ad on t_ad.ad_cd = t_pmh_sub01.ad_cd ";
	$sql1 = $sql1 . "WHERE ";
	$sql1 = $sql1 . "(t_pmh_sub01.ad_cd = '" . $ad_cd_wk . "' and p_nd = '" . $last_ndo; 
	$sql1 = $sql1 . "' and t_pmh_sub01.deli_ymd >= '" . $last_ndo . "-04-01";
	$sql1 = $sql1 . "' and ksy_cd is not null  and pmh_type = '" . strtolower('SP') . "') or ";
	$sql1 = $sql1 . "(t_pmh_sub01.ad_cd = '" . $ad_cd_wk . "' and p_nd = '" . $this_ndo; 
	$sql1 = $sql1 . "' and t_pmh_sub01.deli_ymd >= '" . $last_ndo . "-04-01";
	$sql1 = $sql1 . "' and ksy_cd is not null  and pmh_type = '" . strtolower('SP') . "')";
	$sql1 = $sql1 . " order by uke_ymd asc,kaiko1 asc,p_id asc ";
    //echo $sql1;
	$res1 = $obj  -> getlist01($sql1);
    //-------------------------------
	//  抽出データを4-7、8-11,12-3　の配列に振り分ける　昨年本年　納品日ベース
	//   2014/04/01 - 2014/07/31  $ary_deli_ymd[0]
	//   2014/08/01 - 2014/11/31  $ary_deli_ymd[1] 
	//   2014/12/01 - 2015/03/31  $ary_deli_ymd[2] 
	//   2015/04/01 - 2015/07/31  $ary_deli_ymd[3] 
	//   2015/08/01 - 2015/11/31  $ary_deli_ymd[4] 
	//   2015/12/01 - 2016/03/31  $ary_deli_ymd[5]

	//------------------------------
	//print_r ($res1[RESDATA]);
	
	$ary_deli_ymd =array();
	if (count($res1[RESDATA]) == 0) {
	  echo '<p>' .  'data exception sql :'  . "</p>\n";
    } else {
      $count=count($res1[RESDATA]);
	  $d1 = htmlspecialchars($res1[RESDATA][$i][7]);
	  for ( $i = 0; $i < $count; ++$i){ 
	    switch (true) {
	      case $last_ndo . '-04-01' <= $res1[RESDATA][$i][8] && $last_ndo . '-07-31' >= $res1[RESDATA][$i][8]:
	        for ($x = 0; $x < count($res1[RESDATA][0]); ++$x) { 
			   $ary_deli_ymd[0][] = htmlspecialchars($res1[RESDATA][$i][$x]);
		    }
			//switch (true) {
			//  case (!empty(htmlspecialchars($res1[RESDATA][$i][7]))):
			//	$ary_deli_ymd[0][] = date("Y-m-d", strtotime("$d1 -45 day"));
			//	break;
            //  default:
			//    $ary_deli_ymd[0][] = date("Y-m-d", strtotime("$d1 -120 day"));
			//	break;
		//	} 
		     
			break;
		  case $last_ndo . '-08-01' <= $res1[RESDATA][$i][8] && $last_ndo . '-11-31' >= $res1[RESDATA][$i][8]:
	        for ($x = 0; $x < count($res1[RESDATA][1]); ++$x) { 
			   $ary_deli_ymd[1][] = htmlspecialchars($res1[RESDATA][$i][$x]);
		    }
			
			break;
		  case $last_ndo . '-12-01' <= $res1[RESDATA][$i][8] && $this_ndo . '-03-31' >= $res1[RESDATA][$i][8]:
	       
		    for ($x = 0; $x < count($res1[RESDATA][2]); ++$x) { 
			   $ary_deli_ymd[2][] = htmlspecialchars($res1[RESDATA][$i][$x]);
		    }
			
			break;
		  case $this_ndo . '-04-01' <= $res1[RESDATA][$i][8] && $this_ndo . '-07-31' >= $res1[RESDATA][$i][8]:
	        for ($x = 0; $x < count($res1[RESDATA][3]); ++$x) { 
			   $ary_deli_ymd[3][] = htmlspecialchars($res1[RESDATA][$i][$x]);
		    }
			
			break;
		  case $this_ndo . '-08-01' <= $res1[RESDATA][$i][8] && $last_ndo . '-11-31' >= $res1[RESDATA][$i][8]:
	        for ($x = 0; $x < count($res1[RESDATA][4]); ++$x) { 
			   $ary_deli_ymd[4][] = htmlspecialchars($res1[RESDATA][$i][$x]);
		    }
			
			break;
		  case $this_ndo . '-12-01' <= $res1[RESDATA][$i][8] && intval($this_ndo) + 1 . '-03-31' >= $res1[RESDATA][$i][8]:
	       for ($x = 0; $x < count($res1[RESDATA][5]); ++$x) { 
			   $ary_deli_ymd[5][] = htmlspecialchars($res1[RESDATA][$i][$x]);
		    }			
			break;
		  default:
		     echo '<p>'. '???:' . $res1[RESDATA][$i][8] . '</p>';
			 break;
	       }  // end switch
	  }  // end for 
	}   // end if
   // print_r ($ary_deli_ymd[0]);
	//------------------------------------------------------------
    // excel gantto 
    //------------------------------------------------------------
    $sd = date('Ymd');
    $st = date('Hi');
	$temp_f = 'template/pmh_gant00_temp03_03.xlsx';
	$objReader = new PHPExcel_Reader_Excel2007();
    $objPHPExcel = $objReader->load($temp_f);
    // 0番目のシートをアクティブにする（シートは左から順に、0、1，2・・・）
    $objPHPExcel->setActiveSheetIndex(0);
    // アクティブにしたシートの情報を取得
    $objSheet = $objPHPExcel->getActiveSheet();
    $sht_nm =  $last_ndo. '/04-07';
    $objSheet->setTitle($_POST['kaiko1_c'].'開講');			
    //-----------------------------------------
    // Header
    //-----------------------------------------
    //start date create from uke-ymd
    //$pieces = explode("-", $res1[RESDATA][0][7]);
    switch (true) {
	 case (empty($res1[RESDATA][0][7])):
	   $pieces = explode("-", $res1[RESDATA][0][12]);
	 case (!empty($res1[RESDATA][0][7])):
	   $pieces = explode("-", $res1[RESDATA][0][11]);
	 default:
	    $pieces = explode("-", $res1[RESDATA][0][11]);  
	}
    //$objSheet->setCellValue('B3',$last_ndo);
    //$objSheet->setCellValue('C3',4);
    //$objSheet->setCellValue('D3',1);
	$objSheet->setCellValue('B3',$pieces[0]);
    $objSheet->setCellValue('C3',$pieces[1]);
    $objSheet->setCellValue('D3',$pieces[2]);
    $objSheet->setCellValue('B5',$sht_nm);
    $objSheet->setCellValue('B6', $_POST['p_id_c']. '-'. $_POST['p_no_c']);
	$objSheet->setCellValue('E6', $ad_nm_w);
	$objSheet->setCellValue('C6', '部数:'. $_POST['pmh_items_c']);
	$objSheet->setCellValue('D6', $_POST['kaiko1_c'].'開講');
	$objSheet->setCellValue('C7', '団体数:'. $_POST['tdantai_c']);
		//$val = ' ' . str_pad($_POST['ksy_cd_c'], 9, "0", STR_PAD_LEFT);
        //$objSheet->setCellValue("C14",e($val));
		//$objsheet->getStyle('E12')->getFont()->getColor()->setRGB('ffcc33');
	    //$objSheet->getStyle('E12')->getFill()->getStartColor()->setRGB('ffcc33');
		// 背景色
        //$objSheet->getStyleByColumnAndRow(4,12)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        //$objSheet->getStyleByColumnAndRow(4,12)->getFill()->getStartColor()->setRGB('ccff99');
    	//背景色
        //$sheet -> getStyle("B".$row.":B".($row+1)) -> getFill() -> setFillType(PHPExcel_Style_Fill::FILL_NONE);
        //$sheet -> setCellValue("B".$row, $data["id"]);
     //-----------------------------------------
	 //受付日　～　納品日
	 //-----------------------------------------
	 $row_x=11;
	 $start=4;
	 $const_positon = 4;
	 $start_ymd = $ary_deli_ymd[0][7];
	 //for ( $i = 0; $i < $count; ++$i){
	  for ( $i = 0; $i < 1; ++$i){	 
	 //
	   switch (true) {
         case empty($ary_deli_ymd[$i][7]) &&  empty($ary_deli_ymd[$i][8]):
	       $date201_fr = NULL;
		   $date201_to = NULL; 
		   break;
         case !empty($ary_deli_ymd[$i][7]) &&  empty($ary_deli_ymd[$i][8]):
	       $date201_fr = $ary_deli_ymd[$i][11];
		   $date201_to = $ary_deli_ymd[$i][11];
		   break;
	     case empty($ary_deli_ymd[$i][7]) && !empty($ary_deli_ymd[$i][8]):
	       $date201_fr = $ary_deli_ymd[$i][12];
		   $date201_to = $ary_deli_ymd[$i][8];
		   break;
         case !empty($ary_deli_ymd[$i][7]) &&  !empty($ary_deli_ymd[$i][8]):
	       $date201_fr = $ary_deli_ymd[$i][11];
		   $date201_to = $ary_deli_ymd[$i][8]; 		 
		   break;
	    } // end switch 
        $objSheet->setCellValue('B'.$row_x,$ary_deli_ymd[$i][5]);    //p_nm
        $objSheet->setCellValue('C'.$row_x,$ary_deli_ymd[$i][0]. '-' .$ary_deli_ymd[$i][1]);
		$objSheet->setCellValue('D'.$row_x,$ary_deli_ymd[$i][10]. '部');    //pmh_itmes 		
        
		//$start = $this -> day_diff($last_ndo.'-04-01',$ary_deli_ymd[0][7]) + 4;
		$start = 4;
		echo '<p>' . "fr:" . $date201_fr . ' to:' .$date201_to .'</p>';
		$daydiff = $this -> day_diff($date201_fr,$date201_to) + 1;
		//if ($daydiff ===0) {
        //  $daydiff = 1;
		//} else {};
        $kikan= intval($start + $daydiff);
         echo ('<p>' . ':row:' . $row_x . ':start:' . $start .'</p>');
		while ($start < $kikan ){	
         $objSheet->getStyleByColumnAndRow($start,$row_x + 1)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
         $objSheet->getStyleByColumnAndRow($start,$row_x + 1)->getFill()->getStartColor()->setRGB('ccff00');
         $start++;
		 } //end while
		$row_x = $row_x + 3 ; 
		//
		
		if ($i+1 > $count) {
		} else {
			  echo ('<p>' . 'start_ymd:' . $start_ymd . ':next_ymd:' . $res1[RESDATA][$i+1][7] .'</p>');
		  $daydiff = $this -> day_diff($start_ymd,$res1[RESDATA][$i+1][7]) ;
		} ;
		
		$kikan = intval($daydiff + $const_positon) ;
		
		//echo ('daydiff::' . $daydiff .'//');
		$start=$kikan;
		$date201_fr = NULL;
		$date201_to = NULL; 
	  } // end for 
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