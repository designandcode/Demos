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
	//obj = '{	"count": "4",	"tasks": {		"1":["Get Milk", "started"],		"2":["Get Eggs", "completed"],		"3":["Pick up Sticks", "started"],		"4":["Introduce Foo to Bar", "deleted"],		"5":["Introduce Foo to Bar", "started"]	} }';
	
	//localStorage.setItem("storage", obj);
	
	//var dbarray = [];
	
	$(window).unload(function(){
	//$('input.addNewTask').live("click", function(){
	
	//Generate JSON String
		taskCount = $('#tasks p').length;
	var obj = '';
	obj += '{"count":"'+taskCount+'","tasks":{';
	// for each task loop begins
	for (i=0;i<taskCount-1;i++) {
		var status = $('#tasks p').eq(i).attr("class");
		var task = $("input.input").eq(i).val();
		var id = $("input.input").eq(i).data('id');
		obj += '"'+id+'":["'+task+'","'+status+'"],';
	}
	var statusLast = $('#tasks p').eq(taskCount-1).attr("class");
	var taskLast = $("input.input").eq(taskCount-1).val();
	var idLast = $("input.input").eq(taskCount-1).data('id');
	obj += '"'+idLast+'":["'+taskLast+'","'+statusLast+'"]';
	
	// exit loop and close JSON object
	obj += '}}';
	
	
	localStorage.setItem("storage", obj);
	
	/*
	var db = jQuery.parseJSON(localStorage.getItem("storage"));
	for ( i in db['tasks'] ) {
		if (db['tasks'][i][1] != "deleted" && db['tasks'][i][1] != "completed") {
			$('#tasks').append('<p><input type="checkbox" class="checkbox" /><input type="text" class="input" value="'+db['tasks'][i][0]+'"  /><img class="delete" src="images/milky_119.png" /></p>');
		} 
		if (db['tasks'][i][1] == "completed") {
		$('#tasks').append('<p><input type="checkbox" class="checkbox" checked /><input type="text" class="input" value="'+db['tasks'][i][0]+'" disabled /><img class="delete" src="images/milky_119.png" /></p>');
		}
	}
	*/
	
	module("UpdateDBFromView");
	test("#tasks populated with db['tasks']", function(){
		equals(obj, '{"count":"5","tasks":{"1":["Get Milk","started"],"2":["Get Eggs","completed"],"3":["Pick up Sticks","started"],"4":["Introduce Foo to Bar","deleted"],"5":["Introduce Foo to Bar","started"]}}', 'We expect value of obj to be {"count":"5","tasks":{"1":["Get Milk","started"],"2":["Get Eggs","completed"],"3":["Pick up Sticks","started"],"4":["Introduce Foo to Bar","deleted"],"5":["Introduce Foo to Bar","started"]}}');
		//equals($('input.input').eq(1).val(), "Get Eggs", 'We expect the second input value to be "Get Eggs"');
		//equals($('input.input').eq(3).val(), "Introduce Foo to Bar", 'We expect the fourth input value to be "Introduce Foo to Bar"');
	});
	
	//});
	});
	
	
		
	});
	
	
		