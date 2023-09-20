--><div class="etivaz-article etivaz-un etivaz-bloc ">
<?php 
if(isset($args['image'])){ $tailleimage = $args['image']; }else{ $tailleimage = false; }
if(isset($args['fermeture'])){ $fermeture = $args['fermeture']; }else{ $fermeture = false; }
if(isset($args['lien'])){ $lien = $args['lien']; }else{ $lien = get_post_permalink(); }
if(isset($args['link'])){ $link = $args['link']; }else{ $link = 'normalLink'; }
if(is_front_page()){
	$event_titre = pll__("Prochain évènement");
	$event_texte = pll__("Vous trouverez ici toutes les informations sur nos prochaines manifestations.");
}else{
	$event_titre = the_title();
	$event_texte = the_excerpt(); ;
}
$event_donnees = get_post_meta(get_the_ID());
foreach($event_donnees as $event_donnee => $values) {
	foreach($values as $value => $val){
		$even[$event_donnee] = $val;
	}
}
?>
<a href="<?php echo $args['lien']; ?>" class="etivaz-wrap-etiquette <?php echo $link; ?>">
	<div class="etivaz-produit">
		<div class="etivaz-image etivaz-transition <?php echo $tailleimage; ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'large'); ?>)" >
			<div class='donnees-even'>
<?php echo '<span>'.get_the_title(get_the_ID()).'</span><br /><span>'.@$even['date_debut'].'</span><br /><span>'.@$even['heure_debut'].'-'.@$even['heure_fin'].'</span>'; ?>
			</div>
		</div>
	</div>
<?php
?>
	<header class="etivaz-etiquette-texte etivaz-transition">
		<h2 class="etivaz-titre-etiquette" ><?php echo $event_titre; ?></h2>
		<?php echo $event_texte; ?>
		
	</header>
	<?php 
	// if($args['fermeture']){ 
		// echo '<img src="http://localhost/nouvFransyr/wp-content/uploads/2020/11/marcheferme.png" style="position: absolute; top: 0; left: 0; width: 100%"/>'; 
	// } 
	?>
</a>
</div><!--