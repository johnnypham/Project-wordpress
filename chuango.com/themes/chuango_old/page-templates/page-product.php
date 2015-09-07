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
		
		<div id="new-product-2">
		<?php
				$args= array(
				cat=>13,
				posts_per_page=>4,
				orderby =>'id_product'
			);
			$query=new WP_Query($args);
			if($query->have_posts())
				$count=0;{
				while($query->have_posts()){
			
				$query->the_post();
				
				
				$count++;
				
				if($count%2!=0){				
				?>
				<div id="new-product-left" class="left">
				<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail($post->id,'full'); ?>
				<h3 id="title-new-page-2"><?php the_title();?> - <?php the_field('id_product');?> >> </h3></a>
				<div id="conetn-product"><?php wp_trim_words(the_excerpt(),50);?></div>
				</div><?php	}
				else{?>
				<div id="new-product-right" class="right">
				<?php the_post_thumbnail($post->id,'full'); ?>
				<h3 id="title-new-page-2"><a href="<?php the_permalink();?>"><?php the_title();?> - <?php the_field('id_product');?> >></a></h3>
				<div id="conetn-product"><?php wp_trim_words(the_excerpt(),50);?></div>
				</div>
				<?php }		
				
				}}
		?>
		</div>			
				
			

			
			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>