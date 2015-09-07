<?php
/**
 * @package gridz
 */
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title>
        <?php
            global $page, $paged, $gridz_options;
            wp_title();
        ?>
    </title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header id="header">
    <div  id="slider-hs" class="wrapper">
         <?php 
            if(is_home())
               // echo do_shortcode('[metaslider id=56]') ;
                //echo do_shortcode('[bxslider id="slider-1"]');
                echo do_shortcode('[wonderplugin_slider id="1"]')
            ?> 
     
    </div>

</header>
<?php if(is_home()){
echo '<nav id="navigation" class="home-page">';
 } else{ 
echo '<nav id="navigation" class="fixed">';
 } ?>

    <div class="wrapper">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php  gridz_site_logo(); ?></a>
        <div  class="site-social">
        <?php wp_nav_menu(array('theme_location' => 'primary','menu_class' => 'menu block-menu', 'container_class' => 'primary-menu clearfix')); ?>     
        </div>
       
</nav>
<?php gridz_responsive_menu(); ?>
    <div class="bread-page">
        <div class="wrapper">
            <div class="breadcrumbs wrapt">
                <div id="left-breadcrumds">
                      <?php if(function_exists('bcn_display')){
                         bcn_display();}?>
                </div>
                <div id="right-breadcrumds">
                   Latest News: <a href="<?php echo get_page_link(14);?>"/> <?php newshome();?></a>
                </div>
            </div>
        </div>
    </div>

<div id="content"<?php gridz_content_class(); ?>>
   