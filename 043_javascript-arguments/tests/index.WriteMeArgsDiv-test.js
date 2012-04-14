$(function(){

module("WriteMeArgs:Tests one argument and valid last argument");
test('should_create_a_div_wrapper_inside_.section5_and_fill_that_div_with_"&lt;span>Some Foo&lt;/span>"', function(){
			
			var section5value = $('.args .section5 div').html();
			
			equals( section5value, "<span>Some Foo</span>");
		});
		
module("WriteMeArgs:Tests several arguments and valid last argument");
test('should_create_a_div_wrapper_inside_.section1_and_fill_that_div_with_"&lt;span>GoodBye&lt;/span>&lt;span>Foo&lt;/span>&lt;span>Bar&lt;/span>&lt;span>Baz&lt;/span>&lt;span>Bat&lt;/span>"', function(){
			
			var section5value = $('.args .section1 div').html();
			
			equals( section5value, "<span>GoodBye</span><span>Foo</span><span>Bar</span><span>Baz</span><span>Bat</span>");
		});		
		
		
		
		
		
	});		