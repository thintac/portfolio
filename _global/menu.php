<?php
	$menu = array(
		"top" => $doc_root,
		"about" => $doc_root."about/",
		"works" => $doc_root."works/?id=1",
		"contact" => $doc_root."contact/",
	);
?>
<a class="menu">
	<span class="menu__line menu__line--top"></span>
	<span class="menu__line menu__line--center"></span>
	<span class="menu__line menu__line--bottom"></span>
</a>

<nav class="gnav">
	<div class="gnav__wrap">

		<div class="base">

			<a href="<?php echo $doc_root; ?>" class=''>
				<img src="<?php echo $g_img."logo_w.svg"; ?>" class="nav_logo">
			</a>

			<div class='flex_base'>
				<?php
						foreach( $menu as $k => $v ){
							echo "
								<a href='".$v."' class='fi_1 ac'>".$k."</a>
							";
						}
					?>
			</div><!-- flex_base -->

		</div>
		<!-- base -->
	</div>
	<!-- gnav__wrap -->
</nav>

<nav class="pc_menu">
	<?php
			foreach( $menu as $k => $v ){
				echo "<a href='".$v."' class='ac'>".$k."</a>";
			}
		?>
</nav>



<script>
	//nav
	$('.menu').on('click', function() {
		$('.menu__line').toggleClass('active');
		$('.gnav').fadeToggle();
	});

	$('.gnav a').on('click', function() {
		$('.menu__line').removeClass('active');
		$('.gnav').fadeToggle();
	});
</script>