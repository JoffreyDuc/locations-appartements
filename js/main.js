$(document).ready(function(){

	// Chargement de tous les éléments de materialize
	M.AutoInit();

	// Gestion du menu en small device
	$("#hamburger").on('click', function () {
		event.preventDefault();
		$(".overlay").fadeToggle(200);
		($("#hamburger i").text() === "menu") ? $("#hamburger i").text("close") : $("#hamburger i").text("menu");
	});
	$('.overlay').on('click', function () {
		$(".overlay").fadeToggle(200);
		($("#hamburger i").text() === "menu") ? $("#hamburger i").text("close") : $("#hamburger i").text("menu");
	});
	
});