jQuery.fn.slider = function(options) {


//var thumbnailLink = {
//		thumbnailLink : $("#nav ul li").eq(0)
		

//};




var options = $.extend(options);
    return this.each(function() {
	$("#slideContainer").css("overflow","hidden");
	$("#imgContainer").children().hide();
	$("a[title='Home']").show();
	
	$("#nav ul li").eq(0).addClass("active");
	
	
	
	
	
	
	$(this).click(function(){
	
	var index = $("#nav ul li").index(this);
	
		$(this).addClass("active");
		
		$(this).siblings().removeClass("active");
		
		
		$("#imgContainer a").eq(index).show("slow");
		$("#imgContainer a").eq(index).siblings().hide();
	
	});
	
	


});


};