<?php
  function e($str,$charset = 'UTF-8') {
    return htmlspecialchars($str,ENT_QUOTES,$charset);
  }
  function format($datetime, $format='yyyy/MM/dd') {
    $ts=strtotime($datetime);
    return $ts;
	//print(date($format,$ts));
  }
//===========================================
// 数値以外をクオートする
//===========================================
   function quote_smart($value)  {
  
    // 数値以外をクオートする
   // if (!is_numeric($value)) {
        $value = "'" . mysql_real_escape_string($value) . "'";
    //}
    return $value;
   }
 //===========================================
// あいまい検索　％を　つける
//===========================================
   function quote_aimai($value)  {
  
    
    //if (!is_numeric($value)) {
        $value = "'%" . mysql_real_escape_string($value) . "%'";
    //}
    return $value;
   }
//===========================================
// 数値以外をクオートする
//===========================================
   function quote_smart_ymd($value)  {
  
    // 数値以外をクオートする
    if (is_null($value)) {
		 $value = "NULL";      
	} else  {
		 if (empty($value)) {
			 $value = "NULL";			
		 } else {
	       $value = "'" . mysql_real_escape_string($value) . "'";
		 }
    }
    return $value;
   } 
//===========================================
// 数値
//===========================================

  function quote_smart_num($value)  {
  
    // 数値以外をクオートする
    if (is_numeric($value)) {
      
	} else  {
	    $value = 0;
		
    }
    return $value;
   }   
//------------------------------------
//   obj ---> array
//------------------------------------
function obj2arr($obj)  
{  
    if ( !is_object($obj) ) return $obj;  
  
    $arr = (array) $obj;  
  
    foreach ( $arr as &$a )  
    {  
        $a = obj2arr($a);  
    }  
  
    return $arr;  
}
function object2array($data)
{
  if (is_object($data)) {
    $data = (array)$data;
  }

  if (is_array($data)) {
    foreach ($data as $key => $value) {
      $key1 = (string)$key;
      $key2 = preg_replace('/\W/', ':', $key1);

      if (is_object($value) or is_array($value)) {
        $data[$key2] = object2array($value);
      } else {
        $data[$key2] = (string)$value;
      }

      if ($key1 != $key2) {
        unset($data[$key1]);
      }
    }
  }

  return $data;
}  
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
?>