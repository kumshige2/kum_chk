<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
require '../../vendor/autoload.php';
require_once(LIBPATH.'address_test.php');
require_once(LIBPATH.'Chromephp.php');
require(LIBPATH.'PlatformDependentChars.php');
//require('Spreadsheet/Excel/Writer.php');
//===========================================
// Search   class
//    パンフ検索  module
//===========================================
//echo  '<p>' .'search.php ' .date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
echo "<pre>". 'get ' ;
print_r($_GET);
echo "</pre>";
echo "<pre>". 'post ' ;
print_r($_POST);
echo "</pre>";
//echo "<pre>". 'session ' ;
//print_r($_SESSION);
//echo "</pre>";
//var_dump($_SERVER['REMOTE_ADDR']);
class juk_knr_upl01   extends view {
//$property
var $smarty;
//	public $pub_wk03;
//	public $pub_wk13;
	public $pub_ndo;
  public $pub_chk01;
  public $pub_syn01;
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
function main()
{
	$obj = new addressoperation;
  $chk = new PlatformDependentChars;
//-------------------------------------------
//  Post Get Session
//-------------------------------------------
  $key_array1 =$obj ->postget01();
  $ret = $obj ->table($key_array1);
  $this ->smarty-> assign('client_id',$_SESSION[CLIENTID]);
  $this ->smarty->assign('access_id',$_SESSION[ACCESSID]);
  $this ->smarty->assign('client_nm',$_SESSION[CLIENTNM]);

  //
  if (isset($key_array1[3])) {
    $sts=$key_array1[3];
  } else {
    $sts=NULL;
  }
  ChromePhp::log('Hello console');
	ChromePhp::log('juk_knr_upl01');
//
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
//------------------------------------------
//  clear
//------------------------------------------
  //if (isset( $_POST[P_CLEAR])) {
    if ($_POST['judge'] ==1) {
      if (isset($sts)) {
        switch (true){
         case $sts=='clr':
        //-------------------------------------
        //delete 
        //-------------------------------------
          $clr_syain01=$obj->del_syain_160($key_array1[1],'del02');
          if ($clr_syain01 == TRUE) {
            $this->_redirect('upd_check12', $key_array1[1].','.$key_array1[2].','.'sd0');
            exit;
          } else {
            $this->_redirect('upd_check12', $key_array1[1].','.$key_array1[2].','.'sd9');
            exit;
          }
          break;
         default:
          break;
        }
      } else {
        $this->_redirect('upd_check12', $key_array1[1].','. $key_array1[2].','.'sd9');
        exit;
      }
    } else {}
 // } else {
//   echo 'bbbbbb';
//  }// end if
//------------------------------------------
//  match
// tachi-s:160全件上書き
// suntory2:234差分更新
//------------------------------------------
  if (isset($sts)) {
    switch (true){
    case $sts=='mch':
      switch ($_SESSION[CLIENTID]) {
        case '160':
          $ret_160=$this->match_160($key_array1);
          break;
        case '234':
          $ret_234=$this->match_234($key_array1);
          break;
        default:
          break;
      }
      break;
    case $sts=='syn':
      $ret23=$this->reload01();
      break;
    case $sts=='int':
      $strsql ="";
      $strsql ="select * from t_syain_chk01 where client_id =?";
      $res_chk01 = $obj ->getlist01_01($strsql,$_SESSION[CLIENTID]);
      //print_r($res_chk01);
      //$cnt_chk01=count($res_chk01[RESDATA]);
      if ($res_chk01[RESDATA] == false){
        echo "<span sytle=\"color:#FF3366\">" . 't_syain_chk01 empty!!' .  "</span>";
        exit;
      } else {
        //$res_chk01 =$this -> sanitize($res3[RESDATA]);
      }
      //
      $strsql ="";
      $strsql ="update t_syain_chk01 set cnts=0,sqls=NULL where client_id='" . $_SESSION[CLIENTID] . "'";
      $upd_res00 =$obj->sql_exe($strsql);
      if ($upd_res00[0] == TRUE) {
          //$this->_redirect('upd_check12',ACCESSID .','.'xxxxx'.','.'su0');
        } else {
          $this->_redirect('upd_check12',$_SESSION[ACCESSID] .','.'xxxxx'.','.'su9');
          exit;
        }
      break;
     } //echo "<span sytle=\"color:#FF0000\">" . 'delete t_syain_sun 2--->' . ADDUPDATENG . "</span>";
  } else {
     //echo 'dddd';
     //echo "<span sytle=\"color:#FF0000\">" . 'delete t_syain_sun3 --->' . ADDUPDATENG . "</span>";
  }
//------------------------------------------
//  instance
//------------------------------------------
$form = new HTML_Quickform2('qform_smarty','POST',array('action' => 'index.php?module=juk_knr_upl01'));
//------------------------------------------
//  form 要素の構築
//------------------------------------------
$q_kei_c= $form->addElement('text','q_kei_c',array('style' => 'width: 40px;border:none;font-size:17px;color:#ff0099;text-align:right;background-color: #eeeeee;','readonly'=>'readonly'),array('label' =>"q_kei:"));
$m_kei_c= $form->addElement('text','m_kei_c',array('style' => 'width: 40px;border:none;font-size:14px;color:#3399ff;text-align:right;background-color: #eeeeee;','readonly'=>'readonly'),array('label' =>"MAS:"));
$t_kei_c= $form->addElement('text','t_kei_c',array('style' => 'width: 40px;border:none;font-size:14px;color:#3399ff;text-align:right;background-color: #eeeeee;','readonly'=>'readonly'),array('label' =>"TRN:"));
$w_kei_c= $form->addElement('text','w_kei_c',array('style' => 'width: 40px;border:none;font-size:17px;color:#cc9933;text-align:right;background-color: #eeeeee;','readonly'=>'readonly'),array('label' =>"q_kei:"));
$q_kei_c -> addrule('regex', 'q_kei: '.ERRCNT0,'/^[0-9]+$/');
$m_kei_c -> addrule('regex', 'q_kei: '.ERRCNT0,'/^[0-9]+$/');
$t_kei_c -> addrule('regex', 'q_kei: '.ERRCNT0,'/^[0-9]+$/');
$w_kei_c -> addrule('regex', 'q_kei: '.ERRCNT0,'/^[0-9]+$/');
$q_kei_c->addfilter('htmlspecialchars');
$m_kei_c->addfilter('htmlspecialchars');
$t_kei_c->addfilter('htmlspecialchars');
$w_kei_c->addfilter('htmlspecialchars');
//-------------------------------------------
//  Trim
//-------------------------------------------
 $form->addRecursiveFilter('trim');
 //$id_form=$form->addElement('hidden','action');
//------------------------------------
//初期値を取得
//------------------------------------
  $add_data = array();
  $add_data = array(
        'q_kei_c' =>  '0'
            );
//-------------------------------------------
//初期値を代入
//-------------------------------------------
 //
//--------------------------------------------------
// パラメータを正しい構造で受け取った時のみ実行
// $tempfile = $_FILES['upfile']['tmp_name'] // 一時ファイル名
// $filename = $_FILES['upfile']['name'] // 本来のファイル名
//--------------------------------------------------
 // if (isset($_POST['upload']) ) {
 // 	$ext =pathinfo($_FILES['upfile']['tmp_name']);
 //   echo($_FILES['upfile']['tmp_name']);
if (isset($_FILES['upfile']['error']) && is_int($_FILES['upfile']['error'])) {
  try {
           /* ファイルアップロードエラーチェック */
        switch ($_FILES['upfile']['error']) {
            case UPLOAD_ERR_OK:
                // エラー無し
                break;
            case UPLOAD_ERR_NO_FILE:
                // ファイル未選択
                throw new RuntimeException('File is not selected');
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                // 許可サイズを超過
                throw new RuntimeException('File is too large');
            default:
                throw new RuntimeException('Unknown error');
        }  // end try
        $tmp_name = $_FILES['upfile']['tmp_name'];
        $detect_order = 'ASCII,JIS,UTF-8,CP51932,SJIS-win';
        setlocale(LC_ALL, 'ja_JP.UTF-8');

        /* 文字コードを変換してファイルを置換 */
        $buffer = file_get_contents($tmp_name);
        if (!$encoding = mb_detect_encoding($buffer, $detect_order, true)) {
            // 文字コードの自動判定に失敗
            unset($buffer);
            throw new RuntimeException('Character set detection failed');
        }
        file_put_contents($tmp_name, mb_convert_encoding($buffer, 'UTF-8', $encoding));
        unset($buffer);
        $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
        /* データベースに接続 'mysql:dbname=test_db;host=localhost;charset=utf8', */
        $pdo = new PDO($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ,
             array(
                // カラム型に合わない値がINSERTされようとしたときSQLエラーとする
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET SESSION sql_mode='TRADITIONAL'",
                // SQLエラー発生時にPDOExceptionをスローさせる
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                // プリペアドステートメントのエミュレーションを無効化する
                PDO::ATTR_EMULATE_PREPARES => false,
            )
        );
		//item =68
    //------------------------------------
		//  clear wk
		//------------------------------------
		//$stmt = $pdo->prepare('DELETE FROM t_c1_' . $_SESSION[USER_ID]) ->execute();
		    $stmt = $pdo->prepare('DELETE FROM t_syain_sun_wk01') ->execute();
         //->fetchAll();
        /* トランザクション処理 */
        $pdo->beginTransaction();
        try {
            $pdo->commit();
        } catch (Exception $e) {
            //fclose($fp);
            $pdo->rollBack();
            throw $e;
        }  // end delete
        $stmt = $pdo->prepare('DELETE FROM t_syain_sun_wk02') ->execute();
         //->fetchAll();
        /* トランザクション処理 */
        $pdo->beginTransaction();
        try {
            $pdo->commit();
        } catch (Exception $e) {
            //fclose($fp);
            $pdo->rollBack();
            throw $e;
        }  // end delete
    //------------------------------------
		//  insert  wk
		//------------------------------------
	    $stmt = $pdo->prepare('INSERT INTO t_syain_sun_wk01'.
		' VALUES (?, ?, ?, ?, ?, ?)');
        /* トランザクション処理 */
        $pdo->beginTransaction();
        try {
            $i=0;
			$fp = fopen($tmp_name, 'rb');
            while ($row = fgetcsv($fp)) {
				 //先頭行見出し行はSKIP
				 if($i == 0){
			       $i++;
			       continue;
		        }
                if ($row === array(null)) {
                    // 空行はスキップ
                    continue;
                }
                if (count($row) !==6) {
                    // カラム数が異なる無効なフォーマット
                    throw new RuntimeException('Invalid column detected');
                }
                $executed = $stmt->execute($row);
				$i = $i+1;
            }
            if (!feof($fp)) {
                // ファイルポインタが終端に達していなければエラー
                throw new RuntimeException('CSV parsing error');
			}
            fclose($fp);
            $pdo->commit();
        } catch (Exception $e) {
            fclose($fp);
            $pdo->rollBack();
            throw $e;
        }  // end try
        //-----------------------------
        /* 結果メッセージをセット */
        //-----------------------------
        if (isset($executed)) {
          switch ($_SESSION[CLIENTID]) {
          case '160':
            $ret_160=$this->validate_160($pdo,$key_array1);
            break;
          case '234':
            $ret_234=$this->validate_234($pdo,$key_array1);
            break;
          default:
            break;
          }
        } else {
            // 1回も実行されなかった
            $msg = array('black', 'There were nothing to import');
        }   // end if
    } catch (Exception $e) {
        /* エラーメッセージをセット */
        $msg = array('red', $e->getMessage());

    }  // end try

  } else {
  }// end if
  if ($key_array1[3]=='syn') {
   $ret23=$this->reload01();
  }
  //------------------------------------------
  // Syain master now
  //------------------------------------------
  $res_syain00 = array();
  $ary_syain00 = array();
  $strsql3='';
  $strsql3 ="select count(client_id) ,company_id from t_syain_sun group by client_id,company_id having client_id = ? order by company_id";
  $res_syain00 = $obj ->getlist01_01($strsql3,$_SESSION[CLIENTID]);
  $ary_syain00 =$this -> sanitize($res_syain00[RESDATA]);
  //$retss=$obj->table($ary_syain00);
  $this -> smarty -> assign('syain_now', $ary_syain00);
  //------------------------------------------
  // gokei
  //------------------------------------------
  $res3 = array();
  $ary_sum01 = array();
  //$strsql3='';
  //$strsql3 ="select  client_id,sts,sum(cnts) from t_syain_chk01 group by client_id,sts having client_id =? order by sts";
  // $res3 = $obj ->getlist01_01(strsql3,$_SESSION[CLIENTID]);
  $res3 = $obj ->getlist01_01(GRPSUM01_160,$_SESSION[CLIENTID]);
  $ary_sum01 =$this -> sanitize($res3[RESDATA]);
  //
  $res4 = array();
  $ary_sum04 = array();
  //$strsql4 ='';
  //$strsql4 ="select count(*) from t_syain_sun where access_id=? and syainno = 'ZZZZZ'";
  //$res4 = $obj ->getlist01_01($strsql4,$_SESSION[ACCESSID]);
  $res4 = $obj ->getlist01_01(CNT01_160,$_SESSION[ACCESSID]);
  $ary_sum04 =$this -> sanitize($res4[RESDATA]);
  $this -> smarty -> assign('m_cnt', $ary_sum04[0][0]);
  $this -> smarty -> assign('rates', $rates);
 //-------------------------------------------
  //  quick form  $_FILES['upfile']
  //----------------------------------------
   $form->addRecursiveFilter('trim');
  if (isset($_FILES['upfile']['name'])) {
     if(isset($add_data['q_kei_c']))  {
      $q_kei_c->setvalue($ary_sum01[0][2]);
      $w_kei_c->setvalue($ary_sum01[1][2]);

     } else {}
    $this -> smarty -> assign('name',  $_FILES['upfile']['name']);
    $this -> smarty -> assign('type',  $_FILES['upfile']['type']);
    $this -> smarty -> assign('error', $_FILES['upfile']['error']);
    $this -> smarty -> assign('cnt',  $i-1);
    //$this -> smarty -> assign('q_kei2',  $q_kei);
    $this -> smarty -> assign('msg', $msg[1]);
    $this -> smarty -> assign('colors', $msg[0]);
   // $this -> smarty -> assign('client_id', $key_array1[0]);

  } else {
   $q_kei_c->setvalue($ary_sum01[0][2]);
   $w_kei_c->setvalue($ary_sum01[1][2]);
   $this -> smarty -> assign('name',  NULL);
   $this -> smarty -> assign('type',  NULL);
   $this -> smarty -> assign('error', NULL);
   $this -> smarty -> assign('cnt',  0);
      //$this -> smarty -> assign('cnt',  $cnts);
   $this -> smarty -> assign('msg', NULL);
   //$this -> smarty -> assign('client_id', $key_array1[0]);
 }

//----------------------------------------------------
   $obj->dbend();
   $this->createForm($form,$sts);
}  // end_function
//===========================================
// フォームの表示
//===========================================
function createForm($form,$sts){
	//$smarty = $this->getsmarty();
	HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
	$renderer = HTML_QuickForm2_Renderer::factory('smarty');
					//$renderer->setOption(array('required_note' => "<em>*</em> 記入必須項目"));
	$renderer->setOption('old_compat', true);
	$renderer->setOption('group_errors', true);
	// フォームの作成
	$FormData = $form->render($renderer)->toArray();
	$this -> smarty->assign('form', $FormData);
	$this -> smarty->left_delimiter = '!!-{';
	$this -> smarty->right_delimiter = '}-!!';
  $this -> smarty->assign('sts',$sts);
  //$this -> smarty->assign('client_nm',CLIENTNM);
	$this -> smarty->assign("ndo", $this->pub_ndo);
  $this -> smarty->assign("chk01", $this->pub_chk01);
  $this -> smarty->assign("ary_syn_view01", $this->pub_syn01);
	$this -> smarty->assign("se_user_id", $_SESSION[USER_ID]);
	$this -> smarty->assign("se_picture", $_SESSION[PICTURE]);
	$this -> smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
	$this -> smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
  //$this -> smarty->display('loader_test01.html');
  //-------------------------------------------
  //  誰？
  //----------------------------------------
	$min = 0;
  $max = 9;
  //乱数を生成する
  $rd= mt_rand($min, $max);
  switch ($rd) {
    case 0:
      $who = "誰？";
      break;
    case 1:
     $who = "誰？";
      break;
    case 2:
      $who = "誰なんだよ？";
      break;
    case 3:
      //$who = "いつもきれいにしておけば、お客は汚さない。でも汚ないままにすれば、お客はゴミをますます捨てる。/Walt Disney";
      $who = "誰だよ？";
      break;
    case 4:
      $who = "決してネバーギブアップしません/長嶋茂雄";
      break;
    case 5:
       $who = "誰だよ？";
      break;
    case 6:
      $who = "誰なんだよ？";
      break;
    case 7:
      //$who = "もし、８時間で木を切り倒せと言われたら、私は７時間を斧の刃を研ぐことにあてる。/Abraham Lincoln";
      $who = "Whats Up?";
      break;
    case 8:
      $who = "多くのことをなす近道は、一度にひとつのことだけすること。/Wolfgang Amadeus Mozart";
      break;
    case 9:
         $who = "Whats Up?";
      break;
  }
  $this -> smarty->assign("who", $who);
  //
  //
  //
  //
  //
  $this -> smarty->display('juk_knr_upl01.html');
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
			case 'chk01':
			$this->pub_chk01 =$row01;
			break;
			case 'wk01':
			$this->pub_syain01 =$row01;
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
} // end function

//
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
function reload01()
 {
  //echo'rrrr';
  $obj2 = new addressoperation;
  $res2 = array();
  $ary_chk01 = array();
  $res2 = $obj2 ->getlist01_01('select * from t_syain_chk01 where client_id =? order by client_id,q_id',$_SESSION[CLIENTID]);
  //$cnt_i=count($res1[RESDATA]);
  //$cnt_j=count($res1[RESDATA][0]);
  //echo 'cnt_i-->' . $cnt_i .'    cnt_j-->' . $cnt_j;
  $ary_chk01 =$this -> sanitize($res2[RESDATA]);
  $ret22 = $this -> setChannel($ary_chk01,'chk01');
  $obj2->dbend();
 }
 function convert_kishu( $text ){

        $kishu_array = ['㈱', '㈲', '㈹', '㍾', '㍽', '㍼', '㍻', '㎜', '㎝', '㎞', '㎎', '㎏', '㏄',
         '㍉', '㌔', '㌢', '㍍', '㌘', '㌧', '㌃', '㌶', '㍑', '㍗', '㌍', '㌦', '㌣', '㌫', '㍊', '㌻',
         '①', '②', '③', '④', '⑤', '⑥', '⑦', '⑧', '⑨', '⑩', '⑪', '⑫', '⑬', '⑭', '⑮', '⑯',
         '⑰', '⑱', '⑲', '⑳', 'Ⅰ', 'Ⅱ', 'Ⅲ', 'Ⅳ', 'Ⅴ'
         ];

        $replace_kishu_array = [ '（株）', '（有）', '（代）', '明治', '大正', '昭和', '平成', 'mm', 'cm',
         'km', 'mg', 'kg', 'cc', 'ミリ', 'キロ', 'センチ', 'メートル', 'グラム', 'トン', 'アール',
         'ヘクタール','リットル', 'ワット', 'カロリー', 'ドル', 'セント', 'パーセント', 'ミリバール', 'ページ',
         '(1)', '(2)', '(3)', '(4)', '(5)', '(6)', '(7)', '(8)', '(9)','(10)', '(11)', '(12)', '(13)',
         '(14)', '(15)', '(16)', '(17)', '(18)', '(19)', '(20)', '(1)', '(2)', '(3)', '(4)', '(5)'
         ];

        return str_replace( $kishu_array, $replace_kishu_array, $text );
    }
//-----------------------------
//  validation  tachi-s
//-----------------------------
function validate_160($pdo,$key_array1)
 {
  $obj2 = new addressoperation;
  // 1回以上実行された
  // $msg = array('green', 'Upload successful');
  $msg = array('#3399ff', 'Upload successful');
//---------------------------------->

//-------------------------------------------------
// t_syain_sun wk01 ---> t_syain_sun_wk02
//-------------------------------------------------
  $stmt = $pdo->prepare('SELECT access_id,syainno,grade as license,bsy_nm,birth_md,company_id  FROM  t_syain_sun_wk01');
  $stmt->execute();
  while ( $rows = $stmt->fetch ( PDO::FETCH_ASSOC ) ) {
    switch (true) {
      case strlen($rows['birth_md']) == 4:
        $birth = $rows['birth_md'];
        break;
      case strlen($rows['birth_md']) > 4:
        $birth =sprintf('%04d',substr($rows['birth_md'],-4,4));
        break;
      case  strlen($rows['birth_md']) < 4:
        $birth =sprintf('%04d',$rows['birth_md']);
        break;
      default:
        $birth = $rows['birth_md'];
        break;
    }
    $bsy_xx = mb_convert_kana($this->convert_kishu($rows['bsy_nm']),'KSVA','utf-8');
    //$bsy_xx = mb_convert_kana($this->convert_kishu($rows['bsy_nm']),'KSVA');
    //$bsy_xx = mb_substr($bsy_xx, 0, 24);
    //------------------------------
    // access_id <>
    //------------------------------
      if ($_SESSION[ACCESSID] <> strval($rows['access_id'])) {
          $this->_redirect('upd_check11',$_SESSION[ACCESSID] .','.'juk_knr_upl01'.','.'si9d');
          $obj->dbend();
      }
    //-----------------------------
    //  insert
    //----------------------------
      $ins_res02=$obj2->upd_syain_160(
      $rows['access_id'],
      sprintf('%05s',$rows['syainno']),
      mb_convert_kana($rows['license'],'a','utf-8'),
      NUll,
      $bsy_xx,
      $birth,
      $rows['company_id'],
      $_SESSION[CLIENTID],
      date("Y-m-d H:i:s"),
      date("Y-m-d H:i:s"),
      'ins02');
  }  // end while
//
  if ($ins_res02 == TRUE) {
  //--------------------------------------------------
  //t_syain_wk02 get ;
  //--------------------------------------------------
    $res1 = array();
    $ary_syain01 = array();
    $res1 = $obj2 ->getlist01('select * from t_syain_sun_wk02 order by syainno');
    $cnt_i=count($res1[RESDATA]);
    $cnt_j=count($res1[RESDATA][0]);
    //echo 'cnt_i-->' . $cnt_i .'    cnt_j-->' . $cnt_j;
    $ary_syain01 =$this -> sanitize($res1[RESDATA]);
    $ret11 = $this -> setChannel($ary_syain01,'wk01');
    //
    $q0=0;$q1=0;$q2=0;$q5=0;$q6=0;$q11=0;
    $q0_1=0;$q1_1=0;$q1_2=0;$q2_1=0;$q2_2=0;$q5_1=0;$q5_1=0;$q5_2=0;$q6_1=0;$q11_1=0;
    $w1_2=0;$w2_1=0;$w6_1=0;
    //
    for ( $i = 0; $i < $cnt_i; ++$i){
      if (isset($ary_syain01[$i][0])) {
      } else {
        $q0 = $q0 + 1;
        $q0_who=$q0_who . ','. $ary_syain01[$i][1];
      }
      if (isset($ary_syain01[$i][1])) {
      } else {
        $q1 = $q1 + 1;
        $q1_who=$q1_who . ','. $ary_syain01[$i][1];
      }
      if (isset($ary_syain01[$i][2])) {
      } else {
        $q2 = $q2 + 1;
        $q2_who=$q2_who . ','. $ary_syain01[$i][1];
      }
      if (isset($ary_syain01[$i][5])) {
      } else {
        $q5 = $q5 + 1;
        $q5_who=$q5_who . ','. $ary_syain01[$i][1];
      }
      if (isset($ary_syain01[$i][6])) {
        } else {
        $q6 = $q6 + 1;
        $q6_who=$q6_who . ','. $ary_syain01[$i][1];
      }
      if (isset($ary_syain01[$i][11])) {
      } else {
          $q11 = $q11 + 1;
          $q11_who=$q11_who . ','. $ary_syain01[$i][1];
      }
      //-----------------
      // Access_ID
      //-----------------
      if ($ary_syain01[$i][0] === $key_array1[1]) {
      } else {
          $q0_1 = $q0_1 + 1;
          $q0_1_who=$q0_1_who . ','. $ary_syain01[$i][1];
      }
      //-----------------
      //syain-no
      //-----------------
      if (preg_match("/^[a-zA-Z0-9]+$/", $ary_syain01[$i][1])) {
      } else {
          $q1_1 = $q1_1 + 1;
          $q1_1_who=$q1_1_who . ','. $ary_syain01[$i][1];
      }
      if (mb_strlen(trim($ary_syain01[$i][1])) <= 5) {
      } else {
          $q1_1 = $q1_1 + 1;
          $q1_1_who=$q1_1_who . ','. $ary_syain01[$i][1];
      }
      //echo 'leng--->' . strlen($ary_syain01[$i][1]);
      //if (strlen($ary_syain01[$i][1]) == 5) {
      //} else {
      //  $w1_2 = $w1_2 + 1;
      //  $w1_2_who=$w1_2_who . ','. $ary_syain01[$i][1];
      //}
      //---------------
      //birthday
      //---------------
      //if (preg_match("/^[0-9]{4}+$/", $ary_syain01[$i][2])) {
      //  } else {
      //    if (preg_match("/^[0-9]{8}+$/", $ary_syain01[$i][2])) {
      //       $w2_1 = $w2_1 + 1;
      //       $w2_1_who=$w2_1_who . ','. $ary_syain01[$i][1];
      //    } else {
      //       $q2_1 = $q2_1 + 1;
      //       $q2_1_who=$q2_1_who . ','. $ary_syain01[$i][1];
      //    }
      //}
      if (preg_match("/^(0[1-9]{1}|1[0-2]{1})(0[1-9]{1}|[1-2]{1}[0-9]{1}|3[0-1]{1})$/", $ary_syain01[$i][2]))
       {} else {
          $q2_1 = $q2_1 + 1;
          $q2_1_who=$q2_1_who . ','. $ary_syain01[$i][1];
      }
      //-----------------
      //grade a-zA-Z0-9_-
      //-----------------
      // if (preg_match("/^[a-zA-Z0-9_-]{2}+$/", $ary_syain01[$i][5])) {
      if (preg_match("/^[a-zA-Z0-9_-]+$/", $ary_syain01[$i][5])) {
      } else {
          $q5_1 = $q5_1 + 1;
          $q5_1_who=$q5_1_who . ','. $ary_syain01[$i][1];
      }
      if (strlen($ary_syain01[$i][5]) <= 2) {
      } else {
          $q5_2 = $q5_2 + 1;
          $q5_2_who=$q5_2_who . ','. $ary_syain01[$i][1];
      }
      //----------------
      //syozoku
      //----------------
      if (preg_match('/^[ｦ-ﾟｰ ]+$/u', $ary_syain01[$i][4])) {
          $q6_1 = $q6_1 + 1;
          $q6_1_who=$q6_1_who . ','. $ary_syain01[$i][1];
      } else {
      }
      if (mb_strlen(trim($ary_syain01[$i][4])) <= 24) {
      //if (mb_strlen(trim($rows['bsy_nm'])) <= 24) {
      } else {
          $w6_1 = $w6_1 + 1;
          $w6_1_who=$w6_1_who . ','. $ary_syain01[$i][1];
      }
      //---------------
      //機種依存文字
      //---------------
      //$res_flg0 =$chk ->check($ary_syain01[$i][6]);
      //if ($res_flg0 == true) {
      //} else {
      //  $q6_1 = $q6_1 + 1;
      //  $q6_1_who=$q6_1_who . ','. $ary_syain01[$i][1];
      // }
      //-----------------
      // Company id
      //-----------------
      if (preg_match("/^[1]+$/", $ary_syain01[$i][11])) {
      } else {
          $q11_1 = $q11_1 + 1;
          $q11_1_who=$q11_1_who . ','. $ary_syain01[$i][1];
      }
    }   //end for
    //--------->
    //$sqls = "UPDATE cities SET name = :name, population = :population WHERE id = :id";
    $sqls='';
    $sqls=UPD_SYAIN_CHK01;
    // 更新する値と該当のIDは空のまま、SQL実行の準備をする
    $stmt = $pdo->prepare($sqls);
    // 更新する値と該当のIDを配列に格納する
    $params = array(
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q0', 'cnts'=>$q0,'sqls'=>$q0_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q1', 'cnts'=>$q1,'sqls'=>$q1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q2', 'cnts'=>$q2,'sqls'=>$q2_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q5', 'cnts'=>$q5,'sqls'=>$q5_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q6', 'cnts'=>$q6,'sqls'=>$q6_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q11', 'cnts'=>$q11,'sqls'=>$q11_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q0_1', 'cnts'=>$q0_1,'sqls'=>$q0_1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q1_1', 'cnts'=>$q1_1,'sqls'=>$q1_1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q1_2', 'cnts'=>$q1_2,'sqls'=>$q1_2_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'w1_2', 'cnts'=>$w1_2,'sqls'=>$w1_2_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q2_1', 'cnts'=>$q2_1,'sqls'=>$q2_1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q2_2', 'cnts'=>$q2_2,'sqls'=>$q2_2_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'w2_1', 'cnts'=>$w2_1,'sqls'=>$w2_1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q5_1', 'cnts'=>$q5_1,'sqls'=>$q5_1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q5_2', 'cnts'=>$q5_2,'sqls'=>$q5_2_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q6_1', 'cnts'=>$q6_1,'sqls'=>$q6_1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'w6_1', 'cnts'=>$w6_1,'sqls'=>$w6_1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q11_1', 'cnts'=>$q11_1,'sqls'=>$q11_1_who),
     );
    // foreachで更新する値を1つずつループ処理
    foreach ($params as $rrow) {
    // 連想配列の値をそれぞれのプレースホルダにセットし、executeでSQLを実行
    // コードが見やすいように改行
    $stmt->execute(array(
    ':client_id' => $rrow['client_id'],
    ':q_id' => $rrow['q_id'],
    ':cnts' => $rrow['cnts'],
    ':sqls' => $rrow['sqls'])
     );
    }
    //----------->
    //$res0 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q0',$q0,$q0_who,'rew');
    //$res1 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q1',$q1,$q1_who,'rew');
    //$res2 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q2',$q2,$q2_who,'rew');
    //$res5 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q5',$q5,$q5_who,'rew');
    //$res6 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q6',$q6,$q6_who,'rew');
    //$res11 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q11',$q11,$q11_who,'rew');
    //
    //$res0_1 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q0_1',$q0_1,ltrim($q0_1_who,","),'rew');
    //$res1_1 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q1_1',$q1_1,ltrim($q1_1_who,","),'rew');
    //$res1_2 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q1_2',$q1_2,ltrim($q1_2_who,","),'rew');
    //$res1_2w =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'w1_2',$w1_2,ltrim($w1_2_who,","),'rew');
    //$res2_1 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q2_1',$q2_1,ltrim($q2_1_who,","),'rew');
    //$res2_2 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q2_2',$q2_2,ltrim($q2_2_who,","),'rew');
    //$res2_1w =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'w2_1',$w2_1,ltrim($w2_1_who,","),'rew');
    //$res5_1 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q5_1',$q5_1,ltrim($q5_1_who,","),'rew');
    //$res5_2 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q5_2',$q5_2,ltrim($q5_2_who,","),'rew');
    //$res6_1 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q6_1',$q6_1,ltrim($q6_1_who,","),'rew');
    //$res6_1w =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'w6_1',$w6_1,ltrim($w6_1_who,","),'rew');
    //$res11_1 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q11_1',$q11_1,ltrim($q11_1_who,","),'rew');
    //----------------------------------------------------------------------------------------
    $q_kei=0;
    $q_kei=$q0+$q1+$q2+$q5+$q6+$q11+$q0_1+$q1_1+$q1_2+$q2_1+$q2_2+$q5_1+$q6_1+$q5_2+$q11_1;
    //echo $q_kei;
    $res2 = array();
    $ary_chk01 = array();
    $res2 = $obj2 ->getlist01_01('select * from t_syain_chk01 where client_id =? order by client_id,q_id',$_SESSION[CLIENTID]);
    $res2 = $obj2 ->getlist01_01('select * from t_syain_chk01 where client_id =? order by client_id,q_id',$_SESSION[CLIENTID]);
    $cnt_i=count($res1[RESDATA]);
    $cnt_j=count($res1[RESDATA][0]);
    //echo 'cnt_i-->' . $cnt_i .'    cnt_j-->' . $cnt_j;
    $ary_chk01 =$this -> sanitize($res2[RESDATA]);
    $ret22 = $this -> setChannel($ary_chk01,'chk01');
    //------------------------------------------
    //  match
    //------------------------------------------
    if (isset($_POST['match']) ) {
      echo 'q_kei-->' . $q_kei;
    } else {}  // end
  } else {
    $this->_redirect('upd_check11',$sqls.','.$tmp_name.','.'si9');
    //$ret55 = $obj ->table($row);
  };  // end ins_res2
 } // end function
//-----------------------------
//  validation suntory
//-----------------------------
function validate_234($pdo,$key_array1)
 {
  $obj2 = new addressoperation;
  // 1回以上実行された
  // $msg = array('green', 'Upload successful');
  $msg = array('#3399ff', 'Upload successful');
//-----------
// convert tbl get
//-----------
  $res_cnv01 = array();
  $ary_cnv01 = array();
  $ary_cnv02 =array();
  $ary_syain=array();
  //
  $res_cnv01 = $obj2 ->getlist01('select * from t_syain_sun_cnv01');
  $ary_cnv01 =$this -> sanitize($res_cnv01[RESDATA]);
  //
  $count=count($ary_cnv01);
  for ( $i = 0; $i < $count; ++$i){
    $ary_cnv02 +=array($ary_cnv01[$i][2] => $ary_cnv01[$i][3]);
  }
  //$ret44 =$obj2->table($ary_cnv02);
  //echo 'aa-->'. $ary_cnv02['Ｔ６'];
//-------------------------------------------------
// t_syain_sun wk01 ---> t_syain_sun_wk02
//-------------------------------------------------
  $stmt = $pdo->prepare('SELECT *  FROM  t_syain_sun_wk01');
  $stmt->execute();
  while ( $rows = $stmt->fetch ( PDO::FETCH_ASSOC ) ) {
    switch (true) {
      case strlen($rows['birth_md']) == 4:
        $birth = $rows['birth_md'];
        break;
      case strlen($rows['birth_md']) > 4:
        $birth =sprintf('%04d',substr($rows['birth_md'],-4,4));
        break;
      case  strlen($rows['birth_md']) < 4:
        $birth =sprintf('%04d',$rows['birth_md']);
        break;
      default:
        $birth = $rows['birth_md'];
        break;
    }
   //
   //------------------------------
    // access_id <>
    //------------------------------
      if ($_SESSION[ACCESSID] <> strval($rows['access_id'])) {
          $this->_redirect('upd_check11',$_SESSION[ACCESSID] .','.'juk_knr_upl01'.','.'si9d');
          $obj->dbend();
      }
    //---------------------
    //Insert
    //---------------------
    $gradexx =mb_convert_kana(trim($rows['grade']),'KSVA','utf-8');
    $grade01 = $ary_cnv02[$gradexx];
    if (isset($grade01)) {} else {echo 'grade cnv err-->'.$gradexx; exit;}
    $ins_res02=$obj2->upd_syain_160(
      $rows['access_id'],
      sprintf('%06s',$rows['syainno']),
      $grade01,
      NULL,
      mb_convert_kana($this->convert_kishu($rows['bsy_nm']),'KSVA','utf-8'),
      $birth,
      $rows['company_id'],
      $_SESSION[CLIENTID],
      date("Y-m-d H:i:s"),
      date("Y-m-d H:i:s"),
      'ins02');
       $ary_syain[]=$rows['syainno'];
  }
  //------------------------
  //end while
  //------------------------
   //$ret44 =$obj2->table($ary_syain);
  if ($ins_res02 == TRUE) {
  //--------------------------------------------------
  //t_syain_wk02 get ;
  //--------------------------------------------------
    $res1 = array();
    $ary_syain01 = array();
    $res1 = $obj2 ->getlist01('select * from t_syain_sun_wk02 order by syainno');
    $cnt_i=count($res1[RESDATA]);
    $cnt_j=count($res1[RESDATA][0]);
    //echo 'cnt_i-->' . $cnt_i .'    cnt_j-->' . $cnt_j;
    $ary_syain01 =$this -> sanitize($res1[RESDATA]);
    $ret11 = $this -> setChannel($ary_syain01,'wk01');
    //
    $q0=0;$q1=0;$q2=0;$q5=0;$q6=0;$q11=0;
    $q0_1=0;$q1_1=0;$q1_2=0;$q2_1=0;$q2_2=0;$q5_1=0;$q5_1=0;$q5_2=0;$q6_1=0;$q11_1=0;$q1_3=0;$q1_4=0;
    $w1_2=0;$w2_1=0;$w6_1=0;
    //
    for ( $i = 0; $i < $cnt_i; ++$i){
      if (!empty($ary_syain01[$i][0])) {
      } else {
        $q0 = $q0 + 1;
        $q0_who=$q0_who . ','. $ary_syain01[$i][1];
      }
      if (!empty($ary_syain01[$i][1])) {
      } else {
        $q1 = $q1 + 1;
        $q1_who=$q1_who . ','. $ary_syain01[$i][1];
      }
      if (!empty($ary_syain01[$i][2])) {
      } else {
        $q2 = $q2 + 1;
        $q2_who=$q2_who . ','. $ary_syain01[$i][1];
      }
      if (!empty($ary_syain01[$i][5])) {
      } else {
        $q5 = $q5 + 1;
        $q5_who=$q5_who . ','. $ary_syain01[$i][1];
      }
      //if (!empty($ary_syain01[$i][6])) {
      //  } else {
      //  $q6 = $q6 + 1;
      //  $q6_who=$q6_who . ','. $ary_syain01[$i][1];
      //}
      if (!empty($ary_syain01[$i][11])) {
      } else {
          $q11 = $q11 + 1;
          $q11_who=$q11_who . ','. $ary_syain01[$i][1];
      }
      //-----------------
      // Access_ID
      //-----------------
      if ($ary_syain01[$i][0] == trim($_SESSION[ACCESSID])) {
      } else {
          $q0_1 = $q0_1 + 1;
          $q0_1_who=$q0_1_who . ','. $ary_syain01[$i][1];
      }
      //-----------------
      //syain-no
      //-----------------
      if (preg_match("/^[a-zA-Z0-9]+$/", $ary_syain01[$i][1])) {
      } else {
          $q1_1 = $q1_1 + 1;
          $q1_1_who=$q1_1_who . ','. $ary_syain01[$i][1];
      }
      if (mb_strlen(trim($ary_syain01[$i][1])) == 6) {
      } else {
          $q1_2 = $q1_2 + 1;
          $q1_2_who=$q1_2_who . ','. $ary_syain01[$i][1];
      }
      //echo 'leng--->' . strlen($ary_syain01[$i][1]);
      //if (strlen($ary_syain01[$i][1]) == 5) {
      //} else {
      //  $w1_2 = $w1_2 + 1;
      //  $w1_2_who=$w1_2_who . ','. $ary_syain01[$i][1];
      //}
      //---------------
      //birthday
      //---------------
      //if (preg_match("/^[0-9]{4}+$/", $ary_syain01[$i][2])) {
      //  } else {
      //    if (preg_match("/^[0-9]{8}+$/", $ary_syain01[$i][2])) {
      //       $w2_1 = $w2_1 + 1;
      //       $w2_1_who=$w2_1_who . ','. $ary_syain01[$i][1];
      //    } else {
      //       $q2_1 = $q2_1 + 1;
      //       $q2_1_who=$q2_1_who . ','. $ary_syain01[$i][1];
      //    }
      //}
      if (preg_match("/^(0[1-9]{1}|1[0-2]{1})(0[1-9]{1}|[1-2]{1}[0-9]{1}|3[0-1]{1})$/", $ary_syain01[$i][2]))
       {} else {
          $q2_1 = $q2_1 + 1;
          $q2_1_who=$q2_1_who . ','. $ary_syain01[$i][1];
      }
      //-----------------
      //license a-zA-Z0-9_-
      //-----------------
      //$dup=array();
      //$dup =array_count_values($ary_syain01[$i]);
      //$ret_cup = $obj2->table($dup);
      //$res = array_filter(array_count_values($ary_syain01[$i][1]), function($v){return --$v;});
      //$ret_cup = $obj2->table($res);
      // if (preg_match("/^[a-zA-Z0-9_-]{2}+$/", $ary_syain01[$i][5])) {
      // (preg_match('/[^ａ-ｚＡ-Ｚ０-９]/',$checkStr))
      //if (preg_match("/^[a-zA-Z0-9_-]+$/", $ary_syain01[$i][5])) {
      //mb_regex_encoding("UTF-8");
      //if (preg_match('/[^ａ-ｚＡ-Ｚ０-９]+$/u', $ary_syain01[$i][5])) {
      //} else {
      //    $q5_1 = $q5_1 + 1;
      //    $q5_1_who=$q5_1_who . ','. $ary_syain01[$i][1];
      //}
      //if (mb_strlen($ary_syain01[$i][5]) === 2) {
      //} else {
      //    $q5_2 = $q5_2 + 1;
      //    $q5_2_who=$q5_2_who . ','. $ary_syain01[$i][1];
      //}
      //----------------
      //syozoku
      //----------------
      //if (preg_match('/^[ｦ-ﾟｰ ]+$/u', $ary_syain01[$i][4])) {
      //    $q6_1 = $q6_1 + 1;
      //    $q6_1_who=$q6_1_who . ','. $ary_syain01[$i][1];
      //} else {
      //}
      //if (mb_strlen(trim($ary_syain01[$i][4])) <= 24) {
      //} else {
      //    $w6_1 = $w6_1 + 1;
      //    $w6_1_who=$w6_1_who . ','. $ary_syain01[$i][1];
      //}
      //---------------
      //機種依存文字
      //---------------
      //$res_flg0 =$chk ->check($ary_syain01[$i][6]);
      //if ($res_flg0 == true) {
      //} else {
      //  $q6_1 = $q6_1 + 1;
      //  $q6_1_who=$q6_1_who . ','. $ary_syain01[$i][1];
      // }
      //-----------------
      // Company id
      //-----------------
      //if (preg_match("/^[1]+$/", $ary_syain01[$i][11])) {
      if (preg_match("/^[1-2]+$/", $ary_syain01[$i][11])) {
      } else {
          $q11_1 = $q11_1 + 1;
          $q11_1_who=$q11_1_who . ','. $ary_syain01[$i][1];
      }
    }   //end for
    //------------------------------------
    // 重複社員番号 tran data内
    //------------------------------------
    $ary_dup= array_count_values ($ary_syain);
    $count=count($ary_dup);
    foreach ($ary_dup as $key => $value){
      if ($value > 1) {
        $q1_3 = $q1_3 + 1;
        $q1_3_who =$q1_3_who. ','. $key;
      } else {}
    }
    //------------------------------------
    // 重複社員番号 tran <--> master
    //------------------------------------
    //t_syain_sun check
    //  年度初めの時は,master:0件なので件数をCHECK
    //----------------------------
    $res23 = array();
    $ary_syain23 = array();
    $res23 = $obj2 ->getlist01_01('SELECT a.* FROM t_syain_sun as a where a.access_id =? limit 10',$key_array1[1]);
    if ($res23[RESDATA] ==FALSE) {
        //echo 'syain empty';
       $cnt_syain02=0;
    } else {
      //------------------------------------
      // count(t_syain_sun) > 0
      //----------------------------
      $res22 = array();
      $ary_syain02 = array();
      $res22 = $obj2 ->getlist01('SELECT a.* FROM t_syain_sun as a left join t_syain_sun_wk02 as b on a.client_id =b.client_id and a.syainno=b.syainno where b.syainno is not null order by syainno');
      if ($res22[RESFLAG]==TRUE) {
        if (count($res22[RESDATA]) !=0) {
          $ary_syain02 =$this -> sanitize($res22[RESDATA]);
          $cnt_syain02=count($ary_syain02);
        } else {
          $cnt_syain02=0;
        }
      } else {
        $cnt_syain02=0;
      }
    }
    //
    //$res22 = array();
    //$ary_syain02 = array();
    //$res22 = $obj2 ->getlist01('SELECT a.* FROM t_syain_sun as a left join t_syain_sun_wk02 as b on a.client_id =b.client_id and a.syainno=b.syainno where b.syainno is not null order by syainno');
    //if ($res22[RESFLAG]=TRUE) {
    //  echo "<span sytle=\"color:#FF0000\">" . 't_syain_sun check failed  --->' . '???'  . "</span>";
    //  exit;
    //} else {
    //  if (count($res22[RESDATA]) !=0) {
    //    $ary_syain02 =$this -> sanitize($res22[RESDATA]);
    //    $cnt_syain02=count($ary_syain02);
    //  } else {
    //    $cnt_syain02=0;
    //  }
    //}
    if ($cnt_syain02===0) {
      $q1_4 =0;
    } else {
      $q1_4 =$cnt_syain02;
      for ( $i = 0; $i < $cnt_syain02; ++$i){
        $q1_4_who = $q1_4_who . ','. $ary_syain02[$i][1];
          }
    }
    //$ret44 = $obj2->table($ary_dup);
    //--------->
    //$sqls = "UPDATE cities SET name = :name, population = :population WHERE id = :id";
    $sqls='';
    $sqls=UPD_SYAIN_CHK01;
    $stmt = $pdo->prepare($sqls);
    // 更新する値と該当のIDを配列に格納する
    $params = array(
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q0', 'cnts'=>$q0,'sqls'=>$q0_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q1', 'cnts'=>$q1,'sqls'=>$q1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q2', 'cnts'=>$q2,'sqls'=>$q2_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q5', 'cnts'=>$q5,'sqls'=>$q5_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q6', 'cnts'=>$q6,'sqls'=>$q6_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q11', 'cnts'=>$q11,'sqls'=>$q11_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q0_1', 'cnts'=>$q0_1,'sqls'=>$q0_1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q1_1', 'cnts'=>$q1_1,'sqls'=>$q1_1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q1_2', 'cnts'=>$q1_2,'sqls'=>$q1_2_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q1_3', 'cnts'=>$q1_3,'sqls'=>$q1_3_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q1_4', 'cnts'=>$q1_4,'sqls'=>$q1_4_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'w1_2', 'cnts'=>$w1_2,'sqls'=>$w1_2_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q2_1', 'cnts'=>$q2_1,'sqls'=>$q2_1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q2_2', 'cnts'=>$q2_2,'sqls'=>$q2_2_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'w2_1', 'cnts'=>$w2_1,'sqls'=>$w2_1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q5_1', 'cnts'=>$q5_1,'sqls'=>$q5_1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q5_2', 'cnts'=>$q5_2,'sqls'=>$q5_2_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q6_1', 'cnts'=>$q6_1,'sqls'=>$q6_1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'w6_1', 'cnts'=>$w6_1,'sqls'=>$w6_1_who),
    array('client_id'=>$_SESSION[CLIENTID], 'q_id'=>'q11_1', 'cnts'=>$q11_1,'sqls'=>$q11_1_who),
     );
    // foreachで更新する値を1つずつループ処理
    foreach ($params as $rrow) {
    // 連想配列の値をそれぞれのプレースホルダにセットし、executeでSQLを実行
    $stmt->execute(array(
    ':client_id' => $rrow['client_id'],
    ':q_id' => $rrow['q_id'],
    ':cnts' => $rrow['cnts'],
    ':sqls' => $rrow['sqls'])
     );
    }
    //----------->
    //$res0 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q0',$q0,$q0_who,'rew');
    //$res1 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q1',$q1,$q1_who,'rew');
    //$res2 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q2',$q2,$q2_who,'rew');
    //$res5 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q5',$q5,$q5_who,'rew');
    //$res6 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q6',$q6,$q6_who,'rew');
    //$res11 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q11',$q11,$q11_who,'rew');
    //        //
    //$res0_1 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q0_1',$q0_1,ltrim($q0_1_who,","),'rew');
    //$res1_1 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q1_1',$q1_1,ltrim($q1_1_who,","),'rew');
    //$res1_2 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q1_2',$q1_2,ltrim($q1_2_who,","),'rew');
    //$res1_3 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q1_3',$q1_3,ltrim($q1_3_who,","),'rew');
    //$res1_4 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q1_4',$q1_4,ltrim($q1_4_who,","),'rew');
    //$res1_2w =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'w1_2',$w1_2,ltrim($w1_2_who,","),'rew');
    //$res2_1 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q2_1',$q2_1,ltrim($q2_1_who,","),'rew');
    //$res2_2 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q2_2',$q2_2,ltrim($q2_2_who,","),'rew');
    //$res2_1w =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'w2_1',$w2_1,ltrim($w2_1_who,","),'rew');
    //$res5_1 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q5_1',$q5_1,ltrim($q5_1_who,","),'rew');
    //$res5_2 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q5_2',$q5_2,ltrim($q5_2_who,","),'rew');
    //$res6_1 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q6_1',$q6_1,ltrim($q6_1_who,","),'rew');
    //$res6_1w =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'w6_1',$w6_1,ltrim($w6_1_who,","),'rew');
    //$res11_1 =$obj2->upd_syain_chk01($_SESSION[CLIENTID],'q11_1',$q11_1,ltrim($q11_1_who,","),'rew');
    $q_kei=0;
    $q_kei=$q0+$q1+$q2+$q5+$q6+$q11+$q0_1+$q1_1+$q1_2+$q1_3+$q1_4+$q2_1+$q2_2+$q5_1+$q6_1+$q5_2+$q11_1;
    //echo $q_kei;
    $res2 = array();
    $ary_chk01 = array();
    //$res2 = $obj2 ->getlist01_01('select * from t_syain_chk01 where client_id =? order by client_id,q_id',$_SESSION[CLIENTID]);
    $res2 = $obj2 ->getlist01_01('select * from t_syain_chk01 where client_id =? order by client_id,q_id',$_SESSION[CLIENTID]);
    $cnt_i=count($res1[RESDATA]);
    $cnt_j=count($res1[RESDATA][0]);
    //echo 'cnt_i-->' . $cnt_i .'    cnt_j-->' . $cnt_j;
    $ary_chk01 =$this -> sanitize($res2[RESDATA]);
    $ret22 = $this -> setChannel($ary_chk01,'chk01');
    //------------------------------------------
    //  match
    //------------------------------------------
    if (isset($_POST['match']) ) {
      echo 'q_kei-->' . $q_kei;
    } else {}  // end 
  } else {
    $this->_redirect('upd_check11',$sqls.','.$tmp_name.','.'si9');
    //$ret55 = $obj2 ->table($row);
  };  // end ins_res2
 } // end function
//-------------------
// match
//-------------------
function match_160($key_array1)
 {
  $obj2 = new addressoperation;
  $chk = $obj2-> getlist01_01('select * from t_syain_sun where client_id=?',$key_array1[0]);
  //----------------------------------
  // count = 0 の時はdeleteしない
 // $ss = $obj2->table($chk);
  //
  if (!empty($chk[0])) {
    // echo 'aa';
    $del_res01=$obj2->del_syain01($key_array1[0],'del');
  } else {
    $del_res01=true;
  }
  //---------------------------------
  if ($del_res01 == TRUE) {
    $strsql ="";
    $strsql ="insert into t_syain_sun select * from t_syain_sun_wk02";
    $ins_res02 =$obj2->sql_exe($strsql);
    //$ret = $obj ->table($ins_res02);
    //exit;
    //--------------
    if ($ins_res02[0] == 1) {
      $this->_redirect('upd_check12',$key_array1[0] .','.'xxxxx'.','.'su0');
      exit;
    } else {
      //echo 'gggggg';
      $this->_redirect('upd_check12',$key_array1[0] .','.'xxxxx'.','.'su9');
      exit;
    }
  } else {
    echo "<span sytle=\"color:#FF0000\">" . 'delete t_syain_sun --->' . ADDUPDATENG . "</span>";
    exit;
  }
  $obj2->dbend();
 }// end fucntion]
function match_234($key_array1)
 {
  //echo'rrrr';
  $obj2 = new addressoperation;
  //--------------------
  //件数CHECK
  //--------------------
  $cnt=0;
  $cnt_res00 = array();
  $ary_cnt00 = array();
  $sqls ='';
  $sqls="SELECT a.* FROM T_syain_sun_wk02 as a left JOIN t_syain_sun as b ON a.syainno = b.syainno and ";
  $sqls.="a.access_id = b.access_id WHERE b.syainno Is Null AND a.access_id=:access_id";
  $cnt_res00 = $obj2 ->getlist01_01($sqls,$key_array1[1]);
  if ($cnt_res00[RESDATA] ==FALSE) {
    $cnt=0;
    echo "<span sytle=\"color:#FF0000\">" . 't_syain_sun --->' . CNTZERO . "</span>";
  } else {
    $cnt = count($cnt_res00[RESDATA]);
    //
    $sqls ='';
    $sqls ="insert into t_syain_sun ";
    $sqls .="SELECT a.* FROM T_syain_sun_wk02 as a left JOIN t_syain_sun as b ";
    $sqls .="ON a.syainno = b.syainno and a.access_id = b.access_id ";
    $sqls .=" WHERE b.syainno Is Null AND a.access_id=:access_id";
    $res_mch01 = $obj2 ->sql_exe01($sqls,$key_array1[1]);
    if ($res_mch01[RESFLAG]=FALSE) {
         echo "<span sytle=\"color:#FF0000\">" . 't_syain_sun_wk03 insert failed  --->' . '???'  . "</span>";
         exit;
     } else {}
  }
  $obj2->dbend();
  if ($cnt <> 0) {
    $this->_redirect('upd_check12',$key_array1[0] .','.$cnt.','.'su0');
    exit;
  } else {
    //echo 'gggggg';
    $this->_redirect('upd_check12',$key_array1[0] .','.$cnt.','.'su9');
    exit;
  }
}// end fucntion]

////////////////////////
} // end_class
?>