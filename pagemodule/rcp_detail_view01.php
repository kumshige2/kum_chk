<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
//require_once('HTML/QuickForm2/Element/InputFile.php');
//require_once ('HTML/QuickForm2/Container.php');
require '../../vendor/autoload.php';
require_once(LIBPATH.'address.php');
//require_once(LIBPATH.'Chromephp.php');
require_once(LIBPATH.'encode.php');
//require('Spreadsheet/Excel/Writer.php');

//===========================================
// Search   class
//    パンフ検索  module
//===========================================
// echo  '<p>' .'search.php ' .date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
//echo "<pre>". 'get ' ;
//print_r($_GET);
//echo "</pre>";

//echo "<pre>". 'post ' ;
//print_r($_POST);
//echo "</pre>";
//echo "<pre>". 'session ' ;
//print_r($_SESSION);
//echo "</pre>";
class rcp_detail_view01   extends view {
 //$property
	var $smarty;
	public $pub_rows00;
	public $pub_crs_view00;
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
  	ChromePhp::log('rcp_detail_view01');
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
  	if (empty($_GET['KEY'])) {
	 // $key_array2 = array();
	 // $key_array2 =array($_POST['p_id_c'],$_POST['p_no_seq_c'],$_POST['call_c']);
      // var_dump($key_array1);
  		$key_array0 = array();
  		$key_array1 = array();
  		$key_array0 = explode(",",$_GET['id']);
  		$key_array0 = array_filter($key_array0,'strlen');
  		$key_array1 = array_map('trim',explode(',',$_GET['id']));
  		$p_id = strval($key_array1[0]);
	  //$p_nd = substr($_GET['KEY'],6,4);
	  //$p_pmh_type = substr($_GET['KEY'],7,2);
	  //if ($key_array1[2] ='rew') {
	//	  echo "<span sytle=\"color:#00cc99\">" . 't_uke_meisai 33--->' . ADDUPDATEOK . $sts . "</span>";
	  //} else {
	//	if ($key_array1[2] ='ins') {
	//	  echo "<span sytle=\"color:#00cc99\">" . 't_uke_meisai --->' . ADDINSERTOK . $sts . "</span>";
	//	} else {
	//	  echo "<span sytle=\"color:#FF0000\">" . 't_uke_meisai ---> sts check' . "</span>";
	//	}
	 // }
  	} else {
  		$key_array0 = array();
  		$key_array1 = array();
  		$key_array0 = explode(",",$_GET['KEY']);
  		$key_array0 = array_filter($key_array0,'strlen');
  		$key_array1 = array_map('trim',explode(',',$_GET['KEY']));
  		$p_id = strval($key_array1[0]);
	  //$p_nd = substr($_GET['KEY'],6,4);
	  //$p_pmh_type = substr($_GET['KEY'],7,2);
  		ChromePhp::log('p_id-->' . $p_id .  ':' .$_GET['KEY']);
  	}
     //echo $key_array0[0],$key_array0[1];
	 // echo 'key--->' .$key_array1[0].$key_array1[1];
	  //------------------------------------------
	  //  詳細ボタン
	  //------------------------------------------
  	if (isset($_POST[P_ADDDETAIL])) {
		//  ChromePhp::log('dashboard01 post --->' . $_POST[P_ADDID]);
		//$this->_redirect('post_check01', $_POST[P_ADDID]);
		 // $this->_redirect(ADDDETAIL, $_POST[P_ADDID]);
  	};
	  //------------------------------------------
	  //  instance
	  //------------------------------------------
  	$form = new HTML_Quickform2('qform_smarty','POST',array('action'=>'index.php?module=rcp_detail_view01'));
  	$obj = new addressoperation;
	  //--------------------------------------------------
	  //t_uke_meisai
	  //--------------------------------------------------
  	$res1 = array();
  	$ary_crs_view = array();
	 //  $ary_crs_view+= array('');
  	$sqls ='';
  	$sqls='SELECT u.p_id,u.p_no_seq,uk.sof_id,s.sof,uk.nko_suryo, uk.nko_ymd,uk.memos,u.kgo_nm,p.p_nm ';
  	$sqls = $sqls . ' FROM t_uke as u ';
  	$sqls = $sqls . ' LEFT JOIN t_uke_meisai as uk ON u.p_id = uk.p_id and ';
  	$sqls = $sqls . ' u.p_no_seq = uk.p_no_seq ';
  	$sqls = $sqls . ' LEFT JOIN t_sof as s ON uk.sof_id = s.sof_id ';
  	$sqls = $sqls . '  LEFT JOIN t_pmh_inf as p ON p.p_id = u.p_id and p.p_nd = u.p_nd ';
  	$sqls = $sqls . ' WHERE u.p_id =? AND u.p_no_seq=? ';
  	$sqls = $sqls . ' ORDER BY u.p_id, u.p_no_seq, uk.sof_id';
  	$res1 = $obj -> getlist02_01($sqls,$key_array1[0],intval($key_array1[1]));
  	if (empty($res1[RESDATA])) {
  		echo "<span sytle=\"color:#FF0000\">".'DATA exception-> t_uke '.  $key_array1[0] . ',' . $key_array1[1]."</span>";
  		$this->createform($form,NULL);
  		$obj->dbend();
  		exit();
  	}
	  //var_dump ($res1[RESDATA]);
  	$count=count($res1[RESDATA]);
  	$ary_crs_view =$this -> sanitize($res1[RESDATA]);
	   //$ret = $obj ->table($res1[RESDATA]);
  	$ret1 = $this -> setChannel($ary_crs_view,'crs_view');
	   //foreach($ary_crs_view as $data) {
        //if ($data[2] === '21') {
         //echo $data[2].'の価格は'.$data[3].$data[6].$data[7].'です。';
        //}
       //}
	  //--------------------------------------------------
	  //t_sof
	  //--------------------------------------------------
  	$res0 = array();
  	$ary_sof_view = array();
	   //  $ary_crs_view+= array('');
  	$sqls ='';
  	$sqls='SELECT * from t_sof order by sof_id ';
  	$res0 = $obj -> getlist01($sqls);
  	$count=count($res0[RESDATA]);
	  //echo 'cnt:' . ($count);
  	array_unshift($ary_sof_view, '');
  	for ( $i = 0; $i < $count; ++$i){
  		$ary_sof_view +=array(e($res0[RESDATA][$i][0]) => e($res0[RESDATA][$i][1]));
  	}
       //$ary_sof_view =$this -> sanitize($res0[RESDATA]);
	   //$ret = $obj ->table($res0[RESDATA]);
	  //
	  //------------------------------------------
	  //  form 要素の構築
	  //------------------------------------------
	   // $attr_xx = array("class" => "css_select","onChange" =>
	//	 "document.forms.adform.Name.value = this.options[this.selectedIndex].value;");
		//
  	$attr_fancy_sel= array('class' => 'fancy_sel');
  	$attr_styled_sel= array('class' => 'styled');
  	$attr_mydate= array('class' => 'mydate');
  	$attr_states= array('class' => 'states');
  	$attr_onoff= array('class' => 'on_off');
  	$attr_maskmoney= array('class' => 'com3');
	    //
  	$p_id_c = $form->addElement('text','p_id_c',array('style' => 'width: 50px; border:none; color:#39c;  background-color: transparent; font-size: 16px' ),array('label' => "P_id "));
  	$p_no_seq_c= $form->addElement('text','p_no_seq_c',
  		array('style' => 'width: 20px;'),array('label' => "seq"));
  	$sof_id_c = $form->addElement('select','sof_id_c',array('class' => 'states','style' => 'width:120px;heigth:25px;font-size:14px;'),array('options' =>$ary_sof_view))
  	->setlabel("Sof:");
  	$nko_suryo_c = $form->addElement('text','nko_suryo_c',array('class' => 'form-control text-light-blue','style' => 'width:60px;height:20px;font-size:16px;'),array('label' => " Nko_suryo:"));
  	$nko_ymd_c = $form->addElement('text','nko_ymd_c',array('class' => 'form-control datepicker',
  		'style'=>'width:090px;height:20px;'),array('label' => "Nko_ymd"));
  	$memos_c= $form->addElement('text','memos_c',array('class' => 'form-control','style' => 'width: 300px;height:20px;'),
  		array('label' =>"Memo:"));
  	$upd_ymd_c= $form->addElement('text','upd_ymd_c',array('style' => 'width: 135px;border:none; background-color: transparent;','readonly'=>'readonly'),array('label' =>"upd_ymd:"));
  	$cre_ymd_c= $form->addElement('text','cre_ymd_c',array('style' => 'width: 135px;border:none; background-color: transparent;','readonly'=>'readonly'),array('label' =>"cre_ymd:"));
	//-------------------------------------------
	//  Validation numeric
	//-------------------------------------------
  	$nko_suryo_c -> addrule('regex', '入庫数量: '.NUMERR,'/^[0-9,]+$/');
	//-------------------------------------------
	//  Validation must 必須項目
	//-------------------------------------------
  	$sof_id_c->addrule('required',SOFEMPTY);
      //$p_id_c->addrule('required',PIDREGEX);
   //-------------------------------------------
   //  Trim
   //-------------------------------------------
  	$form->addRecursiveFilter('trim');
   //-------------------------------------------
   //  sof_id
   //-------------------------------------------
  	if (empty($_POST['sof_id_c'])) {
  		$sof_id_w = $sof_id_c -> getvalue();
  	} else {
  		$sof_id_w = $_POST['sof_id_c'];
  	}
 //-------------------------------------------
 // sts judge
 //  data count =0 sts insert
 //  data coun  <>0 sts rewrite
 //-------------------------------------------
  	$res2 = array();
  	$ary_uke_mes_view = array();
  	$sqls ='';
  	$sqls='SELECT * from t_uke_meisai as u ';
  	$sqls = $sqls . ' WHERE u.p_id =? AND u.p_no_seq=? and u.sof_id =? ';
  	$sqls = $sqls . ' ORDER BY u.p_id, u.p_no_seq, u.sof_id';
  	$res2= $obj -> getlist03_01($sqls,$ary_crs_view[0][0],intval($ary_crs_view[0][1]),$sof_id_w);
  	if (is_array($res2[RESDATA])) {
  		$cnt_res2 = count($res2[RESDATA]);
  	} else {
  		$cnt_res2 =0;
  	}
  	switch ($cnt_res2) {
  		case 0:
  		$sts='ins';
  		break;
  		default:
  		$sts='rew';
  		break;
  	}

   //echo 'sts--->' . $sts . '  cnt_res2--->' . $cnt_res2;
//------------------------------------
//初期値を取得
//------------------------------------
  	if ($cnt_res2 === 0) {
  	} else {
		  //t_uke_meisai 詳細情報
		  //
  		$add_data = array(
  			'p_id_c' =>  $res2[RESDATA][0][0],
  			'p_no_seq_c' => $res2[RESDATA][0][1],
  			'sof_id_c' => $res2[RESDATA][0][2],
  			'nko_suryo_c' => $res2[RESDATA][0][3],
  			'nko_ymd_c' => $res2[RESDATA][0][4],
  			'filler_c' => $res2[RESDATA][0][5],
  			'memos_c' =>  $res2[RESDATA][0][6],
  			'upd_ymd_c' => $res2[RESDATA][0][7],
  			'cre_ymd_c' => $res2[RESDATA][0][8]
  		);
  	}
//-------------------------------------------
//  Filter
//-------------------------------------------
  	$p_id_c->addfilter('htmlspecialchars');
  	$p_no_seq_c->addfilter('htmlspecialchars');
  	$sof_id_c->addfilter('htmlspecialchars');
  	$nko_suryo_c->addfilter('htmlspecialchars');
  	$nko_ymd_c->addfilter('htmlspecialchars');
     // $filler_c->addfilter('htmlspecialchars');
  	$memos_c->addfilter('htmlspecialchars');
  	$upd_ymd_c->addfilter('htmlspecialchars');
  	$cre_ymd_c->addfilter('htmlspecialchars');
//-------------------------------------------
//  p_id
//-------------------------------------------
  	$today = date("Y-m-d H:i:s");
	 // if (empty($_POST['p_id_c'])) {
	//	$p_id_w = $add_data['p_id_c'];
	//
	//  } else {
  	$p_id_w = $ary_crs_view[0][0];
	//  }
   //echo 'p_id_w: ' . $p_id_w;
//-------------------------------------------
//  p_no_seq
//-------------------------------------------
	  //if (empty($_POST['p_no_seq_c'])) {
	//	$p_no_seq_w = $add_data['p_no_seq_c'];
		 //echo 'sho_sof_kbn: ' . $add_data['sho_sof_kbn_c'];
	//  } else {
  	$p_no_seq_w = intval($ary_crs_view[0][1]);
	 // }
//-------------------------------------------
//  nko_suryo
//-------------------------------------------
  	if   (!ctype_digit($nko_suryo_w)) {$nko_suryo_w =0;}
  	if (empty($_POST['nko_suryo_c'])) {
  		$nko_suryo_w = intval($add_data['nko_suryo_c']);
  	} else {
  		$nko_suryo_w = intval($_POST['nko_suryo_c']);
  	}
 //-------------------------------------------
 //  nko_suryo
 //-------------------------------------------
  	if (empty($_POST['nko_ymd_c'])) {
  		$nko_ymd_w = $today;

  	} else {
  		$nko_ymd_w =e($_POST['nko_ymd_c']);
  	}
 //-------------------------------------------
 //  filler
 //-------------------------------------------
	//  if (empty($_POST['filler_c'])) {
	//	$filler_w = $filler_c -> getvalue();
	//
	 // } else {
  	$filler_w = NULL;
	 // }
 //-------------------------------------------
 // memo
 //-------------------------------------------
  	if (empty($_POST['memos_c'])) {
  		$memos_w = $add_data['memos_c'];
  	} else {
  		$memos_w = e($_POST['memos_c']);
  	}
 //-------------------------------------------
 //  upd_ymd cre_ymd
 //-------------------------------------------
  	$upd_ymd_w = $today;
  	switch ($sts)  {
  		case 'ins':
  		$cre_ymd_w =date( 'Y-m-d  H:i:s');
  		break;
  		case 'rew':
  		$cre_ymd_w =$add_data['cre_ymd_c'];
  		break;
  		default:
  		$cre_ymd_w =$add_data['cre_ymd_c'];
  		break;
  	}
 //-------------------------------------------
 //  cre_ymd
 //-------------------------------------------
//	  if (empty($_POST['cre_ymd_c'])) {
//		$cre_ymd_w = $add_data['cre_ymd_c'];
//	  } else {
//		$cre_ymd_w = $_POST['cre_ymd_c'];
//	  }
//-------------------------------------------
//  UPDATE 
//-------------------------------------------
  	if ($form->validate())  {
  		if ($_POST[judge] ==1) {
		//delete
  			$sts="del";
  			$ddd_uke_meisai01 = $obj ->del_uke_meisai01(
  				$p_id_w.','.$p_no_seq_w.','.$sof_id_w.',
  				'.$sts);
  			if ($ddd_uke_meisai01[RESFLAG] == TRUE ) {
		 //結果の再表示
  				$this->_redirect('rcp_detail_view01', $p_id_w . ',' . $p_no_seq_w . ',' .$sts);
  			} else {
		// $this->_redirect('upd_check02',$p_id_w .','.$p_no_seq_w.','.'uu9');
  				echo "<span sytle=\"color:#FF0000\">".'DATA exception->' . DELNG .  $p_id_w . ',' . $p_no_seq_w . ',' .$sof_id_w ."</span>";
  			}
  		} else {
  			$ares_uke_meisai01 =$obj->upd_uke_meisai01(
  				$p_id_w,
  				$p_no_seq_w,
  				$sof_id_w,
  				$nko_suryo_w,
  				$nko_ymd_w,
  				NULL,
  				$memos_w,
  				$upd_ymd_w,
  				$cre_ymd_w,
  				$sts
  			);
	    // print_r($ares_uke_meisai01[RESFLAG]);
  			if ($ares_uke_meisai01[RESFLAG] == TRUE ) {
  				$this->_redirect('rcp_detail_view01', $p_id_w . ',' . $p_no_seq_w . ',' .$sts);
  			} else {
  				$this->_redirect('upd_check02',$p_id_w .','.$p_no_seq_w.','.'uu9');
	     //echo "<span sytle=\"color:#FF0000\">" . 't_pno_com --->' . ADDUPDATENG . "</span>";
  			}
  		}
  	}  else {
  		ChromePhp::log('Normal');
    //echo ('normal-->' . $_POST['p_id_c']);
  		$this->createform($form,NULL);
  }   // end if
  $obj->dbend();
  exit;
//------------------------------------
//  データを取得
//-----------------------------------
  if ($res1[RESFLAG] == TRUE) {
  	if (count($res1[RESDATA])  != 0) {
           //$res= $this -> sanitize($res1[RESDATA]);
  		$this->createform($form,$res);
  	} else {
  		echo  '<p>' .'date exception => ' . $sql ."</p>\n";
  		$this -> createform($form,NULL);
	     }  //end if
	 } else  {
	 	echo  '<p>' .'data invalid => ' . $sql ."</p>\n";
	 	$this -> createform($form,NULL);
	   }   // end if
   	     //
	   $obj->dbend();
}  // end_function
 //===========================================
 // フォームの表示
 //===========================================
function createForm($form,$rows){
        //$smarty = $this->getsmarty();
	HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
	$renderer = HTML_QuickForm2_Renderer::factory('smarty');
	$renderer->setOption(array('required_note'  => "<em>*</em> 記入必須項目"));
	$renderer->setOption('old_compat', true);
	$renderer->setOption('group_errors', true);

		// フォームの作成
	$FormData = $form->render($renderer)->toArray();
	$key_array1 = array_map('trim',explode(',',$_GET['id']));
		//$this->smarty->assign('keys',$key_array1[0].','.$key_array1[1] .','. $sof_id_w );
	$this->smarty->assign('form', $FormData);
		//
	$this->smarty->assign('res',$rows);
		//$this->smarty->assign('pagedata', $rows['data']);
	$this->smarty->left_delimiter = '!!-{';
	$this->smarty->right_delimiter = '}-!!';
	$this->smarty->assign('ary_crs_view', $this->pub_crs_view00);
	//-----------------------------------------
	//	連想配列-->配列  do not delete
	//------------------------------------------
    $cnt_res2=0;
	if (is_array($rows)) {
		$cnt_res2 = count($rows);
	} else {
		$cnt_res2 =0;
	}
	for ($i = 0 ; $i < $cnt_res2; $i++) {
		$val_array1[]= array_values($rows[$i]);
	}
	//-----------------------------------------------
	//java用にencode  連想配列ではなく配列を渡すこと
	//-----------------------------------------------
	//$val_array2=  $this ->json_safe_encode($val_array0);
	//$val_array2=  $this ->json_safe_encode($rows);
	$val_array2=  $this ->json_safe_encode($val_array1);
	$this->smarty->assign("data_json", $val_array2);
	$this->smarty->assign("konma", ",");
	$this->smarty->assign("se_user_id", $_SESSION[USER_ID]);
	$this->smarty->assign("se_picture", $_SESSION[PICTURE]);
	$this->smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
	$this->smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
	$this->smarty->display('rcp_detail_view01.html');
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
			case 'settei_inf':
			$this->pub_settei_inf00 =$row01;
			break;
			case 'crs_view':
			$this->pub_crs_view00 =$row01;
			break;
			case 'pmh_sub':
			$this->pub_pmh_sub00 =$row01;
			break;
			default:
			break;
		}
	//var_dump ('rows01=>' . $row01);
   //$sf2 = $this->dispChannel();
   //return $sf2;
  } // end function
//--------------------------------
//
//----------------------------------
  function get_financial_year($year, $month, $financial_month){

  	if($month > $financial_month){
  		return $year;
  	} else {
  		return $year - 1;
  	}
  } // end function

} // end_class

?>