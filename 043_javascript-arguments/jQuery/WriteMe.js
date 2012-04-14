//$(function(){
		
		function listObject(){
			if (arguments[0] == 'ul') {
				return ['<ul></ul>','ul','<li>','</li>'];
			} else if (arguments[0] == 'ol') {
				return ['<ol></ol>','ol','<li>','</li>'];
			} else if (arguments[0] == 'dl') {
				return ['<dl><dt>'+arguments[1]+'</dt></dl>','dl','<dd>','</dd>'];
			} else if (arguments[0] == 'table' && arguments[1]) {
				return ['<table><thead>'+arguments[1]+'</thead><tbody></tbody></table>','table tbody','<tr><td>','</td></tr>'];
			} else if (arguments[0] == 'table' && !arguments[1]) {
				return ['<table><tbody></tbody></table>','table tbody','<tr><td>','</td></tr>'];
			} else if (arguments.length == 0) {
				return ['<span></span>','span','',''];
			} else {
				return ['<'+arguments[0]+'></'+arguments[0]+'>',arguments[0],'<span>','</span>'];
			}
		}
		
		
		
		function writeMe(arg){
		
			if (typeof(arg) == "string" &&  arguments[arguments.length -1].search(/\./) != -1) {
			
				var splitFirstArg = arguments[0].split("..");
				var list = listObject(splitFirstArg[0],splitFirstArg[1]);
				var count = arguments.length;
				var last = arguments[count - 1];
				$(".args " + last).append(list[0]);
				for (i=1;i<count-1;i++){
					$(".args " + last + " "+list[1]).append(list[2] + arguments[i] + list[3]);
				};
			} else if (typeof(arg) == "object" && arg.length &&  arg[arg.length -1].search(/\./) != -1) {
				var splitFirstArg = arg[0].split("..");
				var list = listObject(splitFirstArg[0],splitFirstArg[1]);
				var count = arg.length;
				var last = arg[count - 1];
				$(".array " + last).append(list[0]);
				for (i=1;i<count-1;i++){
					$(".array " + last + " "+list[1]).append(list[2] + arg[i] + list[3]);
				};
			} else if (typeof(arg) == "object" && !arg.length) {
				obj2array = [];
				for (i in arg){
					obj2array.push(arg[i]);
				};
				var splitFirstArg = obj2array[0].split("..");
				var list = listObject(splitFirstArg[0],splitFirstArg[1]);
				var count = obj2array.length;
				var last = obj2array[count - 1];				
				$(".object " + last).append(list[0]);
				for (i=1;i<count-1;i++){
					$(".object " + last + " "+list[1]).append(list[2] + obj2array[i] + list[3]);
				}
			}
				// Edge Cases
				else if (!arguments[0]) {
				$(".edgecases .section1").append('<p>no arguments given</p>');
			}	 else if (typeof(arg) == "string" && arguments[arguments.length -1].search(/\./) == -1) {
				$(".edgecases .section2").append("<p>this won't append any div</p>");
			}	/**/else if (typeof(arg) == "object" && !arg.length) {
				$(".edgecases .section3").append("<p>this is an empty array</p>");
			}
				else if (typeof(arg) == "object" && arg.length &&  arg[arg.length -1].search(/\./) == -1) {
				$(".edgecases .section4").append("<p>this won't append any div</p>");
			}
			
		
		};
		
		
		
		
//	});