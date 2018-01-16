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
	<div class="main-content">
		<!-- start -->
		<section>
			<div class="container-fluid coloured_bg--product-smaller">
				<div class="container">
					<div class="topBanner">
						<h1 class="title-underline">Contactos</h1>
						<!-- <img src="https://dummyimage.com/1920x214/cccccc/fff" title="https://dummyimage.com/1920x214/cccccc/fff" class="img-responsive"> -->
						<div style="background-image: url('https://dummyimage.com/1920x214/cccccc/fff');" class="image"></div>
					</div>
				</div>
		</section>
		<!-- start contact side text + form -->
		<section>
			<div class="row">
				<div class="contact">
					<div class="container">
						<div class="row">


							<!-- form -->
							<div class="col-md-5 col-md-offset-1 col-xs-12 col-xs-offset-0 contact--form fright">
								<h3>Deixe-nos uma mensagem</h3>
								<form action="#">
									<div class="warnings">
										<div class="success">
											<span>A sua mensagem foi enviada com sucesso.</span>
											<span class="word-underline--warnings">Obrigado</span>
										</div>
									</div>
									<div class="warnings">
										<div class="error">
											Por favor, preencha corretamente os
											<span class="word-underline--warnings">campos assinalados</span>
										</div>
									</div>
									<input type="text" name="" placeholder="*Nome" required>
									<input type="text" name="" placeholder="*Contacto" required>
									<input type="text" name="" placeholder="*Email" required>

									<div class="custom-select">

										<select name="pais">
											<option>Portugal</option>
											<option value="Espanha">Espanha</option>
											<option value="Austrália">Austrália</option>
											<option value="França">França</option>
											<option value="Itália">Itália</option>
										</select>
									</div>

									<input type="text" name="" placeholder="Assunto">
									<textarea name="mensagem" name="" placeholder="Mensagem"></textarea>
									<a href="#" class="btn btn--gray">Enviar mensagem</a>
								</form>
							</div>

							<!-- address -->
							<div class="col-md-4 col-md-offset-1 col-xs-12 col-xs-offset-0 address">
								<div class="highlight_txt--big">Entre em contacto connosco sempre que precisar.</div>
								<h3>morada</h3>
								<h4>Amorim Investimentos S.A.</h4>
								<p>Rua de Meladas, Nº 380</p>
								<p>Apartado 20</p>
								<p>4536-902 Mozelos</p>
								<p>Portugal</p>
								<h3>Telefone</h3>
								<p>+351 227 475 400</p>
								<h3>Fax</h3>
								<p>+351 227 475 410</p>
								<h3>Email</h3>
								<p>amorim@amorim.com</p>
								<h3>GPS</h3>
								<p>40º 59' 24.11" N</p>
								<p>8º 34' 51.21" W</p>
							</div>


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