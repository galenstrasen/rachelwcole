<section class="section15 bg-img">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
      <?php
        if(get_field('text_items15')) {
          while(has_sub_field('text_items15')) { ?>
          <p><?php the_sub_field('text'); ?></p>
          <?php
          }
        } ?>

      </div>
    </div>
  </div><!-- /container -->
</section>