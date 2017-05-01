<section class="section3 bg-img" id="retreat">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-xs-12">
        <h4>Replenish is for you if...</h4>

        <?php
        if(get_field('text_items3')) {
          while(has_sub_field('text_items3')) { ?>
          <p><?php the_sub_field('text'); ?></p>
          <?php
          }
        } ?>
      </div>
    </div>
  </div><!-- /container -->
</section>