<?php
/**
 * @package gridz
 */
?>
<?php global $gridz_options; ?>
<?php get_header(); ?>
<?php if($gridz_options['sidebar_layout'] == "left"): ?>
    <?php get_sidebar(); ?>
<?php endif; ?>
<div class="wrapper">
<div id="container">
    <div id="grid-container">
       
      <?php 
      $args = array(
        'post_type' =>'post',
        'posts_per_page'=>10,
        'meta_query' => array( 
                              array(
                                'key' => 'featured',
                                'value' => true) ));
      query_posts( $args ); ?>
      
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <?php get_template_part('content', 'grid'); ?>
            <?php endwhile; ?>        
        <?php else : ?>
            <?php get_template_part('content', 'none'); ?>
        <?php endif; ?>
     
    </div>
       <div id="info" class="jh-none">
            <h3>BAD-CLAY STUDIO</h3>
            <p>Is a CG studio specialized in 2D/3D character concept,
            sculpting (traditional and digital), asset modeling and texturing. 
            We provide the following services for studios and production 
            companies worldwide.<p>
        </div>
    <?php gridz_pagination(); ?>
</div>
<?php if($gridz_options['sidebar_layout'] == "right"): ?>
    <?php get_sidebar(); ?>
<?php endif; ?>
<?php get_footer(); ?>