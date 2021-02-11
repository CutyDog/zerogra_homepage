<?php the_post(); ?>
<?php get_header(); ?>
<body>
   <header class="page-header">
	   <h1><a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/zerogra_logo_toumei.png" alt="ZEROGRA"></a></h1>
	      <nav>
	         <ul class="main-nav">
		         <li><a href="#home">ホーム</a></li>
		         <li><a href="#corporate">企業理念</a></li>
		         <li><a href="#business">事業内容</a></li>
		         <li><a href="#recruit">採用情報</a></li>
		         <li><a href="#company">会社情報</a></li>
		         <li><a href="#contact">お問い合わせ</a></li>
	         </ul>
	      </nav>
   </header>
	
	<main style="padding-top:100px;">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
   </main>
<?php get_footer(); ?>
		
</body>
</html>
