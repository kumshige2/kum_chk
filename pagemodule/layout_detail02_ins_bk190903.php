<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
//require_once('HTML/QuickForm2/Element/InputFile.php');
//require_once ('HTML/QuickForm2/Container.php');
require '../../vendor/autoload.php';
require_once(LIBPATH.'address_test.php');
require_once(LIBPATH.'Chromephp.php');
require_once(LIBPATH.'encode.php');
//require('Pager/Pager.php');
//require('Spreadsheet/Excel/Writer.php');

//===========================================
// Search   class
//    パンフ検索  module
//===========================================
// echo  '<p>' .'search.php ' .date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
echo "<pre>". 'get ' ;
print_r($_GET);
echo "</pre>";
echo "<pre>". 'post ' ;
print_r($_POST);
echo "</pre>";
//echo "<pre>". 'session ' ;
//print_r($_SESSION);
//echo "</pre>";
class layout_detail02_ins   extends view {
 //$property
	var $smarty;
	public $pub_rows00;
	public $pub_crs_view00;
	public $pub_fld_view00;
  public $pub_sel_view00;
	public $pub_fld00;
  public $pub_fld01;
  public $pub_fld02;
  public $pub_fld03;
  public $pub_fld04;
  public $pub_fld05;
  public $pub_fld06;
  public $pub_fld07;
  public $pub_fld08;
  public $pub_fld09;
  public $pub_fld10;
  public $pub_fld11;
  public $pub_fld12;
  public $pub_fld13;
  public $pub_fld14;
  public $pub_fld15;
  public $pub_json01;
  //==========================================
  //  constructor
  //===========================================
	function __construct() {
     //------------------------------------------
	 // smarty instance
	 //------------------------------------------
		$this->smarty = parent::__construct();
	  // $cls = new excel_00();

  }   // end__construct

  //===========================================
  //  pamph 一覧情報取得
  //===========================================
  function main() {
  	ChromePhp::log('Hello console');
  	ChromePhp::log('layout_detail01');
     $obj = new addressoperation;
   // $ret04 = $this ->fld_cnv01('A0');
   // echo 'cnv--->' . $ret04;
   // $ret04 = $this ->fld_cnv01('F0');
   // echo 'cnv--->' . $ret04;
   // $ret04 = $this ->fld_cnv01('C0');
   // echo 'cnv--->' . $ret04;
   // $ret04 = $this ->fld_cnv01('C11');
   // echo 'cnv--->' . $ret04;
 //------------------------------------------
   //  年度計算
   //------------------------------------------
  	$year = date('Y');
  	$month = date('m');
  	$this_ndo = $this ->get_financial_year($year, $month, 3);
  	$last_ndo = intval($this_ndo) - 1;
  	$next_ndo = intval($this_ndo) + 1;
  	$this_ndo_1 = intval($this_ndo) - 1;
  	$this_ndo_2 = intval($this_ndo) - 2;
  	$this_ndo_3 = intval($this_ndo) - 3;
  //---------------------------------------------
  //  Post key check
  //  $_POST['KEY']  通常表示
  //  $_POST['id']   更新、追加、削除
  //---------------------------------------------
  	$key_array0 = array();
    $key_array1 = array();
    if (isset($_POST['KEY'])) {
      $key_array0 = explode(",",$_POST['KEY']);
      $key_array0 = array_filter($key_array0,'strlen');
      $key_array1 = array_map('trim',explode(',',$_POST['KEY']));
    } else {
      if (isset($_GET['KEY'])) {
        $key_array0 = explode(",",$_GET['KEY']);
        $key_array0 = array_filter($key_array0,'strlen');
        $key_array1 = array_map('trim',explode(',',$_GET['KEY']));
      } else {
        if (isset($_GET['id'])) {
          $key_array0 = explode(",",$_GET['id']);
          $key_array0 = array_filter($key_array0,'strlen');
          $key_array1 = array_map('trim',explode(',',$_GET['id']));
        } else {
          //echo POSTNG;
          //exit;
        }
      }
    }
    //$ret = $obj ->table($key_array1);
  	$php_json01 = json_encode($key_array1);
    $sts = $key_array1[0]; //ins,rew
    //$ret = $obj ->table($php_json01);
    $ret01 = $this -> setChannel($php_json01,'php_json01');
    //	ChromePhp::log('p_id-->' . $p_id .  ':' .$_POST['KEY']);
//---------------------------------------------
  //  Post key check
  //  $key_res0,key_res1 --->selected field
  //  $key_uns0,key_uns1 --->Unselected field
  //---------------------------------------------
    $key_res0 = array();
    $key_res1 = array();
    $key_uns0 = array();
    $key_uns1 = array();
    if (isset($_POST['upd']) || isset($_POST['result'])) {
        $key_res0 = explode(",",$_POST['result']);
        $key_res0 = array_filter($key_res0,'strlen');
        $key_res1 = array_map('trim',explode(',',$_POST['result']));
        //$ret011 = $obj ->table($key_res1);
        //exit;
        $key_uns0 = explode(",",$_POST['result2']);
        $key_uns0 = array_filter($key_uns0,'strlen');
        $key_uns1 = array_map('trim',explode(',',$_POST['result2']));
        //$ret011 = $obj ->table($key_uns1);
        //exit;
    } else {
      if (!isset($_POST['upd']) || isset($_POST['result'])) {
         //echo "<span sytle=\"color:#FF00FF\">" . '<------Selected Field data exception ?????------> ' . "</span>";
         //exit;
      } else {
         if (isset($_POST['upd']) || !isset($_POST['result'])) {
           echo "<span sytle=\"color:#FF00FF\">" . '<------Selected Field Nothing------> ' . "</span>";
           exit;
         } else {
         }
      }
    }

//------------------------------------------
//  postcheck
//------------------------------------------
 //  if (isset($_POST[P_ADDDETAIL])) {
  if (isset($_POST['send1'])) {
    $this->_redirect('post_check01');
    //$this->_redirect('layout_detail02');
    exit();
  } else {
  }
  if (isset($_POST['upd222'])) {
    //$this->_redirect('post_check01');
    //$this->_redirect('layout_detail02');
    exit();
  } else {
  }
  //if (isset($_POST['submit'])) {
  //  $this->_redirect('layout_detail01');
  //  exit();
  //} else {
 // }
//------------------------------------------
//  instance
//------------------------------------------
  $form = new HTML_Quickform2('qform_smarty','POST',array('action'=>'index.php?module=layout_detail01'));
 
//--------------------------------------------------
//fld name form postgresql
//--------------------------------------------------
//    $res0 = array();
//    $ary_fld_view = array();
//    $sqls="";
//    $sqls ="SELECT attname FROM pg_attribute WHERE attrelid = 't_tbl_sub01'::regclass and attnum >=0";
//    $res0 = $obj -> getlist02($sqls);
//    //
//    $cnt_res0 =0;
//    if (is_array($res0[RESDATA])) {
//      $cnt_res0 = count($res0[RESDATA]);
//      $ary_fld_view = $this -> sanitize($res0[RESDATA]);
      //$ret0 = $obj ->table($ary_fld_view);
//      $ret0 = $this -> setChannel($ary_fld_view,'fld_view');
//    } else {
//      $cnt_res0 =0;
//      echo('ary_fld_view =0 -->' . $key_array1[0] . ':' .$key_array1[1]);
//      exit;
//    }
    //exit;
//------------------------------------------
// 削除ボタンが押されたとき
//------------------------------------------
    if (isset( $_POST[P_ADDDELETE])) {
    //echo "<pre>". 'post ' ;
      //print_r($_POST);
      //echo "</pre>";
      if ($_POST[judge] ==1) {
     //delete
        $sts_w="del";
        $del_uke01 =$obj->del_uke11($key_array1[1].','. intval($key_array1[2]));
        if ($del_uke01 == TRUE) {
          $this->_redirect('upd_check02', $key_array1[1].','.$key_array1[2].','.'ud0');
          exit;
        } else {
          $this->_redirect('upd_check02', $key_array1[1].','.$key_array1[2].','.'ud9');
          exit;
        }
      } else {
        $this->_redirect('upd_check02', $key_array1[1].','. $key_array1[2].','.'ud9');
        exit;
      }
    } else {
   //echo 'bbbbbb';
   }   // end if
//--------------------------------------------------
//t_tbl_sub01 field
//--------------------------------------------------
  $ary_fld = array();
  $sqls ='';
  $sqls = ' SELECT * FROM  t_tbl_sub01';
  $ary_fld = $obj -> fld_get($sqls);
  //$ret01 = $obj ->table($ary_fld[RESDATA]);
  //exit;
//--------------------------------------------------
//t_tbl_sub01  read
//--------------------------------------------------
  //---------------------------------------------------
  // Sts=Ins（新規）tbl_seq=0,tbl_kbn=0 固定値 res1
  // Sts=rew（変更）
  //   選択済:tbl_seq=$_Post,tbl_kbn=$_Post  res1
  //   未選択:tbl_seq=$_Post,tbl_kbn=$_Post  res11
  //---------------------------------------------------
    $res1 = array();
    $ary_crs_view = array();
    $ary_crs_view00 = array();
    //------------------
    //   sts = ins
    //------------------
    if ($sts=='ins') {
      //$res1 = array();
      //$ary_crs_view = array();
      //$ary_crs_view00 = array();

      $sqls ='';
      $sqls = ' select s.* ';
      $sqls = $sqls . 'FROM t_tbl_sub01  as s ';
    //$sqls = $sqls . 'LEFT JOIN t_tbl_sub01 as s ON t.tbl_id = s.tbl_id ';
    //$sqls = $sqls . 'FROM t_tbl as t ';
      $sqls = $sqls . 'WHERE s.tbl_id=?  AND s.tbl_seq=? and s.tbl_kbn=? ';
      $sqls = $sqls . 'ORDER BY upd_ymd desc,s.tbl_id asc,s.tbl_seq asc,s.tbl_kbn asc ';
      $res1 = $obj -> getlist03_01($sqls,$key_array1[1],0,0);

    } else {
    //------------------
    //   sts = rew
    //------------------
      if ($sts=='rew') {
       //未選択Field
       $sqls ='';
       $sqls = ' select s.* ' ;
       $sqls = $sqls . ' FROM t_tbl_sub01  as s ';
       $sqls = $sqls . ' WHERE s.tbl_id=?  AND s.tbl_seq=? and s.tbl_kbn=? ';
       $sqls = $sqls . ' ORDER BY upd_ymd desc,s.tbl_id asc,s.tbl_seq asc,s.tbl_kbn asc ';
       $res1 = $obj -> getlist03_01($sqls,$key_array1[1],$key_array1[2],500);
       //選択済FIELD
       $sqls ='';
       $sqls = ' select  s.* ';
       $sqls = $sqls . ' FROM t_tbl_sub01  as s ';
       $sqls = $sqls . ' WHERE s.tbl_id=?  AND s.tbl_seq=? and s.tbl_kbn=? ';
       $sqls = $sqls . ' ORDER BY upd_ymd desc,s.tbl_id asc,s.tbl_seq asc,s.tbl_kbn asc ';
       //$res1 = $obj -> getlist03_01($sqls,$key_array1[1],0,0);
       $res11 = $obj -> getlist03_01($sqls,$key_array1[1],$key_array1[2],$key_array1[3]);
       //$ret11 = $obj ->table($res11[RESDATA][0]);
       //echo 'cnt--->' . count($res1[RESDATA][0]);
       //---------------
      //選択Field  res11
      //---------------
        $ary_sel_view = array();
        $ary_sel_view00 = array();
        $cnt_res11 =0;
        if (is_array($res11[RESDATA])) {
          $cnt_res11 = count($res11[RESDATA][0]);
          for ($i=3; $i<$cnt_res11; $i=$i+1) {
            if (isset($res11[RESDATA][0][$i])) {
            $ary_sel_view00[] = $res11[RESDATA][0][$i];
            } else {
            //echo 'Null field--->' . $i . '--->' . $res1[RESDATA][0][$i-1];
            break;
            }
          }
          $ary_sel_view = $this -> sanitize($ary_sel_view00);
          $ret11 = $this -> setChannel($ary_sel_view,'sel_view');
        } else {
        echo "<pre>";
        echo('ary_sel_view =0 -->' . $key_array1[1] . ':' .$key_array1[2].':' .$key_array1[3]);
        echo "</pre>";
        exit;
        }
      } else {}
    }
  //--------------------
  //sts 共通
  //--------------------
  	$cnt_res1 =0;
  	if (is_array($res1[RESDATA])) {
      $cnt_res1 = count($res1[RESDATA][0]);
      for ($i=0; $i<$cnt_res1; $i=$i+1) {
         if (isset($res1[RESDATA][0][$i])) {
            $ary_crs_view00[] = $res1[RESDATA][0][$i];
         } else {
           //echo 'Null field--->' . $i . '--->' . $res1[RESDATA][0][$i-1];
           break;
         }
      }
      $ary_crs_view = $this -> sanitize($ary_crs_view00);
      //$ret01 = $obj ->table($ary_crs_view);
      //---------------------------------------------
      // FIELD分割20ずつ  ret03 ret05 
      //---------------------------------------------
      $cnt_fld1 = count($ary_crs_view);
      //echo 'cnt_res-->' .$cnt_res1;
      $ret03 = $this->fld_tbl_ary01($cnt_fld1, $ary_crs_view);
      //$x1 = $obj ->table($this->pub_fld01);
      //$x2 = $obj ->table($this->pub_fld02);
      //$x3 = $obj ->table($this->pub_fld03);
       //
  		$ret05 = $this -> setChannel($ary_crs_view,'crs_view');
  	} else {
  		$cnt_res1 =0;
  		echo('ary_crs_view =0 -->' . $key_array1[1] . ':' .$key_array1[2]);
      exit;
  	}

//----------------------------------------------------
//pno_com get    res2
//----------------------------------------------------
  $res2 = array();
  $res2 = $obj  -> getlist01_01('select * from t_pno_com where p_id = ? ',$key_array1[1]);
  if (count($res1[RESDATA]) == 0) {
    //echo '<p>' .  'p_no_com  invalid :'  . substr($id,0,5) . "</p>\n";
    echo "<span sytle=\"color:#FF0000\">". 't_pno_com invalid--->'. $key_array1[1] ."</span>";
    $this->createform($form,NULL);
    $obj->dbend();
    exit();
  } else {
    // echo '<p>' .  'p_no_com  valid :'  . $id . "</p>\n";
    $ary_pno_com = array();
    $ret2 = $this -> sanitize($res2[RESDATA]);
    foreach ($res2[RESDATA] as $row1) {
      $ary_pno_com += array($row1[0] => $row1[5]);
    } // end foreach
  }   // end if
  //$ret2 = $obj -> table($ary_pno_com);
  $strr = intval($ary_pno_com[$key_array1[1]]) + 1;
  $p_no_latest = sprintf('%03d', $strr);
  //echo 'pno_com--->' . $p_no_latest;
//------------------------------------------
//  form 要素の構築
//------------------------------------------
	$memos_c= $form->addElement('text','memos_c',array('style' => 'width: 50%;border-bottom: solid 3px #00e7ff;border-left: none;border-top:none;border-right:none;font-size:18px;'),array('label' =>"memos:"));
  $upd_ymd_c= $form->addElement('text','upd_ymd_c',array('style' => 'width: 135px;border:none; background-color: transparent;','readonly'=>'readonly'),array('label' =>"upd_ymd:"));
  $cre_ymd_c= $form->addElement('text','cre_ymd_c',array('style' => 'width: 135px;border:none; background-color: transparent;','readonly'=>'readonly'),array('label' =>"cre_ymd:"));
	$tbl_id_c = $form->addElement('text','tbl_id_c',array('style' => 'display:none;' ),array('label' => "tbl_id "));
  $tbl_seq_c = $form->addElement('text','tbl_seq_c',array('style' => 'display:none;' ),array('label' => "tbl_seq "));
  $tbl_kbn_c = $form->addElement('text','tbl_kbn_c',array('style' => 'display:none;' ),array('label' => "tbl_kbn "));
//
  //-------------------------------------------
	//
	//-------------------------------------------
	//$p_id_c->setvalue($ary_dan_view[0]['p_id']);
	//$p_no_seq_c->setvalue($ary_dan_view[0]['p_no_seq']);
	//-------------------------------------------
	//  Validation numeric
	//-------------------------------------------
  //	$syk_suryo_c -> addrule('regex', '出庫数量: '.NUMERR,'/^[0-9,]+$/');
	//-------------------------------------------
	//  Validation must 必須項目
	//-------------------------------------------
	$tbl_id_c->addrule('required',KEYEMPTY);
  $tbl_seq_c->addrule('required',KEYEMPTY);
  $tbl_kbn_c->addrule('required',KEYEMPTY);
  //-------------------------------------------
  //  Validation numeric
  //-------------------------------------------
   $tbl_kbn_c -> addrule('regex', 'tbl_kbn: '.NUMERR,'/^[0-9]+$/');
 //-------------------------------------------
 //  Trim
 //-------------------------------------------
  $form->addRecursiveFilter('trim');
//------------------------------------
//初期値を取得
//------------------------------------
  	if ($cnt_res1 === 0) {
  	} else {
		  //t_uke_meisai 詳細情報
		  //
  		$add_data = array();
  		$add_data = array(
  			'tbl_id_c' =>  $ary_crs_view[0],
        'memos_c' =>   $res1[RESDATA][0][303],
  			'tbl_seq_c' => $ary_crs_view[1],
  			'tbl_kbn_c' => $ary_crs_view[2]
  		);
  	}
//
//-------------------------------------------
//初期値を代入
//-------------------------------------------
  if(isset($add_data['tbl_id_c']))  $tbl_id_c->setvalue($add_data['tbl_id_c']);
  if(isset($add_data['tbl_seq_c'])) $tbl_seq_c->setvalue($add_data['tbl_seq_c']);
  if(isset($add_data['tbl_kbn_c'])) $tbl_kbn_c->setvalue($add_data['tbl_kbn_c']);
  if(isset($add_data['memos_c'])) $memos_c->setvalue($add_data['memos_c']);
//
//-------------------------------------------
//  Filter
//-------------------------------------------
  	$tbl_id_c->addfilter('htmlspecialchars');
  	$tbl_seq_c->addfilter('htmlspecialchars');
  	$tbl_kbn_c->addfilter('htmlspecialchars');
    $memos_c->addfilter('htmlspecialchars');
  	$upd_ymd_c->addfilter('htmlspecialchars');
  	$cre_ymd_c->addfilter('htmlspecialchars');
//-------------------------------------------
//  tbl_id
//-------------------------------------------
	// if (isset($_POST['p_id_c'])) {
	//	$p_id_w = $_POST['p_id_c'];
	//
	//  } else {
  $tbl_id_w = $ary_crs_view[0];
	//  }
//-------------------------------------------
//  tbl_seq
//-------------------------------------------
	//if (isset($_POST['p_no_seq_c'])) {
	//	$p_no_seq_w = $_POST['p_no_seq_c'];
	//  } else {
  $tbl_seq_w = intval($ary_crs_view[1]);
	// }
//-------------------------------------------
//  tbl_kbn
//-------------------------------------------
  //if (isset($_POST['p_no_seq_c'])) {
  //  $p_no_seq_w = ($_POST['p_no_seq_c'];
  //  } else {
  $tbl_kbn_w = intval($ary_crs_view[2]);
  // }
//-------------------------------------------
//  pno_com
//-------------------------------------------
  //if (isset($_POST['p_no_seq_c'])) {
  //  $p_no_seq_w = ($_POST['p_no_seq_c'];
  //  } else {
  //$pno_com04 = intval($ary_crs_view[0][4]);
  // } 
//-------------------------------------------
//  memos
//-------------------------------------------
  if (isset($_POST['memos_c'])) {
    $memos_w = $obj ->h($_POST['memos_c']);
  } else {
    $memos_w = $ary_crs_view[303];
   }
//-------------------------------------------
//  post---> fld_get
//-------------------------------------------
$fld_ary1 = array();
$cnt_res2 = count($key_array1);
for ($i=0; $i<$cnt_res2; $i=$i+1) {
    if (isset($key_array1)) {
     $fld_ary1[] = $key_array1;
    } else {
      //echo 'Null field--->' . $i . '--->' . $key_array1[0];
      break;
    }
}
//$ret01 = $obj ->table($fld_ary);

 //-------------------------------------------
 //  upd_ymd cre_ymd
 //-------------------------------------------
  	$today = date("Y-m-d H:i:s");
  	$upd_ymd_w = $today;
  	switch ($sts)  {
  		case 'ins':
  		$cre_ymd_w =date( 'Y-m-d  H:i:s');
  		break;
  		case 'rew':
  		$cre_ymd_w =$ary_crs_view[306];
  		break;
  		default:
  		$cre_ymd_w =$today;
  		break;
  	}
//-------------------------------------------
//  UPDATE
//-------------------------------------------
ChromePhp::log('vali--->'. $form->validate());
if ($form->validate())  {
//------------------------------------------
// stsで処理分ける
//   sts:ins--->insert
//      key:$key_array1[1],$sttr(latest_pno),$key_array1[3]
//   sts:rew--->delete,insert
//      key:$key_array1[1],$key_array1[2],$key_array1[3]
//------------------------------------------
  switch ($sts) {
  //--------------------------------------------------
  // insert data Field
  //  -3 としているのは memo,upd_ymd,cre_ymd 3件分
  //--------------------------------------------------
    case 'ins':
      if (isset($_POST['upd'])) {
        //--------------------------------------------
        //  select field Nothing ?
        //--------------------------------------------
        if (count($key_res0)==0) {
          $this->_redirect('upd_check01',$tbl_id_w .','.$p_no_latest.','.'su8');
          echo "<span sytle=\"color:#FF00FF\">" . '<------Selected Field Nothing------> ' . "</span>";
          exit;
        } else {
        }
        //--------------------------------------------
        //  insert array create  $data_fld
        //--------------------------------------------
        //echo 'aaaa';
        $data_fld=array();
        $data_fld=array($ary_fld[RESDATA][0]=>$key_array1[1]);
        $data_fld+=array($ary_fld[RESDATA][1]=>$strr);
        $data_fld+=array($ary_fld[RESDATA][2]=>$key_array1[3]);
        //
        for($i = 3 ; $i < count($ary_fld[RESDATA])-3; $i++) {
         if (isset($key_res1[$i-3])) {
           //$fldxx = $this ->fld_cnv01($key_res1[$i-3]);
           //$fld00 = $ary_crs_view[$fldxx];
           //$fld00 = $ary_crs_view[$fldxx].':'.$fldxx;
           $fld00 = $key_res1[$i-3];
          } else {
           $fld00 = NULL;
          }
         $data_fld+=array($ary_fld[RESDATA][$i] => $fld00);
        }

        $data_fld+=array('memo' => $memos_w);
        $data_fld+=array('upd_ymd' => date("Y-m-d H:i:s"));
        $data_fld+=array('cre_ymd' => date("Y-m-d H:i:s"));
        //$ret01 = $obj ->table($data_fld);
        //echo 'memos--->' . $_POST['memos_c'];
        $query  = "INSERT INTO t_tbl_sub01 ";
        $query .= "VALUES " . implode("," ,array_fill(0, count($data_fld), "(?, ?)"));
        $ret02 = $obj ->ins_fld($query,'t_tbl_sub01',$ary_fld[RESDATA],$data_fld);
        //--------------------------------------------
        //  insert array create  $data_fld field
        //  未使用FIELDの登録 fld_kbn =50
        //--------------------------------------------
        //echo 'cnt--->' .count($ary_crs_view);
        $data_fld=array();
        $data_fld=array($ary_fld[RESDATA][0]=>$key_array1[1]);
        $data_fld+=array($ary_fld[RESDATA][1]=>$strr);
        $data_fld+=array($ary_fld[RESDATA][2]=>$key_array1[3]+500);
        //
        for($i = 3 ; $i < count($ary_fld[RESDATA])-3; $i++) {
         if ($i > intval(count($ary_crs_view))) {
              $data_fld+=array($ary_fld[RESDATA][$i] => NULL);
            } else {
              $data_fld+=array($ary_fld[RESDATA][$i] => $key_uns1[$i-3]);
          }
        } //end for
        $data_fld+=array('memo' => $memos_w);
        $data_fld+=array('upd_ymd' => date("Y-m-d H:i:s"));
        $data_fld+=array('cre_ymd' => date("Y-m-d H:i:s"));
        //$ret01 = $obj ->table($data_fld);
        //echo 'memos--->' . $_POST['memos_c'];
        $query  = "INSERT INTO t_tbl_sub01 ";
        $query .= "VALUES " . implode("," ,array_fill(0, count($data_fld), "(?, ?)"));
        $ret021 = $obj ->ins_fld($query,'t_tbl_sub01',$ary_fld[RESDATA],$data_fld);
        //----
        //---------------------------------------
        //  t_pno_com tbl_seq update
        //---------------------------------------
        if (($ret02 == true ) || ($ret021 == true)) {
        //if ($ret02 == true ) {
          $ares_pno_com04 = $obj -> updpno_com04($tbl_id_w, $p_no_latest,'rew');
          //print('ares_pno-_com--->' . $ares_pno_com04);
          if ($ares_pno_com04 == TRUE)  {
            $this->_redirect('upd_check01',$tbl_id_w .','.$p_no_latest.','.'su0');
          } else {
            $this->_redirect('upd_check01',$tbl_id_w .','.$p_no_latest.','.'su9');
            echo "<span sytle=\"color:#FF0000\">" . 't_pno_com --->' . ADDUPDATENG . "</span>";
          }
        } else {
          $this->_redirect('upd_check01',$tbl_id_w .','.$p_no_latest.','.'su9');
          echo "<span sytle=\"color:#FF0000\">" . 't_tbl_sub01-->' . ADDUPDATENG . "</span>";
        }
        //---------------------------------------
        //  t_pno_com tbl_seq update
        //---------------------------------------
        //if ($ret021 == true ) {
        //} else {
        //  echo "<span sytle=\"color:#FF0000\">" . 't_tbl_sub01 field --->'. $tbl_id_w .':'.$p_no_latest.':'.ADDUPDATENG . "</span>";
        //}
      } else {}
      break;
    case 'rew':
     // -----------
     // delete
     // -----------
      if (isset($_POST['upd'])) {
        //--------------------------------------------
        //  select field Nothing ?
        //--------------------------------------------
        if (count($key_res0)==0) {
          $this->_redirect('upd_check01',$tbl_id_w .','.$p_no_latest.','.'su8');
          echo "<span sytle=\"color:#FF00FF\">" . '<------Selected Field Nothing------> ' . "</span>";
          exit;
        } else {
        }
        //-------------------------------------------
        //  delete
        //-------------------------------------------
        $del_res01 =$obj->del_tbl01($key_array1[1].','. $key_array1[2].','. intval($key_array1[3]));
        if ($del_res01 == TRUE) {
         // $this->_redirect('upd_check02', $key_array1[1].','.$key_array1[3].','.'ud0');
          //exit;
        } else {
          $this->_redirect('upd_check01', $key_array1[1].','.$key_array1[3].','.'ud9');
         exit;
        }
        $del_res01 =$obj->del_tbl01($key_array1[1].','. $key_array1[2].','. 500);
        if ($del_res01 == TRUE) {
          //echo('delete 500-->'.$key_array1[1].','. $key_array1[2].','. 500);
         //$this->_redirect('upd_check02', $key_array1[1].','.$key_array1[3]+500.','.'ud0');
          //exit;
        } else {
          $this->_redirect('upd_check01', $key_array1[1].','.intaval($key_array1[3])+500 .','.'ud9');
          exit;
        }
        //--------------------------------------------
        //  insert array create  $data_fld
        //--------------------------------------------
        //echo 'aaaa';
        $data_fld=array();
        $data_fld=array($ary_fld[RESDATA][0]=>$key_array1[1]);
        $data_fld+=array($ary_fld[RESDATA][1]=>$key_array1[2]);
        $data_fld+=array($ary_fld[RESDATA][2]=>$key_array1[3]);
        //
        for($i = 3 ; $i < count($ary_fld[RESDATA])-3; $i++) {
         if (isset($key_res1[$i-3])) {
           //$fldxx = $this ->fld_cnv01($key_res1[$i-3]);
           //$fld00 = $ary_crs_view[$fldxx];
           //$fld00 = $ary_crs_view[$fldxx].':'.$fldxx;
            $fld00 = $key_res1[$i-3];
          } else {
           $fld00 = NULL;
          }
         $data_fld+=array($ary_fld[RESDATA][$i] => $fld00);
        }

        $data_fld+=array('memo' => $memos_w);
        $data_fld+=array('upd_ymd' => date("Y-m-d H:i:s"));
        $data_fld+=array('cre_ymd' => date("Y-m-d H:i:s"));
        //$ret01 = $obj ->table($data_fld);
        //echo 'memos--->' . $_POST['memos_c'];
        $query  = "INSERT INTO t_tbl_sub01 ";
        $query .= "VALUES " . implode("," ,array_fill(0, count($data_fld), "(?, ?)"));
        $ret02 = $obj ->ins_fld($query,'t_tbl_sub01',$ary_fld[RESDATA],$data_fld);
        //--------------------------------------------
        //  insert array create  $data_fld field
        //  未使用FIELDの登録 fld_kbn =50
        //--------------------------------------------
        //echo 'cnt--->' .count($ary_crs_view);
        $data_fld=array();
        $data_fld=array($ary_fld[RESDATA][0]=>$key_array1[1]);
        $data_fld+=array($ary_fld[RESDATA][1]=>$key_array1[2]);
        $data_fld+=array($ary_fld[RESDATA][2]=>$key_array1[3]+500);
        //
        for($i = 3 ; $i < count($ary_fld[RESDATA])-3; $i++) {
         if ($i > intval(count($ary_crs_view))) {
              $data_fld+=array($ary_fld[RESDATA][$i] => NULL);
            } else {
              $data_fld+=array($ary_fld[RESDATA][$i] => $key_uns1[$i-3]);
          }
        } //end for
        $data_fld+=array('memo' => $memos_w);
        $data_fld+=array('upd_ymd' => date("Y-m-d H:i:s"));
        $data_fld+=array('cre_ymd' => date("Y-m-d H:i:s"));
        //$ret01 = $obj ->table($data_fld);
        //echo 'memos--->' . $_POST['memos_c'];
        $query  = "INSERT INTO t_tbl_sub01 ";
        $query .= "VALUES " . implode("," ,array_fill(0, count($data_fld), "(?, ?)"));
        $ret021 = $obj ->ins_fld($query,'t_tbl_sub01',$ary_fld[RESDATA],$data_fld);
        echo ('ret21--->'.$ret021);
        if (($ret02 == true ) || ($ret021 == true)) {
          $this->_redirect('upd_check01',$tbl_id_w .','.$p_no_latest.','.'su0');
        } else {
          $this->_redirect('upd_check01',$tbl_id_w .','.$p_no_latest.','.'su9');
          echo "<span sytle=\"color:#FF0000\">" . 't_pno_com --->' . ADDUPDATENG . "</span>";
        }
        //----
      } else {}
      break;
    default:
      break;
  }   //end switcn
  $this->createForm($form,$sts);
} else {
    ChromePhp::log('normal');
    $this->createForm($form,$sts);
} // end if  validate
$obj->dbend();
exit;

}  // end_ main function
 //===========================================
 // フォームの表示
 //===========================================
function createForm($form,$sts){
        //$smarty = $this->getsmarty();
	HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
	$renderer = HTML_QuickForm2_Renderer::factory('smarty');
	$renderer->setOption(array('required_note'  => "<em>*</em> 記入必須項目"));
	$renderer->setOption('old_compat', true);
	$renderer->setOption('group_errors', true);
	// フォームの作成
	$FormData = $form->render($renderer)->toArray();
  //
  $this->smarty->assign('form', $FormData);
	//$key_array1 = array_map('trim',explode(',',$_GET['key']));
	$this->smarty->assign('sts',$sts);
	//
	//$this->smarty->assign('res',$rows);
		//$this->smarty->assign('pagedata', $rows['data']);
	$this->smarty->left_delimiter = '!!-{';
	$this->smarty->right_delimiter = '}-!!';
	$this->smarty->assign('ary_crs_view', $this->pub_crs_view00);
  $this->smarty->assign('ary_sel_view', $this->pub_sel_view00);
	$this->smarty->assign('ary_fld00', $this->pub_fld00);
  $this->smarty->assign('ary_fld01', $this->pub_fld01);
  $this->smarty->assign('ary_fld02', $this->pub_fld02);
  $this->smarty->assign('ary_fld03', $this->pub_fld03);
  $this->smarty->assign('ary_fld04', $this->pub_fld04);
  $this->smarty->assign('ary_fld05', $this->pub_fld05);
  $this->smarty->assign('ary_fld06', $this->pub_fld06);
  $this->smarty->assign('ary_fld07', $this->pub_fld07);
  $this->smarty->assign('ary_fld08', $this->pub_fld08);
  $this->smarty->assign('ary_fld09', $this->pub_fld09);
  $this->smarty->assign('ary_fld10', $this->pub_fld10);
  $this->smarty->assign('ary_fld11', $this->pub_fld11);
  $this->smarty->assign('ary_fld12', $this->pub_fld12);
  $this->smarty->assign('ary_fld13', $this->pub_fld13);
  $this->smarty->assign('ary_fld14', $this->pub_fld14);
  $this->smarty->assign('ary_fld15', $this->pub_fld15);
  $this->smarty->assign('ary_json01', $this->pub_json01);
		//-----------------------------------------
		//	連想配列-->配列  do not delete
		//------------------------------------------
		//for ($i = 0 ; $i < count($rows); $i++) {
		//  $val_array1[]= array_values($rows[$i]);
		//}
    //-----------------------------------------------
		//java用にencode  連想配列ではなく配列を渡すこと
		//-----------------------------------------------
		//$val_array2=  $this ->json_safe_encode($val_array0);
		//$val_array2=  $this ->json_safe_encode($rows);
	    //$val_array2=  $this ->json_safe_encode($val_array1);
	    //$this->smarty->assign("data_json", $val_array2);
	$this->smarty->assign("se_user_id", $_SESSION[USER_ID]);
	$this->smarty->assign("se_picture", $_SESSION[PICTURE]);
	$this->smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
	$this->smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
	//if ($sts=='ins') {
    $this->smarty->display('layout_detail02_ins.html');
  //} else {
  //  $this->smarty->display('layout_detail01_rew.html');
  //}

	}// FUNCTION

	function json_safe_encode($data){
		return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
	}
// end function
//------------------------------------------------------
//  配列にhtmlspecialcharsをかける
//------------------------------------------------------

//function h($str){
//    if(is_array($str)){
//	    return array_map($this->h,$str);
//    }else{
//        return htmlspecialchars($str,ENT_QUOTES,"UTF-8");
//    }
//}

	function sanitize($value)
	{
		if(is_array($value)){
			$sanitized_array = array();
			foreach($value as $k => $v){
				$sanitized_array[$k] = $this->sanitize($v);
			}
			return $sanitized_array;
		} else {
			return htmlspecialchars($value,ENT_QUOTES,"UTF-8");
		}
	}
	function setChannel($row01,$sw){
		switch ($sw) {
      case 'php_json01':
      $this->pub_json01 =$row01;
      break;
			case 'settei_inf':
			$this->pub_settei_inf00 =$row01;
			break;
			case 'crs_view':
			$this->pub_crs_view00 =$row01;
			break;
			case 'fld_view':
			$this->pub_fld_view00 =$row01;
			break;
			case 'sel_view':
      $this->pub_sel_view00 =$row01;
      break;
      case '00':
			$this->pub_fld00 =$row01;
			break;
      case '01':
      $this->pub_fld01 =$row01;
      break;
      case '02':
      $this->pub_fld02 =$row01;
      break;
      case '03':
      $this->pub_fld03 =$row01;
      break;
      case '04':
      $this->pub_fld04 =$row01;
      break;
      case '05':
      $this->pub_fld05 =$row01;
      break;
      case '06':
      $this->pub_fld06 =$row01;
      break;
      case '07':
      $this->pub_fld07 =$row01;
      break;
      case '08':
      $this->pub_fld08 =$row01;
      break;
      case '09':
      $this->pub_fld08 =$row01;
      break;
      case '10':
      $this->pub_fld10 =$row01;
      break;
      case '11':
      $this->pub_fld11 =$row01;
      break;
      case '12':
      $this->pub_fld12 =$row01;
      break;
      case '13':
      $this->pub_fld13 =$row01;
      break;
      case '14':
      $this->pub_fld14 =$row01;
      break;
      case '15':
      $this->pub_fld15 =$row01;
      break;
	    default:
			break;
		}
	//var_dump ('rows01=>' . $row01);
   //$sf2 = $this->dispChannel();
   //return $sf2;
  } // end function
//--------------------------------
//  nendo
//----------------------------------
  function get_financial_year($year, $month, $financial_month){

  	if($month > $financial_month){
  		return $year;
  	} else {
  		return $year - 1;
  	}
  } // end function
//--------------------------------
//  fld convert
//----------------------------------
 function fld_cnv01($fldxx1){
  switch (substr($fldxx1,0,1)) {
    case 'A':
      $fldx =FLDS * 0 + 3 + intval(substr($fldxx1,1,2));
      break;
    case 'B':
      $fldx =FLDS * 1 + 3 + intval(substr($fldxx1,1,2));
      break;
    case 'C':
      $fldx =FLDS * 2 + 3 + intval(substr($fldxx1,1,2));
      break;
    case 'D':
      $fldx =FLDS * 3 + 3 + intval(substr($fldxx1,1,2));
      break;
    case 'E':
      $fldx =FLDS * 4 + 3 + intval(substr($fldxx1,1,2));
      break;
    case 'F':
      $fldx =FLDS * 5 + 3 + intval(substr($fldxx1,1,2));
      break;
    case 'G':
      $fldx =FLDS * 6 + 3 + intval(substr($fldxx1,1,2));
      break;
    case 'H':
      $fldx =FLDS * 7 + 3 + intval(substr($fldxx1,1,2));
      break;
    case 'I':
      $fldx =FLDS * 8 + 3 + intval(substr($fldxx1,1,2));
      break;
    case 'J':
      $fldx =FLDS * 9 + 3 + intval(substr($fldxx1,1,2));
      break;
    case 'K':
      $fldx =FLDS * 10 + 3 + intval(substr($fldxx1,1,2));
      break;
    case 'L':
      $fldx =FLDS * 11 + 3 + intval(substr($fldxx1,1,2));
      break;
    default:
      echo 'fld count over !!--->' .$fldxx1;
      break;
   } // end switch
   return $fldx;
 } // end function
//--------------------------------
//  fld convert reverse
//----------------------------------
 function fld_cnv02($fldxx1){
  $fldxx2 =intval($fldxx1);
  //echo 'fldxx2--->' . $fldxx2;
  switch ($fldxx2) {
    case $fldxx2 >= 3 && $fldxx2 <= 9:
      $fldx = 'A' . intval($fldxx2 - 3);
      break;
    case $fldxx2 >= 10 && $fldxx2 <= 22:
      $fldx = 'A' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 23 && $fldxx2 <= 42:
      $fldx = 'B' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 43 && $fldxx2 <= 62:
      $fldx = 'C' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 63 && $fldxx2 <= 82:
      $fldx = 'D' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 83 && $fldxx2 <= 102:
      $fldx = 'E' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 103 && $fldxx2 <= 122:
      $fldx = 'F' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 123 && $fldxx2 <= 142:
      $fldx = 'G' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 143 && $fldxx2 <= 162:
      $fldx = 'H' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 163 && $fldxx2 <= 182:
      $fldx = 'I' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 183 && $fldxx2 <= 202:
      $fldx = 'J' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 203 && $fldxx2 <= 222:
      $fldx = 'K' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 223 && $fldxx2 <= 242:
      $fldx = 'L' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 243 && $fldxx2 <= 262:
      $fldx = 'M' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 263 && $fldxx2 <= 282:
      $fldx = 'N' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 283 && $fldxx2 <= 302:
      $fldx = 'O' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 303 && $fldxx2 <= 322:
      $fldx = 'P' . intval(substr($fldxx2,1,2) - 3);
      break;
    case $fldxx2 >= 323 && $fldxx2 <= 342:
      $fldx = 'Q' . intval(substr($fldxx2,1,2) - 3);
      break;
    default:
      echo 'fld count over !!--->' .$fldxx1;
      break;
   } // end switch
   return $fldx;
 } // end function
//----------------------------------
//for fld table
//---------------------------------
function fld_tbl_ary00($fr, $to,$rows){
$obj = new addressoperation;
$ary_fld00 = array();
$ary_fld = array();
for ($i=$fr; $i<$to; $i=$i+1) {
  if (isset($rows)) {
    $ary_fld00[] = $rows[$i];
  } else {
    echo 'Null field--->' . $i . '--->' . $ary_fld00[0][$i-1];
    break;
  }
}
$ary_fld = $this -> sanitize($ary_fld00);
//$ret = $obj ->table($ary_fld);
$ret1 = $this -> setChannel($ary_fld,'crs_view');
return $ary_fld;
$obj->dbend();
}//end function
//===========================================
// field array を分割する  20ずつ
//===========================================
function fld_tbl_ary01($cnt_res1,$rows){
 $ary01 = array();
 $ary02 = array();
 $ary03 = array();
 $ary04 = array();
 $ary05 = array();
 $ary06 = array();
 $ary07 = array();
 $ary08 = array();
 $ary09 = array();
 $ary10 = array();
 $ary11 = array();
 $ary12 = array();
 $ary13 = array();
 $ary14 = array();
 $ary15 = array();
  //echo 'cnt--->'.$cnt_res1;
 switch (true) {
  case $cnt_res1 ===0:
    echo 'valueは0です';
    break;
  case $cnt_res1 >=1 && $cnt_res1 <=20:
   $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
   $ret1 = $this -> setChannel($ary01,'01');
    break;
  case $cnt_res1 >=21 && $cnt_res1 <=40:
    $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
    $ary02 = $this ->fld_tbl_ary00(23,43,$rows);
   //
    $ret1 = $this -> setChannel($ary01,'01');
    $ret1 = $this -> setChannel($ary02,'02');
    break;
  case $cnt_res1 >=41 && $cnt_res1 <=60:
    $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
    $ary02 = $this ->fld_tbl_ary00(23,43,$rows);
    $ary03 = $this ->fld_tbl_ary00(43,63,$rows);
   //
    $ret1 = $this -> setChannel($ary01,'01');
    $ret1 = $this -> setChannel($ary02,'02');
    $ret1 = $this -> setChannel($ary03,'03');
    //return $ary01;
    break;
  case $cnt_res1 >=61 && $cnt_res1 <=80:
    $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
    $ary02 = $this ->fld_tbl_ary00(23,43,$rows);
    $ary03 = $this ->fld_tbl_ary00(43,63,$rows);
    $ary04 = $this ->fld_tbl_ary00(63,83,$rows);
    //
    $ret1 = $this -> setChannel($ary01,'01');
    $ret1 = $this -> setChannel($ary02,'02');
    $ret1 = $this -> setChannel($ary03,'03');
    $ret1 = $this -> setChannel($ary04,'04');
    break;
  case $cnt_res1 >=81 && $cnt_res1 <=100:
    $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
    $ary02 = $this ->fld_tbl_ary00(23,43,$rows);
    $ary03 = $this ->fld_tbl_ary00(43,63,$rows);
    $ary04 = $this ->fld_tbl_ary00(63,83,$rows);
    $ary05 = $this ->fld_tbl_ary00(83,103,$rows);
    $ret1 = $this -> setChannel($ary01,'01');
    $ret1 = $this -> setChannel($ary02,'02');
    $ret1 = $this -> setChannel($ary03,'03');
    $ret1 = $this -> setChannel($ary04,'04');
    $ret1 = $this -> setChannel($ary05,'05');
    break;
  case $cnt_res1 >=101 && $cnt_res1 <=120:
    $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
    $ary02 = $this ->fld_tbl_ary00(23,43,$rows);
    $ary03 = $this ->fld_tbl_ary00(43,63,$rows);
    $ary04 = $this ->fld_tbl_ary00(63,83,$rows);
    $ary05 = $this ->fld_tbl_ary00(83,103,$rows);
    $ary06 = $this ->fld_tbl_ary00(103,123,$rows);
    $ret1 = $this -> setChannel($ary01,'01');
    $ret1 = $this -> setChannel($ary02,'02');
    $ret1 = $this -> setChannel($ary03,'03');
    $ret1 = $this -> setChannel($ary04,'04');
    $ret1 = $this -> setChannel($ary05,'05');
    $ret1 = $this -> setChannel($ary06,'06');
    break;
  case $cnt_res1 >=121 && $cnt_res1 <=140:
    $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
    $ary02 = $this ->fld_tbl_ary00(23,43,$rows);
    $ary03 = $this ->fld_tbl_ary00(43,63,$rows);
    $ary04 = $this ->fld_tbl_ary00(63,83,$rows);
    $ary05 = $this ->fld_tbl_ary00(83,103,$rows);
    $ary06 = $this ->fld_tbl_ary00(103,123,$rows);
    $ary07 = $this ->fld_tbl_ary00(123,143,$rows);
    $ret1 = $this -> setChannel($ary01,'01');
    $ret1 = $this -> setChannel($ary02,'02');
    $ret1 = $this -> setChannel($ary03,'03');
    $ret1 = $this -> setChannel($ary04,'04');
    $ret1 = $this -> setChannel($ary05,'05');
    $ret1 = $this -> setChannel($ary06,'06');
    $ret1 = $this -> setChannel($ary07,'07');
    break;
  case $cnt_res1 >=141 && $cnt_res1 <=160:
    $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
    $ary02 = $this ->fld_tbl_ary00(23,43,$rows);
    $ary03 = $this ->fld_tbl_ary00(43,63,$rows);
    $ary04 = $this ->fld_tbl_ary00(63,83,$rows);
    $ary05 = $this ->fld_tbl_ary00(83,103,$rows);
    $ary06 = $this ->fld_tbl_ary00(103,123,$rows);
    $ary07 = $this ->fld_tbl_ary00(123,143,$rows);
    $ary08 = $this ->fld_tbl_ary00(143,163,$rows);
    $ret1 = $this -> setChannel($ary01,'01');
    $ret1 = $this -> setChannel($ary02,'02');
    $ret1 = $this -> setChannel($ary03,'03');
    $ret1 = $this -> setChannel($ary04,'04');
    $ret1 = $this -> setChannel($ary05,'05');
    $ret1 = $this -> setChannel($ary06,'06');
    $ret1 = $this -> setChannel($ary07,'07');
    $ret1 = $this -> setChannel($ary08,'08');
    break;
  case $cnt_res1 >=161 && $cnt_res1 <=180:
    $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
    $ary02 = $this ->fld_tbl_ary00(23,43,$rows);
    $ary03 = $this ->fld_tbl_ary00(43,63,$rows);
    $ary04 = $this ->fld_tbl_ary00(63,83,$rows);
    $ary05 = $this ->fld_tbl_ary00(83,103,$rows);
    $ary06 = $this ->fld_tbl_ary00(103,123,$rows);
    $ary07 = $this ->fld_tbl_ary00(123,143,$rows);
    $ary08 = $this ->fld_tbl_ary00(143,163,$rows);
    $ary09 = $this ->fld_tbl_ary00(163,183,$rows);
    $ret1 = $this -> setChannel($ary01,'01');
    $ret1 = $this -> setChannel($ary02,'02');
    $ret1 = $this -> setChannel($ary03,'03');
    $ret1 = $this -> setChannel($ary04,'04');
    $ret1 = $this -> setChannel($ary05,'05');
    $ret1 = $this -> setChannel($ary06,'06');
    $ret1 = $this -> setChannel($ary07,'07');
    $ret1 = $this -> setChannel($ary08,'08');
    $ret1 = $this -> setChannel($ary09,'09');
    break;
  case $cnt_res1 >=181 && $cnt_res1 <=200:
    $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
    $ary02 = $this ->fld_tbl_ary00(23,43,$rows);
    $ary03 = $this ->fld_tbl_ary00(43,63,$rows);
    $ary04 = $this ->fld_tbl_ary00(63,83,$rows);
    $ary05 = $this ->fld_tbl_ary00(83,103,$rows);
    $ary06 = $this ->fld_tbl_ary00(103,123,$rows);
    $ary07 = $this ->fld_tbl_ary00(123,143,$rows);
    $ary08 = $this ->fld_tbl_ary00(143,163,$rows);
    $ary09 = $this ->fld_tbl_ary00(163,183,$rows);
    $ary10 = $this ->fld_tbl_ary00(183,203,$rows);
    $ret1 = $this -> setChannel($ary01,'01');
    $ret1 = $this -> setChannel($ary02,'02');
    $ret1 = $this -> setChannel($ary03,'03');
    $ret1 = $this -> setChannel($ary04,'04');
    $ret1 = $this -> setChannel($ary05,'05');
    $ret1 = $this -> setChannel($ary06,'06');
    $ret1 = $this -> setChannel($ary07,'07');
    $ret1 = $this -> setChannel($ary08,'08');
    $ret1 = $this -> setChannel($ary09,'09');
    $ret1 = $this -> setChannel($ary10,'10');
    break;
   case $cnt_res1 >=201 && $cnt_res1 <=220:
    $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
    $ary02 = $this ->fld_tbl_ary00(23,43,$rows);
    $ary03 = $this ->fld_tbl_ary00(43,63,$rows);
    $ary04 = $this ->fld_tbl_ary00(63,83,$rows);
    $ary05 = $this ->fld_tbl_ary00(83,103,$rows);
    $ary06 = $this ->fld_tbl_ary00(103,123,$rows);
    $ary07 = $this ->fld_tbl_ary00(123,143,$rows);
    $ary08 = $this ->fld_tbl_ary00(143,163,$rows);
    $ary09 = $this ->fld_tbl_ary00(163,183,$rows);
    $ary10 = $this ->fld_tbl_ary00(183,203,$rows);
    $ary11 = $this ->fld_tbl_ary00(203,223,$rows);
    $ret1 = $this -> setChannel($ary01,'01');
    $ret1 = $this -> setChannel($ary02,'02');
    $ret1 = $this -> setChannel($ary03,'03');
    $ret1 = $this -> setChannel($ary04,'04');
    $ret1 = $this -> setChannel($ary05,'05');
    $ret1 = $this -> setChannel($ary06,'06');
    $ret1 = $this -> setChannel($ary07,'07');
    $ret1 = $this -> setChannel($ary08,'08');
    $ret1 = $this -> setChannel($ary09,'09');
    $ret1 = $this -> setChannel($ary10,'10');
    $ret1 = $this -> setChannel($ary11,'11');
    break;
  case $cnt_res1 >=221 && $cnt_res1 <=240:
    $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
    $ary02 = $this ->fld_tbl_ary00(23,43,$rows);
    $ary03 = $this ->fld_tbl_ary00(43,63,$rows);
    $ary04 = $this ->fld_tbl_ary00(63,83,$rows);
    $ary05 = $this ->fld_tbl_ary00(83,103,$rows);
    $ary06 = $this ->fld_tbl_ary00(103,123,$rows);
    $ary07 = $this ->fld_tbl_ary00(123,143,$rows);
    $ary08 = $this ->fld_tbl_ary00(143,163,$rows);
    $ary09 = $this ->fld_tbl_ary00(163,183,$rows);
    $ary10 = $this ->fld_tbl_ary00(183,203,$rows);
    $ary11 = $this ->fld_tbl_ary00(203,223,$rows);
    $ary12 = $this ->fld_tbl_ary00(223,243,$rows);
    $ret1 = $this -> setChannel($ary01,'01');
    $ret1 = $this -> setChannel($ary02,'02');
    $ret1 = $this -> setChannel($ary03,'03');
    $ret1 = $this -> setChannel($ary04,'04');
    $ret1 = $this -> setChannel($ary05,'05');
    $ret1 = $this -> setChannel($ary06,'06');
    $ret1 = $this -> setChannel($ary07,'07');
    $ret1 = $this -> setChannel($ary08,'08');
    $ret1 = $this -> setChannel($ary09,'09');
    $ret1 = $this -> setChannel($ary10,'10');
    $ret1 = $this -> setChannel($ary11,'11');
    $ret1 = $this -> setChannel($ary12,'12');
    break;
  case $cnt_res1 >=241 && $cnt_res1 <=260:
    $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
    $ary02 = $this ->fld_tbl_ary00(23,43,$rows);
    $ary03 = $this ->fld_tbl_ary00(43,63,$rows);
    $ary04 = $this ->fld_tbl_ary00(63,83,$rows);
    $ary05 = $this ->fld_tbl_ary00(83,103,$rows);
    $ary06 = $this ->fld_tbl_ary00(103,123,$rows);
    $ary07 = $this ->fld_tbl_ary00(123,143,$rows);
    $ary08 = $this ->fld_tbl_ary00(143,163,$rows);
    $ary09 = $this ->fld_tbl_ary00(163,183,$rows);
    $ary10 = $this ->fld_tbl_ary00(183,203,$rows);
    $ary11 = $this ->fld_tbl_ary00(203,223,$rows);
    $ary12 = $this ->fld_tbl_ary00(223,243,$rows);
    $ary13 = $this ->fld_tbl_ary00(243,263,$rows);
    $ret1 = $this -> setChannel($ary01,'01');
    $ret1 = $this -> setChannel($ary02,'02');
    $ret1 = $this -> setChannel($ary03,'03');
    $ret1 = $this -> setChannel($ary04,'04');
    $ret1 = $this -> setChannel($ary05,'05');
    $ret1 = $this -> setChannel($ary06,'06');
    $ret1 = $this -> setChannel($ary07,'07');
    $ret1 = $this -> setChannel($ary08,'08');
    $ret1 = $this -> setChannel($ary09,'09');
    $ret1 = $this -> setChannel($ary10,'10');
    $ret1 = $this -> setChannel($ary11,'11');
    $ret1 = $this -> setChannel($ary12,'12');
    $ret1 = $this -> setChannel($ary13,'13');
    break;
  case $cnt_res1 >=261 && $cnt_res1 <=280:
    $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
    $ary02 = $this ->fld_tbl_ary00(23,43,$rows);
    $ary03 = $this ->fld_tbl_ary00(43,63,$rows);
    $ary04 = $this ->fld_tbl_ary00(63,83,$rows);
    $ary05 = $this ->fld_tbl_ary00(83,103,$rows);
    $ary06 = $this ->fld_tbl_ary00(103,123,$rows);
    $ary07 = $this ->fld_tbl_ary00(123,143,$rows);
    $ary08 = $this ->fld_tbl_ary00(143,163,$rows);
    $ary09 = $this ->fld_tbl_ary00(163,183,$rows);
    $ary10 = $this ->fld_tbl_ary00(183,203,$rows);
    $ary11 = $this ->fld_tbl_ary00(203,223,$rows);
    $ary12 = $this ->fld_tbl_ary00(223,243,$rows);
    $ary13 = $this ->fld_tbl_ary00(243,263,$rows);
    $ary14 = $this ->fld_tbl_ary00(263,283,$rows);
    $ret1 = $this -> setChannel($ary01,'01');
    $ret1 = $this -> setChannel($ary02,'02');
    $ret1 = $this -> setChannel($ary03,'03');
    $ret1 = $this -> setChannel($ary04,'04');
    $ret1 = $this -> setChannel($ary05,'05');
    $ret1 = $this -> setChannel($ary06,'06');
    $ret1 = $this -> setChannel($ary07,'07');
    $ret1 = $this -> setChannel($ary08,'08');
    $ret1 = $this -> setChannel($ary09,'09');
    $ret1 = $this -> setChannel($ary10,'10');
    $ret1 = $this -> setChannel($ary11,'11');
    $ret1 = $this -> setChannel($ary12,'12');
    $ret1 = $this -> setChannel($ary13,'13');
    $ret1 = $this -> setChannel($ary14,'14');
    break;
  case $cnt_res1 >=281 && $cnt_res1 <=300:
    $ary01 = $this ->fld_tbl_ary00(3,23,$rows);
    $ary02 = $this ->fld_tbl_ary00(23,43,$rows);
    $ary03 = $this ->fld_tbl_ary00(43,63,$rows);
    $ary04 = $this ->fld_tbl_ary00(63,83,$rows);
    $ary05 = $this ->fld_tbl_ary00(83,103,$rows);
    $ary06 = $this ->fld_tbl_ary00(103,123,$rows);
    $ary07 = $this ->fld_tbl_ary00(123,143,$rows);
    $ary08 = $this ->fld_tbl_ary00(143,163,$rows);
    $ary09 = $this ->fld_tbl_ary00(163,183,$rows);
    $ary10 = $this ->fld_tbl_ary00(183,203,$rows);
    $ary11 = $this ->fld_tbl_ary00(203,223,$rows);
    $ary12 = $this ->fld_tbl_ary00(223,243,$rows);
    $ary13 = $this ->fld_tbl_ary00(243,263,$rows);
    $ary14 = $this ->fld_tbl_ary00(263,283,$rows);
    $ary15 = $this ->fld_tbl_ary00(283,303,$rows);
    $ret1 = $this -> setChannel($ary01,'01');
    $ret1 = $this -> setChannel($ary02,'02');
    $ret1 = $this -> setChannel($ary03,'03');
    $ret1 = $this -> setChannel($ary04,'04');
    $ret1 = $this -> setChannel($ary05,'05');
    $ret1 = $this -> setChannel($ary06,'06');
    $ret1 = $this -> setChannel($ary07,'07');
    $ret1 = $this -> setChannel($ary08,'08');
    $ret1 = $this -> setChannel($ary09,'09');
    $ret1 = $this -> setChannel($ary10,'10');
    $ret1 = $this -> setChannel($ary11,'11');
    $ret1 = $this -> setChannel($ary12,'12');
    $ret1 = $this -> setChannel($ary13,'13');
    $ret1 = $this -> setChannel($ary14,'14');
    $ret1 = $this -> setChannel($ary15,'15');
    break;
  default:
    echo 'valueはxxxxです';
    break;
  }

}//end function
//--------------------------------
//  update t_tbl_sub01
//----------------------------------
  function upd_tbl_sub01($sts, $key1, $key2,$key3){

  } // end function
} // end_class

?>