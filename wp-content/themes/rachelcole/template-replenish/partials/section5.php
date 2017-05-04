<section class="section5 bg-darken collage" id="schedule">
  <div class="collage-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-xs-12">

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
            <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image-collage_3.jpg" class="mobile-img sched visible-xs img-responsive" alt="How Replinish Came to Be" />
            </section>
            <?php
          endif;
          ?>

        </div><!-- /col -->
        <div class="col-sm-6 hidden-xs">
          <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image-collage_3.jpg" class="top-margin img-responsive" alt="How Replinish Came to Be" />
        </div>
      </div>
    </div><!-- /container -->
  </div><!-- /collage-section -->
  <div class="collage-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-offset-0 col-sm-6 col-xs-offset-5 col-xs-7 special-col">
          <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image-collage_4.jpg" class="left-lg-img img-responsive" alt="Group Activities" />
        </div><!-- /col -->
        <div class="col-sm-6 col-xs-10">
          <div class="right-content">
            <?php if(get_field('right_content5')) { the_field('right_content5'); } ?>
          </div>
        </div>

      </div>
    </div><!-- /container -->
  </div><!-- /collage-section -->
</section>