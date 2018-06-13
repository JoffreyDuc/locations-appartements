<?php ob_start(); ?>

<div class="row withoutMarginBot">
	<div id="divTitre" class="col l8 m8 s10 offset-l2 offset-m2 offset-s1 hide-on-small-only">
		<h1 id="titre" class="white-text center">Liste des appartements</h1>
	</div>

	<div id="divTitreSmall" class="parallax-container hide-on-med-and-up valign-wrapper">
		<div class="col s10 offset-s1">
			<h3 id="titreSmall" class="white-text center">Liste des appartements</h3>
		</div>
		<div class="parallax"><img src="images/Lac_du_Bourget_et_le_Revard.min.jpg"></div>
	</div>

	<div class="container">
		<div class="col l4 m6 s12">
			<div class="card hoverable">
				<div class="card-image">
					<img src="images/T4-dentduchat-chambre.jpg">
					<span class="card-title">T4 "Dent-du-chat"</span>
				</div>
				<div class="card-content">
					<p>Cet appartement est un T4, il y a 3 chambre et est spacieux.<br>
					Encore plus de description.</p>
				</div>
				<div class="card-action">
					<a href="#" class="btn-flat orange-text waves-effect">Plus d'infos</a>
				</div>
			</div>
		</div>
		<div class="col l4 m6 s12">
			<div class="card hoverable">
				<div class="card-image">
					<img src="images/T4-dentduchat-chambre.jpg">
					<span class="card-title">T4 "Dent-du-chat"</span>
				</div>
				<div class="card-content">
					<p>Cet appartement est un T4, il y a 3 chambre et est spacieux.<br>
					Encore plus de description.</p>
				</div>
				<div class="card-action">
					<a href="#" class="btn-flat orange-text waves-effect">Plus d'infos</a>
				</div>
			</div>
		</div>
		<div class="col l4 m6 s12">
			<div class="card hoverable">
				<div class="card-image">
					<img src="images/T4-dentduchat-chambre.jpg">
					<span class="card-title">T4 "Dent-du-chat"</span>
				</div>
				<div class="card-content">
					<p>Cet appartement est un T4, il y a 3 chambre et est spacieux.<br>
					Encore plus de description.</p>
				</div>
				<div class="card-action">
					<a href="#" class="btn-flat orange-text waves-effect">Plus d'infos</a>
				</div>
			</div>
		</div>
		<div class="col l4 m6 s12">
			<div class="card hoverable">
				<div class="card-image">
					<img src="images/T4-dentduchat-chambre.jpg">
					<span class="card-title">T4 "Dent-du-chat"</span>
				</div>
				<div class="card-content">
					<p>Cet appartement est un T4, il y a 3 chambre et est spacieux.<br>
					Encore plus de description.</p>
				</div>
				<div class="card-action">
					<a href="#" class="btn-flat orange-text waves-effect">Plus d'infos</a>
				</div>
			</div>
		</div>
		<div class="col l4 m6 s12">
			<div class="card hoverable">
				<div class="card-image">
					<img src="images/T4-dentduchat-chambre.jpg">
					<span class="card-title">T4 "Dent-du-chat"</span>
				</div>
				<div class="card-content">
					<p>Cet appartement est un T4, il y a 3 chambre et est spacieux.<br>
					Encore plus de description.</p>
				</div>
				<div class="card-action">
					<a href="#" class="btn-flat orange-text waves-effect">Plus d'infos</a>
				</div>
			</div>
		</div>
		<div class="col l4 m6 s12">
			<div class="card hoverable">
				<div class="card-image">
					<img src="images/T4-dentduchat-chambre.jpg">
					<span class="card-title">T4 "Dent-du-chat"</span>
				</div>
				<div class="card-content">
					<p>Cet appartement est un T4, il y a 3 chambre et est spacieux.<br>
					Encore plus de description.</p>
				</div>
				<div class="card-action">
					<a href="#" class="btn-flat orange-text waves-effect">Plus d'infos</a>
				</div>
			</div>
		</div>
	</div>

	

</div>

<div class="hide-on-small-only">
	<br><br><br><br>
</div>
<div class="parallax-container col s12 hide-on-med-and-up hauteur260">
	<div class="parallax"><img src="images/lac-du-bourget.jpg"></div>
</div>

<?php $contenu = ob_get_clean(); ?>
<?php require_once 'template.php'; ?>