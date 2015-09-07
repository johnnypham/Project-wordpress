<?php
/**
 * @package gridz
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php
            if(is_single() || is_page()): the_title('<h1 class="entry-title single-title single-title-cs-2">', '</h1>');
            else: the_title('<h1 class="entry-title single-title-cs-2"><a href="'.esc_url(get_permalink()).'" rel="bookmark">', '</a></h1>');
            endif;
        ?>
    <header class="entry-header left-blog">
        <?php 
			if(is_single() || is_page())
				gridz_featured_image("full",false);
			else
				gridz_featured_image("full");
		?>
      

    </header>
    <div class="entry-content right-blog">
        <?php if(is_single() || is_page()): ?>
            <?php the_content(__('Read more', 'gridz')); ?>
            <?php wp_link_pages(array('before' => '<div class="page-link">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
        <?php else: ?>
            <?php the_excerpt(); ?>
        <?php endif; ?>
    </div>



</article>
<?php if(is_single()): ?>
    <?php gridz_post_nav(); ?>
<?php endif; ?>