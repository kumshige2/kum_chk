<?php
//require_once('HTML/QuickForm2.php');
//require_once('HTML/QuickForm2/Renderer.php');
//require_once('HTML/QuickForm2/Element/InputFile.php');
//require_once('HTML/QuickForm2/Container.php');
require '../../vendor/autoload.php';
require_once(LIBPATH.'address.php');

// echo  '<p>' .'addlist.php ' . date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
// echo "<pre>". 'post ' ;
//print_r($_POST);
//echo "</pre>";
//echo "<pre>". 'session  ';
//print_r($_SESSION);
//echo '---> user_id:' . $_SESSION[USER_ID];
//echo "</pre>";
//echo "<pre>". 'file  ';
//   print_r($_FILES);
// echo "</pre>";
//===========================================
// addlist   class
//===========================================
class csv_upl01 extends view  {
  //property
  var $smarty;
  //==========================================
  //  constructor
  //===========================================
  function __construct() {
    $this->smarty = parent::__construct();
  }  // end_construct
  //===========================================
  //  pamph 一覧表示
  //===========================================
  function main() {
   if (isset($_POST[P_ADDSEARCH]) ) {
	 	   //一覧
     $this->_redirect(ADDSEARCH);
   };
   $form = new HTML_Quickform2('qform_smarty','POST',array('action' => 'index.php?module=csv_upl01'));
// パラメータを正しい構造で受け取った時のみ実行
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
        $dsn_pq =  'pgsql:dbname=' . DBNAME_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
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
        $stmt = $pdo->prepare('DELETE FROM t_c1_' . $_SESSION[USER_ID])
        ->execute();
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
        $stmt = $pdo->prepare('INSERT INTO t_c1_'. $_SESSION[USER_ID] .
          ' VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
          ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
          ?, ?, ?, ?, ?, ?, ?, ?)');
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
          if (count($row) !== 68) {
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

        /* 結果メッセージをセット */
        if (isset($executed)) {
            // 1回以上実行された
          $msg = array('green', 'Upload successful');
        } else {
            // 1回も実行されなかった
          $msg = array('black', 'There were nothing to import');
        }   // end if
      } catch (Exception $e) {

        /* エラーメッセージをセット */
        $msg = array('red', $e->getMessage());

    }  // end try

  } else {

    // XHTMLとしてブラウザに認識させる
    // (IE8以下はサポート対象外ｗ)
    //header('Content-Type: application/xhtml+xml; charset=utf-8');

  }// end if
 //   print_r($msg);
 //echo "</pre>";

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
  } else {
   $this -> smarty -> assign('name',  NULL);
   $this -> smarty -> assign('type',  NULL);
   $this -> smarty -> assign('error', NULL);
   $this -> smarty -> assign('cnt',  0);
      //$this -> smarty -> assign('cnt',  $cnts);
   $this -> smarty -> assign('msg', NULL);
 }
 $this->createForm($form);
 } // end_function
 /*-----------------------------------------------*/
 /* HTML特殊文字をエスケープする関数                   */
 /*-----------------------------------------------*/
 function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
//===========================================
// フォームの表示
//===========================================
function createForm($form){

  HTML_QuickForm2_Renderer::register('smarty', 'HTML_QuickForm2_Renderer_Smarty');
  $renderer = HTML_QuickForm2_Renderer::factory('smarty');
  $renderer->setOption('old_compat', true);
  $renderer->setOption('group_errors', true);

		// フォームの作成
  $FormData = $form->render($renderer)->toArray();
  $this->smarty->assign('form', $FormData);
  $this->smarty->display('csv_upload01.html');
	}// FUNCTION
}// end_class
?>

