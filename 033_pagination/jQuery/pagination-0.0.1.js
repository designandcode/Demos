jQuery.fn.paginate = function(options) {


	var n = {n : 5}
	var container = {container : '#container'}
	var control = {control : '#navigation'}

var options = $.extend(n, container, control, options);
    return this.each(function() {

		$(options.container + " > div").hide();
		var p = 1;
		var n = options.n;
		var navTotal = $(options.container + " > div").length;
		var navPages = Math.ceil(navTotal / n);
		
		for (i=0;i<p*n;i++){
			$("#container > div").eq(i).show().addClass("page1");
		}
		
		for (a=1;a<=navPages;a++){
		$("ul#navigation").append("<li>"+a+"</li>");
		}
		$("ul#navigation li").eq(0).addClass("active");
		
		$("ul#navigation li").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
		$("#container > div").hide();
		var r = $("ul#navigation li").index(this);
		var s = $("ul#navigation li").index(this) + 1;
		
		
		for(x=r*n;x<r*n+n;x++){
		$(options.container + " > div").eq(x).show().addClass("page"+s);
		}
		
		
		});
		
	});	
	};