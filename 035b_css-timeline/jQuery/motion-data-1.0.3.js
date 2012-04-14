jQuery.fn.animatedChart = function(options) {
						
		widthSpans = $('span');	
		var datasets = {dataset1: new Array(100,100,100),
									dataset2: new Array(100,100,100),
									dataset3: new Array(100,100,100),
									dataset4: new Array(100,100,100)};
		var staggered = {staggered: false};							
		
	var options = $.extend(datasets.dataset1, datasets.dataset2, datasets.dataset3, datasets.dataset4, staggered, options);
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
			$('span').text('');
			
			for (i=3*quarter;i<=3*quarter+2;i++)
				{
					$('span').eq(i).text(widths[i]+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[i]+"%", opacity:"1.0"},{ duration: 2500, queue: true});
				}
			}
		
		function QuarterStagger(quarter){
			
			$('.Q1,.Q2,.Q3,.Q4').hide();
			$('span').css("width", "0");
			$('.Q'+(quarter+1)).show();
			$('span').text('');
			
			function countUp(span,speed){
			var x = 1;
			var interval = setInterval(
				function(){
					if (x < 100)
						{
							x = parseInt(x) + 1;
							if (x > 100){x = 100};
							$('span').eq(span).text(x+"%");
						}
				}, speed)
			}
			
			countUp(0,25);
			$('span').eq(3*quarter).css({width:"0", opacity: "0.0"}).animate({width:widths[3*quarter]+"%", opacity:"1.0"}, 2500, 
			function(){
				countUp(1,50);
				$('span').eq(3*quarter+1).css({width:"0", opacity: "0.0"}).animate({width:widths[3*quarter+1]+"%", opacity:"1.0"}, 5000, 
			function(){
				countUp(2,100);
				$('span').eq(3*quarter+2).css({width:"0", opacity: "0.0"}).animate({width:widths[3*quarter+2]+"%", opacity:"1.0"}, 10000)
				})
			});
			
			
			/*
					$('span').eq(3*quarter).text(widths[3*quarter]+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[3*quarter]+"%", opacity:"1.0"}, 2500, function(){$('span').eq(3*quarter+1).text(widths[3*quarter+1]+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[3*quarter+1]+"%", opacity:"1.0"}, 2500, function(){$('span').eq(3*quarter+2).text(widths[3*quarter+2]+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[3*quarter+2]+"%", opacity:"1.0"}, 2500)})});
			*/
			
			}
			
			
			
		if (options.staggered == false)
			{
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
				}else if(options.staggered == true)
					{
						QuarterStagger(0);
						
						$('ul#toggle li').eq(0).bind("click", function(){
						$(this).addClass('active').siblings().removeClass('active');
						QuarterStagger(0);
						
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
					
					}
		});
	
};