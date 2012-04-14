$(function(){

module("WriteMeArgsList:Tests one argument and valid last argument");
test('should_create_a_ol_wrapper_inside_.section5_and_fill_that_ol_with_"&lt;li>Some Foo&lt;/li>"', function(){
			
			var section5value = $('.args .section5 ol').html();
			
			equals( section5value, "<li>Some Foo</li>");
		});
		
module("WriteMeArgsList:Tests several arguments and valid last argument");
test('should_create_a_ol_wrapper_inside_.section1_and_fill_that_ol_with_"&lt;li>GoodBye&lt;/li>&lt;li>Foo&lt;/li>&lt;li>Bar&lt;/li>&lt;li>Baz&lt;/li>&lt;li>Bat&lt;/li>"', function(){
			
			var section5value = $('.args .section1 ol').html();
			
			equals( section5value, "<li>GoodBye</li><li>Foo</li><li>Bar</li><li>Baz</li><li>Bat</li>");
		});		
		
		
		
		
		
	});		