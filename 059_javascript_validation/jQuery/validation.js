$(function(){
	$('input.username').focusout(function(){
		var usernameValue = $('input.username').val();
		var filter = /[^A-Za-z0-9]/;
		
		if(filter.test(usernameValue) == true){
			alert('You typed an illegal character');
		}
		
	});
});