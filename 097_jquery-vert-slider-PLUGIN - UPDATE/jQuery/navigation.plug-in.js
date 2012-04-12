jQuery.fn.vertSlider = function(options) {

$('#main-container-background a[name]').removeAttr("name");
	$('#main-container').css('overflow', 'hidden');
	$('#side-nav').css('visibility', 'visible');
	

var overlay = {	//here is the text DEFAULT to display in the overlay
				text : new Array()
			  };

var color = {   //here are the DEFAULT background colors for the overlay
				color : new Array()
			};

var button = {   //here are the DEFAULT button text for the overlay
				button : new Array()
			};
			
var image = {//here are the DEFAULT IMAGES
				image : new Array()
			
			};

var title = {//LINK TITLES GO HERE
									
				title : new Array()
			
			};

var link = {//OUTBOUND IMAGE LINKS GO HERE
									
				link : new Array()
			
			};
	
var options = $.extend(overlay, color, button, image, title, link, options);
    return this.each(function() {
	
	$("a#section-1 span").html(options.button[0]);
	$("a#section-2 span").html(options.button[1]);
	$("a#section-3 span").html(options.button[2]);
	$("a#section-4 span").html(options.button[3]);
	$("a#section-5 span").html(options.button[4]);
	$("a#section-6 span").html(options.button[5]);
	
	
	
	$('.s1').html('<a href="' + options.link[0] + '" title= "' + options.title[0] + '"><img src="' + options.image[0] + '" /></a>');
	$('.s2').html('<a href="' + options.link[1] + '" title= "' + options.title[1] + '"><img src="' + options.image[1] + '" /></a>');
	$('.s3').html('<a href="' + options.link[2] + '" title= "' + options.title[2] + '"><img src="' + options.image[2] + '" /></a>');
	$('.s4').html('<a href="' + options.link[3] + '" title= "' + options.title[3] + '"><img src="' + options.image[3] + '" /></a>');
	$('.s5').html('<a href="' + options.link[4] + '" title= "' + options.title[4] + '"><img src="' + options.image[4] + '" /></a>');
	$('.s6').html('<a href="' + options.link[5] + '" title= "' + options.title[5] + '"><img src="' + options.image[5] + '" /></a>');
	
	   $(this).click(function() {
	   var index = $('#side-nav a').index(this);
	   $(this).parent().removeClass('remove-right-border').css("border-right-color", options.color[index]);
	   
		$(this).parent().siblings().addClass('remove-right-border');
		
		
		
		
		
		
		$("#main-container-background").animate({ top: index * -307 }, 'slow');
	   
	   $(".overlay").hide().css("background-color",  options.color[index]).text(options.text[index]).fadeIn(1500);
	   
								});
								});
};	
	
