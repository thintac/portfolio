<?php
	
	/*メール用-文字化け対策*/
	mb_language('Japanese');
	mb_internal_encoding('EUC-JP');

	/*↓↓↓↓　メール
	------------------------------------------------------*/
		
		/* データ送信先 */
		$mail_to = $temp["email"];
		
		$header = "";
		$header .="From:O'mochiDesign<info@omochidesign.comb>";

		/*BCC*/
		$header.="\n";
		$header.="Bcc:thin206@gmail.com";

		/* タイトル */
		$mail_title = "お問い合わせありがとうございます。[おもちデザイン]";
		
		/* 内容 */
		$mail_body = 
"
この度はお問い合わせいただき、誠にありがとうございます。

担当者より、数日中に御連絡させていただきます。
しばらくお待ちくださいませ。

=== === === === === === === === === === === ===

入力内容

氏名：".$_POST['name']."
mail：".$_POST['email']."
内容：".$_POST['textarea']."


=== === === === === === === === === === === ===

O'mochi Design
おもちデザイン

メール：info@omochidesign.comb

休業日：不定休
営業時間：9:00〜18:00

公式サイト
http://omochidesign.php.xdomain.jp/

=== === === === === === === === === === === ===

";
	
		$mail_title=mb_convert_encoding($mail_title,"EUC-JP","UTF-8");
		$mail_body=mb_convert_encoding($mail_body,"EUC-JP","UTF-8");

/**/

		//メール送信
		if(!mb_send_mail($mail_to,$mail_title,$mail_body,$header)){
			header("Location:./?phase=error"); 
			exit;
		}

	/*↑↑↑↑↑　メール
	------------------------------------------------------*/

		/*↓↓↓↓↓　完了画面へリダイレクト
	------------------------------------------------------*/

	header("Location:./?phase=comp");
	exit;

?>