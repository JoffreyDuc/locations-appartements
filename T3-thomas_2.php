<?php ob_start(); ?>

<div class="row">
	<div id="divAppart" class="col l8 m8 s10 offset-l2 offset-m2 offset-s1 hide-on-small-only">
		<h1 id="titre" class="white-text center">T3 - Thomas 2</h1>
	</div>

	<div class="col l6 m8 s12 offset-l3 offset-m2 center" style="padding: 0;">
		<ul class="pgwSlideshow">
			<li><img src="images/T3-thomas_2/thomas_2-1.jpg"></li>
			<li><img src="images/T3-thomas_2/thomas_2-0.jpg"></li>
			<li><img src="images/T3-thomas_2/thomas_2-2.jpg"></li>
			<li><img src="images/T3-thomas_2/thomas_2-3.jpg"></li>
			<li><img src="images/T3-thomas_2/thomas_2-4.jpg"></li>
			<li><img src="images/T3-thomas_2/thomas_2-5.jpg"></li>
			<li><img src="images/T3-thomas_2/thomas_2-6.jpg"></li>
			<li><img src="images/T3-thomas_2/thomas_2-7.jpg"></li>
			<li><img src="images/T3-thomas_2/thomas_2-8.jpg"></li>
			<li><img src="images/T3-thomas_2/thomas_2-9.jpg"></li>
			<li><img src="images/T3-thomas_2/thomas_2-10.jpg"></li>
			<li><img src="images/T3-thomas_2/thomas_2-11.jpg"></li>
			<li><img src="images/T3-thomas_2/thomas_2-12.jpg"></li>
			<li><img src="images/T3-thomas_2/thomas_2-13.jpg"></li>
			<li><img src="images/T3-thomas_2/thomas_2-14.jpg"></li>
		</ul>
	</div>

	<!-- Description -->
	<div class="row">
		<div class="col l6 m8 s12 offset-l3 offset-m2 primary white-text center description">
			<h5 class="">Appartement meublé 3 pièces</h5>
			<br>
			<hr width="50px">
		</div>
		
		<div class="col l6 m8 s12 offset-l3 offset-m2 white descriptionWithoutTop withoutMarginBot">
			<div class="row center">
				<div class="col l4 m4 s4">
					<div class="icon-block">
						<h3 class="center primary-text"><i class="material-icons">aspect_ratio</i></h3>
						<h5 class="center">Surface</h5>
						<p>75m²</p>
					</div>
				</div>

				<div class="col l4 m4 s4">
					<div class="icon-block">
						<h3 class="center primary-text"><i class="material-icons small">hotel</i></h3>
						<h5 class="center">Chambres</h5>
						<p>2</p>
					</div>
				</div>

				<div class="col l4 m4 s4">
					<div class="icon-block">
						<h3 class="center primary-text"><i class="material-icons">euro_symbol</i></h3>
						<h5 class="center">Prix</h5>
						<p>385€ / par personne (CC)</p>
					</div>
				</div>
			</div>

			<div class="divider"></div>

			<div class="row">
				<div class="col l4 m4 s4 center">
					<h5>Description</h5>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					Appartement neuf conforme aux nouvelles normes thermiques et phoniques comportant :<br>
					<br>
					Une entrée avec un bar américain et 2 chaises.<br>
					Une cuisine intégrée avec :
					<div class="row ulStyle">
						<ul class="col s5 offset-s1">
							<li>Lave-vaisselle</li>
							<li>Congélateur</li>
							<li>Four</li>
							<li>Cafetière</li>
							<li>Vaisselle</li>
						</ul>
						<ul class="col s5 offset-s1">
							<li>Micro-ondes</li>
							<li>Frigo</li>
							<li>Plaques gaz avec hotte</li>
							<li>Chauffe-eau</li>
						</ul>
					</div>
					Un salon avec convertible en 140 CLIM / TV.<br>
					2 chambres avec lits de 140 rangements et bureaux.<br>
					Une SdB avec une douche hydro 125/90 LL lavabo avec meuble et glace.<br>
					WC sanybroyeur, un fer à repasser et planche.<br>
					Une cour extérieure avec table, chaises PVC et barbecue.
				</div>
			</div>

			<div class="divider"></div>

			<div class="row">
				<div class="col l4 m4 s4 center">
					<h5>Adresse</h5>
				</div>
			</div>
			<div class="row withoutMarginBot">
				<div class="col l12 m12 s12 center">
					385 ROUTE DU TUNNEL, 73370 LE-BOURGET-DU-LAC<br><br>
					<a class="btn-flat waves-effect primary-text" href="/contact.php#map">VOIR SUR LA CARTE<i class="material-icons right">chevron_right</i></a><br><br>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="parallax-container col s12 hide-on-med-and-up hauteur260">
	<div class="parallax"><img src="images/lac-du-bourget.jpg"></div>
</div>

<?php $contenu = ob_get_clean(); ?>
<?php require_once 'template.php'; ?>