jQuery.fn.tests = function(options) {

//var home = '#home';

var init = {
			init : false,
			pages : ['01_qunit', '02_format-string', '03_account-transfer']
			//home : 'home',
			//admin : 'admin'
}

var options = $.extend(init, options);

return this.each(function() {






if (options.init == true)
	{
		
		
		var path = location.pathname.replace(/\..+/, "");
		
		var pattern = /\//;
		var match = path.split(pattern);
		var last = match[match.length - 1];
		
		if (last){
			test = last;
			}else {
				test = "index";
			}
		
		
		
		// Load QUnit JS/CSS/HTML if init == true
		$.getScript('jquery-qunit-9887663/qunit/qunit.js');
		$('head').append('<link type="text/css" rel="stylesheet" href="jquery-qunit-9887663/qunit/qunit.css" />');
		$('body').prepend('<h1 id="qunit-header">QUnit example</h1><h2 id="qunit-banner"></h2><div id="qunit-testrunner-toolbar"></div><h2 id="qunit-userAgent"></h2><ol id="qunit-tests"></ol><div id="qunit-fixture">test markup, will be hidden</div>');
		
		// Load Page Specific Test
		$.getScript('tests/' + test + '.js');
		
	};

});




};