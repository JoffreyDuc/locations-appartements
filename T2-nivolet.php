<?php ob_start(); ?>

<div class="row">
	<div id="divAppart" class="col l8 m8 s10 offset-l2 offset-m2 offset-s1 hide-on-small-only">
		<h1 id="titre" class="white-text center">T2 - Nivolet</h1>
	</div>

	<div class="col l4 m8 s12 offset-l4 offset-m2">
		<div class="owl-carousel">
			<div>
				<img src="images/T2-nivolet/nivolet-0.jpg">
			</div>
			<div>
				<img src="images/T2-nivolet/nivolet-1.jpg">
			</div>
			<div>
				<img src="images/T2-nivolet/nivolet-2.jpg">
			</div>
			<div>
				<img src="images/T2-nivolet/nivolet-0.jpg">
			</div>
			<div>
				<img src="images/T2-nivolet/nivolet-0.jpg">
			</div>
		</div>
	</div>

	<div class="col l6 m8 s12 offset-l3 offset-m2 white center description">
		<h5 class="grey-text text-darken-1">Appartement 2 pièces</h5>
		<br>
		<ul class="grey-text col l6">
			<li>Cuisine</li>
			<li>Cuisine</li>
			<li>Cuisine</li>
			<li>Cuisine</li>
		</ul>
		<ul class="grey-text col l6">
			<li>Cuisine</li>
			<li>Cuisine</li>
			<li>Cuisine</li>
			<li>Cuisine</li>
		</ul>
	</div>

</div>
<div class="parallax-container col s12 hide-on-med-and-up hauteur260">
	<div class="parallax"><img src="images/lac-du-bourget.jpg"></div>
</div>

<?php $contenu = ob_get_clean(); ?>
<?php require_once 'template.php'; ?>