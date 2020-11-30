(function($) {

// Déclarer les fonction ici

  function menuClass() {
    $('.menu-item').has('.sub-menu').addClass('has-submenu');
  }

  function showSubmenu() {
    $('.menu-item').hover(
      function() {
        $(this).children('.sub-menu').addClass('is-active'); 
      }, function() {
         $(this).children('.sub-menu').removeClass('is-active');
      }
    );
  }

  // EASY DROPDOWN
  function initeasydropdown() {
    easydropdown.all({
      behavior: {
        useNativeUiOnMobile: true,
        clampMaxVisibleItems: false,
        maxVisibleItems: 8
      }
    });
  }

  // Submit on change
  function submitOnChange() {
    $('.js-autosubmit').change(function() {
      this.submit();
    });
  };

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

  // Show searchform 
  function toggleSearchForm() {
    var toggle = $('.search-toggle');
    var searchform = $('.search-popup');
    toggle.on("click", function(e) {
      searchform.toggleClass("is-active");
    });
  }

  // INIT
  $(document).ready(function() {
    menuClass();
    showSubmenu();
    initeasydropdown();
    submitOnChange();
    scrollToAnchor();
    toggleSearchForm();
  });

})( jQuery );
