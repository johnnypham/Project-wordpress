<?php
/**
 * @package gridz
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class("grid"); ?>>
<?php $show_featured = false; $show_excerpt = false; ?>
<?php if(get_post_format() == "image"): ?>
    <?php $featured = trim(gridz_first_image()); if($featured == "") { $show_featured = true; $show_excerpt = true; } else echo $featured; ?>
<?php elseif(get_post_format() == "audio"): ?>
    <?php $featured = trim(gridz_post_audio()); if($featured == "") { $show_featured = true; $show_excerpt = true; } else echo $featured; ?>
<?php elseif(get_post_format() == "video"): ?>
    <?php $featured = trim(gridz_post_video()); if($featured == "") { $show_featured = true; $show_excerpt = true; } else echo $featured; ?>
<?php elseif(get_post_format() == "quote"): ?>
    <?php $featured = trim(gridz_post_quote()); if($featured == "") { $show_featured = true; $show_excerpt = true; } else echo $featured; ?>
<?php elseif(get_post_format() == "gallery"): ?>
    <?php $featured = trim(gridz_post_gallery("gridz-slider")); if($featured == "") { $show_featured = true; $show_excerpt = true; } else echo $featured; ?>
<?php else: ?>
    <?php $show_featured = true; $show_excerpt = true; ?>
<?php endif; ?>

        <header class="entry-header">
            <?php if($show_featured) //gridz_featured_image("full"); ?>
            <div class="cs-image-blog" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>')">
                
            </div>
            
            <?php
                if(is_single() || is_page()): the_title('<h1 class="entry-title">', '</h1>');
                else: the_title('<h1  id="tit" class=" entry-title"><a href="'.esc_url(get_permalink()).'" rel="bookmark">', '</a></h1>');
                endif;
            ?>
            <div class="entry-meta jh-none"><?php gridz_posted_on('M j, Y', '', __('','gridz')); ?></div>
        </header>

</article>