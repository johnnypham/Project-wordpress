<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
				
				 <?php 
				  
					if(in_category(8)){
						get_template_part( 'single','product' ); }
					elseif(in_category(12)){
						get_template_part( 'single','new' ); }
					else{
					get_template_part( 'single','product' ); 
					//get_template_part( 'content', get_post_format() );
					}
				 ?>
				
				
				
				

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>