jQuery.fn.paginate = function(options) {


	var n = {n : 1}
	var containerName = {containerName : '#container'}
	var containerChildren = {containerChildren : 'div'}
	var controlName = {controlName : '#navigation'}
	var controlChildren = {controlChildren : 'li'}
	//var tabStyled = {tabStyled : false}
	var tabStyled = {tabStyled : new Array(false)}

var options = $.extend(n, containerName, containerChildren, controlName, controlChildren, tabStyled, options);
    return this.each(function() {

		$(options.containerName + " > "+options.containerChildren).hide();
		var p = 1;
		var n = options.n;
		var navTotal = $(options.containerName + " > "+options.containerChildren).length;
		var navPages = Math.ceil(navTotal / n);
		
		for (i=0;i<p*n;i++){
			$(options.containerName + " > "+options.containerChildren).eq(i).show().addClass("page1");
		}
		if (options.tabStyled[0] == false){
			for (a=1;a<=navPages;a++){
			$(options.controlName).append("<"+options.controlChildren+">"+a+"</"+options.controlChildren+">");
			}$(options.controlName).addClass("page-styled");
		}else if(options.tabStyled[0] == true){
			for (a=1;a<=navPages;a++){
			$(options.controlName).append("<"+options.controlChildren+">"+options.tabStyled[a]+"</"+options.controlChildren+">");
			}$(options.controlName).addClass("tab-styled");
		}
		$(options.controlName+" "+options.controlChildren).eq(0).addClass("active");
		
		$(options.controlName+" "+options.controlChildren).click(function(){
		$(this).addClass("active").siblings().removeClass("active");
		$(options.containerName + " > "+options.containerChildren).hide();
		var r = $(options.controlName+" "+options.controlChildren).index(this);
		var s = $(options.controlName+" "+options.controlChildren).index(this) + 1;
		
		
		for(x=r*n;x<r*n+n;x++){
		$(options.containerName + " > "+options.containerChildren).eq(x).show().addClass("page"+s);
		}
		
		
		});
		
	});	
	};