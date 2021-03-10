<?php
	//ファイル名を変数名に指定	
	$included_files = get_included_files();
	//新しい順に並べ替え
	krsort($included_files);
	//ひとつ目のファイル名を取得
	$get_id = "";
	foreach( $included_files as $key => $value ){if( $get_id == "" ){ $get_id = str_replace(".php", "", basename($value)); }else{continue;}}
?>


<div class="fadein">
	<div id="<?php echo $get_id; ?>">
		<div class="base">
			<div class="sslider">

		<?php
			foreach(glob($g_img."mask/*{*.png,*.jpeg,*.jpg,*.gif}",GLOB_BRACE) as $file){
				if(is_file($file)){
					echo "
						<div class='sslide'>
							<img src='".$file."'>
						</div>
					";
				}
			}	
		?>
			</div>
		</div>
	</div>
</div>