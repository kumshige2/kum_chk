<?php
//===========================================
// User  operation  class
//    パンフ情報操作  module
//===========================================
// echo  '<p>' .'address.php ' .date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
require_once('Chromephp.php');
class addressoperation   extends dataoperation {
  //property
  //==========================================
  //  constructor
  //===========================================
	function __construct() {
		$this->options['crypttype'] = CRYPTTYPE;
		$this->options['security_salt'] = SECURITY_SALT;
		$this->encoding = 'UTF-8';
	  //------------------------------------------
	  // $flagによって処理を分岐
	  //------------------------------------------
		parent::__construct();
  }   // end__construct

   // PDO2 -> PDO::FETCH_ASSOC  
   // PDO3 -> PDO::FETCH_NUM

//----------------------------------------
// 住所から緯度経度を配列で返す関数
//----------------------------------------
   function get_gps_from_address( $address='' ){
   	$res = array();
   	$req = 'http://maps.google.com/maps/api/geocode/xml';
   	$req .= '?address='.urlencode($address);
   	$req .= '&sensor=false';    
   	$xml = simplexml_load_file($req) or die('XML parsing error');
   	if ($xml->status == 'OK') {
   		$location = $xml->result->geometry->location;
   		$res['lat'] = (string)$location->lat[0];
   		$res['lng'] = (string)$location->lng[0];
   	}
   	return $res;
} // end function 
//===========================================
//  年度設定 開講月より年度設定する
//===========================================
   function select_ndo_kaiko($kaiko) {
       //------------------------------------------
	  //  encoding check  
	  //------------------------------------------
   	if(!mb_check_encoding($kaiko,$this->encoding))  {
			  //return $this -> resreturns(FALSE);
   		return  FALSE;	
   	}

   	switch (substr($kaiko,4,2))  {
   		case '01';
   		$ndo_wk = intval(substr($kaiko,0,4)) -1;
   		break;
   		case '02';
   		$ndo_wk = intval(substr($kaiko,0,4)) -1;
   		break;
   		case '03';
   		$ndo_wk = intval(substr($kaiko,0,4)) -1;
   		break;
   		default;
   		$ndo_wk = intval(substr($kaiko,0,4)) ;
   		break;
   	}
   	return  $ndo_wk;
   }// end function
//---------------------------------------------
//    select in
//---------------------------------------------
function selectin01_01($sqls,$key_ary1) {
//------------------------------------------
//  encoding check
//------------------------------------------
//---- Postgresql  ------------------------------------------------------------
    $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
    $pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
//-----------------------------------------------------------------------------
    $inClause = substr(str_repeat(',?', count($key_ary1)), 1);
    $sqls = $sqls . "{$inClause}" . ")";
    //echo $dd;
    //$keys = array('066078','069311','069353','071043');
    //$keys = array();
    //var_dump($key_ary1);
    $result = $pdo->prepare($sqls)
              //->execute(['066078','069311','069353','071043'])
              ->execute($key_ary1)
              ->fetchAll();

     //var_dump ($stmt4);
        //echo $sql;
    if( count($result) > 0 ) {
      return  array(TRUE, $result);
     }  else {
          echo '<p>' . 'pdo select in   Failed---' . "</p>\n";
        return  array(FALSE);
    }
   }  // end_function
 //
  //===========================================
  //  select   key なし  postgresql num
  //===========================================
   function getlist01($sqls) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------

	  //---- Postgresql  ------------------------------------------------------------
   	$dsn_pq =  'pgsql:dbname=' . DBNAME_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
   	$pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //----------------------------------------------------------------------------- 

   	$result = $pdo->prepare($sqls)
   	->execute()
   	->fetchAll();


           //echo $sql;
   	if( count($result) > 0 ) {
		    //var_dump ($result);
			//foreach ($result as $rows) {
            //    echo '<p>' . e($rows['p_id']) . ':' . e($rows['p_nm']) . "</p>\n";
            // }
   		return  array(TRUE, $result);


   	}  else {
		       //echo '<p>' . 'Login  Failed---' . "</p>\n";
   		return  array(FALSE);
   	}

   }  // end_function
   //===========================================
  //  select   key なし   postgresql  assoc
  //===========================================
   function getlist02($sqls) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------

	  //---- Postgresql  ------------------------------------------------------------
   	$dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
   	$pdo = new PDO3($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //-----------------------------------------------------------------------------

   	$result = $pdo->prepare($sqls)
   	->execute()
   	->fetchAll();
   	if( count($result) > 8500 ) {
   		echo '<p>' . '▼メモリー上限：この条件式ではWEBからEXCELに出力するのに時間がかかってしまうので　条件を絞って　検索お願いします！' . "</p>\n";
   		return  array(FALSE);
   	} else {
           //echo $sql;
   		if( count($result) > 0 ) {
		    //var_dump ($result);
			//foreach ($result as $rows) {
            //    echo '<p>' . e($rows['p_id']) . ':' . e($rows['p_nm']) . "</p>\n";
           // }
		     // echo '<p>' . 'data success---' . "</p>\n";
   			return  array(TRUE, $result);
   		}  else {
   			echo '<p>' . 'data exception Failed---' . "</p>\n";
   			return  array(FALSE);
   		}
   	}
   }  // end_function
 //---------------------------------------------
//    key 1
//---------------------------------------------
   function getlist01_01($sqls,$key1) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------

	  //---- Postgresql  ------------------------------------------------------------
   	$dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
   	$pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //----------------------------------------------------------------------------- 

   	$result = $pdo->prepare($sqls)
   	->bindAll(array($key1), '1=s')
   	->execute()
   	->fetchAll();
	   //var_dump ($stmt4);
        //echo $sql;
   	if( count($result) > 0 ) {
   		return  array(TRUE, $result);
   	}  else {
		      //echo '<p>' . 'Login  Failed---' . "</p>\n";
   		return  array(FALSE);
   	}
   }  // end_function
 //
  //---------------------------------------------
//    key 1
//---------------------------------------------
   function getlist01_01_int ($sqls,$key1) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------

	  //---- Postgresql  ------------------------------------------------------------
   	$dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
   	$pdo = new PDO3($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //----------------------------------------------------------------------------- 

   	$result = $pdo->prepare($sqls)
   	->bindAll(array($key1), '1=i')
   	->execute()
   	->fetchAll();
	   //var_dump ($stmt4);
        //echo $sql;
   	if( count($result) > 0 ) {
   		return  array(TRUE, $result);
   	}  else {
		      //echo '<p>' . 'Login  Failed---' . "</p>\n";
   		return  array(FALSE);
   	}
   }  // end_function
 //
 //---------------------------------------------
//    key 2
//---------------------------------------------
   function getlist02_01($sqls,$key1,$key2) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------

	  //---- Postgresql  ------------------------------------------------------------
   	$dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
   	$pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //----------------------------------------------------------------------------- 

   	$result = $pdo->prepare($sqls)
   	->bindAll(array($key1,$key2), '1=s,2=s')
   	->execute()
   	->fetchAll();
	   //var_dump ($stmt4);
        //echo $sql;
   	if( count($result) > 0 ) {
   		return  array(TRUE, $result);
   	}  else {
		      //echo '<p>' . 'Login  Failed---' . "</p>\n";
   		return  array(FALSE);
   	}
   }  // end_function
 //
 //---------------------------------------------
//    key 2
//---------------------------------------------
   function getlist03_01($sqls,$key1,$key2,$key3) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------

	  //---- Postgresql  ------------------------------------------------------------
   	$dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
   	$pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //-----------------------------------------------------------------------------

   	$result = $pdo->prepare($sqls)
   	->bindAll(array($key1,$key2,$key3), '1=s,2=s,3=s')
   	->execute()
   	->fetchAll();
	   //var_dump ($stmt4);
        //echo $sql;
   	if( count($result) > 0 ) {
   		return  array(TRUE, $result);
   	}  else {
		      //echo '<p>' . 'Login  Failed---' . "</p>\n";
   		return  array(FALSE);
   	}
   }  // end_function
//---------------------------------------------
//    key 4
//---------------------------------------------
   function getlist04_01($sqls,$key1,$key2,$key3,$key4) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	  //---- Postgresql  ------------------------------------------------------------
   	$dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
   	$pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //-----------------------------------------------------------------------------
   	$result = $pdo->prepare($sqls)
   	->bindAll(array($key1,$key2,$key3,$key4), '1=s,2=s,3=s,4=s')
   	->execute()
   	->fetchAll();
	   //var_dump ($stmt4);
        //echo $sql;
   	if( count($result) > 0 ) {
   		return  array(TRUE, $result);
   	}  else {
		      //echo '<p>' . 'Login  Failed---' . "</p>\n";
   		return  array(FALSE);
   	}
   }  // end_function
 //
  //===========================================
  //  select   key なし  another database postgresql num
  //===========================================
   function getlist01_x1($sqls,$dbn,$sv) {
      //------------------------------------------
    //  encoding check
    //------------------------------------------

    //---- Postgresql  ------------------------------------------------------------
    //$dsn_pq =  'pgsql:dbname=' . DBNAME_PQ. ' host=' . DBSERVER_PQ_X1 . ' port=5432';
    $dsn_pq =  'pgsql:dbname=' . $dbn . ' host=' . $sv . ' port=5432';
    $pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
   //-----------------------------------------------------------------------------

    $result = $pdo->prepare($sqls)
    ->execute()
    ->fetchAll();


           //echo $sql;
    if( count($result) > 0 ) {
        //var_dump ($result);
      //foreach ($result as $rows) {
            //    echo '<p>' . e($rows['p_id']) . ':' . e($rows['p_nm']) . "</p>\n";
            // }
      return  array(TRUE, $result);


    }  else {
           //echo '<p>' . 'Login  Failed---' . "</p>\n";
      return  array(FALSE);
    }

   }  // end_function
//---------------------------------------------
//    key 2
//---------------------------------------------
function md5_256($passx) {
  $num =0;
  $pas_ary=[];
  for ($num = 0; $num < 10; $num++ ){
    $sss = $sss . 'A'. intval($num * 60 + 1) . ':' . 'H' . ($num + 1) * 60 .',';
  }
  $str00 = rtrim($sss,',');
  $pas_ary=array(
    array($passx,md5($passx),hash_hmac(CRYPTTYPE, $passx, false), hash(CRYPTTYPE, SECURITY_SALT.$passx),$str00)
  );
  return $pas_ary;
}  // end_function
//
 //----------------------------------------------------
 //  年度計算
 //----------------------------------------------------
   function get_financial_year($year, $month, $financial_month){

   	if($month > $financial_month){
   		return $year;
   	} else {
   		return $year - 1;
   	}
  } // end function

    //===========================================
  //  pamph update
  //===========================================
   // end_function
   //====================================
   //   update pmh_sek01
   //====================================

   //====================================
   //   update pno_com
   //====================================
   function updpno_com01 (
   	$p_id,
   	$p_no_seq,
   	$sts)
  //
   {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
	$arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
	//echo 'aaa:' . $varArray[0];
	//echo '<br>';
    foreach ($varArray as $value) {
    	if (is_array($value)) { $value = implode('',$value); }
		//if (!mb_check_encoding($value)) {
		//       print('encoding NG  :' );
		//	    print_r( $value);
		//	    echo '<br>';
		//	   return  array(FALSE);

		//} else {
		       //echo 'encoding OK';
			   // echo '<br>';
			  // return  array(TRUE, $result);
		//}
	}  //end foreach
	//---- Postgresql  ------------------------------------------------------------
	$dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
	$pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	//----------------------------------------------------------------------------- 
	// print('Connection ok:');
	// echo '$sts: ??? ' .$sts;
	 //echo '<br>';
	//ChromePhp::log('upd_pno_com01');
	switch  ($sts) {
		case 'rew' :
		$sql=UPD_PNO_COM01;
		break;
		case 'ins' :
		$sql=UPD_PNO_COM01;
		break;
		case 'upd' :
		$sql=UPD_PNO_COM01;
		break;
		default :

		$sql=UPD_PNO_COM01;
		break;
	}
	//echo  '<P>' . 'SQL-->' . $sql . '</p>';
	//ChromePhp::log('sql--->' . $sql);
	$result = $pdo->prepare($sql)
	->bindAll(
		array(
			'p_id'=>$p_id,
			'p_no_seq'=>$p_no_seq
		),
		array(
			'p_id'=>'s',
			'p_no_seq'=>'i'
		)
	)
	->execute()
	->fetchAll();
	if( count($result) > 0 ) {
		     //foreach ($result as $rows) {
             //}
		return  TRUE;

	}  else {
		return  FALSE;
		}  //end if
   } // end_function
   //====================================
   //   delete
   //====================================
   function del_pmh01($sql1,$keys) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
   	$sss =  explode( ',', $keys);
   	$p_id = $sss[0];
   	$p_no = $sss[1];

   	if(!mb_check_encoding($p_id,$this->encoding) ||
   		!mb_check_encoding($p_no,$this->encoding)) {
   		return $this_resreturns(FALSE);
   }
	  //---- Postgresql  ------------------------------------------------------------
   $dsn_pq =  'pgsql:dbname=' . DBNAME_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
   $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	 //----------------------------------------------------------------------------- 
	   //$sql=V_PMH12;
   $flg_del = $pdo->prepare($sql1)
   ->bindAll(
   	array('p_id' => $p_id, 'p_no' => $p_no),
   	array('p_id' => 's',  'p_no' => 's'     )
   )
   ->execute()
   ->fetchAll();


        //echo $sql;
   if( $flg_del ) {
		     //foreach ($result as $rows) {
             //    echo '<p>' . e($rows['p_id']) . ':' . e($rows['p_nm']) . "</p>\n";
             //}
   	return  TRUE;


   }  else {
		     //   echo '<p>' . 'Login  Failed---' . "</p>\n";
   	return  FALSE;
   }
   }  // end_function
   //====================================
   //   delete t_pmh_sub01 t_pmh_sek01
   //====================================
   function del_pmh11($keys) {
      //------------------------------------------
	  //  encoding check
	  //------------------------------------------
   	$sss =  explode( ',', $keys);
   	$p_id = $sss[0];
   	$p_no = $sss[1];

   	if(!mb_check_encoding($p_id,$this->encoding) ||
   		!mb_check_encoding($p_no,$this->encoding)) {
   		return $this_resreturns(FALSE);
   }
	  //---- Postgresql  ------------------------------------------------------------
   $dsn_pq =  'pgsql:dbname=' . DBNAME_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
   $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
	  //-----------------------------------------------------------------------------
	   $pdo ->beginTransaction();   //"";
	   $flg_del_sub = $pdo->prepare(DEL_PMH_SEK01)
	   ->bindAll(
	   	array('p_id' => $p_id, 'p_no' => $p_no),
	   	array('p_id' => 's',  'p_no' => 's'     )
	   )
	   ->execute()
	   ->fetchAll();

	    //-------------------------------------------------------
        // DEL_PMH_sek01 del_pmh_sub01 両方とも成功した場合 committ
		//-------------------------------------------------------
	   if( $flg_del_sub ) {
	   	$flg_del_sek = $pdo->prepare(DEL_PMH_SUB01)
	   	->bindAll(
	   		array('p_id' => $p_id, 'p_no' => $p_no),
	   		array('p_id' => 's',  'p_no' => 's'     )
	   	)
	   	->execute()
	   	->fetchAll();
	   	if ( $flg_del_sek ) {
	   		$pdo -> commit();
	   		return  TRUE;
	   	} else {
	   		$pdo -> rollback();
	   		return  FALSE;
			  } // end if
			}  else {
				$pdo -> rollback();
				return  FALSE;
		} // end if
   }  // end_function
//====================================
 //   update t_syain_sun
 //====================================
  function upd_syain_tachi01 (
     $access_id,
     $syainno,
     $license,
   $filler1,
   $birth_md,
   $company_id,
   $sts)
    //
  {
      //------------------------------------------
    //  encoding check
    //------------------------------------------
  $arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
  //echo 'aaa:' . $varArray[0];
  //echo '<br>';
  foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
    if (!mb_check_encoding($value)) {
           echo 'encoding NG  :' . $value;
          echo '<br>';
          return  array(FALSE);

    } else {
           //echo 'encoding OK';
         // echo '<br>';
         //return  array(TRUE, $result);
    }
  }  //end foreach
  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
  //-----------------------------------------------------------------------------
  // print('Connection ok:');
  // echo '$sts: ??? ' .$sts;
   //echo '<br>';
   switch  ($sts) {
     case 'rew' :
       $sql=UPD_SYAIN_TACHI01;
       break;
       case 'ins' :
       $sql=INS_SYAIN_TACHI01;
       break;
      case 'ins02' :
       $sql=INS_SYAIN_TACHI02;
       break;
     case 'del' :
       $sql=DEL_SYAIN_TACHI01;
       break;
     default :
       $sql=UPD_SYAIN_TACHI01;
       break;
   }
  //echo  '<P>' . 'SQL-->' . $sql . '</p>';
   $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
   'access_id' =>$access_id,
     'syainno' =>$syainno,
   'birth_md' =>$birth_md,
   'license' =>$license,
   'filler1' =>$filler1,
   'company_id' =>$company_id
  ),
     array(
   'access_id' => 's',
     'syainno' => 's',
   'birth_md' => 'i',
   'license' => 's',
   'filler1' => 's',
   'company_id' => 's'
   )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
    return  array(TRUE, $result);
  }  else {
    return  array(FALSE);
  }//end if
   } // end_function
//====================================
 //   update t_has_meisai01
 //====================================
  function upd_syain_chk01 (
     $client_id,
     $q_id,
     $cnts,
   $sqls,
   $sts)
    //
  {
      //------------------------------------------
    //  encoding check
    //------------------------------------------
  $arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
  //echo 'aaa:' . $varArray[0];
  //echo '<br>';
  foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
    if (!mb_check_encoding($value)) {
           echo 'encoding NG  :' . $value;
          echo '<br>';
          return  array(FALSE);

    } else {
           //echo 'encoding OK';
         // echo '<br>';
         //return  array(TRUE, $result);
    }
  }  //end foreach
  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
  //-----------------------------------------------------------------------------
  // print('Connection ok:');
  // echo '$sts: ??? ' .$sts;
   //echo '<br>';
   switch  ($sts) {
     case 'rew' :
       $sql=UPD_SYAIN_CHK01;
       break;
       case 'ins' :
       $sql=INS_SYAIN_TACHI01;
       break;
      case 'ins02' :
       $sql=INS_SYAIN_TACHI02;
       break;
     case 'del' :
       $sql=DEL_SYAIN_TACHI01;
       break;
     default :
       $sql=UPD_SYAIN_TACHI01;
       break;
   }
  //echo  '<P>' . 'SQL-->' . $sql . '</p>';
   $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
   'client_id' =>$client_id,
     'q_id' =>$q_id,
   'cnts' =>$cnts,
   'sqls' =>$sqls

  ),
     array(
   'client_id' => 's',
     'q_id' => 's',
   'cnts' => 'i',
   'sqls' => 's'
   )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
    return  array(TRUE, $result);
  }  else {
    return  array(FALSE);
  }//end if
   } // end_function
//====================================
 //   update t_syain_sun
 //====================================
  function del_syain_tachi01 (
     $access_id,
   $sts)
    //
  {
      //------------------------------------------
    //  encoding check
    //------------------------------------------
  $arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
  //echo 'aaa:' . $varArray[0];
  //echo '<br>';
  foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
    if (!mb_check_encoding($value)) {
           echo 'encoding NG  :' . $value;
          echo '<br>';
          return  array(FALSE);

    } else {
           //echo 'encoding OK';
         // echo '<br>';
         //return  array(TRUE, $result);
    }
  }  //end foreach
  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
  //-----------------------------------------------------------------------------
  // print('Connection ok:');
  // echo '$sts: ??? ' .$sts;
   //echo '<br>';
   switch  ($sts) {
     case 'rew' :
       //$sql=UPD_SYAIN_TACHI01;
       break;
     case 'ins01' :
       //$sql=INS_SYAIN_TACHI01;
       break;
     case 'ins02' :
       //$sql=INS_SYAIN_TACHI02;
       break;
     case 'del' :
       $sql=DEL_SYAIN_TACHI01;
       break;
      case 'del02' :
       $sql=DEL_SYAIN_TACHI02;
       break;  
     default :
       //$sql=UPD_SYAIN_TACHI01;
       break;
   }
  //echo  '<P>' . 'SQL-->' . $sql . '</p>';
   $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
   'access_id' =>$access_id,
   ),
     array(
   'access_id' => 's',
   )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
    return  array(TRUE, $result);
  }  else {
    return  array(FALSE);
  }//end if
   } // end_function
//====================================
   //   update t_uke
   //====================================
   function upd_uke01 (
   $p_id,
   $p_no_seq,
   $kaiko,
   $noki,
   $kgo_nm,
   $flg,
   $has_ira_ymd,
   $has_ymd,
   $filler,
   $upd_ymd,
   $cre_ymd,
   $p_nd,
   $sts)
    //
  {
      //------------------------------------------
    //  encoding check
    //------------------------------------------
  $arg_num = func_num_args(); // 引数の数を取得
    $varArray  = func_get_args(); // 引数リストを配列に格納
  //echo 'aaa:' . $varArray[0];
  //echo '<br>';
  foreach ($varArray as $value) {
        if (is_array($value)) { $value = implode('',$value); }
    if (!mb_check_encoding($value)) {
           echo 'encoding NG  :' . $value;
          echo '<br>';
          return  array(FALSE);
    } else {
           //echo 'encoding OK';
         // echo '<br>';
         //return  array(TRUE, $result);
    }
  }  //end foreach
  //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
  //-----------------------------------------------------------------------------
  // print('Connection ok:');
  // echo '$sts: ??? ' .$sts;
   //echo '<br>';
   switch  ($sts) {
     case 'rew' :
       $sql=UPD_UKE01;
       break;
       case 'ins' :
       $sql=INS_UKE01;
       break;
     case 'del' :
       $sql=DEL_UKE01;
       break;
     default :
       $sql=UPD_UKE01;
       break;
   }
  //echo  '<P>' . 'SQL-->' . $sql . '</p>';
   $result = $pdo->prepare($sql)
              ->bindAll(
                  array(
   'p_id' => $p_id,
     'p_no_seq' => $p_no_seq,
   'kaiko' => $kaiko,
   'noki' => $noki,
   'kgo_nm' =>$kgo_nm,
   'flg' =>$flg,
   'has_ira_ymd' => $has_ira_ymd,
   'has_ymd' =>$has_ymd,
   'filler' =>$filler,
   'upd_ymd' =>$upd_ymd,
   'cre_ymd' =>$cre_ymd,
   'p_nd' => $p_nd
  ),
     array(
   'p_id' => 's',
     'p_no_seq' => 'i',
   'kaiko' => 's',
   'noki' => 's',
   'kgo_nm' =>'s',
   'flg' =>'i',
   'has_ira_ymd' => 's',
   'has_ymd' =>'s',
   'filler' =>'s',
   'upd_ymd' =>'s',
   'cre_ymd' =>'s',
   'p_nd' => 's'
   )
   )
   ->execute()
   ->fetchAll();
    if( count($result) > 0 ) {
    return  array(TRUE, $result);
  }  else {
    return  array(FALSE);
  }//end if
   } // end_function
//====================================
 //   delete t_uke_meisai
 //====================================
function del_tbl01($keys) {
      //------------------------------------------
    //  encoding check
    //------------------------------------------
    $sss = array();
    //echo "<pre>". 'key ' ;
//echo ($keys);
//echo "</pre>";
    $sss =  explode( ',', $keys);
    $tbl_id = $sss[0];
    $tbl_seq = intval($sss[1]);
    $tbl_kbn = intval($sss[2]);
    if(!mb_check_encoding($tbl_id,$this->encoding) ||
       !mb_check_encoding($tbl_seq,$this->encoding) ||
       !mb_check_encoding($tbl_kbn,$this->encoding)) {
        return $this_resreturns(FALSE);
      }
    //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO2($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
    //-----------------------------------------------------------------------------
     $pdo ->beginTransaction();   //"";
     $flg_del_sub = $pdo->prepare(DEL_TBL01)
              ->bindAll(
                  array('tbl_id' => $tbl_id,'tbl_seq' => $tbl_seq,'tbl_kbn' => $tbl_kbn),
                  array('tbl_id' => 's','tbl_seq' => 'i','tbl_kbn' => 'i')
                )
              ->execute()
              ->fetchAll();
      //-------------------------------------------------------
        // DEL_PMH_sek01 del_pmh_sub01 両方とも成功した場合committ
    //-------------------------------------------------------
    if( $flg_del_sub ) {
      $pdo -> commit();
      return array(TRUE, $flg_del_sub);
    } else {
      $pdo -> rollback();
          return array(FALSE);
    } // end if
   }  // end_function
//===========================================
//  DB close  
//===========================================
   function dbend()  {
   	$this->dbclose();

   }// end_function
//===========================================
  //  Field get
  //===========================================
  function fld_get($sqls)
 {
    //---- Postgresql  ------------------------------------------------------------
       $dsn_pq =  'pgsql:dbname=' . DBNAME_TEST_PQ. ' host=' . DBSERVER_PQ . ' port=5432';
       $pdo = new PDO3_1($dsn_pq,  DBUSER_PQ, DBPASSWORD_PQ);
   //-----------------------------------------------------------------------------
     $pdoStatement = $pdo->query($sqls);
     $columns = array();
     for ($i = 0; $i < $pdoStatement->columnCount(); $i++) {
        $meta = $pdoStatement->getColumnMeta($i);
       $columns[] = $meta['name'];
      }
    //var_dump($columns);
    //$ret01 = $this ->table($columns);
    if( count($columns) > 0 ) {
       return  array(TRUE, $columns);
    }  else {
       return  array(FALSE);
    }  //end if

   }  // end_function

//----------------------------
//  var_dump 
//-----------------------------
   function table($val){
   	if(!$val) echo 'table error';
   	if(is_array($val)){
   		echo '<table border="1" cellspacing="0" bordercolor="#333333" >';
   		$this ->tables($val);
   		echo '</table>';
   	}else{
   		echo var_dump($val);
   	}
 } // end function
 function tables($val){
 	echo '<tr align="left" valign="top">'.chr(10);
 	echo ' <td align="left" valign="top" bgcolor="#33EE33">key</td>'.chr(10);
 	echo ' <td align="left" valign="top" bgcolor="#33EE33">value</td>'.chr(10);
 	echo '</tr>'.chr(10);
 	foreach($val as $key => $_val){
 		echo '<tr align="left" valign="top">'.chr(10);
 		echo ' <td align="left" valign="top" bgcolor="#FFFFFF">'.$key.'</td>'.chr(10);
 		echo ' <td align="left" valign="top" bgcolor="#FFFFFF">'.chr(10);
 		if(is_array($_val)) $this->table($_val);
 		else echo $_val.'</td>'.chr(10).'</tr>'.chr(10);
 	}
 } // end function
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
//------------------------------------------------------
//  配列にhtmlspecialcharsをかける
//------------------------------------------------------
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

  //===========================================
  //  Sort  
  //===========================================
 function datasort ($data)  {
 	foreach ((array)$data as $key->$value) {
 		$data_res[$key] = mb_convert_kana($value['p_nm'],"cH","UTF-8");
 	}
 	array_multisort($data_res,SORT_ASC,$data);
 	return $data;
   }  // end_function
  //===========================================
  //  SQL create  
  //===========================================
   function mkSQL($conditions){
   	$sql = "";

		$bind = array();//結合のforeign key配列を格納
		if(isset($conditions["bind"])){
			$bind = $coditions["bind"];
			unset($conditions["bind"]);
		}
		
		if(!empty($conditions)){
			$column = "";
			$join = "";
			$where = "";
			$junnbann = "";
			$seigenn = "";
			if(count($conditions)==1){//bindがない場合
				if(!isHash($conditions)){//テーブル名のみならば
					$sql = "SELECT * FROM {$conditions[0]};";
				}else{//テーブル名以下設定があれば
					$sql = "SELECT \n";
					foreach($conditions as $tbl => $item){
						$condition = $item["conditions"];//
						$order = isset($item["order"])?$item["order"]:"";
						$limit = isset($item["limit"])?$item["limit"]:"";
						$fields = isset($item["fields"])?$item["fields"]:"";//
						$num = 0;
						if(!empty($fields)){//fieldsがあれば
							foreach($fields as $field){//fieldsを設定
								if($num == count($fields)-1){//最後の要素
									$sql .= $field."\n";
								}else{//それ以外
									$sql .= $field.",\n";
									$num++;
								}
							}
						}else{//fieldsの設定がなければ
							$sql .= "*\n";
						}
						$sql .= "FROM\n";
						$sql .= $tbl."\n";
						if(!empty($condition)){//conditionsがあれば
							$sql .= "WHERE\n";
							$num = 0;
							foreach($condition as $fie => $con){
								if(!is_array($con) && strpos($fie,"?")==false){//当てはめ?無しで且つ値での指定の場合
									if($num == count($condition)-1){//最後の要素
										$sql .= $fie."=".(is_string($con)?"'".$con."'":$con)."\n";
									}else{//それ以外
										$sql .= $fie."=".(is_string($con)?"'".$con."'":$con)." AND\n";
										$num++;
									}
								}elseif(is_array($con)){//配列指定の場合（当てはめ?必須）
									//$chgd = str_replace("?", "%s", $fie);
									$fie_arr = explode("?",$fie);
									$comp_str = "";
									for($i=0;$i<count($fie_arr);$i++){
										$comp_str .= $fie_arr[$i];
										if(isset($con[$i])){
											if(is_string($con[$i])){
												$comp_str .= "'".$con[$i]."'";
											}else{
												$comp_str .= $con[$i];
											}
										}
									}
									if($num == count($condition)-1){//最後の要素
										$sql .= $comp_str."\n";
									}else{//それ以外
										$sql .= $comp_str." AND\n";
										$num++;
									}
								}else{//当てはめ?に値を指定してある場合
									$chgd = str_replace("?", "%s", $fie);
									if($num == count($condition)-1){//最後の要素
										$sql .= sprintf($chgd,(is_string($con)?"'".$con."'":$con))."\n";
									}else{//それ以外
										$sql .= sprintf($chgd,(is_string($con)?"'".$con."'":$con))." AND\n";
										$num++;
									}
								}
							}
						}//
						if(!empty($order)){//orderがあれば
							$sql .= "ORDER BY\n";
							$num = 0;
							foreach($order as $by => $jun){
								if($num == count($order)-1){//最後の要素
									$sql .= $by." ".$jun."\n";
								}else{//それ以外
									$sql .= $by." ".$jun.",\n";
								}
							}
						}//
						if(!empty($limit)){//limitがあれば
							$sql .= "LIMIT {$limit}\n";
						}
					}
					$sql .= ";";
				}
			}elseif(count($conditions)>1){//bindがある場合
				if(!isHash($conditions)){//テーブル名のみならば
					$sql = "SELECT * FROM \n";
					$num = 0;
					foreach($conditions as $tbl){
						if($num==0){//最初の要素
							$first_table = $tbl;
							$sql .= $tbl." \n";
							$num++;
						}elseif($num==count($conditions)-1){//最後の要素
							$sql .= "LEFT JOIN ".$tbl." ON (".$first_table.".id=".$tbl.".".$first_table."_id);";
						}else{//それ以外
							$sql .= "LEFT JOIN ".$tbl." ON (".$first_table.".id=".$tbl.".".$first_table."_id) \n";
							$num++;
						}
					}
				}else{//テーブル名以下設定があれば
					//個別に変数に格納し
					$fie_count = 0;
					$conditions_count = 0;
					$order_count = 0;
					$limit_count = 0;
					$tbl_count = 0;
					
					$fie_count_chk = 0;
					$conditions_count_chk = 0;
					$order_count_chk = 0;
					$limit_count_chk = 0;
					foreach($conditions as $tbl => $item){
						$condition = $item["conditions"];//
						$order = $item["order"];
						$limit = $item["limit"];
						$fields = $item["fields"];//
						if(!empty($fields)){//fieldsがあれば
							$fie_count_chk++;
						}						
						if(!empty($condition)){//conditionsがあれば
							$conditions_count_chk++;
						}
						if(!empty($order)){
							$order_count_chk++;
						}
						if(!empty($limit)){//limitがあれば
							$limit_count_chk++;
						}
					}
					foreach($conditions as $tbl => $item){
						$condition = $item["conditions"];//
						$order = $item["order"];
						$limit = $item["limit"];
						$fields = $item["fields"];//
						define("FIRST_TABLE", $tbl);
						$num = 0;
						
						if(!empty($fields)){//fieldsがあれば
							$fie_count++;
							foreach($fields as $field){//fieldsを設定
								if($num == count($fields)-1 && $fie_count == $fie_count_chk){//最後の要素
									$column .= $field."\n";
								}else{//それ以外
									$column .= $field.",\n";
									$num++;
								}
							}
						}elseif($count == count($conditions)-1 && $fie_count==0){//全てのテーブルにfieldsの設定がなければ
							$column .= "*\n";
						}

						//結合処理ここから
						
							if($tbl_count==0){//最初の要素
								$first_table = $tbl;
								$tbl_count++;
							}else{//それ以外
								$join .= "LEFT JOIN ".$tbl." ON (".$first_table.".id=".$tbl.".".$first_table."_id) \n";
								$tbl_count++;
							}

						//結合処理ここまで
							
						if(!empty($condition)){//conditionsがあれば
							//$where .= "WHERE\n";
							$conditions_count++;
							$num = 0;
							foreach($condition as $fie => $con){
								if(!is_array($con) && strpos($fie,"?")==false){//当てはめ?無しで且つ値での指定の場合
									if($num == count($condition)-1 && $conditions_count==$conditions_count_chk){//最後の要素
										$where .= $fie."=".(is_string($con)?"'".$con."'":$con)."\n";
									}else{//それ以外
										$where .= $fie."=".(is_string($con)?"'".$con."'":$con)." AND\n";
										$num++;
									}
								}elseif(is_array($con)){//配列指定の場合（当てはめ?必須）
									//$chgd = str_replace("?", "%s", $fie);
									$fie_arr = explode("?",$fie);
									$comp_str = "";
									for($i=0;$i<count($fie_arr);$i++){
										$comp_str .= $fie_arr[$i];
										if(isset($con[$i])){
											if(is_string($con[$i])){
												$comp_str .= "'".$con[$i]."'";
											}else{
												$comp_str .= $con[$i];
											}
										}
									}
									if($num == count($condition)-1 && $conditions_count==$conditions_count_chk){//最後の要素
										$where .= $comp_str."\n";
									}else{//それ以外
										$where .= $comp_str." AND\n";
										$num++;
									}
								}else{//当てはめ?に値を指定してある場合
									$chgd = str_replace("?", "%s", $fie);
									if($num == count($condition)-1 && $conditions_count==$conditions_count_chk){//最後の要素
										$where .= sprintf($chgd,(is_string($con)?"'".$con."'":$con))."\n";
									}else{//それ以外
										$where .= sprintf($chgd,(is_string($con)?"'".$con."'":$con))." AND\n";
										$num++;
									}
								}
							}
						}//
						
						if(!empty($order)){//orderがあれば
							//$sql .= "ORDER BY\n";
							$order_count++;
							$num = 0;
							foreach($order as $by => $jun){
								if($num == count($order)-1 && $order_count==$order_count_chk){//最後の要素
									$junnbann .= $by." ".$jun."\n";
								}else{//それ以外
									$junnbann .= $by." ".$jun.",\n";
								}
							}
						}//
						if(!empty($limit)){//limitがあれば
							//$sql .= "LIMIT {$limit}\n";
							$limit_count++;
							$seigenn = $limit;
						}
						$count++;
					}
					
					//最後に結合
					$sql = "SELECT\n";
					$sql .= $column;
					$sql .= "FROM\n";
					$sql .= FIRST_TABLE."\n";
					$sql .= $join;
					if($conditions_count!=0){
						$sql .= "WHERE\n";
						$sql .= $where;
					}
					if($order_count!=0){	
						$sql .= "ORDER BY\n";
						$sql .= $junnbann;
					}
					if($limit_count!=0){	
						$sql .= "LIMIT {$limit}\n";
						$sql .= $seigenn;
					}
					$sql .= ";";
				}
			}
		}	
		return $sql;
	}

	function isHash(&$array) {
		$i = 0;
		foreach($array as $k => $dummy) {
			if ( $k !== $i++ ) return true;
		}
		return false;
	}
} 
function json_safe_encode($data){
	return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
}
// end function


// end_class
?>