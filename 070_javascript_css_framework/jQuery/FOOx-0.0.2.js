(function() {
	// check to see that the browser supports the getElementsByTagName method
	// if not, exit the loop 
	if (!document.getElementsByTagName) {
		return false; 
	} 
	/*
	function elem(element){
		this.element = element;
		this.css = function(){
			return this.element;
		}
		
		
	}
	*/
	
	//$ = new elem('ffoo');
	//alert( $.css() );
	/*
	function css(){
		var a = document.getElementsByTagName('a');
		for (var i=0; i < a.length; i++){
				a[i].style.color= 'red';
			}
		};
	*/
	
	function returnColor(color){
		return color;
	}
	function $(element){
		//return element;
		this.element =  element;
		var $ = document.getElementsByTagName(this.element);
		
		
		//this.css = css()();
		
		this.css = function(){
			//alert (this.element);
			for (var i=0; i < $.length; i++){
				$[i].style.color= 'red';
			}
			
		}();
		
		//return document.getElementsByTagName(this.element);
	};
	
	

	$('a').css();

	alert ('foo');

function openPopUp(linkURL) {
	//window.open(linkURL,'popup','width=400,height=200')
	alert( linkURL );
}
	
})(); 

