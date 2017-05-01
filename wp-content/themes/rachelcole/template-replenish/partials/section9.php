<section class="section9 bg-darken room-info">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-6">
        <div class="intro">
          <header>
            <?php if(get_field('header9')) { echo '<h4>'.get_field('header9').'</h4>'; } ?>
            <?php if(get_field('sub_title9')) { echo '<p><em>'.get_field('sub_title9').'</em></p>'; } ?>
          </header>
          <?php if(get_field('description9')) { echo '<p>'.get_field('description9').'</p>'; } ?>
        </div><!-- /intro -->
        <?php if(get_field('pricing_details9')) { the_field('pricing_details9'); } ?>

      </div><!-- /col -->

      <div class="col-xs-6">
        <figure class="room">
          <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_9.jpg" class="img-responsive" alt="Replinish - Private Canyon Casita">

        </figure>
        <figure class="room">
          <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_10.jpg" class="img-responsive" alt="Replinish - Private Canyon Casita">

        </figure>
      </div>
    </div>
  </div><!-- /container -->
</section>