$(function(){
	
	/* MAP OVERLAY */
	
	jquery_map_container_width = window.innerWidth; 
	jquery_map_container_height = window.innerHeight; 
	
	
	$('.jquery_map_overlay').click(function(){
		thisHref = $(this).attr('href');
		$('body').append('<div id="jquery_map_container"><h1><span>x</span></h1><p id="jquery_map_iframe">Some Foo</p></div>');
		$('#jquery_map_container').css({'position':'absolute', 'width':'100%', 'height':'100%', 'backgroundColor':'rgba(60,60,60,0.6)', 'top':'0', 'left':'0'});
		$('#jquery_map_container h1').css({'position':'absolute', 'z-index':'1000'});
		
	var jquery_fullpage_height = $('body').css('height');
	
	var jquery_map_iframe_width_set = $('#jquery_map_iframe').attr('width','1008');
	var jquery_map_iframe_width_get = $('#jquery_map_iframe').attr('width');
	
	var jquery_map_iframe_height_set = $('#jquery_map_iframe').attr('height', '250');
	var jquery_map_iframe_height_get = $('#jquery_map_iframe').attr('height');
	
		
	var margin_Left = (jquery_map_container_width - jquery_map_iframe_width_get) / 2 + "px";
	var margin_Top = (jquery_map_container_height - jquery_map_iframe_height_get) / 2 + "px";
	var margin_Top_header = ((jquery_map_container_height - jquery_map_iframe_height_get) / 2) - 18 + "px";

	
	
	
		$('#jquery_map_iframe').css({'position':'fixed', 'top':margin_Top, 'left':margin_Left});
		$('#jquery_map_container h1').css({'position':'fixed', 'top':margin_Top_header, 'left':margin_Left, 'width':jquery_map_iframe_width_get + "px", 'height':'36px', 'background-color':'#0af', 'text-align':'right', 'color':'#fff'});
		$('#jquery_map_container h1 span').css({'margin-right':'10px','cursor':'pointer'});
		$('#jquery_map_container').css({'height' : jquery_fullpage_height});
		
		return false;
	});
	/*
	$('body').click(function(){
		$('#jquery_map_container').remove();
	});
	*/
	$('#jquery_map_container h1 span').live("click", function(){
		$('#jquery_map_container').remove();
	});
	
});