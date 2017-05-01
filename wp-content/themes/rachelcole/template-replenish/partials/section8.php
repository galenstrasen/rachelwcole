<section class="section8 bg-sage-darken room-info">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-6">
        <figure class="room">
          <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_7.jpg" class="img-responsive" alt="Replinish - Casa Espero Guest House Room">
        </figure>
        <figure class="room">
          <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_8.jpg" class="img-responsive" alt="Replinish - Casa Espero Guest House Room">
        </figure>
      </div>

      <div class="col-xs-6">
        <div class="intro">
          <header>
            <?php if(get_field('header8')) { echo '<h4>'.get_field('header8').'</h4>'; } ?>
            <?php if(get_field('sub_title8')) { echo '<p><em>'.get_field('sub_title8').'</em></p>'; } ?>
          </header>
          <?php if(get_field('description8')) { echo '<p>'.get_field('description8').'</p>'; } ?>
        </div><!-- /intro -->
        <?php if(get_field('pricing_details8')) { the_field('pricing_details8'); } ?>

      </div><!-- /col -->
    </div>
  </div><!-- /container -->
</section>