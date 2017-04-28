<?php 
/* Template Name: Coaching Page
*/

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	
		<!-- Start of main -->
		<div  id="<?php the_title()?>" class="main">
			
				
				<?php get_template_part('get', 'topbanner'); ?>
				
			<div id="section1" class="section">
				<div class="holder clearfix">
					<h2><?php the_title();?></h2>
						<div class="divider fleft"></div>
						<div class="clearfix"></div>
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
					<blockquote>
						<?php the_field('section_2_intro');?>
					</blockquote>
					<div class="half fleft">
						<img src="<?php the_field('section_2_image');?>"/>
					</div>
					<div class="half fright">
						<h2>How it Works</h2>
						<div class="divider fleft"></div>
						<div class="clearfix"></div>
						<?php the_field('section_2_copy');?>
					</div>
					<div class="clearfix"></div>
					
				</div>
			</div>	
			
			<div id="section3" class="section">
				<div class="holder clearfix">
					<h2><?php the_title()?> Praise</h2>
					<div class="divider"></div>
					<div class="clearfix"></div>
					<?php $counter = 0; ?>
					<ul class="testimonials">
						<?php while(have_rows('testimonials')):the_row();
						$testimonial = get_sub_field('testimonial');
						?>
						<?php $counter++; ?>
					
						
							<li>
								<div class="testimonial_holder excerpt">
									<a href="#<?php echo 'testimonial-id-' . $counter; ?>" class="fancybox-inline">
										<?php echo substr($testimonial, 0, strpos($testimonial," ", 260)); ?>
											<div class="readmore">...Read More</div>
												<div class="divider"></div>
											<div class="author"><?php the_sub_field('testimonial_author')?></div>
									</a>
								</div>
								
								
								<div class="testimonial_holder full">
								<div id="<?php echo 'testimonial-id-' . $counter; ?>" class="testimonial_container">
										<?php echo $testimonial?>
										<div class="divider"></div>
										<div class="author"><?php the_sub_field('testimonial_author')?></div>
								</div>
								</div>
							</li>
								<?php if( $counter > 5 ): ?>
							<?php break; ?>
						<?php endif?>
						<?php endwhile?>
					</ul>
					<?php if( $counter > 5 ): ?>
					<div id="viewmore"><a href="#">View More</a></div>
					<ul class="testimonials testimonials_hidden">
						<?php while(have_rows('testimonials')):the_row();
						$testimonial = get_sub_field('testimonial');
						?>
						
						<?php if( $counter > 5 ): ?>
						<?php $counter++; ?>
						
							<li>
								<div class="testimonial_holder excerpt">
									<a href="#<?php echo 'testimonial-id-' . $counter; ?>" class="fancybox-inline">
										<?php echo substr($testimonial, 0, strpos($testimonial," ", 260)); ?>
											<div class="readmore">...Read More</div>
												<div class="divider"></div>
											<div class="author"><?php the_sub_field('testimonial_author')?></div>
									</a>
								</div>
								
								
								<div class="testimonial_holder full">
								<div id="<?php echo 'testimonial-id-' . $counter; ?>" class="testimonial_container">
										<?php echo $testimonial?>
										<div class="divider"></div>
										<div class="author"><?php the_sub_field('testimonial_author')?></div>
								</div>
								</div>
							</li>
							<?php endif?>
						<?php endwhile?>
					</ul>
					<div id="viewless"><a href="#">View Less</a></div>
					<?php endif?>
				</div>
			</div>	
			
			
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
		</div>
		<!-- End of main -->
		
	<?php endwhile; ?>
<?php get_footer(); ?>