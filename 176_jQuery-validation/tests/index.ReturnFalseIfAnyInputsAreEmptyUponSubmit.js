$(function(){
		
				
		
		var element = 'input.submit';
		
		$(element).live("click", function(event){
			event.preventDefault();
			
			var AllInputsHaveValidValue = function(){
				var inputs = [];
				inputCount = $('#demo .text').length;
				for (i=0;i<inputCount;i++){
					inputs.push($('#demo .text').eq(i).val());
				};
				if ($.inArray("", inputs) != -1) {
					return false;
				} else {
							//var AllInputsHaveValidValue = function(){
							var filter = 1;
							var val = $('#demo .email').val();
							var valids = [];
							valids.push(val == filter);
							if ($.inArray(false, valids) == -1){
								return true;
							} else {
								return false;
							}
					//};
				}
			};
			
			
			//function CheckAllInputsForValue(){
			//	var AllInputsHaveValue = false;
			//}();
			//var AllInputsHaveValue = false;
			
			module("ConfirmNoEmptyInputs");
			test("Return False If Any Inputs Are Empty Upon Submit", function(){
			
				
				//equals( AllInputsHaveValue(), true, "AllInputsHaveValue" );
				equals( AllInputsHaveValidValue(), true, "AllInputsHaveValidValue" );
				equals( inputCount, 4, "InputCount" );
			});
		});
		
	});