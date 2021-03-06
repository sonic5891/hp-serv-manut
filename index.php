<!DOCTYPE html>
<html>
<head>
	<title>HP Serviços e Manutenção</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="img/ico/hp-logo-icon.jpg">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<link rel="stylesheet" type="text/css" href="css/parallax.css">

	<script type="text/javascript">
		function myMap(latitude, longitude) {
			if (latitude === undefined) {
				latitude = -22.608500;
			}
			if (longitude === undefined) {
				longitude = -43.183562;
			}
			var myCenter = new google.maps.LatLng(latitude, longitude);
			var mapProp = {center:myCenter, zoom:15, scrollwheel:true, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
			var map = new google.maps.Map(document.getElementById("hpGoogleMap"),mapProp);
			var marker = new google.maps.Marker({position:myCenter});
			marker.setMap(map);
		}
	</script>
</head>

<body id="hpPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	
	<header>
		<nav id="hpMainNav" class="navbar navbar-inverse navbar-dark navbar-expand-lg">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand link-img-logo" href="#hpPage"><img id="logo-hp" src="img/capa/logo-hp.png" class="img-logo" alt="Logo HP Drywall"></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#hpNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
				</div>
				<div class="collapse navbar-collapse" id="hpNavbar">
					<ul class="nav navbar-nav navbar-right ml-auto">
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#servicos">SERVIÇOS</a></li>
						<!--<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#televendas">TELEVENDAS</a></li>-->
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#sobre-nos">SOBRE NÓS</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#unidades">UNIDADES</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contato">CONTATO</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div id="carousel-hp" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-hp" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-hp" data-slide-to="1"></li>
				<li data-target="#carousel-hp" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<figure class="item active">
					<img src="img/capa/capa1.png" class="img-responsive" width="100%" alt="Loja 1 HP">
					<!--<figcaption class="carousel-caption">
						<div class="intro-saudacao">Bem Vindo a nossa Empresa</div>
						<div class="saudacao-cabecalho text-uppercase">É um prazer conhece-lo</div>
					</figcaption>-->
				</figure>
				
				<figure class="item">
					<img src="img/capa/capa2.png" class="img-responsive" width="100%" alt="Serviços HP">
					<!--<figcaption class="carousel-caption">
						<div class="intro-saudacao">Bem Vindo a nossa Empresa</div>
						<div class="saudacao-cabecalho text-uppercase">É um prazer conhece-lo</div>
					</figcaption>-->
				</figure>

				<figure class="item">
					<img src="img/capa/capa3.png" class="img-responsive" width="100%" alt="Equipe HP">
					<!--<figcaption class="carousel-caption">
						<div class="intro-saudacao">Bem Vindo a nossa Empresa</div>
						<div class="saudacao-cabecalho text-uppercase">É um prazer conhece-lo</div>
					</figcaption>-->
				</figure>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-hp" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-hp" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</header>

	<section id="servicos" class="container-fluid text-center">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="titulo-secao text-uppercase">SERVIÇOS</h2>
				<!--<h3 class="subtitulo-secao text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
			</div>
		</div>

		<div class="row slideanim">
			<div class="col-sm-6 col-md-4">
				<a href="servicos/servico-drywall.html">
					<img src="img/servicos/01452105078-Massa-Corrida-Acrilica.jpg" class="img-circle img-servicos" alt="Imagem Drywall">
				</a>
				<h4 class="titulo-servico">Drywall (paredes)</h4>
				<!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
			</div>

			<div class="col-sm-6 col-md-4">
				<a href="servicos/servico-gesso-decorado.html">
					<img src="img/servicos/teto-forro-decorado.jpg" class="img-circle img-servicos" alt="Imagem Drywall">
				</a>
				<h4 class="titulo-servico">Teto de gesso decorado</h4>
				<!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
			</div>

			<div class="col-sm-12 col-md-4">
				<a href="servicos/servico-pvc.html">
					<img src="img/servicos/DSCN1862.jpg" class="img-circle img-servicos" alt="Imagem Drywall">
				</a>
				<h4 class="titulo-servico">Rebaixamento de Pvc</h4>
				<!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
			</div>
		</div>

		<div class="row slideanim">
			<div class="col-sm-6 col-md-4">
				<a href="servicos/servico-pvc-decorado.html">
					<img src="img/servicos/pvc-decotativo.jpg" class="img-circle img-servicos" alt="Imagem Drywall">
				</a>
				<h4 class="titulo-servico">Pvc decorativos</h4>
				<!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
			</div>

			<div class="col-sm-6 col-md-4">
				<a href="servicos/servico-forro-removivel.html">
					<img src="img/servicos/owa_foto5_g.jpg" class="img-circle img-servicos" alt="Imagem Drywall">
				</a>
				<h4 class="titulo-servico">Forros removíveis</h4>
				<!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
			</div>

			<div class="col-sm-12 col-md-4">
				<a href="servicos/servico-divisorias.html">
					<img src="img/servicos/11752566_146395479025649_3723354704819076619_n.jpg" class="img-circle img-servicos" alt="Imagem Drywall">
				</a>
				<h4 class="titulo-servico">Divisórias</h4>
				<!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
			</div>
		</div>

		<div class="row slideanim">
			<div class="col-sm-6 col-md-4">
				<a href="servicos/servico-iluminacao.html">
					<img src="img/servicos/18274919_463922507272943_7837062606207957635_n.jpg" class="img-circle img-servicos" alt="Imagem Drywall">
				</a>
				<h4 class="titulo-servico">Iluminaçao led</h4>
				<!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
			</div>

			<div class="col-sm-6 col-md-4">
				<a href="servicos/servico-lustres.html">
					<img src="img/servicos/lustre.jpg" class="img-circle img-servicos" alt="Imagem Drywall">
				</a>
				<h4 class="titulo-servico">Lustres</h4>
				<!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
			</div>

			<div class="col-sm-12 col-md-4">
				<a href="servicos/servico-steel-frame.html">
					<img src="img/servicos/stell-frame.jpg" class="img-circle img-servicos" alt="Imagem Drywall">
				</a>
				<h4 class="titulo-servico">Stell Frame</h4>
				<!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
			</div>
		</div>
	</section>

	<div class="parallax-1">
		<div class="container fadeIn">
			<div class="row">
				<div class="col-sm-12 mx-auto text-center">
					<span class="text-parallax">O nosso <span class="text-parallax-red">trabalho</span> é encontrar esse equilíbrio perfeito entre <span class="text-parallax-red">design</span> e <span class="text-parallax-red">funcionalidade.</span>
					<hr class="hr-parralax-red">
					<!--<a id="btn-parallax" class="btn btn-primary btn-parallax-red" href="#portfolio">Como Nós Trabalhamos</a>-->
				</div>
			</div>
		</div>
	</div>

	<!--<section id="televendas" class="container-fluid bg-grey text-center">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="titulo-secao">TELEVENDAS</h2>
				<div class="container">
					<p>A EMPRESA HP trás ao mercado do Rio de Janeiro opções de reforma e decoração que visam a praticidade, sem perder o requinte e o bom gosto. Para todos os gostos e preços compatíveis com o seu orçamento. Temos tudo para sua instalação!</p>
				</div>
				<h3 class="subtitulo-secao">Entre em contato conosco através do telefone <span class="text-red"><strong>21 3684-2332</strong></span> e faça o seu pedido.</h3>
			</div>
		</div>

		<div class="container">
			<div class="row slideanim">
				<div class="col-sm-6 col-md-4 televendas-item">
					<figure class="thumbnail">
						<a class="televendas-link" data-toggle="modal" href="#hpPortfolioModal1">
							<div class="televendas-hover">
								<div class="televendas-hover-content">
									<i class="fa fa-arrow-circle-right icon-3x"></i>
									<p>Clique para saber mais...</p>
								</div>
							</div>
							<img class="img-fluid" src="img/portfolio/023.jpg" alt="Portifólio 1">
						</a>
						<figcaption class="televendas-caption">
							<h4>FORRO PVC</h4>
						</figcaption>
					</figure>
				</div>

				<div class="col-sm-6 col-md-4 televendas-item">
					<figure class="thumbnail">
						<a class="televendas-link" data-toggle="modal" href="#hpPortfolioModal2">
							<div class="televendas-hover">
								<div class="televendas-hover-content">
									<i class="fa fa-arrow-circle-right icon-3x"></i>
									<p>Clique para saber mais...</p>
								</div>
							</div>
							<img class="img-fluid" src="img/portfolio/forro-drywall.jpg" alt="Portifólio 2">
						</a>
						<figcaption class="televendas-caption">
							<h4>RODA FORRO</h4>
						</figcaption>
					</figure>
				</div>

				<div class="col-sm-12 col-md-4 televendas-item">
					<figure class="thumbnail">
						<a class="televendas-link" data-toggle="modal" href="#hpPortfolioModal3">
							<div class="televendas-hover">
								<div class="televendas-hover-content">
									<i class="fa fa-arrow-circle-right icon-3x"></i>
									<p>Clique para saber mais...</p>
								</div>
							</div>
							<img class="img-fluid" src="img/portfolio/gesso-ou-drywall.jpg" alt="Portifólio 3">
						</a>
						<figcaption class="televendas-caption">
							<h4>SANCA</h4>
						</figcaption>
					</figure>
				</div>
			</div>

			<div class="row slideanim">
				<div class="col-sm-6 col-md-4 televendas-item">
					<figure class="thumbnail">
						<a class="televendas-link" data-toggle="modal" href="#hpPortfolioModal4">
							<div class="televendas-hover">
								<div class="televendas-hover-content">
									<i class="fa fa-arrow-circle-right icon-3x"></i>
									<p>Clique para saber mais...</p>
								</div>
							</div>
							<img class="img-fluid" src="img/portfolio/residencial.jpg" alt="Portifólio 4">
						</a>
						<figcaption class="televendas-caption">
							<h4>MOLDURA</h4>
						</figcaption>
					</figure>
				</div>

				<div class="col-sm-6 col-md-4 televendas-item">
					<figure class="thumbnail">
						<a class="televendas-link" data-toggle="modal" href="#hpPortfolioModal5">
							<div class="televendas-hover">
								<div class="televendas-hover-content">
									<i class="fa fa-arrow-circle-right icon-3x"></i>
									<p>Clique para saber mais...</p>
								</div>
							</div>
							<img class="img-fluid" src="img/portfolio/023.jpg" alt="Portifólio 5">
						</a>
						<figcaption class="televendas-caption">
							<h4>CANTOS INTERNOS E EXTERNOS</h4>
						</figcaption>
					</figure>
				</div>

				<div class="col-sm-12 col-md-4 televendas-item">
					<figure class="thumbnail">
						<a class="televendas-link" data-toggle="modal" href="#hpPortfolioModal6">
							<div class="televendas-hover">
								<div class="televendas-hover-content">
									<i class="fa fa-arrow-circle-right icon-3x"></i>
									<p>Clique para saber mais...</p>
								</div>
							</div>
							<img class="img-fluid" src="img/portfolio/forro-drywall.jpg" alt="Portifólio 6">
						</a>
						<figcaption class="televendas-caption">
							<h4>EMENDA H</h4>
						</figcaption>
					</figure>
				</div>
			</div>

			<div class="row slideanim">
				<div class="col-sm-6 col-md-4 televendas-item">
					<figure class="thumbnail">
						<a class="televendas-link" data-toggle="modal" href="#hpPortfolioModal4">
							<div class="televendas-hover">
								<div class="televendas-hover-content">
									<i class="fa fa-arrow-circle-right icon-3x"></i>
									<p>Clique para saber mais...</p>
								</div>
							</div>
							<img class="img-fluid" src="img/portfolio/residencial.jpg" alt="Portifólio 4">
						</a>
						<figcaption class="televendas-caption">
							<h4>ISOPOR</h4>
						</figcaption>
					</figure>
				</div>

				<div class="col-sm-6 col-md-4 televendas-item">
					<figure class="thumbnail">
						<a class="televendas-link" data-toggle="modal" href="#hpPortfolioModal5">
							<div class="televendas-hover">
								<div class="televendas-hover-content">
									<i class="fa fa-arrow-circle-right icon-3x"></i>
									<p>Clique para saber mais...</p>
								</div>
							</div>
							<img class="img-fluid" src="img/portfolio/023.jpg" alt="Portifólio 5">
						</a>
						<figcaption class="televendas-caption">
							<h4>METALON</h4>
						</figcaption>
					</figure>
				</div>
			</div>
		</div>

		<div class="row text-center">
			<div class="col-sm-12">
				<br><h2>Depoimentos de nossos clientes</h2>
				<div id="carouselDepoimentos" class="carousel slide text-center" data-ride="carousel">
					
					<ol class="carousel-indicators">
						<li data-target="#carouselDepoimentos" data-slide-to="0" class="active"></li>
						<li data-target="#carouselDepoimentos" data-slide-to="1"></li>
						<li data-target="#carouselDepoimentos" data-slide-to="2"></li>
					</ol>

					
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
						</div>
						<div class="item">
							<h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
						</div>
						<div class="item">
							<h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
						</div>
					</div>

					
					<a class="left carousel-control" href="#carouselDepoimentos" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carouselDepoimentos" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</section>-->

	<section id="sobre-nos" class="container-fluid bg-grey">
		<div class="row slideanim">
			<div class="col-sm-8">
				<h2 class="titulo-secao">Sobre Nós</h2>
				<p>A HP PVC e DRYWALL é uma empresa especializada em FORROS de PVC, DRYWALL, EUCATEX, FORRO REMOVÍVEL e ILUMINAÇÃO,  com estratégias empresariais bem definidas, sempre priorizando os conceitos de qualidade, consolidando-se como uma empresa que tem em seu fundamento básico, o respeito e a satisfação plena de seus clientes.</p>
				<p>A HP PVC e DRYWALL está sempre em busca de tecnologias, para aperfeiçoamento de seus serviços, com rigorosa responsabilidade com qualidade, prazos, preços e atendimento personalizado aos nossos clientes. Desta forma podemos afirmar que o nome A HP PVC e DRYWALL é sinônimo de qualidade, venha conferir!</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-signal logo"></span>
			</div>
		</div>
	</section>

	<!--<section class="container-fluid">
		<div class="row slideanim">
			<div class="col-sm-4">
				<div class="col-sm-4">
					<span class="glyphicon glyphicon-globe logo"></span>
				</div>
			</div>
			<div class="col-sm-8">
				<h2>Nossos Valores</h2><br>
				<h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
				<p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
	</section>-->

	<section id="unidades" class="container-fluid container-maps">
		<div class="row">
			<div class="col-sm-5 thumbnail">
				<!-- Add Google Maps -->
				<div id="hpGoogleMap" style="height:470px;width:100%;"></div>
				<script>
					myMap();
				</script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwmI9wjAsMKEFJovIfRm-5cIGAPbCLw3I&callback=myMap"></script>
			</div>
			<div class="col-sm-7">
				<h2 class="titulo-secao" style="margin-bottom: 0">UNIDADES</h2>
				<spa><small><i>Clique na unidade e veja a localização no mapa</i></small></span><br><br>
				<ul class="nav nav-pills nav-stacked">
					<li>
						<div class="row">
							<a href="#unidades" onclick="myMap(-22.608500, -43.183562)">
								<div class="col-sm-12">
									<p><span class="glyphicon glyphicon-map-marker"></span> Av. Gov. Roberto Silveira, nº364 - Piabetá - RJ</p>
									<p><span class="glyphicon glyphicon-phone"></span> 021 3684-2332 / 97040-0169</p>
									<p>Seg a Sex 08:00 as 18:00 / Sab 08:00 as 12:00</p>
								</div>
							</a>
						</div>
					</li>
					<li>
						<div class="row">
							<a href="#unidades" onclick="myMap(-22.610872, -43.195232)">
								<div class="col-sm-12">
									<p><span class="glyphicon glyphicon-map-marker"></span> Av. Automóvel Clube KM 58 n°513  - Parque Caçula - RJ</p>
									<p><span class="glyphicon glyphicon-phone"></span> 021 3656-3408 </p>
									<p>Seg a Sex 08:00 as 18:00 / Sab 08:00 as 12:00</p>
								</div>
							</a>
						</div>
					</li>
					<li>
						<div class="row">
							<a href="#unidades" onclick="myMap(-22.641072, -43.218807)">
								<div class="col-sm-12">
									<p><span class="glyphicon glyphicon-map-marker"></span> Rua Coronel Sisson n° 727 Loja 01  - Imbariê - RJ</p>
									<p><span class="glyphicon glyphicon-phone"></span> 021 2777-2979 </p>
									<p>Seg a Sex 08:00 as 18:00 / Sab 08:00 as 13:00</p>
								</div>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section id="contato" class="container-fluid bg-grey">
		<h2 class="titulo-secao text-center">CONTATO</h2><br>
		<div class="row">
			<div class="col-sm-5">
				<p>Entre em contato conosco. Nós retornaremos pra você em até 24 horas.</p>
				<p><span class="glyphicon glyphicon-map-marker"></span> Av. Gov. Roberto Silveira, nº364 - Piabetá - RJ</p>
				<p><span class="glyphicon glyphicon-phone"></span> 021 3684-2332 / 97040-0169</p>
				<p><span class="glyphicon glyphicon-envelope"></span> hpservicosemanutencao@gmail.com</p>
			</div>
			<div class="col-sm-7 slideanim">
				<form id="contatoForm" action="mail.php" method="post">
					<div class="row">
						<div class="col-sm-12 form-group controls">
							<input type="text" id="txtContatoNome" name="txtContatoNome" class="form-control input-hp" placeholder="Nome" required="true">
						</div>
						<div class="col-sm-12 form-group controls">
							<input type="text" id="txtContatoEmail" name="txtContatoEmail" class="form-control input-hp" placeholder="Email" required="true">
						</div>
						<div class="col-sm-12 form-group controls">
							<input type="text" id="txtContatoTel" name="txtContatoTel" class="form-control input-hp" placeholder="Telefone">
						</div>
						<div class="col-sm-12 form-group controls">
							<input type="text" id="txtContatoAssunto" name="txtContatoAssunto" class="form-control input-hp" placeholder="Assunto">
						</div>
					</div>
					<div class="control-textarea">
						<textarea class="form-control input-hp" id="txtContatoMsg" name="txtContatoMsg" placeholder="Deixe sua mensagem" rows="5"></textarea><br>						
					</div>
					<div class="row">
						<div class="col-sm-12 form-group">
							<button id="btnContato" class="btn btn-contato btn-primary pull-right" type="submit">Enviar</button>
						</div>
					</div>					
				</form>
			</div>
		</div>
	</section>

	<footer class="hp-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-xs-12">
					<p class="hp-creditos">© Copyright 2017 por <a href="#">HP - Serviços e Manutencao.</a> <span class="text-direito-footer">Todos os Direitos Reservados.</span></p>
				</div>
				<div class="col-sm-2 col-xs-12">
					<ul class="social social-icons-footer">
						<li class="facebook"><a href="https://www.facebook.com/HPPVCDRYWALL/" target="_blank" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li class="instagram"><a href="#" data-toggle="tooltip" title="" data-original-title="Instagram"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- Portfolio Modals -->

	<!-- Modal 1 -->
	<div class="portfolio-modal modal fade" id="hpPortfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 mx-auto modal-container">
							<div class="modal-body">
								<!-- Project Details Go Here -->
								<h2 class="text-uppercase">Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
								<img class="img-responsive d-block mx-auto" src="img/portfolio/023_2.jpg" alt="Modal Portifólio 1">
								<p class="modal-text">Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
								<ul class="list-inline">
									<li class="modal-list-item">Date: January 2017</li>
									<li class="modal-list-item">Client: Threads</li>
									<li class="modal-list-item">Category: Illustration</li>
								</ul>
								<button class="btn btn-portfolio btn-primary" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
								Close Project</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 2 -->
	<div class="portfolio-modal modal fade" id="hpPortfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 mx-auto modal-container">
							<div class="modal-body">
								<!-- Project Details Go Here -->
								<h2 class="text-uppercase">Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
								<img class="img-responsive d-block mx-auto" src="img/portfolio/forro-drywall_2.jpg" alt="Modal Portifólio 2">
								<p class="modal-text">Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
								<ul class="list-inline">
									<li>Date: January 2017</li>
									<li>Client: Explore</li>
									<li>Category: Graphic Design</li>
								</ul>
								<button class="btn btn-portfolio btn-primary" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
								Close Project</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 3 -->
	<div class="portfolio-modal modal fade" id="hpPortfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 mx-auto modal-container">
							<div class="modal-body">
								<!-- Project Details Go Here -->
								<h2 class="text-uppercase">Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
								<img class="img-responsive d-block mx-auto" src="img/portfolio/gesso-ou-drywall_2.jpg" alt="Modal Portifólio 3">
								<p class="modal-text">Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
								<ul class="list-inline">
									<li>Date: January 2017</li>
									<li>Client: Finish</li>
									<li>Category: Identity</li>
								</ul>
								<button class="btn btn-portfolio btn-primary" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
								Close Project</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 4 -->
	<div class="portfolio-modal modal fade" id="hpPortfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 mx-auto modal-container">
							<div class="modal-body">
								<!-- Project Details Go Here -->
								<h2 class="text-uppercase">Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
								<img class="img-responsive d-block mx-auto" src="img/portfolio/residencial_2.jpg" alt="Modal Portifólio 4">
								<p class="modal-text">Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
								<ul class="list-inline">
									<li>Date: January 2017</li>
									<li>Client: Lines</li>
									<li>Category: Branding</li>
								</ul>
								<button class="btn btn-portfolio btn-primary" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
								Close Project</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 5 -->
	<div class="portfolio-modal modal fade" id="hpPortfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 mx-auto modal-container">
							<div class="modal-body">
								<!-- Project Details Go Here -->
								<h2 class="text-uppercase">Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
								<img class="img-responsive d-block mx-auto" src="img/portfolio/023_2.jpg" alt="Modal Portifólio 5">
								<p class="modal-text">Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
								<ul class="list-inline">
									<li>Date: January 2017</li>
									<li>Client: Southwest</li>
									<li>Category: Website Design</li>
								</ul>
								<button class="btn btn-portfolio btn-primary" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
								Close Project</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 6 -->
	<div class="portfolio-modal modal fade" id="hpPortfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 mx-auto modal-container">
							<div class="modal-body">
								<!-- Project Details Go Here -->
								<h2 class="text-uppercase">Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
								<img class="img-responsive d-block mx-auto" src="img/portfolio/forro-drywall_2.jpg" alt="Modal portfolio 6">
								<p class="modal-text">Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
								<ul class="list-inline">
									<li class="modal-list-item">Date: January 2017</li>
									<li class="modal-list-item">Client: Window</li>
									<li class="modal-list-item">Category: Photography</li>
								</ul>
								<button class="btn btn-portfolio btn-primary" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
								Close Project</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a href="#hpPage" class="btn btn-default btn-up"><span class="glyphicon glyphicon-chevron-up"></span></a>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>