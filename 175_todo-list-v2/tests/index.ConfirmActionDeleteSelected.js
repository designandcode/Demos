$(function(){

	var element = 'input.deleteSelected';
	$(element).live("click", function(event){
			event.preventDefault();
			var i = $('#tasks input.checkbox:checked').length;
			var r=confirm("You are about to delete " + i + " tasks. Are you sure?");
			
		module("CreateNewTask");
		
			if (r == true) {
				$('input.checkbox:checked').each(function(){
				$(this).parent().remove();
			});
				test("Tests Task Deleted When Delete Image Clicked and Confirmed", function(){
					i = $('#tasks input.checkbox').length;
			
					equals(  $('#tasks input.checkbox').length, 4, 'We expect there to be ' + 4 + ' items' );
				})
			} else {
				test("Tests Task Not Deleted When Delete Image Clicked and Canceled", function(){
					equals(  $('#tasks input.checkbox').length, 4, 'We expect there to be ' + i + ' items' );
				});
				return;
			}			
		
			
		
		});
	
		
	});
	
	
		