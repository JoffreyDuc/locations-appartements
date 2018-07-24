$(document).ready( () => {

	// Chargement de tous les éléments de materialize
	M.AutoInit();

	// Gestion de l'onglet actif dans le menu
	let urlPath = window.location.pathname;
	let url = urlPath.replace(/\//g, '');
	$("a[href='" + url + "']").toggleClass("text-lighten-3 text-lighten-1");
	if(urlPath === "/index.php" || urlPath === "/") {
		$("a[href='/']").toggleClass("text-lighten-3 text-lighten-1");
	}

	// Titre dans le menu en small device
	if (urlPath === "/" || urlPath === "/index.php") {
		$("#titreMenuSmall").text("Accueil");
	}
	else {
		$("#titreMenuSmall").text(urlPath.replace(/\//g,'').replace(/.php/g,'').replace(/_/g, ' '));
	}

	// Gestion du menu en small device
	$("#hamburger").on("click", () => {
		$(".overlay").fadeToggle(200);
		($("#hamburger i").text() === "menu") ? $("#hamburger i").text("close") : $("#hamburger i").text("menu");
	});
	$(".overlay").on("click", () => {
		$(".overlay").fadeToggle(200);
		($("#hamburger i").text() === "menu") ? $("#hamburger i").text("close") : $("#hamburger i").text("menu");
	});
	
	// Chargement du carousel
	$(".owl-carousel").owlCarousel({
		items:1,
		margin:10,
		autoHeight:true,
		nav:true,
		navText: [
			"<i class='medium material-icons white-text hide-on-small-only'>chevron_left</i><i class='medium material-icons primary-text hide-on-med-and-up'>chevron_left</i>",
			"<i class='medium material-icons white-text hide-on-small-only'>chevron_right</i><i class='medium material-icons primary-text hide-on-med-and-up'>chevron_right</i></i>"
		],
		loop:true,
		dots:true
	});
});