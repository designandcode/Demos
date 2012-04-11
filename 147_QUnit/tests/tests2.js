


$(function(){


var page = location.href;
var qTestPattern = /\?/;
var qTest = page.split(qTestPattern);


if (qTest[1] == "test=1")
	{
		
		
		path = location.pathname.replace(/\..+/, "");
		
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
		$.getScript('tests/' + test + '-test.js');
		
	};

});




