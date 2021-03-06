<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Corklife</title>
	<meta name="description" content="">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="width=device-width, initial-scale=1, user-scalable=0" name="viewport">
	<meta content="width" name="MobileOptimized">
	<meta content="true" name="HandheldFriendly">
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

	<meta name="description" content="Description PT">
	<meta property="og:site_name" content="Corklife">
	<meta property="og:url" content="http://website.dev.loba.pt/pt/">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Corklife">
	<meta property="og:description" content="Description PT">
	<meta property="og:image" content="http://website.dev.loba.pt/images/nome_da_imagem_250x250.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- inject:css -->
	<link rel="stylesheet" href="assets/vendor.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- endinject -->
</head>

<body>

	<header>

		<div class="row">
			<div class="col-md-4 col-xs-3 topBar-brown"></div>
			<div class="col-md-8 col-xs-9 topBar-blue"></div>
		</div>
		<div class="container">
			<div class="row">
				<?php include 'menu.php' ?>
			</div>
		</div>

	</header>
	<?php include 'search.php' ?>
	<!-- start filter -->
	<div class="mask-filter"></div>
	<div class="container container-absolute">
		<div class="product_filter">
			<div class="row">
				<a class="close"></a>
				<div class="col-md-10 col-md-offset-2">

					<h2>filtre os produtos de "freestyle"</h2>
					<form action="#">
						<div class="row form_line">
							<div class="col-md-2">
								<h4>visual</h4>
							</div>
							<div class="col-md-9 form_line--selection">
								<input type="radio" name="radio-group" id="cortica">
								<label for="cortica" class="col-md-3">Cortiça</label>
								<input type="radio" name="radio-group" id="madeira">
								<label for="madeira" class="col-md-3">Madeira</label>
								<input type="radio" name="radio-group" id="pedra" checked="checked">
								<label for="pedra" class="col-md-3">Pedra</label>
							</div>
						</div>
						<div class="row form_line">
							<div class="col-md-2">
								<h4>tonalidade</h4>
							</div>
							<div class="col-md-9 form_line--selection">
								<input type="checkbox" id="clara" />
								<label for="clara" class="col-md-3">Clara</label>
								<input type="checkbox" id="med" />
								<label for="med" class="col-md-3">Média</label>
								<input type="checkbox" id="produto_tonalidade_escura" />
								<label for="produto_tonalidade_escura" class="col-md-3">Escura</label>
							</div>
						</div>
						<div class="row form_line">
							<div class="col-md-2">
								<h4>formato</h4>
							</div>
							<div class="col-md-9 form_line--selection">
								<input type="checkbox" id="telha" />
								<label for="telha" class="col-md-3">Telha</label>
								<input type="checkbox" id="placa" />
								<label for="placa" class="col-md-3">Placa</label>
							</div>
						</div>
						<div class="row form_line">
							<div class="col-md-2">
								<h4>dimensões</h4>
							</div>
							<div class="col-md-9 form_line--selection">
								<input type="checkbox" id="pequenas" />
								<label for="pequenas" class="col-md-3">Pequenas</label>
								<input type="checkbox" id="med" />
								<label for="med" class="col-md-3">Médias</label>
								<input type="checkbox" id="longas" />
								<label for="longas" class="col-md-3">Longas</label>
							</div>
						</div>
						<div class="row form_line">
							<div class="col-md-2">
								<h4>espessura</h4>
							</div>
							<div class="col-md-9 form_line--selection">
								<input type="checkbox" id="3mm" />
								<label for="3mm" class="col-md-3">3mm</label>
								<input type="checkbox" id="4mm" />
								<label for="4mm" class="col-md-3">4mm</label>
								<input type="checkbox" id="6mm" />
								<label for="6mm" class="col-md-3">6mm</label>
								<input type="checkbox" id="8mm" checked="checked" />
								<label for="8mm" class="col-md-3">8mm</label>
								<input type="checkbox" id="10,5mm" checked="checked" />
								<label for="10,5mm" class="col-md-3">10,5mm</label>
								<input type="checkbox" id="15mm" />
								<label for="15mm" class="col-md-3">15mm</label>
							</div>
						</div>
						<div class="row form_line">
							<div class="col-md-2">
								<h4>garantia</h4>
							</div>
							<div class="col-md-9 form_line--selection">
								<input type="checkbox" id="5anos" />
								<label for="5anos" class="col-md-3">5 anos</label>
								<input type="checkbox" id="10anos" />
								<label for="10anos" class="col-md-3">10 anos</label>
								<input type="checkbox" id="15anos" />
								<label for="15anos" class="col-md-3">15 anos</label>
								<input type="checkbox" id="20anos" />
								<label for="20anos" class="col-md-3">20 anos</label>
								<input type="checkbox" id="25anos" checked="checked" />
								<label for="25anos" class="col-md-3">25anos</label>
								<input type="checkbox" id="lifetime" checked="checked" />
								<label for="lifetime" class="col-md-3">Lifetime</label>
							</div>
						</div>
						<div class="row form_line">
							<div class="col-md-2">
								<h4>instalação</h4>
							</div>
							<div class="col-md-9 form_line--selection">
								<input type="checkbox" id="5gfloating" checked="checked" />
								<label for="5gfloating" class="col-md-3">5G Floating</label>
								<input type="checkbox" id="pressfit" />
								<label for="pressfit" class="col-md-3">Pressfit</label>
							</div>
						</div>
						<div class="row form_line">
							<div class="col-md-2">
								<h4>waterproof</h4>
							</div>
							<div class="col-md-9 form_line--selection">
								<input type="radio" name="radio-group" id="yep">
								<label for="yep" class="col-md-3">Sim</label>
								<input type="radio" name="radio-group" id="nop">
								<label for="nop" class="col-md-3">Não</label>
							</div>
						</div>
						<a href="#" class="col-md-offset-2 btn btn--gray">Aplicar Filtros</a>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end filter -->
	<div class="main-content">
		<!-- start top banner -->
		<section>

			<div class="container-fluid coloured_bg--product_listing">

				<div class="container">

					<div class="topBanner">
						<div class="product_approach--title hidden-md">
							Produtos
						</div>
						<div class="product_approach">
							<div class="col-md-10m col-xs-12">
								<div class="product_approach--info">
									<h5 class="hidden-xs">Produtos</h5>
									<h1>Freestyle</h1>
									<p>Wood or Stone decorative in floating, glueless instalation</p>
									<a href="info_range.php" alt="Saiba mais sobre esta gama" class="btn btn--blue">Saiba mais sobre esta gama</a>
								</div>
								<div class="color_behind hidden-xs" style="background-color: #939961;"></div>
							</div>
						</div>
						<img src="https://dummyimage.com/1920x662/cccccc/fff" title="https://dummyimage.com/1920x662/cccccc/fff" class="img-responsive fright">

					</div>
				</div>
			</div>
		</section>
		<!-- start product listing -->

		<section>
			<div class="container">
				<div class="product_list">
					<div class="row">

						<div class="col-md-12">
							<div class="btn--filter fright">
								<a href="#" alt="Filtrar" class="btn btn--gray" id="showfilters">
									<i class="fa fa-filter" aria-hidden="true"></i>
									Filtrar</a>
							</div>
						</div>
					</div>
					<!-- first line with 4 images -->
					<div class="row">

						<div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
							<div class="product_list--each__image">
								<img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">
							</div>
							<p>Limestone Rusty</p>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
							<div class="product_list--each__image">
								<img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">
							</div>
							<p>Limestone Rusty Limestone Rusty</p>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
							<div class="product_list--each__image">
								<img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">
							</div>
							<p>Limestone Rusty Limestone Rusty Limestone</p>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
							<div class="product_list--each__image">
								<img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">
							</div>
							<p>Limestone Rusty</p>
						</div>
					</div>
					<!-- second line with 4 images -->
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
							<div class="product_list--each__image">
								<img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">
							</div>
							<p>Limestone Rusty</p>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
							<div class="product_list--each__image">
								<img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">
							</div>
							<p>Limestone Rusty</p>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
							<div class="product_list--each__image">
								<img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">
							</div>
							<p>Limestone Rusty</p>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
							<div class="product_list--each__image">
								<img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">
							</div>
							<p>Limestone Rusty</p>
						</div>
					</div>
					<!-- third line with 4 images -->
					<div class="row">

						<div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
							<div class="product_list--each__image">
								<img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">

							</div>
							<p>Limestone Rusty</p>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
							<div class="product_list--each__image">
								<img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">


							</div>
							<p>Limestone Rusty</p>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
							<div class="product_list--each__image">
								<img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">

							</div>
							<p>Limestone Rusty</p>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
							<div class="product_list--each__image">
								<img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">


							</div>
							<p>Limestone Rusty</p>
						</div>
					</div>
					<!-- it's the end of 12 images and now load more images  -->
					<div class="row">
						<div class="col-xs-12 text-center">
							<a href="#" class="btn btn--gray" alt="Ver mais produtos">Ver mais produtos</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- footer -->
	<?php include 'footer.php' ?>


	<!-- inject:js -->
	<script src="assets/vendor.min.js"></script>
	<script src="assets/js/functions.js"></script>
	<script src="assets/js/main.js"></script>
	<!-- endinject -->
</body>

</html>