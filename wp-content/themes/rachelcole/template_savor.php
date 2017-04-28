<?php 
/* Template Name: Savor Page
*/

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	
		<!-- Start of main -->
		<div  id="<?php the_title()?>" class="main">
			
			<?php get_template_part('get', 'topbanner'); ?>	
			
			
			<div id="section1" class="section">
			
				<div class="holder clearfix">
					
					<blockquote>
						<?php the_field('section_1_intro');?>
					</blockquote>
					<div class="half fleft">
						<img src="<?php the_field('section_1_image');?>"/>
					</div>
					<div class="half fright">
					
						
						<div class="clearfix"></div>
						<?php the_field('section_1_copy');?>
					</div>
					<div class="clearfix"></div>
					
				</div>
			</div>	
			<div id="section2" class="section">
				<div class="holder clearfix">
				<?php the_field('section_2_copy')?>
				</div>
			</div>	
			<div id="section3" class="section">
				<div class="holder clearfix">
					
					<div class="half fleft">
						<?php the_field('section_3_copy');?>
						<?php if(get_field('section_3_link')):?>
						<a class="secondary" href="<?php the_field('section_3_link');?>" target="_blank">Sign up now</a>
						<?php endif?>
					</div>
					<div class="half fright">
					
					
						<div class="clearfix"></div>
						<img src="<?php the_field('section_3_image');?>"/>
					</div>
					<div class="clearfix"></div>
					
				</div>
			</div>	
			<div id="guests" class="section">
				<div class="holder clearfix">
				<h2><?php the_field('weekend_guest_title')?></h2>
					<div class="divider"></div>
					<div class="clearfix"></div>
					<div class="intro"><?php the_field('guests_copy')?></div>
					<ul>
				<?php while(have_rows('weekend_guests')):the_row();?>
					<li><img src="<?php the_sub_field('guest_image')?>"/>
					<p><?php the_sub_field('guest')?></p>
					</li>
				<?php endwhile?>
					</ul>
				</div>
			</div>
			<div id="section4" class="section">
				<div class="holder clearfix">
					<h2><?php the_field('section_4_title')?></h2>
					<div class="divider"></div>
					<div class="clearfix"></div>
					<div class="intro"><?php the_field('section_4_copy')?></div>
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
			<div id="section5" class="section">
				<div class="holder clearfix">
					<h2>Frequently Asked Questions</h2>
						<div class="divider fleft"></div>
						<div class="clearfix"></div>
					<div class="half fleft">
						<?php the_field('section_5_copy_left');?>
					</div>
					
					<div class="half fright">
						<?php the_field('section_5_copy_right');?>
					</div>
				</div>
			</div>	
			
			
			<div id="section6" class="section">
				<div class="holder clearfix">
				<?php the_field('section_6_copy')?>
				<?php if(get_field('section_6_link')):?>
				<a class="secondary" href="<?php the_field('section_6_link');?>" target="_blank">Sign up now</a>
				<?php endif?>
				</div>
			</div>
			
		</div>	
			
			
		<?php endwhile?>
		<?php get_footer(); ?>