<?php
//ファイル名を変数名に指定	
$included_files = get_included_files();
//新しい順に並べ替え
krsort($included_files);
//ひとつ目のファイル名を取得
$get_id = "";
foreach( $included_files as $key => $value ){if( $get_id == "" ){ $get_id = str_replace(".php", "", basename($value)); }else{continue;}}

//テーブルから写真プランの値を取得
try{
	//ローカル
	if(strpos($_SERVER["DOCUMENT_ROOT"],"xampp") === false ){
		//オンライン
		$host_temp = "mysql1.php.xdomain.ne.jp";
	}else{
		//ローカル
		$host_temp = "localhost";
	}
	$pdo = new PDO(
		"mysql:dbname=omochidesign_official;host=".$host_temp.";charset=utf8",
		"omochidesign_000",
		"cqjglXvkxrecLOoX"
	);

	$sql ="select * from works";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
		$works[]=$result;
	}

} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
}
?>
<div class="fadein">
	<section id="<?php echo $get_id; ?>">
		<div class="base">
			<br>


			<div class="">
				<img src="<?=$g_img.$get_id."/".$get_id ?>.svg" class='title_img'>
			</div>
			<br><br>

			<div class="flex_base" id='items'>
				<?php
				foreach( $works as $v ){
					echo "
							<a class=' maskover' href='./works/?id=".$v["id"]."'>
								<img src='".$g_img."works/".$v["file"].".png' class='full_img' alt='".$v["name"]."'>
								<div class='mask'>
									<div class='caption'>".$v["name"]."</div>
								</div>
							</a>
						";
				}

				?>
			</div>
			<br><br>

		</div>
	</section>
</div>