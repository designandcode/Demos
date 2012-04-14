$(function(){

module("WriteMeArgsDList:Tests one argument and valid last argument");
test('should_create_a_dl dt_wrapper_inside_.section1_fill_dt_with"Some Title"_and_append_the_dl_with_"&lt;dd>Some Foo&lt;/dd>"', function(){
			
			var section5value = $('.args .section5 dl').html();
			
			equals( section5value, "<dt>Some Title</dt><dd>Some Foo</dd>");
		});
		
module("WriteMeArgsDList:Tests several arguments and valid last argument");
test('should_create_a_dl dt_wrapper_inside_.section1_fill_dt_with"Some Title"_and_append_the_dl_with_"&lt;dd>GoodBye&lt;/dd>&lt;dd>Foo&lt;/dd>&lt;dd>Bar&lt;/dd>&lt;dd>Baz&lt;/dd>&lt;dd>Bat&lt;/dd>"', function(){
			
			var section5value = $('.args .section1 dl').html();
			
			equals( section5value, "<dt>Some Title</dt><dd>GoodBye</dd><dd>Foo</dd><dd>Bar</dd><dd>Baz</dd><dd>Bat</dd>");
		});		
		
		
		
		
		
	});		