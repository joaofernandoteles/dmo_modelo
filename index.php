<?php

require_once 'assets/include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

?>
<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Alsite DevTeam">

	<title>DMO</title>
	<link rel="shortcut icon" href="assets/img/logo_dmo.png">
	<link rel="stylesheet" type="text/css" href="//site-assets.fontawesome.com/releases/v6.1.2/css/all.css">

	<!-- build:css -->
	<link href="assets/css/app.css" rel="stylesheet">
	<!-- endbuild -->

	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/css/uikit.min.css" />


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@800&display=swap" rel="stylesheet">
	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/js/uikit-icons.min.js"></script>

</head>
<style>
	a {
		text-decoration: none !important;
	}

	input {
		outline: none !important;
	}

	textarea {
		outline: none !important
	}

	/* The sticky class is added to the navbar with JS when it reaches its scroll position */
	.sticky {
		position: fixed;
		top: 0;
		width: 100%;
		z-index: 10;
	}

	/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
	.sticky+.content {
		padding-top: 60px;
	}

	.swiper {
		width: 100%;
		height: 100%;
	}

	.swiper-slide {
		text-align: center;
		font-size: 18px;
		background: #fff;

		/* Center slide text vertically */
		display: -webkit-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		-webkit-justify-content: center;
		justify-content: center;
		-webkit-box-align: center;
		-ms-flex-align: center;
		-webkit-align-items: center;
		align-items: center;
	}

	.swiper-slide img {
		display: block;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	.icon_produtos {
		color: black !important;
	}

	.uk-open>.uk-modal-dialog {
		background: #f3f3f3;
		width: 50%;
		border-radius: 10px;
	}

	.ref_box {
		height: 140px;
		display: flex;
		flex-direction: column;
		justify-content: space-evenly;
		align-items: flex-start;
	}

	.uk-modal-body>:last-child,
	.uk-modal-footer>:last-child,
	.uk-modal-header>:last-child {
		font-size: 19px;
	}

	[data-uk-cover],
	[uk-cover] {
		width: 435px !important;
		height: 435px !important;
	}

	.imagem_box {
		position: absolute;
		left: 50%;
		width: 60%;
		top: 50%;
		--uk-position-translate-x: -50%;
		--uk-position-translate-y: -50%;
		transform: translate(var(--uk-position-translate-x), var(--uk-position-translate-y));
	}


	@media (max-width: 992px) {
		.chamada {
			height: 732px;
		}
	}

	@media (max-width: 766px) {
		.icon_empresa {
			display: flex;
			justify-content: center;
			padding: 20px;
		}
	}

	.p_rodape {
		color: #ffffff;
		font-family: verdana;
		margin-top: 7px
	}

	.icon_empresa {
		display: flex;
		justify-content: center;
		padding: 20px;
	}

	.div-produto {
		width: 24% !important;
	}

	@media (max-width: 766px) {
		.div-produto {
			width: 70% !important;
		}

		.uk-open>.uk-modal-dialog {
			width: 100%;
		}

		.p_rodape {
			font-size: 14px;
		}

		.imagem_box {
			max-width: 69% !important;
		}

	}

	.video_video {
		height: 255px;
	}

	.video_video2 {
		height: 255px;
	}
</style>

<body class="d-flex flex-column h-100">

	<div role="main" class="flex-shrink-0">

		<section id="home">

			<?php include 'header.php'; ?>

		</section>

		<section class="chamada" id="chamada">
			<div class="container text-center" style="max-width: 1060px;">
				<div class="row">
					<div class="col-12 col-md-8 coluna_menu">
						<div class="texto_menu">
							<h3>
								Aqui vai a sua headline,
								Foque na transformação
								que seu produto gera.
							</h3>
							<p>
								Lorem ipsum dolor sit amet. Est deleniti adipisci ea inventore saepe vel blanditiis ipsum ut pariatur doloribus quo tempore eligendi non voluptate temporibus.Lorem ipsum dolor sit amet. Id inventore galisum non maiores quia qui dolores.
							</p>
						</div>
					</div>
					<div class="col-12 col-md-4 coluna_formulario">
						<div class="div_formulario">
							<p>Chamada para ação</p>
							<input type="text" name="nome" id="nome" class="" placeholder="NOME:">
							<input type="email" name="email" id="email" placeholder="E-MAIL:">
							<input type="text" class="mask-telefone" name="telefone" id="telefone" placeholder="DDD + TELEFONE">
							<textarea id="freeform" name="freeform" rows="4" cols="25" placeholder="COLOQUE OQ PODEMOS TE AJUDAR"></textarea>
							<button>
								<p>Chamada para ação</p>
							</button>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section id="video" class="video">
			<div class="div_tamanho">
				<div class="row">
					<div class="col-12 col-md-6 div_video">
						<iframe class="video_video" src="https://www.youtube.com/embed/kGJr1Nh-1CY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" style="border-radius: 5px; width: 100%;" allowfullscreen></iframe>
					</div>
					<div class="col-12 col-md-6">
						<div class="texto_video">
							<h3>
								Titulo sobre o serviço
							</h3>

							<p>Lorem ipsum dolor sit amet. Est deleniti adipisci ea</p>
							<p>inventore saepe vel blanditiis ipsum ut pariatur doloribus</p>
							<p>quo tempore eligendi non voluptate temporibus.Lorem</p>
							<p>ipsum dolor sit amet. Id inventore galisum non maiores</p>
							<p>quia qui dolores.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="servico" class="servico">
			<div class="titulo_servico">
				<h3>Com este serviço você:</h3>
			</div>
			<div class="div_tamanho_2">
				<div class="row">
					<div class="col-12 col-md-6 coluna_servico">
						<div class="row div_servico">
							<div class="col-12 col-md-2 home_icon"><i class="fa-solid fa-shop"></i></div>
							<div class="col-12 col-md-10 texto_servico">
								<div class="servico_texto1">
									<p>Lorem ipsum dolor sit amet.</p>
								</div>
								<div class="servico_texto2">
									<p>Lorem ipsum dolor sit amet. Eum sapiente dicta aut laudantium iste eum omnis exercitationem non itaque veritatis non minus dolores ab magnam deserunt ut</p>
								</div>
							</div>
						</div>
						<div class="row div_servico">
							<div class="col-12 col-md-2 home_icon"><i class="fa-solid fa-shop"></i></div>
							<div class="col-12 col-md-10 texto_servico">
								<div class="servico_texto1">
									<p>Lorem ipsum dolor sit amet.</p>
								</div>
								<div class="servico_texto2">
									<p>Lorem ipsum dolor sit amet. Eum sapiente dicta aut laudantium iste eum omnis exercitationem non itaque veritatis non minus dolores ab magnam deserunt ut</p>
								</div>
							</div>
						</div>
						<div class="row div_servico">
							<div class="col-12 col-md-2 home_icon"><i class="fa-solid fa-shop"></i></div>
							<div class="col-12 col-md-10 texto_servico">
								<div class="servico_texto1">
									<p>Lorem ipsum dolor sit amet.</p>
								</div>
								<div class="servico_texto2">
									<p>Lorem ipsum dolor sit amet. Eum sapiente dicta aut laudantium iste eum omnis exercitationem non itaque veritatis non minus dolores ab magnam deserunt ut</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 coluna_servico">
						<div class="row div_servico">
							<div class="col-12 col-md-2 home_icon"><i class="fa-solid fa-shop"></i></div>
							<div class="col-12 col-md-10 texto_servico">
								<div class="servico_texto1">
									<p>Lorem ipsum dolor sit amet.</p>
								</div>
								<div class="servico_texto2">
									<p>Lorem ipsum dolor sit amet. Eum sapiente dicta aut laudantium iste eum omnis exercitationem non itaque veritatis non minus dolores ab magnam deserunt ut</p>
								</div>
							</div>
						</div>
						<div class="row div_servico">
							<div class="col-12 col-md-2 home_icon"><i class="fa-solid fa-shop"></i></div>
							<div class="col-12 col-md-10 texto_servico">
								<div class="servico_texto1">
									<p>Lorem ipsum dolor sit amet.</p>
								</div>
								<div class="servico_texto2">
									<p>Lorem ipsum dolor sit amet. Eum sapiente dicta aut laudantium iste eum omnis exercitationem non itaque veritatis non minus dolores ab magnam deserunt ut</p>
								</div>
							</div>
						</div>
						<div class="row div_servico">
							<div class="col-12 col-md-2 home_icon"><i class="fa-solid fa-shop"></i></div>
							<div class="col-12 col-md-10 texto_servico">
								<div class="servico_texto1">
									<p>Lorem ipsum dolor sit amet.</p>
								</div>
								<div class="servico_texto2">
									<p>Lorem ipsum dolor sit amet. Eum sapiente dicta aut laudantium iste eum omnis exercitationem non itaque veritatis non minus dolores ab magnam deserunt ut</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="div_botao">
					<a href="">
						<div class="botao">
							<p>Chamada pra ação</p>
						</div>
					</a>
				</div>
			</div>
		</section>

		<section id="recomenda" class="recomenda">
			<div class="titulo_servico">
				<h3>Quem conhece, recomenda.</h3>
			</div>
			<div class="div_tamanho_3">
				<div class="row">
					<div class="col-12 col-md-6 div_video">
						<iframe class="video_video2" src="https://www.youtube.com/embed/kGJr1Nh-1CY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" style="border-radius: 5px; width: 100%;" allowfullscreen></iframe>
					</div>
					<div class="col-12 col-md-6">
						<div class="texto_recomenda">
							<div class="row div_perfil">
								<div class="col-12 col-md-3 icon_perfil">
									<i class="fa-duotone fa-circle-user"></i>
								</div>
								<div class="col-12 col-md-9 div_textorecomenda">
									<div class="titulo_recomenda">
										<h1>Lorem ipsum dolor</h1>
									</div>
									<div class="descricao_recomenda">
										<p>Lorem ipsum dolor sit amet. Est odit minima ex praesentium quia aut fuga laudantium eum dolorem excepturi sit tempore ducimus est maxime eius non esse accusantium</p>
									</div>
								</div>
							</div>
							<div class="row div_perfil">
								<div class="col-12 col-md-3 icon_perfil">
									<i class="fa-duotone fa-circle-user"></i>
								</div>
								<div class="col-12 col-md-9 div_textorecomenda">
									<div class="titulo_recomenda">
										<h1>Lorem ipsum dolor</h1>
									</div>
									<div class="descricao_recomenda">
										<p>Lorem ipsum dolor sit amet. Est odit minima ex praesentium quia aut fuga laudantium eum dolorem excepturi sit tempore ducimus est maxime eius non esse accusantium</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="div_botao2">
					<a href="">
						<div class="botao2">
							<p>Chamada pra ação</p>
						</div>
					</a>
				</div>
			</div>
		</section>

		<section id="foto" class="foto">
			<div class="div_tamanho">
				<div class="row row_somos">
					<div class="col-12 col-md-6 div_foto">
						<img src="./assets/img/foto.png" alt="">
					</div>
					<div class="col-12 col-md-6">
						<div class="texto_foto">
							<h3>
								Quem Somos
							</h3>

							<p>Lorem ipsum dolor sit amet. Est deleniti adipisci ea</p>
							<p>inventore saepe vel blanditiis ipsum ut pariatur doloribus</p>
							<p>quo tempore eligendi non voluptate temporibus.Lorem</p>
							<p>ipsum dolor sit amet. Id inventore galisum non maiores</p>
							<p>quia qui dolores.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="perguntas" class="perguntas">
			<div class="titulo_servico">
				<h3>Perguntas Frequentes</h3>
			</div>
			<div class="div_tamanho_4">
				<div class="div_perguntas">
					<a href="">
						<div class=a_pergunta>
							<p>At numquam doloremque qui pariatur amet cum internos ducimus ?</p>
						</div>
					</a>
					<a href="">
						<div class=a_pergunta>
							<p>At numquam doloremque qui pariatur amet cum internos ducimus ?</p>
						</div>
					</a>
					<a href="">
						<div class=a_pergunta>
							<p>At numquam doloremque qui pariatur amet cum internos ducimus ?</p>
						</div>
					</a>
					<a href="">
						<div class=a_pergunta>
							<p>At numquam doloremque qui pariatur amet cum internos ducimus ?</p>
						</div>
					</a>
					<a href="">
						<div class=a_pergunta>
							<p>At numquam doloremque qui pariatur amet cum internos ducimus ?</p>
						</div>
					</a>
				</div>
			</div>
		</section>

		<section id="chamada_final" class="chamada_final">
			<div class="div_tamanho">
				<div class="row">
					<div class="col-12 col-md-5">
						<div class="texto_chamada_final">
							<h3>
								Faça uma chamada final
							</h3>

							<p>Lorem ipsum dolor sit amet. Est deleniti adipisci ea Et eius rerum non unde Eos minima rerum</p>
						</div>
					</div>
					<div class="col-12 col-md-7 div_chamada">
						<div class="div_final">
							<div class="texto_final">
								<p>Lorem ipsum dolor sit amet. Ut ipsa saepe aut iste fugit est Quis quos! Aut quisquam architecto non dolorem rerum sit porro perferendis et omnis totam</p>
							</div>
							<div class="div_botao_chamada">
								<a href="">
									<div class="botao_final">
										<p>
											Chamada para ação
										</p>
									</div>
								</a>
								<div class="descricao_final">
									<p>Lorem ipsum dolor sit amet. Eos minima rerum</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<?php include 'footer.php'; ?>


	<!-- build:js -->
	<script src="assets/js/app.js"></script>
	<script src="./assets/js/vendor/jquery.mask.min.js"></script>
	<!-- endbuild -->
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper(".mySwiper", {
			slidesPerView: 3,
			spaceBetween: 30,
			slidesPerGroup: 3,
			loop: true,
			loopFillGroupWithBlank: true,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
	</script>
	<script>
		// When the user scrolls the page, execute myFunction
		window.onscroll = function() {
			myFunction()
		};

		// Get the navbar
		var navbar = document.getElementById("wrap_menu");

		// Get the offset position of the navbar
		var sticky = wrap_menu.offsetTop;

		// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
		function myFunction() {
			if (window.pageYOffset >= sticky) {
				wrap_menu.classList.add("sticky")
			} else {
				wrap_menu.classList.remove("sticky");
			}
		}
	</script>


</body>

</html>