<?php
get_header();
// slider
get_template_part('modules/slider', '');
?>
<div class="etivaz-corps">
<?php 
// message informatif
global $wpdb;
$query = "SELECT * FROM `syr_message` WHERE `id` = 1";
$donneeMessage = $wpdb->get_row($query);
// print_r($donneeMessage);
	switch(get_locale()){
		case 'fr_FR':
		$message = $donneeMessage->fr;
		break;
		case 'cs_CZ':
		$message = $donneeMessage->cz;
		break;
		default:
		print_r(get_locale());
	} 
	$messageSpecial = true;
	if(strtotime("now") < strtotime($donneeMessage->debut)){
		$messageSpecial = false;
	}
	if(strtotime("now") > strtotime($donneeMessage->fin)){
		$messageSpecial = false;
	}

if($messageSpecial){ 
	
?>

<span id="messageSpecial">
	<!--<img src="wp-content/themes/Etivaz/assets/images/annonceNoel.jpg" style="width:100%">-->
	<div id="rondMessage"><span></span></div>
	<span id="BlancMessageSpecial"></span>
	<div class="bordures">
		<?php echo $message; ?>
	</div>
<?php 
// fin message informatif
} 
?>


</span>
	<div class="etivaz-separateur"></div>


<?php 
// naše podzimní akce
?>
	<div class="etivaz-separateur"></div>
	<section class="etivaz-section">
	<header>
		<h1>Naše podzimní akce</h1>
	</header>
	<div class="etivaz-separateur"></div>	
<style>
.podzimniAkceBloc {
	display: flex;
	width: 100%;
	color: black;
}

.podzimniAkceBloc > div {
	flex: 1;
  border: 1px solid rgb(227, 217, 195);
  padding: 1em;
}

.podzimniAkceBloc > div > div {
  background-color: #fff;
  box-shadow: 0px 0px 4px 3px #cdc3b863;
  padding: 1em;
  min-height: 250px;
}

@media only screen and (max-width: 600px) {
	.podzimniAkceBloc {
		flex-direction: column;
	}
  .podzimniAkceBloc > div {
		flex: 100%;
  }
}
</style>
<div class="etivaz-wrap-bloc podzimniAkceBloc">
	<div>
		<div>
			<h2>20/09 - Párování sýrů a vína (Letná)</h2>
			<p>Naučíme vás, jak ke každému vínu najít dokonale padnoucí sýr. Těšit se můžete na přednášku, 9 druhů sýrů a 6 druhů vín. Z důvodu omezeného počtu míst je nutná rezervace.</p>
		</div>
	</div>
	<div>
		<div>
			<h2>04/10 - Degustace červených vín a párování se sýry (Letná)</h2>
			<p>Párování červených vín se sýry je tak trochu alchymie. Když ale víte, jak na to, jen stěží najdete lepší kombinaci pro podzimní nebo zimní večer. Z důvodu omezeného počtu míst je nutná rezervace.</p>
		</div>
	</div>
	<div>
		<div>
			<h2>18/10 - Párování sýrů a vína (Lucerna)</h2>
			<p>Naučíme vás, jak ke každému vínu najít dokonale padnoucí sýr. Těšit se můžete na přednášku, 9 druhů sýrů a 6 druhů vín. Z důvodu omezeného počtu míst je nutná rezervace.</p>
		</div>
	</div>
</div>
<div class="etivaz-wrap-bloc podzimniAkceBloc">
<div>
	<div>
		<h2>21/10 - 10 LET S VÁMI (Lucerna)</h2>
		<p>Naše sýrarna v Lucerně má 10. narozeniny, za což vděčíme naší i vaší vášni pro francouzské sýry. Přijďte si pro slevu 10% na cokoli a přidejte se k celodennímu mejdanu v pasáži Lucerna.</p>
	</div>
</div><!--
--><div>
	<div>
		<h2>01/11 - Raclette Party (Letná)</h2>
		<p>Přijďte se ohřát prvním raclettem sezóny. Těšit se můžete na all-you-can-eat raclette, brambory, francouzské nakládané okurčičky, salát s vinaigrette (prozradíme vám i recept na pravou francouzskou zálivku). Doporučujeme rezervaci předem.</p>
	</div>
</div><!--
--><div>
	<div>
		<h2>16/11 - Le Beaujolais Nouveau (Letná a Lucerna)</h2>
		<p>Le Beaujolais Nouveau est arrivé aneb mladé víno je konečně tady! Přijďte ochutnat letošní sklizeň, ať už jen samotné víno, nebo spolu se sýrovým talířem, francouzskými paštikami, šunkami a klobáskami. Doporučujeme rezervaci předem.</p>
	</div>
</div>
<div>
	<div>
		<h2>29/11 - Fondue Party (Letná)</h2>
		<p>Vyzkoušejte 3 různá fondue za jeden večer: tradiční švýcarské, savojské a moderní fúzi s překvapením. Těšit se můžete na all-you-can-eat 3 různá fondue a francouzská bageta. Z důvodu omezeného počtu míst je nutná rezervace.</p>
	</div>
</div><!--
--><div>
	<div>
		<h2>13/12 - Raclette Party (Letná)</h2>
		<p>Oslavte s námi mezinárodní den raclettu s autenticky připravenou, rozteklou voňavou pochoutkou. Těšit se můžete na all-you-can-eat raclette, brambory, francouzské nakládané okurčičky, salát s vinaigrette (prozradíme vám i recept na pravou francouzskou zálivku). Doporučujeme rezervaci předem.</p>
	</div>
</div><!--
--><div>
	<div>
		<h2>28/12 - Ústřice, foie gras, sváteční sýry a šampaňské. (Letná)</h2>
		<p>Mezi svátky si užijme společnou chvíli plnou lahodných pochoutek! Foie gras, ústřice a šampaňské nám přinesou radost a luxusní chvíle. Nechte nás vychutnat si tuto společenskou hostinu a vytvořit společné vzpomínky! Z důvodu omezeného počtu míst je nutná rezervace.</p>
	</div>
</div>
	</div>
	</section>
	<div class="etivaz-separateur"></div>
<?php 
// naše podzimní akce fin
?>
	<!--<div class="etivaz-wrap-bloc">
	<?php
	if(have_posts()){
		while(have_posts()){ the_post();
			// get_template_part('template-parts/content', 'article');
		}
	}
	// Rendez-vous
?>
	<div class="etivaz-article etivaz-un etivaz-bloc "><?php //echo do_shortcode('[cheesyevents]'); ?></div>
<?php
	
	// if ( is_active_sidebar( 'next-event-area' ) ) :
	// dynamic_sidebar( 'next-event-area' ); 
	// endif; 
	
	// $args = array('cat' => 158, 'orderby' => 'rand', 'posts_per_page' => 1 );
	
	// recherche de tous les évènements
	// $cat_even = get_cat_ID ('Manifestations');
	// echo $cat_even;
	// $args = array('cat' => $cat_even, 'posts_per_page' => 100 );
	// $EvenProchain = ''; 
	// $listEven = [];
	// $the_query = new WP_Query( $args );
	// while ( $the_query->have_posts() ) : $the_query->the_post();
		// $event_date = get_post_meta(get_the_ID());
		// foreach($event_date as $event_donnee => $values) {
			// foreach($values as $value => $val){
				// $even[$event_donnee] = $val;
			// }
		// }
		// $listEven[strtotime($even['date_debut'])] = get_the_ID();
	// endwhile;
	// wp_reset_postdata();
	// ksort($listEven);
	// print_r($listEven);
	// echo pll_current_language();
	// tri du prochain
	// foreach($listEven as $Even => $num){ 
		// if(time() < $Even){
			// $EvenProchain = $num;
			// break; 
		// }
	// }
	// echo 'ici'.$EvenProchain;
	// if( !$EvenProchain){  
		// $EvenProchain = 1291 ;
	// }
	
	// $args = array('p' => $EvenProchain, 'posts_per_page' => 1 );
	// $the_query = new WP_Query( $args );
	// while ( $the_query->have_posts() ) : $the_query->the_post();

		// get_template_part('template-parts/content', 'untiers', array( 'fermeture' => true, 'lien' => ''));
		// get_template_part('template-parts/content', 'even', array( 'fermeture' => false, 'lien' => '', 'link' => 'no-link'));

	// endwhile;
	wp_reset_postdata();
	?>
	</div><!--etivaz-wrap-bloc
	<div class="etivaz-separateur"></div>-->
	
	<?php // ici rendre ça dynamique ?>
	<section class="etivaz-section">
		<header>
			<h1><?php echo pll_e('Nos Fromages')?></h1>
		</header>
		<div class="etivaz-separateur"></div>
		<div class="etivaz-wrap-bloc"><!--
		<?php
		// ici changer pour des catégories
		$categoriePrincipale = pll__('fromages');
		// $categoriePrincipale = 'sýry';
		echo $categoriePrincipale;
		$cat = get_cat_ID ($categoriePrincipale);
		echo $cat;
		$SousCat = get_categories(array( 'parent' => $cat ));
		// print_r($SousCat);
		foreach($SousCat as $cat){
			$etiquette = $cat;
		?>
			--><div class="etivaz-etiquette etivaz-bloc">
				<a href="<?php echo pll_e('nos-fromages')?>?cat=<?php echo $etiquette->slug; ?>" class="etivaz-wrap-etiquette">
		<?php
		$args = array('cat'=> $etiquette->term_id, 'orderby' => 'rand', 'posts_per_page' => 1 );
		$the_query = new WP_Query( $args );
		while ( $the_query->have_posts() ) :
				$the_query->the_post();
			get_template_part('template-parts/content', 'etiquette');
		endwhile;
		wp_reset_postdata();
		?>
					<header class="etivaz-etiquette-texte etivaz-transition">
						<h2 class="etivaz-titre-etiquette" ><?php echo $etiquette->name; ?></h2>
						<p><?php echo $etiquette->description; ?></p>
					</header>
				</a>
			</div><!--
		<?php
		}
		?>
	--></div><!--etivaz-wrap-bloc-->
	</section>

	<div class="etivaz-separateur"></div>
	<?php // ici rendre ça dynamique ?>
	<section class="etivaz-section">
		<div class="etivaz-wrap-bloc"><!--
<?php
// Autres produits
$args = array('p' => 699, 'posts_per_page' => 1 );
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();

// get_template_part('template-parts/content', 'banniere');

endwhile;
wp_reset_postdata();
?>
		
<?php
// AOP
// ici passer un argument dans une boucle
$args = array('p' => 695, 'posts_per_page' => 1 );
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();

// get_template_part('template-parts/content', 'untiers', array( 'image' => 'hauteur'));
endwhile;
wp_reset_postdata();
?>
		--></div><!--etivaz-wrap-bloc-->
	</section>
	
<!--
	<div class="etivaz-separateur"></div>
	
	<section>
		Cathering
	</section>
-->
	
	
</div>

<?php
get_footer();
?>
	