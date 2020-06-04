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
class juk_knr_syain_dum_view01   extends view {
 //$property
 var $smarty;
  public $pub_rows01;
  public $pub_rows01_edt01;
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
$form = new HTML_Quickform2('qform_smarty','POST',array('action' => 'index.php?module=juk_knr_syain_dum_view01'));
//-------------------------------------------
//  Post Get Session
//-------------------------------------------
  $key_array1 =$obj ->postget01();
  $cnt_ary=count($key_array1);
  switch ($cnt_ary) {
    case 0:
      //echo 'yyy';
      $key_array1[0]=$_SESSION[ACCESSID];
      $key_array1[1]=$_SESSION[CLIENTID];
      $key_array1[2]=$_SESSION[CLIENTNM];
      if (isset($_POST['rew'])) {
        $key_array1[3]= 'rew';
      } else {
        if (isset($_POST['ins'])) {
          $key_array1[3]= 'ins';
        } else {
          if (isset($_POST['delxx'])) {
          $key_array1[3]= 'delxx';
          } else {
             $key_array1[3]= 'syn';
          }
        }
      }
      $key_array1[4]=$_POST['syainno_c'];
      $key_array1[5]=NULL;
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
  //echo 'sts:'. $sts;
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
$res2 = array();
$res1 = array();
$id_list = array();
$ary_00 = array();
$ary_syn_view = array();
$sqls ='';
//
//-------------------------------
// t_syain_sun_dummy
//-------------------------------
//echo 'a1111';
$sqls ='';
$sqls="select access_id,syainno,birth_md,license,filler1,company_id,client_id,to_char(upd_ymd,'yyyy-mm-dd'),to_char(cre_ymd,'yyyy-mm-dd') from t_syain_sun_dummy  where access_id=? order by syainno";
$res1 = $obj  -> getlist01_01($sqls,$_SESSION[ACCESSID]);
if ($res1[RESFLAG]==true) {
  if (count($res1[RESDATA])  != 0) {
    $cnt=count($res1[RESDATA]);
    $res1_1 =$this -> sanitize($res1[RESDATA]);
    $ret1 = $this -> setChannel($res1_1,'syn_view');
    //$retxx = $obj->table($res1_1);
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
//-------------------------------
// t_syain_sun_dummy edit
//-------------------------------
//echo 'aaaa';
if ($sts=='edt') {
  $sqls ='';
  $sqls="select * from t_syain_sun_dummy  where access_id=? and syainno=? order by syainno";
  $res2 = $obj  -> getlist02_01($sqls,$_SESSION[ACCESSID],$key_array1[4]);
  if ($res2[RESFLAG]==true) {
    if (count($res2[RESDATA])  != 0) {
      $cnt=count($res2[RESDATA]);
      $res2_1 =$this -> sanitize($res2[RESDATA]);
      $ret2 =$this -> setChannel($res2_1,'syn_view_edt');
      $add_data = array();
      $add_data = array(
     'access_id_c' =>  $res2_1[0][0],
      'syainno_c' =>  $res2_1[0][1],
      'birth_md_c' => $res2_1[0][2],
      'bsy_cd_c' => $res2_1[0][3],
      'bsy_nm_c' => $res2_1[0][4],
      'license_c' => $res2_1[0][5],
      'filler1_c' => $res2_1[0][6],
      'company_id_c' => $res2_1[0][11],
      'client_id_c' => $res2_1[0][12],
      'upd_ymd_c' =>  $res2_1[0][16],
      'cre_ymd_c' =>  $res2_1[0][17]
       //'sts_c' => $key_array1[3],
    );
      $rett=$obj->table($add_data);
    } else {
    $cnt=0;
    echo "<span sytle=\"color:#FF0000\">" . 't_syain_sun_dum_edt  empty !?'  . "</span>";
    $this -> createform($form);
    }
  } else {
  $cnt=0;
  echo "<span sytle=\"color:#FF0000\">" . 't_syain_sun_dum_Edt  empty !?'  . "</span>";
  $this -> createform($form);
  }
} else {}
//------------------------------------------
//  form 要素の構築
//------------------------------------------
$access_id_c= $form->addElement('text','access_id_c',array('style' => 'display:none'),array('label' =>"access_id:"));
$syainno_c= $form->addElement('text','syainno_c',array('style' => 'width:65px','maxlength'=>6),array('label' =>"syainno:"));
$birth_md_c= $form->addElement('text','birth_md_c',array('style' => 'width:40px','maxlength'=>4),array('label' =>"birth_md:"));
$bsy_cd_c= $form->addElement('text','bsy_cd_c',array('style' => 'display:none'),array('label' =>"bsy_cd:"));
$bsy_nm_c= $form->addElement('text','bsy_nm_c',array('style' => 'display:none'),array('label' =>"bsy_nm:"));
$license_c= $form->addElement('text','license_c',array('style' => 'width:170px'),array('label' =>"grade:"));
$filler1_c= $form->addElement('text','filler1_c',array('style' => 'width:170px'),array('label' =>"filler:"));
$company_id_c= $form->addElement('text','company_id_c',array('style' => 'display:none'),array('label' =>"company_id:"));
$client_id_c= $form->addElement('text','client_id_c',array('style' => 'display:none'),array('label' =>"client_id:"));
//$client_nm_c= $form->addElement('text','client_nm_c',array('style' => 'display:none'),array('label' =>"client_nm:"));
$upd_ymd_c= $form->addElement('text','upd_ymd_c',array('style' => 'display:none'),array('label' =>"upd_ymd_c:"));
$cre_ymd_c= $form->addElement('text','cre_ymd_c',array('style' => 'display:none'),array('label' =>"cre_ymd_c:"));
//$sts_c= $form->addElement('text','sts_c',array('style' => 'display:none'),array('label' =>"sts_c:"));
//
//------------------------------------
//初期値を取得
//------------------------------------
//echo 'bbbb';
//if ($cnt === 0) {
//} else {
  //
//  $add_data = array();
//  $add_data = array(
//   'access_id_c' =>  $res2_1[0][0],
//   'syainno_c' =>  $res2_1[0][1],
//   'birth_md_c' => $res2_1[0][2],
//   'bsy_cd_c' => $res2_1[0][3],
//   'bsy_nm_c' => $res2_1[0][4],
//   'lisence_c' => $res2_1[0][5],
//   'filler1_c' => $res2_1[0][6],
//   'company_id_c' =>  $res2_1[11],
//   'client_id_c' =>  $res2_1[12],
//   'upd_ymd_c' =>  $res2_1[16],
//   'cre_ymd_c' =>  $res2_1[17],
//   'client_nm_c' =>  $key_array1[2],
//   //'sts_c' => $key_array1[3],
//    );
//}
//$rett=$obj->table($add_data);
//
//-------------------------------------------
//初期値を代入
//-------------------------------------------
  //echo 'ccc';
  if(isset($add_data['access_id_c'])) $access_id_c->setvalue($add_data['access_id_c']);
  if(isset($add_data['syainno_c'])) $syainno_c->setvalue($add_data['syainno_c']);
  if(isset($add_data['birth_md_c'])) $birth_md_c->setvalue($add_data['birth_md_c']);
  if(isset($add_data['bsy_cd_c'])) $bsy_cd_c->setvalue($add_data['bsy_cd_c']);
  if(isset($add_data['bsy_nm_c'])) $bsy_nm_c->setvalue($add_data['bsy_nm_c']);
  //
  if(isset($add_data['license_c'])) $license_c->setvalue($add_data['license_c']);
  if(isset($add_data['filler1_c'])) $filler1_c->setvalue($add_data['filler1_c']);
  if(isset($add_data['company_id_c'])) $company_id_c->setvalue($add_data['company_id_c']);
  if(isset($add_data['client_id_c'])) $client_id_c->setvalue($add_data['client_id_c']);
  //if(isset($add_data['client_nm_c'])) $client_nm_c->setvalue($add_data['client_nm_c']);
  if(isset($add_data['upd_ymd_c'])) $upd_ymd_c->setvalue($add_data['upd_ymd_c']);
  if(isset($add_data['cre_ymd_c'])) $cre_ymd_c->setvalue($add_data['cre_ymd_c']);
//
//  if(isset($add_data['sts_c'])) $sts_c->setvalue($add_data['sts_c']);
  //if(isset($add_data['q_id_c'])) $q_id_c->setvalue($add_data['q_id_c']);
  //if(isset($add_data['cnt_c'])) $cnt_c->setvalue($add_data['cnt_c']);
//echo 'c1';
//-------------------------------------------
//check
//-------------------------------------------
$access_id_c ->addRule('required',ACCESSIDEMPTY);
$syainno_c ->addRule('required',SYAINNOEMPTY);
$client_id_c ->addRule('required',CLIENTIDEMPTY);
//$client_nm_c ->addRule('required',CLIENTNMEMPTY);
$company_id_c ->addRule('required',COMPANYIDEMPTY);
//
//echo 'd8';
$access_id_c->addrule('regex',ACCESSIDREGEX,'/^[a-zA-Z0-9]+$/');
$syainno_c->addrule('regex',SYAINNOREGEX,'/^[a-zA-Z0-9]+$/');
$client_id_c->addrule('regex',CLIENTIDREGEX,'/^[0-9]+$/');
$company_id_c->addrule('regex',COMPANYIDREGEX,'/^[0-9]+$/');
$birth_md_c->addrule('regex',BIRTHMDREGEX,'/^[0-9]+$/');

//echo 'd81';
//$access_id_c ->addRule('maxlength',10);
//$syainno_c ->addrule('maxlength',6);
//$client_id_c ->addRule('maxlength',3);
//$company_id_c ->addRule('maxlength',1);
//
//echo 'd9';
$access_id_c->addfilter('htmlspecialchars');
$syainno_c->addfilter('htmlspecialchars');
$birth_md_c->addfilter('htmlspecialchars');
$bsy_cd_c->addfilter('htmlspecialchars');
$bsy_nm_c->addfilter('htmlspecialchars');
$license_c->addfilter('htmlspecialchars');
$filler1_c->addfilter('htmlspecialchars');
$company_id_c->addfilter('htmlspecialchars');
$client_id_c->addfilter('htmlspecialchars');
//$client_nm_c->addfilter('htmlspecialchars');
$upd_ymd_c->addfilter('htmlspecialchars');
$cre_ymd_c->addfilter('htmlspecialchars');
//$sts_c->addfilter('htmlspecialchars');
//$q_id_c->addfilter('htmlspecialchars');
//$cnt_c->addfilter('htmlspecialchars');
//-------------------------------------------
//  Trim
//-------------------------------------------
// echo 'dddd';
 $form->addRecursiveFilter('trim');
//$access_id,
//   $syainno,
//   $license,
//   $bsy_nm,
//   $birth_md,
//   $company_id,
//   $client_id,
//   $upd_ymd,
//   $cre_ymd

//$this->pub_client_id =$key_array1[0];
// $this -> smarty -> assign('client_id', $key_array1[0]);
$this -> smarty->assign('sts',$sts);
//$this -> smarty->assign('q_id',$key_array1[4]);
//-------------------------------------------
//  access_id
//-------------------------------------------
if (empty($_POST['access_id_c'])) {
  $access_id_w = $add_data['access_id_c'];
} else {
  $access_id_w = $_POST['access_id_c'];
}
//-------------------------------------------
//  syainno
//-------------------------------------------
if (empty($_POST['syainno_c'])) {
  $syainno_w = $add_data['syainno_c'];
} else {
  $syainno_w = $_POST['syainno_c'];
}
//-------------------------------------------
//  birth_md
//-------------------------------------------
if (empty($_POST['birth_md_c'])) {
  $birth_md_w = $add_data['birth_md_c'];
} else {
  $birth_md_w = $_POST['birth_md_c'];
}
//-------------------------------------------
//  bsy_cd
//-------------------------------------------
if (empty($_POST['bsy_cd_c'])) {
  $bsy_cd_w = $add_data['bsy_cd_c'];
} else {
  $bsy_cd_w =  $_POST['bsy_cd_c'];
}
//$bsy_cd=NULL;
//-------------------------------------------
//  bsy_nm
//-------------------------------------------
if (empty($_POST['bsy_nm_c'])) {
  $bsy_nm_w = $add_data['bsy_nm_c'];
} else {
  $bsy_nm_w =  $_POST['grade_c'];
}
//$bsy_nm_W=NULL;
//-------------------------------------------
//  license/grade
//-------------------------------------------
if (empty($_POST['license_c'])) {
  $license_w = $add_data['license_c'];
} else {
  $license_w =  $_POST['license_c'];
}
//-------------------------------------------
//  license/grade
//-------------------------------------------
if (empty($_POST['filler1_c'])) {
  $filler1_w = $add_data['filler1_c'];
} else {
  $filler1_w =  $_POST['filler1_c'];
}
//-------------------------------------------
//  company_id
//-------------------------------------------
if (empty($_POST['company_id_c'])) {
  $company_id_w = $add_data['company_id_c'];
} else {
  $company_id_w =  $_POST['company_id_c'];
}
//-------------------------------------------
//  client_id
//-------------------------------------------
if (empty($_POST['client_id_c'])) {
  $client_id_w = $add_data['client_id_c'];
} else {
  $client_id_w =  $_POST['client_id_c'];
}

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
    if (empty($_POST['cre_ymd_c'])) {
      $cre_ymd_w = $add_data['cre_ymd_c'];
    } else {
      $cre_ymd_w =  $_POST['cre_ymd_c'];
    }
    break;
  default:
    $cre_ymd_w =$add_data['cre_ymd_c'];
    break;
}
//-------------------------------------------
// sts
//-------------------------------------------
//if (empty($_POST['sts_c'])) {
//  $sts_w = $add_data['sts_c'];
//} else {
//  $sts_w = e($_POST['sts_c']);
//}
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
//echo 'eeee';
//-------------------------------------------
//  UPDATE 
//-------------------------------------------
 
  if ($form->validate()==1)  {
    //if ($_POST['judge'] ==1) {
    //delete
    //    $sts="del";
    //    $ares_syain_sun01 = $obj ->del_syain_xxx(
    //      $_SESSION[ACCESSID],
    //      $syainno_w,
    //      $sts);
    //    if ($ares_syain_sun01[RESFLAG] == TRUE ) {
          //結果の再表示
    //       echo "<span style='color:#FF3366'>" . 'Deleted Successfully !!'  . "</span><br>";
    //      $this->createform($form);
    //      //$this->_redirect('juk_knr_syain_dum_view01', $key_array1[0].','.$key_array1[1].','.$key_array1[2].','.$sts);
    //    } else {
    //       echo "<span sytle=\"color:#FF0000\">".'DATA exception->' . UPDNG .   $_SESSION[ACCESSID] . ',' . $syainno_ww . ',' .$sts ."</span><br>";
    //       $this->createform($form);
    //    }
    //} else {
      //switch ($sts) {
      //  case 'rew':
        $ares_syain_sun01 =$obj->upd_syain_xxx(
          $_SESSION[ACCESSID],
          $syainno_w,
          $birth_md_w,
          $bsy_cd_w,
          $bsy_nm_w,
          $license_w,
          $filler1_w,
          $company_id_w,
          $client_id_w,
          $upd_ymd_w,
          $cre_ymd_w,
          $sts
        );
      //    break;
      //  case 'ins':
     //     break;
     //   default:
     //    echo '???';
     //     break;
     // }
      // print_r($ares_uke_meisai01[RESFLAG]);
      if ($ares_syain_sun01[RESFLAG] == TRUE ) {
        $this->_redirect('upd_check11',$_SESSION[ACCESSID] .','.'juk_knr_syain_dum_view01'.','.'su0');
      } else {
        //$retss = $obj->table($ares_syain_sun01);
        $this->_redirect('upd_check11',$ares_syain_sun01[1] .','.'juk_knr_syain_dum_view01'.','.'su9');
      }
   }  else {
    //  ChromePhp::log('Normal');
    echo ('normal-->' . $_POST['client_id_c']);
      $this->createform($form);
  }   // end if
  $obj->dbend();
  exit;
//-----------------------------------
//  データを取得
//-----------------------------------
if ($res1[RESFLAG] == TRUE) {
  //if (count($res1[RESDATA])  != 0) {
  if ($cnt  != 0) {
    //echo 'count-->' . $count;
    //$count=count($res1[RESDATA]);
    //$res =$this -> sanitize($res1[RESDATA]);
    //$ret1 = $this -> setChannel($res,'syn_view');
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
$this->smarty->assign('ary_syn_edt', $this->pub_rows01_edt01);
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
     //$this->pub_syn_view00 =$row01;
     $this->pub_rows01 =$row01;
     //var_dump($rows01);
     break;
   case 'syn_view_edt':
     //$this->pub_syn_view00 =$row01;
     $this->pub_rows01_edt01 =$row01;
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