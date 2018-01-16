//Chamar todas as funÃ§Ãµes relacionadas com tamanhos para tomarem alteraÃ§Ãµes no resize
function resizableElements(viewport) {

}

//Chamar todas as funÃ§Ãµes iniciais, esperando pelas imagens serem carregadas
(function ($, viewport) {
  $(document).ready(function () {
    $('body').waitForImages(function () {
      resizableElements(viewport);

      $('.menu--hamb').click(function () {
        $("header").toggleClass("active");

      });

      $('.custom-select select').select2({
        placeholder: 'Raio: 30 km',
        minimumResultsForSearch: Infinity
      });

      carousel();

      toggleItems();

      var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        slidesPerView: 'auto',
        allowSlidePrev: false
      });

    });
  });


})(jQuery, ResponsiveBootstrapToolkit);

//Vai chamar a funÃ§Ã£o que possui todas as funÃ§Ãµes associadas ao resize
(function ($, viewport) {
  $(window).resize(function () {
    resizableElements(viewport);

    $(".main-content").css("margin-top", $("header").outerHeight(true) - 1);
    if($(window).width() > 1024){
      $(".product_detail__slider").css("height", $(".max-height").outerHeight(true));
      $(".product_detail__slider .my-carousel img").css("height", $(".max-height").outerHeight(true) + 8);
      $(".product_detail__slider .my-carousel .owl-item").css("height", $(".max-height").outerHeight(true));
    }

  });
})(jQuery, ResponsiveBootstrapToolkit);

//Caso se pretenda aplicar um fadeOut ao body antes de todo se carregar
$(window).load(function () {
  $('body').waitForImages(function () {

  });
});

// lazyload script from https://jsfiddle.net/tcloninger/e5qaD/
$(document).ready(function () {
  $(".main-content").css("margin-top", $("header").outerHeight(true) - 1);


if($(window).width() > 1024){
  $(".product_detail__slider").css("height", $(".max-height").outerHeight(true));
  $(".product_detail__slider .my-carousel img").css("height", $(".max-height").outerHeight(true) + 8);
  $(".product_detail__slider .my-carousel .owl-item").css("height", $(".max-height").outerHeight(true));
}

  /* Every time the window is scrolled ... */
  $(window).scroll(function () {

    /* Check the location of each desired element */
    $('.hideme').each(function (i) {

      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      /* If the object is completely visible in the window, fade it it */
      if (bottom_of_window > (bottom_of_object - ($(this).outerHeight() / 2))) {

        // $(this).animate({'opacity':'1'},500);

        $(this).addClass('show');

      }

    });

  });

});

function toggleItems() {
  // show and hide the search window
  $("#search-filter").click(function () {
    $(".top-search-filter").show();
    $(".mask-filter").addClass('bg-overlay');
  });

  $(".top-search-filter .close").click(function () {
    $(".top-search-filter").hide();
    $(".mask-filter").removeClass('bg-overlay');
  });

  $(".mask-filter").click(function () {
    $(".top-search-filter").hide();
    $(this).removeClass('bg-overlay');
  });

  // show and hide the filter's window
  $("#showfilters").click(function () {
    $(".product_filter").show();
    $(".mask-filter").addClass('bg-overlay');
  });

  $(".product_filter .close").click(function () {
    $(".product_filter").hide();
    $(".mask-filter").removeClass('bg-overlay');
  });

  $(".mask-filter").click(function () {
    $(".product_filter").hide();
    $(this).removeClass('bg-overlay');
  });

  // product detail slider
  $(".product_detail__slider .btn-open").click(function(e){
    $(this).parent().toggleClass("active");
    return false;
  });

  $(".--result-page #showfilters").click(function(e){
    var target = $(this).attr("data-toggle");

    $("." + target).addClass("active");
  });

  $(".--result-page .mask-filter").click(function () {
    $(".popup-filter").removeClass("active");
    $(this).removeClass('bg-overlay');
  });

  $(".--result-page .popup-filter .close").click(function () {
    $(".popup-filter").removeClass("active");
    $(".mask-filter").removeClass('bg-overlay');
  });

  $(".graphs_block--item a").click(function(e){
    $(".graphs_block--item").removeClass("selected");
    $(this).parent().addClass("selected");
  });

}


// customize select input
$(".select").click(function (e) {
  $(this).find('select').change(function () {
    $(this).parent().find('input').val($(this).val());
  });
});

// double range for search
$(function () {
  $("#slider-range").slider({
    range: true,
    min: 0,
    max: 10,
    values: [0, 10],
    slide: function (event, ui) {
      $("#amount").val(ui.values[0] + " mm - " + ui.values[1] + " mm");
    }
  });
  $("#amount").val("mm - " + $("#slider-range").slider("values", 0) + $("#slider-range").slider("values", 1) +
    " mm");
});


// settings for owl carousel
function carousel() {

  $('.main_slider').on('initialized.owl.carousel', function (event) {
    //alert("teste");
    $(".main_slider .owl-item.active .main_slider--image").addClass("enter");
    setTimeout(function () {
      $(".main_slider .owl-item.active .main_slider--image div").addClass('show');
    }, 500);

    setTimeout(function () {
      $(".main_slider .owl-item.active .main_slider--content").addClass("animated fadeIn");
    }, 1000);
  });


  var homeOwl = $('.my-carousel-home').owlCarousel({
    items: 1,
    animateIn: 'fadeIn', // add this
    animateOut: 'fadeOut', // and this
    loop: true,
    margin: 0,
    nav: false,
    navText: '',
    dots: true,
    autoPlay: true,
    mouseDrag: false,
    touchDrag: false,
    addClassActive: true,
    smartSpeed: 500,
    responsiveClass: true,
    responsive: {
      0: {
        margin: 30,
      },
      600: {
        margin: 30,
      },
      1000: {
        margin: 0,
      }
    }
  });

  $('.home-owl-pag .owl-prev').click(function(){
    owlTransition();
    setTimeout(function(){
      $(".main_slider .owl-item.active .main_slider--image .image").css({'visibility': 'hidden'});
    }, 500);
    setTimeout(function(){
      $(".main_slider .owl-item.active .main_slider--image .image").css({'visibility': 'visible'});
      $(".main_slider .owl-item.active").removeClass('leave');
      homeOwl.trigger('prev.owl.carousel');
    }, 1000);
  });

  $('.home-owl-pag .owl-next').click(function(){
    owlTransition();
    setTimeout(function(){
      $(".main_slider .owl-item.active .main_slider--image .image").css({'visibility': 'hidden'});
    }, 500);
    setTimeout(function(){
      $(".main_slider .owl-item.active .main_slider--image .image").css({'visibility': 'visible'});
      $(".main_slider .owl-item.active").removeClass('leave');
      homeOwl.trigger('next.owl.carousel');
    }, 1000);
  });
  
  function owlTransition() {
    $(".main_slider .owl-item.active").addClass('leave');
    $(".main_slider .owl-item.active .main_slider--image").removeClass("enter");
    $(".main_slider .owl-item.active .main_slider--image .image").removeClass("show");
    $(".main_slider .owl-item.active .main_slider--content").removeClass("animated fadeIn");
  }

  homeOwl.on('changed.owl.carousel', function (event) {

    setTimeout(function () {
      $(".main_slider .owl-item.active .main_slider--image").addClass("enter");
    }, 50);
    setTimeout(function () {
      $(".main_slider .owl-item.active .main_slider--image .image").addClass("show");
    }, 500);

    setTimeout(function () {
      $(".main_slider .owl-item.active .main_slider--content").addClass("animated fadeIn");
    }, 1000);

  });




  $('.my-carousel-22').owlCarousel({
    items: 1,
    animateIn: 'fadeIn', // add this
    animateOut: 'fadeOut', // and this
    loop: true,
    margin: 0,
    nav: true,
    navText: '',
    dots: true,
    autoPlay: true,
    mouseDrag: false,
    touchDrag: false,
    addClassActive: true,
    smartSpeed: 500,
    responsiveClass: true,
    responsive: {
      0: {
        margin: 30, // was 30
      },
      600: {
        margin: 130, // was 0
      },
      1000: {
        margin: 130, // was 0
      }
    }
  });


}
