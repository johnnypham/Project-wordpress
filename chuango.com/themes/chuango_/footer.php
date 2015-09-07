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

<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
		<div class="site-info">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		</div>
	<?php endif; ?>

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
</body>
</html>