<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
require '../../vendor/autoload.php';
require_once(LIBPATH.'address.php');
require_once(LIBPATH.'Chromephp.php');
require_once(LIBPATH.'encode.php');
require_once(LIBPATH.'excel_out02_spread.php');
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
class rank_view01   extends view {
 //$property
 var $smarty;
  public $pub_rows00;
  public $pub_jsk_view00;
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
	  ChromePhp::log('rcp_detail_view01');
	$obj = new addressoperation;
 //------------------------------------------
 //  年度計算
 //------------------------------------------
    $year = date('Y');
    $month = date('m');
    $this_ndo = $obj ->get_financial_year($year, $month, 4);
    $last_ndo = intval($this_ndo) - 1;
    $next_ndo = intval($this_ndo) + 1;
    $this_ndo_1 = intval($this_ndo) - 1;
    $this_ndo_2 = intval($this_ndo) - 2;
    $this_ndo_3 = intval($this_ndo) - 3;
    $this_ndo_4 = intval($this_ndo) - 4;
    $this_ndo_5 = intval($this_ndo) - 5;
    $ndo_ary=array($next_ndo,$this_ndo,$this_ndo_1,$this_ndo_2,$this_ndo_3,$this_ndo_4,$this_ndo_5);
    $ret1 = $this -> setChannel($ndo_ary,'ndo');
 //--------------------------------------------
 //  Post GET key check
 //  $_GeT['id'] bsy_cd,keijo_fr,keijo_to
 //---------------------------------------------
	if (empty($_GET['ID'])) {
	 // $key_array2 = array();
	 // $key_array2 =array($_POST['p_id_c'],$_POST['p_no_seq_c'],$_POST['call_c']);
      // var_dump($key_array1);
	  $key_array0 = array();
	  $key_array0 = explode(",",$_GET['id']);
	  $bsy_cd_w = $key_array0[0];
	  $keijo_ym_fr_w = $key_array0[1];
	  $keijo_ym_to_w = $key_array0[2];
	  ChromePhp::log('bsy_cd-->' . $bsy_cd_w . ':keijo_fr-->' .$keijo_ym_fr_w );
	} else {
	  $bsy_cd_w = 'ALL';
	  $keijo_ym_fr_w = '0000';
	  $keijo_ym_to_w = '9999';
	}
 //--------------------------------------------
 //  sql create
 //---------------------------------------------
	$key_array= array();
	switch (true) {
		case empty($keijo_ym_fr_w) && empty($keijo_ym_to_w):
		  $key_array +=array('keijo_ym >= ?'=> "00000000");
		  $key_array +=array('keijo_ym <= ?'=> "99999999");
		  break;
		case (!empty($keijo_ym_fr_w)) && empty($keijo_ym_to_w):
		  $key_array +=array('keijo_ym >= ?'=> $keijo_ym_fr_w);
		  $key_array +=array('keijo_ym <= ?'=> $keijo_ym_fr_w);
		  break;
		case   empty($keijo_ym_fr_w)  && (!empty($keijo_ym_to_w)):
		  $key_array +=array('keijo_ym >= ?'=> $keijo_ym_to_w);
		  $key_array +=array('keijo_ym <= ?'=> $keijo_ym_to_w);
		  break;
		case (!empty($keijo_ym_fr_w)) && (!empty($keijo_ym_to_w)):
	       if (intval($keijo_ym_fr_w) <= intval($keijo_ym_to_w)) {
			 $key_array +=array('keijo_ym >= ?'=> $keijo_ym_fr_w);
		     $key_array +=array('keijo_ym <= ?'=> $keijo_ym_to_w);
		   } else {
			 $keijo_ym_chk_c->setvalue('F');
		   }
		  break;
	}
	//if (empty($_POST['typ_c'])) {
	//	  } else {
	//	$key_array += array('type' => $_POST['typ_c']);
	//  }
	if ($bsy_cd_w <> 'ALL') {
		$key_array += array('bsy_cd' => $bsy_cd_w);
	} else {}
	//
	$conditions = array(
              "t_jisseki_wk01" =>array(
               "conditions"=>$key_array
           )  // end array
          );    // end conditions
	$sql01 = $obj -> mkSQL($conditions);
	$sqls =str_replace(';','',$sql01);
	$sqls = $sqls . ' order by keijo_ym;';
	//echo '<p>' . '====sql === ' . $sqls . "</p>\n";
//------------------------------------------
//  instance
//------------------------------------------
	$form = new HTML_Quickform2('qform_smarty','POST',array('action'=>'index.php?module=rank_view01'));
//--------------------------------------------------
//t_jisseki
//--------------------------------------------------
	$res1 = array();
	$ary_crs_view = array();
    //  $ary_crs_view+= array('');
    $res1 = $obj -> getlist01($sqls);
    $cnt = count($res1[RESDATA]);
    if ($cnt == 0) {
      echo "<span sytle=\"color:#FF0000\">".'DATA exception-> t_jisseki -->'.  $key_array1[0] . ',' . $key_array1[1]."</span>";
	  $this->createform($form,NULL);
      $obj->dbend();
	  exit();
	} else {
	  $res = $this -> sanitize($res1[RESDATA]);
	 //-------------------------------------------
	 //達成率 * 100
	 //-------------------------------------------
	  for ($i = 0; $i < $cnt ; $i++){
        for ($j = 6; $j < 31; $j=$j+3) {
		   if(!empty($res[$i][$j])) {
		     if($res[$i][$j]!==0) {
		       $res_xx=  round($res[$i][$j],3)*100;
			   $res[$i][$j] = $res_xx;
	          } else {
		        $res[$i][$j] = 0; }
		    } else {
		     $res[$i][$j] = 0;
	       }
	    }
	   }
     //-------------------------------------------
	 //実績=0--->達成率=0
	 //-------------------------------------------
      for ($i = 0; $i < $cnt ; $i++){
        for ($j = 5; $j < 30; $j=$j+3) {
		   if(!empty($res[$i][$j])) {
		     if($res[$i][$j]!==0) {
	          } else {
		        $res[$i][$j+1] = 0; }
		    } else {
	       }
	    }
	   }
	}
    //$res2= $obj -> table($res);
    $ret1 = $this -> setChannel($res,'jsk_view');
//-----------------------------------
//  excel out
//-----------------------------------
if (isset ($_POST['excel01'])) {
    $cls = new excel_out02_spread();
    $sf1 = $cls-> setChannel($res);
    //echo('sf--->'. $sf1);
    $pmh_select01= '実績データ_Download !';
	$this->smarty->assign('title',$pmh_select01);
	$this->smarty->assign('sf1',$sf1);
	$this->smarty->display('upd_check03.html');
	//------ shori log ----------
	$IP = $_SERVER['REMOTE_ADDR'];
	$ares = $obj -> upd_pmh_log01('PHP:Pamph_book:Search',$total_items,$sql,get_current_user(),
	gethostbyaddr($IP),'Search',date("Y-m-d H:i:s"),'ins');
	exit();
} else {} // end if
//-----------------------------------
//  create form
//-----------------------------------
	  $dsp ='rank_view01.html';
	  if ($res1[RESFLAG] == TRUE) {
		 if (count($res1[RESDATA])  != 0) {
           //$res= $this -> sanitize($res1[RESDATA]);
	  	   $this->createform($form,$dsp);
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
	function createForm($form,$dsp){
        $smarty = $this->getSmarty();
		HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
		$renderer = HTML_QuickForm2_Renderer::factory('smarty');
		$renderer->setOption(array('required_note'  => "<em>*</em> 記入必須項目"));
	    $renderer->setOption('old_compat', true);
		$renderer->setOption('group_errors', true);
		// フォームの作成
		$FormData = $form->render($renderer)->toArray();
		$smarty->assign('form', $FormData);
		//
		$smarty->assign('res',$this ->pub_jsk_view00);
		$smarty->left_delimiter = '!!-{';
        $smarty->right_delimiter = '}-!!';
		//-----------------------------------------
		//	連想配列-->配列  do not delete
		//------------------------------------------
		//for ($i = 0 ; $i < count($rows); $i++) {
		//  $val_array1[]= array_values($rows[$i]);
	//	}
		//-----------------------------------------------
		//java用にencode  連想配列ではなく配列を渡すこと
		//-----------------------------------------------
		//$val_array2=  $this ->json_safe_encode($val_array0);
		//$val_array2=  $this ->json_safe_encode($rows);
	    //$val_array2=  $this ->json_safe_encode($val_array1);
	    //$this->smarty->assign("data_json", $val_array2);
		$smarty->assign("se_user_id", $_SESSION[USER_ID]);
		$smarty->assign("se_picture", $_SESSION[PICTURE]);
		$smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
		$smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
		$smarty->display($dsp);
	}// FUNCTION

function json_safe_encode($data){
    return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
}
// end function
//------------------------------------------------------
//  配列に　htmlspecialcharsをかける
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
	 case 'jsk_view':
	   $this->pub_jsk_view00 =$row01;
	   break;
	 case 'pmh_sub':
	   $this->pub_pmh_sub00 =$row01;
	   break;
	 default:
	   break;
	}
	//var_dump ($row01);
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
//--------------------------------
//
//----------------------------------
function myDiv($a, $b){
  $result = $a / $b;
  return number_format((float)$result, 2);
}
} // end_class

 ?>