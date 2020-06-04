<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
require '../../vendor/autoload.php';
require_once(LIBPATH.'address.php');
require_once(LIBPATH.'Chromephp.php');
//require_once(LIBPATH.'dw_sheet01.php');
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
class download01   extends view {
//$property
var $smarty;
//	public $pub_wk03;
//	public $pub_wk13;
	public $pub_ndo;
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
//  pamph 一覧情報　取得 
//===========================================
function main()
{
	$obj = new addressoperation;
	ChromePhp::log('Hello console');
	ChromePhp::log('download01');
  //------------------------------------------
  //  年度計算
  //------------------------------------------
	$year = date('Y');
	$month = date('m');
	$this_ndo = intval($obj ->get_financial_year($year, $month, 3));
	$last_ndo = intval($this_ndo) - 1;
	$next_ndo = intval($this_ndo) + 1;
	$this_ndo_1 = intval($this_ndo) - 1;
	$this_ndo_2 = intval($this_ndo) - 2;
	$this_ndo_3 = intval($this_ndo) - 3;
	$this_ndo_4 = intval($this_ndo) - 4;
	$this_ndo_5 = intval($this_ndo) - 5;

	$ndo_ary=array($next_ndo,$this_ndo,$this_ndo_1,$this_ndo_2,$this_ndo_3,$this_ndo_4,$this_ndo_5);
	$ret1 = $this -> setChannel($ndo_ary,'ndo');
	// echo 'ndo--->' .  $this_ndo;
	//-------------------------------------------------
	//  Download ボタンが押されたとき
	//--------------------------------------------------

	if (isset($_POST[P_ORDER_SHEET01])) {
		$cls = new dw_sheet01();
		$sf1 = $cls-> setChannel($this->pub_pmh_sub00,'1');
		$sf2 = NULL;
		exit();

	} else {
	}
	//------------------------------------------
	//  instance
	//------------------------------------------
	$form = new HTML_Quickform2('qform_smarty','POST',array('action' => 'index.php?module=download01'));
	//--------------------------------------------------
	// kaiko
	//--------------------------------------------------
	$res1 = array();
	// $ary_kaiko1 = array('-------' => '-------');
	$ary_kaiko = array();
			 // echo date('Ym');
	for ($count = -36; $count < 24; $count++){
		$datess = new DateTime("$count  months");
		$dates=  $datess->format('Ym');
		$ary_kaiko +=  array($dates => $dates);
	} // end for
	//------------------------------------
	//ボタン 要素の追加
	//------------------------------------
	$id_form = $form->addElement('hidden','action');
	$attr_select2= array('class' => 'form-control select2');
	$kaiko_fr_c = $form->addElement('select','kaiko_fr_c',array('class' => 'states','style' => 'width:120px;heigth:25px;font-size:14px;'),array('options' =>$ary_kaiko))
			->setlabel("Kaiko_fr:");
	$kaiko_to_c = $form->addElement('select','kaiko_to_c',array('class' => 'states','style' => 'width:120px;heigth:25px;font-size:14px;'),array('options' =>$ary_kaiko))
			->setlabel("Kaiko_to:");
	$nko_ymd_c = $form->addElement('text','nko_ymd_c',array('class' => 'form-control datepicker','style'=>'width:090px;height:20px;'),array('label' => "Nko_ymd"));
    $kaiko_chk_c = $form->addElement('text','kaiko_chk_c',
	   array('style' => 'width: 10px;display: none;'),array('label' => "kaiko_chk_c:"));

    //-------------------------------------------------
	//  初期値
	//--------------------------------------------------
	//$nko_ymd_c -> setvalue('yyyy-mm-dd');
	//-------------------------------------------------
	//  validation
	//--------------------------------------------------
    //-------------------------------------------
	//  smarty用 Validation must 必須項目
	//-------------------------------------------
	$kaiko_fr_c->addrule('required',KAIKOEMPTY);
    $kaiko_to_c->addrule('required',KAIKOEMPTY);
    $nko_ymd_c->addrule('required',REPYMDEMPTY);
	$nko_ymd_c->addrule('regex',REPYMDEMPTY,'/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/');
	//-------------------------------------------
	//  Filter
	//-------------------------------------------
	$kaiko_fr_c ->addfilter('htmlspecialchars');
    $kaiko_to_c ->addfilter('htmlspecialchars');
    $nko_ymd_c ->addfilter('htmlspecialchars');
    //-------------------------------------------
	//  kaiko fr-to check
	//-------------------------------------------
    $kaiko_chk_c->setvalue('T');
    $kaiko_fr_xx  = $kaiko_fr_c -> getvalue();
    $kaiko_to_xx  = $kaiko_to_c -> getvalue();
    //$flg = $this ->myrule01($pmh_type_xx,$dantai_cd_xx);
	switch ($kaiko_fr_xx <= $kaiko_to_xx)  {
	  case TRUE:
	    $kaiko_chk_c->setvalue('T');
	     break;
	 case FALSE:
	    $kaiko_chk_c->setvalue('F');
	     break;
	 default:
	    $kaiko_chk_c->setvalue('T');
        break;
	}
	$kaiko_chk_c->addrule('regex', 'check: '.KAIKOFRTO,'/^[T]+$/');
 	//-------------------------------------------
	//  Trim
	//-------------------------------------------
	 $form->addRecursiveFilter('trim');
 	//------------------------------------------
	//  詳細ボタン
	//------------------------------------------
	//if (isset($_POST['send0']) ) {
	//	$data = file_get_contents("template/Data_guide_temp01.html");
    //   $data = str_replace('<p>2017/4開講～2019/12開講</p>' ,'<p>' . $_POST['kaiko_fr_c'] .'開講～' . $_POST['kaiko_to_c'].'開講'.'</p>', $data);
    //    $data = str_replace('2018/05/28',$_POST['nko_ymd_c'], $data);
    //    $ans = file_put_contents("template/Data_guide_temp02.html" , $data);
    //    if ($ans) { print "とりあえず、書き込みはしたみたい"; } else { print "なんか、失敗したっぽい"; }
		//$this->_redirect('upd_check02');
	//};
	//-------------------------------------------
 	//
 	//-------------------------------------------
	ChromePhp::log('vali--->'. $form->validate());
	if ($form->validate())  {
		if (isset($_POST['send0']) ) {
		  //html edit
		  $data = file_get_contents("template/Data_guide_temp01.html");
          //$data = str_replace('<p>2017/4開講～2019/12開講</p>' ,'<p>' . $_POST['kaiko_fr_c'] .'開講～' . $_POST['kaiko_to_c'].'開講'.'</p>', $data);
          $data = str_replace('2017/4',$_POST['kaiko_fr_c'], $data);
          $data = str_replace('2019/12',$_POST['kaiko_to_c'], $data);
          $data = str_replace('2018/05/28',$_POST['nko_ymd_c'], $data);
          $ans = file_put_contents("template/Data_guide_temp02.html" , $data);
          
          if ($ans) { //print "とりあえず、書き込みはしたみたい";
            $this->_redirect('upd_check02');
          } else { print "書込み。。。なんか、失敗したっぽい";
          }
	    } else {
	    	$this->createForm($form);
	    };
	} else {
		ChromePhp::log('normal');
	    $this->createForm($form);
	}  // end if  validate
	$obj->dbend();
	//$this -> createform($form);
   	//$res2 = $obj -> tables($res);
}  // end_function
//===========================================
// フォームの表示
//===========================================
function createForm($form){
	$smarty = $this->getsmarty();
	HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
	$renderer = HTML_QuickForm2_Renderer::factory('smarty');
					//$renderer->setOption(array('required_note' => "<em>*</em> 記入必須項目"));
	$renderer->setOption('old_compat', true);
	$renderer->setOption('group_errors', true);

	// フォームの作成
	$FormData = $form->render($renderer)->toArray();
	$smarty->assign('form', $FormData);

	//$smarty->assign('res',$rows);
	//$smarty->assign('wk03',$this->pub_wk03);
	//$smarty->assign('wk13',$this->pub_wk13);
	$smarty->assign('ndo_ary',$this->pub_ndo);
					//print_r($this->pub_wk03);
	$smarty->left_delimiter = '!!-{';
	$smarty->right_delimiter = '}-!!';

	//-----------------------------------------
	//	連想配列-->配列  do not delete
	//------------------------------------------
	//for ($i = 0 ; $i < count($this->pub_ndo); $i++) {
	//  $val_array1[]= array_values($this->pub_ndo[$i]);
	//}
	$val_array2=array();
	$val_array2=  $this ->json_safe_encode($this->pub_ndo);
				    //print_r($val_array2);
	$smarty->assign("ndo", $val_array2);
	$val_array2=array();
	$val_array2=  $this ->json_safe_encode($this->pub_wk03);
	$smarty->assign("json_wk03", $val_array2);
	$val_array2=array();
	$val_array2=  $this ->json_safe_encode($this->pub_wk13);
	$smarty->assign("json_wk13", $val_array2);
	//-----------------------------------------------
	// nendo
	//-----------------------------------------------
	//-----------------------------------------------
	//java用にencode  連想配列ではなく配列を渡すこと
    //-----------------------------------------------
	//$val_array2=  $this ->json_safe_encode($val_array0);
	//$val_array2=  $this ->json_safe_encode($rows);
	$val_array2=  $this ->json_safe_encode($val_array1);
	$smarty->assign("ndo", $val_array2);
	$smarty->assign("se_user_id", $_SESSION[USER_ID]);
	$smarty->assign("se_picture", $_SESSION[PICTURE]);
	$smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
	$smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
	//$smarty->display('download01_01.html');
	$smarty->display('download01.html');


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
function setChannel($row01,$sw){
		switch ($sw) {
			case 'wk03':
			$this->pub_wk03 =$row01;
			break;
			case 'wk13':
			$this->pub_wk13 =$row01;
			break;
			case 'ndo':
			$this->pub_ndo =$row01;
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
} // end_class
?>