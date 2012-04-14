$(function(){
		
		
		function writeMe(arg){
			
			if (typeof(arg) == "object" && arg.length) {
				var count = arg.length;
				var last = arg[count - 1];
				$(".array " + last).append('<span></span>');
				for (i=0;i<count-1;i++){
					$(".array " + last + " span").append(arg[i]);
				};
			}
		};
		
		writeMe(["Some Foo",".section5"]);
		writeMe(["GoodBye","Foo","Bar","Baz","Bat",".section1"]);
		writeMe(["GoodBye","Foo","Bar","Baz","Bat",".section2"]);
		writeMe(['<img src="images/dummy.png" />',"Foo","Bar","Baz","Bat",".section3"]);
		writeMe([".section4"]);
		
	});