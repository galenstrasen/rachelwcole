<?php 
/* Template Name: About Page
*/

get_header(); ?>


<script type="text/javascript"> 
$(document).ready(function(){ var j = jQuery.noConflict(); 

	$(function () {
   function runIt() {
      $('#textintro').delay(2000)
				.fadeIn(2000)
		$('#text1').delay(5000)
				.fadeIn(2000)  
				.delay(4000)
              .fadeOut(2000)
		$('#text6').delay(6000)
			.fadeIn(2000)
		$('#text2').delay(13015)
			.fadeIn(2000)
			.delay(4000)
			.fadeOut(2000)
		$('#text3').delay(21025)
			.fadeIn(2000)
			.delay(4000)
			.fadeOut(2000)
		$('#text4').delay(29035)
			.fadeIn(2000)
			.delay(4000)
			.fadeOut(2000)	
		$('#text5').delay(37050)
			.fadeIn(2000)
			.delay(4000)
			.fadeOut(2000, runIt)				
   }

   runIt();
});
$('.testimonial_slider').bxSlider({ 
auto: true,
speed: 2000,
pause: 5000,
autoHover: true,
mode: 'fade',
}); 

		$(function() {
    var BV = new $.BigVideo({
	container:$('#topbanner'),
	shrinkable:true
		
	});
    BV.init();
	if (Modernizr.touch) {
    BV.show('/wp-content/themes/rachelcole/img/1-blur.jpg');
} else {
    BV.show(
	[
        { type: "video/mp4",  src: "/wp-content/themes/rachelcole/video/WebsiteLoopBlue.mp4" },
        { type: "video/webm", src: "/wp-content/themes/rachelcole/video/WebsiteLoopBlue.webm" },
        { type: "video/ogg",  src: "/wp-content/themes/rachelcole/video/WebsiteLoopBlue.ogv" }
    ]
	,{ambient:true});
}
	BV.getPlayer().on('durationchange',function(){
    $('#big-video-wrap').fadeIn(3000);
});
	});


}); 

</script>
	<?php while ( have_posts() ) : the_post(); ?>
	
		<!-- Start of main -->
		<div id="about" class="main">
			
	<div id="topbanner">
		
		<div id="topbannertext">
			<h2 class="serif big" id="textintro">What are you <em>truly</em> hungry for?</h2>	

			<div id="textslider">

			<h2 class="big"  id="text1">To love and be loved,<br/>just as you are?</h2>
			<h2 class="big"  id="text2">To make art, your way,<br/>with abandon?</h2>
			<h2 class="big"  id="text3">To have a day job<br/>that feeds your soul?</h2>
			<h2 class="big"  id="text4">To go the table with ease<br/>and eat for pleasure (instead of points)?</h2>
			<h2 class="big"  id="text5">To inhabit your body and<br/>savor the feeling of your own skin?</h2>
			
			</div>
			<div id="text6"> 
			<a href="<?php the_field('header_link')?>"><img src="<?php bloginfo('template_url')?>/img/icon_play.png"/></a>
			<h2>Watch Video</h2>
		</div>	
			</div>
				</div>
				
			<div id="section1" class="section effect-scale-up" data-effect-offset="1" data-effect-speed="1" data-effect-delay="0">
				<div class="holder clearfix">
					<blockquote>
						<?php the_field('section_1_intro');?>
					</blockquote>
					<div class="half fleft">
						<img src="<?php the_field('section_1_image');?>"/>
					</div>
					</blockquote>
					<div class="half fright">
						<h2><?php the_title();?></h2>
						<div class="divider fleft"></div>
						<?php the_field('section_1_copy');?>
					</div>
				</div>
			</div>	
			<div id="section2" class="section">
				<div class="holder clearfix">
					<blockquote>
						<?php the_field('section_2_intro');?>
					</blockquote>
					<div class="half fleft">
						<?php the_field('section_2_copy');?>
					</div>
					<div class="half fright">
						<img src="<?php the_field('section_2_image');?>"/>
					</div>
					<div class="clearfix"></div>
					<div class="square">
						<?php the_field('section_2_footer');?>
					</div>
				</div>
			</div>	
			<div id="section3" class="section">
				<div class="holder clearfix">
					<div id="section3_intro">
						<?php the_field('section_3_intro')?>
					</div>
					
					<ul id="section3_list">
					<?php 
					$counter = 1;
					while( have_rows('beliefs')):the_row();?>
						<li>
							<span class="beliefnumber"><?php echo $counter; ?></span>
							<div class="belief_text">
								<?php the_sub_field('belief_text')?>
							</div>
						</li>
					<?php 
					$counter++;
					endwhile;
					?>
					</ul>
					
					<div class="divider"></div>
					<div id="section3_footer">
						<?php the_field(section_3_footer)?>
					</div>	
				</div>	
			</div>
			<div id="section4" class="section">
				<div class="holder clearfix">
					<ul class="testimonial_slider">
						<?php while(have_rows('testimonial_slider')):the_row();?>
							<li>
								<div class="testimonial_holder">
									<div class="image"><img src="<?php the_sub_field('testimonial_image')?>"/></div>
									<?php the_sub_field('testimonial_text')?>
									<div class="divider"></div>
									<div class="author"><?php the_sub_field('testimonial_author')?></div>
								</div>
							</li>
						<?php endwhile?>
					</ul>
				</div>
			</div>	
			<div id="section5" class="section">
				<div class="holder clearfix">
					<div class="fleft one_third">
						<h2>Media & Press</h2>
						<div class="divider fleft"></div>
						<div class="clearfix"></div>
					</div>
					<div class="fright two_thirds">
						<?php the_field('section_5_copy');?>
							<div class="fleft half" id="section_5_left_copy">
								<?php the_field('section_5_left_copy');?>
							</div>
							<div class="fright half" id="section_5_right_copy">
								<?php the_field('section_5_right_copy');?>
							</div>
					</div>
				</div>
			</div>	
			<div id="section6" class="section">
					<div id="featuredin-logos">
					<h2 class="serif"> as featured in</h2>
					<img src="<?php the_field('section_6_logos')?>">
					</div>
			<img src="<?php the_field('section_6_image')?>">		
			</div>		
			<div id="section7" class="section">
				<div class="holder clearfix">
					<h2 class="serif">media photos</h2>
					<ul id="section_7_media">
						<?php while(have_rows('section_7_media')):the_row();
							$image = get_sub_field('section_7_image');



	// vars
	$url = $image['url'];
	$title = $image['title'];
	$alt = $image['alt'];
	$caption = $image['caption'];

	// thumbnail
	$size = 'thumbnail';
	$thumb = $image['sizes'][ $size ];
	$width = $image['sizes'][ $size . '-width' ];
	$height = $image['sizes'][ $size . '-height' ];?>
	
	
		<li>
			<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
				<span class="secondary">Download</span>
				<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

			</a>
		</li>
						<?php endwhile; ?>
					</ul>
					<p>Photography Credit: <a href="http://stephanierauser.com" target="_blank">Stephanie Rausser</p></a>
				</div>
			</div>	
		
		<div id="signup-box" class="section">
			<div class="holder clearfix">
				<p>Want to get the latest from Rachel?</p>
				<small>Sign up here to get your free <a href="/pyramid"><em>Fulfillment Pyramid Activity Kit</em></a> and to receive email updates!</small>
				<h2>What are you hungry for?</h2>
				<div id="newsletter_signup">
				<?php gravity_form( 2, false, false, false, '', truw );?>
				</div>
			</div>
		</div>
		<!-- End of main -->
		</div>
	<?php endwhile; ?>
<?php get_footer(); ?>