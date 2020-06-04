<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
require_once(LIBPATH.'address.php');
require_once(LIBPATH.'Chromephp.php');

//require('Spreadsheet/Excel/Writer.php');

//===========================================
// Search   class
//    パンフ検索  module
//===========================================
// echo  '<p>' .'search.php ' .date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
echo "<pre>". 'get ' ;
print_r($_GET);
echo "</pre>";
//
echo "<pre>". 'post ' ;
print_r($_POST);
echo "</pre>";
//echo "<pre>". 'session ' ;
//print_r($_SESSION);
//echo "</pre>";
class home01   extends view {
	
 //$property
 //var $smarty;
  //public $pub_rows00;
  //public $pub_bsy00;
  //public $pub_pmh_type00;
  //public $pub_pmh_sub00;
  public $pub_wk01;
  public $pub_wk00;
  public $pub_wk13;
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
  function main() {
	  ChromePhp::log('Hello console');
	  ChromePhp::log('home01');
	  //------------------------------------------
	  //  instance   
	  //------------------------------------------
	  // $form = new HTML_Quickform2('qform_smarty','POST',array('action' => 'index.php?module=dashboard01'));
	  if (isset($_POST['send1']) ) {
		   //一覧
			$this->_redirect('post_check01'); 
	   };
	    if (isset($_POST['send2']) ) {
		   //一覧
			$this->_redirect('post_check01'); 
	   };
	  
	 //------------------------------------
	 //ボタン 要素の追加
	 //------------------------------------
	//  $buttongroup = $form->addElement('group','buttons');
	//  $buttongroup ->addElement('submit','detail_c',array('style' => 'border:0px;background-color:#eeeeee;cursor:pointer;width:100px;','value'=>'edit'));
	  //$form->addRecursiveFilter('trim');
	  //-------------------------------------------
	  //フォームの出力or入力後処理
	  //-------------------------------------------
	  
      $obj = new addressoperation;
	//------------------------------------------
	//  年度計算    
	//------------------------------------------   
	
	  $year = date('Y');
      $month = date('m');
      $this_ndo = $obj ->get_financial_year($year, $month, 3);
      $last_ndo = intval($this_ndo) - 1; 
	  $next_ndo = intval($this_ndo) + 1;
	  $this_ndo_1 = intval($this_ndo) - 1;
	  $this_ndo_2 = intval($this_ndo) - 2;
	  $this_ndo_3 = intval($this_ndo) - 3;
	  $this_ndo_4 = intval($this_ndo) - 4;
	  $this_ndo_5 = intval($this_ndo) - 5;
	  $ndo_ary=array($next_ndo,$this_ndo,$this_ndo_1,$this_ndo_2,$this_ndo_3,$this_ndo_4,$this_ndo_5);
	  $ret1 = $this -> setChannel($ndo_ary,'ndo');    
  //---------------------------------------------
  //  Post key check 
  //---------------------------------------------	  	  
	$key_array0 = array();
	$key_array1 = array();
	if (empty($_POST['KEY'])) {
	  $key_array0 = explode(",",$_GET['id']);
	  $key_array0 = array_filter($key_array0,'strlen');
	  $key_array1 = array_map('trim',explode(',',$_GET['id']));	 
	} else {	   
	  $key_array0 = explode(",",$_POST['KEY']);
	  $key_array0 = array_filter($key_array0,'strlen');	 
	  $key_array1 = array_map('trim',explode(',',$_POST['KEY']));
	} 
	$key_ym= $obj->h(strval(substr($key_array1[0],2,2).$key_array1[1]));
	$key_bsy = $obj ->h($key_array1[2]);
	ChromePhp::log('keijo_ym-->' . $key_ym .  ': bsy-->' .$key_bsy);	 
	// $res2= $obj -> table($key_array1);
	//--------------------------------------------------
	//Jisseki 
	//--------------------------------------------------	
	 $sqls ="";
	 $sqls ='SELECT * FROM t_jisseki_wk01 as a '; 
	 $sqls = $sqls. ' where a.keijo_ym >= ? and a.keijo_ym <= ? and a.bsy_cd = ? ';
	 $sqls = $sqls. ' order by a.keijo_ym,a.bu_cd,a.bsy_cd ';
	 $res1 = array();
     $fr_ym =  substr($this_ndo_4,2,2) . '04';
	 $to_ym =  substr($next_ndo,2,2). '03';
	 $res0 = $obj -> getlist03_01($sqls,$fr_ym,$to_ym,$key_bsy);
	 if ($res0[RESFLAG] == TRUE) {
		 if (count($res0[RESDATA])  != 0) { 
           $res= $this -> sanitize($res0[RESDATA]);	   
		   //-------------------------------------------
		   //達成率　* 100 
		   //-------------------------------------------
		   for ($i = 0; $i < 60; $i++){
             for ($j = 6; $j < 31; $j=$j+3) {
			   if(!empty($res[$i][$j])) {
			     $res_xx=  round($res[$i][$j],3)*100;
			     $res[$i][$j] = $res_xx;
			
		       } else {
			     $res[$i][$j] = 0;
		       }			
			 }
			
		  }
		  //$res3= $obj -> tables($res);
		  //------------------------------------
		  // 本年度のみを抽出 --> $ary_this_ym
		  //------------------------------------
		  $res_this_ym = array();
	      for ($i = 0; $i < 60; $i++){ 
	        if ($res[$i][0] == $key_ym) {
	         $res_this_ym[0] = $res[$i];
		    }
	      }
		  //$res4= $obj -> tables($res_this_ym);
		  $xx1 = $this -> setChannel($res,'wk00');	
		  $xx2 = $this -> setChannel($res_this_ym,'wk01');		  
		  $this->createform(NULL,$res);	
	 } else {	
	   echo  '<p>' .'date exception => ' . $sql ."</p>\n";     
	  $this -> createform(NULL,NULL);
	 }  //end if
	  $obj->dbend();
   } else  {		     
     echo  '<p>' .'data invalid => ' . $sql ."</p>\n";
	 $this -> createform(NULL,NULL); 
   }   // end if	
	 
	
	 
}  // end_function
 //===========================================
 // フォームの表示
 //===========================================
	function createForm($form,$rows){
        $smarty = $this->getsmarty();
		//HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
		//$renderer = HTML_QuickForm2_Renderer::factory('smarty');
		//$renderer->setOption('old_compat', true);
		//$renderer->setOption('group_errors', true);

		// フォームの作成
		//$FormData = $form->render($renderer)->toArray();
		//$smarty->assign('form', $FormData);
			
        $smarty->assign('res',$rows);
		//$smarty->assign('pagedata', $rows['data']);
		$smarty->left_delimiter = '!!-{';
        $smarty->right_delimiter = '}-!!';
	   
		//-----------------------------------------
		//	連想配列-->配列  javascript に渡すため
		//------------------------------------------
		// t_jisseki_wk01
		//for ($i = 0 ; $i < count($rows); $i++) {
		//  $val_array1[]= array_values($rows[$i]);
		//}  
		//$val_array2 =  $this ->json_safe_encode($val_array1);
		// t_pmh_sub01  
        //for ($i = 0 ; $i < count($this->pub_pmh_sub00); $i++) {
		//  $val_array11[]= array_values($this->pub_pmh_sub00[$i]);
		//}   
        //$val_array12=  $this ->json_safe_encode($val_array11);
		//-----------------------------------------------
		//java用にencode  連想配列ではなく配列を渡すこと
		//-----------------------------------------------		
	    $smarty->assign("data_json", $val_array2); 
		$smarty->assign("pmh_sub_json", $val_array12);
		//var_dump ($val_array12);
		//
		//var_dump($this->pub_bsy00);
		$smarty->assign("wk01", $this->pub_wk01);
		$smarty->assign("wk00", $this->pub_wk00);
		//$smarty->assign("ary_pmh_type", $this->pub_pmh_type00);
		//$smarty->assign("ary_pmh_sub",  $this->pub_pmh_sub00);
		$smarty->assign("ndo", $this->pub_ndo); 
		$smarty->assign("se_user_id", $_SESSION[USER_ID]);
		$smarty->assign("se_picture", $_SESSION[PICTURE]);
		$smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
		$smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
		$xxx_html = 'home01_test02.html';
		$smarty->display($xxx_html);
	}// FUNCTION
		

	
function json_safe_encode($data){
    return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
}
// end function
//------------------------------------------------------
//  配列に　htmlspecialcharsをかける
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
	 case 'wk01':
	   $this->pub_wk01 =$row01;
	   break;
	 case 'wk00':
	   $this->pub_wk00 =$row01;
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
//--------------------------------
//
//----------------------------------

} // end_class

 ?>