<?php if (!isset($contenu)) {
	echo "Erreur 403";
	die;
} ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Locations de meublés</title>
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

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
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
	<script src="js/owl.carousel.min.js"></script>

</body>
</html>