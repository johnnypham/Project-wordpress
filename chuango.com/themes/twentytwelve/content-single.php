<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div id="new-product-child">
		<?php				
				$args= array(
				post_type => post,
				posts_per_page => 4,
				numberposts =>-1
				
			);
			$query=new WP_Query($args);
			if($query->have_posts())
				$count=0;				
				while($query->have_posts()){			
				$query->the_post();		
				$count++;				
						
				?>
				<article class="product-it">
					<div id="shop-product">
						<div id="product-items">
							<a href="<?php the_permalink();?>">
								<?php the_post_thumbnail($post->id,'full'); ?>
								<p id="pd-title"><?php the_title();?></p>
								<p id="pd-price">20 VND</p>					
							</a>
							
						</div>
					</div>

				</article>
				<?php }		
				wp_pagenavi();
				
				
		?>

		</div>			
		<div class="entry-content">
			
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
