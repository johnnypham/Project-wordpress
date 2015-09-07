<?php
/**
 * @package gridz
 */
?>
<?php get_header(); ?>
<?php if($gridz_options['sidebar_layout'] == "left"): ?>
    <?php get_sidebar(); ?>
<?php endif; ?>
<div id="container-null">    
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <?php
            $check=get_post_type( $post );
            if($check=="post"){
                get_template_part('content', 'single');
            }
            else{
                 get_template_part('content', 'blog');
            }
              ?>
            <?php comments_template(); ?>
        <?php endwhile; ?>        
    <?php else : ?>
        <?php get_template_part('content', 'none'); ?>
    <?php endif; ?>
</div>
<?php if($gridz_options['sidebar_layout'] == "right"): ?>
    <?php //get_sidebar(); ?>
<?php endif; ?>

<?php get_footer(); ?>