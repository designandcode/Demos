/* jQuery Plugin onCube by Maik Kley */

(function($){  
	$.fn.extend({   
		onCube: function(options) {  
		
			// Default Werte setzen!  
			var defaults = {
				x:50,
				y:100,
				cubes: 3,
				size: 20,
				space: 3,
				color:  '#ff0000',
				hcolor: '#1dceee',
				colorCalc: [85,70],
				links: [],
				startAnimation : true,
				goBack : true,
				delay: 100,
				duration: 200,
				amp: 100
			}  
			var options =  $.extend(defaults, options);
			var zaehler=0;
			var depth = Math.floor(Math.sqrt(((options.size/2)*(options.size/2))/2));
			var oldObj;
			var tweenActive=false;
			
			return this.each(function() {  
				for (var z=options.cubes-1;z>=0;z--) {
					for (var y=options.cubes-1;y>=0;y--) {
						for (var x=0;x<options.cubes;x++) {
							xCoor=options.x + (x*options.size)+(x*options.space);
							yCoor=options.y + (y*options.size)+(y*options.space);
							zCoor=z;
							cube = getCube(options.color);
							var n = (z*options.cubes*options.cubes)+(y*options.cubes)+x+1;
							$(cube).attr('id','cube'+n);
							if (options.links[n] != undefined) $(cube).attr('title',options.links[n][0]);
							$(this).append(cube);
							setXYZ(cube,xCoor,yCoor,zCoor,options.startAnimation);
							setHoverFunctions(cube);
							setClickFunctions(cube);
						}
					}					
				}
			}); 
			
			// Erstelle Dreieck (TYP, GROESSE, FARBE)
			function getTriangle(type,s,color) {
				var set;
				var transp;
				if ($.browser.msie && parseInt(jQuery.browser.version) < 7) {
					transp = "cyan";
				} else {
					transp = "transparent";
				}
				switch(type) {
					case 1:
						set = { 'border':'0','border-top':s+'px solid '+color,'border-right':s+'px solid '+transp };
						break;
					case 2:
						set = { 'border':'0','border-top':s+'px solid '+color,'border-left':s+'px solid '+transp };
						break;
					case 3:
						set = { 'border':'0','border-bottom':s+'px solid '+color,'border-right':s+'px solid '+transp };
						break;
					case 4:
						set = { 'border':'0','border-bottom':s+'px solid '+color,'border-left':s+'px solid '+transp };
						break;
				}
				return $("<div>").addClass("tri").addClass("tri"+type).css(set);
			}
			
			// Erstelle Viereck (BREITE, HOEHE, FARBE)
			function getQuad(w,h,color) {
				return $("<div>").addClass("quad").css({'width':w+'px','height':h+'px','background-color':color});
			}
			
			function setXY(obj,x,y) {
				return $(obj).css({'left':x+'px','top':y+'px'});
			}
			
			function setXYZ(obj,x,y,z,animated) {
				z = z*(depth+options.space);
				if (animated) {
					$(obj).css({'left':x+z+'px','top':-options.size+'px'}).delay(zaehler*options.delay).animate({'top':y-z+'px'},options.duration);
					zaehler++;
				} else {
					$(obj).css({'left':x+z+'px','top':y-z+'px'});
				}
			}
			
			function getPlane(type,color) {
				var p = $("<div>").addClass("plane").addClass(type);
				var h;
				switch(type) {
					case 'r':
						h = options.size - depth;
						p.append(setXY(getTriangle(1,depth,color),0,h+depth));
						p.append(setXY(getQuad(depth,h,color),0,depth));
						p.append(setXY(getQuad(depth,h,color),0,0));
						break;
					case 't':
						h = options.size - depth;
						p.append(setXY(getTriangle(4,depth,color),0,0));
						p.append(setXY(getQuad(h,depth,color),depth,0));
						p.append(setXY(getTriangle(1,depth,color),options.size,0));
						break;
					case 'f':
						p.append(getQuad(options.size,options.size,color));
						break;
					case 'l':
						// Coming soon...
						break;
					case 'b':
						// Coming soon...
						break;
				}
				return p;
			}
			
			function getCube() {
				var c = $("<div>").addClass("cube");
				c.append(getPlane('f',options.color));
				c.append(setXY(getPlane('r',getNewColor(options.color,options.colorCalc[0])),options.size,-depth));
				c.append(setXY(getPlane('t',getNewColor(options.color,options.colorCalc[1])),0,-depth));
				return c;
			}
			
			function setColor(obj,color,hover) {
				if (hover) {
					color2 = getNewColor(options.hcolor,options.colorCalc[0]);
					color3 = getNewColor(options.hcolor,options.colorCalc[1]);
				} else { 
					color2 = getNewColor(options.color,options.colorCalc[0]);
					color3 = getNewColor(options.color,options.colorCalc[1]);
				}
				$(obj).find(".f .quad").css({'background-color':color});
				$(obj).find(".r .tri1").css({'border-top-color':color2});
				$(obj).find(".r .quad").css({'background-color':color2});
				$(obj).find(".t .tri1").css({'border-top-color':color3});
				$(obj).find(".t .quad").css({'background-color':color3});
				$(obj).find(".t .tri4").css({'border-bottom-color':color3});
			}
			
			function getNewColor(color,prozent) {
				var rgb = hex2rgb(color);
				rgb[0] = Math.floor(prozent*rgb[0]/100);
				rgb[1] = Math.floor(prozent*rgb[1]/100);
				rgb[2] = Math.floor(prozent*rgb[2]/100);
				var hex = rgb2hex(rgb[0],rgb[1],rgb[2]);
				return hex;
			}
			
			function hex2rgb(hex) {
				hex = (hex.substr(0,1)=="#") ? hex.substr(1) : hex;
				return [parseInt(hex.substr(0,2), 16), parseInt(hex.substr(2,2), 16), parseInt(hex.substr(4,2), 16)];
			}
			
			function rgb2hex(r, g, b) {
				var char = "0123456789ABCDEF";
				var arr = new Array(r,g,b);
				var decToHex="";
				for(var i=0;i<3;i++)
				{
					var code1 = Math.floor(arr[i] / 16);
					var code2 = arr[i] - code1 * 16;
					decToHex += char.substr(code1,1);
					decToHex += char.substr(code2,1);
				}
				return "#"+decToHex; 
			}
			
			function setHoverFunctions(obj) {
				$(obj).hover(function(){
					setColor(obj,options.hcolor,true);
				},function(){
					setColor(obj,options.color,false);
				});
			}
			
			function setClickFunctions(obj) {
				$(obj).click(function() {
					if (!tweenActive && $(obj).attr("id") != $(oldObj).attr("id")) goOut($(this));
				});				
			}
			
			function createCard(obj,carddata,x,y) {
				var c = $("<div>").addClass("card");
				c.css({'left':options.size+depth+options.space+'px','top':-depth+'px'});
				c.html("<a href='"+carddata[1]+"'><span>"+carddata[0]+"</span></a>");
				$(obj).append(c);
			}
			
			function deleteCard() {
				$(".card").remove();
			}
			
			function showCard() { 
				$(".card").animate({'height':'toggle'});
			}
			
			function goOut(obj) {
				tweenActive=true;
				if (oldObj != undefined && options.goBack) goIn(oldObj);
				l = parseInt($(obj).css("left").split("px")[0]) + options.amp;
				var id = $(obj).attr("id");
				n = parseInt(id.substr(4,id.length-1));
				if (options.links[n] != undefined) {
					createCard(obj,options.links[n]);
				}
				$(obj).unbind('mouseenter').unbind('mouseleave');
				setColor(obj,options.hcolor,true);
				$(obj).animate({
					left: l
				},1000, clickAniConmplete);
				oldObj = obj;
			}
			
			function goIn(obj) {
				l = parseInt($(obj).css("left").split("px")[0]) - options.amp;
				var id = $(obj).attr("id");
				n = parseInt(id.substr(4,id.length-1));
				if (options.links[n] != undefined) {
					deleteCard();
				}
				setHoverFunctions(obj);
				setColor(obj,options.color,false);
				$(obj).animate({
					left: l
				},1000);
			}
			
			function clickAniConmplete() { 
				tweenActive=false;
				showCard();
			}
		}  
	});  
})(jQuery);