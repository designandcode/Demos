var values = { name : "World" };
			
		function format(string, values) {
			for (var key in values) {
			string = string.replace(new RegExp("\{" + key + "\}", "g"), values[key]);
			}
			return string;
			}	