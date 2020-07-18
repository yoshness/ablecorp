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
		<a class="hero__cta" href="<?php echo HOME_URL; ?>contact" id="js-hero-cta">NOW</a>
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
		<a class="hero__scroll js-scroll" href="/#js-about-section" data-offset="-150" id="js-hero-scroll">
			<span class="hero__scroll-line"></span>
		</a>
	</div>
	<section class="l-index__about">
		<div class="l-container">
			<div class="l-index__about-content js-scroll-activate" data-offset="900">
				<h2 class="section-title section-title--white section-title--centered" id="js-about-section">
					<span class="section-title__en">about us</span>
					<span class="section-title__ja">私たちについて</span>
				</h2>
				<p>
					<span>「最高なパフォーマンスとはなにか？」</span><br class="u-show-pc"><br>様々な課題が生まれて、解決する。新たなニーズが生まれ、アイディアが生まれ満たされる。<br class="u-show-pc">時間が立つと共に様々なサービスが誕生し、多くの先人企業が社会貢献をしてきました。<br class="u-show-pc">このような現代において個人のみならず社会においてもニーズの多様化は常に加速しています。<br class="u-show-pc">多様化する需要に、Webマーケティングを通して様々なアイディアと実績を見せながら応えていきたい。<br><br>「curiosity（好奇心）」×「synergy（相乗効果）」をテーマに、<br class="u-show-pc">大胆かつ柔軟に。適正なチームとコストで。新時代に求められる新しいスタイルを作っていくことが私達のミッションです。</p>
			</div>
		</div>
	</section>
	<section class="l-index__services">
		<div class="l-index__services-decor">
			<img src="<?php echo IMAGE_URL;?>index/service-glob-right.svg" alt="">
		</div>
		<div class="l-container">
			<div class="l-index__services-content js-scroll-activate" id="js-services-section">
				<h2 class="section-title">
					<span class="section-title__en">services</span>
					<span class="section-title__ja">事業内容</span>
				</h2>
				<ul class="l-index__services-list">
					<li class="l-index__services-item">
						<article class="service-block u-flex js-scroll-activate">
							<div class="service-block__left">
								<div class="service-block__image" style="background-image: url(<?php echo IMAGE_URL;?>index/service-1.jpg);"></div>
								<div class="service-block__hover" style="background-image: url(<?php echo IMAGE_URL;?>index/service-1.jpg);"></div>
							</div>
							<div class="service-block__details">
								<div class="service-block__details-top">
									<h3><span>Web</span>制作</h3>
									<em>Web Production</em>
								</div>
								<p class="service-block__details-description">とにかくハイコストパフォーマンスであること。それが私たちの強みです。<br class="u-show-pc">お客様に本当に必要で、かつ後悔しないWebサイト制作をコンテンツ企画からデザイン、納品までご一緒します。</p>
							</div>
						</article>
					</li>
					<li class="l-index__services-item">
						<article class="service-block u-flex js-scroll-activate">
							<div class="service-block__left">
								<div class="service-block__image" style="background-image: url(<?php echo IMAGE_URL;?>index/service-2.jpg);"></div>
								<div class="service-block__hover" style="background-image: url(<?php echo IMAGE_URL;?>index/service-2.jpg);"></div>
							</div>
							<div class="service-block__details">
								<div class="service-block__details-top">
									<h3><span>SEO</span>対策</h3>
									<em>Search Engine Optimization</em>
								</div>
								<p class="service-block__details-description">ユーザー視点での高品質なコンテンツを以って、SEO対策を実施すること。それが私たちの強みです。<br class="u-show-pc">検索エンジンから評価されやすいWebサイト、高い文章力とSEOの知識を併せもったライターが貴社SEO課題を解決します。</p>
							</div>
						</article>
					</li>
					<li class="l-index__services-item">
						<article class="service-block u-flex js-scroll-activate">
							<div class="service-block__left">
								<div class="service-block__image" style="background-image: url(<?php echo IMAGE_URL;?>index/service-4.jpg);"></div>
								<div class="service-block__hover" style="background-image: url(<?php echo IMAGE_URL;?>index/service-4.jpg);"></div>
							</div>
							<div class="service-block__details">
								<div class="service-block__details-top">
									<h3>動画制作</h3>
									<em>Video Production</em>
								</div>
								<p class="service-block__details-description">Webマーケティングの視点から動画作成をできることが私たちの強みです。<br class="u-show-pc">5G時代において動画の活用は重要なマーケティング手段の１つです。<br class="u-show-pc">様々な媒体に合せて企画〜撮影、編集、納品までノンストップでご一緒します。</p>
							</div>
						</article>
					</li>
					<li class="l-index__services-item">
						<article class="service-block u-flex js-scroll-activate">
							<div class="service-block__left">
								<div class="service-block__image" style="background-image: url(<?php echo IMAGE_URL;?>index/service-3.jpg);"></div>
								<div class="service-block__hover" style="background-image: url(<?php echo IMAGE_URL;?>index/service-3.jpg);"></div>
							</div>
							<div class="service-block__details">
								<div class="service-block__details-top">
									<h3>広告運用</h3>
									<em>Advertising strategy</em>
								</div>
								<p class="service-block__details-description">お客様の思いをふさわしい媒体を選択して広告できること。それが私たちの強みです。<br class="u-show-pc">Yahoo!やGoogle、Facebook、Twitterなど様々な媒体での広告運用、経験と数値に基づいた分析が可能です。</p>
							</div>
						</article>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="l-index__works" id="js-works-section">
		<div class="l-index__works-content js-scroll-activate">
			<h2 class="section-title section-title--white">
				<span class="section-title__en">works</span>
				<span class="section-title__ja">実績</span>
			</h2>
			<?php
	          	$works_args = array(
					'post_type'      => 'work',
			    	'posts_per_page' => 5,
			    	'order'          => 'DESC',
			    	'post_status'    => 'publish',
			    	'paged'=> get_query_var('paged')
				);
				$works = new WP_Query($works_args);
	        ?>
			<ul class="l-index__works-list" id="js-works-slider">
				<?php 
					while ($works->have_posts()): $works->the_post(); 
						$categories = get_the_terms( get_the_ID(), 'work_category' );

						$featured_image = get_eyecatch_data(get_the_ID()) ? get_eyecatch_data(get_the_ID()) : IMAGE_URL.'ogp.jpg';
				?>
				<li class="l-index__works-item">
					<a href="<?php echo the_permalink(); ?>">
						<article class="article-block article-block--works">
							<div class="article-block__image" style="background-image: url(<?php echo $featured_image; ?>);">
								<div class="article-block__hover" style="background-image: url(<?php echo $featured_image; ?>);">
								</div>
							</div>
							<div class="article-block__details">
								<time class="article-block__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
								<span class="article-block__category"><?php echo $categories[0]->name; ?></span>
									<h3 class="article-block__title"><?php echo get_the_title(); ?></h3>
							</div>
						</article>
					</a>
				</li>
				<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<div class="l-index__works-arrows u-flex">
				<div class="l-index__works-arrow l-index__works-arrow--prev js-slider-prev"></div>
				<div class="l-index__works-arrow l-index__works-arrow--next js-slider-next"></div>
			</div>
			<a class="l-index__works-button button" href="<?php echo HOME_URL; ?>works">実績一覧へ</a>
		</div>
	</section>
	<section class="l-index__column js-scroll-activate" id="js-column-section">
		<div class="l-container">
			<div class="l-index__column-content">
				<h2 class="section-title">
					<span class="section-title__en">column </span>
					<span class="section-title__ja">コラム</span>
				</h2>
				<?php
		          	$columns_args = array(
						'post_type'      => 'column',
				    	'posts_per_page' => 5,
				    	'order'          => 'DESC',
				    	'post_status'    => 'publish',
				    	'paged'=> get_query_var('paged')
					);
					$columns = new WP_Query($columns_args);
		        ?>
				<ul class="l-index__column-list u-flex">
					<?php 
						while ($columns->have_posts()): $columns->the_post();
							$categories = get_the_terms( get_the_ID(), 'column_category' );

							// Making an excerpt of the news post content
						    $title_excerpt = get_excerpt(get_the_title(), 100);

						    $featured_image = get_eyecatch_data(get_the_ID()) ? get_eyecatch_data(get_the_ID()) : IMAGE_URL.'ogp.jpg';
					?>
					<li class="l-index__column-item">
						<a href="<?php echo the_permalink(); ?>">
							<article class="article-block js-scroll-activate">
								<div class="article-block__image" style="background-image: url(<?php echo $featured_image; ?>);">
									<div class="article-block__hover" style="background-image: url(<?php echo $featured_image; ?>);">
								</div>
								</div>
								<div class="article-block__details">
									<time class="article-block__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
									<span class="article-block__category"><?php echo $categories[0]->name; ?></span>
										<h3 class="article-block__title"><?php echo $title_excerpt; ?></h3>
								</div>
							</article>
						</a>
					</li>
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
			</div>
			<a class="l-index__column-button button" href="<?php echo HOME_URL; ?>columns">コラム一覧へ</a>
		</div>
	</section>
	<section class="l-index__company js-scroll-activate">
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
						<dt>事業内容</dt>
						<dd>Web制作、SEO対策、動画制作、広告運用</dd>
					</ul>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();