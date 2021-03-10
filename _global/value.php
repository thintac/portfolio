<?php
	//タイムゾーン
	date_default_timezone_set('Asia/Tokyo');

	$title = "O'mochi Design Inc.";
	$description = "description";
	$keywords = "keywords";

	$lang = "";
	if(isset($_POST["lang"])){ $lang = $_POST["lang"]; }else
	if(isset($_GET["lang"])){ $lang = $_GET["lang"]; }else
	if( strpos($_SERVER['SCRIPT_FILENAME'],"/ja/") !== false ){ $lang = "ja"; }else
	if( strpos($_SERVER['SCRIPT_FILENAME'],"/en/") !== false ){ $lang = "en"; }else
	if( strpos($_SERVER['SCRIPT_FILENAME'],"/ko/") !== false ){ $lang = "ko"; }else
	if( strpos($_SERVER['SCRIPT_FILENAME'],"/zh-cmn-Hans/") !== false ){ $lang = "zh-cmn-Hans"; }else
	if( strpos($_SERVER['SCRIPT_FILENAME'],"/zh-cmn-Hant/") !== false ){ $lang = "zh-cmn-Hant"; }
	else{ $lang = "ja"; }

	//infomail
	$email = "info&#64;omochidesign.com";

	$g_css	= $g."_css/";
	$g_img	= $g."_img/";
	$g_js		= $g."_js/";
	$g_pdf	= $g."_pdf/";

//	$l_css	= $l."_css/";
//	$l_img	= $l."_img/";
//	$l_js		= $l."_js/";
//	$l_pdf	= $l."_pdf/";

	//今日//DateTimeImmutable
	$now = new DateTimeImmutable();
	$today = $now->format("Y-m-d");//年月日

	$langlist = array(
		"ja"=>"日本語",
		"en"=>"English",
		"zh-cmn-Hans"=>"中文(简体字)",
		"zh-cmn-Hant"=>"中文(繁体字)",
		"ko"=>"한국어"
	);

	// パンくずを生成する関数
	function breadCrumns($path,$_menu){
		$array_path = explode("/",$path);
		foreach($array_path as $val){
			@$tmp1 .= "{$val}/";
			$tmp2  = str_replace(".php/index.php",".php","{$tmp1}index.php");
			$breadcrumns[$tmp2] = $_menu[$tmp2];
		}
		return $breadcrumns;
	}

$attitude = array (
	"shin" =>	 "素直な気持ちを忘れない。",
	"gi" =>		 "努力し続ける限り成長する。",
	"tai" =>	 "健康な体が健全な精神を作る。",
);

?>