$(function(){

	var element = '#tasks';
	/*
	var obj = {
		"count": "4",
		"tasks": {
			"1":["Get Milk", "started"],
			"2":["Get Eggs", "completed"],
			"3":["Pick up Sticks", "started"],
			"4":["Introduce Foo to Bar", "deleted"],
			"5":["Introduce Foo to Bar", "started"]
		}
	};
	*/
	//var obj = '{	"count": "4",	"tasks": {		"1":["Get Milk", "started"],		"2":["Get Eggs", "completed"],		"3":["Pick up Sticks", "started"],		"4":["Introduce Foo to Bar", "deleted"],		"5":["Introduce Foo to Bar", "started"]	} }';
	
	//localStorage.setItem("storage", obj);
	
	//var dbarray = [];
	var db = jQuery.parseJSON(localStorage.getItem("storage"));
	
		for ( i in db['tasks'] ) {
						if (db['tasks'][i][1] != "deleted" && db['tasks'][i][1] != "completed") {
							$(element).append('<p class="started"><input type="checkbox" class="checkbox" data-id="'+i+'" /><input type="text" class="input" value="'+db['tasks'][i][0]+'" data-id="'+i+'"  /><img class="delete" src="images/milky_119.png" /></p>');
						} 
						if (db['tasks'][i][1] == "completed") {
						$(element).append('<p class="completed"><input type="checkbox" class="checkbox" data-id="'+i+'" checked /><input type="text" class="input" value="'+db['tasks'][i][0]+'" data-id="'+i+'" disabled /><img class="delete" src="images/milky_119.png" /></p>');
						}
						if (db['tasks'][i][1] == "deleted") {
							$(element).append('<p style="display:none" class="deleted"><input type="checkbox" class="checkbox" data-id="'+i+'" /><input type="text" class="input" value="'+db['tasks'][i][0]+'" data-id="'+i+'"  /><img class="delete" src="images/milky_119.png" /></p>');
						} 
					}
	
	/*
	for ( i in db['tasks'] ) {
		if (db['tasks'][i][1] != "deleted" && db['tasks'][i][1] != "completed") {
			$('#tasks').append('<p><input type="checkbox" class="checkbox" /><input type="text" class="input" value="'+db['tasks'][i][0]+'"  /><img class="delete" src="images/milky_119.png" /></p>');
		} 
		if (db['tasks'][i][1] == "completed") {
		$('#tasks').append('<p><input type="checkbox" class="checkbox" checked /><input type="text" class="input" value="'+db['tasks'][i][0]+'" disabled /><img class="delete" src="images/milky_119.png" /></p>');
		}
	}
	*/
	module("PopulateViewWithTasks");
	test("#tasks populated with db['tasks']", function(){
		equals($('input.input').eq(0).val(), "Get Milk", 'We expect the first input value to be "Get Milk"');
		equals($('input.input').eq(1).val(), "Get Eggs", 'We expect the second input value to be "Get Eggs"');
		equals($('input.input').eq(3).val(), "Introduce Foo to Bar", 'We expect the fourth input value to be "Introduce Foo to Bar"');
	});
	
	
	
	
	
		
	});
	
	
		