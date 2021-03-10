<?php
	$count = mb_substr_count($_SERVER['SCRIPT_FILENAME'],"/");

	$doc_root = "";

	if(strpos($_SERVER["DOCUMENT_ROOT"],"MAMP") === false ){
		$count -= 4 ;//オンライン
	}else{
		$count -= 6 ;//ローカル
	}

	for( $i=0; $i<$count; $i++ ){
		$doc_root.="../";
	}

	$c	=	$doc_root."_common/";
?>
