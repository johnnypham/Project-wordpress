<?php
/**
 * @package gridz
 * Template Name: Services Page
 */
?>
<?php get_header(); ?>
 <div class="wrapper">
	<header class="entry-header">
        <h1 class="entry-title  single-title-cs last">Services</h1>    
    </header>
    <div id="grid-container" class="services first-services">
		<?php $args = array('category_name'=>'asset-building','post_type' =>'post','posts_per_page'=> 2);
		query_posts( $args ); ?>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <?php get_template_part('content', 'services'); ?>
            <?php endwhile; ?>        
        <?php else : ?>
            <?php get_template_part('content', 'none'); ?>
        <?php endif; ?>
        <?php   $idObj = get_category_by_slug('asset-building');  ?>

        <article  class="grid post servises-gird">
            <h3 class="title-services"> <a href="<?php echo get_category_link($idObj->term_id);?>"><?php echo $idObj->name; ?></a></h3>
            <p class="description-services"><?php echo $idObj->description; ?></p>
            <a class="view-services" href="<?php echo get_category_link($idObj->term_id);?>">View more >></a>
        </aricle>
    </div>
    <div id="grid-container" class="services">
        <?php $args = array('category_name'=>'concept-art','post_type' =>'post','posts_per_page'=> 2);
        query_posts( $args ); ?>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <?php get_template_part('content', 'services'); ?>
            <?php endwhile; ?>        
        <?php else : ?>
            <?php get_template_part('content', 'none'); ?>
        <?php endif; ?>
        <?php   $idObj = get_category_by_slug('concept-art');  ?>
        <article  class="grid post servises-gird">
            <h3 class="title-services"> <a href="<?php echo get_category_link($idObj->term_id);?>"><?php echo $idObj->name; ?></a></h3>
            <p class="description-services"><?php echo $idObj->description; ?></p>
            <a class="view-services" href="<?php echo get_category_link($idObj->term_id);?>">View more >></a>
        </aricle>
    </div>

        <div id="grid-container" class="services">
        <?php $args = array('category_name'=>'vfx-animation','post_type' =>'post','posts_per_page'=> 2);
        query_posts( $args ); ?>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <?php get_template_part('content', 'services'); ?>
            <?php endwhile; ?>        
        <?php else : ?>
            <?php get_template_part('content', 'none'); ?>
        <?php endif; ?>
        <?php   $idObj = get_category_by_slug('vfx-animation');  ?>
        <article  class="grid post servises-gird">
            <h3 class="title-services"> <a href="<?php echo get_category_link($idObj->term_id);?>"><?php echo $idObj->name; ?></a></h3>
            <p class="description-services"><?php echo $idObj->description; ?></p>
            <a class="view-services" href="<?php echo get_category_link($idObj->term_id);?>">View more >></a>
        </aricle>
    </div>
            <div id="grid-container" class="services">
        <?php $args = array('category_name'=>'other-work','post_type' =>'post','posts_per_page'=> 2);
        query_posts( $args ); ?>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <?php get_template_part('content', 'services'); ?>
            <?php endwhile; ?>        
        <?php else : ?>
            <?php get_template_part('content', 'none'); ?>
        <?php endif; ?>
        <?php   $idObj = get_category_by_slug('other-work');  ?>
        <article  class="grid post servises-gird">
            <h3 class="title-services"> <a href="<?php echo get_category_link($idObj->term_id);?>"><?php echo $idObj->name; ?></a></h3>
            <p class="description-services"><?php echo $idObj->description; ?></p>
            <a class="view-services" href="<?php echo get_category_link($idObj->term_id);?>">View more >></a>
        </aricle>
    </div>
</div>
<?php get_footer(); ?>