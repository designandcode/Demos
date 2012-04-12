window.onload = function() {
	
	
	function $(element){
		//return element;
		this.element =  element;
		
		var rclass = /\./;
		if (rclass.test(this.element) == true){
		//alert (this.element);
		this.sclass = (this.element).split(/\./);
		//alert (this.sclass[1]);
		this.$ = document.getElementById(this.sclass[1]);
		//alert (foo[0]);
		//$.style.color = 'red';
		}
		
		
		this.css = function(){
			//alert (this.element);
			//for (var i=0; i < this.$.length; i++){
				this.$.style.color= 'red';
			//}
			
		};
		
		
		
		
		
	};
	

	

	$('.popup');
	
}; 


function openPopUp(linkURL) {
	//window.open(linkURL,'popup','width=400,height=200')
	alert( linkURL );
}

