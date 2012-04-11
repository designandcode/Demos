$(function(){

	var element = 'input.input';
	
	$(element).live("focus", function(){
	
		var index = $('input.input').index(this);
		text = $('input.input').eq(index).val();
		
		module("InputBoxTextToggleFocus");
		if (text == "Enter a New Task") {
		$('input.input').eq(index).val("");
		test("Tests That The Text In Input Is Removed On Focus", function(){
			
			equals(  $('input.input').eq(index).val(), 'foo', 'We expect value of input to be ""' );
			
		});
		
		}
		
	
		
	
		
	});
	
	
	$(element).live("focusout", function(){
		
		var index = $('input.input').index(this); //alert(index);
		
		module("InputBoxTextToggleUnfocus");
		if ($('input.input').eq(index).val() == "") {
			$('input.input').eq(index).val("Enter a New Task");
			
		
			test("Tests That The Text In Input Is Brought Back On Unfocus If Text Is Empty", function(){
				
					equals(  $('input.input').eq(0).val(), 'Get Milk', 'We expect value of input to be "Get Milk"' );
					equals(  $('input.input').eq(1).val(), 'Get Eggs', 'We expect value of input to be "Get Eggs"' );
					equals(  $('input.input').eq(2).val(), 'Pick up Sticks', 'We expect value of input to be "Pick Up Sticks"' );
					equals(  $('input.input').eq(3).val(), 'Introduce Foo to Bar', 'We expect value of input to be "Introduce Foo to Bar"' );
				
			});
		}
		
		else {
			text = $('input.input').eq(index).val();
			$('input.input').eq(index).val(text);
			test("Tests That The Text In Input Is Brought Back On Unfocus If Text Not Empty", function(){
				
					equals(  $('input.input').eq(0).val(), 'Get Skim Milk', 'We expect value of input to be "Get Skim Milk"' );
					equals(  $('input.input').eq(1).val(), 'Get Eggs', 'We expect value of input to be "Get Eggs"' );
					equals(  $('input.input').eq(2).val(), 'Pick up Sticks', 'We expect value of input to be "Pick Up Sticks"' );
					equals(  $('input.input').eq(3).val(), 'Introduce Foo to Bar', 'We expect value of input to be "Introduce Foo to Bar"' );
				
			});
		}
		
	});
	
	
		
});