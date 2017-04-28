<div id="topbanner">
	<?php if ( is_single() || is_home() ):?>
	<div id="blogheadertext"><p>What I've been chewing on lately...</p></div>
	<?php endif?>
	<?php if(is_page(array('coaching','consulting','savor'))):?>
	<?php if(is_page('savor')):?>
	<div id="savortext"><h1>Savor</h1>
	<h2>Daily Practices for a more Nourishing Holiday</h2>
	</div>
	<?php endif?>
	<div class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field('header_background_image')?>"></div>
	<div id="mobilewindow"><img src="<?php the_field('header_background_image')?>"/></div>
	<?php elseif ( is_single() || is_home() ):?>
	<img src="<?php the_field('header_background_image', 108)?>"/>
	<?php else:?>
	<img src="<?php the_field('header_background_image')?>"/>
	<?php endif;?>
</div>