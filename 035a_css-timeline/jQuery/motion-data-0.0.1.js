$(function(){
						
		widthSpans = $('span');			
		var widths = [];
		for (i=0;i<widthSpans.length;i++)
			{
				widths.push($('span').eq(i).css("width"));
			};
		
		countLi = $('ul#toggle li').length;
		
		
		
		function Quarter(quarter){
			$('.Q1,.Q2,.Q3,.Q4').hide();
			$('.Q'+(quarter+1)).show();
			
			for (i=3*quarter;i<=3*quarter+2;i++)
				{
					$('span').eq(i).text(((parseInt(widths[i])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[i], opacity:"1.0"},{ duration: 2500, queue: true});
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