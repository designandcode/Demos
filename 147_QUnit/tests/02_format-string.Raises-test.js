module("Raises");
		
		test("raises", function() {
			raises(function() {
				throw new CustomError();
				}, CustomError, "must throw error to pass");
			});