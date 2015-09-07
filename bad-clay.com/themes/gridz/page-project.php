<?php
/**
 * @package gridz
 * Template Name: Project Page
 */
?>
<?php get_header(); ?>
 <div class="wrapper">
<header class="entry-header">
    <h1 class="entry-title single-title-cs last">Projects</h1>    
</header>
<div id="cus">
    <div id="project-cs" class="project-container">
        <?php $my_query = new WP_Query( array ('posts_per_page'=> -1,'post_type'=>'post', 'paged' => get_query_var('paged') ) ) ;?>
        <?php if($my_query ->have_posts()): ?>
            <?php while($my_query ->have_posts()): $my_query ->the_post(); ?>
                <?php get_template_part('content', 'projects'); ?>
            <?php endwhile; ?>        
        <?php else : ?>
            <?php get_template_part('content', 'none'); ?>
        <?php endif; ?>
     
    </div>

    <?php
        wp_pagenavi( array( 'query' => $my_query ) );
    ?>
</div>
<?php get_footer(); ?>