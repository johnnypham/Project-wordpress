<?php
/**
 * Template Name: Page News
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
		<div id="page-new">
		<h3 id="title-new"><img id="wt-new" src="<?php echo bloginfo('template_directory')?>/images/new.jpg" alt="what new"/>		</h3>
		<?php $args=array(cat =>12	);
			$query= new WP_Query($args);
			if($query->have_posts()){
			while($query->have_posts()){
			$query->the_post();
			echo('<div id="news-items">');	
			echo('<p id="time-news">'.get_the_time('Y-m-d').'</p>')	;
			echo('<p id="title-news-new"><a href="'.get_permalink().'">'.get_field ('id_product').''. get_the_title().'</a></p>');			
			echo('</div>');
			
			}
			}	?>	
				
		</div>
		<div id="right-home">
		
		</div>
		
		
			<?php				
			
							
			?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>