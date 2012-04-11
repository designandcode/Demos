$(function(){

	var element = 'input.addNewTask';
	inputDefaultValue = 'Enter a New Task';
	$(element).live("click", function(event){
		event.preventDefault();
			var i = $('#tasks input.checkbox').length;
		
			var newTask = $('<p class="started"><input type="checkbox" class="checkbox" data-id="'+(i+1)+'" /><input type="text" class="input" value="'+inputDefaultValue+'" data-id="'+(i+1)+'" /><img class="delete" src="images/milky_119.png" /></p>');
			//alert(newTask.length);
			$('#tasks').prepend(newTask);
		//index = $('input.checkbox').index(this); //alert(index);
		module("CreateNewTask");
		//module("Module A");
		test("Tests New Task Created When Add New Item Button Clicked and Correct Default Value", function(){
			i++;
			//alert(newTask.length);
				equals(  $('#tasks input.checkbox').length, i, 'We expect there to be ' + i + ' items' );
				equals( $('input.input').eq(0).val(), 'Enter a New Task', 'We expect the value of the new task to be "Enter a New Task" by default' );
				//equals(  getCheckedInputBoxState, "input checked", 'We expect class for $(input.input).eq(0) to be "input checked"' );
				//equals(  getCheckedInputBoxDisabledState, "disabled", 'We expect disabled attribute for $(input.input).eq(0) to be "disabled"' );
				//i++;
			})
			
		
		});
	
		
	});
	
	
		