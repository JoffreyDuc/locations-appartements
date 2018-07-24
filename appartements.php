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
		<!-- T2 Nivolet -->
		<div class="col l4 m6 s12">
			<div class="card medium hoverable">
				<div class="card-image">
					<img src="images/T2-nivolet/nivolet-0.jpg">
					<span class="card-title">T2 "Nivolet"</span>
				</div>
				<div class="card-content">
					<p>Cet appartement est un T2.<br>
					Petite description.</p>
				</div>
				<div class="card-action">
					<a href="T2-nivolet.php" class="btn-flat orange-text waves-effect">Plus d'infos</a>
				</div>
			</div>
		</div>
		<!-- T3 Granier -->
		<div class="col l4 m6 s12">
			<div class="card medium hoverable">
				<div class="card-image">
					<img src="images/T3-granier/granier-0.jpg">
					<span class="card-title">T3 "Granier"</span>
				</div>
				<div class="card-content">
					<p>Cet appartement est un T3.<br>
					Petite description.</p>
				</div>
				<div class="card-action">
					<a href="T3-granier.php" class="btn-flat orange-text waves-effect">Plus d'infos</a>
				</div>
			</div>
		</div>
		<!-- T3 Thomas 2 -->
		<div class="col l4 m6 s12">
			<div class="card medium hoverable">
				<div class="card-image">
					<img src="images/T3-thomas_2/thomas_2-0.jpg">
					<span class="card-title">T3 "Thomas 2"</span>
				</div>
				<div class="card-content">
					<p>Cet appartement est un T3.<br>
					Petite description.</p>
				</div>
				<div class="card-action">
					<a href="T3-thomas_2.php" class="btn-flat orange-text waves-effect">Plus d'infos</a>
				</div>
			</div>
		</div>
		<!-- T4 Belledonnes -->
		<div class="col l4 m6 s12">
			<div class="card medium hoverable">
				<div class="card-image">
					<img src="images/T4-belledonnes/belledonnes-0.jpg">
					<span class="card-title">T4 "Belledonnes"</span>
				</div>
				<div class="card-content">
					<p>Cet appartement est un T4.<br>
					Petite description.</p>
				</div>
				<div class="card-action">
					<a href="T4-belledonnes.php" class="btn-flat orange-text waves-effect">Plus d'infos</a>
				</div>
			</div>
		</div>
		<!-- T4 Dent-du-chat -->
		<div class="col l4 m6 s12">
			<div class="card medium hoverable">
				<div class="card-image">
					<img src="images/T4-dent_du_chat/dent_du_chat-0.jpg">
					<span class="card-title">T4 "Dent-du-chat"</span>
				</div>
				<div class="card-content">
					<p>Cet appartement est un T4.<br>
					Petite description.</p>
				</div>
				<div class="card-action">
					<a href="T4-dent_du_chat.php" class="btn-flat orange-text waves-effect">Plus d'infos</a>
				</div>
			</div>
		</div>
		<!-- T4 Revard -->
		<div class="col l4 m6 s12">
			<div class="card medium hoverable">
				<div class="card-image">
					<img src="images/T4-revard/revard-0.jpg">
					<span class="card-title">T4 "Revard"</span>
				</div>
				<div class="card-content">
					<p>Cet appartement est un T4.<br>
					Petite description.</p>
				</div>
				<div class="card-action">
					<a href="T4-revard.php" class="btn-flat orange-text waves-effect">Plus d'infos</a>
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