jQuery.fn.animatedChart = function(options) {
						
		
		var progressType = {single: new Array(true,2500,"type1","600px")};
		
	var options = $.extend(progressType.single, options);
    return this.each(function() {
		if (options.single[0] == true) {
		
		function countUp(speed){
			var x = 1;
			var interval = setInterval(
				function(){
					if (x < 100)
						{
							x = parseInt(x) + 1;
							if (x > 100){x = 100};
							$('span').text(x+"%");
						}
				}, speed)
			}
			
			//countUp(options.single[1] / 600);
			countUp(2500 / 100);
			$('span.'+options.single[2]).css({width:'0', opacity:'0.0'}).animate({width:options.single[3], opacity:'1.0'}, {duration:options.single[1], queue:false});
			}
		
		
		
		
		
			
			
			

		});
	
};