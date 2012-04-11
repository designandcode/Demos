/*
** TDONS namespace 
** TDONS stands for To DO Name Space
*/

TDONS = {
	Style: {
	
	},
	db: {
		"get": function() { return jQuery.parseJSON(localStorage.getItem("storage")) },
		"set": function() {
		/* {"count": "4","tasks": {"1":["Get Milk", "started"],"2":["Get Eggs", "completed"],"3":["Pick up Sticks", "started"],"4":["Introduce Foo to Bar", "deleted"],"5":["Introduce Foo to Bar", "started"]} } */
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
		},
		"window_unload_update_db_with_tasks":
			function() {
			$(window).unload(function(){
				TDONS.db.set();
			});
		}	
	},
	Dom: {
		"this_load_populate_with_tasks":
			function(element) {
				
					var db = TDONS.db.get();
										
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
			}
	},
	Blocking: {
		"confirm_action":
			function(message) {
				confirmAction = confirm(message);
			}
	},
	Behavior: {
		"this_click_change_next_input_state":
			function(element) {				
				$(element).live("click", function(){
					index = $('input.checkbox').index(this);
						var checkBoxState = $('input.checkbox').eq(index).attr("checked");
						if (checkBoxState == "checked") {
							$(this).parent().removeClass().addClass("completed");
							$('input.input').eq(index).addClass("checked").attr("disabled", true);
							var getCheckedInputBoxState = $('input.input').eq(index).attr("class");
							var getCheckedInputBoxDisabledState = $('input.input').eq(index).attr("disabled");
						}
						if (checkBoxState != "checked") {
							$(this).parent().removeClass().addClass("started");
							$('input.input').eq(index).removeClass("checked").removeAttr("disabled");
							var getCheckedInputBoxState = $('input.input').eq(index).attr("class");
							var getCheckedInputBoxDisabledState = $('input.input').eq(index).attr("disabled");
						}					
				});
			},
		"this_click_add_task_and_set_default_task_text":
			function(element, inputDefaultValue) {
				$(element).click(function(event){
					event.preventDefault();				
					var i = $('#tasks p').length;
					var newTask = $('<p class="started"><input type="checkbox" class="checkbox" data-id="'+(i+1)+'" /><input type="text" class="input" value="'+inputDefaultValue+'" data-id="'+(i+1)+'" /><img class="delete" src="images/milky_119.png" /></p>');
					$('#tasks').prepend(newTask);
					//i++;
				});
			},
		"self_click_delete_task":
			function(element, message) {
				$(element).live("click", function(event){
				
					if (message) {
						TDONS.Blocking.confirm_action(message);
						
						if (confirmAction == true) {
							//$(this).parent().remove();
							$(this).parent().hide().removeClass().addClass("deleted");
						} else {
							return;
						}
					}
					else {
						//$(this).parent().remove();
							$(this).parent().hide().removeClass().addClass("deleted");
					}				
				});
			},
		"self_focus_toggle_text_and_set_default_task_text":
			function(element, inputDefaultValue) {
				$(element).live("focus", function(){
				
					var index = $('input.input').index(this);
					text = $('input.input').eq(index).val();
					if (text == inputDefaultValue) {
						$('input.input').eq(index).val("");
					}
				});
				
				$(element).live("focusout", function(){
					
					var index = $('input.input').index(this); 
					
					if ($('input.input').eq(index).val() == "") {
						$('input.input').eq(index).val(inputDefaultValue);
					}
					
					else {
						text = $('input.input').eq(index).val();
						$('input.input').eq(index).val(text);
					}
					
				});
			},
		"this_click_change_all_input_state":
			function(element) {
				$(element).live("click", function(){
					var checkBoxState = $('input.selectAll').attr("checked"); 
					if (checkBoxState == 'checked') {
						$('input.checkbox').attr("checked", true);
						$('input.input').attr("disabled", true);
					
					}
					if (checkBoxState != 'checked') {
						$('input.checkbox').attr("checked", false);
						$('input.input').attr("disabled", false);
					
					}
				});
				$('input.checkbox').live("click", function(){
					$('input.selectAll').attr("checked", false); 
				});
			},
		"this_click_delete_selected_items":
			function(element, message) {
				$(element).live("click", function(event){
					event.preventDefault();
					var i = $('#tasks input.checkbox:checked').length;
					if (i > 0) {
						if (message && message != false) {
							TDONS.Blocking.confirm_action(message);
							
							if (confirmAction == true) {
								$('input.checkbox:checked').each(function(){
									$(this).parent().hide().removeClass().addClass("deleted");
								});
							} else {
								return;
							}
						} else if (message == false) {
							$('input.checkbox:checked').each(function(){
									$(this).parent().hide().removeClass().addClass("deleted");
								});
						} else {
						TDONS.Blocking.confirm_action("You are about to delete " + i + " tasks. Are you sure?");
							if (confirmAction == true) {
								$('input.checkbox:checked').each(function(){
									$(this).parent().hide().removeClass().addClass("deleted");
								});		
							} else {
								return;
							}
						}
					} else {
						return;
					}
				});
			}	
	}
}