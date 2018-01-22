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
	<div class="container col-md-8 product_filter">
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
						<input type="checkbox" id="media" checked="checked" />
						<label for="media" class="col-md-3">Média</label>
						<input type="checkbox" id="escura" />
						<label for="escura" class="col-md-3">Escura</label>
					</div>
				</div>
				<div class="row form_line">
					<div class="col-md-2">
						<h4>formato</h4>
					</div>
					<div class="col-md-9 form_line--selection">
						<input type="checkbox" id="telha" checked="checked" />
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
						<input type="checkbox" id="medias" checked="checked" />
						<label for="medias" class="col-md-3">Médias</label>
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
						<input type="radio" name="radio-group" id="sim">
						<label for="sim" class="col-md-3">Sim</label>
						<input type="radio" name="radio-group" id="nao" checked="checked">
						<label for="nao" class="col-md-3">Não</label>
					</div>
				</div>
				<a href="#" class="col-md-offset-2 btn btn--gray">Aplicar Filtros</a>
			</form>
		</div>
	</div>
	<!-- end filter -->
	<div class="main-content --info-range">
		<!-- start top banner -->
		<section>

			<div class="container-fluid coloured_bg--product--institutional">

				<div class="container">
					<div class="topBanner">
						<div class="product_approach_inst how_to-detail">
							<div class="col-md-10 col-xs-12">
								<div class="institutional_mobile">
									<div class="product_approach_inst--info">
										<h5>Corklife</h5>
										<h1>Corktech</h1>
										<p>Wood or Stone decorative in floating, glueless installation</p>
									</div>
								</div>
							</div>
						</div>
						<img src="https://dummyimage.com/1920x662/cccccc/fff" title="https://dummyimage.com/1920x662/cccccc/fff" class="img-responsive fright">
					</div>

				</div>
			</div>
		</section>
		<!-- start product listing -->

		<!-- start introdution -->
		<section>
			<div class="row">

				<div class="container --institutional">

					<div class="col-md-4 col-md-offset-1 col-xs-12 col-xs-offset-0">
						<div class="highlight_txt--big">Cortiça é sustentabilidade e inovação</div>
					</div>
					<div class="col-md-5 col-md-offset-1 col-xs-12 col-xs-offset-0">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quasi ex accusantium eos numquam minima assumenda laborum
							perferendis, ipsum, vitae recusandae odit maiores corporis. Voluptates, praesentium? Consequuntur sapiente aliquam
							quaerat!
						</p>
					</div>
				</div>

			</div>
		</section>
		<section>
			<div class="row">
				<div class="image-spaces">
					<img src="https://dummyimage.com/1900x421/cccccc/fff" title="https://dummyimage.com/1900x421/cccccc/fff" class="img-responsive">
				</div>
			</div>
		</section>
		<section>
			<div class="row">
				<div class="container --institutional">
					<div class="col-md-5 col-md-offset-1 col-xs-12 col-xs-offset-0">
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat fugiat tempora quidem, unde possimus ipsum commodi
							consequatur fugit necessitatibus odit atque quam quia magnam obcaecati, inventore id. Aperiam, magnam non!</p>
					</div>
					<div class="col-md-5 col-md-offset-0 col-xs-12 col-xs-offset-0">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus vitae facilis praesentium provident quam architecto
							nobis iste ipsa accusantium qui, doloremque debitis obcaecati beatae laborum, sed aliquid exercitationem quis blanditiis.
						</p>
					</div>
				</div>
			</div>



		</section>

		<!-- start gallery -->
		<section>
			<div class="container">
				<div class="row overflow">
					<div class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
						<div class="gallery owl-carousel owl-theme my-carousel my-carousel-22">
							<div class="item">
								<!-- horizontal -->
								<img src="https://dummyimage.com/1016x569/cccccc/000000" class="hor" alt="https://dummyimage.com/1016x569/cccccc/000000">
							</div>

							<div class="item">
								<!-- vertical -->
								<img src="https://dummyimage.com/600x640/444444/000000" class="ver" alt="https://dummyimage.com/600x640/444444/000000">
							</div>

						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- end gallery -->


		<section>
			<div class="container">
				<div class="col-md-5 col-md-offset-1 col-xs-12 col-xs-offset-0">
					<div class="image-spaces--txt">

						<h2>SOBRE A CORTIÇA</h2>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi placeat, rem itaque quae deserunt tenetur provident
							doloremque nam perferendis eos omnis beatae unde officiis consequuntur atque corrupti, officia quisquam asperiores.</p>
						<div class="two_columns">
							<div class="image_behind">
								<img src="https://dummyimage.com/474x330/cccccc/fff" alt="https://dummyimage.com/474x330/cccccc/fff" class="img-responsive">
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi placeat, rem itaque quae deserunt tenetur provident
							doloremque nam perferendis eos omnis beatae unde officiis consequuntur atque corrupti, officia quisquam asperiores.</p>
					</div>
				</div>
				<div class="col-md-5 col-md-offset-0 col-xs-12 col-xs-offset-0">
					<div class="image-spaces--txt">
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi placeat, rem itaque quae deserunt tenetur provident
							doloremque nam perferendis eos omnis beatae unde officiis consequuntur atque corrupti, officia quisquam asperiores.</p>

						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi placeat, rem itaque quae deserunt tenetur provident
							doloremque nam perferendis eos omnis beatae unde officiis consequuntur atque corrupti, officia quisquam asperiores.</p>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi placeat, rem itaque quae deserunt tenetur provident
							doloremque nam perferendis eos omnis beatae unde officiis consequuntur atque corrupti, officia quisquam asperiores.</p>
						<div class="two_columns">
							<div class="image_behind--smaller">
								<img src="https://dummyimage.com/474x298/cccccc/fff" alt="https://dummyimage.com/474x298/cccccc/fff" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- start 2 columns -->

		<div class="clearfix"></div>
		<!-- start gallery -->
		<section>
			<div class="container">
				<div class="row overflow">
					<div class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
						<div class="gallery owl-carousel owl-theme my-carousel my-carousel-22">
							<div class="item">
								<!-- horizontal -->
								<img src="https://dummyimage.com/1016x569/cccccc/000000" class="hor" alt="https://dummyimage.com/1016x569/cccccc/000000">
							</div>

							<div class="item">
								<!-- vertical -->
								<img src="https://dummyimage.com/600x640/444444/000000" class="ver" alt="https://dummyimage.com/600x640/444444/000000">
							</div>

						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- end gallery -->

		<!-- <div class="clearfix"></div>
		<div class="row">
			<div class="horizontal_line--inst"></div>
		</div> -->


		<!-- start last section -->
		<section>
			<div class="row last_container--inst">

				<div class="col-md-3 col-md-offset-2 col-xs-10 col-xs-offset-1">
					<h3>Sobre a Cortiça</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente velit ut nobis cumque, eaque expedita, laboriosam
						voluptatum omnis quae, iusto esse possimus aperiam quaerat in distinctio accusantium! Nam, quo id.</p>
					<a href="#" alt="" class="btn btn--lightGray">Saiba Mais</a>
				</div>
				<div class="vertical_line"></div>
				<div class="col-md-3 col-md-offset-2 col-xs-10 col-xs-offset-1 last">
					<h3>Sobre a Cortiça</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente velit ut nobis cumque, eaque expedita, laboriosam
						voluptatum omnis quae, iusto esse possimus aperiam quaerat in distinctio accusantium! Nam, quo id.</p>
					<a href="#" alt="" class="btn btn--lightGray">Saiba Mais</a>
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