<section class="section2 bg-darken five-col">
  <div class="container-fluid">
    <div class="row">


      <?php if(get_field('buckets')) { ?>
        <div class="flex-wrap five-col">
        <?php while(has_sub_field('buckets')) { ?>
          <div class="content">
            <h3><?php the_sub_field('header'); ?></h3>
            <p><?php the_sub_field('text'); ?></p>
          </div>
        <?php } ?>
        </div><!-- /flex -->
      <?php } ?>


    </div>
  </div><!-- /container -->
</section>