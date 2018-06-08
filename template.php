<?php if (!isset($contenu)) {
	echo "Erreur 403";
	die;
} ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Appartements P. Revel</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	<meta charset="utf-8">

	<!-- Responsive design -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Materialize -->
	<link rel="stylesheet" href="lib/materialize/css/materialize.min.css">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Material Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

	<!-- Menu -->
	<?php include "menu.html"; ?>

	<!-- Contenu -->
	<main>
		<?= $contenu; ?>
	</main>

	<!-- Pied de page -->
	<?php include "footer.html"; ?>

	<script src="lib/jquery/jquery-3.3.1.min.js"></script>
	<script src="lib/materialize/js/materialize.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>

</body>
</html>