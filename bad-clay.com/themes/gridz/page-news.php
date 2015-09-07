<?php
/**
 * @package gridz
 * Template Name: New Page
 */
?>
<?php get_header(); ?>
 <div class="wrapper">
<div id="wrapper">
    <header class="jog entry-header">
        <h1 class="entry-title single-title single-title-js-1"><?php the_title(); ?></h1>
   </header>
	
    <div id="grid-container" class="blog">
		<?php $args = array('post_type' =>'blog','posts_per_page'=> 6);
		query_posts( $args ); ?>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <?php get_template_part('content', 'new'); ?>
            <?php endwhile; ?>        
        <?php else : ?>
            <?php get_template_part('content', 'none'); ?>
        <?php endif; ?>
     
    </div>

    <?php gridz_pagination(); ?>
</div>
<?php get_footer(); ?>