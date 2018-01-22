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
	<div class="main-content product-finder-content">
		<!-- start -->
		<section>
			<div class="container-fluid coloured_bg--product-smaller">
				<div class="container">
					<div class="topBanner">
						<h1 class="title-underline">Product Finder</h1>
						<!-- <img src="https://dummyimage.com/1920x214/cccccc/fff" title="https://dummyimage.com/1920x214/cccccc/fff" class="img-responsive"> -->
						<div style="background-image: url('https://dummyimage.com/1920x214/cccccc/fff');" class="image"></div>
					</div>
				</div>
		</section>
		<!-- intro to text block -->
		<section>
			<div class="row">
				<div class="contact">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-md-offset-1 col-xs-12 col-xs-offset-0">
								<div class="highlight_txt--big">Entre em contacto connosco sempre que precisar.</div>

							</div>
							<div class="col-md-5 col-md-offset-1 col-xs-12 col-xs-offset-0">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem illum laborum rem cumque libero quaerat vero, minima
									excepturi blanditiis provident tempore nobis voluptas nostrum. Recusandae nemo distinctio veniam tempora dolorem!</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="product_finder--container --swiper">
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-xs-12 col-xs-offset-0">
									<!-- swiper code -->
									<div class="swiper-container">
										<!-- Add Pagination -->
										<div class="swiper-pagination"></div>

										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="swiper-slide__num">
													01
												</div>
												<div class="swiper-slide__form form_line">
													<strong>Que tipo de Visual procura?</strong>
													<div class="clearfix"></div>
													<div class="form_line--selection">
														<div class="selection__item">
															<input type="radio" name="radio-group" id="cortica">
															<label for="cortica">cortica</label>
														</div>
														<div class="clearfix"></div>
														<div class="selection__item">
															<input type="radio" name="radio-group" id="madeira" checked="checked">
															<label for="madeira">madeira</label>
														</div>
														<div class="clearfix"></div>
														<div class="selection__item">
															<input type="radio" name="radio-group" id="pedra" checked="checked">
															<label for="pedra">pedra</label>
														</div>
													</div>
													<a href="#" class="btn btn--lightGray">Continuar</a>
												</div>
												
											</div>
											<div class="swiper-slide">
												<div class="swiper-slide__num">
													02
												</div>
												<div class="swiper-slide__form form_line">
													<strong>Qual a tonalidade que se adequa ao seu ambiente?</strong>
													<div class="form_line--selection">
														<div class="selection__item">
															<input type="radio" name="radio-group" id="claro">
															<label for="claro">claro</label>
														</div>
														<div class="selection__item">
															<input type="radio" name="radio-group" id="medio" checked="checked">
															<label for="medio">médio</label>
														</div>
														<div class="selection__item">
															<input type="radio" name="radio-group" id="escuro" checked="checked">
															<label for="escuro">escuro</label>
														</div>
													</div>
													<a href="#" class="btn btn--lightGray">Continuar</a>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="swiper-slide__num">
													03
												</div>
												<div class="swiper-slide__form form_line">
													<strong>Como prefere que seja a aplicação?</strong>
													<div class="form_line--selection">
														<div class="selection__item">
															<input type="radio" name="radio-group" id="com_colas">
															<label for="com_colas">com colas</label>
														</div>
														<div class="selection__item">
															<input type="radio" name="radio-group" id="sem_colas" checked="checked">
															<label for="sem_colas">sem colas</label>
														</div>
													</div>
													<a href="product_finder_result.php" class="btn btn--lightGray">Finalizar</a>
												</div>
											</div>
										</div>

									</div>

								</div>
							</div>
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
	<script>
		var swiper = new Swiper('.swiper-container', {
			pagination: {
				el: '.swiper-pagination',
				type: 'progressbar',
			},
			slidesPerView: 'auto',
			allowSlidePrev: false
		});
	</script>
</body>

</html>