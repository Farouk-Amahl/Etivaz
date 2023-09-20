<?php // print_r($args);
	$pointee = get_category($args['defaut']);
	// print_r($pointee);
?>

<a href="<?php echo site_url(); ?>/<?php echo pll__('nos-fromages'); ?>?cat=<?php echo $pointee->slug ?>" class="etivaz-wrap-etiquette">
	<div class="etivaz-produit">
		<div class="etivaz-image etivaz-transition" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'large'); ?>)" >
		</div>
	</div>
	<header class="etivaz-etiquette-texte etivaz-transition">
		<h2 class="etivaz-titre-etiquette" ><?php echo $pointee->cat_name; ?></h2>
		<?php echo $pointee->description; ?>
	</header>
</a>
