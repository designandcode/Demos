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
	
		$("a[title='Home']").showLarger({borderColor: "#dedede"});
		$("a[title='Answers']").showLarger({borderColor: "#dedede"});
		$("a[title='Evaluation']").showLarger({borderColor: "#dedede"});
		$("a[title='Join']").showLarger({borderColor: "#dedede"});
		
		
		
		});
		
		$(function(){
	
			$("#nav ul li").slider();
		
		});
		
		
	
	
</script>
</head>
<body>
<div id="contentContainer">

<div id="header">
	<h1>Visit Website - <a href="http://www.allamericanbankruptcy.com/">All American Bankruptcy.com</a></h1>
</div>
<div id="nav">
	<ul>
	<li>Home</li>
	<li>Answers</li>
	<li>Evaluation</li>
	<li>Join</li>
	</ul>
</div>
<div id="slideContainer">
	<div id="imgContainer">
		<a href="#" title="Home"><img src="images/allamerican_home_large_04-24-10-757.png" /></a>
		<a href="#" title="Answers"><img src="images/allamerican_answers_large_04-24-10-757.png" /></a>
		<a href="#" title="Evaluation"><img src="images/allamerican_evaluation_large_04-24-10-757.png" /></a>
		<a href="#" title="Join"><img src="images/allamerican_join_large_04-24-10-757.png" /></a>
	</div>
</div>
<!--?php include("lib/footer.php"); ?-->
<div id="footer">
	<!--ul>
	<li><a href="allamericanbk.php">Allamerican</a></li>
	<li><a href="johnmcrane.php">Johnmcrane</a></li>
	<li><a href="designtopx.php">Designtopx</a></li>
	</ul-->
	<form action="lib/websitehandler.php">
		<select name="website">
			<option value="allamericanbk.php" selected="selected" >Allamerican</option>
			<option value="johnmcrane.php" >Johnmcrane</option>
			<option value="designtopx.php" >Designtopx</option>
		</select>
		<input type="submit" />
	</form>
</div><img class="close" src="images/001_05.png" />
<div id="fullContainer">
	<!--img class="close" src="images/001_05.png" /-->
	<img class="Home" id="image1" src="images/allamerican_home_full_04-24-10-757.png" />
	<img class="Answers" id="image2" src="images/allamerican_answers_full_04-24-10-757.png" />
	<img class="Evaluation" id="image3" src="images/allamerican_evaluation_full_04-24-10-757.png" />
	<img class="Join" id="image4" src="images/allamerican_join_full_04-24-10-757.png" />
</div>
</div>

</body>
</html>