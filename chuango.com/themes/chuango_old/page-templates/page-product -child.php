<?php
/**
 * Template Name: Product New Child
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
		
		<div id="new-product-child">
		<?php
		$fer1=get_field('id_page');
				
				$args= array(
				'cat' => $fer1,
				'posts_per_page' => -1,
				'showposts'=>4,
				'paged' => get_query_var('paged')				
				
			);
			$query=new WP_Query($args);
			if($query->have_posts())
				$count=0;{
				
				while($query->have_posts()){
			
				$query->the_post();
				
				$fer=get_field('featured_product');
				$fer1=get_field('id_page');
				echo($fer1);
				$count++;				
				if($count%2!=0){				
				?>
				<div id="new-product-left-child" class="left">
				<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail($post->id,'full'); ?></a>
				<div id="info-left">
				<a href="<?php the_permalink();?>">
				<h3 id="title-new-page-child"><?php the_title();?> - <?php the_field('id_product');?> >> </h3></a>
				<div id="conetn-product-child"><?php wp_trim_words(the_excerpt(),50);?></div>
				</div>
				<div id="info-right">
				<a href="<?php the_permalink();?>">Details</a>
				</div>
				</div>
				<?php	}
				else{?>
				<div id="new-product-right-child" class="right">
				<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail($post->id,'full'); ?></a>
				<div id="info-left">
				<a href="<?php the_permalink();?>">
				<h3 id="title-new-page-child"><a href="<?php the_permalink();?>"><?php the_title();?> - <?php the_field('id_product');?> >></a></h3>
				<div id="conetn-product-child"><?php wp_trim_words(the_excerpt(),50);?></div>
				</div>
				<div id="info-right">
				<a href="<?php the_permalink();?>">Details</a>
				</div>
				</div>
				
				<?php }		
				
				}}
		?>
	<?php wp_pagenavi( array( 'query' => $query ) );
			wp_reset_postdata(); ?>
		</div>			
				
			

			
			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>