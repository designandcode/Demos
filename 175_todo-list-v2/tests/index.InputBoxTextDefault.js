$(function(){

	var element = 'input.input';
	
	$('input.input').val('Enter a New Task');
	
		module("InputBoxTextDefault");
		test("Tests Default Value Given To All Inputs", function(){
				equals(  $('input.input').eq(0).val(), 'Enter a New Task', 'We expect value of input to be "Enter a New Task"' );
				equals(  $('input.input').eq(1).val(), 'Enter a New Task', 'We expect value of input to be "Enter a New Task"' );
				equals(  $('input.input').eq(2).val(), 'Enter a New Task', 'We expect value of input to be "Enter a New Task"' );
				equals(  $('input.input').eq(3).val(), 'Enter a New Task', 'We expect value of input to be "Enter a New Task"' );
			})
			
		
		
	
		
	});
	
	
		