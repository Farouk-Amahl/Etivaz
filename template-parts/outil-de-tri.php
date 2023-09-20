<?php
// ici autocomplete="off" pour firefox
// categorie liée à la page affiché
// produits
$surCategorie = get_cat_ID (pll__('produits'));
$args = array(
			'parent'         => $surCategorie,
			// 'child_of'      => $type, 
		); 
$produits = get_categories( $args );
if($sousCat){
	$truc = get_category_by_slug($cat);
	// print_r($truc);
	$catParent = $truc->parent;
	$catParent = get_category($catParent);
	$produitsActuel = $catParent->slug;
}else{
	$produitsActuel = $cat;
}
?>
<div class="etivaz-tri">
	<!--<span>Tri</span>-->
	<select id="produits-types" class="etivaz-select-outil-tri" autocomplete="off">
		<option>tous nos produits</option>
<?php
	foreach($produits as $produit){
		echo '<option value="'.$produit->slug.'" ';
		if( $produit->slug == $produitsActuel ){
			echo " selected='selected' "; 
			$type = $produit->name;
		}
		echo '>'.$produit->name.'</option>';
	}
?>
	</select>
	<select id="produits-categories" class="etivaz-select-outil-tri" autocomplete="off">
		<option>toutes catégories</option>
<?php
	$type = get_category_id($type);
	
	$args = array(
		'parent'         => $type,
		// 'child_of'      => $type, 
	); 

	$terms = get_categories( $args );
	
	foreach($terms as $term){
		$list_tems[$term->slug] = $term->name;
		echo "<option value='".$term->slug."' ";
		if( $term->slug == $cat ){ echo " selected='selected' "; }
		echo " >".$term->name."</option>";
	}
?>
	</select>
	<input type="button" id="produits-validation" value="<?php echo pll__("Recherche"); ?>" id="envoiRecherche" class="etivaz-transition"></input>
	
<script>
	$("#produits-types").on("change", function(){
		$('#produits-categories').load('<?php echo get_site_url(); ?>/wp-content/themes/Etivaz/template-parts/options-categories.php?type='+$(this).val(), function(msg){
			console.log(msg)
		});
	});
	$("#produits-categories").on("change", function(){
		// console.log($(this).val());
		$('#resultat-produits').load('<?php echo get_site_url(); ?>/wp-content/themes/Etivaz/template-parts/options-categories2.php?type='+$(this).val(),  function(msg){
			console.log(msg)
		});
	});
	$("#produits-validation").on("click", function(){
		console.log($("#produits-types").val()+' '+$("#produits-categories").val());
		$('#resultat-produits').load('<?php echo get_site_url(); ?>/wp-content/themes/Etivaz/template-parts/options-categories2.php?cat='+$("#produits-types").val()+'&type='+$("#produits-categories").val(),  function(msg){
			console.log(msg);/*ici, charger les produits concerné dans options-categories2*/
		});
		console.log("clicked");
	});
</script>
</div>