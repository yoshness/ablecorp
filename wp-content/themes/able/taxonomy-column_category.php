<?php
/**
 *
 * Template Name: Category Page
 */

get_header(); ?>

<main class="l-columns" id="js-main-wrapper">
	<?php
	    $category = get_the_terms( $post->ID, 'column_category' );
	    $main_category_name = !empty($category[0]->name) ? $category[0]->name : '
';
	?>
  	<div class="l-columns__top">
		<div class="l-container">
			<?php 
				include( locate_template( 'template-parts/breadcrumbs.php', false, false ) );
			?>
			<h1 class="section-title">
				<span class="section-title__en">columns</span>
				<span class="section-title__ja"><?php echo $main_category_name; ?></span>
			</h1>
		</div>
	</div>
	<?php if($category[0]) { ?>
	<div class="l-columns__content">
		<div class="l-container">
			<?php
	          	$article_args = array(
					'post_type'       => 'column',
					'column_category' => $category[0]->slug,
			    	'posts_per_page'  => 12,
			    	'order'           => 'DESC',
			    	'post_status'     => 'publish',
			    	'paged'			  => get_query_var('paged')
				);
				$articles = new WP_Query($article_args);
				if ($articles->have_posts()) {
	        ?>
			<ul class="l-columns__list u-flex">
				<?php 
					while ($articles->have_posts()): $articles->the_post(); 
						$categories = get_the_terms( get_the_ID(), 'column_category' );

						$featured_image = get_eyecatch_data(get_the_ID()) ? get_eyecatch_data(get_the_ID()) : IMAGE_URL.'ogp.jpg';
				?>
				<li class="l-columns__item">
					<a href="<?php echo the_permalink(); ?>">
						<article class="article-block">
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
			<?php } ?>
			<div class="l-columns__pagination pagination">
				<?php if ( function_exists('wp_pagenavi') ) : ?>
		        	<div class="pagenavi">
		            	<?php wp_pagenavi( array( 'query' => $articles = new WP_Query($article_args) ) ); ?>
		        	</div>
		        <?php endif; wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="l-columns__decor">
			<img src="<?php echo IMAGE_URL;?>index/company-glob.svg" alt="">
			<img src="<?php echo IMAGE_URL;?>index/hero-glob-right.svg" alt="">
		</div>
	</div>
	<?php } else { ?>
		<div class="l-columns__content">
			<div class="l-container">
				<p class="l-columns__content-none">このカテゴリの投稿は見つかりませんでした。</p>
			</div>
		</div>
	<?php } ?>
</main>

<?php get_template_part( 'template-parts/footer/main'); ?>

<?php
get_footer();