
		module("Module A");
		
		test("should_replace_values_between_curly_braces_with_value_declared_matching_key_name", function(){
			
			equal( format("Hello, {name}", values), "Hello, World", "single" )
			equal( format("Hello, {name}, how is {name} today?", values), "Hello, World, how is World today?", "multiple" );
		});