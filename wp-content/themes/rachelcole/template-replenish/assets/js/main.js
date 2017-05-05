$(document).ready(function(){

    var j = jQuery.noConflict();


    $('.js-testimonial-slider').slick({
      dots: true,
      arrows: true,
      autoplay: true,
      speed: 4000,
      fade: true,
      prevArrow: '<button type="button" class="slick-arrow slick-prev"></button>',
      nextArrow: '<button type="button" class="slick-arrow slick-next"></button>'
    });


  });
  $('a[href*=#]:not([href=#]).js-scroll-to').on('click','', function( e ) {
    e.preventDefault();

    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

      if (target.length) {
        $('html,body').animate(
          { scrollTop: target.offset().top },
          { duration: 600, easing:'easeOutCubic'}
        );
        return false;
      }

    }
  });
  var pageNav = $('.js-nav');
  var topGuy = pageNav.offset().top;

  function fixNav() {
    if ( $(window).scrollTop() > topGuy) {
      pageNav.addClass('fix-me');
    }
    else {
      pageNav.removeClass('fix-me');
    }
  }


  $(window).on('scroll', function(){
    fixNav();
  });

  $(window).on('load', function(){
    fixNav();
  });
