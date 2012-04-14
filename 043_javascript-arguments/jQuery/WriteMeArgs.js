$(function(){
		
		function writeMe(arg){
		
			if (typeof(arg) == "string") {
				var count = arguments.length;
				var last = arguments[count - 1];
				$(".args " + last).append('<span></span>');
				for (i=0;i<count-1;i++){
					$(".args " + last + " span").append(arguments[i]);
				};
			} 
		
		};
		
		
		writeMe("Some Foo",".section5");
		writeMe("GoodBye","Foo","Bar","Baz","Bat",".section1");
		writeMe("GoodBye","Foo","Bar","Baz","Bat",".section2");
		writeMe('<img src="images/dummy.png" />',"Foo","Bar","Baz","Bat",".section3");
		writeMe(".section4");
		
	});