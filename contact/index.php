<?php
	$count = mb_substr_count($_SERVER['SCRIPT_FILENAME'],"/");
	$doc_root = "";
	if(strpos($_SERVER["DOCUMENT_ROOT"],"MAMP") === false ){$count -= 5 ;}else{$count -= 6 ;}
	if( $count == 0 ){$doc_root="./";}else{for( $i=0; $i<$count; $i++ ){$doc_root.="../";}}
	$g = $doc_root."_global/";
	include_once($g."value.php");

	$phase = "input";
	//サブミットボタンのバリューで移行先判断
	if(isset($_POST["phase"])){
	$phase = $_POST["phase"];
	}else
	if(isset($_GET["phase"])){
	$phase = $_GET["phase"];
	}

?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
	<?php include_once($g."_head.php"); ?>
	<body class="header-delay">
	<?php
		include_once($g."_header.php");
		include_once("./".$phase.".php");
		include_once($g."_footer.php");
		include_once($g."js.php");
	?>
	</body>
</html>
