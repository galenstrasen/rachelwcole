<?php 
/* Template Name: Connect Page
*/

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	
		<!-- Start of main -->
		<div  id="connect" class="main">
		
			<div id="section1" class="section">
				<div class="holder clearfix">		
					<div class="half fleft">
						<?php the_field('section_1_copy_left');?>
					</div>
					
					<div class="half fright">
						<?php the_field('section_1_copy_right');?>
					</div>
				</div>	
			</div>
			
			<div id="section2" class="section">
				<div class="holder clearfix">	
					<p>You can also connect with me on social media.<br /><small>Come follow me here:</small></p>
					<ul id="socials">
									<li><a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url')?>/img/icon_facebook-large.png"/></a></li>
									<li><a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url')?>/img/icon_twitter-large.png"/></a></li>
									<li><a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url')?>/img/icon_instagram-large.png"/></a></li>
									<li><a href="<?php the_field('pinterest_link', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url')?>/img/icon_pinterest-large.png"/></a></li>
					</ul>

				</div>	
			</div>	
			
			
			</div>
		</div>
		<!-- End of main -->
		
	<?php endwhile; ?>
<?php get_footer(); ?>