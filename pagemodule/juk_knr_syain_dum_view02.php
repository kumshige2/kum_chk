<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
require_once(LIBPATH.'address_test.php');
require_once(LIBPATH.'Chromephp.php');
require_once(LIBPATH.'excel_out02_spread.php');
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
class juk_knr_syain_dum_view02   extends view {
 //$property
 var $smarty;
  public $pub_rows01;
  //public $pub_client_id;
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
//
//===========================================
function main() {
//------------------------------------------
//  instance
//------------------------------------------
  $obj = new addressoperation;
//------------------------------------------
//  instance
//------------------------------------------
$form = new HTML_Quickform2('qform_smarty','POST',array('action' => 'index.php?module=juk_knr_syain_dum_view02'));
//-------------------------------------------
//  Post Get Session
//-------------------------------------------
  $key_array1 =$obj ->postget01();
  $cnt_ary=count($key_array1);
  switch ($cnt_ary) {
    case 0:
      $key_array1[0]=$_POST['access_id_c'];
      $key_array1[1]=$_POST['client_id_c'];
      $key_array1[2]=$_POST['client_nm_c'];
      $key_array1[3]=$_POST['sts_c'];
      $key_array1[4]=$_POST['q_id_c'];
      $key_array1[5]=$_POST['cnt_c'];
      break;
    default:
      break;
  }
  $ret = $obj ->table($key_array1);
  $this ->smarty-> assign('client_id', $key_array1[0]);
  $this ->smarty->assign('client_nm',$key_array1[2]);
  $this ->smarty->assign('access_id',$key_array1[1]);
  //    ChromePhp::log('Hello console');
  if (isset($key_array1[3])) {
    $sts=$key_array1[3];
  } else {
    $sts=NULL;
  }
  if ($key_array1[3]=='upl') {
    if ($key_array1[5]==0) {
    $this -> createform($form,NULL);
    echo 'data empty';
      exit;
    } else {
    //$sts=NULL;
    }
  } else {
  }
  ChromePhp::log('juk_knr_syain_dum_view01');
//---------------------------------------------
//  Post key check
//  $_POST['KEY']  通常表示
//  $_POST['id']   更新、追加、削除
//---------------------------------------------
//    $key_array0 = array();
//    $key_array1 = array();
//    if (isset($_POST['KEY'])) {
//      $key_array0 = explode(",",$_POST['KEY']);
//      $key_array0 = array_filter($key_array0,'strlen');
//      $key_array1 = array_map('trim',explode(',',$_POST['KEY']));
//    } else {
//      if (isset($_GET['KEY'])) {
//        $key_array0 = explode(",",$_GET['KEY']);
//        $key_array0 = array_filter($key_array0,'strlen');
//        $key_array1 = array_map('trim',explode(',',$_GET['KEY']));
//      } else {
//        if (isset($_GET['id'])) {
//          $key_array0 = explode(",",$_GET['id']);
//          $key_array0 = array_filter($key_array0,'strlen');
//          $key_array1 = array_map('trim',explode(',',$_GET['id']));
//        } else {
//          //echo POSTNG;
//          //exit;
//        }
//      }
//    }
//$ret = $obj ->table($key_array1);

//--------------------------------------------------
//t_uke
//--------------------------------------------------
$res0 = array();
$res1 = array();
$id_list = array();
$ary_00 = array();
$ary_syn_view = array();
$sqls ='';
//
//-------------------------------
// t_syain_sun_dummy 
//-------------------------------
$sqls ='';
$sqls='select a.* from t_syain_sun_dummy as a where a.access_id=? order by a.syainno';
$res1 = $obj  -> getlist01_01($sqls,$_SESSION[ACCESSID]);
if ($res1[RESFLAG]==true) {
  if (count($res1[RESDATA])  != 0) {
    $cnt=count($res1[RESDATA]);
    $res =$this -> sanitize($res1[RESDATA]);
    $ret1 = $this -> setChannel($res,'syn_view');
  } else {
    $cnt=0;
    echo "<span sytle=\"color:#FF0000\">" . 't_syain_sun_dum empty !?'  . "</span>";
    $this -> createform($form);
  }
} else {
  $cnt=0;
  echo "<span sytle=\"color:#FF0000\">" . 't_syain_sun_dum empty !?'  . "</span>";
  $this -> createform($form);
}
//------------------------------------------
//  form 要素の構築
//------------------------------------------
$access_id_c= $form->addElement('text','access_id_c',array('style' => 'display:none'),array('label' =>"access_id:"));
$client_id_c= $form->addElement('text','client_id_c',array('style' => 'display:none'),array('label' =>"client_id:"));
$client_nm_c= $form->addElement('text','client_nm_c',array('style' => 'display:none'),array('label' =>"client_nm:"));
$sts_c= $form->addElement('text','sts_c',array('style' => 'display:none'),array('label' =>"sts_c:"));
//
//------------------------------------
//初期値を取得
//------------------------------------
if ($cnt === 0) {
} else {
  //
  $add_data = array();
  $add_data = array(
   'access_id_c' =>  $key_array1[0],
   'client_id_c' =>  $key_array1[1],
   'client_nm_c' =>  $key_array1[2],
   'sts_c' => $key_array1[3],
    );
}
//
//-------------------------------------------
//初期値を代入
//-------------------------------------------
  if(isset($add_data['access_id_c'])) $access_id_c->setvalue($add_data['access_id_c']);
  if(isset($add_data['client_id_c'])) $client_id_c->setvalue($add_data['client_id_c']);
  if(isset($add_data['client_nm_c'])) $client_nm_c->setvalue($add_data['client_nm_c']);
  if(isset($add_data['sts_c'])) $sts_c->setvalue($add_data['sts_c']);
  //if(isset($add_data['q_id_c'])) $q_id_c->setvalue($add_data['q_id_c']);
  //if(isset($add_data['cnt_c'])) $cnt_c->setvalue($add_data['cnt_c']);
//
$access_id_c->addfilter('htmlspecialchars');
$client_id_c->addfilter('htmlspecialchars');
$client_nm_c->addfilter('htmlspecialchars');
$sts_c->addfilter('htmlspecialchars');
//$q_id_c->addfilter('htmlspecialchars');
//$cnt_c->addfilter('htmlspecialchars');
//-------------------------------------------
//  Trim
//-------------------------------------------
 $form->addRecursiveFilter('trim');


//$this->pub_client_id =$key_array1[0];
// $this -> smarty -> assign('client_id', $key_array1[0]);
$this -> smarty->assign('sts',$sts);
//$this -> smarty->assign('q_id',$key_array1[4]);
//-----------------------------------
//  excel out
//-----------------------------------
//if (isset ($_POST['excel01'])) {
//    $cls = new excel_out02_spread();
//    $sf1 = $cls-> setChannel($res);
//    echo('sf--->'. $sf1);
//    $title= '社員データ_Download !';
//  $this ->smarty-> assign('client_id', $key_array1[0]);
//  $this ->smarty->assign('client_nm',$key_array1[2]);
//  $this ->smarty->assign('access_id',$key_array1[1]);
//  $this->smarty->assign('title',$title);
//  $this->smarty->assign('sf1',$sf1);
//  $this->smarty->display('upd_check03.html');
  //$obj->dbend();
  //exit();
//} else {} // end if
//-----------------------------------
//  データを取得
//-----------------------------------
if ($res1[RESFLAG] == TRUE) {
  //if (count($res1[RESDATA])  != 0) {
  if ($cnt  != 0) {
    //echo 'count-->' . $count;
    //$count=count($res1[RESDATA]);
    //$res =$this -> sanitize($res1[RESDATA]);
    $ret1 = $this -> setChannel($res,'syn_view');
    $this->createform($form);
   } else {
    echo  '<p>' .'date empty => ' . $sql ."</p>\n";
    $this -> createform($form);
   }  //end if
} else  {
  echo  '<p>' .'data empty => ' . $sql ."</p>\n";
  $this -> createform($form);
}   // end if
         //

//$this->createForm($form,$sts);
$obj->dbend();
}  // end_function
 //===========================================
 // フォームの表示
 //===========================================
function createForm($form){
// $smarty = $this->getsmarty();
HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
  $renderer = HTML_QuickForm2_Renderer::factory('smarty');
          //$renderer->setOption(array('required_note' => "<em>*</em> 記入必須項目"));
  $renderer->setOption('old_compat', true);
  $renderer->setOption('group_errors', true);
  // フォームの作成
$FormData = $form->render($renderer)->toArray();
$this->smarty->assign('form', $FormData);
//$this->smarty->assign('res',$this->pub_rows01);
//$smarty->assign('pagedata', $rows['data']);
$this->smarty->left_delimiter = '!!-{';
$this->smarty->right_delimiter = '}-!!';
$this->smarty->assign('ary_syn_view', $this->pub_rows01);

//-----------------------------------------
//  連想配列-->配列  do not delete
//------------------------------------------
  if (is_array($hoge)) {
    echo 'count-->'. $count;
    for ($i = 0 ; $i < count($rows); $i++) {
      $val_array1[]= array_values($rows[$i]);
    }
   } else {
  }
//-----------------------------------------------
//java用にencode  連想配列ではなく配列を渡すこと
//-----------------------------------------------
//$val_array2=  $this ->json_safe_encode($val_array0);
//$val_array2=  $this ->json_safe_encode($rows);
  $val_array2=  $this ->json_safe_encode($val_array1);
  $this->smarty->assign("data_json", $val_array2);
  $this->smarty->assign("se_user_id", $_SESSION[USER_ID]);
  $this->smarty->assign("se_picture", $_SESSION[PICTURE]);
  $this->smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
  $this->smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
  $this->smarty->display('juk_knr_syain_dum_view01.html');
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
//      return array_map($this->h,$str);
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
   case 'syn_view':
     $this->pub_syn_view00 =$row01;
     $this->pub_rows01 =$row01;
     //var_dump($rows01);
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