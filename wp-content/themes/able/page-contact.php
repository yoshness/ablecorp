<?php
/* 
Template Name: Contact
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
				<p class="l-contact__content-description">
					弊社にご関心をお持ちいただきまして、ありがとうございます。<br>ご意見・ご相談、料金のお見積もりなど、お気軽にお問合わせください。<br>お問合せ内容の確認後、担当者よりご連絡させていただきます。
				</p>
				<div class="l-contact__steps u-flex">
					<div class="l-contact__step is-active">
						<span>入力画面</span>
					</div>
					<div class="l-contact__step" id="js-contact-count-step2">
						<span>入力内容の確認 </span>
					</div>
					<div class="l-contact__step">
						<span>送信完了</span>
					</div>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="20" title="Contact Form"]'); ?>
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