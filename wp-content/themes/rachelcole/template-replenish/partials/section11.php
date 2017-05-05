<section class="section11 bg-img">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-xs-12">
        <div class="content">
          <?php if(get_field('content11')) { the_field('content11'); } ?>
          <div class="divider"></div>
          <p class="lead"><em>There are currently <span class="strike">10</span> <?php the_field('available_places'); ?> places available.</em></p>
          <h5>Secure your spot with a nonrefundable deposit of <?php the_field('deposit_cost'); ?>.</h5>
          <a href="https://lq120.infusionsoft.com/app/storeFront/showCategoryPage?categoryId=19" target="_blank" class="btn btn-lg">Reserve</a>

        </div>
      </div>
    </div>
  </div><!-- /container -->
</section>