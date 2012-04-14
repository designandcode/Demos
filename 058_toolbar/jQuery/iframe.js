$(function(){
	//alert('foo');
	
	$('.toIframe').click(function(){
		thisSource = $(this).attr('href');
		document.location = 'file://localhost/C:/apache/htdocs/apache_upload/z_demos/058_toolbar/index.html?source='+thisSource;
	//alert(thisSource);
	$('body').append();
		return false;
	});
	
	frameHeight =  window.innerHeight - 40;
	$('iframe').css({'height':frameHeight});
	$('#parent').css({'padding':0, 'margin':0});
	$('#parent h1').css({'position':'relative',
						'margin':0,
						'width':'100%',
						'height':'40px',
						'position':'fixed',
						'border-bottom':'1px solid #ccc',
						'background-color':'#0af'});
	$('#parent h1 span.logo').css({'position':'absolute',
									'top':'4px',
									'left':'30px'});
	$('#parent h1 span.close').css({'position':'absolute',
							'top':'4px',
							'right':'30px'});
	$('#parent h1 span a').css({'text-decoration':'none',
								'color':'#fff'});
	$('#parent iframe').css({'width':'100%',
							'display':'block',
							'margin-top':'40px',
							'overflow':'auto'});
});