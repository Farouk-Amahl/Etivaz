<?php
/**
 * Template Name: Étivaz Sort
 * Template Post Type: post, page
 *
 *
 */
global $post;
$pageSlug = $post->post_name;
$sousCat = false;
if(isset($_GET['cat'])){
	$cat = $_GET['cat'];
	$sousCat = true;
}else{
	$cat = explode("-", $pageSlug );
	$cat = $cat[1];
}
// echo $cat;

$catNum = get_category_by_slug($cat);
if($catNum){
	$catNum = $catNum->term_id;
}
get_header();
?>

<div class="etivaz-corps">

	<section class="etivaz-section">

<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
		the_post();
		get_template_part('template-parts/content', 'titre');
		}
	}
include("./wp-content/themes/Etivaz/template-parts/outil-de-tri.php");

?>
	</section>

	<div class="etivaz-separateur"></div>

	<div id="resultat-produits" class="etivaz-wrap-bloc"><!--
	<?php
if(is_single(['Naše další produkty', 'Nos autres produits'])){
	echo 'nos-autre-produits';
	$pasFromage = get_cat_ID( pll__('fromages') );
	$produits = get_cat_ID( pll__('produits') );
	$test =  "'-".$pasFromage.",".$produits."'";
	$args = array('cat' => $test, 'posts_per_page' => -1, 'order' => 'rand' );
}else{
	$args = array('cat' => $catNum, 'posts_per_page' => -1, 'orderby' => 'title', 'order'   => 'ASC', );
}

$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();

get_template_part('template-parts/content', 'etiquette2');

endwhile;
wp_reset_postdata();
?>
	--></div>

</div>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
