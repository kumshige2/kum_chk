<?php
//require('model_base.php');
require_once('pdo2.class.php');
require_once('pdostatement2.class.php');
require_once('config.php');
require('encode.php');
//print 'mysql:dbname=DBNAME;host=DBSERVER';
// echo  '<p>' .'data.php ' . date( "Y/m/d (D) H:i:s", time() ) . "</p>\n";
//===========================================
// data operation  class
//    データ操作  module
//===========================================
class dataoperation  {
  //property
  var $_db;
  var $sqltype = DBTYPE_PQ;
  var $user = DBUSER_PQ;
  var $server = DBSERVER_PQ;
  var $password = DBPASSWORD_PQ;
  var $dbname = DBNAME_TEST_PQ;
  //==========================================
  //  constructor
  //===========================================
  function __construct($flag = NULL) {
      //------------------------------------------
	  // $flagによって処理を分岐
	  //------------------------------------------
	   $this ->dbdispatch($flag);
  } // end_construct
  //===========================================
  //  ＤＢへの接続判定
  //===========================================
  function dbdispatch($flag) {
    //------------------------------------------
	  // $flagがある場合は何もしない
	  //------------------------------------------
	    if (empty($flag))  {
		    //print 'EEEE';
		} else {
		   //require_once('mdb2.php');
		   $this->dbconnect();
		}
   } // end_function
   //===========================================
  //  ＤＢへの接続 PDO
  //===========================================
  function dbconnect() {
  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
	//-----------------------------------------------------------------------------
	  	  try{
                $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
               // print('Connection success!');
		}catch (PDOException $e){
			   print('Connection failed:'.$e->getMessage(). $dsn);
			   return $this ->resreturn(FALSE,$e->getMessage());
			 die();
        }
   } // end_function
  //===========================================
  //  ＤＢ Return
  //===========================================
  function resreturn ($res=FALSE,$data = NULL) {
      if (empty($data)) {
		  $data = NULL;
	  }
	  //------------------------------------------
	  // array(結果：TRUEかFALSE、値（ＳＥＬＥＣＴで取得した値)
	  //------------------------------------------
       return array($res, $data);
   }  // end_function
  //===========================================
  //  ＤＢ close
  //===========================================
  function dbclose () {
      //------------------------------------------
	  // db close
	  //------------------------------------------
	 $this-> _db = null;
   } // end_function
} // end_class
 ?>