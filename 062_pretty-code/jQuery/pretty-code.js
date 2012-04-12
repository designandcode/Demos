$(function(){
		$("pre").wrapInner("<span></span>");
		$('.code-block').mouseover(function(){
		//alert($('pre span', this).width());
			var blockWidth = $('pre span', this).width() + 40;
			var defaultWidth = $('.code-block').width();
			if (blockWidth - 40 > defaultWidth){
			$(this).css({'width': blockWidth+'px'});
			} else if (blockWidth - 40 < defaultWidth) {
			$(this).css({'width': defaultWidth+'px'});
			}
			$(this).unbind('mouseover');
		});
		
});