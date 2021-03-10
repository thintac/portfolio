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
		<div class="title ac">
			おもちデザインのあゆみ
		</div>
		<table class='table'>
<!---->
			<tr>
				<th class='ar'> 1976/06/19 </th>
				<td> &nbsp; </td>
				<td class='al'> 京都市に生まれる </td>
			</tr>

			<tr>
				<th class='ar'> 1986(小4) </th>
				<td> &nbsp; </td>
				<td class='al'> 図書室で見たノストラダムスの大予言見て、信じる。 </td>
			</tr>

			<tr>
				<th class='ar'> 1990(中2)</th>
				<td> &nbsp; </td>
				<td class='al'> 友達に薦められX[現XJAPAN]を聴き、SHOCKを受ける。 </td>
			</tr>

			<tr>
				<th class='ar'> 1991(中3)</th>
				<td> &nbsp; </td>
				<td class='al'> 授業中はもっぱら、好きなバンドのロゴを勝手に作る作業に没頭する。 </td>
			</tr>

			<tr>
				<th class='ar'> 1992(高1) </th>
				<td> &nbsp; </td>
				<td class='al'> 入学祝いでエレキベースを購入。 </td>
			</tr>

			<tr>
				<th class='ar'> 1995(19歳) </th>
				<td> &nbsp; </td>
				<td class='al'> 進学も、就職もせず(あと4年で死ぬから)バイトしながら、バンド生活。 </td>
			</tr>

			<tr>
				<th class='ar'> 1997(20歳) </th>
				<td> &nbsp; </td>
				<td class='al'> 同級生だったクラベ君と、DOLLのメンバー募集で知り合ったナイトウ君と"goody-goody"結成。<br>
					磔磔、KYOTO MUSEで月1ペースでライブ活動を行う。<br>
					ノルマを払うためにバイトをするような感覚。
					</td>
			</tr>

			<tr>
				<th class='ar'> 1999(23歳) </th>
				<td> &nbsp; </td>
				<td class='al'> 予言が大外れ。焦る。 </td>
			</tr>

			<tr>
				<th class='ar'> 2001(25歳) </th>
				<td> &nbsp; </td>
				<td class='al'> 電気工事士の父がヘルニアでダウン。仕事を手伝うためバンドを解散。 </td>
			</tr>

			<tr>
				<th class='ar'> 2002(26歳) </th>
				<td> &nbsp; </td>
				<td class='al'> 父の体調も戻ったので、基本的な事務能力を身につけようと、職業訓練でエクセル、ワードを習得。<br>
				実家近くの「京都府看護協会」へ就職。 </td>
			</tr>

			<tr>
				<th class='ar'> 2003(27歳) </th>
				<td> &nbsp; </td>
				<td class='al'>
					順調に勤務をこなすも、お局様に好かれてしまい、私と話しただけの派遣社員(女子)がいじめられてやめる事案が多発。<br>
					いたたまれなくなり、退職。<br>
					地元の健康食品の会社にバイトとして入社。<br>
					アナログで行っていた在庫管理を、デジタル化する。<br>
					自分のバンドの結成をもくろみつつ、いろいろなバンドでサポートベースを継続。
				</td>
			</tr>

			<tr>
				<th class='ar'> 2004(28歳) </th>
				<td> &nbsp; </td>
				<td class='al'>
					地元のバンドにサポートで参加。<br>
					ツアーのヘッドライナー｢WithMyFoot｣に衝撃を受ける。<br>
					ひたすらに素晴らしい時間を共有させてもらったが、
					自分のやってきた事は、何だったのかと気持ちの落ちる日が増える。<br>
					音楽は遊び、趣味と割り切れたのはここ。
				</td>
			</tr>

			<tr>
				<th class='ar'> 2008(32歳) </th>
				<td> &nbsp; </td>
				<td class='al'>
					当時のバイト先の先輩から、プログラミングが向いていると言われ、なんの根拠もないその言葉を真に受け、全くの未経験から｢企業選考型訓練｣で採用してくれるソフトウェア会社｢キヤミー｣へ入社。<br>
					当時、社内の誰も興味がないからと、チラシのラフ案作成や、デザイン会社との折衝を行う。
				</td>
			</tr>

			<tr>
				<th class='ar'> 2009(34歳) </th>
				<td> &nbsp; </td>
				<td class='al'>
					リーマンショックのあおりを受け解雇。<br>
					パソコンで絵を書く力をつけようと見つけた講座がCADしかなかったので仕方なく通う。<br>
					卒業後、就活を行うも、リーマンの残滓があるのか、再就職ならず…<br>
					就職浪人となる。
				</td>
			</tr>

			<tr>
				<th class='ar'> 2011(35歳) </th>
				<td> &nbsp; </td>
				<td class='al'>
					地元のスポーツクラブで｢Webデザイナー｣募集を発見。<br>
					未経験ながら高倍率を何故か突破。<br>
					夏から始まった選考も、入社時には冬になっていた。
				</td>
			</tr>

			<tr>
				<th class='ar'> 2012-2019<br>(36歳-43歳) </th>
				<td> &nbsp; </td>
				<td class='al'>
					きちんとした組織もない、地方の一企業なので、できることはなんでも、できないこともなんでもやってきました。<br>
					WEBデザインだけでなく、サイトの構築、申し込みフォーム構築のためにDB構築、スタッフシフト管理用のWEBアプリの作成、チラシのDTP、店内ポップ、ダンススクール発表会のパンフレット、Tシャツデザイン、看板のデザイン…はてにはインストラクターになるための訓練まで…<br>
					貴重な経験でした。<br>
					しかし、結婚をし、家族が増え、父が亡くなり…と、生活費を今より稼ぐ必要が出てきたので、転職を決意。
				</td>
			</tr>

			<tr>
				<th class='ar'> 2019年末～2021年初頭<br>(43歳-44歳) </th>
				<td> &nbsp; </td>
				<td class='al'>
					転職し、在宅勤務を行う。<br>
					純粋に、サイトに関する作業のみなので、非常に充実した仕事ができている…<br>
					<br>
					が、COVID-19が発生。<br>
					<br>
					じっと手を見る。
				</td>
			</tr>

			<tr>
				<th class='ar'>近況</th>
				<td> &nbsp; </td>
				<td class='al'>
					フリーランスに。<br>

				</td>
			</tr>

		</table>
	</div>

	<a class='def_line_button' href='m&#97;i&#108;t&#111;:&#116;h&#105;&#110;&#50;&#48;&#54;@g&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;?subject=[採用通知]' target=_blank>愛の手を</a>



</section>
