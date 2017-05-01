<section class="section14 bg-darken" id="faqs">
  <header><h3>Frequently Asked Questions</h3></header>

  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-6">
        <?php if(get_field('faqs_left')) {
          while(has_sub_field('faqs_left')) {
            ?>
            <h4><?php the_sub_field('question'); ?></h4>
            <p><?php the_sub_field('answer'); ?></p>
            <?php
          }
        } ?>
      </div>

      <div class="col-xs-6">
        <?php if(get_field('faqs_right')) {
          while(has_sub_field('faqs_right')) {
            ?>
            <h4><?php the_sub_field('question'); ?></h4>
            <p><?php the_sub_field('answer'); ?></p>
            <?php
          }
        } ?>
      </div>
    </div>



  </div><!-- /container -->
</section>