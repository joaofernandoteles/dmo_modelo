<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Alsite DevTeam">

	<title>TITULO DO SITE</title>
	<link rel="shortcut icon" href="favicon.ico">

	<!-- build:css -->
	<link href="assets/css/app.css" rel="stylesheet">
	<!-- endbuild -->
	<style type="text/css">
		.py-3 {
			padding-top: 1rem !important;
			padding-bottom: 1rem !important;
		}

		footer {
			background-color: #455266;
			color: #393778;
		}

		.bag-whatsapp-alert {
			z-index: 1020;
			position: fixed;
			bottom: 120px;
			padding: 5px 7px;
			right: 156px;
			background: #616161;
			display: none;
			color: #fff;
			border-radius: 5px;
			font-size: 15px;
			width: auto;
		}

		.bag-whatsapp-alert-arrow {
			position: fixed;
			bottom: 128px;
			padding: 4px 7px;
			right: 150px;
			background: #616161;
			display: none;
			width: 15px;
			height: 15px;
			-webkit-transform: rotate(45deg);
			transform: rotate(45deg);
			z-index: 31;
		}

		.bloco-wthats .link-whats,
		.titulo {
			overflow: hidden;
			background-repeat: no-repeat;
		}

		.bloco-wthats {
			position: fixed;
			right: 46px;
			bottom: 89px;
			z-index: 100;
			width: 100px;
			height: 100px;
		}

		.bloco-wthats .aura,
		.bloco-wthats .link-whats {
			position: absolute;
			display: block;
			top: 50%;
			width: 70px;
			height: 70px;
			border-radius: 50%;
			-khtml-transform: translate(-50%, -50%);
			left: 50%;
		}

		.bloco-wthats .link-whats {
			z-index: 1;
			background-color: #44bb6e;
			background-image: url(./assets/img/whatsapp.png) !important;
			background-size: 55px !important;
			background-position: 50% 50%;
			background-size: 30px;
			-webkit-box-shadow: 6px 6px 25px 0 rgba(0, 0, 0, 0.3);
			box-shadow: 6px 6px 25px 0 rgba(0, 0, 0, 0.3);
			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			-webkit-transition: all 0.3s ease;
			transition: all 0.3s ease;
		}

		.bloco-wthats .link-whats:hover {
			background-color: #16b84f;
		}

		.bloco-wthats .aura {
			background-color: #44bb6e;
			filter: alpha(opacity=100);
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
			-webkit-opacity: 1;
			-khtml-opacity: 1;
			-moz-opacity: 1;
			-ms-opacity: 1;
			-o-opacity: 1;
			opacity: 1;
			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			-webkit-transition: width 1.5s, height 1.5s, opacity 2.5s;
			transition: width 1.5s, height 1.5s, opacity 2.5s;
			-webkit-animation-name: aura;
			animation-name: aura;
			-webkit-animation-duration: 2s;
			animation-duration: 2s;
			-webkit-animation-iteration-count: infinite;
			animation-iteration-count: infinite;
		}

		@-webkit-keyframes aura {
			0% {
				filter: alpha(opacity=100);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
				-webkit-opacity: 1;
				-khtml-opacity: 1;
				-moz-opacity: 1;
				-ms-opacity: 1;
				-o-opacity: 1;
				opacity: 1;
				width: 70px;
				height: 70px;
			}

			100% {
				filter: alpha(opacity=0);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
				-webkit-opacity: 0;
				-khtml-opacity: 0;
				-moz-opacity: 0;
				-ms-opacity: 0;
				-o-opacity: 0;
				opacity: 0;
				width: 150px;
				height: 150px;
			}
		}

		@keyframes aura {
			0% {
				filter: alpha(opacity=100);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
				-webkit-opacity: 1;
				-khtml-opacity: 1;
				-moz-opacity: 1;
				-ms-opacity: 1;
				-o-opacity: 1;
				opacity: 1;
				width: 70px;
				height: 70px;
			}

			100% {
				filter: alpha(opacity=0);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
				-webkit-opacity: 0;
				-khtml-opacity: 0;
				-moz-opacity: 0;
				-ms-opacity: 0;
				-o-opacity: 0;
				opacity: 0;
				width: 150px;
				height: 150px;
			}
		}

		@media (max-width: 766px) {
			.endereço_footer {
				width: 362px
			}

			.imagem_footer {
				margin-left: -70px;
				display: flex;
				justify-content: center;
			}

			.div_imagem {
				display: flex;
				justify-content: center;
			}

			.uk-open>.uk-modal-dialog {
				width: 100%;
			}

			.div_info {
				display: flex;
				flex-direction: column;
				align-items: center;
			}

			.chamada {
				height: 755px !important;
				background-color: #8294ae;
				display: flex;
				flex-direction: column;
				justify-content: flex-start;
			}

			.texto_menu {
				display: flex !important;
				align-items: center !important;
				flex-direction: column !important;
				justify-content: center !important;
				height: 100% !important;
				width: 100% !important;
				text-align: left !important;
				padding-left: 30px !important;
				padding-right: 30px;
				padding-top: 46px;
			}

			.texto_menu h3 {
				text-align: center;
				font-size: 35px !important;
				color: rgb(255, 255, 255) !important;
				font-family: Mulish, sans-serif !important;
				letter-spacing: -3px !important;
			}

			.texto_menu p {
				text-align: center;
				margin-top: 7px !important;
				font-size: 12px !important;
				color: rgb(255, 255, 255) !important;
				font-family: Mulish, sans-serif !important;
			}

			.video {
				height: 650px !important;
			}

			.div_tamanho {
				width: 100% !important;
				height: 100% !important;
				padding: 0px 35px !important;
				display: flex;
				flex-direction: column;
				justify-content: center;
			}

			.texto_video {
				display: flex !important;
				align-items: flex-start !important;
				flex-direction: column !important;
				justify-content: center !important;
				height: 100% !important;
				text-align: left !important;
				padding-left: 0px;
				padding-top: 65px;
			}

			.texto_video p {
				margin-bottom: 7px !important;
				font-size: 12px !important;
				color: #4a5666 !important;
				font-family: "Mulish", sans-serif !important;
			}

			.texto_video h3 {
				font-size: 35px !important;
				color: #4a5666 !important;
				font-family: "Mulish", sans-serif !important;
				letter-spacing: -1px !important;
			}

			.texto_servico {
				width: 283px !important;
				display: flex !important;
				flex-direction: row;
				align-items: flex-start !important;
				padding-left: 1px !important;
				justify-content: center;
			}

			.home_icon i {
				font-size: 36px !important;
				color: #4a5666 !important;
			}

			.home_icon {
				display: flex !important;
				align-items: center !important;
				justify-content: center !important;
				width: 75px;
			}

			.div_servico {
				width: 100% !important;
				height: 100% !important;
				display: flex;
				flex-direction: row;
			}

			.div_tamanho_2 {
				width: 100% !important;
				height: 760px !important;
				padding: 0px 20px !important;
				display: flex !important;
				flex-direction: column !important;
				align-items: center !important;
				justify-content: space-between !important;
			}

			.servico_texto1 p {
				font-family: "Mulish", sans-serif !important;
				font-size: 13px !important;
				color: #4a5666 !important;
				margin: 0px;
			}

			.servico_texto2 p {
				font-family: "Mulish", sans-serif !important;
				font-size: 10px !important;
				color: #4a5666 !important;
				margin: 0px;

			}

			.servico {
				height: 910px !important;
				background: #d7e8ff !important;
			}

			.recomenda {
				height: 960px !important;
			}

			.titulo_servico h3 {
				font-size: 30px !important;
				color: #4a5666 !important;
				font-family: "Mulish", sans-serif !important;
				letter-spacing: -2px !important;
			}

			.div_tamanho_3 {
				width: 100% !important;
				padding: 0px 40px !important;
				height: 460px;
			}

			.div_perfil {
				background: #4a5666;
				width: 100%;
				height: 132px !important;
				border-radius: 7px;
				margin: 20px 0px !important;
			}

			.icon_perfil {
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
				width: 93px !important;
			}

			.icon_perfil i {
				font-size: 63px;
				color: #d7e8ff;
			}

			.div_textorecomenda {
				padding: 27px 20px 26px 0px !important;
				display: flex;
				flex-direction: column;
				justify-content: space-between;
				width: 240px !important;
			}

			.titulo_recomenda {
				height: 20px;
				text-align: left;
			}

			.titulo_recomenda h1 {
				margin: 0px;
				font-family: "Mulish", sans-serif !important;
				color: #fff;
				font-size: 12px;
			}

			.descricao_recomenda {
				height: max-content;
				text-align: left;
			}

			.descricao_recomenda p {
				margin: 0px;
				font-family: "Mulish", sans-serif !important;
				color: #dadadaeb;
				font-size: 10px;
			}

			.div_video {
				margin-bottom: 40px;
			}

			.div_botao2 {
				height: 135px !important;
			}

			.texto_foto {
				padding-left: 0px;
			}

			.div_foto {
				height: 200px !important;
			}

			.row_somos {
				height: 100%;
				display: flex;
				flex-direction: column;
				justify-content: space-evenly;
			}

			.foto {
				height: 560px !important;
			}

			.a_pergunta {
				width: 349px;
				padding-left: 25px;
				padding-right: 25px;
			}

			.chamada_final {
				height: 555px !important;
			}

			.texto_chamada_final {
				padding-left: 0px;
				padding-bottom: 25px;
			}

			.div_final {
				padding: 36px 23px;
			}

			.logo_dmo {
				width: 200px;
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
			}

			.numero_header {
				width: 235px;
			}

			.div-1_header {
				height: 45px;
			}

			.video_video {
				height: 194px;
			}

			.video_video2 {
				height: 188px;
			}
		}

		.info_footer {
			display: flex;
			align-items: center;
			padding: 2px;
		}

		.texto_footer {
			height: 100%;
			width: 390px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		.texto1_footer p {
			margin: 0px;
			font-family: "Mulish", sans-serif !important;
			font-size: 12px;
			color: #fff;
		}

		.texto2_footer p {
			margin: 0px;
			font-family: "Mulish", sans-serif !important;
			font-size: 12px;
			color: #fff;
		}

		.texto1_footer {
			width: 100%;
			height: 30px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		.texto2_footer {
			width: 100%;
			height: 30px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}
	</style>
</head>
<footer class="mt-auto py-3">
	<div class="container" style="background-color: #455266;display: flex;flex-direction: column;align-items: center; height: 70px;">
		<div class="texto_footer">
			<div class="texto1_footer">
				<p>Lorem ipsum dolor sit amet. Sed nemo amet - 0000</p>
			</div>
			<div class="texto2_footer">
				<p>Lorem ipsum dolor sit amet. Sed nemo</p>
			</div>
		</div>
	</div>
	<div class="whatsapp">
		<span class="bag-whatsapp-alert" style="display: block;">Podemos Ajudar?</span>
		<span class="bag-whatsapp-alert-arrow" style="display: block;"></span>
		<div class="bloco-wthats" id="whatsappbtn">
			<a href="https://api.whatsapp.com/send?phone=5516999998584&text=&source=&data=" target="_blank" data-toggle-visibility="box_whatsapp" data-show-shadow="false" class="link-whats"></a>
			<div class="aura" data-ix="new-interaction"></div>
		</div>
		<audio hidden="hidden" id="whatsapp-song">
			<source src="assets/img/WhatsApp.mp3" type="audio/mp3" />
		</audio>
	</div>
</footer>

</html>