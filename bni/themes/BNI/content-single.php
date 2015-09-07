<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h3 id="tilte-categories">Mạng lưới Everest Chapter</h3>
		<div id="list-categories" class="left-cate">

			<?php 
			$id = get_the_id();
    $terms = get_the_terms( $id, 'category' );
    // print_r( $terms );

    foreach($terms as $term) {
			$cat123=$term->cat_ID;
		 }
			


$args = array('child_of' => 3,'taxonomy' => 'category');
$categories = get_categories( $args );	
foreach($categories as $cat){
	$ca= $cat->term_id;
	if($cat123 == $ca)
	

	echo '<li class="cat-item current-cat"><a href="'.get_category_link( $cat->term_id ).'">'. $cat->name.'</a></li>';
	else
	echo '<li class="cat-item"><a href="'.get_category_link( $cat->term_id ).'">'. $cat->name.'</a></li>';

}	

			$idObj = get_category_by_slug('mang-luoi'); 
			$id = $idObj->term_id;
			
			?>
		</div>
		
		<div class="right-cate">
		<div id="single-cate">
		<h3 class="archive-title"><?php printf( __( 'Powerteam %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
				
			<div id="left-cat-custom"> 
				<div id="image-ceo"><img src="<?php the_field('image_ceo');?>" alt="Image CEO"/></div>
				<h3><?php the_field('name');?></h3>
				<p><?php the_field('chuc_vu');?></p>
				<p><?php the_field('ph');?></p>
				<p><?php the_field('mail');?></p>
				<p><?php the_field('website');?></p>
				
			</div>
			<div id="right-cat-custom"> 				
				<div id="image-company"><img src="<?php the_field('logo_company');?>" alt="Image Company"/></div>
				<h3><?php the_title();?></h3>
				<div id="soluoc"><?php the_excerpt();?>					
				</div>
				
			</div>
			<div id="content-custom-single">
					<?php the_content();?>
				</div>
			</div>
		</div>
		
		

		
	</article><!-- #post -->
