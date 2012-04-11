<html>
<head>
<title>EMPTY</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jQuery/jquery-1.3.2.js"></script>
<script type="text/javascript" src="jQuery/plugin.showlarger.js"></script>
<script type="text/javascript" src="jQuery/plugin.slider.js"></script>
<script type="text/javascript">
	
	$(function(){
	/*
		$("a[title='Home']").showLarger({borderColor: "#fff"});
		$("a[title='Article']").showLarger();
		
	*/	
		$("#slideContainer").showLarger({dark:true});
		});
		
		$(function(){
	
			$("#nav ul li").slider();
		
		});
		
		$(function(){
	
			$("#slideContainer").prepend('<div class="imageContainerMessage"><h2>Click the image to see full view</h2></div><div class="imageContainerMessage2"><h2>Click the image to see full view</h2></div>');
		
		});
		
		$(function(){
	
	//var str = "Visit W3Schools";
	//var patt1 = /w3schools/i;
	//document.write(str.match(patt1));
	
		var browserUserAgent = navigator.userAgent;
		
		var browserSafari = /safari/i;
		var browserChrome = /chrome/i;
		var browserFirefox = /firefox/i;
		var browserOpera = /opera/i;
		var browserVersion = parseFloat(navigator.appVersion);
		if(browserUserAgent.match(browserChrome) == "Chrome" && browserVersion >= 5.0){
			//alert("You are using Chrome")
			
			$("#subcontainer ul li.chrome").addClass("highlighted");
			return false
		}
		if(browserUserAgent.match(browserSafari) == "Safari" && browserVersion >= 5.0){
			//alert("You are using Safari")
			
			$("#subcontainer ul li.safari").addClass("highlighted");
		}
		if(browserUserAgent.match(browserFirefox) == "Firefox" && browserVersion >= 5.0){
			//alert("You are using Firefox")
			
			$("#subcontainer ul li.firefox").addClass("highlighted");
		}
		if(browserUserAgent.match(browserOpera) == "Opera" && browserVersion >= 9.80){
			//alert("You are using Opera");
			
			$("#subcontainer ul li.opera").addClass("highlighted");
		}
		
	});
	
	
</script>
</head>
<body>
<div id="contentContainer">
<div id="header">
	<h1>Visit Website - <a href="#">Designtopx.com</a></h1>
</div>
<div id="nav">
	<ul>
	<li>Home</li>
	<li>Article</li>
	</ul>
</div>
<div id="slideContainer"><!--div class="message">View Larger</div-->
	<div id="imgContainer">
	
		<a href="#" title="Home"><img src="images/designtopx_home_large_04-24-10_1506.png" /></a>
		<a href="#" title="Article"><img src="images/designtopx_article_large_04-24-10_1506.png" /></a>
	</div>
</div>
<?php include("lib/footer.php"); ?>
</body>
</html>