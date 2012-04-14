$(function(){

module("WriteMeArray:Tests one argument and valid last argument");
test('should_create_a_span_wrapper_inside_.section5_and_fill_that_span_with_"Some Foo"', function(){
			
			var section5value = $('.array .section5 span').html();
			
			equals( section5value, "Some Foo");
		});
		
module("WriteMeArrayTests several arguments and valid last argument");
test('should_create_a_span_wrapper_inside_.section1_and_fill_that_span_with_"GoodByeFooBarBazBat"', function(){
			
			var section5value = $('.array .section1 span').html();
			
			equals( section5value, "GoodByeFooBarBazBat");
		});		
		
		
		
		
		
	});		