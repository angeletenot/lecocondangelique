(function($) {


  // Smooth scroll
  function scrollToAnchor() {
    var headerHeight = $('.header').outerHeight();
    $("a[href*='#']:not([href='#'])").click(function() {
      if (
        location.hostname == this.hostname
        && this.pathname.replace(/^\//,"") == location.pathname.replace(/^\//,"")
      ) {
      var anchor = $(this.hash);
      anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) +"]");
      if ( anchor.length ) {
        $("html, body").animate( { scrollTop: anchor.offset().top - 60 }, 500);
      }
    }
    });
  
    /*if (location.hash){
      var id = $(location.hash);
    }
    $(window).load(function() {
      if (location.hash){
        $('html,body').animate({scrollTop: id.offset().top - headerHeight }, 1000)
      };
    });*/
  }


  // Init sliders 
  function initSliders() {
    $('.js-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      prevArrow: '<div class="slick-prev"><i class="icon-slider"></i></div>',
      nextArrow: '<div class="slick-next"><i class="icon-slider"></i></div>',
      autoplay: false,
      dots: true,
      responsive: [
      {
        breakpoint: 480,
        settings: {
          dots: false,
        }
      }
    ]
    });

    $('.js-testimonies-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      prevArrow: '<div class="slick-prev"><i class="icon-slider"></i></div>',
      nextArrow: '<div class="slick-next"><i class="icon-slider"></i></div>',
      autoplay: false,
      dots: false,
      responsive: [
      {
        breakpoint: 480,
        settings: {
          dots: false,
        }
      }
    ]
    });
  }


  // INIT
  $(document).ready(function() {
    scrollToAnchor();
    initSliders();
  });

})( jQuery );
