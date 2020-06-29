<?php
/**
 * The template for displaying all Work posts
 */

get_header();
?>

<main class="l-article" id="js-main-wrapper">
	<div class="l-article__top">
		<div class="l-container">
			<?php
				$singlePage = true;
				include( locate_template( 'template-parts/breadcrumbs.php', false, false ) );
			?>
		</div>
	</div>
	<section class="l-article__content">
		<div class="l-container">
			<?php 
				if ( have_posts() ):
				    while ( have_posts() ):
				        the_post();
				        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
				        $post_category = get_the_terms( get_the_ID(), 'work_category' );
			?>
					<div class="l-article__content-main">
						<div class="l-article__content-top">
								<time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
								<a href="<?php echo HOME_URL;?>work-category/<?php echo $post_category[0]->slug; ?>">
									<?php echo $post_category[0]->name; ?>
								</a>
								<h1><?php echo the_title(); ?></h1>
								<img src="<?php echo esc_url($featured_img_url) ?>">
							</div>
							<div class="article-single">
								<?php the_content(); ?>
							</div>
							<div class="l-article__content-bottom">
								<h3 class="section-title">
									<span class="section-title__en">other categories</span>
									<span class="section-title__ja">その他のカテゴリー</span>
								</h3>
								<?php
									$categories = get_terms( array(
										'taxonomy' => 'work_category',
										'hide_empty' => false,
										'order' => 'DESC'
									) );

									foreach ( $categories as $cat) { ?>
										<a href="<?php echo HOME_URL;?>work-category/<?php echo $cat->slug; ?>">
											<?php echo $cat->name; ?>
										</a>
								<?php } ?>
							</div>
					</div>
			<?php
					endwhile;
				endif;
			?>
		</div>
		<div class="l-article__decor">
			<img src="<?php echo IMAGE_URL;?>single/top-glob.svg" alt="">
			<img src="<?php echo IMAGE_URL;?>single/middle-glob.svg" alt="">
			<img src="<?php echo IMAGE_URL;?>single/bottom-glob.svg" alt="">
		</div>
	</section>
</main>

<?php
get_footer();
