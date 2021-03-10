<!-- js -->
<script type="text/javascript" src="<?php echo $g_js ; ?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $g_js ; ?>less.min.js"></script>
<script type="text/javascript" src="<?php echo $g_js ; ?>slick.min.js"></script>
<script type="text/javascript" src="<?php echo $g_js ; ?>smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo $g_js ; ?>jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?php echo $g_js ; ?>jquery.validationEngine-ja.js"></script>

<script type="text/javascript">
	$(document).ready( function() {
		/* Check width on page load*/
		if ( $(window).width() < 768) {
			$('#items a').addClass('fi_2');
			$('#items a').removeClass('fi_3');
		}
		else {
			$('#items a').addClass('fi_3');
			$('#items a').removeClass('fi_2');
		}
	});

	$(window).resize(function() {
		/*If browser resized, check width again */
		if ($(window).width() < 768) {
			$('#items a').addClass('fi_2');
			$('#items a').removeClass('fi_3');
		}
		else {
			$('#items a').addClass('fi_3');
			$('#items a').removeClass('fi_2');
		}
	});
</script>

<script>
	$(document).ready(function() {
		$('.sslider').slick({
			autoplay: true,
			arrows: false,
			adaptiveHeight: true,
			infinite: true,
			slidesToShow: 4,
			autoplaySpeed: 4000,
			speed: 800,
			mobileFirst: true,
			responsive: [
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 4,
					}
				}
			]

		});
	});
</script>

<script>
	$(function(){
		$('.fadein').css('visibility','hidden');
		$(window).scroll(function(){
			var windowHeight = jQuery(window).height(),
					topWindow = jQuery(window).scrollTop();
			$('.fadein').each(function(){
				var targetPosition = jQuery(this).offset().top;
				if(topWindow > targetPosition - windowHeight + 100){
					jQuery(this).addClass("fadeInDown");
				}
			});
		});
	});
</script>

<script type="text/javascript">
	$(document).ready( function() {
		/* Check width on page load*/
		if ( $(window).width() < 768) {
			$('.works_logo').addClass('fi_1');
			$('.works_logo').removeClass('fi_3');
			$('.works_detail').addClass('fi_1');
			$('.works_detail').removeClass('fi_f');
		}
		else {
			$('.works_logo').addClass('fi_3');
			$('.works_logo').removeClass('fi_1');
			$('.works_detail').addClass('fi_f');
			$('.works_detail').removeClass('fi_1');
		}
	});

	$(window).resize(function() {
		/*If browser resized, check width again */
		if ($(window).width() < 768) {
			$('.works_logo').addClass('fi_1');
			$('.works_logo').removeClass('fi_3');
			$('.works_detail').addClass('fi_1');
			$('.works_detail').removeClass('fi_f');
		}
		else {
			$('.works_logo').addClass('fi_3');
			$('.works_logo').removeClass('fi_1');
			$('.works_detail').addClass('fi_f');
			$('.works_detail').removeClass('fi_1');
		}
	});
</script>



<script type="text/javascript">
	$(document).ready( function() {
		/* Check width on page load*/
		if ( $(window).width() < 768) {
			$('#input div').addClass('fi_1');
			$('#input div').removeClass('fi_2');
		}
		else {
			$('#input div').addClass('fi_2');
			$('#input div').removeClass('fi_1');
		}
	});

	$(window).resize(function() {
		/*If browser resized, check width again */
		if ($(window).width() < 768) {
			$('#input div').addClass('fi_1');
			$('#input div').removeClass('fi_2');
		}
		else {
			$('#input div').addClass('fi_2');
			$('#input div').removeClass('fi_1');
		}
	});
</script>