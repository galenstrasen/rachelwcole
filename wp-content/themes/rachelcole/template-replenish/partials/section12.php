<section class="section12 bg-img">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-xs-12">

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