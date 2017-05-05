<footer class="footer bg-img">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php
          if(get_field('text_items_footer')) {
            while(has_sub_field('text_items_footer')) { ?>
            <p><?php the_sub_field('text'); ?></p>
            <?php
            }
          } ?>
          <p><em>Replenish.</em></p>

          <a href="https://lq120.infusionsoft.com/app/storeFront/showCategoryPage?categoryId=19" target="_blank" class="btn btn-alt btn-lg">Reserve</a>
        <hr>
      </div><!-- /col -->
    </div><!-- /row -->

    <div class="row">
      <div class="col-md-4 col-xs-12">
        <a class="sol return-link" href="http://rachelwcole.com"> <h5>Return to rachelwcole.com</h5></a>
      </div>

      <div class="col-md-4 col-xs-12">
        <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_logo-footer.png" class="logo" alt="Replenish" />
      </div>
      <div class="col-md-4 col-xs-12">
        <ul class="social">
          <li><a href="https://www.facebook.com/feedyourlife" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/rachelwcole" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="http://pinterest.com/rachelwcole/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
          <li><a href="http://instagram.com/rachelwcole" target="_blank"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>

    </div>


  </div><!-- /container -->

</footer>