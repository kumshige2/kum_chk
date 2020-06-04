<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
require '../../vendor/autoload.php';
require_once(LIBPATH.'address.php');
require_once(LIBPATH.'encode.php');
//require_once(LIBPATH.'Chromephp.php');

//===========================================
// Search   class
//    user 設定  module
//===========================================
 //echo  '<p>' .'user_setting.php ' .date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
//echo "<pre>". 'get ' ;
//print_r($_GET);
//echo "</pre>";
///
//echo "<pre>". 'post ' ;
//print_r($_POST);
//echo "</pre>";
//echo "<pre>". 'session ' ;
//print_r($_SESSION);
//echo "</pre>";
class recep_set   extends view {
  // $property
	var $smarty;
	public $pub_staff_kbn;
	public $pub_users00;
	public $pub_picture00;
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
  //  pamph 一覧情報取得
  //===========================================
  function main() {
  	ChromePhp::log('Hello console');
  	ChromePhp::log('recep_set');
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
  //--------------------------------------------
  	if (empty(e($_POST['KEY']))) {
  		$key_array1 = array();
  		$key_array1 =array(e($_POST['p_id_c']),e($_POST['p_no_seq_c']),e($_POST['call_c']));
      // var_dump($key_array1);
  	} else {
  		$key_array0 = array();
  		$key_array1 = array();
  		$key_array0 = explode(",",e($_POST['KEY']));
  		$key_array0 = array_filter($key_array0,'strlen');
  		$key_array1 = array_map('trim',explode(',',e($_POST['KEY'])));
  		$p_id = strval($key_array1[0]);
	  //$p_nd = substr($_GET['KEY'],6,4);
	  //$p_pmh_type = substr($_GET['KEY'],7,2);
  		ChromePhp::log('user_id-->' . $p_id .  ':' .e($_POST['KEY']));
  	}
     //echo $key_array0[0],$key_array0[1];
	 // echo 'key--->' .$key_array1[0].$key_array1[1];
     //------------------------------------
	 //user setting instance
	 //------------------------------------
  //------------------------------------------
  //  instance
  //------------------------------------------
  	$form = new HTML_Quickform2('qform_smarty','POST',array('action' => 'index.php?module=recep_set'));
  	$obj = new addressoperation;
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
  			$del_uke01 =$obj->del_uke11($key_array1[0].','. intval($key_array1[1]));
  			if ($del_uke01 == TRUE) {
  				$this->_redirect('upd_check02', $key_array1[0].','.$key_array1[1].','.'ud0');
  				exit;
  			} else {
  				$this->_redirect('upd_check02', $key_array1[0].','.$key_array1[1].','.'ud9');
  				exit;
  			}
  		} else {
  			$this->_redirect('upd_check02', $key_array1[0].','. $key_array1[1].','.'ud9');
  			exit;
  		}
  	} else {
   //echo 'bbbbbb';
   }   // end if
  //------------------------------------------
  // call したmooduleで処理分ける
  //   pmh_inf_view01:--->insert
  //   search:--->rewrite
  //------------------------------------------
   switch ($key_array1[2]) {
   	case 'pmh_inf_view01':
		 //----------------------------------------------------
	     //pno_com get
	     //----------------------------------------------------
   	$res1 = array();
   	$res1 = $obj  -> getlist01_01('select * from t_pno_com where p_id = ? ',$key_array1[0]);
   	if (count($res1[RESDATA]) == 0) {
		    //echo '<p>' .  'p_no_com  invalid :'  . substr($id,0,5) . "</p>\n";
   		echo "<span sytle=\"color:#FF0000\">". 't_pno_com invalid--->'. $key_array1[0] ."</span>";  		            $this->createform($form,NULL);
   		$obj->dbend();
   		exit();
   	} else {
	    // echo '<p>' .  'p_no_com  valid :'  . $id . "</p>\n";
   		$ary_pno_com = array();
   		$res2 = $this -> sanitize($res1[RESDATA]);
   		foreach ($res1[RESDATA] as $row1) {
   			$ary_pno_com += array($row1[0] => $row1[9]);
             } // end foreach

	}   // end if
          //$ret2 = $obj -> table($res1[RESDATA]);
	      $strr = intval($ary_pno_com[$key_array1[0]]) + 1;
	      $p_no_latest = sprintf('%03d', $strr);
	      //echo '<p>' .  'p_no latest  : '  . $p_no_latest  . "</p>\n";
		//-----------------------------
	    //  pmh_inf
	    //-----------------------------
	      $res = array();
	      $strsql ='';
	      $strsql = 'SELECT * from t_pmh_inf as a ';
	      $strsql = $strsql .' WHERE a.p_id = ?  and a.p_nd = ? ';
	      $strsql = $strsql .' ORDER BY a.p_id asc,a.p_nd desc ';
          //echo $p_nm_xx;
	      //$res = $obj->  getlist02_01($strsql, $key_array1[0],$this_ndo);
	      if ($key_array1[1] <= '2013')  {
	      	$key_ndo01 = e($_POST['p_nd_c']);

	      } else {
	      	$key_ndo01 =$key_array1[1];
	      }
	      $res = $obj->  getlist02_01($strsql, $key_array1[0],$key_ndo01);
	      $count=count($res[RESDATA]);
	      if (count($res[RESDATA]) == 0) {
	      	echo "<span sytle=\"color:#FF0000\">".PMFINFEMPTY. '=--->'. $key_array1[0] .',' . $key_ndo01."</span>";
	      	$this->createform($form,NULL);
	      	$obj->dbend();
	      	exit();
	      } else {
	      	$ary_pmh_sub = array();
	      	$ary_pmh_sub = $this -> sanitize($res[RESDATA]);
	      //var_dump($ary_pmh_sub);
	      	$ret1 = $this -> setChannel($ary_pmh_sub,'pmh_sub');
			//----------------------------------------------------
	        //画面用配列
	        //----------------------------------------------------
	      	$add_data = array(
	      		'p_id_c' => $res[RESDATA][0][0],
	      		'p_no_seq_c' => $p_no_latest,
	      		'kaiko_c' => '209901',
	      		'noki_c' => NULL,
	      		'kgo_nm_c' => $res[RESDATA][0][8],
	      		'flg_c' => 0,
	      		'has_ira_ymd_c' => NULL,
	      		'has_ymd_c' => NULL,
	      		'seq_c' => NULL,
	      		'filler_c' => NULL,
	      		'upd_ymd_c' => NULL,
	      		'cre_ymd_c' => NULL,
	      		'p_nd_c' => $res[RESDATA][0][1],
	      		'p_nm_c' => $res[RESDATA][0][2],
	      		'ad_nm_c' => $res[RESDATA][0][4],
	      		'bsy_nm_c' =>  $res[RESDATA][0][6]
	      	);
	      }
	      $sts = 'ins';
	      break;
	      case 'search':
		  //--------------------------------------------------
	      //t_uke
	      //--------------------------------------------------
	      $res = array();
	      $strsql='';
	      $strsql='SELECT a.*,b.p_nm,b.ad_nm,b.bsy_nm ';
	      $strsql = $strsql . 'FROM t_uke  as a ';
	      $strsql = $strsql . 'left join t_pmh_inf as b on a.p_id =b.p_id and a.p_nd = b.p_nd ';
	      $strsql = $strsql . 'WHERE a.p_id = ? AND a.p_no_seq = ? ';
	      $strsql = $strsql . 'ORDER BY a.seq desc,a.has_ira_ymd asc';
	      $res = $obj  -> getlist02_01_int($strsql,$key_array1[0],$key_array1[1]);
	      //$res2 = $obj -> table($res[RESDATA]);
	      $count=count($res[RESDATA]);
	      //------------------------------------
	      //  データを取得
	      //-----------------------------------
	      if ($res[RESFLAG] == TRUE) {
	      	if (count($res[RESDATA])  != 0) {
	      		$add_data = array(
	      			'p_id_c' => $res[RESDATA][0][0],
	      			'p_no_seq_c' => $res[RESDATA][0][1],
	      			'kaiko_c' => $res[RESDATA][0][2],
	      			'noki_c' => $res[RESDATA][0][3],
	      			'kgo_nm_c' => $res[RESDATA][0][4],
	      			'flg_c' => $res[RESDATA][0][5],
	      			'has_ira_ymd_c' => $res[RESDATA][0][6],
	      			'has_ymd_c' => $res[RESDATA][0][7],
	      			'seq_c' => $res[RESDATA][0][8],
	      			'filler_c' => $res[RESDATA][0][9],
	      			'upd_ymd_c' => substr($res[RESDATA][0][10],0,19),
	      			'cre_ymd_c' => substr($res[RESDATA][0][11],0,19),
	      			'p_nd_c' => $res[RESDATA][0][12],
	      			'p_nm_c' => $res[RESDATA][0][13],
	      			'ad_nm_c' => $res[RESDATA][0][14],
	      			'bsy_nm_c' => $res[RESDATA][0][15]

	      		);
	      		$ret1 = $this -> setChannel($ary_users00,'users00');
			   //$ret2 = $obj -> table($ary_users00);
		       //$this->createform($form,NULL);
	      		ChromePhp::log('data get OK ');
			   //var_dump($ary_users00);
	      	} else {
	      		ChromePhp::log('data Exception => ' . $user_id);
	      		$this -> createform($form,$userflag);
	      		$obj->dbend();
	         }  //end if

	     } else  {
	     	ChromePhp::log('data Invalid => ' . $user_id);
	     	$this -> createform($form,$userflag);
	      }   // end if
	      $sts = 'rew';
	      break;
	      default;
	      echo '??????????????????????????';
	      break;
	  }
	 //--------------------------------------------------
	 // kaiko
	 //--------------------------------------------------
	  $res1 = array();
	  $ary_kaiko = array();
	  //$ary_kaiko = array('' => '開 講');
	  //$ary_kaiko += array('000000' => '000000');

	 // echo date('Ym');
	  $year = date('Y');
	  $month = date('m');
	  $day = date('d');

	 //echo ($year.'-'.$montn.'-'.$day);
	  for ($count = -3; $count < 36; $count++){
	  	$dates = $this -> computeMonth($year,$month,$day, $count);
		  //  array_push($ary_kaiko,$dates);
	  	$ary_kaiko +=array($dates => $dates);
	   } // end for
	  //$ret2 = $obj->table($ary_kaiko);

	 //------------------------------------------
	 // Image array
	 //------------------------------------------
	 //$ary_picture = array();
	 //$arrayImg = array('template/AdminLTE-master/dist/img/anna_kournikova9.jpg',
     //                   'template/AdminLTE-master/dist/img/dog01.jpg',
     //                   'template/AdminLTE-master/dist/img/user3-128x128.jpg',
     //                   'template/AdminLTE-master/dist/img/ak.png');
     //$arrayName = array('kum01',
     //                  'kum02',
     //                  'kum03',
     //                  'kum04');

    //$imgCnt = count($arrayImg);
    //$nameCnt = count($arrayName);
	//for ($i = 0; $i < $imgCnt; $i++) {
	//   $ary_picture += array($i => "<img src=".$arrayImg[$i].">" );
	//}
	//var_dump($ary_picture);

	//------------------------------------------
	//  form 要素の構築
	//------------------------------------------
	   $name = $form->addElement('text','name',array('style' => 'width: 150px;'),array('label' => "Name:"));
	   $attr_select2= array('class' => 'form-control select2');
	   $attr_select2_img= array('class' => 'js-example-templating js-states form-control');
	  //  $id_form = $form->addElement('hidden','action');
	  //text 要素の追加
	   $p_id_c = $form->addElement('text','p_id_c',array('style' => 'width: 70px; border:none; background-color: transparent;','readonly'=>'readonly' ),array('label' => "P_id"));
	   $p_no_seq_c = $form->addElement('text','p_no_seq_c',array('style' => 'width: 25px; border:none; background-color: transparent;','readonly'=>'readonly' ),array('label' => "Name"));
	  //$kaiko_c = $form->addElement('select','kaiko_c',array('class' => 'form-control select2','style' => 'width: 50px;'),array('options' =>$ary_kaiko))->setlabel("  Kaiko");
	   $kaiko_c = $form->addElement('select','kaiko_c',$attr_select2,array('options' =>$ary_kaiko))
	   ->setlabel("Kaiko");
	  //
	   $noki_c = $form->addElement('text','noki_c',array('style' => 'width: 150px; border:none; background-color: transparent;display:none;' ),array('label' => "noki_c"));
	   $kgo_nm_c = $form->addElement('text','kgo_nm_c',array('style' => 'width: 300px; border:none; background-color: transparent;' ),array('label' => "kgo_nm"));
	   $flg_c = $form->addElement('text','flg_c',array('style' => 'width:50px; border:none; background-color: transparent;display:none;'),array('label' => "flg_c"));
	  //
	   $has_ira_ymd_c = $form->addElement('text','has_ira_ymd_c',array('style' => 'width: 100px; border:none; background-color: transparent;','readonly'=>'readonly' ),array('label' => "依頼日"));
	   $has_ymd_c = $form->addElement('text','has_ymd_c',array('style' => 'width: 100px; border:none; background-color: transparent;','readonly'=>'readonly' ),array('label' => "完了日"));
	   $seq_c = $form->addElement('text','seq_c',array('style' => 'width: 50px; border:none; background-color: transparent;display:none;' ),array('label' => "SEQ"));
	  //display:none;
	   $filler_c = $form->addElement('text','filler_c',array('style' => 'width: 50px; border:none; background-color: transparent;display:none;' ),array('label' => "Filler"));
	 // $p_nd_c = $form->addElement('text','p_nd_c',array('style' => 'width: 50px; border:none; background-color: transparent;display:none;' ),array('label' => "p_nd"));
	   $p_nd_c = $form->addElement('text','p_nd_c',array('style' => 'width: 50px; border:none; background-color: transparent;' ),array('label' => "p_nd"));
	   $upd_ymd_c= $form->addElement('text','upd_ymd_c',array('style' => 'width: 135px;border:none; background-color: transparent;','readonly'=>'readonly'),array('label' =>"upd_ymd:"));
	   $cre_ymd_c= $form->addElement('text','cre_ymd_c',array('style' => 'width: 135px;border:none; background-color: transparent;','readonly'=>'readonly'),array('label' =>"cre_ymd:"));
     //
	   $p_nm_c = $form->addElement('text','p_nm_c',array('style' => 'width: 500px; border:none; background-color: transparent;','readonly'=>'readonly' ),array('label' => "P_nm"));
	   $ad_nm_c = $form->addElement('text','ad_nm_c',array('style' => 'width: 150px; border:none; background-color: transparent;','readonly'=>'readonly' ),array('label' => "ad_nm"));
	   $bsy_nm_c = $form->addElement('text','bsy_nm_c',array('style' => 'width: 150px; border:none; background-color: transparent;','readonly'=>'readonly' ),array('label' => "bsy_nm"));
	   $sts_c = $form->addElement('text','sts_c',array('style' => 'width: 1px; border:none; background-color: transparent;font-color:#ffffff;','readonly'=>'readonly' ),array('label' => "sts"));
	   $call_c = $form->addElement('text','call_c',array('style' => 'width: 51px; border:none; background-color: transparent;font-color:#999999;','readonly'=>'readonly' ),array('label' => "call"));
	  //------------------------------------------
	  //  入力値がない場合初期値を設定
	  //------------------------------------------
	   if ($name->getvalue() =="")
	   {
	   	$name->setvalue($_SESSION[USER_ID]);
	   }


	 //------------------------------------
	 //ボタン 要素の追加
	 //------------------------------------
	   $buttongroup = $form->addElement('group','buttons');
	   $buttongroup ->addElement('submit','send',array('value'=>" 登録 "));
	   $buttongroup ->addElement('reset','reset',array('value'=>" Reset "));
	  //------------------------------------
	 //idがある場合 初期値を取得
	 //------------------------------------
	   if ($res[RESFLAG] == TRUE) {
	      //pamph詳細情報
	   //var_dump($res[RESDATA][0]);

		 //-------------------------------------------
		 //$session id set
		 //-------------------------------------------
		 //$_SESSION[data1] = array($res[RESDATA][0]['p_id'],$res[RESDATA][0]['p_no'],'upd');
		 //-------------------------------------------
		 //初期値を代入
		 //-------------------------------------------
		 //var_dump($add_data);
	   	$today = date("Y-m-d H:i:s");
	   	if(!empty($add_data['p_id_c'])) $p_id_c->setvalue($add_data['p_id_c']);
		 // .'-'. $add_data['p_no_seq_c']);
	   	if(!empty($add_data['p_no_seq_c']))  $p_no_seq_c->setvalue($add_data['p_no_seq_c']);
	   	if(!empty($add_data['kaiko_c']))  $kaiko_c->setvalue($add_data['kaiko_c']);
	   	if(!empty($add_data['noki_c']))  $noki_c->setvalue($add_data['noki_c']);
	   	if(!empty($add_data['kgo_nm_c']))  $kgo_nm_c->setvalue($add_data['kgo_nm_c']);
	   	if(isset($add_data['flg_c']))  $flg_c->setvalue($add_data['flg_c']);
	   	if(!empty($add_data['has_ira_ymd_c']))  $has_ira_ymd_c->setvalue($add_data['has_ira_ymd_c']);
	   	if(!empty($add_data['has_ymd_c']))  $has_ymd_c->setvalue($add_data['has_ymd_c']);
	   	if(!empty($add_data['seq_c']))  $seq_c->setvalue($add_data['seq_c']);
	   	if(!empty($add_data['filler_c']))  $filler_c->setvalue($add_data['filler_c']);
	   	if(!empty($add_data['p_nd_c']))  $p_nd_c->setvalue($add_data['p_nd_c']);
	   	if(!empty($add_data['p_nm_c']))  $p_nm_c->setvalue($add_data['p_nm_c']);
	   	if(!empty($add_data['ad_nm_c'])) $ad_nm_c->setvalue($add_data['ad_nm_c']);
	   	if(!empty($add_data['bsy_nm_c'])) $bsy_nm_c->setvalue($add_data['bsy_nm_c']);

		 //if(!empty($add_data['upd_ymd_c']))  $upd_ymd_c ->setvalue($add_data['upd_ymd_c']);
	   	$upd_ymd_c->setvalue($today);
	   	$cre_ymd_c ->setvalue($add_data['cre_ymd_c']);
	   	$sts_c ->setvalue($sts);
	   	$call_c ->setvalue($key_array1[2]);
		//--------------------------------------
		// template
		//--------------------------------------
	   	$this->smarty->assign('title',"Receipt Setting");
	   	$this->smarty->assign('h1',"----- Receipt Information  Update-----");
	   	$this->smarty->assign('user_id',$user_id);
		//$this->smarty->assign('chk_array',$chk_array);
		//
	   	$obj->dbend();

	   } else {
		  //id 取得failed
	   	$this->smarty->assign('title',"Receipt Setting");
	   	$this->smarty->assign('h1',"Data exception !! T_users");

	   }
	  //------------------------------------
	 //  Rule
	 //------------------------------------
	 // $p_id_c ->addRule('required',USERIDEMPTY);
	 // $p_no_seq_c ->addRule('required',NAMEEMPTY);
	 // $kaiko_c ->addRule('required',KAIKOEMPTY);
	   $kgo_nm_c ->addRule('required',KGONMEMPTY);
	 // $kaiko_c->addrule('regex',KAIKOEMPTY,'/^[a-zA-Z0-9]+$/');
	 // $p_id_c->addrule('regex',PIDREGEX,'/\A(.{0})\z/u');
	  //$kaiko_c->addrule('length',PASSLENGTH,array(5,16));
	  //$kaiko_c->addrule('compare',PASSNEWCOMPARE,array('operator' => '==' ,'operand' => $kaiko_conf_c));
      //$kaiko_c ->addFilter('htmlspecialchars');
	   $p_id_c->addrule('required',PIDREGEX);
	  //-------------------------------------------
	  //  Filter
	  //-------------------------------------------

	   $p_id_c ->addFilter('htmlspecialchars');
	   $p_no_seq_c ->addFilter('htmlspecialchars');
	   $kaiko_c ->addFilter('htmlspecialchars');
	   $noki_c ->addFilter('htmlspecialchars');
	   $kgo_nm_c ->addFilter('htmlspecialchars');
	   $flg_c ->addFilter('htmlspecialchars');
	   $has_ira_ymd_c ->addFilter('htmlspecialchars');
	   $has_ymd_c ->addFilter('htmlspecialchars');
	   $seq_c ->addFilter('htmlspecialchars');
	   $p_nd_c ->addFilter('htmlspecialchars');
	   $filler_c ->addFilter('htmlspecialchars');
	   $upd_ymd_c->addfilter('htmlspecialchars');
	   $cre_ymd_c->addfilter('htmlspecialchars');
	  //-------------------------------------------
	  //  Trim
	  //-------------------------------------------
	   $form->addRecursiveFilter('trim');
	  //-------------------------------------------
	  //  user_id
	  //-------------------------------------------
	   if (empty($_POST['p_id_c'])) {
	   	$p_id_w = $add_data['p_id_c'];

	   } else {
	   	$p_id_w = e($_POST['p_id_c']);
	   }
	  //-------------------------------------------
	  //  p_no_seq
	  //-------------------------------------------
	   if (empty($_POST['p_no_seq_c'])) {
	   	$p_no_seq_w = intval($add_data['p_no_seq_c']);

	   } else {
	   	$p_no_seq_w = intval(e($_POST['p_no_seq_c']));
	   }

	  //-------------------------------------------
	  //  kaiko
	  //-------------------------------------------
	   if (empty($_POST['kaiko_c'])) {
	   	$kaiko_w = $add_data['kaiko_c'];

	   } else {
	   	$kaiko_w = e($_POST['kaiko_c']);
	   }
	   //-------------------------------------------
	  // noki
	  //-------------------------------------------
	   if (empty($_POST['noki_c'])) {
	   	$noki_w = $add_data['noki_c'];

	   } else {
	   	$noki_w = e($_POST['noki_c']);
	   }

	  //-------------------------------------------
	  //  kgo_nm
	  //-------------------------------------------
	   if (isset($_POST['kgo_nm_c'])) {
	   	$kgo_nm_w = e($_POST['kgo_nm_c']);
	   } else {
	   	$kgo_nm_w = $add_data['kgo_nm_c'];
	   }

	  //-------------------------------------------
	  //  flg
	  //-------------------------------------------
	   if (isset($_POST['flg_c'])) {
	   	$flg_w = e($_POST['flg_c']);
	   } else {
	   	$flg_w = $add_data['flg_c'];
	   }
	 // if (empty($_POST['flg_c'])) {
	 // 	  $flg_w = $add_data['flg_c'];
		//  echo '<p>' . 'flg-->'. $flg_w . '</p>';
	//    } else {
	 // 	  $flg_w = $_POST['flg_c'];
	 // }
	 // echo '<p>' . 'flg-->'. $flg_w . '</p>';
	  //-------------------------------------------
	  //  has_ira_ymd
	  //-------------------------------------------
	  //-------------------------------------------
	  //  uke_ymd
	  //-------------------------------------------
	   if (empty($has_ira_ymd_c ->getvalue())) {$has_ira_ymd_w = NULL;}
	   else {$has_ira_ymd_w = $has_ira_ymd_c ->getvalue() ;}
	  //if (isset($_POST['has_ira_ymd_c'])) {
	//	  $has_ira_ymd_w = $_POST['has_ira_ymd_c'];
	 // } else {
		//  $has_ira_ymd_w = $add_data['has_ira_ymd_c'];
	  //}
	  //-------------------------------------------
	  // has_ymd
	  //-------------------------------------------
	   if (empty($has_ymd_c ->getvalue())) {$has_ymd_w = NULL;}
	   else {$has_ymd_w = $has_ymd_c ->getvalue() ;}
	  //if (isset($_POST['has_ymd_c'])) {
	//	 $has_ymd_w = $_POST['has_ymd_c'];
	 // } else {
		// $has_ymd_w = $add_data['has_ymd_c'];
	  //}
	  //-------------------------------------------
	  //  seq
	  //-------------------------------------------
	   if (isset($_POST['seq_c'])) {
	   	$seq_w = e($_POST['seq_c']);
	   } else {
	   	$seq_w = $add_data['seq_c'];
	   }

	   //-------------------------------------------
	  //  filler
	  //-------------------------------------------

	   if (isset($_POST['filler_c'])) {
	   	$filler_w = e($_POST['filler_c']);
	   } else {
	   	$filler_w = $add_data['filler_c'];
	   }
	  //-------------------------------
	  //   cre_ymd
	  //-------------------------------
	   $today = date("Y-m-d H:i:s");
	   $upd_ymd_w = $today;
	   if (empty($_POST['cre_ymd_c'])) {
	   	$cre_ymd_w =date( 'Y-m-d  H:i:s');
	   } else {
	   	$cre_ymd_w =e($_POST['cre_ymd_c']);
	   }
	  //-------------------------------------------
	  //  p_nd
	  //-------------------------------------------

	   if (isset($_POST['p_nd_c'])) {
	   	$p_nd_w = e($_POST['p_nd_c']);
	   } else {
	   	$p_nd_w = $add_data['p_nd_c'];
	   }
	   //-------------------------------------------
	  // sts
	  //-------------------------------------------
	   if (isset($_POST['sts_c'])) {
	   	$sts_w = e($_POST['sts_c']);
	   } else {
	   	$sts_w = 'QQQQQ';
	   }
	  //-------------------------------------------
	  //フォームの出力or入力後処理
	  //-------------------------------------------
	  // sts-w
	  //  INS:upd_uke01
	  //     :upd_uke_meisai01
	  //     :updpno_com
	  //  REW:upd_uke_01
	  //--------------------------------------------
	   if ($form->validate())  {
	   	$ares_uke01 =$obj->upd_uke01(
	   		$p_id_w,
	   		$p_no_seq_w,
	   		$kaiko_w,
	   		$noki_w,
	   		$kgo_nm_w,
	   		$flg_w,
	   		$has_ira_ymd_w,
	   		$has_ymd_w,
	   		$filler_w,
	   		$upd_ymd_w,
	   		$cre_ymd_w,
	   		$p_nd_w,
	   		$sts_w);
	   	if ($_POST[judge] ==1) {
		//delete
	   		$sts_w="del"; }
	   		if ($ares_uke01[RESFLAG] == TRUE ) {
	   			switch ($sts_w) {
	   				case 'ins':
	   				$ares_uke_meisai01 =$obj->upd_uke_meisai01(
	   					$p_id_w,
	   					$p_no_seq_w,
	   					'01',
	   					'0',
	   					$today,
	   					NULL,
	   					NULL,
	   					$upd_ymd_w,
	   					$cre_ymd_w,
	   					$sts_w
	   				);
	   				if ($ares_uke_meisai01[RESFLAG] == TRUE ) {
	   					$ares_pno_com01 = $obj -> updpno_com08($p_id_w, $p_no_seq_w,$sts_w);
	   					if ($ares_pno_com01 == TRUE)  {
			         //echo "<span sytle=\"color:#0099ff\">" . ADDUPDATEOK . "</span>";
	   						$this->_redirect('upd_check02',$p_id_w .','.$p_no_seq_w.','.'uu0');
	   					} else {
	   						$this->_redirect('upd_check02',$p_id_w .','.$p_no_seq_w.','.'uu9');
	   						echo "<span sytle=\"color:#FF0000\">" . 't_pno_com --->' . ADDUPDATENG . "</span>"; }
	   					} else {
	   						$this->_redirect('upd_check02',$p_id_w .','.$p_no_seq_w.','.'uu9');
	   						echo "<span sytle=\"color:#FF0000\">" . 't_uke_meisai-->' . ADDUPDATENG . "</span>"; }
	   						break;
	   						case 'rew':
	   						$this->_redirect('upd_check02',$p_id_w .','.$p_no_seq_w.','.'uu0');
	   						break;
			 //case 'del':
			 //  $ares_uke_meisai01 =$obj->upd_uke_meisai01(
			 //    $p_id_w,
	         //    $p_no_seq_w,
	         //    '01',
	         //    '50',
	         //    $today,
	         //    NULL,
	         //    NULL,
	         //    $upd_ymd_w,
	         //    $cre_ymd_w,
		     //    $sts_w
			 //    );
		     //    if ($ares_uke_meisai01[RESFLAG] == TRUE ) {
		     //      $this->_redirect('upd_check02',$p_id_w .','.$p_no_seq_w.','.'ud0');
			 //    } else {
		     //      $this->_redirect('upd_check02',$p_id_w .','.$p_no_seq_w.','.'ud9');
			 //    echo "<span sytle=\"color:#FF0000\">" . 't_uke_meisai-->' . ADDUPDATENG . "</span>"; }
			//	 break;
	   						default:
	   						$this->_redirect('upd_check02',$p_id_w .','.$p_no_seq_w.','.'uu9');
	   						break;
		   }  // end switch
		} else {
			echo "<span sytle=\"color:#FF0000\">" . ADDUPDATENG . "</span>";
				 //$this->_redirect('upd_check02',$user_id . ':'.  'uu9');
		  }	  // end if
	      //$this->createform($form,'pmh_inf_view01');
		}  else {
			ChromePhp::log('Normal');
		  // echo ('normal-->' . $_POST['p_id']);
			$this->createform($form,'recep_set.html');
	  }   // end if
	  //-----------------------------------
	  // db connect off
	  //-----------------------------------
	  $obj->dbend();
}  // end_functio

 //===========================================
 // フォームの表示
 //===========================================
function createForm($form,$disp){
	HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
	$renderer = HTML_QuickForm2_Renderer::factory('smarty');
	$renderer->setOption(array('required_note'  => "<em>*</em> 記入必須項目"));
	$renderer->setOption('old_compat', true);
	$renderer->setOption('group_errors', true);
		// フォームの作成
	$FormData = $form->render($renderer)->toArray();
	$key_array1 = array_map('trim',explode(',',e($_POST['KEY'])));
		//echo 'kkkk--->' . $key_array1[2];
	$this->smarty->assign('keys',$key_array1[0].','.$key_array1[1]) ;
	$this->smarty->assign('form', $FormData);
		//-----------------------------------------
		//	連想配列-->配列  javascript に渡すため
		//-----------------------------------------------
		//java用にencode  連想配列ではなく配列を渡すこと
		//-----------------------------------------------
		// t_pmh_sub01
        //for ($i = 0 ; $i < count($this->pub_users00); $i++) {
		//  $val_array11[]= array_values($this->pub_users00[$i]);
		//}
        //$val_array12=  $this ->json_safe_encode($val_array11);
	   	//$this->smarty->assign("pub_users00", $val_array12);
		//----------
	$this->smarty->assign("ary_staff_kbn", $this->pub_staff_kbn);
	$this->smarty->assign("pub_picture00", $this->pub_picture00);
	$this->smarty->left_delimiter = '!!-{';
	$this->smarty->right_delimiter = '}-!!';
	$this->smarty->assign("konma", ",");
	$this->smarty->assign("se_user_id", $_SESSION[USER_ID]);
	$this->smarty->assign("se_picture", $_SESSION[PICTURE]);
	$this->smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
		//$this->smarty->assign("se_p_no_seq_x", $_SESSION[p_no_seq_X]);
	$this->smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
		//$this->smarty->display('tzselect01.html');
	$this->smarty->display($disp);
		//$this->smarty->display('upd_user01.html');
	}// FUNCTION
	function setChannel($row01,$sw){
		switch ($sw) {
			case 'staff':
			$this->pub_staff_kbn =$row01;
			break;
			case 'users00':
			$this->pub_users00 =$row01;
			break;
			case 'picture':
			$this->pub_picture00 =$row01;
			break;
			case 'dan03':
			$this->pub_dan03 =$row01;
			break;
			case 'pro_kgo':
			$this->pub_profit_mng_kgo =$row01;
			break;
			default:
			break;
		}
	//var_dump('rows01=>' . $row01);
   //$sf2 = $this->dispChannel();
   //return $sf2; $pub_pmh_judge_kbn00;
  } // end function
//------------------------------------------------------
//  配列にhtmlspecialcharsをかける
//------------------------------------------------------

  function h($str){
  	if(is_array($str)){
  		return array_map($this->h,$str);
  	}else{
  		return htmlspecialchars($str,ENT_QUOTES,"UTF-8");
  	}
  }
  function json_safe_encode($data){
  	return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
  }
// end function
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
  function get_financial_year($year, $month, $financial_month){

  	if($month > $financial_month){
  		return $year;
  	} else {
  		return $year - 1;
  	}
  } // end function
//------------------------------------------------------------
  /**
 * 年月日と加算月からnヶ月後、nヶ月前の日付を求める
 * $year 年
 * $month 月
 * $day 日
 * $addMonths 加算月。マイナス指定でnヶ月前も設定可能
 */
 //$year = date('Y', strtotime($date));
 //       $month = date('n', strtotime($date));
 //       $day = date('j', strtotime($date));
 //-----------------------------------------------------------
  function computeMonth($year, $month, $day, $addMonths) {
  	$month += $addMonths;
    $endDay = $this -> getMonthEndDay($year, $month);//ここで、前述した月末日を求める関数を使用します
    if($day > $endDay) $day = $endDay;
    $dt = mktime(0, 0, 0, $month, $day, $year);//正規化
    //return date("Y-m-d", $dt);
    return date("Ym", $dt);
 } // end function
//------------------------------------------------------------
 /**
 * 年月を指定して月末日を求める関数
 * $year 年
 * $month 月
 */
 //-----------------------------------------------------------
 function getMonthEndDay($year, $month) {
    //mktime関数で日付を0にすると前月の末日を指定したことになります
    //$month + 1 をしていますが、結果13月のような値になっても自動で補正されます
 	$dt = mktime(0, 0, 0, $month + 1, 0, $year);
 	return date("d", $dt);
 }
 function addMonth($date, $add_month) {
        // 年月日別に分離
 	$year = date('Y', strtotime($date));
 	$month = date('n', strtotime($date));
 	$day = date('j', strtotime($date));
        // 年を跨ぐ場合
 	if ($month + $add_month > 12) {
 		$year++;
 		$month = $month + $add_month - 12;
 	} else {
 		$month = $month + $add_month;
 	}
        // 算出結果の日付を返す
 	if (checkdate($month, $day, $year)) {
 		return date('Y-m-d', strtotime(sprintf('%04d-%02d-%02d', $year, $month, $day)));
 	} else {
            // 2月31日などになった場合、月末の日付を返す
 		return date('Y-m-d', strtotime(sprintf('%04d-%02d-01 -1 day', $year, ($month+1))));
 	}
 }
} // end_class
?>