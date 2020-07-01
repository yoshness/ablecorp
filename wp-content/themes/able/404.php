<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main class="l-404" id="js-main-wrapper">
	<div class="l-container">
		<div class="l-404__top">
			<?php 
				$slug = '404';
				include( locate_template( 'template-parts/breadcrumbs.php', false, false ) );
			?>
		</div>
		<div class="l-404__content">
			<h1>申し訳ございませんが、<br>お探しのページは見つかりませんでした。</h1>
			<p>お客さまのお探しのページは削除されたか、もしくは移動された可能性があります。</p>
		</div>
		<a class="button" href="<?php echo HOME_URL; ?>">TOPへ戻る</a>
	</div>
</main>

<?php
get_footer();