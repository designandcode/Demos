$(function()
	{
	$("#newSpanButton").click
	(function()
		{
		var spanText=$("#spanText").val();
		if (spanText != "")
		{
		$("<li href=\"javascript:void(0)\" id=\"newSpanBuilt\">" +spanText+  "<img id=\"spanClose2\" src=\"images/001_02.png\" /></li>").hide().insertBefore("#newSpanBuilt:first").fadeIn("slow");
		}
		$("#spanText").empty();
		});
	});


/*	
$(function()
	{
	$("#newSpanButton").bind
	("click", function()
		{
		$("#message_flash").show();
		}), $(function()
			{
			setTimeout(function()
				{
				$("#message_flash").fadeOut("slow", 
					function () 
					{
					$(this).remove();
					});
				}, 10000);
			});
	});		
*/

$(function() 
	{
	$('#newSpanButton').click
	(function() 
		{
		$("#message_flash")
		//.show()
		.fadeIn(1000)
		.animate({opacity: 1.0}, 1000)
		.fadeOut(2000, 
		function() 
			{
			$(this).hide();
			});
		});
	});	


	
/*
$(function()
	{
	setTimeout(function()
				{
				$("#message_flash").fadeOut("slow"); 
				}, 2000);
	});
*/


	
/*
$(function()
	{
	$(".spanBuilder a").hover
	(function()
		{
		$(this).next("newSpanBuilt").append("#spanImg");
		});
	});
*/
	
/*	
$(function()
	{
	$("#newSpanButton").click
	(function()
		{
		$("#newSpanBuilt:first").html("<span id=\"newSpanBuilt\">1st Span<img id=\"spanClose\" src=\"http://localhost:8080/HTML/images/24x24_red_x.png\" /></span>");
		});
		return true;
	});	
*/

/*	
$(function()
	{
	$("#spanClose").click
	(function()
		{
		$("#newSpanBuilt:first").remove();
		$("#spanClose2:first").remove();
		});
	});	
	


$(function() 
	{
	$('#spanClose').click
	(function() 
		{
		$("#message_flash_2")
		.show()
		.fadeIn(2000)
		.animate({opacity: 1.0}, 3000)
		.fadeOut(2000, 
		function() 
			{
			$(this).hide();
			});
		});
	});	
*/	
	
$("li img").live("click", function(){
      $(this).parent().remove();
    });
	
$(function() 
	{
	$('li img').live("click", function() 
		{
		$("#message_flash_2")
		.show()
		.fadeIn(1000)
		.animate({opacity: 1.0}, 1000)
		.fadeOut(2000, 
		function() 
			{
			$(this).hide();
			});
		});
	});	



 $(document).keydown(function(e){
                if (e.keyCode == 13) 
                {
                    //e.preventDefault();
					//var textNew = $('#spanText').val() + '<br />';
					$('#spanText').append("&lt;br /&gt;");
                };
					//alert(e.keyCode);
            });
