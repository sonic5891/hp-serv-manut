$(function() {
	compactarMenu();
	mostrarBotaoUp();
	suavizarScroll();
	animarElementos();
	
	var windowsize = $(window).width();
	$(window).resize(function() {
		windowsize = $(window).width();
		if (windowsize < 768) {
		   $("#hpMainNav").removeClass("navbar-fixed-top");
		} else {
			$("#hpMainNav").addClass("navbar-fixed-top");		
		}
	});
});

function compactarMenu() {
	$(window).scroll(function() {
		if ($(window).scrollTop() > 60) {
			//$("#hpMainNav").addClass("menu-compacto");
			$("#hpMainNav").addClass("menu-compacto").addClass("navbar-fixed-top");
			$("#logo-hp").removeClass("img-logo");
			$("#logo-hp").addClass("img-logo-compacto");
			$(".servico-conteudo").addClass("servico-conteudo-padding");
			/*Ou sem o menu transparente
			$("#hpMainNav").addClass("menu-compacto").addClass("navbar-fixed-top");*/
		} else {
			//$("#hpMainNav").removeClass("menu-compacto");
			$("#hpMainNav").removeClass("menu-compacto").removeClass("navbar-fixed-top");
			$("#logo-hp").removeClass("img-logo-compacto");
			$("#logo-hp").addClass("img-logo");
			$(".servico-conteudo").removeClass("servico-conteudo-padding");
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
	$(".navbar a, a[href='#hpPage'], a[href='#servicos'], a[href='#televendas'], a[href='#sobre-nos'], a[href='#unidades'], a[href='#contato']")
		.on('click', function(event) {

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