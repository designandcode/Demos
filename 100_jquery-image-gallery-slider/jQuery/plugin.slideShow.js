jQuery.fn.slideShow = function(options) {

var defaults = {
		imgWidth : 190,
		imgHeight : 120,
		imgPerRow : 4,
		imgRows : 3,
		imgTotalImages : options.imgPerRow * options.imgRows,
		imgSpan : true,
		imgNav : true
};

var options = $.extend(defaults, options);
    return this.each(function() {

	$(this).append('<div id="topxLeftArrows"><img src="images/left01.jpg" class="topxPage1" /></div>');
	$(this).append('<div id="topxRightArrows"><img src="images/right01.jpg"  class="topxPage1"/></div>');
	$(this).children().not('div#topxLeftArrows, div#topxRightArrows').wrap('<div class="topxImage" />');
	if (options.imgSpan == true){
	$('.topxImage').append('<span />');
	$('div.topxImage span').css({width : options.imgWidth, height : (options.imgHeight/4)});
	$('div.topxImage').mouseenter(function(){
			var title = $(this).find('img').attr("alt");
			
			$(this).find('span').append(title).show();
		}).mouseleave(function(){
			$(this).find('span').text("").hide();
		});
	}	
	
	navControlImgWidth = 51;
	navControlImgHeight = navControlImgWidth;
	navControlWidth = navControlImgWidth;
	navControlHeight = Math.ceil((options.imgTotalImages  / options.imgPerRow)) * options.imgHeight;
	navControlImgTop = (navControlHeight - navControlImgWidth) / 2
	imgContainerWidth = options.imgWidth * options.imgPerRow;
	imgContainerHeight = navControlHeight;
	slideShowWidth = imgContainerWidth + (2 * navControlImgWidth);
	slideShowHeight =  navControlHeight;
	
	$(this).css({width : slideShowWidth,
								height : slideShowHeight});
	$('div.topxImage').css({width : options.imgWidth,
								height : options.imgHeight});
	$('div#topxLeftArrows, div#topxRightArrows').css({width : navControlWidth,
								height : navControlHeight});	
	$('div#topxLeftArrows img, div#topxRightArrows img').css({marginTop : navControlImgTop});
	
	
	pagesCount = Math.ceil(($('div.topxImage').length) / options.imgTotalImages);
	
	
	for (v=0;v<=pagesCount;v++){
		for (j=((options.imgTotalImages)*v);j<((options.imgTotalImages)*(v+1));j++){
			$('div.topxImage').eq(j).addClass('topxPages' + ((v+1)));
		}
		}
	for (k=1;k<=pagesCount;k++){
	$('.topxPages' + k).wrapAll('<div class="topxImagesContainer" />');
	}
	$('div.topxImagesContainer').css({width : imgContainerWidth,
								height : imgContainerHeight});
	$('div.topxImagesContainer').eq(0).show();
	images = $('div.topxImage').find('a img');
	
	imgCount = options.imgTotalImages;
	images.hide().each(function(){
			
			// Fades them staggered based on order 
			for (i=0;i<imgCount;i++)
			$(images[i]).fadeIn(500*i);
			
			
		});
		
	//page = '1';
	if (options.imgNav == false){
		$('div#topxLeftArrows img, div#topxRightArrows img').hide();
	}
	function galleryRight(page){
	$('div#topxRightArrows img.topxPage' + page).live('click', function(){
		$(this).removeClass().addClass('topxPage' + (page+1));
		$('div#topxRightArrows img.topxPage' + pagesCount).hide();
		$('div#topxLeftArrows img.topxPage' + page).removeClass().addClass('topxPage' + (page+1));
		
		$('div.topxImagesContainer').find("div img").fadeOut(2000);
		$('div.topxImagesContainer').fadeOut(2000);
		$('div.topxImagesContainer').eq(page).show();
		images = $('div.topxImagesContainer').eq(page).find("div img")
		images.hide().each(function(){
			
			// Fades them staggered based on order 
			
			for (i=0;i<imgCount;i++)
			$(images[i]).fadeIn(500*i);
			
			
		});
		});
	};
	
	
	function galleryLeft(page){
	$('div#topxLeftArrows img.topxPage' + page).live('click', function(){
		$('div#topxRightArrows img').show();
		$('div#topxLeftArrows img.topxPage1').hide();
		$('div#topxRightArrows img.topxPage' + page).removeClass().addClass('topxPage' + (page-1));
		$(this).removeClass().addClass('topxPage' + (page-1));
		
		$('div.topxImagesContainer').find("div img").fadeOut(2000);
		$('div.topxImagesContainer').fadeOut(2000);
		$('div.topxImagesContainer').eq(page-2).show();
		images = $('div.topxImagesContainer').eq(page-2).find("div img")
		images.hide().each(function(){
			
			// Fades them staggered based on order 
			
			for (i=0;i<imgCount;i++)
			$(images[i]).fadeIn(500*i);
			
			
		});
		});
	};

	for (i=1;i<pagesCount;i++){
	galleryRight(i);
	};
	
	for (j=2;j<=pagesCount;j++){
	galleryLeft(j);
	};

	
});
};