<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="google-site-verification" content="uS7RBntK_Dws-QZFM0tokN4DQqS4sWBWJ9_TAgPFr78" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="home-header">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo bloginfo('template_directory')?>/images/logo.png" alt="logo"/></a></h1>
			
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		
	</header><!-- #masthead -->
		<div id="sub-menu-custom">
		<?php submenupageprduct();?>
		</div>
		<div id="slider">

 <?php if(is_page(8) || $post->post_parent ==8){
	 if (  is_active_sidebar( 'sidebar-6' ) ) : 
		echo('<div id="menu-cus-johnny">');
			 dynamic_sidebar( 'sidebar-6' ); 
		echo('</div>');
		
 endif; }

 
 ?>
<?php if(is_page(505)){
echo('<div id="map-google">');
echo do_shortcode('[easy2map id="1"]');
echo('</div>');

}
?>

</div>

	<?php if(is_page(74)){?>	
	<div id="slider-header"><?php echo do_shortcode("[metaslider id=33]"); ?></div>	
	<?php get_sidebar('home2');?>
	<div id="sidebar-custom">
	<div id="sidabar-left"><?php include (ABSPATH . '/wp-content/plugins/wp-featured-content-slider/content-slider.php');?></div>
	<?php get_sidebar('home');?></div>
	<?php }	else	?>
	
</div>
<div id="page" class="hfeed site">
	<div id="main" class="wrapper">