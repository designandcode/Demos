/*
**  jQNotifications-0.0.3.js - converted code into a jQuery plugin that takes one argument.  Either load default xml file named "notifications.xml" if none
**  specified or use the one specified when calling $("body").jQNotifications() in the HTML file that uses the plugin.
*/

jQuery.fn.ParseXML = function(options){


var xmlFile = {	//here is the text DEFAULT to display in the overlay
				xmlLoad : "data"
			  };

var options = $.extend(xmlFile, options);
    return this.each(function() {				
	// Convert XML file into JavaScript object (xml)
	 $.ajax({
    type: "GET",
    //url: "xml/notifications.xml",
    url: "xml/"+options.xmlLoad+".xml",
    dataType: "xml",
		cache: false,
    success: parseXml
  });
	
		function parseXml(xml){

			// place all 1st level children of xml into array x
			var x = xml.documentElement;
			var x = x.nodeName;
			var x_01=xml.documentElement.childNodes;
			var x_02=x_01[3].childNodes;
			var x_03=x_02[3].childNodes;
			var x_04=x_03[3].childNodes;
	
			// create empty object to hold 1-6 level children element names as key/value pairs
			var level_01 = {}; var level_02 = {}; var level_03 = {}; var level_04 = {}; var level_05 = {};
			var level_06 = {}; var level_07 = {}; var level_08 = {}; var level_09 = {}; var level_10 = {};
			
			var level_01_named = {}; var level_02_named = {}; var level_03_named = {}; var level_04_named = {}; var level_05_named = {};
			var level_06_named = {}; var level_07_named = {}; var level_08_named = {}; var level_09_named = {}; var level_10_named = {};
			
			var nodes = {}
			
			// iterate through x_01
			for (i=0;i<x_01.length;i++)
				{
					// Process only element nodes (type 1) 
					if (x_01[i].nodeType==1)
						{			 
							// add each 1st level child element name to the notifications object
							//level_01[x_01[i].nodeName] = x_01[i].nodeName;
							level_01[i] = x_01[i].nodeName;
							level_01_named[i] = x_01[i].nodeName;
						} 
				}
			// iterate through x_02
			for (i=0;i<x_02.length;i++)
				{
					// Process only element nodes (type 1) 
					if (x_02[i].nodeType==1)
						{			 
							// add each 1st level child element name to the notifications object
							//level_02[x_02[i].nodeName] = x_02[i].nodeName;
							level_02[i] = x_02[i].nodeName;
							level_02_named[i] = x_02[i].nodeName;
						} 
				}
			// iterate through x_03
			for (i=0;i<x_03.length;i++)
				{
					// Process only element nodes (type 1) 
					if (x_03[i].nodeType==1)
						{			 
							// add each 1st level child element name to the notifications object
							//level_03[x_03[i].nodeName] = x_03[i].nodeName;
							level_03[i] = x_03[i].nodeName;
							level_03_named[x_03[i].nodeName] = x_03[i].nodeName;
						} 
				}
			// iterate through x_04
			for (i=0;i<x_04.length;i++)
				{
					// Process only element nodes (type 1) 
					if (x_04[i].nodeType==1)
						{			 
							// add each 1st level child element name to the notifications object
							//level_03[x_03[i].nodeName] = x_03[i].nodeName;
							level_04[i] = x_04[i].nodeName;
							level_04_named[x_04[i].nodeName] = x_04[i].nodeName;
						} 
				}
				//	alert (level_01["message"]);
						//alert (level_01[1]);
				//	alert (x_01[3].nodeName);
				//	alert (level_02["message-id"]);
				//	alert (level_02["message-text"]);
				//	alert (x_02[1].nodeName);
				//	alert (x_02[3].nodeName);
						//alert (level_02[1]);
						//alert (level_02[3]);					
				//	alert (level_03["heading"]);
				//	alert (level_03["body"]);
						//alert (level_03[1]);
						//alert (level_03[3]);	
						//alert (level_04[1]);
			
			$(xml).find(x).each(function(){
				var level_01Messages = $(this).find(level_01[1]).length;
				var level_02Messages = $(this).find(level_01[1]).eq(0).children().length;
				var level_03Messages = []
				//for (i=0;i<2;i++)
					//{
						level_03Messages.push($(this).find(level_02[1]).eq(0).children().length, $(this).find(level_02[3]).eq(0).children().length);
					//}
				//var level_03Messages = $(this).find(level_01[1]).eq(0).find(level_03[1]).length;
				alert (level_03Messages[1]);
				for (i=0;i<level_01Messages;i++)
					{
						//alert ($(this).find(level_01[1]).eq(i).find(level_03[3]).text());
						//alert ($(this).find(level_01[1]).eq(i).find(level_02[1]).attr("id"));
					}	
			});
			
			}
	});
			parseXML();
};