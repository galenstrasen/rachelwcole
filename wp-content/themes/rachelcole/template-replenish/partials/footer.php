<footer class="footer bg-img">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12"><?php // text_items_footer ... text ?>
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
      <img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/image_logo-footer.png" class="logo" alt="Replenish" />

      </div>
    </div>

  </div><!-- /container -->
  <nav class="return-nav">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-6">
        <a class="sol return-link" href="http://rachelwcole.com"> <h5>Return to rachelwcole.com</h5></a>
        </div>
        <div class="col-xs-6">
          <ul class="social">
            <li><a href="https://www.facebook.com/feedyourlife" target="_blank"><img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/icon_social-facebook.png" alt=""></a></li>
            <li><a href="https://twitter.com/rachelwcole" target="_blank"><img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/icon_social-twitter.png" alt=""></a></li>
            <li><a href="http://pinterest.com/rachelwcole/" target="_blank"><img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/icon_social-pinterest.png" alt=""></a></li>
            <li><a href="http://instagram.com/rachelwcole" target="_blank"><img src="<?php bloginfo('template_url')?>/template-replenish/assets/img/icon_social-instagram.png" alt=""></a></li>
          </ul>
        </div>

      </div>
    </div>
  </nav>
</footer>