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
	<div class="base">

		<div class="">
			<div class="title_w lll ac txt_shadow">
				<img src="<?=$g_img.$get_id."/".$get_id ?>.svg" class='title_img'>
				<span class="s">変わらない本質を</span>
			</div>
		</div>

			<div class='txt_w ac txt_shadow'>
				<br>
				比叡山の麓にある小さなデザイン事務所です。<br>
				<br>
				ラーメン屋さんが連なる東大路通から、<br>
				<br>
				修学院離宮に向かって東へ向かえば、<br>
				<br>
				小さな木の看板がお出迎え。<br>
				<br>
				<br>
				猫のお殿(おでん)とお待ちしております。<br>
				<br>
				<br>
				WEBとDTPとワクワクすること。<br>
			</div>

	</div>
</section>
