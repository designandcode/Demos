jQuery.fn.tests = function(options) {

	var pages = { pages : [] }

	var options = $.extend(pages, options);

	return this.each(function() {

	var page = location.href;
	var qTestPattern = /\?/;
	var qTest = page.split(qTestPattern);

	if (qTest[1] == "test=1")
		{
			
			
						
			// Load QUnit JS/CSS/HTML if qTest[1] == "test=1"
			$.getScript('jquery-qunit-9887663/qunit/qunit.js');
			$('head').append('<link type="text/css" rel="stylesheet" href="jquery-qunit-9887663/qunit/qunit.css" />');
			$('body').prepend('<h1 id="qunit-header">QUnit example</h1><h2 id="qunit-banner"></h2><div id="qunit-testrunner-toolbar"></div><h2 id="qunit-userAgent"></h2><ol id="qunit-tests"></ol><div id="qunit-fixture">test markup, will be hidden</div>');
						
			
			if (options.pages) {
				path = location.pathname.replace(/\..+/, "");
				
				var pattern = /\//;
				var match = path.split(pattern);
				var last = match[match.length - 1];
				
				if (last){
					test = last;
					}else {
						test = "index";
					}
				testsCount = options.pages.length;
				for (i=0;i<testsCount;i++) {
				$.getScript('tests/' + test + '.'+options.pages[i]+'-test.js');
				}
			} 
			
			if (options.pages == "") {
		
				$.getJSON('tests/tests.json', function(data) {
				
					path = location.pathname.replace(/\..+/, "");
					
					var pattern = /\//;
					var match = path.split(pattern);
					var last = match[match.length - 1];
					
					if (last){
						test2 = last;
						}else {
							test2 = "index";
						}
				
					allTests = [];
					for ( i in data.tests[test2] ) {
						
						$.getScript('tests/' + test2 + '.'+data.tests[test2][i]+'-test.js');
					}
			
				});
			
			}
			
		};

	});
};

		