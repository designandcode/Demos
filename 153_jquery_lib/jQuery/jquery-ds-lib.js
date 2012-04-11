jQuery.fn.dsLib = function(options) {

var element = {foo : 'foo'};
//var element 

var options = $.extend(element, options);
    return this.each(function() {
		
		//alert(options.foo);
		document.write(options.foo);
		
		})

}