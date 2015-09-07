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
<div id="color-custom"></div>
<div  id="colophon" role="contentinfo">
<div id="footer-all">
<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
<div class="footer-1">
<?php dynamic_sidebar( 'sidebar-4' ); ?>
</div>
<?php endif; ?>
<?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
<div class="footer-2">
<?php dynamic_sidebar( 'sidebar-8' ); ?>
</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?>
<div class="footer-3">
<?php dynamic_sidebar( 'sidebar-10' ); ?>
</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar-11' ) ) : ?>
<div class="footer-4">
<?php dynamic_sidebar( 'sidebar-11' ); ?>
</div>
<?php endif; ?>
</div>

</div><!-- #colophon -->
<?php wp_footer(); ?>

<script>
var myVar=setInterval(function(){myTimer()},1000);

function myTimer()
{
var d=new Date();
var t=d.toLocaleTimeString();
document.getElementById("time-2").innerHTML=t;
}
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o) ,
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-24919070-2', 'rambo.com.vn');
  ga('send', 'pageview');

</script>
</body>
</html>