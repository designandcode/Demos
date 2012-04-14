$(function(){

module("WriteMeArgsTable:Tests one argument and valid last argument");
test('should_create_a_table tbody_wrapper_inside_.section5_and_fill_that_table tbody_with_"&lt;tr>&lt;td>Some Foo&lt;/td>&lt;/tr>"', function(){
			
			var section5value = $('.args .section5 table tbody').html();
			var section5title = $('.args .section5 table thead').html();
			
			equals( section5value, "<tr><td>Some Foo</td></tr>" );
			equals( section5title, "Important Title" );
		});
		
module("WriteMeArgsTable:Tests several arguments and valid last argument");
test('should_create_a_table tbody_wrapper_inside_.section1_and_fill_that_table tbody_with_"&lt;tr>&lt;td>GoodBye&lt;/td>&lt;/tr>&lt;tr>&lt;td>Foo&lt;/td>&lt;/tr>&lt;tr>&lt;td>Bar&lt;/td>&lt;/tr>&lt;tr>&lt;td>Baz&lt;/td>&lt;/tr>&lt;tr>&lt;td>Bat&lt;/td>&lt;/tr>"', function(){
			
			var section1value = $('.args .section1 table tbody').html();
			
			equals( section1value, "<tr><td>GoodBye</td></tr><tr><td>Foo</td></tr><tr><td>Bar</td></tr><tr><td>Baz</td></tr><tr><td>Bat</td></tr>");
		});		
		
		
		
		
		
	});		