<?php ob_start(); ?>

<div id="contenu" class="row">
	<div class="col l8 offset-l2">
		<h1 id="titre" class="white-text center">Appartements à louer sur le Bourget-du-Lac</h1>
	</div>
</div>

<?php $contenu = ob_get_clean(); ?>
<?php require_once 'template.php'; ?>