jQuery.fn.animatedChart = function(options) {
						
		widthSpans = $('span');	
		var datasets = {dataset1: new Array(47,59,26),
									dataset2: new Array(74,95,62),
									dataset3: new Array(56,75,28),
									dataset4: new Array(95,15,58)};
		
	var options = $.extend(datasets.dataset1, datasets.dataset2, datasets.dataset3, datasets.dataset4, options);
    return this.each(function() {
			
		var widths = [];
		for (i=0;i<=2;i++)
			{
				widths.push(options.dataset1[i]);
			}
		for (i=0;i<=2;i++)
			{
				widths.push(options.dataset2[i]);
			}
		for (i=0;i<=2;i++)
			{
				widths.push(options.dataset3[i]);
			}
		for (i=0;i<=2;i++)
			{
				widths.push(options.dataset4[i]);
			}	
		
		countLi = $('ul#toggle li').length;
		
		
		
		function Quarter(quarter){
			$('.Q1,.Q2,.Q3,.Q4').hide();
			$('.Q'+(quarter+1)).show();
			
			for (i=3*quarter;i<=3*quarter+2;i++)
				{
					$('span').eq(i).text(widths[i]+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[i]+"%", opacity:"1.0"},{ duration: 2500, queue: true});
				}
			}
			
			
			// Show the first set of animations on page load
			Quarter(0);
			
			
					
				$('ul#toggle li').eq(0).bind("click", function(){
					$(this).addClass('active').siblings().removeClass('active');
					Quarter(0);
					
				});
				$('ul#toggle li').eq(1).bind("click", function(){
					$(this).addClass('active').siblings().removeClass('active');
					Quarter(1);
					
				});
				$('ul#toggle li').eq(2).bind("click", function(){
					$(this).addClass('active').siblings().removeClass('active');
					Quarter(2);
					
				});
				$('ul#toggle li').eq(3).bind("click", function(){
					$(this).addClass('active').siblings().removeClass('active');
					Quarter(3);
					
				});
				
		});
	
};