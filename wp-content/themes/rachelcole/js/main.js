jQuery( document ).ready(function( $ ) {
	
	
	$(window).scroll( function(){	
		 var scroll = $(window).scrollTop();  
		 
    if (scroll >= 100) {
      
       $('#footer #back').addClass('bottom');
				
    }
	
	else if(scroll == 0){
      
       $('#footer #back').removeClass('bottom');
				
    }

    
    });
	//Video

   
   	//Menu
	$( ".mobile-nav-icon" ).click(function() {
		$('#mobile-menu-container').slideToggle('slow', function() { });
		$('#topbanner').toggleClass( "nopadding" );
		$('#about').toggleClass( "nopadding" );
	});
	$( "#main-nav" ).superfish({
		delay:       800,   
		animation:   {opacity:'show',height:'show'}, 
		speed:       'fast'
	});
	
	$( "#viewmore" ).click(function() {
	$( ".testimonials_hidden" ).slideToggle(500, function() {
    $( "#viewmore" ).css( "display", "none" );
	$( "#viewless" ).css( "display", "block" );
		});
	return false;
    });
	
	
	$( "#viewless" ).click(function() {
	$( ".testimonials_hidden" ).slideToggle(500, function() {
    $( "#viewless" ).css( "display", "none" );
	$( "#viewmore" ).css( "display", "block" );
		});
	return false;
    });
	
	$(".widget_search #s").attr("placeholder", "search");

	
    
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.section').each( function(i){
            
            var bottom_of_object = $(this).offset().top + 200;
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                    
            }
            
        }); 
		
	});	
	
	
	
   
    
	
});