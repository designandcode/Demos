jQuery.fn.modules = function(options) {

//var home = '#home';

var init = {
			init : false,
			pages : ['admin', 'benefits', 'blog', 'contact', 'faq', 'home', 'privacy', 'realtor', 'registration', 'resources', 'terms', 'states', 'pre_registration', 'paypal']
			//home : 'home',
			//admin : 'admin'
}

var options = $.extend(init, options);

return this.each(function() {

for (i in options.pages){
if ($('body').attr('id') == options.pages[i] && options.init == true)
	{
		
		$.getScript('jQuery/modules.' + options.pages[i] + '.js');
		
	};
}
});




};