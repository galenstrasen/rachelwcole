jQuery( document ).ready(function( $ ) {
   
  
	
    


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
	
	$("nav a").click(function(){
   $("a.active").removeClass("active");
   $(this).addClass("active");
});
	
});	