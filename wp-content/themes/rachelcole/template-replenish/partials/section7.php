<section class="section7 bg-sage room-info">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-xs-12">
        <div class="intro">
          <header>
            <?php if(get_field('header7')) { echo '<h4>'.get_field('header7').'</h4>'; } ?>
            <?php if(get_field('sub_title7')) { echo '<p><em>'.get_field('sub_title7').'</em></p>'; } ?>
          </header>
          <?php if(get_field('description7')) { echo '<p>'.get_field('description7').'</p>'; } ?>
        </div><!-- /intro -->
        <?php if(get_field('pricing_details7')) { the_field('pricing_details7'); } ?>
      </div><!-- /col -->

      <div class="col-sm-6 col-xs-12">
        <figure class="room">
          <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_5.jpg" class="img-responsive" alt="Replinish - Room One / Room Two">
          <figcaption>Room One / Room Two</figcaption>
        </figure>
        <figure class="room">
          <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_6.jpg" class="img-responsive" alt="Replinish - Room Three">
          <figcaption>Room Three</figcaption>
        </figure>
      </div>
    </div>
  </div><!-- /container -->
</section>