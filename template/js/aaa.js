function logic()  {
	var filename = "bbbbb.xlsx";
alert('ababa');

// 定数
var xlMaximized = -4137;


// Excelを立ち上げる
var excel = WScript.CreateObject("Excel.Application");
//excel.Visible = true;

alert('abab1');

// 新規ワークブックを作成
excel.Workbooks.Add();
	// 既存のブックを開きたい場合は，かわりに下記を実行。
	//excel.Workbooks.Open( filename );
var book = excel.Workbooks( excel.Workbooks.Count ); // ワークブックを取得
excel.ActiveWindow.WindowState = xlMaximized; // 最大化
alert('abab2');


// ブックを編集
var sheet = book.WorkSheets("Sheet1"); // シートを取得
sheet.Cells( 1, 1 ).Value = "hoge";
sheet.Cells( 1, 2 ).Formula = "=1+1";

alert('abab3');

// ブックを保存
excel.DisplayAlerts = false; // 既存ファイルがあっても上書きする
book.SaveAs( filename );


// Excelを閉じて終了
excel.Quit();
excel = null;
//  オブジェクトを解放
alert('end');
};

function ppp() {
    
	alert('ppp');
	var out ='out/bbbb.xlsx'
	var files = 'template/pmh_gant00_temp02.xlsx'
	// メッセージ
    var msg = "";
    // Excelオブジェクト
    var excel = null;
    try {
        // Excelオブジェクト生成
        var excel = new ActiveXObject("Excel.Application");
        alert('ppp2');
		// デバッグ用（表示）
        //excel.Visible = true;
        // 出力Workbook
        var outBook = null;
        try {
            // 出力ファイル作成
            outBook = excel.Workbooks.Add();
            // 挿入列
            var col = 1;
            // 挿入シート取得
            var outSheet = excel.Sheets(1);
            // 初期値設定
            outSheet.Cells(1, col).Value = "店舗名";
            outSheet.Cells(2, col).Value = "りんご";
            outSheet.Cells(3, col).Value = "みかん";
            outSheet.Cells(4, col).Value = "ぶどう";
            outSheet.Name = "集計";
            // 挿入列インクリメント
            col++;
            // ファイルを開く
            var book = null;
            // ファイル数分ループ
			 alert('ppp3');
            for (var i = 0; i < files.length; i++) {
                try {
                    // 読み取り専用で開く
                    book = excel.Workbooks.Open(files[i], 0, true);
                    // 1シート目を取得
                    var sheet = book.Sheets(1);
                    // データ最大行取得
                    var maxrow = sheet.Cells(1, 1).SpecialCells(11).Row;
                    // データ最大列取得
                    var maxcol = sheet.Cells(1, 1).SpecialCells(11).Column;
                    // シートサイズチェック
                    if (maxrow >= 4 && maxcol >= 2) {
                        // データ転記
                        outSheet.Cells(1, col).Value = sheet.Cells(1, 2);
                        outSheet.Cells(2, col).Value = sheet.Cells(2, 2);
                        outSheet.Cells(3, col).Value = sheet.Cells(3, 2);
                        outSheet.Cells(4, col).Value = sheet.Cells(4, 2);
                    }
                } catch (e) {
                    // エラーの場合
                    msg += "\"" + files[i] + "\" Error(" + (e.number & 0xFFFF) + "):" + e.message + "\n";
                } finally {
                    // Workbookオブジェクト存在チェック
                    if (book != null) {
                        // Workbookを閉じる
                        book.Close(false);
                        book = null;
                    }
                }
                // 挿入列インクリメント
                col++;
            }
            // 合計関数設定
            outSheet.Cells(1, col).Value = "合計";
            outSheet.Cells(2, col).Formula = "=SUM(B2:" + outSheet.Cells(2, col - 1).Address(false, false) + ")";
            outSheet.Cells(3, col).Formula = "=SUM(B3:" + outSheet.Cells(3, col - 1).Address(false, false) + ")";
            outSheet.Cells(4, col).Formula = "=SUM(B4:" + outSheet.Cells(4, col - 1).Address(false, false) + ")";
            // 罫線
            var range = outSheet.Range(outSheet.Cells(1, 1), outSheet.Cells(4, col));
            // 罫線用変数（左：7、上：8、下：9、右：10、水平線：11、垂直線：12）
            var lines = [7, 8, 9, 10, 11, 12];
            // 罫線を引く
            for (var i = 0; i < lines.length; i++) {
                var border = range.Borders(lines[i]);
                border.LineStyle = 1;
            }
            // 列の幅を揃える
            range.ColumnWidth = 20;
            //range.Columns.AutoFit(); // 自動でやる場合
            // 互換性チェックオフ
            outBook.CheckCompatibility = false;
            // 警告ダイアログオフ
            excel.DisplayAlerts = false;
            // 保存
            outBook.SaveAs(out);
        } catch (e) {
            // エラーの場合
            msg += "\"" + out + "\" Error(" + (e.number & 0xFFFF) + "):" + e.message + "\n";
        } finally {
            // Workbookオブジェクト存在チェック
            if (outBook != null) {
                // クリップボードは無視
                excel.CutCopyMode = false;
                // Workbookを閉じる
                outBook.Close(false);
                outBook = null;
            }
        }
    } catch (e) {
        // エラーの場合
        msg += "Error(" + (e.number & 0xFFFF) + "):" + e.message + "\n";
        // Excelオブジェクト存在チェック
        if (excel != null) {
            // 見えないと困るので、表示
            excel.Visible = true;
        }
    } finally {
        // Excelオブジェクト存在チェック
        if (excel != null) {
            // 警告ダイアログ表示
            excel.DisplayAlerts = true;
            // Excelを閉じる
            excel.Quit();
            excel = null;
        }
    }
    return msg;
	
};
function kakunin(){
  ret = confirm("Yahoo!Japanへ飛びます。宜しいですか？");
  if (ret == true){
    location.href = "http://www.yahoo.co.jp/";
  }
}