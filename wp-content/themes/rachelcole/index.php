<?php 

get_header(); ?>

	
		<!-- Start of main -->
		
				<?php get_template_part('get','topbanner')?>
			<div id="blog" class="main">		
				<div class="holder clearfix">
				
				
				<div id="blogcontent">
				
				<?php while ( have_posts() ) : the_post(); ?>	
					<div class="blogitem section">
					
						<div class="date">
							<?php the_date()?>
						</div>
						<div class="blogtitle">
							<a href="<?php the_permalink();?>"><?php the_title()?></a>
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
					<div class="pagination">
						<div class="nav-previous fleft fhalf"><?php previous_posts_link( 'Newer' ); ?></div>
						<div class="nav-next fright half"><?php next_posts_link( 'Older' ); ?></div>
					</div>
				</div>
				
				<div id="blogsidebar">
					<?php dynamic_sidebar('sidebar')?>
				</div>
				
				</div>
			
		</div>
		<!-- End of main -->
		
	
<?php get_footer(); ?>