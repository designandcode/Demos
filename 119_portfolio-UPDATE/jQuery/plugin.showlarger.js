jQuery.fn.showLarger = function(options) {

	var defaults = {
		dark: false
};

var options = $.extend(defaults, options);
    return this.each(function() {
var title = $(this).attr("title");
	
	$("#fullContainer img").hide();
	//$("#slideContainer").prepend('<div class="imageContainerMessage"><h2>Click the image to see full view</h2></div>');
		//$("img.close").show();
		
		if(options.dark == false){
		$(this).hover(function(){
			//$("#slideContainer").prepend('<div class="imageContainerMessage"><h2>Click the image to see full view</h2></div>');
			
			$("#slideContainer div.imageContainerMessage").fadeIn(1000).animate({top:0}, { queue:false, duration:2000 });
			
			
		},function(){
			$("#slideContainer div.imageContainerMessage").fadeOut(1000).animate({top:-54}, { queue:false, duration:1000 });
		});
		}else{
		
		$(this).hover(function(){
			//$("#slideContainer").prepend('<div class="imageContainerMessage"><h2>Click the image to see full view</h2></div>');
			
			$("#slideContainer div.imageContainerMessage2").fadeIn(1000).animate({top:0}, { queue:false, duration:2000 });
			
			
		},function(){
			$("#slideContainer div.imageContainerMessage2").fadeOut(1000).animate({top:-54}, { queue:false, duration:1000 });
		});
		
		}
		
		
		/*
		$(this).click(function(){
		
		
		
		$("#fullContainer").show("slow");
		$("#fullContainer").css("borderColor", options.borderColor);
		$("#fullContainer img").hide();
		$("img.close").show();
		$("#fullContainer img."+title).show();
		$("body").css("backgroundColor", "#aaa");
		$("#contentContainer").css("backgroundColor", "#aaa");
		
		
		
		});
		
		$("#fullContainer, img.close").click(function(){
		
		$("#fullContainer").hide("slow");
		$("img.close").hide();
		$("body").css("backgroundColor", "#eee");
		$("#contentContainer").css("backgroundColor", "#eee");
		
		
		});
*/

});

};