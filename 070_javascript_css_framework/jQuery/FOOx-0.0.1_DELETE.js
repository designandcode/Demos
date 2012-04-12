window.onload = function() {
	// check to see that the browser supports the getElementsByTagName method
	// if not, exit the loop 
	if (!document.getElementsByTagName) {
		return false; 
	} 
	// create an array of objects of each link in the document 
	var popuplinks = document.getElementsByTagName("a");
	// loop through each of these links (anchor tags) 	
	for (var i=0; i < popuplinks.length; i++) {	
		// if the link has a class of "popup"...	
		if (popuplinks[i].getAttribute("class") == "popup") {	
			// add an onclick event on the fly to pass the href attribute	
			// of the link to our second function, openPopUp 	
			popuplinks[i].onclick = function() {	
			openPopUp(this.getAttribute("href"));	
			return false; 	
			} 	
		}
	} 
} 


function openPopUp(linkURL) {
	window.open(linkURL,'popup','width=400,height=200')
}

