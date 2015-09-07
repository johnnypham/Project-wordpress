<?php
/**
 * Template Name: Product FA
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
		<div id="new-product-1">
		<?php
				$args= array(
				cat=>12,
				posts_per_page=>5,
				orderby =>'id_product'
			);
			$query=new WP_Query($args);
			if($query->have_posts())
				$count=0;{
				while($query->have_posts()){
			
				$query->the_post();
				$fer=get_field('featured_product');
				$count++;
				if($fer=='Yes'){?>
				<?php switch ($count) {
						case 1:
						echo ('<div class="left">');
						echo ('<div id="page-new-product-left" class="left" >');
						echo ('<h3 id="title-new-page">'.get_the_title().'</h3>');
						echo ('<a href="'.get_permalink().'"><img src="'.get_field('image_1').'" alt="Images Product"/></a>');
						echo ('</div>');
						echo ('</div>');
						break;
						case 2:
						echo ('<div class="right">');
						echo ('<div id="page-new-product" class="left">');
						echo ('<h3 id="title-new-page">'.get_the_title().'</h3>');
						echo ('<a href="'.get_permalink().'"><img src="'.get_field('image_1').'" alt="Images Product"/></a>');
						echo ('</div>');
						break;
						case 3:						
						echo ('<div id="page-new-product" class="left">');
						echo ('<h3 id="title-new-page">'.get_the_title().'</h3>');
						echo ('<a href="'.get_permalink().'"><img src="'.get_field('image_1').'" alt="Images Product"/></a>');
						echo ('</div>');
						break;
						case 4:						
						echo ('<div id="page-new-product" class="right">');
						echo ('<h3 id="title-new-page">'.get_the_title().'</h3>');
						echo ('<a href="'.get_permalink().'"><img src="'.get_field('image_1').'" alt="Images Product"/></a>');
						echo ('</div>');
						break;
						default;						
						echo ('<div id="page-new-product" class="right">');
						echo ('<h3 id="title-new-page">'.get_the_title().'</h3>');
						echo ('<a href="'.get_permalink().'"><img src="'.get_field('image_1').'" alt="Images Product"/></a>');
						echo ('</div>');
						echo ('</div>');
						break;
						}
				?>
				
				<?php				
				}
				}}
		?>
		</div>
		<div id="new-product-2">
		<?php
				$args= array(
				cat=>12,
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
				<img src="<?php the_field('image_1'); ?>" alt="Images Product"/>
				<h3 id="title-new-page"><?php the_title();?></h3></a>
				<div id="conetn-product"><?php wp_trim_words(the_content(),50);?></div>
				</div><?php	}
				else{?>
				<div id="new-product-right" class="right">
				<?php the_post_thumbnail();?>
				<h3 id="title-new-page"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
				<div id="conetn-product"><?php wp_trim_words(the_content(),50);?></div>
				</div>
				<?php }		
				
				}}
		?>
		</div>			
				
			

			<?php 
				$argn= array(
						exclude =>6,
						child_of=>6				
						
				);
				$categories = get_categories( $argn );
		
			foreach($categories as $cat){
			
				echo('<a href="'.get_category_link($cat->term_id).'">'.$cat->name.'</a>');
			}
				
			
				
				
			
			?>
			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>