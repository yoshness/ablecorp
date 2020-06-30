<?php
/* 
Template Name: Contact Thank You
*/
get_header();

?>

<main class="l-contact" id="js-main-wrapper">
	<div class="l-contact__top">
		<div class="l-container">
			<?php 
				$slug = 'contact';
				include( locate_template( 'template-parts/breadcrumbs.php', false, false ) );
			?>
			<h1 class="section-title">
				<span class="section-title__en">contact</span>
				<span class="section-title__ja">お問い合わせ</span>
			</h1>
		</div>
	</div>
	<div class="l-contact__content">
		<div class="l-container">
			<div class="l-contact__content-main">
				<h2 class="l-contact__content-heading">お問い合わせありがとうございました。</h2>
				<p class="l-contact__content-description">
					折り返し、確認メール（自動送信）を送信させていただいております。<br>その他、何かご不明な点がございましたら、お気軽にお問い合わせください。
				</p>
				<a class="l-contact__content-button button" href="<?php echo HOME_URL; ?>">TOPへ戻る</a>
			</div>
		</div>
		<div class="l-contact__decor">
			<img src="<?php echo IMAGE_URL;?>index/company-glob.svg" alt="">
			<img src="<?php echo IMAGE_URL;?>index/hero-glob-right.svg" alt="">
		</div>
	</div>
</main>

<?php
get_footer();