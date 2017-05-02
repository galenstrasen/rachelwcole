<section class="section5 bg-darken collage" id="schedule">
  <div class="collage-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-sm-7 col-xs-6">
        <?php if(get_field('days')) :
            $count = 1; ?>
            <h3>Schedule*</h3>
            <section class="schedule">
            <?php while(has_sub_field('days')) :
              if($count % 2 == 0) { $colClass =  'col-sm-7 col-sm-offset-5 col-xs-12'; }
              else { $colClass =  'col-sm-7 col-xs-12'; } ?>
              <div class="row">
                <div class="<?php echo $colClass; ?>">
                  <?php if(get_sub_field('header')) {
                    echo '<h4>';
                    the_sub_field('header');
                    echo '</h4>';
                  } ?>
                  <?php if(get_sub_field('events')) {
                    echo '<ul>';
                    while(has_sub_field('events')) {
                      ?>
                      <li><?php the_sub_field('event_text'); ?></li>
                      <?php
                    }
                    echo '</ul>';
                  } ?>
                </div><!-- /col -->
              </div><!-- /row -->
              <?php
              $count++;
            endwhile; ?>
            </section>
            <?php
          endif;
          ?>

        </div><!-- /col -->
        <div class="col-md-6 col-sm-5 col-xs-6">
          <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_3.jpg" class="top-margin img-responsive" alt="How Replinish Came to Be" />
        </div>
      </div>
    </div><!-- /container -->
  </div><!-- /collage-section -->
  <div class="collage-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-offset-0 col-xs-offset-2 col-xs-6">
          <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_4.jpg" class="img-responsive" alt="" />
        </div><!-- /col -->
        <div class="col-sm-6 col-xs-10">
          <div class="right-content">
            <?php if(get_field('right_content5')) { the_field('right_content5'); } ?>
            <p><em>*Subject to change</em></p>
          </div>
        </div>

      </div>
    </div><!-- /container -->
  </div><!-- /collage-section -->
</section>