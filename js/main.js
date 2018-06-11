$(document).ready( () => {

	// Chargement de tous les éléments de materialize
	M.AutoInit();

	// Gestion de l'onglet actif dans le menu
	let urlPath = window.location.pathname;
	$("a[href='" + urlPath + "']").toggleClass("text-lighten-3 text-lighten-1");
	if(urlPath === "/index.php") {
		$("a[href='/']").toggleClass("text-lighten-3 text-lighten-1");
	}
	if (urlPath === "/" || urlPath === "/index.php") {
		$("#titreMenuSmall").text("Accueil");
	}
	else {
		$("#titreMenuSmall").text(urlPath.replace('/','').replace('.php',''));
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
	
});