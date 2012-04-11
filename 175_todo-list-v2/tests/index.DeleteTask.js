$(function(){

	var element = 'img.delete';
	$(element).live("click", function(event){
		
			var i = $('#tasks input.checkbox').length;
		$(this).parent().remove();
		
		module("CreateNewTask");
		test("Tests Task Deleted When Delete Image Clicked", function(){
			i--;
			
				equals(  $('#tasks input.checkbox').length, i, 'We expect there to be ' + i + ' items' );
			})
			
		
		});
	
		
	});
	
	
		