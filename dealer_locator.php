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
		<!-- start top banner -->
		<section>
			<div class="container-fluid coloured_bg--product-smaller">
				<div class="container">
					<div class="topBanner">
						<h1 class="title-underline">Onde Comprar</h1>
						<!-- <img src="https://dummyimage.com/1920x214/cccccc/fff" title="https://dummyimage.com/1920x214/cccccc/fff" class="img-responsive"> -->
						<div style="background-image: url('https://dummyimage.com/1920x214/cccccc/fff');" class="image"></div>
					</div>
				</div>
		</section>


		<!-- start map + finding form -->
		<section class="hidden-xs">
			<div class="row">
				<div id="map"></div>
				<script>
					var citymap = {
						chicago: {
							center: {
								lat: 40.989383,
								lng: -8.583833
							},
							radius: 30
						},
						newyork: {
							center: {
								lat: 40.714,
								lng: -74.005
							},
							radius: 8405837
						},
						losangeles: {
							center: {
								lat: 34.052,
								lng: -118.243
							},
							radius: 3857799
						},
						vancouver: {
							center: {
								lat: 49.25,
								lng: -123.1
							},
							radius: 603502
						}
					};

					function initMap() {
						var uluru = {
							lat: 40.989383,
							lng: -8.583833
						};
						var map = new google.maps.Map(document.getElementById('map'), {
							zoom: 12,
							center: uluru,
							styles: [{
									"elementType": "geometry",
									"stylers": [{
										"color": "#f5f5f5"
									}]
								},
								{
									"elementType": "labels.icon",
									"stylers": [{
										"visibility": "off"
									}]
								},
								{
									"elementType": "labels.text.fill",
									"stylers": [{
										"color": "#858585"
									}]
								},
								{
									"elementType": "labels.text.stroke",
									"stylers": [{
										"color": "#f5f5f5"
									}]
								},
								{
									"featureType": "administrative.land_parcel",
									"elementType": "labels.text.fill",
									"stylers": [{
										"color": "#bdbdbd"
									}]
								},
								{
									"featureType": "landscape.natural",
									"elementType": "geometry.fill",
									"stylers": [{
										"color": "#efebe5"
									}]
								},
								{
									"featureType": "poi",
									"elementType": "geometry",
									"stylers": [{
										"color": "#eeeeee"
									}]
								},
								{
									"featureType": "poi",
									"elementType": "labels.text.fill",
									"stylers": [{
										"color": "#757575"
									}]
								},
								{
									"featureType": "poi.park",
									"elementType": "geometry",
									"stylers": [{
										"color": "#e5e5e5"
									}]
								},
								{
									"featureType": "poi.park",
									"elementType": "labels.text.fill",
									"stylers": [{
										"color": "#9e9e9e"
									}]
								},
								{
									"featureType": "road",
									"elementType": "geometry",
									"stylers": [{
										"color": "#ffffff"
									}]
								},
								{
									"featureType": "road.arterial",
									"elementType": "geometry.fill",
									"stylers": [{
											"color": "#ffffff"
										},
										{
											"weight": 0.5
										}
									]
								},
								{
									"featureType": "road.arterial",
									"elementType": "labels.text.fill",
									"stylers": [{
										"color": "#757575"
									}]
								},
								{
									"featureType": "road.highway",
									"elementType": "geometry",
									"stylers": [{
										"color": "#dadada"
									}]
								},
								{
									"featureType": "road.highway",
									"elementType": "geometry.fill",
									"stylers": [{
											"color": "#cdc0b1"
										},
										{
											"weight": 1
										}
									]
								},
								{
									"featureType": "road.highway",
									"elementType": "labels.text.fill",
									"stylers": [{
										"color": "#616161"
									}]
								},
								{
									"featureType": "road.local",
									"elementType": "labels.text.fill",
									"stylers": [{
										"color": "#9e9e9e"
									}]
								},
								{
									"featureType": "transit.line",
									"elementType": "geometry",
									"stylers": [{
										"color": "#e5e5e5"
									}]
								},
								{
									"featureType": "transit.station",
									"elementType": "geometry",
									"stylers": [{
										"color": "#eeeeee"
									}]
								},
								{
									"featureType": "water",
									"elementType": "geometry",
									"stylers": [{
										"color": "#c9c9c9"
									}]
								},
								{
									"featureType": "water",
									"elementType": "geometry.fill",
									"stylers": [{
										"color": "#cee1ec"
									}]
								},
								{
									"featureType": "water",
									"elementType": "labels.text.fill",
									"stylers": [{
										"color": "#9e9e9e"
									}]
								}
							]
						});
						// Construct the circle for each value in citymap.
						// Note: We scale the area of the circle based on the population.
						for (var city in citymap) {
							// Add the circle for this city to the map.
							var cityCircle = new google.maps.Circle({
								strokeColor: '#858585',
								strokeOpacity: 0.2,
								strokeWeight: 1,
								fillColor: '#858585',
								fillOpacity: 0.1,
								map: map,
								center: citymap[city].center,
								radius: Math.sqrt(citymap[city].radius) * 1000
							});
						}
						var marker = new google.maps.Marker({
							position: uluru,
							map: map,
							icon: 'assets/img/marker.png',
							title: "Nome da Loja #23"
						});
						// customize infowindow
						// InfoWindow content
						var content = '<div id="iw-container">' +
							'<div class="iw-title">Nome da Loja #23</div>' +
							'<div class="iw-content">' +
							//'<div class="iw-subTitle">History</div>' +
							//'<img src="http://maps.marnoto.com/en/5wayscustomizeinfowindow/images/vistalegre.jpg" alt="Nome da Loja #23" height="115" width="83">' +
							// '<p>Founded in 1824, the Nome da Loja #23 was the first industrial unit dedicated to porcelain production in Portugal. For the foundation and success of this risky industrial development was crucial the spirit of persistence of its founder, José Ferreira Pinto Basto. Leading figure in Portuguese society of the nineteenth century farm owner, daring dealer, wisely incorporated the liberal ideas of the century, having become "the first example of free enterprise" in Portugal.</p>' +
							// '<div class="iw-subTitle">Contacts</div>' +
							'<p>Largo Luís de Camões, Edifício<br>' +
							'<br>Rainha, Piso 12<br>' +
							'<br>3720-232 Oliveira de Azeméis<br>' +
							'<br>Portugal</p>' +
							'</div>' +
							'<div class="iw-contacts">' +
							'<h5>T.</h5>' +
							'<p>+351 256 197 889</p><br>' +
							'<h5>E.</h5>' +
							'<p>comercial@loba.pt</p>' +
							'</div>' +
							// '<div class="iw-bottom-gradient"></div>' +
							'</div>';

						// A new Info Window is created and set content
						var infowindow = new google.maps.InfoWindow({
							content: content,

							// Assign a maximum value for the width of the infowindow allows
							// greater control over the various content elements
							maxWidth: 350
						});

						// marker options
						//   var marker = new google.maps.Marker({
						//     position: factory,
						//     map: map,
						//     title:"Nome da Loja #23"
						//   });

						// This event expects a click on a marker
						// When this event is fired the Info Window is opened.
						google.maps.event.addListener(marker, 'click', function () {
							infowindow.open(map, marker);
						});

						// Event that closes the Info Window with a click on the map
						google.maps.event.addListener(map, 'click', function () {
							infowindow.close();
						});

						// *
						// START INFOWINDOW CUSTOMIZE.
						// The google.maps.event.addListener() event expects
						// the creation of the infowindow HTML structure 'domready'
						// and before the opening of the infowindow, defined styles are applied.
						// *
						google.maps.event.addListener(infowindow, 'domready', function () {

							// Reference to the DIV that wraps the bottom of infowindow
							var iwOuter = $('.gm-style-iw');

							/* Since this div is in a position prior to .gm-div style-iw.
							 * We use jQuery and create a iwBackground variable,
							 * and took advantage of the existing reference .gm-style-iw for the previous div with .prev().
							 */
							var iwBackground = iwOuter.prev();

							// Removes background shadow DIV
							iwBackground.children(':nth-child(2)').css({
								'display': 'none'
							});

							// Removes white background DIV
							iwBackground.children(':nth-child(4)').css({
								'display': 'none'
							});

							// Moves the infowindow 115px to the right.
							iwOuter.parent().parent().css({
								// left: '115px'
								left: '65px'
							});

							// Moves the shadow of the arrow 76px to the left margin.
							iwBackground.children(':nth-child(1)').attr('style', function (i, s) {
								return s + 'left: 76px !important;'
							});

							// Moves the arrow 76px to the left margin.
							iwBackground.children(':nth-child(3)').attr('style', function (i, s) {
								return s + 'left: 76px !important;'
							});

							// Changes the desired tail shadow color.
							iwBackground.children(':nth-child(3)').find('div').children().css({
								'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px',
								'z-index': '1'
							});

							// Reference to the div that groups the close button elements.
							var iwCloseBtn = iwOuter.next();

							// Apply the desired effect to the close button
							iwCloseBtn.css({
								// opacity: '1',
								opacity: '0',
								right: '38px',
								top: '3px',
								border: '7px solid #48b5e9',
								'border-radius': '13px',
								'box-shadow': '0 0 5px #3990B9'
							});

							// If the content of infowindow not exceed the set maximum height, then the gradient is removed.
							if ($('.iw-content').height() < 140) {
								$('.iw-bottom-gradient').css({
									display: 'none'
								});
							}

							// The API automatically applies 0.7 opacity to the button after the mouseout event. This function reverses this event to the desired value.
							iwCloseBtn.mouseout(function () {
								$(this).css({
									opacity: '1'
								});
							});
						});
					}
				</script>
				<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQfYLOU2ecliipXIhyMzpyYDQcCkeLIo0&callback=initMap">
				</script>
			</div>
		</section>
		<!-- start finding store form box -->

		<section>
			<!-- <div class="container"> -->
			<div class="col-md-5 col-md-offset-1 col-xs-offset-0">
				<div class="map_search">
					<div class="row">
						<div class="col-xs-12">
							<h2>Encontre os nossos produtos perto de si</h2>
							<form action="#" class="map_search--form">
								<div class="map_search--form--content">
									<input type="text" placeholder="Oliveira de Azeméis" class="search">
									<button type="button" class="btn--search">
										<i class="fa fa-arrow-right" aria-hidden="true"></i>
									</button>
								</div>
								<div class="custom-select">
									<select name="distance">
										<option>Raio: 30 km</option>
										<option value="Raio: 100 km">Raio: 100 km</option>
										<option value="Raio: 150 km">Raio: 150 km</option>
										<option value="Raio: 100 km">Raio: 100 km</option>
										<option value="Raio: 150 km">Raio: 150 km</option>

									</select>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- </div> -->
		</section>

		<!-- start stores list -->
		<section class="hideme">
			<div class="container">
				<div class="col-md-12 map--listing">
					<h2>Foram encontradas "4" lojas</h2>
					<!-- start each address' line -->
					<div class="col-md-12 map--listing--address">
						<div class="col-md-3 col-md-offset-1">
							<h3>Leroy Merlin</h3>
						</div>
						<div class="col-md-3">
							<h2>Morada</h2>
							<p>Largo Luís de Camões, Edifício Rainha, Piso 12
								<br> 3720-232 Oliveira de Azeméis
								<br> Portugal
							</p>
						</div>
						<div class="col-md-3 col-md-offset-1">
							<h2>Telefone</h2>
							<p>+351 256 197 889</p>
							<h2>Fax</h2>
							<p>+351 000 000 000</p>
						</div>
					</div>
					<!-- end each address' line -->
					<!-- start each address' line -->
					<div class="col-md-12 map--listing--address">
						<div class="col-md-3 col-md-offset-1">
							<h3>BricoMarche - Oliveira de Azeméis</h3>
						</div>
						<div class="col-md-3">
							<h2>Morada</h2>
							<p>Largo Luís de Camões, Edifício Rainha, Piso 12
								<br> 3720-232 Oliveira de Azeméis
								<br> Portugal
							</p>
						</div>
						<div class="col-md-3 col-md-offset-1">
							<h2>Telefone</h2>
							<p>+351 256 197 889</p>
							<h2>Fax</h2>
							<p>+351 000 000 000</p>
						</div>
					</div>
					<!-- end each address' line -->
					<!-- start each address' line -->
					<div class="col-md-12 map--listing--address">
						<div class="col-md-3 col-md-offset-1">
							<h3>Nome da loja #23</h3>
						</div>
						<div class="col-md-3">
							<h2>Morada</h2>
							<p>Largo Luís de Camões, Edifício Rainha, Piso 12
								<br> 3720-232 Oliveira de Azeméis
								<br> Portugal
							</p>
						</div>
						<div class="col-md-3 col-md-offset-1">
							<h2>Telefone</h2>
							<p>+351 256 197 889</p>
							<h2>Fax</h2>
							<p>+351 000 000 000</p>
						</div>
					</div>
					<!-- end each address' line -->
					<!-- start each address' line -->
					<div class="col-md-12 map--listing--address">
						<div class="col-md-3 col-md-offset-1">
							<h3>AKI - Canelas</h3>
						</div>
						<div class="col-md-3">
							<h2>Morada</h2>
							<p>Largo Luís de Camões, Edifício Rainha, Piso 12
								<br> 3720-232 Oliveira de Azeméis
								<br> Portugal
							</p>
						</div>
						<div class="col-md-3 col-md-offset-1">
							<h2>Telefone</h2>
							<p>+351 256 197 889</p>
							<h2>Fax</h2>
							<p>+351 000 000 000</p>
						</div>
					</div>
					<!-- end each address' line -->
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