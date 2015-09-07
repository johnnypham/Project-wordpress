<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-full">
		<div id="content" role="main">
		<h3 id="tilte-categories">Mạng lưới Everest Chapter</h3>
		<?php if ( have_posts() ) : ?>
			
			<div id="list-categories" class="left-cate">
				
				<?php wp_list_categories('child_of=3&title_li'); ?>
			</div>
			<div class="right-cate">
				<h3 class="archive-title"><?php printf( __( 'Powerteam %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'content', 'cate');
					
				endwhile;
					twentytwelve_content_nav( 'nav-below' );
				?>

				<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
			</div>
		</div><!-- #content -->
	</section><!-- #primary -->


<?php get_footer(); ?>