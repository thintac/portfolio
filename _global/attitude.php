<?php
//ファイル名を変数名に指定	
$included_files = get_included_files();
//新しい順に並べ替え
krsort($included_files);
//ひとつ目のファイル名を取得
$get_id = "";
foreach( $included_files as $key => $value ){if( $get_id == "" ){ $get_id = str_replace(".php", "", basename($value)); }else{continue;}}
?>

<div class='fadein'>
	<section id="<?php echo $get_id; ?>">
		<br>
		<br>
		<br>

		<div class="base">

			<div class="">
				<div class="fi_3">
					<img src="<?=$g_img.$get_id."/".$get_id ?>.svg" class='title_img'>
				</div>
			</div>

			<div class="flex_base_nw">
				<?php
	foreach( $attitude as $k => $v ){
		echo "
			<div class='fi_3 ac blur'>
				<img src='".$g_img."attitude/".$k.".svg' class='full_img'>
				<div class='txt'>
					".$v."
				</div>
			</div>
		";
	}
				?>

			</div>
		</div>
		<br>
		<br>
		<br>
	</section>
</div>







