<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main class="l-index" id="js-main-wrapper">
	<div class="hero" id="js-hero">
		<h1 class="hero__eyecatch" id="js-hero-eyecatch">
			<img src="<?php echo IMAGE_URL;?>index/curiosity.svg" alt="">
			<img src="<?php echo IMAGE_URL;?>index/x-symbol.svg" alt="">
			<img src="<?php echo IMAGE_URL;?>index/synergy.svg" alt="">
		</h1>
		<p class="hero__tagline" id="js-hero-tagline">When do you start web marketing?</p>
		<a class="hero__cta" href="#"  id="js-hero-cta">NOW</a>
		<div class="hero__decor">
			<img class="hero__glob-left" src="<?php echo IMAGE_URL;?>index/hero-glob-left.svg" alt="">
			<img class="hero__glob-right" src="<?php echo IMAGE_URL;?>index/hero-glob-right.svg" alt="">
			<div class="hero__people" id="js-hero-people">
				<img class="hero__person" src="<?php echo IMAGE_URL;?>index/person-blue-1.svg" alt="">
				<img class="hero__person" src="<?php echo IMAGE_URL;?>index/person-red-1.svg" alt="">
				<img class="hero__person" src="<?php echo IMAGE_URL;?>index/person-red-2.svg" alt="">
				<img class="hero__person" src="<?php echo IMAGE_URL;?>index/person-blue-2.svg" alt="">
			</div>
			
		</div>
	</div>
	<section class="l-index__about">
		<div class="l-container">
			<div class="l-index__about-content">
				<h2 class="section-title section-title--white section-title--centered" id="js-about-section">
					<span class="section-title__en">about us</span>
					<span class="section-title__ja">私たちについて</span>
				</h2>
				<p>かっこいいものを書いてみましょう。アイデアと目指す世界について書いてみましょう。現時点ではメンバーの詳細を説明することはできませんので、どのようなメンバーが運営しているかを含めておくとよいでしょう。かっこいいものを書いてみましょう。アイデアと目指す世界について書いてみましょう。現時点ではメンバーの詳細を説明することはできませんので、どのようなメンバーが運営しているかを含めておくとよいでしょう。</p>
			</div>
		</div>
	</section>
	<section class="l-index__services">
		<div class="l-index__services-decor">
			<img src="<?php echo IMAGE_URL;?>index/service-glob-right.svg" alt="">
		</div>
		<div class="l-container">
			<div class="l-index__services-content" id="js-services-section">
				<h2 class="section-title">
					<span class="section-title__en">services</span>
					<span class="section-title__ja">事業内容</span>
				</h2>
				<ul class="l-index__services-list">
					<li class="l-index__services-item">
						<article class="service-block u-flex">
							<div class="service-block__image">
								<img src="<?php echo IMAGE_URL;?>index/service-1.jpg" alt="">
							</div>
							<div class="service-block__details">
								<div class="service-block__details-top">
									<h3>Web制作</h3>
									<em>Web Production</em>
								</div>
								<p class="service-block__details-description">高い文章力とSEOの知識を併せもったライターが、貴社ご用件に合わせて高品質なコンテンツを納品します。</p>
							</div>
						</article>
					</li>
					<li class="l-index__services-item">
						<article class="service-block u-flex">
							<div class="service-block__image">
								<img src="<?php echo IMAGE_URL;?>index/service-2.jpg" alt="">
							</div>
							<div class="service-block__details">
								<div class="service-block__details-top">
									<h3>SEOコンサル</h3>
									<em>SEO Consultation</em>
								</div>
								<p class="service-block__details-description">大手メディアなどで、SEO記事の執筆経験があるライターや、Webサイトの構築提案経験豊富なディレクターが貴社のSEO対策の現状を診断し、検索エンジン最適化を図ります。</p>
							</div>
						</article>
					</li>
					<li class="l-index__services-item">
						<article class="service-block u-flex">
							<div class="service-block__image">
								<img src="<?php echo IMAGE_URL;?>index/service-3.jpg" alt="">
							</div>
							<div class="service-block__details">
								<div class="service-block__details-top">
									<h3>広告運用</h3>
									<em>Ad Operation</em>
								</div>
								<p class="service-block__details-description">大規模なサイトは得意ではありませんが、ユーザー行動に基づいた情報設計、コンテンツ企画で、効果の出やすいページを制作します。</p>
							</div>
						</article>
					</li>
					<li class="l-index__services-item">
						<article class="service-block u-flex">
							<div class="service-block__image">
								<img src="<?php echo IMAGE_URL;?>index/service-4.jpg" alt="">
							</div>
							<div class="service-block__details">
								<div class="service-block__details-top">
									<h3>動画制作</h3>
									<em>Video Production</em>
								</div>
								<p class="service-block__details-description">大規模なサイトは得意ではありませんが、ユーザー行動に基づいた情報設計、コンテンツ企画で、効果の出やすいページを制作します。</p>
							</div>
						</article>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="l-index__works" id="js-works-section">
		<div class="l-index__works-content">
			<h2 class="section-title section-title--white">
				<span class="section-title__en">works</span>
				<span class="section-title__ja">実績</span>
			</h2>
			<ul class="l-index__works-list" id="js-works-slider">
				<li class="l-index__works-item">
					<article class="article-block article-block--works">
						<div class="article-block__image">
							<img src="<?php echo IMAGE_URL;?>index/works-dummy.jpg" alt="">
						</div>
						<div class="article-block__details">
							<time class="article-block__date" datetime="2019-03-22">2019.03.22</time>
							<span class="article-block__category">動画制作</span>
							<h3 class="article-block__title">理念系、目指す世界系のことも書きましょう詳細のメンバーの説明は現状できないので1</h3>
						</div>
					</article>
				</li>
				<li class="l-index__works-item">
					<article class="article-block article-block--works">
						<div class="article-block__image">
							<img src="<?php echo IMAGE_URL;?>index/works-dummy.jpg" alt="">
						</div>
						<div class="article-block__details">
							<time class="article-block__date" datetime="2019-03-22">2019.03.22</time>
							<span class="article-block__category">動画制作</span>
							<h3 class="article-block__title">理念系、目指す世界系のことも書きましょう詳細のメンバーの説明は現状できないので2</h3>
						</div>
					</article>
				</li>
				<li class="l-index__works-item">
					<article class="article-block article-block--works">
						<div class="article-block__image">
							<img src="<?php echo IMAGE_URL;?>index/works-dummy.jpg" alt="">
						</div>
						<div class="article-block__details">
							<time class="article-block__date" datetime="2019-03-22">2019.03.22</time>
							<span class="article-block__category">動画制作</span>
							<h3 class="article-block__title">理念系、目指す世界系のことも書きましょう詳細のメンバーの説明は現状できないので3</h3>
						</div>
					</article>
				</li>
				<li class="l-index__works-item">
					<article class="article-block article-block--works">
						<div class="article-block__image">
							<img src="<?php echo IMAGE_URL;?>index/works-dummy.jpg" alt="">
						</div>
						<div class="article-block__details">
							<time class="article-block__date" datetime="2019-03-22">2019.03.22</time>
							<span class="article-block__category">動画制作</span>
							<h3 class="article-block__title">理念系、目指す世界系のことも書きましょう詳細のメンバーの説明は現状できないので4</h3>
						</div>
					</article>
				</li>
			</ul>
			<div class="l-index__works-arrows u-flex">
				<div class="l-index__works-arrow l-index__works-arrow--prev js-slider-prev"></div>
				<div class="l-index__works-arrow l-index__works-arrow--next js-slider-next"></div>
			</div>
			<a class="l-index__works-button button" href="#">実績一覧へ</a>
		</div>
	</section>
	<section class="l-index__column" id="js-column-section">
		<div class="l-container">
			<div class="l-index__column-content">
				<h2 class="section-title">
					<span class="section-title__en">column </span>
					<span class="section-title__ja">コラム</span>
				</h2>
				<ul class="l-index__column-list u-flex">
					<li class="l-index__column-item">
						<article class="article-block">
							<div class="article-block__image">
								<img src="<?php echo IMAGE_URL;?>index/service-1.jpg" alt="">
							</div>
							<div class="article-block__details">
								<time class="article-block__date" datetime="2019-03-22">2019.03.22</time>
								<span class="article-block__category">NEWS</span>
								<h3 class="article-block__title">理念系、目指す世界系のことも書き詳細のメンバーの説明は現状できな</h3>
							</div>
						</article>
					</li>
					<li class="l-index__column-item">
						<article class="article-block">
							<div class="article-block__image">
								<img src="<?php echo IMAGE_URL;?>index/service-1.jpg" alt="">
							</div>
							<div class="article-block__details">
								<time class="article-block__date" datetime="2019-03-22">2019.03.22</time>
								<span class="article-block__category">NEWS</span>
								<h3 class="article-block__title">理念系、目指す世界系のことも書き詳細のメンバーの説明は現状できな</h3>
							</div>
						</article>
					</li>
					<li class="l-index__column-item">
						<article class="article-block">
							<div class="article-block__image">
								<img src="<?php echo IMAGE_URL;?>index/service-1.jpg" alt="">
							</div>
							<div class="article-block__details">
								<time class="article-block__date" datetime="2019-03-22">2019.03.22</time>
								<span class="article-block__category">NEWS</span>
								<h3 class="article-block__title">理念系、目指す世界系のことも書き詳細のメンバーの説明は現状できな</h3>
							</div>
						</article>
					</li>
				</ul>
			</div>
			<a class="l-index__column-button button" href="#">コラム一覧へ</a>
		</div>
	</section>
	<section class="l-index__company">
		<div class="l-index__company-decor">
			<img src="<?php echo IMAGE_URL;?>index/company-glob.svg" alt="">
			<img src="<?php echo IMAGE_URL;?>index/person-blue-1.svg" alt="">
			<img src="<?php echo IMAGE_URL;?>index/person-red-1.svg" alt="">
		</div>
		<div class="l-container">
			<div class="l-index__company-content">
				<h2 class="section-title">
					<span class="section-title__en">company</span>
					<span class="section-title__ja">会社概要</span>
				</h2>
				<div class="company">
					<dl class="company__list u-flex">
						<dt>会社名</dt>
						<dd>エーブルCo., Ltd.</dd>
						<dt>所在地</dt>
						<dd>東京都文京区本郷1-25-26 ベルファース本郷弓町706</dd>
						<dt>資本金</dt>
						<dd>300万円</dd>
						<dt>資本金</dt>
						<dd>Web制作、SEOコンサル、SEOライティング、広告運用、動画制作</dd>
					</ul>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();