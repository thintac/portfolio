<?php
	$count = mb_substr_count($_SERVER['SCRIPT_FILENAME'],"/");
	$doc_root = "";
	if(strpos($_SERVER["DOCUMENT_ROOT"],"MAMP") === false ){$count -= 5 ;}else{$count -= 6 ;}
	if( $count == 0 ){$doc_root="./";}else{for( $i=0; $i<$count; $i++ ){$doc_root.="../";}}
	$g = $doc_root."_global/";
	include_once($g."value.php");
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
	<meta charset='UTF-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>Vue.js demo</title>
</head>
	<body class="header-delay">
<?php
	include_once("./vue.body5.php");
?>
	</body>
</html>
