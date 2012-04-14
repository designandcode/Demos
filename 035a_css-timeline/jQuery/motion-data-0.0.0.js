$(function(){
						
		widthSpans = $('span');			
		var widths = [];
		for (i=0;i<widthSpans.length;i++)
			{
				widths.push($('span').eq(i).css("width"));
			};
		//countWidths = widths.length; 
		countLi = $('ul#toggle li').length;
		
		
		$('.Q2,.Q3,.Q4').hide();
		$('#data1').text(((parseInt(widths[0])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[0], opacity:"1.0"},{ duration: 2500, queue: true});
		$('#data2').text(((parseInt(widths[1])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[1], opacity:"1.0"},{ duration: 2500, queue: true});
		$('#data3').text(((parseInt(widths[2])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[2], opacity:"1.0"},{ duration: 2500, queue: true});
					
				$('ul#toggle li').eq(0).bind("click", function(){
					$(this).addClass('active').siblings().removeClass('active');
					$('.Q2,.Q3,.Q4').hide();
					$('.Q1').show();
					$('#data1').text(((parseInt(widths[0])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[0], opacity:"1.0"},{ duration: 2500, queue: true});
					$('#data2').text(((parseInt(widths[1])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[1], opacity:"1.0"},{ duration: 2500, queue: true});
					$('#data3').text(((parseInt(widths[2])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[2], opacity:"1.0"},{ duration: 2500, queue: true});
					
				});
				$('ul#toggle li').eq(1).bind("click", function(){
					$(this).addClass('active').siblings().removeClass('active');
					$('.Q1,.Q3,.Q4').hide();
					$('.Q2').show();
					
					$('#data4').text(((parseInt(widths[3])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[3], opacity:"1.0"},{ duration: 2500, queue: true});
					$('#data5').text(((parseInt(widths[4])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[4], opacity:"1.0"},{ duration: 2500, queue: true});
					$('#data6').text(((parseInt(widths[5])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[5], opacity:"1.0"},{ duration: 2500, queue: true});
					
				});
				$('ul#toggle li').eq(2).bind("click", function(){
					$(this).addClass('active').siblings().removeClass('active');
					$('.Q1,.Q2,.Q4').hide();
					$('.Q3').show();
					
					$('#data7').text(((parseInt(widths[6])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[6], opacity:"1.0"},{ duration: 2500, queue: true});
					$('#data8').text(((parseInt(widths[7])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[7], opacity:"1.0"},{ duration: 2500, queue: true});
					$('#data9').text(((parseInt(widths[8])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[8], opacity:"1.0"},{ duration: 2500, queue: true});
					
				});
				$('ul#toggle li').eq(3).bind("click", function(){
					$(this).addClass('active').siblings().removeClass('active');
					$('.Q1,.Q3,.Q2').hide();
					$('.Q4').show();
					
					$('#data10').text(((parseInt(widths[9])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[9], opacity:"1.0"},{ duration: 2500, queue: true});
					$('#data11').text(((parseInt(widths[10])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[10], opacity:"1.0"},{ duration: 2500, queue: true});
					$('#data12').text(((parseInt(widths[11])/339)*100).toFixed()+"%").css({width:"0", opacity: "0.0"}).animate({width:widths[11], opacity:"1.0"},{ duration: 2500, queue: true});
					
				});
		//	}
	
	});