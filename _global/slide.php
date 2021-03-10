<?php
	//ファイル名を変数名に指定	
	$included_files = get_included_files();
	//新しい順に並べ替え
	krsort($included_files);
	//ひとつ目のファイル名を取得
	$get_id = "";
	foreach( $included_files as $key => $value ){if( $get_id == "" ){ $get_id = str_replace(".php", "", basename($value)); }else{continue;}}
?>

<div id="<?php echo $get_id; ?>">
	<div class="sslider">

<?php
	foreach(glob($g_img."slide/*{*.png,*.jpeg,*.jpg,*.gif}",GLOB_BRACE) as $file){
		if(is_file($file)){
			echo "
				<div class='sslide'><img src='".$file."'></div>
			";
		}
	}	
?>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('.sslider').slick({
			autoplay: true,
			adaptiveHeight: true,
			arrows: true,
			autoplaySpeed: 4000,
			speed: 800,
			infinite: true,
			mobileFirst: true,
			pauseOnFocus: false,
			
			centerMode:false,
			centerPadding:'0',
			
			responsive: [
				{
					breakpoint: 1279,
					settings: {
						centerPadding: '20%',
						speed: 9000, // スピードをゆっくり
					}
				},
				{
					breakpoint: 767,
					settings: {
						centerPadding: '0',
						speed: 8000, // スピードをゆっくり
					}
				}
			]

		});
	});
</script>