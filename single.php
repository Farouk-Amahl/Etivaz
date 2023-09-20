<?php
get_header();
?>
<div class="etivaz-corps">
	<div class="etivaz-separateur"></div>
	<div class="etivaz-wrap-bloc"><!--
	<?php
		if(have_posts()){
			while(have_posts()){ the_post();
				get_template_part('template-parts/content', 'article');
			}
		}
// mettre un condition pour avoir autre chose en cas d'absence d'histoire
$catdefauts = get_the_category();
$catdefaut = $catdefauts[0];
foreach($catdefauts as $i => $category)
{
    if($category->parent == $catdefaut->cat_ID)
    {
        $catdefaut = $category;
    }
}
$catdefaut = $catdefaut->term_id;
$args = array('cat' => $catdefaut, 'order' => 'rand', 'posts_per_page' => 1 );
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();

// get_template_part('template-parts/content', 'apropos');
// get_template_part('template-parts/content', 'fromagedujour');
	get_template_part('template-parts/content', 'defaut', array( 'defaut' => $catdefaut));

endwhile;
wp_reset_postdata();
?>
	--></div><!--etivaz-wrap-bloc-->
	<div class="etivaz-separateur"></div>

	<section class="etivaz-section">
		<header>
			<?php // ici rendre ça dynamique ?>
			<h2><?php echo pll__('Autres produits de la même catégorie : '); ?></h2>
		</header>
		<div class="etivaz-separateur"></div>
		<div class="etivaz-wrap-bloc"><!--
	<?php
// produits liés
$camembert = '';
$etiquettes = get_the_tags( get_the_ID() );
echo "dookie";
print_r($etiquettes);
if($etiquettes){
	foreach($etiquettes as $etiquette){
		$nom = $etiquette->slug;
		if(substr($nom, 0, 7) == 'fromage'){
			$camembert = strtr($nom, "àäåâôöîïûüéè", "aaaaooiiuuee") ;
			// $camembert = str_replace(' ', '-', $camembert) ;
		}
	}
}else{
	$camembert = 'AOP';
}
// echo $camembert;
if($camembert) {
	$args = array('post__not_in' => array (get_the_ID()), 'tag_slug__in'=> array($camembert), 'orderby' => 'rand', 'posts_per_page' => 10);
	$the_query = new WP_Query( $args );
	while ( $the_query->have_posts() ) : $the_query->the_post();
	get_template_part('template-parts/content', 'un');
	endwhile;
	wp_reset_postdata();
}
	?>
	--></div><!--etivaz-wrap-bloc-->
	</section>

</div>

<?php
get_footer();
?>
