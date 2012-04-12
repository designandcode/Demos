$(function(){

	$('#short_signup_email').focus();
	$('#short_signup_email').parent().append('<p class="error_email" style="color:red; display:none; font-size:12px">Please enter a valid email</p>');
	$('#short_signup_password, #short_signup_username').focus(function(){
		var email = $('#short_signup_email').val();
		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if(filter.test(email) == true){
			$('p.error_email').fadeOut();
			$('#short_signup_email').css({borderColor:'#ccc'});
			//alert('pass');
			//$('#short_signup_email').append('<p>Fail</p>');
			//return;
		}else{
			//alert('fail');
			$('p#warning_email').remove();
			$('p.error_email').fadeOut();
			$('p.error_email').fadeIn();
			$('#short_signup_email').css({borderColor:'red'});
			$('#short_signup_email').focus();
			return;
		};
		//alert(email);
	});
	
	
	$('#short_signup_password').parent().append('<p class="error_password" style="color:red; display:none; font-size:12px">Please use 8 or more characters</p>');
	$('#short_signup_password').focusout(function(){
		//alert('you left this field');
		var password = $('#short_signup_password').val();
		var passwordLength = $('#short_signup_password').val().length;
		var filter = /^\w$/;
		//if(filter.test(password) == true){
			if(passwordLength >= 8){
				$('p.error_password').fadeOut();
				$('#short_signup_password').css({borderColor:'#ccc'});
			}else{
				$('p#warning_password').remove();
				$('p.error_password').fadeOut();
				$('p.error_password').fadeIn();
				$('#short_signup_password').css({borderColor:'red'});
				return;
				//$('#short_signup_password').focus();
				}
		//}else{
			//alert('password not valid');
		//}
	});
	
	
	$('#short_signup_username').parent().append('<p class="error_username" style="color:red; display:none; font-size:12px">Please use 5 or more characters</p>');
	$('#short_signup_username').parent().append('<p class="error_username2" style="color:red; display:none; font-size:12px">Please use letters and numbers only.</p>');
	/*
	$('#short_signup_username').keyup(function(){
		
		var username = $('#short_signup_username').val();
		var filter = /^[^A-Za-z0-9]*$/;
		if(filter.test(username) == true){
			$('p.error_username2').fadeOut();
			$('p.error_username2').fadeIn();
		}else{
			$('p.error_username2').fadeOut();
		}
	});
	$('#short_signup_username').focusout(function(){
		
		var username = $('#short_signup_username').val();
		var filter = /^[^A-Za-z0-9]*$/;
		if(filter.test(username) == true){
			$('p.error_username2').fadeOut();
			$('p.error_username2').fadeIn();
		}else{
			$('p.error_username2').fadeOut();
		}
	});
	*/
	$('#short_signup_username').focusout(function(){
		//alert('you left this field');
		var username = $('#short_signup_username').val();
		var usernameLength = $('#short_signup_username').val().length;
		var filter = /[^A-Za-z0-9]/;
		//if(filter.test(username) == false){
			if(usernameLength >= 5 && filter.test(username) == false){
				$('p.error_username').fadeOut();
				$('p.error_username2').fadeOut();
				$('#short_signup_username').css({borderColor:'#ccc'});
			}else if (usernameLength < 5){
				$('p#warning_username').remove();
				$('p.error_username').fadeOut();
				$('p.error_username').fadeIn();
				$('#short_signup_username').css({borderColor:'red'});
				return;
				//$('#short_signup_password').focus();
				}else if (filter.test(username) == true){
				$('p#warning_username').remove();
				$('p.error_username2').fadeOut();
				$('p.error_username2').fadeIn();
				$('#short_signup_username').css({borderColor:'red'});
				return;
				
				}
		//}else{
		//	alert('Use letters and numbers only - no spaces or special characters');
		//}
	});
	$('#short_signup_submit').parent().append('<p class="error_submit" style="color:red; display:none; font-size:12px">Please fill in all fields as described</p>');
	$('#short_signup_submit').click(function(){
		var emailLength = $('#short_signup_email').val().length;
		var passwordLength = $('#short_signup_password').val().length;
		var username = $('#short_signup_username').val();
		var usernameLength = $('#short_signup_username').val().length;
		var filter = /[^A-Za-z0-9]/;
		if (emailLength > 0 && passwordLength > 7 && usernameLength > 4 && filter.test(username) == false){
			//alert ('form ready for submission');
			$('form#pre-registration').submit();
			//return false;
		}else{
			//alert ('not yet buddy');
			$('p.error_submit').fadeOut();
			$('p.error_submit').fadeIn();
			//$('#short_signup_submit').parent().append('<p class="error_submit" style="color:red; font-size:12px">Please fill in all fields as described</p>');
			return false;
		}
		// if (emailLength > 0 && passwordLength > 0 && usernameLength > 0) {
		//$(this).attr({'readonly':''});
		
		//}
	});
	
	$('p.error_email, p.error_password, p.error_username, p.error_submit').css({'margin':'0'});
});