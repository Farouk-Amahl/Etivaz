<?php
// tableau des données du produit
$donGlobal = [];
// données des étiquettes
$donCom  = get_the_tags(get_the_ID());
foreach($donCom as $don){
	// print_r($don);
	$tab = explode(' * ', $don->name);
	if(sizeof($tab) == 2){
		$donGlobal[$tab[0]] = $tab[1];
	}
}
// données des champs supplémentairs
$donInd = get_post_meta(get_the_ID());
foreach($donInd as $don => $d){
	$donGlobal[$don] = $d[0];
}

?>
--><div class="etivaz-article etivaz-deux">
	<div class="etivaz-article-texte">
		<header class="">
			<h1 class=""><?php the_title(); ?></h1>
		</header>
		<article class="">
	<?php the_content(); ?>
			<div class="etivaz-tableau-donnees">
	<?php
		if(has_category(pll__('produits'))){
			
			if(has_category(pll__('fromages'))){
				// fromage : régions, pâte, croûte, lait, affinage, matière grasse
				$dons = ['région', 'pâte', 'croûte', 'lait', 'affinage', 'matière grasse'];
				foreach($dons as $don){ echo "<div class='etivaz-cellule-autres'><div class='etivaz-cellule-haut'>".pll__($don)." :</div><div class='etivaz-cellule-bas'>".@$donGlobal[$don]."</div></div>"; }
				
			}
			if(has_category(pll__('vins'))){
				// vin : régions
				
				
			}
			
		}
// print_r($donCom);
// print_r($donGlobal);
	?>
			</div><!--etivaz-tableau-donnees-->
		</article>
		<footer class="">
		</footer>
	</div><!--
	--><div class="etivaz-article-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'large'); ?>)" >
<?php
if(has_category(pll__('produits'))){
	// ici if AOP, macaron AOP 
	$lesImages = wp_upload_dir();
	if(has_tag(pll__('AOP'))){
		echo "<div class='etivaz-cellule-aop'><img src='".$lesImages["baseurl"]."/2020/10/AOP.png' /></div>";
	}
	// il a un prix et un conditionnement
	// echo "<div class='etivaz-cellule-prix'>";
	// echo "<span class='prix'>".$donGlobal['prix'].",-</span>/";
	// if(@$donGlobal['cond']=='unité'){ echo pll__('pièce'); }else{ echo '100g'; }
	// echo "</div>";
}
?>
	</div>
</div><!--