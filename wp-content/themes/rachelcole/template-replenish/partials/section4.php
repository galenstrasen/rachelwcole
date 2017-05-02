<section class="section4 collage">
  <div class="collage-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
          <?php if(get_field('left_content4')) { the_field('left_content4'); } ?>
        </div>
        <div class="col-sm-6 col-sm-offset-0 col-xs-7 col-xs-offset-2">
          <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_1.jpg" class="img-responsive" alt="How Replinish Came to Be" />
        </div>
      </div>
    </div><!-- /container -->
  </div><!-- /collage-section -->

  <div class="collage-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-0 col-xs-7 col-xs-offset-3">
          <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_2.jpg" class="img-responsive collage-img-2" alt="Wedding Day" />
        </div>
        <div class="col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
          <?php if(get_field('right_content4')) { the_field('right_content4'); } ?>
        </div>

      </div>
    </div><!-- /container -->
  </div><!-- /collage-section -->
  <div class="container-fluid">
      <div class="row">
      <div class="col-md-10 col-md-offset-1 col-xs-12">
        <?php
        if(get_field('bottom_content4')) {
          echo '<p class="lead text-center">';
          the_field('bottom_content4');
          echo '</p>';
        }
        ?>

      </div>
    </div>
  </div>
</section>