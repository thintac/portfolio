
<script type="text/javascript">
	//入力チェック
	jQuery(document).ready(function() {
		jQuery("#contact").validationEngine(
			 'attach', {
				 promptPosition: "bottomLeft:0"
			 }
		);
	});
	
</script>

<div class="base">

	<form action="./regist.php" method="post" id="contact">

	<div class="white_base flex_base">

			<div class="title ac">
				お問い合わせ
			</div>

		<div id='input' class='flex_base full_img'>
			<div class='pads_full full_img'>お名前<br><input type="text" name="name" class='validate[required,maxSize[20]]' placeholder="name" value=""></div>
			<div class='pads_full full_img'>メールアドレス<br><input type="email" name="email" class="validate[required,custom[email]]" placeholder="mail@omochidesign.comb"  value=""></div>
		</div>
		
		<div class='fi_1 pads_full'>お問い合わせ内容<br>
			<textarea rows="10" cols="60" type="textarea" name="textarea" class="validate[required]" placeholder="お問い合わせ内容をご入力ください。"  value=""></textarea>
	</div>
		<div class="fi_1 pads_full">
		<button class='def_line_button fi_1' type='submit' name='phase' value='regist'>送信</button>
	</div>
	<input type="hidden" name="str" value="いろはにほへと">


	</div>
</div>




