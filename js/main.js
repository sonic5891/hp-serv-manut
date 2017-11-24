$(function() {
	compactarMenu();
	mostrarBotaoUp();
	suavizarScroll();
	animarElementos();
});

function compactarMenu() {
	$(window).scroll(function() {
		if ($(window).scrollTop() > 60) {
			$("#hpMainNav").addClass("menu-compacto");
			/*Ou sem o menu transparente
			$("#hpMainNav").addClass("menu-compacto").addClass("navbar-fixed-top");*/
		} else {
			$("#hpMainNav").removeClass("menu-compacto");
			/*OU sem o menu transparente
			$("#hpMainNav").removeClass("menu-compacto").removeClass("navbar-fixed-top");*/
		}
	});
}

function mostrarBotaoUp() {
	$(window).scroll(function() {
		var larguraTela = $(window).width();
		if ($(window).scrollTop() > 1000 && larguraTela > 768) {
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

function animarElementos() {
	$(window).scroll(function() {
		$(".slideanim").each(function(){
			var pos = $(this).offset().top;

			var winTop = $(window).scrollTop();
			if (pos < winTop + 600) {
				$(this).addClass("slideElement");
			}
		});
	});
}