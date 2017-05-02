<section class="section10" id="pricing-table">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <table class="table table-bordered">
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
        </div>
        </div><!-- /row -->
        <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-xs-12">
        <?php if(get_field('bottom_content10')) { the_field('bottom_content10'); } ?>
      </div>
    </div>
  </div><!-- /container -->
</section>