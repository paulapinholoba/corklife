//Chamar todas as funções relacionadas com tamanhos para tomarem alterações no resize
function resizableElements(viewport) {

}

//Chamar todas as funções iniciais, esperando pelas imagens serem carregadas
(function ($, viewport) {
  $(document).ready(function () {
    $('body').waitForImages(function () {
      resizableElements(viewport);

      $('.menu--hamb').click(function () {
        $(this).parent().toggleClass("active");

        $(".top-right").toggleClass("absolute");
      });

      $(".tabela_particip li a").click(function (e) {
        e.preventDefault();
        $(this).parent().toggleClass("selected");
      });




      carousel();
      smoothScroll('nav a', 0);


      // if ($(window).width() >= 1300) {
      //HOMEPAGE
      $(".my-carousel--home").css("height", $(window).outerHeight(true));
      $(".my-carousel--home .owl-stage-outer").css("height", $(window).outerHeight(true));
      $(".my-carousel--home .owl-stage").css("height", $(window).outerHeight(true));
      $(".my-carousel--home .owl-item").css("height", $(window).outerHeight(true));
      $(".my-carousel--home .owl-item .item").css("height", $(window).outerHeight(true));
      $(".cards .content").css("height", 'calc(100% - ' + $('.cards img').outerHeight(true) + 'px)');
      // }

      if ($(window).width() >= 1200) {
        centered_content();

        $(".my-carousel--home .owl-item .item").css("height", $(window).outerHeight(true));
        $(".cards .content").css("height", 'calc(100% - ' + $('.cards img').outerHeight(true) + 'px)');
      }
      // else {
      //   showMoreText(".text", ".keep-reading");
      // }

      $(".text__overflow-open").click(function (e) {
        e.preventDefault();
        $(this).prev().css({
          'maxHeight': 'none'
        });
        $(this).hide();
      });

      $(".text__overflow-close").click(function (e) {
        e.preventDefault();
        $(this).parent().css({
          'maxHeight':'135px'
        });
        $(this).parent().next().show();
      });

      $(".filters__link").click(function (e) {
        e.preventDefault();
        $(".filters").toggleClass("open");
        return false;
      });
      //FORM
      $(".botao--submit_cv").click(function (e) {
        e.preventDefault();
        $("#file_cv").click();
      });

      $(".select").click(function (e) {
        $(this).find('select').change(function () {
          $(this).parent().find('input').val($(this).val());
        });
      });


      if ($(".template-index").length) {
        $("nav").addClass("nav--home");
      } else {
        $("nav").removeClass("nav--home");
      }


      $(".full-mode").click(function (e) {
        e.preventDefault();
        $(".fullscreen-mode").addClass("open");
      });

      $(".fullscreen-mode .close").click(function (e) {
        e.preventDefault();
        $(".fullscreen-mode").removeClass("open");
      });

      $(".percentage__bar-fill").each(function () {
        $(this).css("height", $(this).attr("data-value"));
      });

      $(".see-map").click(function () {
        var target = $(this).attr("href");
        // alert(target);
        $(target).addClass("open");
      });




    });
  });
})(jQuery, ResponsiveBootstrapToolkit);

//Vai chamar a função que possui todas as funções associadas ao resize
(function ($, viewport) {
  $(window).resize(function () {
    resizableElements(viewport);

  });
})(jQuery, ResponsiveBootstrapToolkit);

//Caso se pretenda aplicar um fadeOut ao body antes de todo se carregar
$(window).load(function () {
  $('body').waitForImages(function () {
    if ($(window).width() >= 1200) {
      // showMoreText(".text",".keep-reading");
    }
  });
});

function carousel() {
  $('.my-carousel').owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    nav: true,
    navText: "",
    dots: true,
    animateIn: 'fadeIn', // add this
    animateOut: 'fadeOut',
    transitionStyle: "fade",
    autoPlay: true

  });

  $('.my-carousel-second').owlCarousel({
    items: 4,
    loop: false,
    margin: 20,
    nav: true,
    navText: "",
    dots: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 4,
      }
    }
  });


  $(".internacionalizacao").owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    nav: true,
//    navText: "",
    animateIn: 'fadeIn', // add this
   animateOut: 'fadeOut',
    transitionStyle: "fade",
    autoPlay: true,
    mouseDrag: false,
    dots: false,
    navContainer: '.nav-container',
    smartSpeed:1
  });

}

function centered_content() {

  var centered = $('.centered_content').outerHeight(true);
  var totalHeight = centered / 2;

  console.log(totalHeight);
  $('.center_vertical').css('height', centered + 'px');

}