$(function(){

	var element = 'img.delete';
	$(element).live("click", function(event){
		
			var i = $('#tasks input.checkbox').length;
			var r=confirm("Are you sure?");
			
		module("CreateNewTask");
		
			if (r == true) {
				$(this).parent().remove();
				test("Tests Task Deleted When Delete Image Clicked and Confirmed", function(){
					i--;
			
					equals(  $('#tasks input.checkbox').length, i, 'We expect there to be ' + i + ' items' );
				})
			} else {
				test("Tests Task Not Deleted When Delete Image Clicked and Canceled", function(){
					equals(  $('#tasks input.checkbox').length, 4, 'We expect there to be ' + i + ' items' );
				});
				return;
			}			
		
			
		
		});
	
		
	});
	
	
		