<section class="section10" id="pricing-table">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <table class="table table-lg table-bordered">
          <thead>
            <tr>
              <th>
                <span class="head">Accommodation<br/>Options</span>
              </th>
              <th>
                <span class="head">Early Bird Total</span>
                <span class="sub">(Retreat Fee + Accommodation)</span>
                <em>Sign up before 6/15</em>
              </th>
              <th>
                <span class="head">Standard Total</span>
                <span class="sub">(Retreat Fee + Accommodation)</span>
                <em>Sign up on 6/15 or after</em></th>
            </tr>
          </thead>


          <?php if(get_field('pricing_items')) : ?>
            <tbody>
            <?php while(has_sub_field('pricing_items')) : ?>
              <tr>
                <td>
                <?php if(get_sub_field('name')) { echo '<span class="head">'. get_sub_field('name'). '</span>'; } ?>
                <?php if(get_sub_field('detail')) { echo '<em>'. get_sub_field('detail'). '</em>'; } ?>
                </td>
                <td><?php if(get_sub_field('early_bird_total')) { the_sub_field('early_bird_total'); } ?></td>
                <td><?php if(get_sub_field('standard_total')) { the_sub_field('standard_total'); } ?></td>
              </tr>
            <?php endwhile; ?>
            </tbody>
          <?php endif; ?>

        </table>

         <table class="table table-mobile table-bordered">
          <thead>
            <tr>
              <th colspan="2">
                <span class="head">Accommodation Options</span>
              </th>

            </tr>
          </thead>


          <?php if(get_field('pricing_items')) : ?>

            <tbody>
            <?php while(has_sub_field('pricing_items')) : ?>
              <tr>
                <td colspan="2" class="mobile-room-type">
                <?php if(get_sub_field('name')) { echo '<span class="head">'. get_sub_field('name'). '</span>'; } ?>
                <?php if(get_sub_field('detail')) { echo '<em>'. get_sub_field('detail'). '</em>'; } ?>
                </td>
              </tr>
              <tr>
              <td class="early-head">
                <span class="head">Early Bird Total</span>
                <span class="sub">(Retreat Fee + Accommodation)</span>
                <em>Sign up before 6/15</em>
              </td>
                <td class="early-price"><?php if(get_sub_field('early_bird_total')) { the_sub_field('early_bird_total'); } ?></td>
                </tr>
                <tr>
                <td class="standard-head">
                <span class="head">Standard Total</span>
                <span class="sub">(Retreat Fee + Accommodation)</span>
                <em>Sign up on 6/15 or after</em></td>
                <td class="standard-price"><?php if(get_sub_field('standard_total')) { the_sub_field('standard_total'); } ?></td>
              </tr>
            <?php endwhile; ?>
            </tbody>

          <?php endif; ?>

        </table>








        </div>
        </div><!-- /row -->
        <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-xs-12">
        <?php if(get_field('bottom_content10')) { the_field('bottom_content10'); } ?>
      </div>
    </div>
  </div><!-- /container -->
</section>