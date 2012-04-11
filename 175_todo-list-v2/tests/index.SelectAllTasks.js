$(function(){

	var element = 'input.selectAll';
	
	$(element).live("click", function(){
		var checkBoxState = $('input.selectAll').attr("checked"); //alert($('input.checkbox').eq(0).attr("checked"));
		if (checkBoxState == 'checked') {
			$('input.checkbox').attr("checked", true);
			$('input.input').attr("disabled", true);
			
			module("SelectAllTasks");
			test("Tests All Checkboxes Checked And Inputs Disabled", function(){
					equals(  $('input.checkbox').eq(0).attr("checked"), 'checked', 'We expect checked attribute to be checked' );
					equals(  $('input.input').eq(0).attr("disabled"), 'disabled', 'We expect readonly attribute to be readonly' );
					equals(  $('input.checkbox').eq(1).attr("checked"), 'checked', 'We expect checked attribute to be checked' );
					equals(  $('input.checkbox').eq(2).attr("checked"), 'checked', 'We expect checked attribute to be checked' );
					equals(  $('input.checkbox').eq(3).attr("checked"), 'checked', 'We expect checked attribute to be checked' );
				})
		}
		if (checkBoxState != 'checked') {
			$('input.checkbox').attr("checked", false);
			$('input.input').attr("disabled", false);
			
			module("SelectNoTasks");
			test("Tests All Checkboxes Unchecked And Inputs Enabled", function(){
					equals(  $('input.checkbox').eq(0).attr("checked"), undefined, 'We expect checked attribute to be checked' );
					equals(  $('input.input').eq(0).attr("disabled"), undefined, 'We expect checked attribute to be checked' );
					equals(  $('input.checkbox').eq(1).attr("checked"), undefined, 'We expect checked attribute to be checked' );
					equals(  $('input.checkbox').eq(2).attr("checked"), undefined, 'We expect checked attribute to be checked' );
					equals(  $('input.checkbox').eq(3).attr("checked"), undefined, 'We expect checked attribute to be checked' );
				})
		}
	});
	
			
		
		
	
		
	});
	
	
		