<section id="costumes">

	<div class="base">
		<h2 class="title_g">
			Costumes<br>
			<small><?php echo $nav_list["costumes"]; ?></small>
		</h2>

		<div id="index" class='flex_base'>
			<?php
				foreach($coutumes_index as $k => $v){
					echo "<a href='#".$k."' class='ac fi_4 labels ss'>".$v."</a>";
				}
			?>
		</div>
		
	<div id="gg-screen" hidden></div>
		<div class="gg-container">

		<div class="title_s" id='0'>
<?php echo $coutumes_index["0"]; ?>
		</div>
		<div class="gg-box" id="dress">
			<?php
				foreach(glob($l_img.'costumes/dress/*{*.jpg,*.JPG}',GLOB_BRACE) as $file){
					if(is_file($file)){
						echo "
							<img data-src=".$file." class='lazyload start_bottom'>
						";
					}
				}
			?>
		</div>


		<div class="title_s" id='1'>
<?php echo $coutumes_index["1"]; ?>
		</div>
		<div class="gg-box" id="uchikake_named">
			<?php
				foreach(glob($l_img.'costumes/uchikake_named/*{*.jpg,*.JPG}',GLOB_BRACE) as $file){
					if(is_file($file)){
						echo "
							<img data-src=".$file." class='lazyload start_bottom'>
						";
					}
				}
			?>
		</div>
		<div class="gg-box" id="uchikake">
			<?php
				foreach(glob($l_img.'costumes/uchikake/*{*.jpg,*.JPG}',GLOB_BRACE) as $file){
					if(is_file($file)){
						echo "
							<img data-src=".$file." class='lazyload'>
						";
					}
				}
			?>
		</div>
			
			<div class="txt s">
<?php
	if( $lang == "ja" ){
		echo "
			掲載のないものでも、ご要望に応じて用意させていただきます。ご相談ください。
		";
	}else
	if( $lang == "en" ){
		echo "
			Feel free to ask us if you have any other requests even if it is not in a plan.
		";
	}else{
		echo "
			Feel free to ask us if you have any other requests even if it is not in a plan.
		";
	}
		
?>

			</div>


		<div class="title_s" id='2'>
<?php echo $coutumes_index["2"]; ?>
		</div>

		<div class="gg-box" id="yo_komono">
			<?php
				foreach(glob($l_img.'costumes/yo_komono/*{*.jpg,*.JPG}',GLOB_BRACE) as $file){
					if(is_file($file)){
						echo "
							<img data-src=".$file." class='lazyload'>
						";
					}
				}
			?>
		</div>


		<div class="title_s" id='3'>
<?php echo $coutumes_index["3"]; ?>
		</div>

		<div class="gg-box" id="wa_komono">
			<?php
				foreach(glob($l_img.'costumes/wa_komono/*{*.jpg,*.JPG}',GLOB_BRACE) as $file){
					if(is_file($file)){
						echo "
							<img data-src=".$file." class='lazyload'>
						";
					}
				}
			?>
		</div>

		<div class="title_s" id='4'>
<?php echo $coutumes_index["4"]; ?>
		</div>

		<div class="gg-box" id="iroeri">
			<?php
				foreach(glob($l_img.'costumes/iroeri/*{*.jpg,*.JPG}',GLOB_BRACE) as $file){
					if(is_file($file)){
						echo "
							<img data-src=".$file." class='lazyload'>
						";
					}
				}
			?>
		</div>


		</div>
		<!-- gg-container -->

<link rel="stylesheet" href="<?php echo $g_css; ?>grid-gallery.min.css">
<script type="text/javascript" src="<?php echo $g_js ; ?>grid-gallery.min.js"></script>
<script>
	gridGallery({
		selector: "#dress",
		darkMode: true,
		layout: "square",
		rowHeight: "360",
		columnWidth: "200"
	});
	
	gridGallery({
		selector: "#uchikake_named",
		darkMode: true,
		layout: "square",
		rowHeight: "300",
		columnWidth: "200"
	});
	
	gridGallery({
		selector: "#uchikake",
		darkMode: true,
		layout: "square",
	});
	
	gridGallery({
		selector: "#wa_komono",
		darkMode: true,
		layout: "square",
	});
	
	gridGallery({
		selector: "#yo_komono",
		darkMode: true,
		layout: "square",
	});
	
	gridGallery({
		selector: "#iroeri",
		darkMode: true,
		layout: "square",
	});

</script>
	</div>
	<!-- base -->
</section>