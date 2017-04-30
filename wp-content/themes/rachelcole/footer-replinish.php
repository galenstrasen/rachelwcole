
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.js"></script>
<script>window.jQuery || document.write('<script src="http://feast.dev/wp-content/themes/rachelcole/assets/vendor/jquery/dist/jquery.min.js?1.11.2"><\/script>')</script>



<?php //wp_footer(); ?>

<script type="text/javascript">
  $(document).ready(function(){

    var j = jQuery.noConflict();


    $('.js-testimonial-slider').slick({
      dots: true,
      arrows: true,
      autoplay: true,

      prevArrow: '<button type="button" class="slick-arrow slick-prev"></button>',
      nextArrow: '<button type="button" class="slick-arrow slick-next"></button>'
    });


  });
</script>
</body></html>