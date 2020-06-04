<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
require '../../vendor/autoload.php';
require_once(LIBPATH.'address_test.php');
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
class juk_knr_upl01   extends view {
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
//  pamph 一覧情報取得
//===========================================
function main()
{
	$obj = new addressoperation;
	ChromePhp::log('Hello console');
	ChromePhp::log('juk_knr_upl01');

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
	//  instance
	//------------------------------------------
	$form = new HTML_Quickform2('qform_smarty','POST',array('action' => 'index.php?module=juk_knr_upl01'));

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
		//  clear t_c1
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
        }  // end try
        //------------------------------------
		//  insert  t_c1
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
            // 1回以上実行された
           // $msg = array('green', 'Upload successful');
            $msg = array('#3399ff', 'Upload successful');
            //---------------------------------->
            //-------------------------------------------------
            // t_syain_sun wk01 ---> t_syain_sun
            //-------------------------------------------------
            $stmt = $pdo->prepare('SELECT * FROM  v_syain_sun_match01');
            $stmt->execute();
            while ( $rows = $stmt->fetch ( PDO::FETCH_ASSOC ) ) {
              $ins_res01 =$obj->upd_syain_tachi01(
                $rows['access_id'],$rows['syainno'],$rows['license'], $rows['filler1'], $rows['birth_md'],$rows['company_id'],'ins');
              }
            //----------------------------
            if ($ins_res01 == TRUE) {

                } else {
                $this->_redirect('upd_check11',$sqls.','.$tmp_name.','.'si9');
            //$ret55 = $obj ->table($row);
            };
            //-------------------------------->-
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

 //-------------------------------------------
  //  quick form  $_FILES['upfile']
  //----------------------------------------
   $form->addRecursiveFilter('trim');
  if (isset($_FILES['upfile']['name'])) {
    $this -> smarty -> assign('name',  $_FILES['upfile']['name']);
    $this -> smarty -> assign('type',  $_FILES['upfile']['type']);
    $this -> smarty -> assign('error', $_FILES['upfile']['error']);
    $this -> smarty -> assign('cnt',  $i -1);
      //$this -> smarty -> assign('cnt',  $cnts);
    $this -> smarty -> assign('msg', $msg[1]);
    $this -> smarty -> assign('colors', $msg[0]);
  } else {
   $this -> smarty -> assign('name',  NULL);
   $this -> smarty -> assign('type',  NULL);
   $this -> smarty -> assign('error', NULL);
   $this -> smarty -> assign('cnt',  0);
      //$this -> smarty -> assign('cnt',  $cnts);
   $this -> smarty -> assign('msg', NULL);
 }
 $this->createForm($form);
}  // end_function
//===========================================
// フォームの表示
//===========================================
function createForm($form){
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
	$this -> smarty->assign("ndo", $this->pub_ndo);
	$this -> smarty->assign("se_user_id", $_SESSION[USER_ID]);
	$this -> smarty->assign("se_picture", $_SESSION[PICTURE]);
	$this -> smarty->assign("se_username_x", $_SESSION[USERNAME_X]);
	$this -> smarty->assign("se_staff_type", $_SESSION[STAFF_TYPE]);
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
} // end function
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
} // end_class
?>