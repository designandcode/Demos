$(function(){
module("Module B");
		
		test("some other test", function(){
			expect(2);
			equals( true, false, "failing test" );
			equals( true, true, "passing test" );
		});
	});		