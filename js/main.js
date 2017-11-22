$(function() {
	compactarMenu();
	mostrarBotaoUp();
	suavizarScroll();
});

function compactarMenu() {
	$(window).scroll(function() {
		var positionNav = $("#hpMainNav").offset().top;
		if (positionNav > 100) {
			$("#hpMainNav").addClass("menu-compacto");
		} else {
			$("#hpMainNav").removeClass("menu-compacto");			
		}
	});
}

function mostrarBotaoUp() {
	$(window).scroll(function() {
		var positionNav = $("#hpMainNav").offset().top;
		var larguraTela = $(window).width();
		if (positionNav > 1000 && larguraTela > 768) {
			$(".btn-up").fadeIn();
		} else {
			$(".btn-up").fadeOut();
		}
	});
}

function suavizarScroll() {
	$(".navbar a, a[href='#hpPage']").on('click', function(event) {

		if (this.hash !== "") {

			event.preventDefault();

			var hash = this.hash;

			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 900, function(){

				window.location.hash = hash;
			});
		} 
	});

	$('[data-toggle="tooltip"]').tooltip(); 
}