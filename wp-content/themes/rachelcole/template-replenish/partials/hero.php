
<section class="replenish-hero" id="top">
  <img class="placeholder" src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_hero-tiny.jpg" alt="Tiny Filler">
  <div class="hero-wrapper bg-img">
    <div class="welcome">
      <img class="img-responsive logo" src="<?php bloginfo('template_url')?>/template-replenish/assets/img/logo-hero.png" alt="Replenish - <?php the_field('tagline'); ?>">
      <?php
      if(get_field('tagline')) {
        echo '<h2>';
        the_field('tagline');
        echo '</h2>';
      }
      ?>
      <p>from Rachel W. Cole</p>
    </div>
  </div>
</section>
