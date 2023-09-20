<section class="etivaz-section">
	<header>
		<h1><?php the_title(); ?></h1>
	</header>
<?php
the_content();
?>
<div class="etivaz-wrap-bloc"><!--
<?php
global $post; 	
$categorie = $post->post_name;
if($categorie == "articles-de-presse" || $categorie == "tiskoveho-clanku" ){
	$args = array('category_name' => "articles-de-presse", 'posts_per_page' => 10 );
	$the_query = new WP_Query( $args );
	while ( $the_query->have_posts() ) : $the_query->the_post();

		get_template_part('template-parts/content', 'presse');

	endwhile;
	wp_reset_postdata();
}	
?>
--></div><!--etivaz-wrap-bloc-->

</section>