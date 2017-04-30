


 <section class="replenish-hero bg-img" id="top">
  <div class="welcome">
      <img class="img-responsive logo" src="<?php bloginfo('template_url')?>/template-replenish/assets/img/logo-hero.png" alt="Replenish - A Women's Retreat in Esperero Canyon">
      <?php
      if(get_field('tagline')) {
        echo '<h2>';
        the_field('tagline');
        echo '</h2>';
      }
      ?>
      <p>from Rachel W. Cole</p>
  </div>
</section>
