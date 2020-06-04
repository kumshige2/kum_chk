/////////////////////////////////////////////////////////////////////////////////
/// 初期設定
////////////////////////////////////////////////////////////////////////////////

/*
対象オブジェクト
----------------------------------------------------------------------*/
var targetClass='.numberComma';

/*
カンマ桁
----------------------------------------------------------------------*/
var digitUnit=3;



////////////////////////////////////////////////////////////////////////////////
/// 汎用
////////////////////////////////////////////////////////////////////////////////

/*
ページ内カンマ自動制御
----------------------------------------------------------------------*/
$(document).ready(loadComma);
function loadComma(){
	$(targetClass).each(function(){
		if($(this).text().indexOf(",")==-1&&!($(this).text().match(/[^0-9]+/))){
			$(this).html(commaDelim($(this).text()));
		}
	});
}

/*
価格数値カンマ制御
----------------------------------------------------------------------*/
function commaDelim(str){
	if(str.length>3){
		var oriStr=str;
		var num=Math.floor(str.length/digitUnit);
		var measure=str.length/3-Math.floor(str.length/digitUnit);
		measure=Math.floor(measure*10);
		measure=measure/digitUnit;
		str="";
		if(measure>0) str=oriStr.slice(0,measure);
		for(var i=0;i<(num);i++){
			if(str!="") str+=",";
			str+=oriStr.slice(measure+i*digitUnit,measure+(i+1)*digitUnit);
		}
	}
	return str;
}



