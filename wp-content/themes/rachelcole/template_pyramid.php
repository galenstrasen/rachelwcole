<?php
/* Template Name: Pyramid Page
*/

get_header(); ?>


<script type="text/javascript">
$(document).ready(function(){ var j = jQuery.noConflict();
	$(function() {
    var BV = new $.BigVideo({
			container:$('#topbanner'),
			shrinkable:true,
			useFlashForFirefox:false
		});
    BV.init();
		if (Modernizr.touch) {
    	BV.show('/wp-content/themes/rachelcole/img/vidholder.jpg');
		} else {
    	BV.show([
        { type: "video/mp4",  src: "/wp-content/themes/rachelcole/video/FPLoop-HD.mp4" },
    	]
			,{ambient:true});
		}
		BV.getPlayer().on('durationchange',function() {
    	$('#big-video-wrap').fadeIn(3000);
		});
	});

	$('.main_slider').bxSlider({
		auto: true,
		speed: 2000,
		pause: 5000,
		autoHover: true,
		mode: 'fade',
	});

	$('.testimonial_slider').bxSlider({
		auto: true,
		speed: 2000,
		pause: 5000,
		autoHover: true,
		mode: 'fade',
	});

	$('.testimonials_2').bxSlider({
		auto: false,
		speed: 2000,
		pause: 5000,
		autoHover: true,
		mode: 'fade',
	});

	$('.testimonials_3').bxSlider({
		auto: false,
		speed: 2000,
		pause: 5000,
		autoHover: true,
		mode: 'fade',
	});

	$('.testimonials_4').bxSlider({
		auto: false,
		speed: 2000,
		pause: 5000,
		autoHover: true,
		mode: 'fade',
	});

});

</script>


<?php while ( have_posts() ) : the_post(); ?>

		<!-- Start of main -->
<div id="pyramid" class="main">

	<div id="topbanner">

		<div id="topbannertext">
			<h2 class="serif big" id="textintro">How to make a<br/>Fulfillment Pyramid</h2>

			<div id="text6">
				<a href="<?php the_field('header_link')?>"><img src="<?php bloginfo('template_url')?>/img/icon_play.png"/></a>
				<a href="<?php the_field('header_link')?>"><h2>Click to watch</h2></a>
			</div>
		</div>
	</div><!-- #topbanner -->

	<div id="signup-box2" class="section sidebyside">
		<div class="holder clearfix">
			<div class="half fleft">
				<p>Make your own<br/>Fulfillment Pyramid!</p>
				<small>Sign up here to get your free <em>Fulfillment Pyramid Activity Kit</em> and to receive email updates!</small>
			</div>

			<div class="half fright">
				<div id="newsletter_signup2">
					<h2>What are you hungry for?</h2>
					<?php gravity_form( 2, false, false, false, '', true, 12 );?>
				</div>
			</div>
		</div>
	</div><!-- #signup-box2 -->

	<div id="intro">
		Hall of Pyramids
	</div><!-- /#intro -->


	<div id="section_pink">

		<div id="section1">
			<?php get_template_part('/partials/pyramid/section1'); ?>
		</div><!-- #section1 -->

		<div id="section3" class="section">
			<?php get_template_part('/partials/pyramid/testimonials'); ?>
		</div><!-- #section3 -->



			<div id="section_image">
		<div id="section4" class="section">
		<h3>Gallery of</h3>
		<h2>Reader's Pyramids</h2>
				<div class="holder clearfix">
					<ul class="testimonial_slider">
						<?php
						if(have_rows('testimonial_slider')):
						while(have_rows('testimonial_slider')):the_row();
						 if ($count % 3 == 0) {
      $group++;

      ?>
							<li id="testimonial-<?php echo $group; ?>" class="cf group-<?php echo $group; ?>">
      <?php
    }
    ?>



								<div class="testimonial_holder">
									<div class="image">
						<?php
						while(have_rows('testimonial_images')):the_row();


						$image = get_sub_field('testimonial_image');
						$size = 'pyramid';?>



											<?php echo wp_get_attachment_image( $image, $size );?>

									<?php endwhile?>

									</div>


								</div><!-- .teacher -->

    <?php
      if ($count % 3 == 2) {
        ?>
          </li><!-- #teachers -->
        <?php
      }
      $count++;
    endwhile;?>

<?php else :
  // no rows found
endif;?>



					</ul>
				</div>
			</div>
		<div id="signup-box" class="section ">
			<div class="holder clearfix">

				<p>Make your own Fulfillment Pyramid!</p>
				<small>Sign up here to get your free <em>Fulfillment Pyramid Activity Kit</em> and to receive email updates!</small>
				<h2>What are you hungry for?</h2>
				<div id="newsletter_signup">
				<?php gravity_form( 2, false, false, false, '', true );?>
				</div>
			</div>
		</div>
		<!-- End of main -->
		</div>
		</div>
	<?php endwhile; ?>
<?php get_footer(); ?>