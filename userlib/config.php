<?php

/**
 * 設定ファイル
 */

// データベースアカウント情報の設定
define('DBTYPE', 'mysql');
define('DBUSER', 'kumkum_shi');
define('DBSERVER', 'localhost');
define('DBPASSWORD', 'u01654');
define('DBNAME', 'pamphlet');
define('DBTYPE_PQ', 'postgresql');
//define('DBSERVER_PQ_X1', '172.16.58.66');
define('DBSERVER_PQ_X1', '172.16.58.224');
define('DBSERVER_PQ', '172.16.58.224');

define('DBUSER_PQ', 'postgres');
define('DBPASSWORD_PQ', 'u01654');
define('DBNAME_PQ', 'pamphlet');
define('DBNAME_TEST_PQ', 'snno3_test');
define('DBPORT_PQ', 5432);
define('DSN_PQ_X1','pgsql:dbname=pamphlet host=172.16.58.224 port=5432');
define('DSN_TEST_PQ_X1','pgsql:dbname=snno3_test host=172.16.58.224 port=5432');
define('DSN_PQ','pgsql:dbname=pamphlet host=172.16.58.224 port=5432');
define('DSN_TEST_PQ','pgsql:dbname=snno3_test host=172.16.58.224 port=5432');

// ENCODING  暗号化ソルト値
define('SECURITY_SALT', 'xxxxx');
define('CRYPTTYPE', 'sha256');
define('DB_ENCODING', 'utf8mb4');

// Twitterアクセスで必要な値
define('TW_CONSUMER_KEY', 'Twitterアプリ登録時の「Consumer Key」'); // ここを編集
define('TW_CONSUMER_SECRET', 'Twitterアプリ登録時の「Consumer Secret」'); // ここを編集
define('TW_GETREQUESTTOKEN_URL', 'http://api.twitter.com/oauth/request_token');
define('TW_AUTHORIZE_URL', 'http://twitter.com/oauth/authorize');
define('TW_GETACCESSTOKEN_URL', 'http://twitter.com/oauth/access_token');
define('TW_REDIRECT_URL', 'http://127.0.0.1/samples/chap7/Address/index.php');
define('TW_REQUEST_TOKEN', 'tw_request_token');
define('TW_REQUEST_TOKEN_SECRET', 'tw_request_token_secret');
define('TW_ACCESS_TOKEN', 'tw_access_token');
define('TW_ACCESS_TOKEN_SECRET', 'tw_access_token_secret');
define('TW_OAUTH_VERIFIER', 'oauth_verifier');

// Facebookアクセスで必要な値
define('FB_APP_ID', 'Facebookアプリ登録時の「App ID」'); // ここを編集
define('FB_APP_SECRET', 'Facebookアプリ登録時の「App Secret」'); // ここを編集

// ディレクトリパス
define('LIBPATH', './userlib/');
define('MODULEPATH', './pagemodule/');
define('TEMPLATESPATH', './template/');
define('COMPILEPATH', './template/compile/');
define('EXCEL_PMH_DATA01', 'out/pmh_data');

// 戻り値判定
define('RESFLAG', 0);
define('RESDATA', 1);

// $_SESSIONのキー
//define('USER_ID', 'user_id');

// モジュール名
define('DEFAULT_MODULE', 'addlist');
define('ADDDETAIL', 'adddetail');
define('LOGIN', 'login');
define('USERSET', 'user_setting');
define('ADDSET', 'address_setting');
define('ADDSEARCH', 'search');
define('RESET', 'reset');
define('EXCEL01', 'excel_out01');
define('GANT_PMH1', 'gant_pmh01');
define('ORD_SCHE01', 'order_sche01');
define('DASHBOARD', 'dashboard01');
define('DATATABLE', 'datatable01');
define('CHARTJS', 'chartjs01');
define('SYAINCSL160_01',"out/tachi_syain_csl" . date('Ymd') . ".txt");
define('SYAINCSL160_02',"out/tachi_syain_csl_test" . date('Ymd') . ".txt");
define('SYAINJUK160_01',"out/tachi_syain_juk" . date('Ymd') . ".txt");
define('SYAINCSL234_01',"out/suntory_syain_csl" . date('Ymd') . ".txt");
define('SYAINCSL234_02',"out/suntory_syain_csl_test" . date('Ymd') . ".txt");
define('SYAINJUK234_01',"out/suntory_syain_juk" . date('Ymd') . ".txt");

// Data 仕様書
define('GUIDE_TEMP01', 'template/Data_guide_temp02.html');

// オプションのキー
define('ID', 'id');
define('MODULE', 'module');
define('ACCESSID', 'access_id');
define('CLIENTID', 'client_id');
define('CLIENTNM', 'kgo_nm');
define('SYAINDUM', 't_syain_sun_dummy');

// $_POSTのキー
define('P_USERID', 'uname');
define('P_USERPASS', 'upass');
define('P_USERSET', 'user_set');
define('P_ADDDETAIL', 'detail');
define('P_ADDID', 'p_id');
define('P_ADDNEW', 'new');
define('P_ADDSEARCH', 'search');
define('P_ADDEDIT', 'edit');
define('P_ADDDELETE', 'del');
define('P_CLEAR', 'clr');
define('P_LOGOUT','logout');
define('P_RESET','reset');
define('P_SEND','send');
define('P_EXCEL','excel');
define('P_SELECT','pmh_select');
define('P_ORD_SCHE','order_sche');
define('P_GANT_PMH01','gant_pmh01');
define('P_ORDER_SHEET00','order_sht00');
define('P_ORDER_SHEET01','order_sht01');
define('P_PAMPH_INF01','pamph_inf01');
define('P_DASHBOARD','dashboard');
define('P_DATATABLE','datatable');
define('P_CHARTJS','chartjs');
define('USER_ID','user_id');
define('PICTURE','picture');
define('USERNAME_X','username_x');
define('STAFF_TYPE','staff_type');
define('P_DW01','download01');
define('P_KUMA00','kum_check00');
define('P_ADDLIST','addlist_stylish_port04.html');
define('P_JACO','3002797');
define('P_MD5','md5');
// layout_detail_view fleld 表示数
define('FLDS', 20);
//
// メッセージ定数
define('LOGINERR', "正しいユーザIDとパスワードを入力してください !");
define('USERIDEMPTY', "ユーザIDが空白です");
define('USERIDERR', "ユーザIDが不正です");
define('PASSEMPTY', "パスワードが空白です");
define('PASSSIMEMPTY', "現在のパスワードが空白です");
define('PASSNEWEMPTY', "新規パスワードが空白です");
define('PASSCONFEMPTY', "パスワードの確認が空白です");
define('TWACCESSERR', "Twitterと未連携です");
define('TWERR', "Twitter情報を取得できません");
define('FBERR', "Facebook情報を取得できません");
define('FBNOTFOUND', " is Not found");
define('GMAPERR', "無効な住所です");
define('NAMEEMPTY', "名前が空白です!");
define('KSYEMPTY', "研修№は必須項目です!");
//
define('KAIKOEMPTY',"開講月が未入力です!");
define('ACCESSIDEMPTY',"Access-idが未入力です!");
define('SYAINNOEMPTY',"社員Noが未入力です!");
define('CLIENTIDEMPTY',"Client-IDが未入力です!");
define('COMPANYIDEMPTY',"Company_IDが未入力です!");
define('CLIENTNMEMPTY',"Client_NMが未入力です!");
define('INSATUEMPTY',"印刷業者が未入力です!");
define('KNJDANEMPTY',"幹事団体が未入力です!");
define('ADNMEMPTY',"AD名が未入力です!");
define('ADCDEMPTY',"ＡＤコードが未入力です!");
define('BSYNMEMPTY',"部署が未入力です!");
define('BSYCDEMPTY',"部署コードが未入力です!");
define('PNMEMPTY',"パンフ名が未入力です!");
define('PMHTYPEEMPTY',"パンフタイプが未入力です!");
define('ADNUMERR',"ＡＤコードは英数字のみ入力可です!");
define('BSYNUMERR',"ＢＳＹコードは英数字のみ入力可です!");
define('APPYMDEMPTY',"申込締切日が未入力のようです!");
define('DELIYMDEMPTY',"納品日が未入力のようです!");
define('REPYMDEMPTY',"リポート提出期限日が未入力のようです!");
define('KEYEMPTY',"KEY項目が未入力のようです!");
//
define('READNAMEEMPTY', "ふりがなが空白です");
define('ACCESSIDREGEX', "AccessIDは半角英数字で入力してください");
define('TELREGEX', "電話番号は半角数字で入力してください");
define('SYAINNOREGEX', "社員番号号は半角英数字で入力してください");
define('COMPANYIDREGEX', "company-idは半角数字で入力してください");
define('CLIENTIDREGEX', "client_idは半角数字で入力してください");
define('BIRTHMDREGEX', "Birth_mdは半角数字で入力してください");
//
define('ACCESSIDLENG', "AccessId ID桁数を確認してください");
define('ACCESSIDERR', "データが該当企業とは違うようです！");
define('SYAINNOLENG', "syainnoの桁数を確認してください");
define('COMPANYIDLENG', "Company-ID 1桁です！");
define('CLIENTIDLENG', "Client_id桁数を確認してください");
//
define('TELSUBREGEX', "電話番号（サブ）は半角数字で入力してください");
define('POSTREGEX', "郵便番号は半角数字で入力してください");
define('MAILREGEX', "メールアドレスは半角英数字で入力してください");
define('MAILSUBREGEX', "メールアドレス（サブ）は半角英数字で入力してください");
define('TWAREGEX', "Twitterアカウントは半角英数字で入力してください");
define('FBAREGEX', "Facebookアカウントは半角英数字で入力してください");
define('PASSREGEX', "新規パスワードは半角英数字で入力してください");
define('NAMEMAX', "名前が長すぎます");
define('READNAMEMAX', "ふりがなが長すぎます");
define('TELMAX', "電話番号が長すぎます");
define('TELSUBMAX', "電話番号（サブ）が長すぎます");
define('MAILMAX', "メールアドレスが長すぎます");
define('MAILSUBMAX', "メールアドレス（サブ）が長すぎます");
define('POSTMAX', "郵便番号が長すぎます");
define('TWAMAX', "Twitterアカウントが長すぎます");
define('FBAMAX', "Facebookアカウントが長すぎます");
define('NAMELENGTH', "名前は4文字以上、16文字以内で設定してください");
define('PASSLENGTH', "パスワードは半角英数7文字以上、50文字以内で設定してください");
define('PASSNEWCOMPARE', "新規パスワードが確認と一致しません!");
define('PASSSIMCOMPARE', "既存のパスワードが一致しません!");
define('USERCOMPARE', "ユーザ名が一致しません");
define('ADDINSERTOK', "データの新規作成が完了しました!");
define('ADDINSERTNG', "データの新規作成ができませんでした!");
define('ADDUPDATEOK', "データの更新が完了しました!");
define('ADDUPDATENG', "データの更新ができませんでした!");
define('USERUPDATEOK', "ユーザ設定の更新が完了しました!");
define('USERUPDATENG', "ユーザ設定の更新に失敗しました!");
define('CNTZERO',"対象件数0件でした!");
define('DELERR', "データ削除ができませんでした");
define('DELOK', "データ削除ができました！");
define('NUMERR', "整数以外が入力されたようです！");
define('PMHTYPE', "パンフ区分と幹事団体の組み合わせを確認ください！");
define('DANTYPE', "印刷会社と幹事団体の組み合わせを確認ください！");
define('WEBTYPE', "パンフ区分とWEBTYPE区分の組み合わせを確認ください！");
define('ODRSHTPRINTNG', "発注票の印刷に失敗しました");
define('PMHSELECT0', "抽出件数 0 件のようです！検索条件を確認してください！");
define('PMHSELECT99', "抽出件数 500 件以上のようです！処理はこのまま実できます！");
define('KAIKOFRTO',"開講月の大小関係を確認してください!");
define('FLDNOSELECT',"Field が選択されていないようです！");
define('POSTNG',"Post,Get Data Exception!!");
define('ERRCNT0', 'エラーがまだあるようです');
define('UPDNG', "更新に失敗しました");

//define('ttt','$p_id,$p_no');
// sql
//----------------------------------------------------------
//
  define('INS_SYAIN_SUN01',"insert into t_syain_sun
   (access_id,
   syainno,
   birth_md,
   bsy_cd,
   bsy_nm,
   license,
   filler1,
   company_id,
   client_id,
   upd_ymd,
   cre_ymd
    )
    values (
  :access_id,
  :syainno,
  :birth_md,
  :bsy_cd,
  :bsy_nm,
  :license,
  :filler1,
  :company_id,
  :client_id,
  :upd_ymd,
  :cre_ymd)
     ");
 define('INS_SYAIN_XXX',"insert into t_syain_sun_dummy
   (access_id,
   syainno,
   birth_md,
   bsy_cd,
   bsy_nm,
   license,
   filler1,
   company_id,
   client_id,
   upd_ymd,
   cre_ymd
    )
    values (
  :access_id,
  :syainno,
  :birth_md,
  :bsy_cd,
  :bsy_nm,
  :license,
  :filler1,
  :company_id,
  :client_id,
  :upd_ymd,
  :cre_ymd)
     ");
  define('INS_SYAIN_WK02',"insert into t_syain_sun_wk02
   (access_id,
   syainno,
   license,
   bsy_cd,
   bsy_nm,
   birth_md,
   company_id,
   client_id,
   upd_ymd,
   cre_ymd
    )
    values (
    :access_id,
    :syainno,
    :license,
    :bsy_cd,
    :bsy_nm,
    :birth_md,
    :company_id,
    :client_id,
    :upd_ymd,
    :cre_ymd)
     ");

define('INS_SYAIN_234',"insert into t_syain_sun_wk02
   (access_id,
   syainno,
   license,
   bsy_nm,
   birth_md,
   company_id,
   client_id,
   upd_ymd,
   cre_ymd
    )
    values (
    :access_id,
    :syainno,
    :license,
    :bsy_nm,
    :birth_md,
    :company_id,
    :client_id,
    :upd_ymd,
    :cre_ymd)
     ");
 define('UPD_SYAIN_CHK01',"update  t_syain_chk01 set
    cnts=:cnts,
    sqls=:sqls
    where   t_syain_chk01.q_id = :q_id and
            t_syain_chk01.client_id = :client_id");
define('INS_PMH_LOG01',"insert into  t_shori_log
    (types,
    cnt,
    data_set,
    user_id,
    term_id,
    memos,
    cre_ymd
  )
    values(
    :types,
    :cnt,
    :data_set,
    :user_id,
    :term_id,
    :memos,
    :cre_ymd)
     ");
 define('GRPSUM01_160',"select  client_id,sts,sum(cnts) from t_syain_chk01 group by client_id,sts having client_id =? order by sts");
 define('CNT01_160',"select count(*) from t_syain_sun where access_id=? and syainno <> 'ZZZZZ'");
 define('UPD_PNO_COM01',"update  t_pno_com set p_no_seq=:p_no_seq WHERE t_pno_com.p_id = :p_id ");
 define('UPD_PNO_COM08',"update  t_pno_com set fld08=:fld08 WHERE t_pno_com.p_id = :p_id ");
 define('UPD_PNO_COM04',"update  t_pno_com set fld04=:fld04 WHERE t_pno_com.p_id = :p_id ");
 define('DEL_TBL01',"delete from t_tbl_sub01 WHERE t_tbl_sub01.tbl_id = :tbl_id and t_tbl_sub01.tbl_seq =:tbl_seq and t_tbl_sub01.tbl_kbn =:tbl_kbn ");
 define('SELECTSYAINCSL160',"SELECT access_id,syainno,birth_md,null as dummy,null as dummy,null as dummy,null as dummy,null as dummy,null as dummy,null as dummy,null as dummy,company_id FROM t_syain_sun WHERE access_id =:access_id  ORDER BY syainno");
 define('SELECTSYAINJUK160',"SELECT null as dummy,null as dummy,syainno,license,bsy_nm,null as dummy,null as dummy,null as dummy,null as dummy,null as dummy,null as dummy,null as dummy FROM t_syain_sun WHERE access_id =? and syainno <> 'ZZZZZ' ORDER BY syainno");
 define('DEL_SYAIN_160_01',"delete from t_syain_sun  WHERE client_id =:client_id");
 define('DEL_SYAIN_160_02',"delete from t_syain_sun as a WHERE a.access_id =:access_id");
 define('DEL_SYAIN_xxx',"delete from t_syain_sun_dummy as a WHERE a.access_id =:access_id and a.syainno =:syainno");
 define('DEL_SYAIN_ALL_234',"delete from t_syain_sun as a WHERE a.access_id = :access_id and a.syainno <> 'ZZZZZ'");
 define('INS_SYAIN_234_01',"insert into t_syain_sun_wk03 select * from t_syain_sun where access_id =:access_id ");
define('INS_SHORI_LOG01',"insert into  t_shori_log
    (types,
    cnt,
    data_set,
    user_id,
    term_id,
    memos,
    cre_ymd
  )
    values(
    :types,
    :cnt,
    :data_set,
    :user_id,
    :term_id,
    :memos,
    :cre_ymd)
     ");
?>
