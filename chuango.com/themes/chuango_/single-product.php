<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div id="single-product-featured">
						<div id="items-product-featured">							
							<div id="news-contents">
							
							<?php the_content();?></div>
						</div>
						<div><?php //echo do_shortcode('[social_share/]');?></div>
						<div class="fb-comments" data-href="<?php echo(get_permalink()); ?>" data-width="600"></div>
					</div>
	</article><!-- #post -->
