$(function(){

	var element = 'input.deleteSelected';
	
	$(element).live("click", function(event){
		event.preventDefault();
			var i = $('#tasks input.checkbox').length;
		
			$('input.checkbox:checked').each(function(){
				$(this).parent().remove();
			});
			//alert(newTask.length);
			//$('#tasks').prepend(newTask);
		//index = $('input.checkbox').index(this); //alert(index);
		module("DeleteSelectedTask");
		//module("Module A");
		test("Tests Selected Task Deleted When Delete Selected Button Clicked", function(){
			//i++;
			//alert(newTask.length);
				equals(  $('#tasks input.checkbox').length, 0, 'We expect there to be ' + 0 + ' items' );
				//i++;
			})
			
		
		});
	
		
	});
	
	
		