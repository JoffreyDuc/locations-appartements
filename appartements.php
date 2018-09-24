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
</div>

<div class="container">
	<div class="divTableau white">
		<table>
			<tr>
				<td>
					<h5>Les appartements</h5>
				</td>
				<td colspan="2">
					<div style="float: right;">
						<label>
							<input class="with-gap" name="periode" type="radio" checked />
							<span>Année scolaire</span>
						</label>
						<br>
						<label>
							<input class="with-gap" name="periode" type="radio" />
							<span>Période estivale</span>
						</label>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<small>La période scolaire dure de septembre à juin.<br>
					La période estivale commence à la deuxième quinzaine de juillet et se termine à la première quinzaine d'août.</small>
				</td>
			</tr>
			<!-- T2 Nivolet -->
			<tr>
				<td class="hide-on-small-only">
					<img src="images/T2-nivolet/nivolet-0.jpg" width="240px" height="180px">
				</td>
				<td class="hide-on-med-and-up" style="width: 150px !important;">
					<img src="images/T2-nivolet/nivolet-0.jpg" width="100px" height="90px">
				</td>
				<td>
					<h5>T2 - Nivolet</h5>
					Un petit 2 pièces de 35m². Meublé, 1 chambre
				</td>
				<td class="center">
					<p>Prix</p>
					<!-- Prix en période scolaire -->
					<h5 class="prix">300€ / mois</h5>
					<!-- Prix en période estivale -->
					<h5 class="prix hidden">350€ / semaine</h5>
					<a href="T2-nivolet.php" class="btn waves-effect">VOIR</a>
				</td>
			</tr>
			<!-- T3 Granier -->
			<tr>
				<td>
					<img src="images/T3-granier/granier-0.jpg" width="240px" height="180px" class="hide-on-small-only">
					<img src="images/T3-granier/granier-0.jpg" width="100px" height="90px" class="hide-on-med-and-up">
				</td>
				<td>
					<h5>T3 - Granier</h5>
					Un 3 pièces de 55m². Meublé, 2 chambres
				</td>
				<td class="center">
					<p>Prix</p>
					<!-- Prix en période scolaire -->
					<h5 class="prix">400€ / mois</h5>
					<!-- Prix en période estivale -->
					<h5 class="prix hidden">450€ / semaine</h5>
					<a href="T3-granier.php" class="btn waves-effect">VOIR</a>
				</td>
			</tr>
			<!-- T3 Thomas 2 -->
			<tr>
				<td>
					<img src="images/T3-thomas_2/thomas_2-0.jpg" width="240px" height="180px" class="hide-on-small-only">
					<img src="images/T3-thomas_2/thomas_2-0.jpg" width="100px" height="90px" class="hide-on-med-and-up">
				</td>
				<td>
					<h5>T3 - Thomas 2</h5>
					Un 3 pièces de 75m². Meublé, 2 chambres
				</td>
				<td class="center">
					<p>Prix</p>
					<!-- Prix en période scolaire -->
					<h5 class="prix">400€ / mois</h5>
					<!-- Prix en période estivale -->
					<h5 class="prix hidden">450€ / semaine</h5>
					<a href="T3-thomas_2.php" class="btn waves-effect">VOIR</a>
				</td>
			</tr>
			<!-- T4 Belledonnes -->
			<tr>
				<td>
					<img src="images/T4-belledonnes/belledonnes-0.jpg" width="240px" height="180px" class="hide-on-small-only">
					<img src="images/T4-belledonnes/belledonnes-0.jpg" width="100px" height="90px" class="hide-on-med-and-up">
				</td>
				<td>
					<h5>T4 - Belledonnes</h5>
					Un 5 pièces de 105m². Meublé, 3 chambres
				</td>
				<td class="center">
					<p>Prix</p>
					<!-- Prix en période scolaire -->
					<h5 class="prix">480€ / mois</h5>
					<!-- Prix en période estivale -->
					<h5 class="prix hidden">520€ / semaine</h5>
					<a href="T4-belledonnes.php" class="btn waves-effect">VOIR</a>
				</td>
			</tr>
			<!-- T4 Dent-du-chat -->
			<tr>
				<td>
					<img src="images/T4-dent_du_chat/dent_du_chat-0.jpg" width="240px" height="180px" class="hide-on-small-only">
					<img src="images/T4-dent_du_chat/dent_du_chat-0.jpg" width="100px" height="90px" class="hide-on-med-and-up">
				</td>
				<td>
					<h5>T4 - Dent-du-chat</h5>
					Un 5 pièces de 105m². Meublé, 3 chambres
				</td>
				<td class="center">
					<p>Prix</p>
					<!-- Prix en période scolaire -->
					<h5 class="prix">480€ / mois</h5>
					<!-- Prix en période estivale -->
					<h5 class="prix hidden">520€ / semaine</h5>
					<a href="T4-dent_du_chat.php" class="btn waves-effect">VOIR</a>
				</td>
			</tr>
			<!-- T4 Revard -->
			<tr>
				<td>
					<img src="images/T4-revard/revard-1.jpg" width="240px" height="180px" class="hide-on-small-only">
					<img src="images/T4-revard/revard-0.jpg" width="100px" height="90px" class="hide-on-med-and-up">
				</td>
				<td>
					<h5>T4 - Revard</h5>
					Un 4 pièces de 105m². Meublé, 3 chambres
				</td>
				<td class="center">
					<p>Prix</p>
					<!-- Prix en période scolaire -->
					<h5 class="prix">480€ / mois</h5>
					<!-- Prix en période estivale -->
					<h5 class="prix hidden">520€ / semaine</h5>
					<a href="T4-revard.php" class="btn waves-effect">VOIR</a>
				</td>
			</tr>
		</table>
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