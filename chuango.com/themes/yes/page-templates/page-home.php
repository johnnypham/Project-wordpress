<?php
/**
 * Template Name: Page Home
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
		<div id="left-home">
		<h3 id="title-home"><img id="wt-new" src="<?php echo bloginfo('template_directory')?>/images/w.png" alt="what new"/></h3>
		<p id="link-product"><a href="<?php echo get_page_link(46)?>">More >></a></p>
		</h3>
		<?php $args=array(cat =>6,posts_per_page=>2	);
			$query= new WP_Query($args);
			if($query->have_posts()){
			while($query->have_posts()){
			$query->the_post();
			echo('<div id="item-new-home">');
			echo('<a href="'.get_permalink().'"><div id="image-product">'.get_the_post_thumbnail().'</div>');
			echo('<p id="title-product-home">'.get_the_title().' >> </p>');
			echo('<p id="content-product-home">'.wp_trim_words( get_the_excerpt(), 50 ).'</p></a>');
			echo('</div>');
			
			}
			}	?>	
				
		</div>
		<div id="right-home">
		<h3 id="title-home-right"><img id="wt-new" src="<?php echo bloginfo('template_directory')?>/images/n.png" alt="what new"/></h3>
		<p id="link-product-right"><a href="<?php echo get_page_link(58)?>">More >></a></p>
			<?php $args=array(cat =>12,posts_per_page=>10	);
			$query= new WP_Query($args);
			if($query->have_posts()){
			while($query->have_posts()){
			$query->the_post();
			$title=get_the_title();
			echo('<div id="new-page-home">');			
			echo('<a href="'.get_permalink().'"><p id="title-product-home">'.get_field('id_product').''.wp_trim_words($title, 3 ).'</p></a>');		
			echo('</div>');
			
			}
			}	?>
		
		</div>
		
		
		
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>