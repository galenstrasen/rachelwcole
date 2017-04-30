<section class="section4 collage">
  <div class="collage-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-6">
          <?php if(get_field('left_content4')) { the_field('left_content4'); } ?>
        </div>
        <div class="col-xs-6">
          <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_1.png" class="img-responsive" alt="How Replinish Came to Be" />
        </div>
      </div>
    </div><!-- /container -->
  </div><!-- /collage-section -->

  <div class="collage-section">
    <div class="container-fluid">
      <div class="row">
      <div class="col-xs-6">
          <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_2.png" class="img-responsive" alt="" />
        </div>
        <div class="col-xs-6">
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