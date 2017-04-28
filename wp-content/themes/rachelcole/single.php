<?php 

get_header(); ?>

	
		<!-- Start of main -->
		
				<?php get_template_part('get','topbanner')?>
			<div id="blog" class="main">		
				<div class="holder clearfix">
				
				
				<div id="blogcontent">
				
				<?php while ( have_posts() ) : the_post(); ?>	
					<div class="blogitem">
					
						<div class="date">
							<?php the_date()?>
						</div>
						<div class="blogtitle">
							<?php the_title()?>
						</div>
						<div class="featured_image">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail('full');} ?>
						</div>
						
						<div class="blogcopy">
							<?php the_content(); ?>
						</div>
					</div>	
						
					<div id="blogfooter">
							<div class="featuredin">
								<span>posted in </span>
								<?php echo get_the_category_list( ' / '); ?>
							</div>
							<div class="share">
								<span>share</span>
									<?php echo do_shortcode('[ssba]'); ?>
							</div>
					</div>	
					<?php endwhile; ?>
				</div>
				
				<div id="blogsidebar">
					<?php dynamic_sidebar('sidebar')?>
				</div>
				
				</div>
			
		</div>
		<!-- End of main -->
		
	
<?php get_footer(); ?>