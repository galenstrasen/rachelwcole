<?php
/*
Template Name: New Feast Page
*/
?>



<!-- Kill Grid/Container/etc. -->
</div>
	</div>
<!-- End Kill -->

<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/assets/css/feast.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/assets/css/new_feast.css" media="all">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="<?php bloginfo('template_url')?>/assets/js/main.js"></script>
		<script src="<?php bloginfo('template_url')?>/assets/js/jquery.bxslider/jquery.bxslider.min.js"></script>
		<link href="<?php bloginfo('template_url')?>/assets/js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
		
<script type="text/javascript"> 
$(document).ready(function(){ var j = jQuery.noConflict(); 

$('.testimonial_slider').bxSlider({ 
auto:true,
speed: 2000,
pause:6000,
mode:'fade'
}); 

$('.testimonial_slider_new').bxSlider({ 
auto:true,
speed: 500,
pause:6000,
mode:'fade',
pager:true

}); 

}); 
</script>
	<div class="header2">
				<div class="holder clearfix">
					<div class="logo">
						<a href="http://rachelwcole.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_rachel.png" /></a>
					</div>
					<nav>
						<ul>
							<li><a href="http://rachelwcole.com">Home</a></li>
							<li><a href="http://rachelwcole.com/about">About</a></li>
							<li><a href="http://rachelwcole.com/coaching">Coaching</a></li>
							<li><a href="http://rachelwcole.com/feast" class="underline">Feast</a></li>
							<li><a href="http://rachelwcole.com/blog">Blog</a></li>
							<li><a href="http://rachelwcole.com/connect">Connect</a></li>
						</ul>	
					</nav>
				</div>
			</div>
        <div class="main">
            <section class="section-wc">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
                			<div class="return-btn">
                			   <!-- <a class="sol return-link" href="http://rachelwcole.com"><img src="/wp-content/themes/rachelcole/assets/img/icon_arrow.png" alt=""> Return to rachelwcole.com</a>-->
    	        			</div>
						</div>
						<div class="col-sm-8">
						<!--  Hold Grid -->
						</div>
					</div>
				</div>
                <div class="welcome">
                    <img class="img-responsive" src="/wp-content/themes/rachelcole/assets/img/image_feast.png" alt="">
                    <h2>A 3-month journey to becoming a Well-fed Woman</h2>
                    <p>from Rachel W. Cole</p>
                </div>
            </section>
            <!--  Add navbar-fixed-top on scroll to make nav sticky-->
            <nav class="navbar navbar-default navbar-color" id="menu" data-spy="affix" data-offset-top="600" data-offset-bottom="65">
                  <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#center-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#"><img src="/wp-content/themes/rachelcole/assets/img/image_feast-nav.png" alt=""></a>
                    </div>

                    <div class="collapse navbar-collapse" id="center-nav">
                      <ul class="nav navbar-nav">
                        <li><a href="#theprogram">THE PROGRAM</a></li>
                        <li><a href="#about">ABOUT RACHEL</a></li>
                        <li><a href="#Schedule">SCHEDULE</a></li>
                        <li><a href="#incl">WHAT'S INCLUDED</a></li>
						
                        <li><a href="#invest">INVESTMENT</a></li>
						<li><a href="#praise">PRAISE</a></li>
                        <li><a href="#faqsection">FAQs</a></li>
                      </ul>

                        <ul class="nav navbar-nav navbar-right nav-apply">
                            <li><a class="nav-btn btn-colored" href="<?php the_field('apply_link')?>" target="_blank">Apply Today</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
            </nav>

            <section class="section1 section">
                <div class="container-fluid container-sm">
                    <div class="row">
                        <div class="col-md-12">
                          <div id="section1" class="section">
	
								<?php the_field('section_1_content')?>

                        </div>
						<a name="theprogram"></a>
						</div>
                    </div>
                </div>
				
            </section>

            <section class="section2 section agp">
                <div class="container-fluid container-sm ta-center">
                    <div class="row">
                        <div class="col-md-12">
                           <?php the_field('section_2_content')?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section3 section">
                <div class="container-fluid container-sm ta-center">
                    <?php the_field('section_3_content')?>
                </div>
            </section>
            <section class="section4  section agp">
                <div class="container-fluid container-sm ta-center">
                    <?php the_field('section_4_content')?>
					<a name="about"></a>
                </div>
				
            </section>
            <section class="section5 section agp">
                <div class="container-fluid ta-center">
                    <div class="row">
                        <div class="col-md-4 border-right">
                            <img src="<?php the_field('section_5_content_left_image')?>" class="img-responsive">
                            <?php the_field('section_5_content_left')?>
                        </div>
                        <div class="col-md-8 rachel-bio">
                           <?php the_field('section_5_content_right')?>
                        </div>
                    </div>
                    <div class="container-fluid container-sm ta-center">
                        <?php the_field('section_5_content_bottom')?>
                    </div>                    
                </div>
				
            </section>

            <section class="section6 section">
                <div class="container-fluid container-sm ta-center">
                   <?php the_field('section_6_content')?>

                </div>
				
			<a name="Schedule"></a>
            </section>

            <section class="section7 section agp">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <?php the_field('section_7_content')?>
                        </div>
                        <div class="col-md-6 col-md-push-1">
							<?php while(have_rows('section_7_schedule')):the_row();?>
                            <div class="cal-week">
                              <?php the_sub_field('feast_schedule')?>
                            </div>
                            <?php endwhile?>
                        </div>
                    	
					</div>
                </div>
            </section>

            <section class="section8 section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <h3 class="cal-main-title mt0">The Weekly Schedule</h3>
                        </div>
						
                        <div class="col-md-6 col-md-push-1">
						<?php while(have_rows('section_8_schedule')):the_row();?>
                            <div class="cal-week">
                               <?php the_sub_field('weekly_info')?>
                            </div>
                         <?php endwhile?>
						 	
						 </div>
						 	
                    </div>
                </div>
			
            </section>
<a name="incl"></a>
            <section class="section9 section">
			
                <div class="container ta-center">
				
                    <p class="plus-box">PLUS</p>
					
                    <div class="row">
					
				
                        <ul id="large_bubbles">
			<?php while(have_rows('section_9_large_bubbles')):the_row();?>
			
				<li>
					<?php if (get_sub_field('image')):?>
					<img src="<?php the_sub_field('image')?>"/>
					<?php else: ?>
					<img src="<?php bloginfo('template_url')?>/assets/img/large_bubble_holder.jpg"/>
					<?php endif;?>
					<p><?php the_sub_field('caption')?></p>
				</li>
			
			<?php endwhile?>
			
		</ul>
		
                    </div>

                   <h4 class="hungers-header"><?php the_field('section_9_content')?></h4>
		
		<ul id="small_bubbles">
			<?php while(have_rows('section_9_small_bubbles')):the_row();?>
				<li>
					<?php if (get_sub_field('image')):?>
					<img src="<?php the_sub_field('image')?>"/>
					<?php else: ?>
					<img src="<?php bloginfo('template_url')?>/assets/img/small_bubble_holder.jpg"/>
					<?php endif;?>
					<p><?php the_sub_field('caption')?></p>
				</li>
			<?php endwhile?>
		</ul>
		
		<a name="invest"></a>
		
                    </div>
                   
                
				 
            </section>
			
			<div id="testimonials_new" class="section">
	<div class="holder clearfix">
			
			
			<ul class="testimonial_slider_new">
						<?php while(have_rows('new_testimonials')):the_row();?>
							<li>
								
								<div class="testimonial_new_holder">
									
									<?php the_sub_field('testimonial')?>
									</div>
								
									<div class="clearfix"></div>
									
								
							</li>
						<?php endwhile?>
					</ul>
					
					</div>
				</div>	

            <section class="section10 section agp">
			
                <div class="container-fluid container-fullwidth">
                    <div class="row">
                        <div class="col-md-7 half-bg shrink-left">
                            <div class="container-fluid">
                               <?php the_field('section_10_content_left')?>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="flower-bg"></div>
                            <div class="shrink-right">
                                <?php the_field('section_10_right')?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section11 section">
                <div class="container-fluid container-sm ta-center">
                    <?php the_field('section_11_content')?>
                </div>
            </section>

            <section class="section12 section agp">
                <div class="container-fluid ta-center">
                   <?php the_field('section_12_content')?>
                </div>
            </section>

            <section class="section13 section agp">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                           <?php the_field('section_13_content_left')?>
                        </div>
                        <div class="col-md-5 col-md-push-1 ph-col">
                            <?php the_field('section_13_right')?>
                        </div>
                    </div>
                </div>
				<a name="praise"></a>
            </section>

<div id="testimonials" class="section">
	<div class="holder clearfix">
			<h2 class="section-last-line"><span>Praise</span></h2>
			
			<ul class="testimonial_slider">
						<?php while(have_rows('testimonial_slider')):the_row();?>
							<li>
								
								<div class="testimonial_holder">
									<div id="testimonial_before" class="fleft half">
									<h2>Before</h2>
									<?php the_sub_field('testimonial_before')?>
									</div>
									<div id="testimonial_after" class="fright half">
									<h2>After</h2>
									<?php the_sub_field('testimonial_after')?>
									</div>
									<div class="clearfix"></div>
									
								</div>
							</li>
						<?php endwhile?>
					</ul>
						<?php $counter = 0; ?>
					<ul class="testimonials">
						<?php while(have_rows('section_14_testimonials')):the_row();
						$testimonial = get_sub_field('testimonial');
						?>
						<?php $counter++; ?>
						<?php if( $counter > 6 ): ?>
						<?php break; ?>
						<?php endif?>
							<li>
								<div class="testimonial_holder excerpt">
									<a href="#<?php echo 'testimonial-id-' . $counter; ?>" class="fancybox-inline">
										
										<?php 
										echo substr($testimonial, 0, strpos($testimonial," ",268)); ?>
											<div class="readmore">...Read More</div>
												<div class="divider"></div>
											<div class="author"><?php the_sub_field('author')?></div>
									</a>
								</div>
								
								
								<div class="testimonial_holder full">
								<div id="<?php echo 'testimonial-id-' . $counter; ?>" class="testimonial_container">
										<?php echo $testimonial ?>
										<div class="divider"></div>
										<div class="author"><?php the_sub_field('author')?></div>
								</div>
								</div>
							</li>
						<?php endwhile?>
					</ul>
					<div id="viewmore"><a href="#">View More</a></div>
					<ul class="testimonials testimonials_hidden">
						<?php while(have_rows('section_14_testimonials')):the_row();
						$testimonial = get_sub_field('testimonial');?>
						<?php $counter++; ?>
						<?php if( $counter > 6 ): ?>
						
							<li>
								<div class="testimonial_holder excerpt">
									<a href="#<?php echo 'testimonial-id-' . $counter; ?>" class="fancybox-inline">
										<?php echo substr($testimonial, 0, strpos($testimonial," ", 268)); ?>
											<div class="readmore">...Read More</div>
												<div class="divider"></div>
											<div class="author"><?php the_sub_field('author')?></div>
									</a>
								</div>
								
								
								<div class="testimonial_holder full">
								<div id="<?php echo 'testimonial-id-' . $counter; ?>" class="testimonial_container">
										<?php echo $testimonial?>
										<div class="divider"></div>
										<div class="author"><?php the_sub_field('author')?></div>
								</div>
								</div>
							</li>
							<?php endif?>
						<?php endwhile?>
					</ul>
					<a name="faqsection"></a>
					<div id="viewless"><a href="#">View Less</a></div>
				</div>
				
	</div>
	
	

            <section class="section14 section" id="faq">
                <div class="container-fluid">
                    <div class="sec14-h-wrap">
                        <h3 class="sec14-h"><?php the_field('section_15_header')?></h3>
                    </div>
                    <div class="row">
                        
							<?php $counter1 = 0 ?>
							<ul id="faqlist">
							<?php while(have_rows('section_15_faqs')):the_row();?>
							
                            <li class="faq">																
                                <h3 class="subtitle collapsed" data-toggle="collapse" data-target="#<?php echo $counter1?>" aria-expanded="false" >
                                    <span class="plus"></span> <?php the_sub_field('question')?>
                                </h3>
                                <div class="collapse" id="<?php echo $counter1?>">
								  <?php the_sub_field('answer')?>
								</div>
                            </li>
							<?php $counter1++ ?>
							<?php endwhile;?>
							</ul>
						      
                        
                    </div>
                </div>
            </section>

            <section class="section15 section agp">
                <div class="container-fluid container-sm ta-center">
                    <?php the_field('section_16')?>
                </div>
                <div class="container">
                    <hr>
                </div>
                <footer>
                    <div class="container">
                        <div class="row" style="margin-bottom: 20px;border-top: 1px solid #cdc6c2;">
                            <div class="col-md-4">
                                <div class="vertical">
                                    <a class="sol return-link" href="http://rachelwcole.com"><img src="/wp-content/themes/rachelcole/assets/img/icon_arrow.png" alt=""> Return to rachelwcole.com</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="vertical footer-halign">
                                    <img src="/wp-content/themes/rachelcole/assets/img/image_feast-footer.png" alt="Feast Footer Logo">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="vertical footer-halign">
                                    <ul class="footer-social">
                                        <li><a href="https://www.facebook.com/feedyourlife" target="_blank"><img src="/wp-content/themes/rachelcole/assets/img/icon_social-facebook.png" alt=""></a></li>
                                        <li><a href="https://twitter.com/rachelwcole" target="_blank"><img src="/wp-content/themes/rachelcole/assets/img/icon_social-twitter.png" alt=""></a></li>
                                        <li><a href="http://pinterest.com/rachelwcole/" target="_blank"><img src="/wp-content/themes/rachelcole/assets/img/icon_social-pinterest.png" alt=""></a></li>
                                        <li><a href="http://instagram.com/rachelwcole" target="_blank"><img src="/wp-content/themes/rachelcole/assets/img/icon_social-instagram.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </section>
        </div>
		
    </body>
</html>