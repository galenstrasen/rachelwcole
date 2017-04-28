<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		
		<?php get_template_part('get', 'topbanner'); ?>
		<?php get_template_part('get', 'breadcrumb'); ?>
			
		<!-- Start of main -->
		<div id="main">
			<div class="holder clearfix">
				<?php get_sidebar(); ?>
				<div id="content" class="clearfix">
					<h2 class="titlewithline maintitle"><span><?php the_title(); ?></span></h2>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<!-- End of main -->
		
	<?php endwhile; ?>
<?php get_footer(); ?>