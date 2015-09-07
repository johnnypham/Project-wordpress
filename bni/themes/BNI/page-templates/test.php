<?php
/**
 * Template Name: Page-test
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
		if (is_user_logged_in()):?>

<form type="post" action="" id="newCustomerForm">

<label for="name">Name:</label>
<input name="name" type="text" />

<label for="email">Email:</label>
<input name="email" type="text" />

<label for="phone">Phone:</label>
<input name="phone" type="text" />

<label for="address">Address:</label>
<input name="address" type="text" />

<input type="hidden" name="action" value="addCustomer"/>
<input type="submit">
</form>
<br/><br/>
<div id="feedback"></div>
<br/><br/>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar('home'); ?>
<?php get_footer(); ?>