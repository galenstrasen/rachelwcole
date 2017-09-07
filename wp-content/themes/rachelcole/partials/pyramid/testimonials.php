<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

global $post;

?>


<div class="holder clearfix">
  <div class="clearfix"></div>
  <?php $counter = 0; ?>

  <ul class="testimonials">
    <?php
    while(have_rows('testimonials')) : the_row();
      $testimonial = get_sub_field('testimonial');
      $excerpt = get_sub_field('testimonial_excerpt');
      $date = get_sub_field('testimonial_date');
      $author = get_sub_field('testimonial_author');
      $subtext = get_sub_field('testimonial_subtext');
      $link = get_sub_field('testimonial_link');
      $linktext = get_sub_field('testimonial_link_text');

      $counter++;
      ?>
      <li>
        <div class="testimonial_holder excerpt">
          <div class="image bw">
            <a href="#<?php echo 'testimonial-id-' . $counter; ?>" class="fancybox-inline">
            <?php
            while(have_rows('testimonial_images')) : the_row();
              $image = get_sub_field('testimonial_image');
              $size = 'pyramid';
              echo wp_get_attachment_image( $image, $size );
            endwhile; ?>
            </a>
          </div><!-- /image -->
          <?php
          if($date) { echo '<div class="date">'. $date .'</div>'; }
          if($author) { echo '<div class="author">'. $author .'</div>'; }
          if(isset($subtext)) { echo '<div class="subtext">'. $subtext .'</div>'; }
          ?>
          <a href="#<?php echo 'testimonial-id-' . $counter; ?>" class="fancybox-inline">
            <?php if($excerpt) { echo $excerpt; } ?>
            <div class="readmore">...Read More</div>
          </a>
          <div class="divider"></div>
          <?php if($link) { echo '<div class="link"><a href="'. $link .'" target="_blank">'. $linktext .'</a></div>'; } ?>
        </div><!-- testimonial_holder -->

        <!-- # POPUP -->
        <div class="testimonial_holder full">
          <div id="<?php echo 'testimonial-id-' . $counter; ?>" class="testimonial_container popup_holder">
            <div class="half fleft">
              <ul class="testimonials_2">
              <?php
              while(have_rows('testimonial_images')):the_row();
                $image = get_sub_field('testimonial_image');
                $size = 'pyramid';?>
                <li><?php echo wp_get_attachment_image( $image, $size );?></li>
              <?php endwhile?>
              </ul>
            </div><!-- /fleft -->

            <div class="half fright">
              <?php
              if($date) { echo '<div class="date">'. $date .'</div>'; }
              if($author) { echo '<div class="author">'. $author .'</div>'; }
              if($subtext) { echo '<div class="subtext">'. $subtext .'</div>'; }
              if($testimonial) { echo $testimonial; }
              ?>

              <div class="divider"></div>
              <?php if($link) { echo '<div class="link"><a href="'. $link .'" target="_blank">'. $linktext .'</a></div>'; } ?>
            </div><!-- /fright -->

          </div><!-- testi container -->
        </div><!-- /testi holder -->
      </li>

      <?php
      if( $counter > 5 ) :
        break;
      endif;

      endwhile; ?>
  </ul>

    <?php if( $counter > 5 ) : ?>
    <div id="viewmore"><a href="#">View More</a></div>
    <ul class="testimonials testimonials_hidden">
      <?php
      while(have_rows('testimonials')) : the_row();
        $testimonial = get_sub_field('testimonial');
        $excerpt = get_sub_field('testimonial_excerpt');
        $date = get_sub_field('testimonial_date');
        $author = get_sub_field('testimonial_author');
        $subtext = get_sub_field('testimonial_subtext');
        $link = get_sub_field('testimonial_link');
        $linktext = get_sub_field('testimonial_link_text');

        if( $counter > 5 ) :
          $counter++;
          ?>
          <li>
            <div class="testimonial_holder excerpt">
              <div class="image bw">
                <a href="#<?php echo 'testimonial-id-' . $counter; ?>" class="fancybox-inline">
                <?php
                while(have_rows('testimonial_images')) : the_row();
                  $image = get_sub_field('testimonial_image');
                  $size = 'pyramid';
                  echo wp_get_attachment_image( $image, $size );
                endwhile; ?>
                </a>
              </div><!-- /image -->
              <?php
              if($date) { echo '<div class="date">'. $date .'</div>'; }
              if($author) { echo '<div class="author">'. $author .'</div>'; }
              if(isset($subtext)) { echo '<div class="subtext">'. $subtext .'</div>'; }
              ?>
              <a href="#<?php echo 'testimonial-id-' . $counter; ?>" class="fancybox-inline">
                <?php if($excerpt) { echo $excerpt; } ?>
                <div class="readmore">...Read More</div>
              </a>
              <div class="divider"></div>
              <?php if($link) { echo '<div class="link"><a href="'. $link .'" target="_blank">'. $linktext .'</a></div>'; } ?>
            </div><!-- testimonial_holder -->
            <!-- # POPUP -->
            <div class="testimonial_holder full">
              <div id="<?php echo 'testimonial-id-' . $counter; ?>" class="testimonial_container popup_holder">
                <div class="half fleft">
                  <ul class="testimonials_2">
                  <?php
                  while(have_rows('testimonial_images')):the_row();
                    $image = get_sub_field('testimonial_image');
                    $size = 'pyramid';?>
                    <li><?php echo wp_get_attachment_image( $image, $size );?></li>
                  <?php endwhile?>
                  </ul>
                </div><!-- /fleft -->

                <div class="half fright">
                  <?php
                  if($date) { echo '<div class="date">'. $date .'</div>'; }
                  if($author) { echo '<div class="author">'. $author .'</div>'; }
                  if($subtext) { echo '<div class="subtext">'. $subtext .'</div>'; }
                  if($testimonial) { echo $testimonial; }
                  ?>

                  <div class="divider"></div>
                  <?php if($link) { echo '<div class="link"><a href="'. $link .'" target="_blank">'. $linktext .'</a></div>'; } ?>
                </div><!-- /fright -->

              </div><!-- testi container -->
            </div><!-- /testi holder -->
          </li>
        <?php endif;
        endwhile; ?>
        </ul>

        <div id="viewless"><a href="#">View Less</a></div>

      <?php endif; ?>
    </div><!-- /holder -->
