<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
require '../../vendor/autoload.php';
require_once(LIBPATH.'address.php');
require_once(LIBPATH.'encode.php');
//require('Pager/Pager.php');
//require_once(LIBPATH.'Chromephp.php');
require_once(LIBPATH.'pmh_search_sheet01.php');
//require('Spreadsheet/Excel/Writer.php');

//===========================================
// Search   class
//    パンフ検索  module
//  $session-----------------------------
//   kgo_nm_q
//   p_id_q
//   has_ira_ymd_fr_q
//   has_ira_ymd_to_q
//===========================================
// echo  '<p>' .'search.php ' .date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
//echo "<pre>". 'get ' ;
//print_r($_GET);
//echo "</pre>";
//
//echo "<pre>". 'post ' ;
//print_r($_POST);
//echo "</pre>";
//echo "<pre>". 'session ' ;
//print_r($_SESSION);
//echo "</pre>";

//if (isset($_POST['kgo_nm_q']) === TRUE) { 
//   $_SESSION['kgo_nm_q'] = e($_POST['kgo_nm_q']); 
//}
//if (isset($_POST['p_id_q']) === TRUE) { 
//   $_SESSION['p_id_q'] = e($_POST['p_id_q']); 
//}
//if (isset($_POST['has_ira_ymd_fr_q']) === TRUE) { 
//   $_SESSION['has_ira_ymd_fr_q'] = e($_POST['has_ira_ymd_fr_q']); 
// } else {
//   $_SESSION['has_ira_ymd_fr_q'] = '1900-01-01';  }
//if (isset($_POST['has_ira_ymd_to_q']) === TRUE) { 
//   $_SESSION['has_ira_ymd_to_q'] = e($_POST['has_ira_ymd_to_q']); 
//} else {
//   $_SESSION['has_ira_ymd_to_q'] = '2099-12-31';  }
class search   extends view {
 //$property
 //var $smarty;
  public $pub_rows00;
  //public $pub_settei_inf00;
  public $pub_nko_view00;
  public $pub_pmh_sub00;
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
	  //ChromePhp::log('Hello console');
	  //ChromePhp::log('search');
       if (isset($_POST['send1']) ) {
		   //一覧
			$this->_redirect('post_check01');
	   };
	  if (isset($_POST['pmh_inf']) ) {
		   //一覧
		//$_SESSION['p_nm_pmf_inf_view'] = NULL;
        //$_SESSION['p_id_pmh_inf_view'] = NULL;
		$this->_redirect('pmh_inf_view01');
	   };
	  //  if (isset($_POST['send2']) ) {
		   //一覧
//			$this->_redirect('pmh_infpost_check01');
	//   };
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
	  //------------------------------------------
	  //  instance
	  //------------------------------------------
	   $form = new HTML_Quickform2('qform_smarty','POST',array('action' => 'index.php?module=search'));
	  $attr_fancy_sel= array('class' => 'fancy_sel');
	  $attr_styled_sel= array('class' => 'styled');
	  $attr_mydate= array('class' => 'mydate');
	  $attr_states= array('class' => 'states');
      $attr_onoff= array('class' => 'on_off');
      $attr_maskmoney= array('class' => 'com3');
	  //------------------------------------------
	  //  form 要素の構築
	  //------------------------------------------
	   //$search = $form->addElement('text','search',array('style' => 'width: 100px;'),array('label' => "検索:"));
	   $ary_tes_sts = array(''=> '','0'=>'0','1'=>'1','9'=>'9');
	   $p_id_q = $form->addElement('text','p_id_q',array('style' => 'width: 70px;color:#999999;border-style: none;','placeholder' =>'P_id'),array('label' => "P_id:"));
	   //$has_ira_ymd_fr_q = $form->addElement('text','has_ira_ymd_fr_q',array('style' => 'width: 150px;'),array('label' => "依頼日:"));
	   $kgo_nm_q = $form->addElement('text','kgo_nm_q',array('style' => 'width: 175px;color:#999999;border-style: none;','placeholder' =>'企　業'),array('label' => "企業:"));
	   //$has_ira_ymd_to_q = $form->addElement('select','has_ira_ymd_to_q',array('class' => 'fancy_sel','style' => 'width: 50px;'),array('options' => $ary_tes_sts))		->setlabel( "依頼日：");
	   $has_ira_ymd_fr_q= $form->addElement('text','has_ira_ymd_fr_q',array('class' => 'form-control datepicker',
	   	   'style' =>'width:100px;height:23px;','placeholder' =>'依頼日FR'),array('label' => "依頼日FR"));
	   $has_ira_ymd_to_q= $form->addElement('text','has_ira_ymd_to_q',array('class' => 'form-control datepicker',
	   'style' =>'width:100px;height:23px;','placeholder' =>'依頼日TO'),array('label' => "依頼日TO"));
	 //------------------------------------
	 //  Rule
	 //------------------------------------
	   //$p_id_q ->addRule('regex',"Pamph_id 数字5桁です！",'/^[0-9]{5}$/');
	   //echo  '<p>' .'kgo_nm_q => ' . $_SESSION['kgo_nm_q'] ."</p>\n";
	 //------------------------------------
	 //ボタン 要素の追加
	 //------------------------------------
	  $buttongroup = $form->addElement('group','buttons');
	  $buttongroup ->addElement('submit','send',array('style' => 'border:0px;background-color:transparent;cursor:pointer','value'=>'Search'));
	$form->addRecursiveFilter('trim');
      //-------------------------------------------
	  //  Filter
	  //-------------------------------------------
	   $p_id_q ->addFilter('htmlspecialchars');
	   $has_ira_ymd_fr_q ->addFilter('htmlspecialchars');
	   $kgo_nm_q ->addFilter('htmlspecialchars');
	   $has_ira_ymd_to_q ->addFilter('htmlspecialchars');
	  //-------------------------------------------
	  //  Trim
	  //-------------------------------------------
	    $form->addRecursiveFilter('trim');
	 //------------------------------------
	 //ボタン 要素の追加
	 //------------------------------------
	  //$buttongroup = $form->addElement('group','buttons');
	  //$buttongroup ->addElement('submit','detail_c',array('style' => 'border:0px;background-color:#eeeeee;cursor:pointer;width:100px;','value'=>'edit'));
	  //-------------------------------------------
	  //フォームの出力or入力後処理
	  //-------------------------------------------
      $obj = new addressoperation;
	  $kgo_nm_xx = '';
	  $p_id_xx = '';
	  $has_ira_ymd_fr_xx = '1900-01-01';
	  $has_ira_ymd_to_xx = '2099-12-31';
		   //echo  '<p>' .'ad_nmm ' . $ad_nm_xx ."</p>\n";
	  if (isset($_POST[P_RESET]) ) {
		$kgo_nm_xx = '';
	    $p_id_xx = '';
	    $has_ira_ymd_fr_xx = '1900-01-01';
		$has_ira_ymd_to_xx = '2099-12-31';
		$kgo_nm_q ->setvalue(NULL);
		$p_id_q -> setvalue(NULL);
		$has_ira_ymd_fr_q ->setvalue(NULL);
		$has_ira_ymd_to_q ->setvalue(NULL);   }
	   else {
		   if(!empty($_SESSION['kgo_nm_q']) ) {
		     $kgo_nm_xx = mb_convert_kana(mb_strtoupper($_SESSION['kgo_nm_q']), 'ASKV'); }
		   if(!empty($_SESSION['p_id_q']) ) {
		     $p_id_xx = $_SESSION['p_id_q']; }
		  // if(isset($_SESSION['kaiko_q']) ) {
		  //   $kaiko_xx = $_SESSION['kaiko_q']; }
		   if(!empty($_SESSION['has_ira_ymd_fr_q']) ) {
		     $has_ira_ymd_fr_xx = $_SESSION['has_ira_ymd_fr_q'];
		   } else {
			 $has_ira_ymd_fr_xx = '1900-01-01';
		   }
		   if(!empty($_SESSION['has_ira_ymd_to_q']) ) {
		     $has_ira_ymd_to_xx = $_SESSION['has_ira_ymd_to_q'];
		   } else {
			 $has_ira_ymd_to_xx = '2199-12-31';
		   }
	   }
	  //echo 'ira_ymd_to--->' . $has_ira_ymd_to_xx;
	  $strsql ='';
	  $strsql = 'SELECT a.p_id,a.p_no_seq,a.kaiko,a.noki,a.kgo_nm,a.flg,a.has_ira_ymd,a.has_ymd,a.seq,a.filler,';      $strsql = $strsql . "a.upd_ymd,to_char(a.cre_ymd,'yyyy-mm-dd') as cre_ymd,a.p_nd,b.p_nm,v.p_id as reds ";
	  $strsql = $strsql . " FROM t_uke as a join t_pmh_inf as b on a.p_id=b.p_id and a.p_nd = b.p_nd ";
	  $strsql = $strsql . ' left join (SELECT p_id,p_no_seq FROM v_nko GROUP BY p_id,p_no_seq) as v on v.p_id=a.p_id and a.p_no_seq = v.p_no_seq ';
	  $strsql = $strsql . ' WHERE a.p_id like :p_id and a.kgo_nm like :kgo_nm and ';
	  $strsql = $strsql . " coalesce(a.has_ira_ymd,'1900-01-01') >= :has_ira_ymd_fr and ";
	  $strsql = $strsql . " coalesce(a.has_ira_ymd,'1900-01-01') <= :has_ira_ymd_to ";
	  $strsql = $strsql . ' order by a.upd_ymd desc,a.has_ira_ymd asc,a.p_id asc ';
	  //echo $strsql;
	  $res1 = $obj-> searchpamph_04_01($strsql,$p_id_xx,$kgo_nm_xx, $has_ira_ymd_fr_xx, $has_ira_ymd_to_xx);
	  $count=count($res1[RESDATA]);
	  if (count($res1[RESDATA]) == 0) {
	 	  //ChromePhp::log('t_settei_inf01 invalid');
	     echo "<span sytle=\"color:#FF0000\">". 't_uke invalid --->'. "</span>";
		 $this->createform($form,NULL);
         $obj->dbend();
		 exit();
		 } else {
		  $ary_pmh_sub = array();
	      $ary_pmh_sub = $this -> sanitize($res1[RESDATA]);
	      //var_dump($ary_pmh_sub);
		  $ret1 = $this -> setChannel($ary_pmh_sub,'pmh_sub');
	  }
	 //$ret = $obj ->table($ary_pmh_sub);
//--------------------------------------------------
//入出庫差  color
//--------------------------------------------------
  for ( $j= 0; $j < $count; ++$j){
    if (preg_match("/^[a-zA-Z0-9]+$/", $ary_pmh_sub[$j]['reds'])) {
      //echo "すべて半角英数である";
	  $ary_pmh_sub[$j]['reds'] = 'color: #ff3399';
    } else {
      $ary_pmh_sub[$j]['reds'] = 'color: #333333';
    }
  }
      //$ret = $obj ->table($ary_pmh_sub);

	  //-------------------------------------------------
	 //  excel ボタンが押されたとき
	 //--------------------------------------------------
	 if (isset($_POST[P_EXCEL])) {
		  $cls = new pmh_search_sheet01();
		  //ChromePhp::log($res[RESDATA][0]);
		  //$sf1 = $cls-> setChannel( $this->pub_rows00,'1');
		  $sf1 = $cls-> set_sheet01($ary_pmh_sub);
	      $sf2 = NULL;
		  switch ($count) {
			case 0:
			   $this->smarty->assign('msg01','抽出件数　０件でした！');
			   $this->smarty->assign('color','warning');
			   break;
			case NULL:
			   $this->smarty->assign('msg01','抽出件数　０件でした！');
			   $this->smarty->assign('color','warning');
			   break;
			default:
			   $this->smarty->assign('msg01','シートが作成できました！');
			   $this->smarty->assign('color','success');
			   break;
		  }
		  //echo 'aaa--->' . $sf1;
		  $pmh_sht01='Pamphlet データ抽出 ::: ' . $ary_pmh_sub[0]['p_nm'];
		  $this->smarty->assign('tytle','Pamphlet Data Sheet');
		  //$this->smarty->assign('pmh_sht01',$pmh_sht01);
		  //$this->smarty->assign('p_id',$p_id);
		  //$this->smarty->assign('p_no',$p_no);
		  $this->smarty->assign('sf1',$sf1);
		  $this->smarty->assign('xxx',$_GET['module']);
		  $this->smarty->display('sht_check02.html');
		  exit();
		} else {
		}
      //------------------------------------
	  //  データを取得できたか？
	  //------------------------------------
	  if ($res1[RESFLAG] == TRUE) {
	    if (count($res1[RESDATA])  != 0)  {
	      //$total_items = count($res1[RESDATA]);
		  //$ary_pmh_sub = $this -> sanitize($res1[RESDATA]);
		  //$ret1 = $this -> setChannel($ary_pmh_sub,'pmh_sub');
		  //$this->table($ary_pmh_sub);
		   $this->createform($form,$ary_pmh_sub);
	      //$this->createform($form,$rows);
	     } else {
			 $this -> createform($form,NULL);
			  //ChromePhp::log('data select exception!! 1');
		  }  //end if
			   $obj->dbend();
	   } else  {
	      //ChromePhp::log('data select exception!!   2');
		  $this -> createform($form,NULL); 
	   }   // end if
   	   //
	 $obj->dbend();
}  // end_function
 //===========================================
 // フォームの表示
 //===========================================
	function createForm($form,$rows){
        $smarty = $this->getsmarty();
		//HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
		//$renderer = HTML_QuickForm2_Renderer::factory('smarty');
		//$renderer->setOption(array('required_note' => "<em>*</em> 記入必須項目"));
		//$renderer->setOption('old_compat', true);
		//$renderer->setOption('group_errors', true);

		// フォームの作成
		//$FormData = $form->render($renderer)->toArray();
		//$smarty->assign('form', $FormData);
		//
        $smarty->assign('res',$rows);
		//$smarty->assign('pagedata', $rows['data']);
		$smarty->left_delimiter = '!!-{';
        $smarty->right_delimiter = '}-!!';
	   	//$smarty->assign('ary_pmh_sub', $this->pub_pmh_sub00);
		//$smarty->assign('ary_crs_view', $this->pub_crs_view00);
		$smarty->assign('aa','bb');
		//-----------------------------------------
		//	連想配列-->配列  do not delete
		//------------------------------------------
		for ($i = 0 ; $i < count($rows); $i++) {
		  $val_array1[]= array_values($rows[$i]);
		}
		//-----------------------------------------------
		//java用にencode  連想配列ではなく配列を渡すこと
		//-----------------------------------------------
		//$val_array2=  $this ->json_safe_encode($val_array0);
		//$val_array2=  $this ->json_safe_encode($rows);
	    $val_array2=  $this ->json_safe_encode($val_array1);
	    $smarty->assign("data_json", $val_array2);
		 $smarty->assign("konma", ",");
		//echo '<p> cnt:' . $total_items . '</p>';
		$smarty->assign('ary_nko_view', $this->pub_nko_view00);
		$smarty->assign("se_user_id", $_SESSION[USER_ID]);
		$smarty->assign("se_picture", $_SESSION[PICTURE]);
		$smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
		$smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
		//$smarty->display('datatable01.html');
		//$smarty->display('dashboard02.html');
	    $smarty->display('search.html');

	}// FUNCTION
function json_safe_encode($data){
    return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
}
// end function
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
	  case 'nko_view':
	   $this->pub_nko_view00 =$row01;
	    break;
	 default:
	   break;
	}
	//var_dump ('rows01=>' . $row01);
   //$sf2 = $this->dispChannel();
   //return $sf2;
  } // end function
     function get_financial_year($year, $month, $financial_month){

    if($month > $financial_month){
        return $year;
    } else {
        return $year - 1;
    }
  } // end function


} // end_class

 ?>