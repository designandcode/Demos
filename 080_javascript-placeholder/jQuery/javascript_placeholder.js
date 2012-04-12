jQuery.fn.placeholder = function(options) {

	var defaults = {
			name: 'placeholder',
			width: 300,
			height: 75,
			vertical: (options.height-11)/2,
			jFloat: 'left',
			bcolor: 'red',
			margin: 'auto',
			display: 'block',
			color: '#333',
			bgColor: '#ccc',
			textAlign: 'center',
			border: '1px solid'
		};
	

var options = $.extend(defaults, options);
    return this.each(function() {
			$(this).append('<div class="' + options.name + '"></div>');
			
			$('.' + options.name, this).html('<div>' + options.width + ' x ' + options.height + '</div>');
			$('.' + options.name, this).css({
				color: options.color,
				backgroundColor: options.bgColor,
				textAlign: options.textAlign,
				border: options.border,
				borderColor: options.bcolor,
				width: options.width,
				height: options.height,
				cssFloat: options.jFloat,
				margin:options.margin,
				display: options.display
			});
			$('.' + options.name, this).children().css({
				marginTop: options.vertical
			});
			
	});
};