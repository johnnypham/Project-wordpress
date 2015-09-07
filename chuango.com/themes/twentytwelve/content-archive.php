<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" class="product-it">
			<div id="shop-product">
				<div id="product-items">
					<a href="<?php the_permalink();?>">
						<?php the_post_thumbnail('full');?>
						<p id="pd-title"><?php the_title();?></p>
						<p id="pd-price">20 VND</p>					
					</a>
				</div>
			</div>
		
	</article><!-- #post -->
