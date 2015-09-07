<?php
/**
 * @package gridz
 */
?>
<header class="entry-header">
    <h1 class="entry-title single-title-cs last">Project</h1>    
</header>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div id="slider" class="flexslider">
      <ul class="slides">
        <?php 
          for($i=1;$i<=10;$i++){
              if( get_field('image-'.$i) ):
               
                echo '<li class="carousel-johnny" style="height:530px;background-image:url('.get_field('image-'.$i).')">';
                echo  '</li>';
              endif;
            }
          for($j=11;$j<=15;$j++){
              if( get_field('images-'.$j) ):
                $uda= substr(get_field('images-'.$j), -11, 11);
                echo '<li class="carousel-johnny" style="height:530px;background-color:#000">';
                echo '<iframe style="display:block;margin:0 auto;" width="940" height="530" src="//www.youtube.com/embed/'. $uda.'" frameborder="0" allowfullscreen></iframe>';
                echo  '</li>';
              endif;
            }  
        ?>

        
      </ul>
    </div>  
    <div id="carousel" class="flexslider">
      <ul class="slides">
         <?php 
            for($i=1;$i<=20;$i++){
              if( get_field('image-'.$i) ):
                echo '<li class="carousel-johnny" style="height:130px;background-image:url('.get_field('image-'.$i).')">';
                //echo '<img src="'.get_field('image-'.$i).'" alt="'.get_the_title().'" />';
                echo  '</li>';
              endif;
            }
             for($j=11;$j<=15;$j++){
              if( get_field('images-'.$j) ):
                $uda= substr(get_field('images-'.$j), -11, 11);
                $back='http://img.youtube.com/vi/'.$uda.'/0.jpg';
                echo '<li class="carousel-johnny" style="height:130px;background-image:url('.$back.')">';
                echo  '</li>';
              endif;
            }  
        ?>
        <!-- items mirrored twice, total of 12 -->
      </ul>
    </div>
    <header class="entry-header">
     
        <?php
            if(is_single() || is_page()): the_title('<h1 class="entry-title single-title">', '</h1>');
            else: the_title('<h1 class="entry-title"><a href="'.esc_url(get_permalink()).'" rel="bookmark">', '</a></h1>');
            endif;
        ?>

    </header>
    <div class="entry-content">
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