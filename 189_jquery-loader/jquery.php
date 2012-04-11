<?php

$jquery = 

<<<JQUERY
<div id="script">
<script type="text/javascript">
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
</script>
</div>
JQUERY;

echo $jquery;

?>