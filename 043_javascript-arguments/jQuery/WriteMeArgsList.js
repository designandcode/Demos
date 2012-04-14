$(function(){
		
		//var format = ['list'];
		
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
				//return ['<'+arguments[0]+'></'+arguments[0]+'>',arguments[0],'<'+arguments[0]+'>','</'+arguments[0]+'>'];
				return ['<'+arguments[0]+'></'+arguments[0]+'>',arguments[0],'<span>','</span>'];
			}
		}
		
		var list = listObject('h1','Some Title');
		
		
		function writeMe(){
			var count = arguments.length;
			var last = arguments[count - 1];
			$(".args " + last).append(list[0]);
			for (i=0;i<count-1;i++){
				$(".args " + last + " "+list[1]).append(list[2] + arguments[i] + list[3]);
			};
		};
		
		writeMe("Some Foo",".section5");
		writeMe("GoodBye","Foo","Bar","Baz","Bat",".section1");
		writeMe("GoodBye","Foo","Bar","Baz","Bat",".section2");
		writeMe('<img src="images/dummy.png" />',"Foo","Bar","Baz","Bat",".section3");
		writeMe(".section4");
		
	});