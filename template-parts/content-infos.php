<div class="etivaz-infos"><!--
	--><div class="etivaz-ou etivaz-bloc-info">
		<h2><?php echo pll__('Adresse'); ?></h2>
<?php if(is_page( 'obchod-v-lucerne' ) || is_page( 'magasin-lucerna' )){ ?>
		<p>FranSyr</p>
		<p>Vodičkova 701/34</p>
		<p>PRAHA 110 00</p>
		<p>tel: +420 774 966 737</p>
<?php } elseif (is_page( 'obchod-na-letne' ) || is_page( 'magasin-de-letna' )){ ?>
		<p>FranSyr</p>
		<p>M. Horákové 27</p>
		<p>170 00 Praha 7-Holešovice</p>
		<p>tel: +420 608 945 640</p>
<?php } ?>
	</div><!--
	--><div class="etivaz-infos-carte">
<?php if(is_page( 'obchod-v-lucerne' ) || is_page( 'magasin-lucerna' )){ ?>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d640.0736889132677!2d14.425225950470379!3d50.080768033778426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x31c96dddbe1631cf!2zRnJhbnPDvXI!5e0!3m2!1scs!2scz!4v1604068785350!5m2!1scs!2scz" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<?php } elseif (is_page( 'obchod-na-letne' ) || is_page( 'magasin-de-letna' )){ ?>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2559.2968403940604!2d14.427079615577913!3d50.09945062047488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b95e149396209%3A0x368d69ae279a5afc!2zRnJhbnPDvXIgLSBzw71yw6FybmE!5e0!3m2!1scs!2scz!4v1646922305659!5m2!1scs!2scz" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<?php } ?>
	</div><!--
	--><div class="etivaz-quand etivaz-bloc-info">
		<h2><?php echo pll__('Horaires'); ?></h2>
<?php if(is_page( 'obchod-v-lucerne' ) || is_page( 'magasin-lucerna' )){ ?>
		<!--<h3><?php echo pll__('magasin'); ?></h3>-->
		<p><span><?php echo pll_e('lundi')?>-<?php echo pll_e('vendredi')?> :</span><span>10h - 20h</span></p>
		<p><span><?php echo pll_e('samedi')?> :</span><span>10h - 19h</span></p>
		<!--<h3><?php echo pll__('bistrot'); ?></h3>
		<p><span><?php echo pll_e('lundi')?>-<?php echo pll_e('vendredi')?> :</span><span>11h - 20h</span></p>
		<p><span><?php echo pll_e('samedi')?> :</span><span>10h - 19h</span></p>-->
		<p><span><?php echo pll_e('dimanche')?> :</span><span><?php echo pll__('fermé'); ?></span></p>
<?php } elseif (is_page( 'obchod-na-letne' ) || is_page( 'magasin-de-letna' )){ ?>
		<!--<h3><?php echo pll__('magasin'); ?></h3>-->
		<p><span><?php echo pll_e('lundi')?>, <?php echo pll_e('mardi')?>, <?php echo pll_e('samedi')?> :</span><span>10h - 19h</span></p>
		<!--<h3><?php echo pll__('bistrot'); ?></h3>-->
		<p><span><?php echo pll_e('mercredi')?>-<?php echo pll_e('vendredi')?> :</span><span>10h - 21h</span></p>
		<p><span><?php echo pll_e('dimanche')?> :</span><span><?php echo pll__('fermé'); ?></span></p>
<?php } ?>
	</div><!--
--></div>
