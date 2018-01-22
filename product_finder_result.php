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

    <div class="main-content --result-page">

    <?php include 'reset_choices.php' ?>

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
        <div class="mask-filter"></div>
        <section>
            <div class="container">
                <div class="product_list">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="items-inline">
                                <p class="hidden-xs">
                                    Encontrámos estes produtos para si
                                </p>
                                <span class="line"></span>
                                <div class="btn--filter fright">
                                    <a href="#" alt="Filtrar" class="btn btn--gray" data-toggle="popup-filter" id="reset_choices">
                                        <i class="fa fa-filter" aria-hidden="true"></i>
                                         Redifinir Escolhas?</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
                        <div class="product_list--each__image">
                            <img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">

                            <!-- <div class="image--under"></div> -->
                        </div>
                        <p>Limestone Rusty</p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
                        <div class="product_list--each__image">
                            <img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">

                            <!-- <div class="image--under"></div> -->
                        </div>
                        <p>Limestone Rusty</p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
                        <div class="product_list--each__image">
                            <img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">

                            <!-- <div class="image--under"></div> -->
                        </div>
                        <p>Limestone Rusty</p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
                        <div class="product_list--each__image">
                            <img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">

                            <!-- <div class="image--under"></div> -->
                        </div>
                        <p>Limestone Rusty</p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
                        <div class="product_list--each__image">
                            <img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">

                            <!-- <div class="image--under"></div> -->
                        </div>
                        <p>Limestone Rusty</p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 product_list--each">
                        <div class="product_list--each__image">
                            <img src="assets/img/product1.jpg" class="img-responsive" title="Product 1">

                            <!-- <div class="image--under"></div> -->
                        </div>
                        <p>Limestone Rusty</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="popup-filter">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
                        <div class="product_finder--container --swiper">
                            <a href="#" title="close" class="close"></a>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-xs-12 cool-xs-offset-0'">
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
                                                    <div class="form_line--selection">
                                                        <div class="selection__item">
                                                            <input type="radio" name="radio-group" id="cortica">
                                                            <label for="cortica">cortica</label>
                                                        </div>
                                                        <div class="selection__item">
                                                            <input type="radio" name="radio-group" id="madeira" checked="checked">
                                                            <label for="madeira">madeira</label>
                                                        </div>
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
                                                    <strong>Que tipo de Visual procura?</strong>
                                                    <div class="form_line--selection">
                                                        <div class="selection__item">
                                                            <input type="radio" name="radio-group" id="cortica">
                                                            <label for="cortica">cortica</label>
                                                        </div>
                                                        <div class="selection__item">
                                                            <input type="radio" name="radio-group" id="madeira" checked="checked">
                                                            <label for="madeira">madeira</label>
                                                        </div>
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
                                                    03
                                                </div>
                                                <div class="swiper-slide__form form_line">
                                                    <strong>Que tipo de Visual procura?</strong>
                                                    <div class="form_line--selection">
                                                        <div class="selection__item">
                                                            <input type="radio" name="radio-group" id="cortica">
                                                            <label for="cortica">cortica</label>
                                                        </div>
                                                        <div class="selection__item">
                                                            <input type="radio" name="radio-group" id="madeira" checked="checked">
                                                            <label for="madeira">madeira</label>
                                                        </div>
                                                        <div class="selection__item">
                                                            <input type="radio" name="radio-group" id="pedra" checked="checked">
                                                            <label for="pedra">pedra</label>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="btn btn--lightGray">Continuar</a>
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
   
</body>

</html>