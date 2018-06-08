<?php ob_start(); ?>

<div id="contenu" class="row">
	<div id="divTitre" class="col l8 m8 s10 offset-l2 offset-m2 offset-s1">
		<h6 id="nom" class="white-text center">Pierre REVEL</h6>
		<h1 id="titre" class="white-text center hide-on-small-only">Appartements à louer sur le Bourget-du-Lac</h1>
		<h3 id="titreSmall" class="white-text center hide-on-med-and-up">Appartements à louer sur le Bourget-du-Lac</h3>
	</div>

	<div class="col l6 m8 s10 offset-l3 offset-m2 offset-s1 white center description">
		<h5 class="grey-text text-darken-1">Des appartements à proximité du lac</h5>
		<br>
		<p class="grey-text">
			Ils sont situés à 500 mètres du lac du Bourget facilement accessible à pied, à moins de 1km du centre du Bourget et à 5 minutes en voiture de Technolac.
		</p>
	</div>

	<div class="col l2 m8 s10 offset-l3 offset-m2 offset-s1 primary center description hauteur260">
		<h5 class="white-text">Les appartements</h5>
		<br>
		<hr width="50px">
	</div>
	<div id="divImageSalon" class="col l4 m8 s10 offset-m2 offset-s1 hauteur260"></div>

	<div id="divImageChambre" class="col l2 m8 s10 offset-l3 offset-m2 offset-s1 hauteur260"></div>
	<div class="col l4 m8 s10 offset-m2 offset-s1 white center description hauteur260">
		<p class="grey-text">Situés au Chemin des Bollons et à la route du Tunnel, je vous propose un T2, deux T3 et trois T4 tous modernes et meublés, avec un voisinage calme et agréable..</p>
		<br>
		<a class="btn-flat waves-effect primary-text" href="#">VOIR LES APPARTEMENTS<i class="material-icons right">chevron_right</i></a>
	</div>
</div>
<br><br><br><br>
<div class="row">
	<div id="divImageBourget" class="col l4 m8 s10 offset-l3 offset-m2 offset-s1 hauteur260"></div>
	<div class="col l2 m8 s10 offset-m2 offset-s1 primary center description hauteur260">
		<h5 class="white-text">Location</h5>
		<br>
		<hr width="50px">
	</div>

	<div class="col l6 m8 s10 offset-l3 offset-m2 offset-s1 white center description">
		<p class="grey-text">
			Informations générales sur la location? (collocation possible, étudiants seulement, droits aux animaux de companie, etc).
		</p>
		<br>
		<a class="btn-flat waves-effect primary-text" href="#">VOIR SUR LA CARTE</a>
	</div>

	<div id="about" class="col l6 m8 s10 offset-l3 offset-m2 offset-s1 primary white-text center">
		<h5><img src="images/avatar.png" height="50px"> À propos de moi</h5>
		<br>
		<hr width="50px"><br>
		<p align="justify">
			Je m'appelle Pierre REVEL et je suis propriétaire de 6 appartements à louer sur le Bourget-du-Lac. Ils peuvent être loués pour l'été de Juillet à Août, ou pour une année scolaire de Septembre à Juin.<br>
			Situés à 5 minutes du campus de l'université de Savoie Mont-Blanc et à 500 mètres du lac, ils raviront tous les étudiants!
		</p>
		<br>
		<a class="btn-flat waves-effect white-text" href="#">EN SAVOIR PLUS<i class="material-icons right">chevron_right</i></a>
	</div>
</div>

<br><br><br><br>

<?php $contenu = ob_get_clean(); ?>
<?php require_once 'template.php'; ?>