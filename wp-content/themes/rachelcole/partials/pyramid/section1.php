<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

global $post;


$copy = get_field('section_1_copy');
$excerpt = get_field('section_1_excerpt');
$date = get_field('section_1_date');
$author = get_field('section_1_author');
$subtext = get_field('section_1_subtext');
$link = get_field('section_1_link');
$linktext = get_field('section_1_link_text');
?>

<div class="holder clearfix">
  <div class="half fleft">
    <ul class="main_slider">
    <?php while(have_rows('section_1_images')) : the_row();
      $image = get_sub_field('section_1_image');
      $size = 'pyramid';?>
      <li>
      <a href="#section_1_popup" class="fancybox-inline"><?php echo wp_get_attachment_image( $image, $size );?></a>
      </li>
    <?php endwhile?>
    </ul>
  </div>


  <div class="half fright blue">
    <?php
    if($date) { echo '<div class="date">'. $date .'</div>'; }
    if($author) { echo '<div class="author"><h2 class="serif large">'. $author .'</h2></div>'; }
    if($subtext) { echo '<div class="subtext">'. $subtext .'</div>'; }
    if($excerpt) { echo $excerpt; }

    ?>
    <div class="readmore">
      <a href="#section_1_popup" class="fancybox-inline">...Read More</a>
    </div>
    <div class="divider fleft"></div>
    <?php if($link) { echo '<div class="link"><a href="'. $link .'" target="_blank">'. $linktext .'</a></div>'; } ?>


    <!-- # POPUP -->
    <div class="testimonial_holder full">
      <div id="section_1_popup" class="testimonial_container popup_holder">
        <div class="half fleft">
          <ul class="testimonials_2">
          <?php
          while(have_rows('section_1_images')):the_row();
            $image = get_sub_field('section_1_image');
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
          if($copy) { echo $copy; }
          ?>

          <div class="divider"></div>
          <?php if($link) { echo '<div class="link"><a href="'. $link .'" target="_blank">'. $linktext .'</a></div>'; } ?>
        </div><!-- /fright -->

      </div><!-- testi container -->
    </div><!-- /testi holder -->
  </div><!-- /fright -->

</div><!-- /holder -->