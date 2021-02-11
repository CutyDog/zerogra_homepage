<?php get_header(); ?>
<body>
   <header>
      <div class="page-header">
	     <h1><a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/zerogra_logo_toumei.png" alt="ZEROGRA"></a></h1>
	     <nav>
			<!-- PC -->
			<div class="menu-pc">
	        <ul class="main-nav">
		       <li>ホーム<a href="#home"></a></li>
		       <li>企業理念<a href="#corporate"></a></li>
		       <li>事業内容<a href="#business"></a></li>
		       <li>採用情報<a href="#recruit"></a></li>
		       <li>会社情報<a href="#company"></a></li>
		       <li>お問い合わせ<a href="#contact"></a></li>
			</ul>
            </div>
			<!-- スマホ -->
			<!-- ハンバーガーメニュー -->
			<div class="menu-smafo">
				<input type="checkbox" id="menu-btn-check">
				<label for="menu-btn-check" class="menu-btn"><span></span></label>
				<div class="menu-content">
                   <ul>
                      <li><a href="#home">ホーム</a></li>
                      <li><a href="#corporate">企業理念</a></li>
					  <li><a href="#business">事業内容</a></li>
					  <li><a href="#recruit">採用情報</a></li>
					  <li><a href="#company">会社情報</a></li>
					  <li><a href="#contact">お問い合わせ</a></li>
                   </ul>
                </div>
            </div>
		  </nav>
   </div>
</header>
	

	<main>
	   <section id="home">
		   <!--homeの記入-->
		   <div class="nasa">
		      <h2>ZEROGRA</h2>
		      <p>Create a new standard from"0"</p>
		      <h3>-ZEROGRAVITY-</h3>
		   </div>
	   </section>
	   <section id="corporate">
		   <!--企業理念、事業理念、行動指針の記入-->
		   <div class="one">
			   <h2><span class="line">企業理念</span></h2>
			   <p>Create a new standard from "0"(zerogravity)</p>
			   <p>既成概念をゼロにして(=zerogravity)、新しい常識をつくりだす</p>
		   </div>
		   <div class="twothree">
		      <div class="two">
			     <h2><span class="line">事業理念</span></h2>
			     <p>HRを通して</p>
			     <p>関西の経済を活性化させる</p>
		      </div>
		      <div class="three">
			      <h2><sapn class="line">行動指針(5C)</sapn></h2>
			      <div class="fivebox">
			         <ul class="fivec">
				        <li><span class="tallc">C</span>ustomer-oriented</li>
				        <li><span class="tallc">C</span>reate-oriented</li>
				        <li><span class="tallc">C</span>hallenge-orientred</li>
				        <li><span class="tallc">C</span>ontribution-oriented</li>
				        <li><span class="tallc">C</span>ollaboration-oriented</li>
			         </ul>
			         <ul class="five">
				        <li>顧客の期待を超える</li>
				        <li>「新しい」を創る</li>
				        <li>常に挑戦し続ける</li>
				        <li>一人一人が組織に貢献する</li>
				        <li>チームの多様性を活かす</li>
				     </ul>
                  </div>
               </div>
		   </div>
	   </section>
	   <section id="business">
		   <!--事業内容の記入-->
		   <h2><sapn class="line">事業内容</sapn></h2>
		   <div class="container">
			  <div class="container-itema">
			     <div class="itema">
				     <i class="fa fa-handshake-o" aria-hidden="true"></i>
		             <h3>採用コンサルティング事業</h3>
		             <ul>
						 <li>・各種採用計画の作成　　　<br class=itema-kaigyo>・採用イベントでのサポート</li>
		                 <li>・求人戦略のコンサルティング</li>
		            </ul>
				 </div>
			  </div>
			  <div class="container-itemb">
				 <div class="itemb">
				     <i class="fa fa-user-o" aria-hidden="true"></i>
		             <h3>求人広告代理店業</h3>
		             <ul>
						 <li>・正社員系媒体　　DODAマイナビ転職</li>
		                 <li>・アルバイト系媒体　　マイナビバイト、バイトル</li>
		            </ul>
				 </div>
			  </div>
			  <div class="container-itemc">
				 <div class="itemc">
				     <i class="fa fa-desktop" aria-hidden="true"></i>
		             <h3>SaaSサービス代理店業</h3>
		             <ul>
						 <li>・MFクラウド</li>
		            </ul>
				 </div>
			  </div>
			  <div class="container-itemd">
				 <div class="itemd">
				     <i class="fa fa-comments" aria-hidden="true"></i>
		             <h3>運用型求人広告コンサルティング</h3> 
		             <ul>
						 <li>・Indeed</li>
		                 <li>・求人ボックス　　など</li>
		            </ul>
				 </div>
		      </div>
		   </div>
	   </section>
	   <section id="members">
		   <!--メンバー紹介の記入-->
		   <h2><sapn class="line">メンバー紹介</sapn></h2>
		   <div class="membersbox">
			   <div class="konno">
		           <a href="<?php echo home_url(); ?>"><img class="konnophoto" src="<?php echo get_template_directory_uri(); ?>/images/konno2.jpg" alt="konnoshota"></a>
		           <h3>今野　颯太</h3>
				   <p class="membersgyokan">2020年10月にZEROGRA設立。(採用コンサル/SaaS代理店)</p>
		           <p>中央大学在学中にエン・ジャパンのグループ会社にてベストインターン賞を受賞。新卒でエン・ジャパンへ入社。新卒領域の事業開発を担当し、歴代最速でリーダーに昇格。その後Indeed Japanにて大阪の拠点立ち上げに携わり、企業様向けセミナーなども実施。</p>
			   </div>
			   <div class="nakamoto">
		           <a href="<?php echo home_url(); ?>"><img class="nakamotophoto" src="<?php echo get_template_directory_uri(); ?>/images/nakamoto1.jpg" alt="nakamotoyuki"></a>
		           <h3>中元　勇輝</h3>
				   <p class="membersgyokan">パーソルキャリア株式会社→Indeed Japan株式会社</p>
		           <p>一貫してHR業界に身を置き、これまで幅広い商材を通じて中小〜大手の様々な企業様の採用支援を従事してきました。</p>
			   </div>
			   <!-- 大学時代は体育会サッカー部に所属し、夏・冬日本一含む四冠を達成。趣味：旅行/サッカー/映画鑑賞 -->
		   </div>
	   </section>
	   <section id="recruit">
		   <!--採用情報の記入-->
		   <h2><sapn class="line">採用情報</sapn></h2>
		   <div class="saiyou">
			  <div class="saiyoumidashi"><h3>「成長したい」<br class="saiyoumidashi-kaigyou">そんな学生と働きたい</h3></div>
			    
			    
			  <div class="saiyoubox">
			     <div class="saiyougyoumu">
					 <a href="https://en-gage.net/zerogra_jobs/work_1152928/?via_recruit_page=1">
			         <div class="gyoumuitaku"><h4>業務委託　read more»</h4></div>
		             <div class="saiyougyoumu-one"><p>副業案件/隙間時間に営業力を<br>活かせる/働く場所・時間は自由</p></div>
					 <div class="saiyougyoumu-two"><p>給与：月給5,000円〜</p></div>
		             <p>成果報酬制</p>
		             <p>1件のアポイントの取得で1万円〜スタート</p>
					 <div class="saiyougyoumu-three"><p>勤務地：大阪府大阪市</p></div>
		             <p>大阪市西区靭本町1-13-1NIPPO日宝信濃橋ビル4F</p>
					 <div class="saiyougyoumu-four"><p>勤務時間</p></div>
		             <p>残業なし/週1からOK/週2〜3日からOK</p>
					 </a>
			     </div>
				 <div class="saiyouintarn">
					 <a href="https://www.wantedly.com/projects/526203">
			         <div class="intarn"><h4>インターン　read more»</h4></div>
		             <div class="intarn-one"><p>Sales長期インターン＠大阪<br>（本町オフィス）</p></div>
					 <div class="intarn-two"><p>給与：成果報酬制</p></div>
					 <p>固定給＋各インセンティブ</p>
					 <div class="intarn-three"><p>勤務地：フルリモートOK</p></div>
					 <p>＜オフィス＞大阪市西区靭本町1-13-1NIPPO日宝信濃橋ビル4F</p>
					 <div class="intarn-four"><p>勤務時間</p></div>
		             <p>残業なし/週1からOK/週2〜3日からOK<br>1日4h以内OK/シフト制</p>
					 </a>
			     </div>
			  </div>
		   </div>
	   </section>
	   <section id="company">
		   <!--会社情報の記入-->
	       <h2><sapn class="line">会社情報</sapn></h2>
		   <div class="companybox">
			   <div class="companybox-kaisya">
		         <table class="kaisya">
		             <tr>
			           <th>会社名</th>
			           <td class="box">株式会社ZEROGRA</td>
			         </tr>
			         <tr>
			           <th>資本金</th>
			           <td class="box">100万円</td>
			         </tr>
		             <tr>
			            <th rowspan="3" class="up">事業内容</th>
			            <td class="box">・クラウドサービス代理販売業</td>
			         </tr>
			         <tr>
			           <td class="box">・求人広告代理店業</td>
			         </tr>
			         <tr>
			           <td class="box">・採用コンサルティング業</td>
			         </tr>
		               <tr>
			           <th>電話番号</th>
			           <td class="box">080-3178-6657</td>
			         </tr>
		             <tr>
			           <th rowspan="2" class="up">住所</th>
			           <td class="box">大阪府大阪市西区靱本町1-13-1</td>
			         </tr>
			         <tr>
			           <td class="box">NIPPO日宝信濃橋ビル４F</td>
			           </tr>
			     </table>
              </div>
			  <div class="map">
			     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.824559401285!2d135.49374245079147!3d34.68437708034268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6fcdc5b05e3%3A0x1ec3185c98397d0e!2z44CSNTUwLTAwMDQg5aSn6Ziq5bqc5aSn6Ziq5biC6KW_5Yy66Z2x5pys55S677yR5LiB55uu77yR77yTIOaXpeWuneS_oea_g-api-ODk-ODqyAxTklQUE8!5e0!3m2!1sja!2sjp!4v1605217387759!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			  </div>
		   </div>
	   </section>
	   <section id="contact">
		   <!--お問い合わせの記入-->
			<h2><sapn class="line">お問い合わせ</sapn></h2>
			<?php echo do_shortcode('[mwform_formkey key="5"]'); ?>
<!--
		   <div class="Form">
			   <form method="post" action="./">
  <div class="Form-Item">
    <p class="Form-Item-Label">
      <span class="Form-Item-Label-Required">必須</span>件名</p>
    <input type="text" name="title" class="Form-Item-Input" placeholder="例）〜の件について">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>会社名</p>
    <input type="text" name="kigyo" class="Form-Item-Input" placeholder="例）株式会社令和">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
    <input type="text" name="namae" class="Form-Item-Input" placeholder="例）山田太郎">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
    <input type="text" name="tell" class="Form-Item-Input" placeholder="例）000-0000-0000">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
    <input type="email" name="address" class="Form-Item-Input" placeholder="例）example@gmail.com">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
    <textarea name="content" class="Form-Item-Textarea"></textarea>
  </div>
  <input type="submit" class="Form-Btn" value="確認">
	</form>
</div>
-->
	   </section>
   </main>
<?php get_footer(); ?>
		
</body>
</html>
