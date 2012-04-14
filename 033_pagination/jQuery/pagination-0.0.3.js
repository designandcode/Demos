/*
**	Added cycling
*/

jQuery.fn.paginate = function(options) {

	
	
	var n = {n : 1}
	var containerName = {containerName : '#container'}
	var containerChildren = {containerChildren : 'div'}
	var controlName = {controlName : '#navigation'}
	var controlChildren = {controlChildren : 'li'}
	var tabStyled = {tabStyled : new Array(false)}
	var tabStretched = {tabStretched : true}
	var cycling = {cycling: new Array(true, 2500)};

var options = $.extend(n, containerName, containerChildren, controlName, controlChildren, tabStyled, tabStretched, cycling, options);
    return this.each(function() {
		
		$(options.containerName + " > "+options.containerChildren).hide();
		var p = 1;
		var n = options.n;
		var navTotal = $(options.containerName + " > "+options.containerChildren).length;
		var navPages = Math.ceil(navTotal / n);
		
		for (j=1;j<=navPages;j++){
			for (i=0;i<p*n;i++){
				$(options.containerName + " > "+options.containerChildren).eq(i).show().addClass("page1");
				$(options.containerName + " > "+options.containerChildren).eq(i+(j*n)).addClass("page"+(j+1));
			}
		}
		
		

		if (options.tabStyled[0] == false){
			for (a=1;a<=navPages;a++){
			$(options.controlName).append("<"+options.controlChildren+">"+a+"</"+options.controlChildren+">");
			}$(options.controlName).addClass("page-styled");
		}else if(options.tabStyled[0] == true){
		
			for (a=1;a<=navPages;a++){
			if (options.tabStyled[a] !== undefined) {
			$(options.controlName).append("<"+options.controlChildren+">"+options.tabStyled[a]+"</"+options.controlChildren+">");
			} else {
				$(options.controlName).append("<"+options.controlChildren+">"+a+"</"+options.controlChildren+">");
			}
			}$(options.controlName).addClass("tab-styled");
	
	if (options.tabStretched != false){
	//Tabs styling to have each li wide enough to fill space of container
	var container_padding = parseInt($(options.containerName).css("padding-left")) + parseInt($(options.containerName).css("padding-right"));
	var container_width = $(options.containerName).width() +container_padding;	
	var control_li_padding = parseInt($(options.controlName+" "+options.controlChildren).css("padding-left")) + parseInt($(options.controlName+" "+options.controlChildren).css("padding-right")) + parseInt($(options.controlName+" "+options.controlChildren).css("border-left-width")) + parseInt($(options.controlName+" "+options.controlChildren).css("border-right-width"));
	$(options.controlName).css({width: container_width+"px"});
	var control_li_width = Math.floor((container_width - control_li_padding * navPages) / navPages);
	$(options.controlName+" "+options.controlChildren).css({width: control_li_width+ "px"});
	}
	
		}
		$(options.controlName+" "+options.controlChildren).eq(0).addClass("active");
		
		if (options.cycling[0] == false){
		$(options.controlName+" "+options.controlChildren).click(function(){
		$(this).addClass("active").siblings().removeClass("active");
		$(options.containerName + " > "+options.containerChildren).hide();
		var r = $(options.controlName+" "+options.controlChildren).index(this);
		var s = $(options.controlName+" "+options.controlChildren).index(this) + 1;
		
		
		for(x=r*n;x<r*n+n;x++){
		$(options.containerName + " > "+options.containerChildren).eq(x).show();
		}
		
		
		});
		}
		
		
		
		
		if (options.cycling[0] == true){
		
			function A(){
				
				this.x = 1;
				
				this.setX = function(valX){
					this.x = valX;
				}
				
				this.increaseIt = function(){
					if (this.x < navPages)
						{
							this.x += 1;
						}
					else 
						{
							this.x = 1;
						}
				}
			}
		
			var a = new A;
		
		// rotate() and rotateSwitch() are functions branched from a tutorial on www.sohtanaka.com
		//Paging and Slider Function
		rotate = function(){
		$(options.controlName+" "+options.controlChildren).removeClass('active'); //Remove all active class
		$active.addClass('active'); //Add active class (the $active is declared in the rotateSwitch function)
				
		};

		//Rotation and Timing Event
		rotateSwitch = function(){
			play = setInterval(function(){ //Set timer - this will repeat itself every 7 seconds
			$active = $(options.controlName+" "+options.controlChildren+'.active').next(); //Move to the next paging
			if ( $active.length === 0) { //If paging reaches the end...
				$active = $(options.controlName+" "+options.controlChildren+':first'); //go back to first
			}
			rotate(); //Trigger the paging and slider function

			
			a.increaseIt();
			
			$(options.containerName + " > "+options.containerChildren).hide();
			
					$(options.containerName + " > "+options.containerChildren+".page"+a.x).show();
			
					
			}, options.cycling[1]); //Timer speed in milliseconds (7 seconds)
		};
		rotateSwitch(); //Run function on launch


		//On Click
		$(options.controlName+" "+options.controlChildren).click(function() {
		
			$(options.containerName + " > "+options.containerChildren).hide();
		var s = $(options.controlName+" "+options.controlChildren).index(this) + 1;
					$(options.containerName + " > "+options.containerChildren+".page"+s).show();
		a.setX(s);
		
		
			$active = $(this); //Activate the clicked paging
			//Reset Timer
			clearInterval(play); //Stop the rotation
			rotate(); //Trigger rotation immediately
			rotateSwitch(); // Resume rotation timer
			
			return false; //Prevent browser jump to link anchor
		});
		
		
		//On Hover
		$(options.containerName).hover(function() {
		clearInterval(play); //Stop the rotation
		}, function() {
		rotateSwitch(); //Resume rotation timer
		});
		
		
		}
		
	});	
};