<section class="section6 bg-img" id="details">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 col-xs-12">
        <header><h3>Retreat Fee &amp; Accommodations</h3></header>

        <div class="flex-wrap two-col">
          <div class="content">
            <header><h4>Retreat Fee</h4></header>
            <p><em>(does not include accommodations)</em></p>
            <div class="row">
              <div class="col-xs-6">
                <div class="price">
                  <?php if(get_field('price_1')) { echo '<h4>'. get_field('price_1'). '</h4>'; } ?>
                  <?php if(get_field('price_1_description')) { echo '<p><em>'. get_field('price_1_description'). '</em></p>'; } ?>
                </div>
              </div><!-- /col -->

              <div class="col-xs-6">
                <div class="price">
                  <?php if(get_field('price_2')) { echo '<h4>'. get_field('price_2'). '</h4>'; } ?>
                  <?php if(get_field('price_2_description')) { echo '<p><em>'. get_field('price_2_description'). '</em></p>'; } ?>
                </div>
              </div><!-- /col -->
            </div><!-- /row -->

            <div class="included">
              <p><em>Includes</em></p>
              <?php if(get_field('included_items')) {
                echo '<ul>';
                while(has_sub_field('included_items')) {
                  echo '<li>'. get_sub_field('text') .'</li>';
                }
                echo '</ul>';
              } ?>
            </div>
          </div><!-- /content -->

          <div class="content">
            <header><h4>Accommodation Options</h4></header>
            <?php if(get_field('right_content6')) { echo '<p>'.get_field('right_content6').'</p>'; } ?>
          </div><!-- /conent -->
        </div><!-- /flex-wrap -->

        <div class="foot-note">
          <?php if(get_field('bottom_content6')) { echo '<p><em>'.get_field('bottom_content6').'</em></p>'; } ?>
          <a href="#pricing-table" class="js-scroll-to btn btn-next">Pricing Info</a>
        </div>




      </div><!-- /col -->
    </div><!-- /row -->
  </div><!-- /container -->
</section>