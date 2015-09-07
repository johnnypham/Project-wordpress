<?php
 /**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package gridz
 */
?>
<?php global $gridz_options; ?>
<?php get_header(); ?>
<?php if($gridz_options['sidebar_layout'] == "left"): ?>
    <?php get_sidebar(); ?>
<?php endif; ?>
<div class="wrapper">
    <header class="jog entry-header">
        <h1 class="entry-title single-title single-title-js-1 last">
         <?php  $postid = get_the_ID();
           $had= get_the_category( $postid );          
          echo $had[0]->name; ?></h1>
   </header>
    <h1 class=" single-title-js-1">
       </h1>
<div id="container">
      <div id="grid-container-cs">
        <div id="carousel2" class="flexslider carousel123">
            <ul class="slides">
                <?php foreach (get_categories() as $cat) : ?>
               
                  <li style="min-height:130px;margin: 0 5px;background-size: cover;background-image:url('<?php echo z_taxonomy_image_url($cat->term_id); ?>')"> 
                    <a class="cate-cs-js" href="<?php echo get_category_link($cat->term_id); ?>">
                      <?php echo $cat->cat_name; ?>
                    </a>
                  </li>
                
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
    <div id="grid-container">
  
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