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
		<div id="page-cat-custom">
			<div id="left-cat-custom"> 
				<div id="image-ceo"><img src="<?php the_field('image_ceo');?>" alt="Image CEO"/></div>
				<h3><?php the_field('name');?></h3>
				<p><?php the_field('chuc_vu');?></p>
				<p><?php the_field('ph');?></p>
				<p><?php the_field('mail');?></p>
				<p><?php the_field('website');?></p>
				
			</div>
			<div id="right-cat-custom"> 				
				<div id="image-company"><img src="<?php the_field('logo_company');?>" alt="Image Company"/></div>
				<h3><?php the_title();?></h3>
				<div id="soluoc"><?php the_excerpt();?>
					<span><a href="<?php the_permalink();?>">Chi Tiết</a> </span>
				</div>
			</div>
		</div>
		
		

		
	</article><!-- #post -->
