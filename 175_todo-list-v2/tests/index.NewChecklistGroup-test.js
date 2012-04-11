$(function(){
		module("NewChecklistGroup");
		//module("Module A");
		test("a basic test example", function(){
			ok( true, "this test is fine" );
			var value = "Foooooobar!!!";
			equals( "hello", value, "We expect value to be hello" );
		});
		
		//module("Module B");
		
		test("first test within module", function(){
			ok( true, "all pass" );
		});
		
		test("second test within module", function(){
			ok( true, "all pass" );
		});
		
		//module("Module C");
		
		test("some other test", function(){
			expect(2);
			equals( true, false, "failing test" );
			equals( true, true, "passing test" );
		});
	});