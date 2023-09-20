--><div class="etivaz-article etivaz-un etivaz-bloc ">
<?php 
if(isset($args['image'])){ $tailleimage = $args['image']; }else{ $tailleimage = false; }
if(isset($args['fermeture'])){ $fermeture = $args['fermeture']; }else{ $fermeture = false; }
if(isset($args['lien'])){ $lien = $args['lien']; }else{ $lien = get_post_permalink(); }
get_template_part('template-parts/content', 'bloc', array( 'image' => $tailleimage, 'fermeture' => $fermeture, 'lien' => $lien)); ?>
</div><!--