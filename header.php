<!DOCTYPE html>
<html lang="pt-br" class="h-100" style="overflow-x: hidden;">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Alsite DevTeam">

	<title>TITULO DO SITE</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="//site-assets.fontawesome.com/releases/v6.1.2/css/all.css">

	<!-- build:css -->
	<link href="assets/css/app.css" rel="stylesheet">
	<!-- endbuild -->

</head>

<style>
	#main-menu ul.menu>li:hover,
	#main-menu ul.menu>li.active {
		color: #fff !important;
		background-color: #ff9600 !important;
		border-radius: 10px !important;
		display: flex;
		height: 35px;
		flex-direction: column;
		justify-content: center;
	}

	#main-menu ul.menu>li:hover,
	#main-menu ul.menu>li.active {
		color: #fff !important;
		background-color: #ff9600 !important;
		border-radius: 10px !important;
		display: flex;
		height: 35px;
		flex-direction: column;
		justify-content: center;
	}

	.header {
		color: black !important;
		font-size: 21px !important;
		text-transform: capitalize !important;
	}

	.div-1_header {
		background-color: #fff;
		height: 52px;
		max-width: 100% !important;
	}

	.div-2_header {
		height: 52px;
		display: flex;
		align-items: flex-end;
		max-width: 100% !important;
	}

	.ul-header {
		padding: 0 170px !important;
		display: flex;
		justify-content: center;
	}

	.li-header {
		display: flex;
		height: 35px;
		flex-direction: column;
		justify-content: center;
	}

	@media (max-width: 680px) {
		.header {
			font-size: 16px !important;
		}
	}

	@media (max-width: 520px) {
		.header {
			font-size: 14px !important;
			text-decoration: none;
		}

		.li-header {
			font-size: 14px !important;
			width: 87px;
		}

		.wrap_menu {
			height: 48px;
			display: flex !important;
		}
	}

	.container,
	.container-fluid,
	.container-sm,
	.container-md,
	.container-lg,
	.container-xl,
	.container-xxl {
		width: 100%;
		padding-right: 0 !important;
		padding-left: 0 !important;
		margin-right: auto;
		margin-left: auto;
	}

	header .wrap_menu {
		background-color: #a5b5c8 !important;
	}

	.wrap_menu {
		height: 60px;
		display: flex;
		align-items: flex-end;
		display: none;
	}

	.div_header {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
	}

	.numero_header {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: flex-end;
		padding-right: 38px !important;
	}

	.numero_header p {
		margin: 0px !important;
		font-family: 'Mulish', sans-serif;
		font-size: 14px;
		color: #4a5666;
	}

	.div_interna {
		width: 175px;
		background: #fff;
		height: 42px;
		border-radius: 3px;
		display: flex;
		align-items: center;
		justify-content: center;
	}
</style>


<header>

	<div id="topbar" style="background-color: #8294ae">
		<div class="container topo" style="max-width: 1060px;">
			<div class="row div_header">
				<div class="col-12 col-md-3 text-center logo_dmo">
					<a href="index.php">
						<img src="assets/img/logo_dmo.png" style="width: 100px;" alt="">
					</a>
				</div>
				<div class="col-12 col-md-3 numero_header">
					<div class="div_interna">
						<p>(16) 99999-9999</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap_menu div-1_header" id="wrap_menu" style="display: none !important;">
		<div class="container" class="div-2_header" style="max-width: 100% !important">
			<nav id="main-menu" style="background-color: #fff; height:43px" class="">
				<img class="pull-nav" src="assets/img/menu_imagem.png" alt="menu-icon" style="width: 13px;">
			</nav>
		</div>
	</div>

</header>

<div class="mobile-menu-cover"></div>
<!-- MOBILE MENU -->
<nav class="mobile-menu" style="background: #d7e8ff !important;">

	<a href="index.php">
		<img src="assets/img/logo_dmo.png" alt="logo" class="img-fluid">
	</a>

	<svg class="svg-plus pull-nav">
		<use xlink:href="#svg-plus"></use>
	</svg>

	<!-- MENU LIST -->
	<ul class="menu">
		<li class="menu-item li-header"><a href="#home" class="header">Home</a></li>
		<li class="menu-item li-header"><a href="#empresa" class="header">Empresa</a></li>
		<li class="menu-item li-header"><a href="#produtos" class="header">Produtos</a></li>
		<li class="menu-item li-header"><a href="#localizacao" class="header">Localização</a></li>
		<li class="menu-item li-header"><a href="https://wa.me/5516991720939" class="header" target="_blank">Contato</a></li>
	</ul>

	<svg style="display: none;">
		<symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
			<path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
			L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z" />
		</symbol>
	</svg>

	<svg style="display: none;">
		<symbol id="svg-plus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
			<rect x="5" width="3" height="13" />
			<rect y="5" width="13" height="3" />
		</symbol>
	</svg>

</nav>

</html>