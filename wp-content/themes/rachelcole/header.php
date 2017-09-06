<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' ); if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; ?></title>
		<script src="//use.typekit.net/lug2lpk.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
 <!-- FONT AWESOME -->
  <script src="https://use.fontawesome.com/181b9ae92a.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="<?php bloginfo('template_url')?>/js/parallax.js"></script>
		<script src="<?php bloginfo('template_url')?>/js/jquery.bxslider/jquery.bxslider.min.js"></script>
		<link href="<?php bloginfo('template_url')?>/js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
		<script src="<?php bloginfo('template_url')?>/js/mediaelement/build/mediaelement-and-player.min.js"></script>
<link href="<?php bloginfo('template_url')?>/js/mediaelement/build/mediaelementplayer.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('template_url')?>/js//BigVideo/css/bigvideo.css">


    <script src="//vjs.zencdn.net/4.3/video.js"></script>

    <!-- BigVideo -->
    <script src="<?php bloginfo('template_url')?>/js/BigVideo/lib/bigvideo.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
<?php get_template_part('/partials/ga'); ?>
		<!-- Star of mobile menu -->
		<div id="mobile-menu-container">
			<?php wp_nav_menu( array('menu' => 'Main', 'container' => '', 'items_wrap' => '<ul id="mobile-nav">%3$s</ul>' )); ?>
		</div>
		<!-- End of mobile menu -->

		<!-- Start of header -->
		<div id="header">
			<div class="header1">
				<div class="holder clearfix">
					<div class="logo mobilelogo">
						<a href="<?php bloginfo('url')?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_rachel.png" /></a>
					</div>
					<div class="signup-link">
						<a href="#signup-box-popup" class="fancybox-inline">SIGN UP FOR THE LATEST IN WELL-FED LIVING</a>
					<div id="signup-box-popup-holder">
						<div id="signup-box-popup">
								<div id="newsletter_signup">
									<?php gravity_form( 5, false, true, false, '', true );?>
								</div>
						</div>
					</div>
					</div>
					<div class="socials">
						<a class="facebook" href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
						<a class="twitter" href="<?php the_field('twitter_link', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
						<a class="instagram" href="<?php the_field('instagram_link', 'option'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
						<a class="pinterest" href="<?php the_field('pinterest_link', 'option'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
						<a class="rss" href="<?php bloginfo('url')?>/feed/" target="_blank"><i class="fa fa-rss"></i></a>
						<a href="#" class="mobile-nav-icon"><i class="fa fa-bars"></i></a>
					</div>
				</div>
			</div>
			<div class="header2">
				<div class="holder clearfix">
					<div class="logo">
						<a href="<?php bloginfo('url')?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_rachel.png" /></a>
					</div>
					<nav>
						<?php wp_nav_menu( array('menu' => 'Main', 'container' => '', 'items_wrap' => '<ul class="sf-menu" id="main-nav">%3$s</ul>' )); ?>
					</nav>
					<a href="/pyramid" class="pyramid_nav_link"><img src="<?php bloginfo('template_url')?>/img/icon_pyramid-nav.png"/></a>
				</div>
			</div>
		</div>
		<!-- End of header -->