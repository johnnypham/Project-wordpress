<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	
</div><!-- #page -->
<div id="bak-color">
<div class="site-info-1"></div>
</div>
<div id="colophon" role="contentinfo">
		<div class="site-info">
			<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
			<div id="footer-widget">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</div><!-- #secondary -->
			<?php endif; ?>
		</div><!-- .site-info -->
	</div><!-- #colophon -->
<?php wp_footer(); ?>
<script>

jQuery( document ).ready(function() {
		jQuery('.left #page-new-product-left a').hover(function(){
			jQuery('#title-new-page').addClass('show-title');
			//jQuery('#page-new-product-left').addClass('opaci');			
		},function(){
			jQuery('#title-new-page').removeClass('show-title');
			//jQuery('#page-new-product-left').removeClass('opaci');			
		})
		jQuery('.right #page-new-product a').hover(function(){
								jQuery(this).find('#title-new-page').addClass('show-title');
			},function(){				
				jQuery(this).find('#title-new-page').removeClass('show-title');
			});			
		
});


</script>
<div id="fb-root"></div>
<script>
jQuery(document).scroll(function(){
  jQuery.scoll=jQuery(document).scrollTop();
   if(jQuery.scoll >= 85){
	jQuery('.single #menu-cus-johnny').addClass('fixed');	
   }else{
	jQuery('.single #menu-cus-johnny').removeClass('fixed');	
   }
});
jQuery(document).scroll(function(){
  jQuery.scoll=jQuery(document).scrollTop();
   if(jQuery.scoll >= 235 ){	
	jQuery('#to-top').css('display','block');
   }else{	
	jQuery('#to-top').css('display','none');
   }
});
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>