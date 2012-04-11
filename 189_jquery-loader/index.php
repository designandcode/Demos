<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>EMPTY</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!--script type="text/javascript" src="jQuery/jquery-1.6.1.min.js"></script-->
<!--script type="text/javascript">
	if(typeof jQuery == 'undefined'){
		// jQuery hasn't been loaded... so let's inject it in using an anonymous function that will release jQuery once the function completes.
		
		(function(){
			var head = document.getElementsByTagName('head')[0];
			var script = document.createElement('script');
			
			script.type = 'text/javascript';
			script.src = 'http://code.jquery.com/jquery-1.7.1.min.js';
			
			head.appendChild(script);
			
			script.onload = function(){
				jQuery(function($){
					console.log('foo');
					$('#debug').append('bar');
				});
			}
			
			
		})();
	} else{
		// Otherwise, use the jQuery that is already loaded
		
		jQuery(function($){
					console.log('foo');
					$('#debug').append('bar');
				});
	}
</script-->
<!--script type="text/javascript" src="tests/tests.js"></script-->
<!--script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script-->
<script>
	/*$(function(){
		//$("body").tests(); Works if tests/01_qunit-test.js exists and has logic - else prints no tests (only test container)
		$("body").tests({pages: ['CheckBoxState']}); //tests will be run in this order
		//$("body").tests(); //tests will be run in this order

		
	});*/
</script>
</head>
<body>
<?php include('jquery.php'); ?>
<div id="debug"></div>
<script>
jQuery(function($){
	console.log('baz');
});
</script>
I CAN HAZ TDD?
</body>
</html>
<script type="text/javascript" src="jQuery/jquery-1.6.1.min.js"></script>