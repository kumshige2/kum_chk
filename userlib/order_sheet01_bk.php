<?php
//set_include_path(get_include_path().PATH_SEPARATOR.$_SERVER["DOCUMENT_ROOT"].'/Classes/');
//include_once 'PHPExcel.php';  
//include_once 'PHPExcel/IOFactory.php';
require '../../vendor/autoload.php';
require_once('encode.php');
require_once('address.php');
//===========================================
// Search   class
//    パンフ検索  module
//===========================================

//print  "<p>". 'print post ' ;
   //print_r($_POST);
//print  "</p>";
//print  "<pre>". 'get  ';
//   var_dump($_GET);
//print  "</pre>";
//var_dump ($_SESSION);

class order_sheet01 extends view  {
//---------------------------------------------------------
// $pub_rows01 は　未使用　$_POST値、getlist01で再READしている　43行目あたり
// $pub_rows01 より　getlist01のほうが　最新（同一パンフデータを複数人で更新していた場合
//　最初にreadしたデータを$pub_rows01にsaveするため その後他の操作者が更新したデータが反映しない可能性あり)
  public $pub_rows01;
//----------------------------------------------------------
  public $sw;

function dispChannel(){
  $sd = date('Ymd');
  $st = date('Hi');
  $obj = new addressoperation;
  //----------------------------------------------------
  //存在check  　　
 
  //----------------------------------------------------
  $sqls ='';
  $p_noxx ='';
  if (empty($_POST['p_no_c'])) {
    $sqls = "select p_id,p_no from t_pmh_sub01 where p_id = '" . $_POST['p_id_c'] . "' and p_no ='" . $_POST['p_noxx_c'] ."'"; 
  } else {
    $sqls = "select p_id,p_no from t_pmh_sub01 where p_id = '" . $_POST['p_id_c'] . "' and p_no ='" . $_POST['p_no_c'] ."'";  
  }
 
  //echo '<p>' . $sqls . '</p>';
  $res1 = $obj  -> getlist01($sqls);
  $count=count($res1[RESDATA]);
  //echo 'cnt: ' .  ($count);
  if (count($res1[RESDATA]) == 0 ) {
    echo "<p>" . "そのパンフＩＤは　未登録のようです。登録、更新されましたか？" . "</p>";
    echo "<span style=\"color:#FF0000\">" . ODRSHTPRINTNG . "</span>";
    //return 'Print data Failed!';
	return '';
    exit();
	} else {};
  
  //$sf =  'out\pmh_data' . $sd . '.xls';	
  //$sf =  EXCEL_PMH_DATA01 . $sd . '.xls';
  //exit();
  //----------------------------------------------------
  //$sts  template select 　　
  // 1:パンフ発注票
  // 2:パンフ情報シート
  //----------------------------------------------------
  switch ($this->sw) {
    case '1':
	  $temp_f = 'template/pmh_order_sht04_temp00.xlsx';
	  break;
	case '2': 
	  $temp_f = 'template/pmh_order_sht04_temp01.xlsx';
	  break; 
	default:
	  $temp_f = 'template/pmh_order_sht04_temp00.xlsx';
	  break;
  }
  
  $objReader = new PHPExcel_Reader_Excel2007();
  //$objPHPExcel = $objReader->load('template/pmh_order_sht04_temp00.xlsx');
  $objPHPExcel = $objReader->load($temp_f);
  
  // 0番目のシートをアクティブにする（シートは左から順に、0、1，2・・・）
  $objPHPExcel->setActiveSheetIndex(0);
  // アクティブにしたシートの情報を取得
  $objSheet = $objPHPExcel->getActiveSheet();
  switch ($this->sw) {
     case '1':
	   $sht_nm = 'Pamphlet 発注票';
	   break;
	 case '2':
	   $sht_nm = 'Pamphlet 情報';
	   break;
	 default:
	   $sht_nm = 'Pamphlet 発注票';
	   break;
  } 
  $objSheet->setTitle($sht_nm);
  //----------------------------
  //  data set 
  //----------------------------
      //---------------------------------
	  // bsy
	  //---------------------------------
	  $res1 = array();
	  $ary_bsy = array();	  
	   if (!empty($_POST['bsy_cd_c'])) {
	     $res1 = $obj  -> getlist01_01('select * from t_bsy where bsy_cd = ? ',$_POST['bsy_cd_c']);
       }
	  if (count($res1[RESDATA]) == 0) {
		  //echo '<p>' .  'bsy_cd  invalid :'  . $_POST['bsy_cd_c'] . "</p>\n";
		 
	     } else {
	       // echo '<p>' .  'p_no_com  valid :'  . $id . "</p>\n";
		  foreach ($res1[RESDATA] as $bsy_row1) {
            $ary_bsy += array($bsy_row1[0] => $bsy_row1[1]);
         }  	
	   }   // end if
	   //---------------------------------
	  // ad
	  //---------------------------------
	  $res1 = array();
	  $ary_ad = array();	  
	   if (!empty($_POST['ad_cd_c'])) {
	     $res1 = $obj  -> getlist01_01('select * from t_ad where ad_cd = ? ',$_POST['ad_cd_c']);
	   }
	  if (count($res1[RESDATA]) == 0) {
        //if (isset($_POST['ad_cd_c'])) {		 
		   echo '<p>' .  'ad_cd  invalid :'  . "</p>\n";
		//} else {}  
	  } else {
	       // echo '<p>' .  'p_no_com  valid :'  . $id . "</p>\n";
		  foreach ($res1[RESDATA] as $ad_row1) {
            $ary_ad += array($ad_row1[0] => $ad_row1[1]);
         }  	
	   }   // end if
	  //--------------------------------------------------
	  //ksy 
	  //--------------------------------------------------
	 
	  $res1 = array();
	  $ary_ksy = array();
	  $sqls="";	  
      $sqls='SELECT t_Ksy.ksy_cd,t_Ksy.kgo_a_cd,t_Ksy.kgo_b_cd,t_ksy.kgo_c_cd,'
	    .  't_kgo_a.tuk_kgo_nm_j,t_Ksy.ksy_nm,t_Ksy.p_id,'
        . 't_Ksy.p_nd,t_Ksy.bsy_cd,t_Ksy.ad_cd,t_kgo_b.kgo_b_nm_j,t_kgo_b.kgo_yubin,t_kgo_b.kgo_ken,'
        . 't_kgo_b.kgo_adr1,t_kgo_b.kgo_adr2,t_kgo_b.kgo_adr3,t_kgo_c.kgo_tnto_bsy_nm_j,'
        . 't_kgo_c.kgo_tnto_nm_j,t_kgo_c.kgo_tel,t_kgo_c.kgo_fax '
        . 'FROM T_ksy Left  JOIN t_kgo_a ON T_kgo_a.kgo_a_cd = t_Ksy.kgo_a_cd '
        . 'join t_kgo_b on T_kgo_b.kgo_a_cd = t_Ksy.kgo_a_cd and t_kgo_b.kgo_b_cd = t_Ksy.kgo_b_cd '
        . 'join t_kgo_c on T_kgo_c.kgo_a_cd = t_Ksy.kgo_a_cd and T_kgo_c.kgo_b_cd = t_Ksy.kgo_b_cd '
        . 'and t_kgo_c.kgo_c_cd = t_Ksy.kgo_c_cd  '
        . 'WHERE t_ksy.ksy_cd  = ? ' 
        . 'ORDER BY t_kgo_a.tuk_kgo_nm_j,t_kgo_a.kgo_a_cd;';
	  if (!empty($_POST['ksy_cd_dummy_c'])) {
	    $res1 = $obj  -> getlist01_01($sqls,$_POST['ksy_cd_dummy_c']);
	  }
	  if (count($res1[RESDATA]) == 0) {
		  echo '<p>' .  't_ksy  invalid :'  . substr($id,0,5) . "</p>\n";
		 
	     } else {
	        //echo '<p>' .  't_ksy  valid :'  . $id . "</p>\n";
		  //foreach ($res1[RESDATA] as $row1) {
          //   $ary_ksy += array($row1[0] => $row1[0].':'.$row1[1].':'.$row1[2].':'.$row1[3].':'.$row1[6]);
          //}  
		  $count=count($res1[RESDATA]);
	      for ( $i = 0; $i < $count; ++$i){
					  
	        $ary_ksy_ids[] = htmlspecialchars($res1[RESDATA][$i][0]);
	  	    $ary_ksy_names[] = htmlspecialchars($res1[RESDATA][$i][5]); 
			$ary_ksy_kgo_nm[] =  htmlspecialchars($res1[RESDATA][$i][4]); 
			$ary_ksy_kgo_ken[] =  htmlspecialchars($res1[RESDATA][$i][12]);
			$ary_ksy_kgo_adr1[] =  htmlspecialchars($res1[RESDATA][$i][13]);
			$ary_ksy_kgo_adr2[] =  htmlspecialchars($res1[RESDATA][$i][14]);
			$ary_ksy_kgo_adr3[] =  htmlspecialchars($res1[RESDATA][$i][15]);
			$ary_ksy_kgo_tnto_bsy[] =  htmlspecialchars($res1[RESDATA][$i][16]);
			$ary_ksy_kgo_tnto[] =  htmlspecialchars($res1[RESDATA][$i][17]);
			$ary_ksy_kgo_tel[] =  htmlspecialchars($res1[RESDATA][$i][18]);
			$ary_ksy_kgo_fax[] =  htmlspecialchars($res1[RESDATA][$i][19]);
			$ary_ksy_p_nd[] = htmlspecialchars($res1[RESDATA][$i][7]); 
			$ary_ksy_yubin[] = htmlspecialchars($res1[RESDATA][$i][11]);                 
          }	 	
	   }
	  //--------------------------------------------------
	  //pmh settei
	  //--------------------------------------------------
	  $sqls='';
	  $sqls='SELECT
    t_settei_inf01.p_id,
    t_settei_inf01.kgo_nm,
    t_settei_inf01.keisai_crs_add,
    t_settei_inf01.otr_t,
    t_settei_inf01.crs_nm_hk_kbn,
    t_settei_inf01.crs_nm_crs,
    t_settei_inf01.juko_hk_kbn,
    t_settei_inf01.juko_hk_crs,
    t_settei_inf01.heiyo_kbn,
    t_settei_inf01.zai_f,
    t_kikan.kikan,
    t_settei_inf01.zai_mnt,
    t_settei_inf01.hyozai_f,
    t_kikan_1.kikan,
    t_settei_inf01.hyozai_mnt,
	t_settei_inf01.yusyu_f,
    t_kikan_2.kikan,
    t_settei_inf01.yusyu_mnt,
    t_settei_inf01.kigyo_crs_kbn,
    t_settei_inf01.rpt_rnh_kbn,
    t_settei_inf01.toku_no_kbn
FROM
    t_settei_inf01   left JOIN t_kikan on t_settei_inf01.zai_f = t_kikan.f 
                      LEFT JOIN t_kikan as t_kikan_1 ON t_settei_inf01.hyozai_f = t_kikan_1.f 
                      LEFT JOIN t_kikan as t_kikan_2 ON t_settei_inf01.yusyu_f = t_kikan_2.f
	where t_settei_inf01.p_id=?';

	  $res1 = array();
	  $ary_settei = array();
	 
	  // t_setei_inf より　1data　のみ　抽出
	   if (!empty($_POST['p_id_c'])) {
	     $res1 = $obj  ->getlist01_01($sqls,$_POST['p_id_c']);
	   }
	   if (count($res1[RESDATA]) == 0) {
		      echo '<p>' .  't_settei_inf  invalid (他団体パンフのときは無視):'  . "</p>\n";
	     } else {
	       //20 = field 数);
           for ( $i = 0; $i <= 20; ++$i){
			 $ary_settei[] = e($res1[RESDATA][0][$i]);	     
	        
           } 			 	
	  } // end if
	  //var_dump ($ary_settei);  // . ':' . $ary_settei[2];
      //--------------------------------------------------
	  //insatu_kgo 
	  //--------------------------------------------------
	  $res1 = array();
	  $ary_insatu_kgo = array();
	  $ary_insatu_kgo_ids = array();
	  $ary_insatu_kgo_names = array();
	   if (!empty($_POST['insatu_kgo_cd_c'])) {
	     $res1 = $obj  -> getlist01_01('select * from t_insatu_kgo where insatu_kgo_cd = ?',$_POST['insatu_kgo_cd_c']);	
	   }
	  //$ary_insatu_kgo= array($res1[RESDATA][0][0] => '');
	  if (count($res1[RESDATA]) == 0) {
		      echo '<p>' .  't_insatu_kgo  iinvalid :'  . "</p>\n";
	     } else {
	       //   foreach ($res1[RESDATA] as $row1) {
           //      $ary_insatu_kgo += array($row1[0] => $row1[1]);
           //   }	
		   $count=count($res1[RESDATA]);
           for ( $i = 0; $i < $count; ++$i){
			// $ary_insatu_kgo +=array(htmlspecialchars($res1[RESDATA][$i][0]) => htmlspecialchars($res1[RESDATA][$i][1]));	   
	         $ary_insatu_kgo_ids[] = htmlspecialchars($res1[RESDATA][$i][0]);
	  	     $ary_insatu_kgo_names[] = htmlspecialchars($res1[RESDATA][$i][1]);  
           } 	
	  } // end if
	  //--------------------------------------------------
	  //dantai 
	  //--------------------------------------------------
	  $res1 = array();
	  //$ary_settei = array();
	  $ary_dantai_knj_ids = array();
	  $ary_dantai_knj_names = array();
	  // t_dan_wk より　dantai_cd_sg が　nullでない団体を抽出する
	   if (!empty($_POST['dantai_cd_knj_c'])) {
	     $res1 = $obj  ->getlist01_01('select * from t_dan_wk where dantai_cd = ?',$_POST['dantai_cd_knj_c']);
	   } 
	     //ChromePhp::log('dantai_cd_knj--->'  .  $_POST['dantai_cd_knj_c']);
	   if (count($res1[RESDATA]) == 0) {
		   echo '<p>' . ' t_dan_wk iinvalid : ' . '</p>';
	     } else {
	       $count=count($res1[RESDATA]);
           for ( $i = 0; $i < $count; ++$i){
			 //$ary_dantai_knj +=array(htmlspecialchars($res1[RESDATA][$i][0]) => htmlspecialchars($res1[RESDATA][$i][2]));	     
	         $ary_dantai_knj_ids[] = htmlspecialchars($res1[RESDATA][$i][0]);
	  	     $ary_dantai_knj_names[] = htmlspecialchars($res1[RESDATA][$i][2]);  
           } 			 	
	  } // end if
	  //--------------------------------------------------
	  //pmh_type 
	  //--------------------------------------------------
	   $res1 = array();
	   $ary_pmh_type = array();
	   $ary_pmh_type_ids = array();
	   $ary_pmh_type_names = array();
	    if (!empty($_POST['pmh_type_c'])) {
	     $res1 = $obj  -> getlist01_01("select * from t_pmh_type_kbn where pmh_type = ? ",$_POST['pmh_type_c']);	
	    }
	   $count=count($res1[RESDATA]);
       for ( $i = 0; $i < $count; ++$i){
			//$ary_pmh_type +=array(htmlspecialchars($res1[RESDATA][$i][0]) => htmlspecialchars($res1[RESDATA][$i][1]));	 
	        //$ary_pmh_type_ids[] = htmlspecialchars($res1[RESDATA][$i][0]);
	  	    $ary_pmh_type_names[] = htmlspecialchars($res1[RESDATA][$i][1]);  
       }
  //-----------------------------------------
  // line1
  //-----------------------------------------
  $objSheet->setCellValue("D1",e($bsy_row1[1]));
  $objSheet->setCellValue("F1",e($ad_row1[1]));
  if (!empty($_POST['p_nd_c'])) {
     $objSheet->setCellValue("H1",e($_POST['p_nd_c']));
  }	 
  //-----------------------------------------
  // line2		   				
  //-----------------------------------------   				   
  //echo 'pmh_type_c: ' . var_dump($this->pub_rows01);
  //echo 'p_id: ' . e($_POST['p_id_c']);
  
  $val='';
   if (!empty($_POST['ksy_cd_dummy_c'])) {
  $val = ' ' . str_pad($_POST['ksy_cd_dummy_c'], 9, "0", STR_PAD_LEFT);
  $objSheet->setCellValue("B2",e($val));
   }
  // $objSheet->setCellValue("B2",' ' .e($_POST['ksy_cd']));
   //p_id
   //$val = str_pad( $this->pub_rows01['p_id'], 5, "0", STR_PAD_LEFT) . '-' .
    //   str_pad( $this->pub_rows01['p_no'], 3, "0", STR_PAD_LEFT);
	//	 $_POST['p_id_c']
 
  if (empty($_POST['p_noxx_c'])) {
	 $val = str_pad($_POST['p_id_c'], 5, "0", STR_PAD_LEFT) . '-' .
            str_pad($_POST['p_no_c'], 3, "0", STR_PAD_LEFT);	 
   } else {
	  $val = str_pad($_POST['p_id_c'], 5, "0", STR_PAD_LEFT) . '-' .
            str_pad($_POST['p_noxx_c'], 3, "0", STR_PAD_LEFT);	 
   }
	  
	 //$p_noxx_w =  $p_no_latest;
	 
	 //$val = str_pad($_POST['p_id_c'], 5, "0", STR_PAD_LEFT) . '-' .
     //       str_pad($_POST['p_no_c'], 3, "0", STR_PAD_LEFT);	 
  $objSheet->setCellValue("D2",e($val));
  $objSheet->setCellValue("F2",e($_POST['tdantai_c']));
  $objSheet->setCellValue("H2",e($_POST['snk_kei_kbn_c']));
  //-----------------------------------------
  //  line3
  //-----------------------------------------
  $objSheet->setCellValue("B3",e($ary_ksy_kgo_nm[0]));       //e($_POST['kgo_nm_j_c']));
  $objSheet->setCellValue("F3",e($_POST['all_crs_c']));
  $objSheet->setCellValue("H3",e($_POST['pmh_cycle_kbn_c']));
  //-----------------------------------------
  //  line 4 
  //-----------------------------------------
  $objSheet->setCellValue("B4",e($_POST['p_nm_c']));
  $objSheet->setCellValue("F4",e($_POST['sanno_crs_c']));
  //-----------------------------------------
  //  line5
  //-----------------------------------------
  $objSheet->setCellValue("B5",e($ary_ksy_kgo_ken[0]));   //e($_POST['kgo_ken_c']));
  $objSheet->setCellValue("D5",e($_POST['kaiko1_c']));
   //crs_share_rate 
  $val='';
 
  switch  (intval($_POST['all_crs_c']))  {
	case 0: 
	  $val= '0%';
	  break; 
	default:
	  $val =  round(intval($_POST['sanno_crs_c']) /  
	  intval($_POST['all_crs_c']),3,PHP_ROUND_HALF_UP) * 100 . '%';
	  break;	 	 
  }
  $objSheet->setCellValue("F5",e($val));
  $objSheet->setCellValue("H5",e($ary_ksy_kgo_tel[0])); //e($_POST['kgo_tel_c']));
  //-----------------------------------------
  // line6
  //-----------------------------------------
  $val='';
  if (!empty($_POST['kgo_cd'])) { 
 $val = ' ' . str_pad($_POST['kgo_cd'], 5, "0", STR_PAD_LEFT);
  }
  $objSheet->setCellValue("B6",e($val));
  //pmh_type
  $val ='';
   if (!empty($_POST['pmh_type_c'])) {
   $val = $_POST['pmh_type_c'] . ':' . $ary_pmh_type_names[0]; }     // $_POST['pmh_type_nm_c'];
  $objSheet->setCellValue("D6",e($val));
  $objSheet->setCellValue("F6",$_POST['app_ymd_c']);
  $objSheet->setCellValue("H6",e($ary_ksy_kgo_fax[0]));   //e($_POST['kgo_fax_c']));
  //-----------------------------------------
  //  line7
  //-----------------------------------------
  $val ='';
  $val = '〒'. $ary_ksy_yubin[0] . ':' . $ary_ksy_kgo_adr1[0];
  $objSheet->setCellValue("B7",e($val));
  $objSheet->setCellValue("F7",e($ary_ksy_kgo_tnto_bsy[0]));     //   e($_POST['kgo_tnto_bsy_nm_j_c']));
  //-----------------------------------------
  //   line8
  //-----------------------------------------
  $objSheet->setCellValue("B8",e($ary_ksy_kgo_adr2[0]));
  $objSheet->setCellValue("F8",e($ary_ksy_kgo_tnto[0]));

  //-----------------------------------------
  //   line9
  //-----------------------------------------
  $objSheet->setCellValue("B9",e($ary_ksy_kgo_adr3[0]));
  $objSheet->setCellValue("F9",e($ary_dantai_knj_names[0]));    //$_POST['dname_c']));
  //-----------------------------------------
  //  line11
  //-----------------------------------------
	 $val='';
	 //echo 'pmh_size' . e($this->pub_rows01['pmh_size_kbn']);
	  if (!empty($_POST['pmh_size_kbn_c'])) {
	   switch (e($_POST['pmh_size_kbn_c'])) {
	   
	   case NULL:
	     $val = "□Ａ５ □Ａ４ □Ａ３ □Ｂ５ □Ｂ４ □Ｂ３ □備考";
		  break;
	   case '':
	     $val = "□Ａ５ □Ａ４ □Ａ３ □Ｂ５ □Ｂ４ □Ｂ３ □備考";
		  break;
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
       
       default:
	    $val= "□Ａ５ □Ａ４ □Ａ３ □Ｂ５ □Ｂ４ □Ｂ３ □備考";
		  break;
	   }  
	 } else {
		  $val= "□Ａ５ □Ａ４ □Ａ３ □Ｂ５ □Ｂ４ □Ｂ３ □備考";
	 }
	 
	 $objSheet->setCellValue("B11",$val);
	 $objSheet->setCellValue("F11","部");
	 $objSheet->setCellValue("H11","部");
 //-----------------------------------------
 //  line12
 //-----------------------------------------
	  $val='';
	
	 switch ($_POST['web_pmh_kbn_c']) {
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
	  switch ($_POST['han_size_kbn_c']) {
		case NULL:
	     $val="□1/2 □1/3 □1/4 □1 □コース一覧のみ □備考";
		  break;
	    case '':
	     $val="□1/2 □1/3 □1/4 □1 □コース一覧のみ □備考";
		  break;  
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
        default:
          $val = "□1/2 □1/3 □1/4 □1 □コース一覧のみ □備考";
		
    	 }
		 
      $objSheet->setCellValue("H13",$_POST['deli_ymd_c']);
	  $objSheet->setCellValue("B13",$val);
	 //-----------------------------------------
	 // line14
	 //-----------------------------------------
	 $val='';
	  switch ($_POST['pos_type_kbn_c']) {
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
	//$objSheet->setCellValue("B15",e($this->pub_rows01['kgo_adr3']));
	$val= '';
	//$val = e(str_replace($this->pub_rows01['insatu_kgo_nm'], '株式会社', ''));
	$val = e( $ary_insatu_kgo_names[0]);
	$objSheet->setCellValue("H15",$val);
	//-----------------------------------------
	// line17
	//-----------------------------------------
	 $val= '';
	  //echo '<p>' . ' sekng_kbn  :' . $_POST['sek_ng_kbn_c'] . '</p>';   
	 switch ($_POST['sek_ng_kbn_c']) {
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
	 switch ($_POST['kgo_sek_kbn_c']) {	 
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
	 switch ($_POST['data_select_kbn_c']) {	
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
	 switch ($_POST['kgo_ren_kbn_c']) {	
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
	 switch ($_POST['cansel_policy_kbn_c']) {	
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
	 switch ($_POST['color_kosei_kbn_c']) {	        
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
	 switch ($_POST['kjn_inf_kbn_c']) {	
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
	 switch ($_POST['kyufu_kbn_c']) {
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
	 switch ($_POST['sho_sof_kbn_c']) {
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
     switch ($_POST['card_type_kbn_c']) {
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
	 switch ($_POST['card_hyojun_kbn_c']) {
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
	 $objSheet->setCellValue("B29",e($_POST['card_hyojun_memo_c']));
	
  //==============================================================================
  //  $sts 
  // case 1:パンフ発注票
  // case 2:パンフ情報シート 
  //==============================================================================
    
  switch ($this->sw) {
  case '1':	
   $objSheet->setCellValue("B36",e($_POST['memos_c']));
	    
  //-----------------------------------------
  //  line35  ichi_tbl
  //----------------------------------------- 
  $val= '';
  switch (count($ary_settei)) {
    case 0:
  	  $val = '□総合ガイドと同様　□特別設定あり';
	  break;
    case  NULL:
	  $val = '□総合ガイドと同様　□特別設定あり';
	  break;
	default:
	  //toku_no_kbn
	   switch  (e($ary_settei[20])) {           
         case 0:
           $val = '■総合ガイドと同じ　□特別設定あり';
		   break;
         case 1:
           $val = '□総合ガイドと同じ　■特別設定あり';
		   break;
	   }
  }
   $objSheet->setCellValue('B39',$val); 
  //-----------------------------------------
  //  line36  在籍期間
  //----------------------------------------- 
  $val= '';
  switch  (count($ary_settei)) {
	case 0:
  	  $val='□受講期間 + (    )ヶ月 □開講日 +  (    )ヶ月  □その他';
	  break;
    case  NULL:
	  $val='□受講期間 + (    )ヶ月 □開講日 +  (    )ヶ月  □その他';
	  break;
	default:
	   //'toku_no_kbn_c'
	   switch  ($ary_settei[20]) {
         case 0:
		    $val='■本学基準';
			break;
         default:
		   //zai_f_c  			
          //echo 'zai_f  :' . $ary_settei[9);
		   switch  ($ary_settei[9]) {
			  case NULL:
			    $val='';
				break;     
              case '':
			    $val='';
				break;				
              case 0:
			    $val='■本学基準';
				break;
			  case 3:   //Kikan_F1.Kikan
                $val='■' . e($ary_settei[10]) . '下記参照';
				break;
		      default:  //Zai_mnt
			    $val='■' . e($ary_settei[10]) . 
				mb_convert_kana($ary_settei[11],'R','UTF-8') . 'ヶ月';
                break;
		   }
	   }
  }
   $objSheet->setCellValue('B40',$val); 
  //-----------------------------------------
  //  line37  ichi_tbl 表示chk受講期間
  //-----------------------------------------
  $val= '';
  switch (count($ary_settei)) {
	case 0:
  	  $val='□受講期間 + (    )ヶ月 □開講日 +  (    )ヶ月  □その他';
	  break;
    case  NULL:
	  $val='□受講期間 + (    )ヶ月 □開講日 +  (    )ヶ月  □その他';
	  break;
    default:
	  switch ($ary_settei[20]) {
         case 0:
		    $val='■本学基準';
			break;
         default:
		 //hyozai_f_c
		// echo 'yusyu  :' . $ary_settei[12] . ':' . e($ary_settei[13]);     
            switch  ($ary_settei[12]) {
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
                $val='■' . e($ary_settei[13]) . '下記参照';
				break;
		      default:
			    $val='■' . e($ary_settei[13]) . 
				mb_convert_kana($ary_settei[14],'R','UTF-8') . 'ヶ月';
                break;
		   }
	   }
  }
   $objSheet->setCellValue('B41',$val); 
  //-----------------------------------------
  //  line38 優秀期間
  //-----------------------------------------   
  $val= '';
  switch (count($ary_settei)) {
	case 0:
  	  $val='□受講期間 + (    )ヶ月 □開講日 +  (    )ヶ月  □その他';
	  break;
    case  NULL:
	  $val='□受講期間 + (    )ヶ月 □開講日 +  (    )ヶ月  □その他';
	  break;
    default:
	  switch ($ary_settei[20]) {
         case 0:
		    $val='■本学基準';
			break;
         default:   
		 //yusyu_f_c     
            switch   ($ary_settei[15]) {
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
                $val='■' . e($ary_settei[16]) . '下記参照';
				break;
		      default:
			    $val='■' . e($ary_settei[16]) . mb_convert_kana($ary_settei[17],'R','UTF-8') . 'ヶ月';
                break;
		   }
	   }
  }
   $objSheet->setCellValue('B42',$val); 
  //-----------------------------------------
  //  line39 コース名変更
  //-----------------------------------------
  $val= '';
  switch (count($ary_settei)) {
    case 0:
  	  $val='□なし  □あり';
	  break;
    case  NULL:
	  $val='□なし  □あり';
	  break;
    default:
	   switch (e($ary_settei[20])) {
         case 0:
		    $val="■なし";
			break;
         default:
		 //crs_nm_hk_kbn_c
		   switch  (e($ary_settei[4])) {
			  case 1:
			    $val='■あり ';
				break;     
              default:
			    $val='■なし ';
				break;				
		   }
	   }
  }
   $objSheet->setCellValue('B43',$val . $ary_settei[5]);               
  //-----------------------------------------
  //  line40 受講料変更
  //-----------------------------------------
  $val= '';
  switch (count($ary_settei)) {
    case '':
  	  $val='□なし  □あり';
	  break;
    case  NULL:
	  $val='□なし  □あり';
	  break;
    default:
	   switch (e($ary_settei[20])) {
         case 0:
		    $val="■なし";
			break;
         default:
		   //'Juko_hk_kbn_c
		   switch  (e($ary_settei[6])) {
			  case 1:
			    $val='■あり ';
				break;     
              case FALSE:
			    $val='■なし ';
				break;				
		   }
	   }
  }
   $objSheet->setCellValue('B44',$val . $ary_settei[7]);   
 //-----------------------------------------
  //  line36 併用払
  //-----------------------------------------
  $val= '';
  switch  (count($ary_settei)) {
    case 0:
  	  $val='□なし  □あり';
	  break;
    case  NULL:
	  $val='□なし  □あり';
	  break;
    default:
	//toku_no_kbn_c
	   switch (e($ary_settei[20])) {
         case 0:
		    $val="■なし";
			break;
         default:
		   switch  (e($ary_settei[08])) {
			  case TRUE:
			    $val='■あり';
				break;     
              case FALSE:
			    $val='■なし';
				break;				
		   }
	   }
  }
   $objSheet->setCellValue('G40',$val);  
 //-----------------------------------------
 //  line37 38  拠点確認不要 コース追加OK
 //-----------------------------------------
  $val1='';
  $val2='';
  //'keisai_crs_add_c'
  switch (e($ary_settei[02])) {
    case TRUE:
  	  $val1= '■拠点確認不要 コース追加OK';
      $val2= '□拠点確認必要';
	  break;
    case FALSE:
	  $val1='□拠点確認不要 コース追加OK';
      $val2='■拠点確認必要';
	  break;
  }
   $objSheet->setCellValue('G41',$val1); 
   $objSheet->setCellValue('G42',$val2); 
 //-----------------------------------------
 //  line41  memo
 //-----------------------------------------         
     //otr_t_c
	 $val= e($ary_settei[03]);
	 $objSheet->setCellValue('B45',$val);      
 //-----------------------------------------
 //  line42  memo
 //-----------------------------------------     
     switch (e($ary_settei[18])) { 
       case true:
	     $val  = e('企業専用（フレックス）コースの申請必要！');
		 $objSheet->setCellValue('A46',$val); 
		 break;
       case false: 
	     $val  = '';
		 $objSheet->setCellValue('A46',$val); 
		 break;
	 }
	 //rpt_rnh_kbn
     switch  (e($ary_settei[19])) { 
       case true:
	     $val  = e('リポート特別対応連絡票』起票必要！');
		 $objSheet->setCellValue('E46',$val); 
		 break;
       case false: 
	     $val  = '';
		 $objSheet->setCellValue('E46',$val); 
		 break;
	 }
 
    //----------------------------------------------------------------
    // Excel2007.phpを利用する場合
    //----------------------------------------------------------------
    $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
    $objWriter->save('out/pmh_order_sht04_temp00_' . $sd . $st . '.xlsx');
    $sf='out/pmh_order_sht04_temp00_' . $sd . $st.'.xlsx';
    
	return $sf;
	
	break;
  case '2':
    //-----------------------------------------
    //  
    //-----------------------------------------
  
	 $objSheet->setCellValue("B32",e($_POST['memos_c']));
	 $objSheet->setCellValue('F6',$_POST['app_ymd_c']);
	 $objSheet->setCellValue('F11',$_POST['pmh_items_c'] . "部");
	 $objSheet->setCellValue('H13',$_POST['deli_ymd_c']);
	 $objSheet->setCellValue('F14',$_POST['pos_items_c'] . "部"); 
	 $objSheet->setCellValue('H11',$_POST['bes_items_c'] . "部");      
	 //
	 $objSheet->setCellValue('F25',$_POST['uke_ymd_c']);
	 $objSheet->setCellValue('F26',$_POST['ryo_ymd_c']);
	 $objSheet->setCellValue('F27',$_POST['hac_ymd_c']);
	 $objSheet->setCellValue('F28',$_POST['shoko_ymd_c']);
	 $objSheet->setCellValue('F29',$_POST['shoko_sof_ymd_c']);
	 $objSheet->setCellValue('F30',$_POST['shoko_return_ymd_c']);
     //
	 $objSheet->setCellValue('H25',$_POST['saiko_ymd_c']);
	 $objSheet->setCellValue('H26',$_POST['saiko_sof_ymd_c']);
	 $objSheet->setCellValue('H27',$_POST['saiko_return_ymd_c']);
	 $objSheet->setCellValue('H28',$_POST['ko3_ymd_c']);
	 $objSheet->setCellValue('H29',$_POST['sekryo_ymd_c']);
	 $objSheet->setCellValue('H30',$_POST['sof_irai_ymd_c']);
	 //
     $objSheet->setCellValue('B34',$_POST['pmh_cost_c']);
	 $objSheet->setCellValue('D34',$_POST['senyu_page_c']);
	 $objSheet->setCellValue('F34',$_POST['page_tanka_c']);
	 $objSheet->setCellValue('B35',$_POST['post_cost_c']);
	 $objSheet->setCellValue('D35',$_POST['all_page_c']);
	 $objSheet->setCellValue('F35',$_POST['sekyymm_c']);
     //    
     $objSheet->setCellValue('B36',$_POST['bes_cost_c']);
	 $objSheet->setCellValue('D36',$_POST['com_page_c']);
	 $objSheet->setCellValue('B37',$_POST['any_cost_c']);
	 $objSheet->setCellValue('D37',$_POST['sho_page_c']);
	 //
	 setlocale(LC_MONETARY, 'ja_JP.utf8');
    // ¥」は「&yen;」「&#165」
       //「\」は「&#92」
	 echo "&yen;" . $_POST['this_year_cost_c'];
	 echo "&#165;" . $_POST['this_year_cost_c'];
	 echo "&#92;" . $_POST['this_year_cost_c'];
     $val0 = intval(str_replace(',','',$_POST['this_year_cost_c']));
	 $objSheet->setCellValue('B39', $val0);
	 $objSheet->getStyle('B39')->getNumberFormat()->setFormatCode('"\"#,##0');
	
	 $vala = intval(str_replace(',','',$_POST['this_year_cost_c']));
	 $valb = intval(str_replace(',','',$_POST['sanno_keisai_cost_c'])); 
	 $valc = $vala -  $valb;  
	 //echo '<p>val:-->' . $valc . '</p>';   
	 $objSheet->setCellValue('D39',number_format(intval($valc)));
     //$objSheet->setCellValue('D39',$_POST['tdan_sek_c']);
	 $objSheet->setCellValue('D40',$_POST['sanno_keisai_cost_c']);
	 $objSheet->setCellValue('F40',$_POST['com_cost_c']);
	 $objSheet->setCellValue('H40',$_POST['mng_cost_c']);
	 $objSheet->setCellValue('D37',$_POST['sho_page_c']);
    //
     $objSheet->setCellValue('F41',$_POST['sho_cost_c']);
	 $objSheet->setCellValue('H41',$_POST['sanno_cost_c']);
	 $objSheet->setCellValue('F42',$_POST['etc_cost_c']);
	
	 if ($_POST['pmh_type_c'] =='sw')  {
		 $objSheet->setCellValue('F40','');
	     $objSheet->setCellValue('H40','');
	     //
         $objSheet->setCellValue('F41','');
	     $objSheet->setCellValue('H41','');
	     $objSheet->setCellValue('F42','');
	}
	 if ($_POST['pmh_type_c'] =='tw')  {
		 $objSheet->setCellValue('F40','');
	     $objSheet->setCellValue('H40','');
	     //
         $objSheet->setCellValue('F41','');
	     $objSheet->setCellValue('H41','');
	     $objSheet->setCellValue('F42','');
	}
	//
	//----------------------------------------------------------------
    // Excel2007.phpを利用する場合
    //----------------------------------------------------------------
    $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
    $objWriter->save('out/pmh_order_sht04_temp01_' . $sd . $st . '.xlsx');
    $sf='out/pmh_order_sht04_temp01_' . $sd . $st.'.xlsx';
    return $sf;
	break;
   default:
     return 'print sw data exception';
	break;
   }  // end switch

  } // end function
  function setChannel($row01,$sw){
	$this->pub_rows01 =$row01;
	$this->sw =$sw;
  
	//var_dump ('rows01=>' . $row01);
	
	
   $sf2 = $this->dispChannel();
   return $sf2; 
  } // end function
} // end_class

 ?>