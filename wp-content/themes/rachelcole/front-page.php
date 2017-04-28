<?php 
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	
		<!-- Start of topslider -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.animateSlider.css">
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.animateSlider.js"></script>
		
		<div id="topslider" class="loading">
			<img src="<?php echo get_template_directory_uri(); ?>/img/image_1-rachel.jpg" class="hidden" />
			<img src="<?php echo get_template_directory_uri(); ?>/img/image_2-unraveling.jpg" class="hidden" />
			<img src="<?php echo get_template_directory_uri(); ?>/img/image_3-blooming.jpg" class="hidden" />
			<img src="<?php echo get_template_directory_uri(); ?>/img/image_4-pause.jpg" class="hidden" />
			<img src="<?php echo get_template_directory_uri(); ?>/img/image_5-freedom.jpg" class="hidden" />
			<img src="<?php echo get_template_directory_uri(); ?>/img/image_6-homecoming.jpg" class="hidden" />
			<ul class="anim-slider">

				<li class="anim-slide">
					<div class="slide-holder layout1">
						<span class="text1">Wisdom for women</span>
						<span class="text2">living <i>well-fed</i> lives</span>
					</div>
				</li>
				
				<li class="anim-slide">
					<div class="slide-holder layout2">
						<span class="text1">What are you <i>truly</i> hungry for?</span>
						<span class="text2">Unraveling</span>
					</div>
				</li>

				<li class="anim-slide">
					<div class="slide-holder layout3">
						<span class="text1">What are you <i>truly</i> hungry for?</span>
						<span class="text2">Blooming</span>
					</div>
				</li>

				<li class="anim-slide">
					<div class="slide-holder layout4">
						<span class="text1">What are you <i>truly</i> hungry for?</span>
						<span class="text2">Pause</span>
					</div>
				</li>

				<li class="anim-slide">
					<div class="slide-holder layout5">
						<span class="text1">What are you <i>truly</i> hungry for?</span>
						<span class="text2">Freedom</span>
					</div>
				</li>

				<li class="anim-slide">
					<div class="slide-holder layout6">
						<span class="text1">What are you <i>truly</i> hungry for?</span>
						<span class="text2">Homecoming</span>
					</div>
				</li>

				<nav class="anim-arrows">
					<span class="anim-arrows-prev">
						<i class="fa fa-angle-left fa-3x"></i>
					</span>
					<span class="anim-arrows-next">
						<i class="fa fa-angle-right fa-3x"></i>
					</span>
				</nav>
				
			</ul>
			
			<script>
				jQuery( document ).ready(function( $ ) {
					$(window).load(function() {
						$('#topslider').removeClass('loading');
						$(".anim-slider").animateSlider(
						{
							autoplay	:true,
							interval	:6000,
							animations 	: 
							{
								0	: 	//Slide No1
								{
									li	: 
									{
										show   	  : "fadeIn",
										delayShow : "delay0.5s",
										hide 	  : "fadeOut"
									},
									".text1"	:
									{
										show 	  : "fadeInLeft",
										delayShow : "delay1s"
									},
									".text2" 	:
									{
										show   	  : "fadeInRight",
										delayShow : "delay1-5s"
									}
								},
								1	: 	//Slide No2
								{
									li : 
									{
										show   	  : "fadeIn",
										delayShow : "delay0.5s",
										hide 	  : "fadeOut"
									},
									".text1"	:
									{
										show 	  : "fadeInLeft",
										delayShow : "delay1s"
									},
									".text2" 	:
									{
										show   	  : "fadeInRight",
										delayShow : "delay1-5s"
									}	
								},
								2:
								{
									li : 
									{
										show   	  : "fadeIn",
										delayShow : "delay0.5s",
										hide 	  : "fadeOut"
									},
								
									".text2" 	:
									{
										show   	  : "fadeInRight",
										
									}
								},
								3:
								{
									li : 
									{
										show   	  : "fadeIn",
										delayShow : "delay0.5s",
										hide 	  : "fadeOut"
									},
								
									".text2" 	:
									{
										show   	  : "fadeInRight",
										
									}
								},
								4:
								{
									li : 
									{
										show   	  : "fadeIn",
										delayShow : "delay0.5s",
										hide 	  : "fadeOut"
									},
								
									".text2" 	:
									{
										show   	  : "fadeInRight",
										
									}
								},
								5:
								{
									li : 
									{
										show   	  : "fadeIn",
										delayShow : "delay0.5s",
										hide 	  : "fadeOut"
									},
									
									".text2" 	:
									{
										show   	  : "fadeInRight",
										
									}
								}
							}
						});
					});

				});
			</script>
		</div>
		<!-- End of topslider -->
		   
		<!-- Start of main -->
		<div id="main">
			<div class="holder clearfix">
				<div class="twocols clearfix">
					<div class="col1 one_third">
						<h2>Fresh Posts</h2>
						<ul>
						<?php
						$args = array( 'numberposts' => '5' );
						$recent_posts = wp_get_recent_posts( $args);
						foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
						}
						?>
						</ul>
					</div>
					<div class="col2 two_thirds">
						<a href="http://feast.rachelwcole.com">
						<div class="img">
							<img src="<?php the_field('feast_image')?>"/>
						</div>
						<div id="feast_copy">
						<?php the_field('feast_copy')?>
						</div>
						</a>
					</div>
				</div>
				<a href="/pyramid" id="pyramid_link">
				<div id="pyramid_link_holder">
				
					<img src="<?php bloginfo('template_url')?>/img/icon_pyramid.png" class="home_pyramid_image"/>
					<div id="home_pyramid_copy">
						<h3>Learn how to make your own</h3>
						<h2>Fulfillment Pyramid</h2>
					</div>
					
				</div>
				</a>
			</div>
		</div>
		<!-- End of main -->
		
		<!-- Start of signup-box -->
		<div id="signup-box" class="section">
			<div class="holder clearfix">
				<p>Want to get the latest from Rachel?</p>
				<small>Sign up here to get your free <a href="/pyramid"><em>Fulfillment Pyramid Activity Kit</em></a> and to receive email updates!</small>
				<h2>What are you hungry for?</h2>
				<div id="newsletter_signup">
				<?php gravity_form( 2, false, false, false, '', true );?>
				</div>
			</div>
		</div>
		<!-- End of signup-box -->
	
	<?php endwhile; ?>
<?php get_footer(); ?>