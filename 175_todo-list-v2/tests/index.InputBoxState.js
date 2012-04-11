$(function(){

	var element = 'input.checkbox';
	$(element).live("click", function(){
	
		index = $('input.checkbox').index(this); //alert(index);
		module("InputBoxState");
		//module("Module A");
		test("Tests Checkbox Toggle Change Input State From Disabled For Checked and Enabled For Unchecked", function(){
			//var value = $("input.input").val();
			//var index = $('input.checkbox').index(this); //alert(index);
			var checkBoxState = $('input.checkbox').eq(index).attr("checked");
			if (checkBoxState == "checked") {
				$('input.input').eq(index).addClass("checked").attr("disabled", true);
				var getCheckedInputBoxState = $('input.input').eq(index).attr("class");
				var getCheckedInputBoxDisabledState = $('input.input').eq(index).attr("disabled");
				equals(  checkBoxState, "checked", 'We expect checked attribute of checked for $(input.checkbox).eq(0) to be "checked"' );
				equals(  getCheckedInputBoxState, "input checked", 'We expect class for $(input.input).eq(0) to be "input checked"' );
				equals(  getCheckedInputBoxDisabledState, "disabled", 'We expect disabled attribute for $(input.input).eq(0) to be "disabled"' );
			}
			if (checkBoxState != "checked") {
				$('input.input').eq(index).removeClass("checked").removeAttr("disabled");
				var getCheckedInputBoxState = $('input.input').eq(index).attr("class");
				var getCheckedInputBoxDisabledState = $('input.input').eq(index).attr("disabled");
				equals(  checkBoxState, undefined, 'We expect value to be "undefined"' );
				equals(  getCheckedInputBoxState, "input", 'We expect value to be "input"' );
				equals(  getCheckedInputBoxDisabledState, undefined, 'We expect value to be "undefined"' );
			}
		});
	
		
	});
	
	
		
});