<?php
	//ファイル名を変数名に指定	
	$included_files = get_included_files();
	//新しい順に並べ替え
	krsort($included_files);
	//ひとつ目のファイル名を取得
	$get_id = "";
	foreach( $included_files as $key => $value ){if( $get_id == "" ){ $get_id = str_replace(".php", "", basename($value)); }else{continue;}}
?>

<section id="<?php echo $get_id; ?>">
	<br><br><br>
	<div class="base ac">
		<div class="txt s">
			BASEにて公式通販開始！続々商品追加予定！
		</div>
		<a href="https://thebase.in/to_app?s=shop&shop_id=omochidesign-official-ec&follow=true" target="_blank" rel="noopener noreferrer">
			<img src="<?= $g_img ?>base.png" alt="BASEへのリンク" class='full_img' style="max-width:300px;">
		</a>
	</div>
	<br><br><br>
</section>
