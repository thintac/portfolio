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
	<img src="<?= $g_img."shin_gi_tai.svg" ?>" alt="" class='eye_img'>
</section>
