<?php
	//ファイル名を変数名に指定	
	$included_files = get_included_files();
	//新しい順に並べ替え
	krsort($included_files);
	//ひとつ目のファイル名を取得
	$get_id = "";
	foreach( $included_files as $key => $value ){if( $get_id == "" ){ $get_id = str_replace(".php", "", basename($value)); }else{continue;}}
?>

<script>
	$(document).ready(function() {
		$('.sslider').slick({
			slidesToShow: 1,
			centerMode: true,
			centerPadding: '27.5%',
			arrows: false,
			autoplay: true,
			autoplaySpeed: 0, //待ち時間を０に
			speed: 10000, // スピードをゆっくり
			swipe: false, // 操作による切り替えはさせない
			cssEase: 'linear', // 切り替えイージングを'linear'に
			// 以下、操作後に止まってしまう仕様の対策
			pauseOnFocus: false,
			pauseOnHover: false,
			pauseOnDotsHover: false,
			
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

<?php
		echo "
			<div id='".$get_id."'>
				<div class='sslider'>";
					//covid
//					echo "
//						<picture>
//							<source type='image/webp' srcset='".$g_img."slide/covid.webp'></source>
//							<img src='".$g_img."slide/covid.png' alt='image'>
//						</picture>
//					";
//

				$count = 0;
				$files = glob($g_img.'slide/*{*.webp}',GLOB_BRACE);
				$max = count($files)-2;
				$num_list = range(0,$max);
				$num_list = array_rand($num_list,5);
				shuffle($num_list);
				foreach($num_list as $v){
					$puts = sprintf('%03d', $v);
					echo "
						<picture>
							<source type='image/webp' srcset='".$g_img."slide/".$puts.".webp'></source>
							<img src='".$g_img."slide/".$puts.".jpg' alt='image'>
						</picture>
					";
				}

		echo "
				</div>
			</div>
		";
?>