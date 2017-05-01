<section class="section12 bg-img">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1">

        <?php if(get_field('testimonials')) : ?>
          <div class="js-testimonial-slider slider">
          <?php while(has_sub_field('testimonials')) : ?>
          <div class="item">
            <blockquote>
              <p><?php the_sub_field('content'); ?></p>
              <footer><?php the_sub_field('source'); ?></footer>
            </blockquote>
          </div>

          <?php endwhile; ?>
          </div><!-- /slider -->
        <?php endif; ?>
      </div>
    </div>
  </div><!-- /container -->
</section>