$(function(){
		
		
		function writeMe(arg){
			
			if (typeof(arg) == "object" && !arg.length) {
				obj2array = [];
				for (i in arg){
					obj2array.push(arg[i]);
				};
				
				var count = obj2array.length;
				var last = obj2array[count - 1];
				
				
				$(".object " + last).append('<span></span>');
				for (i=0;i<count-1;i++){
					$(".object " + last + " span").append(obj2array[i]);
				};
				
				
			}
			
		};
		
		writeMe({1:"Some Foo",2:".section5"});
		writeMe({1:"GoodBye",2:"Foo",3:"Bar",4:"Baz",5:"Bat",6:".section1"});
		writeMe({1:"GoodBye",2:"Foo",3:"Bar",4:"Baz",5:"Bat",6:".section2"});
		writeMe({1:'<img src="images/dummy.png" />',2:"Foo",3:"Bar",4:"Baz",5:"Bat",6:".section3"});
		writeMe({1:".section4"});
		
	});