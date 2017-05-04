		<!-- Start of footer -->
		<div id="footer">
			<div class="holder clearfix">
				<div class="footer-left">
					<p>&copy; <?php echo date('Y'); ?> RACHEL COLE | DESIGN BY <a href="http://chelseydyer.com" target="_blank">CHELSEY DYER</a></p>
					<p><i class="cc1"></i><i class="cc2"></i><i class="cc3"></i><a href="http://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank">CREATIVE COMMONS LICENSE</a> | <a href="http://rachelwcole.com/terms-conditions/">Terms &amp; Conditions</a> | <a href="http://rachelwcole.com/privacy/">Privacy</a> | <a href="http://rachelwcole.com/disclaimer/">Disclaimer</a></p>
				</div>
				<div class="footer-right">
					<div class="socials">
						<a class="facebook" href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url')?>/img/icon_footer-facebook.png"/></a>
						<a class="twitter" href="<?php the_field('twitter_link', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url')?>/img/icon_footer-twitter.png"/></a>
						<a class="instagram" href="<?php the_field('instagram_link', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url')?>/img/icon_footer-instagram.png"/></a>
						<a class="pinterest" href="<?php the_field('pinterest_link', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url')?>/img/icon_footer-pinterest.png"/></a>
					</div>
				</div>
				<div id="back">
					<a href="#" id="backtotop">Back to Top</a>
				<div>


		<!-- End of footer -->

	<?php wp_footer(); ?>
    </body>
</html>