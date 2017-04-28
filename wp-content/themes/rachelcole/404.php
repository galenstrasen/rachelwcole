<?php get_header(); ?>
		
			
		   
			<!-- Start of main -->
			<div id="notfound" class="main">
			
				<img src="<?php bloginfo('template_url')?>/img/404bg.jpg"/>
				
				<div class="holder clearfix">	
					<div id="searchform">
					<p>Looks like you're lost.</p>
							<h2>Please use the navigation above or search here.</h2>
					<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div>
							
							<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="search"/>
							<input type="submit" id="searchsubmit" value="" />
						</div>
					</form>
					</div>
				</div>
			</div>
			<!-- End of main -->
		
<?php get_footer(); ?>
