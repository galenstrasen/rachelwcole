<?php 

get_header(); ?>

	
		<!-- Start of main -->
		
				<div id="topbanner">
					<img src="<?php the_field('header_background_image', 108)?>"/>
				</div>
			<div id="blog" class="main">		
				<div class="holder clearfix">
				
				
				<div id="blogcontent">
				<h2 class="large serif">Search Results for "<?php the_search_query(); ?>"</h2>
				<?php while ( have_posts() ) : the_post(); ?>	
					<div class="blogitem section">
					
						<div class="date">
							<?php the_date()?>
						</div>
						<div class="blogtitle">
							<a href="<?php the_permalink();?>"><?php the_title()?></a>
						</div>
						
						
						<div class="blogcopy">
							<?php the_excerpt(); ?>
						</div>
						<div class="readmore">
						<h2><a href="<?php the_permalink();?>">Read More</a></h2>
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
						<div class="nav-previous fleft fhalf">Previous<?php// previous_posts_link( 'Previous' ); ?></div>
						<div class="nav-next fright half">Next<?php //next_posts_link( 'Previous' ); ?></div>
					</div>
				</div>
				
				<div id="blogsidebar">
					<?php dynamic_sidebar('sidebar')?>
				</div>
				
				</div>
			
		</div>
		<!-- End of main -->
		
	
<?php get_footer(); ?>