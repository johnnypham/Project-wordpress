<?php
/**
 * Template Name: Product New
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php 
				$argn= array(
						exclude =>6,
						child_of=>6
						
						
				);
				$categories = get_categories( $argn );
		
			foreach($categories as $cat){
			
				echo('<a href="'.get_category_link($cat->term_id).'">'.$cat->name.'</a>');
			}
				
			$args= array(
				cat=>6
			);
			$query=new WP_Query($args);
			if($query->have_posts())
			{	
				
				while($query->have_posts()){
				$query->the_post();
				$fer=get_field('featured_product');
				if($fer=Yes){
				
				echo(the_field(id_product).'</br>');
				the_title();echo('</br>');
				
				
				}
				else{
				echo('lko co');
				}
			}}
			?>
			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>