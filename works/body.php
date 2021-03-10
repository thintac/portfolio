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
	echo "error!";
}
$id = $_GET["id"];
?>

<section id="<?php echo $get_id; ?>">
	
	<div class="base">
		<div class="flex_base_nw aic">
		<?php
			if( $id != "1" ){
					$id_temp = $id-1;
				echo "
					<a href='./?id=".$id_temp."' class='aic ll'>◀</a>
				";
			}else{
				echo "　";
			}
		?>

			<div class="detail_plate">

				<div class="title ll b ac">
					<?php
					foreach( $works as $v ){
						if( $v["id"] == $id ){
							echo $v["name"];
						}
					}
					?>
				</div>

				<div class="flex_base_plain">

					<div class="works_logo">

						<?php
							echo "<img class='full_img pad1rem' src='".$g_img."works/";
							foreach( $works as $v ){
								if( $v["id"] == $id ){
									echo $v["file"].".png";
								}
							}
							echo "'>";
						?>
					</div>
					<div class="works_detail">
						<?php
							foreach( $works as $v ){
								if( $v["id"] == $id ){
									echo "<div class='title_s ac'>".$v["subtitle"]."</div>";
									echo "
										<div class='flex_base'>
											<div class=''>";
									echo nl2br($v["comment"]);
									echo "</div>
										<div>";
									if( $v["etc"] !== "" ){
										echo "
										<div class='fi_1'>
											<div class='title_s ac'>作成サイト</div>
											<img class='full_img' src='".$g_img."works/".$v["etc"]."'>
										</div>";
									}
									echo "</div>
										</div>
										<!-- flex_base -->
									";
								}
							}
						?>
					</div>
				</div>
			</div>
			<!--detail_plate-->
			<?php
			$id_temp = max(array_column($works, 'id'));
			if( $id != $id_temp ){
				$id_temp = $id+1;
				echo "
					<a href='./?id=".$id_temp."' class='aic ll'>▶</a>
				";
			}else{
				echo "　";
			}
			?>
		</div>
		<!-- flex_base_nw -->
	</div>
	<!-- base -->
	
	<div class="base flex_base margin_top">
	<?php
		foreach( $works as $v ){
			echo "<a class='thumb' href='?id=".$v["id"]."'>";
			echo "<img class='full_img' src='".$g_img."works/";
			echo $v["file"].".png";
			echo "'>";
			echo "</a>";
		}
	?>
	</div>
	<!-- base -->
	
</section>

