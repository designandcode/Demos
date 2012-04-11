<!--?php $pageOn =  basename($_SERVER['REQUEST_URI']) ?-->
<script>
	$(function(){
	
	var pageOn = location.pathname;
	
	//alert(pageOn);
	
	$("option[value='" + pageOn + "']").attr("selected", "selected");
	
	//$("#footer").addClass("selected");
	//$("option[value='"+pageOn+"']").attr("selected", "selected");
	//$("option[value='"+pageOn+"']").attr("selected", "selected");
	});
	
</script>
<div id="footer">
	<!--ul>
	<li><a href="allamericanbk.php">Allamerican</a></li>
	<li><a href="johnmcrane.php">Johnmcrane</a></li>
	<li><a href="designtopx.php">Designtopx</a></li>
	</ul-->
	<form action="lib/websitehandler.php">
		<select name="website">
			<option value="/apache_upload/z_demos/032_portfolio/allamericanbk.php" >Allamerican</option>
			<option value="/apache_upload/z_demos/032_portfolio/johnmcrane.php" >Johnmcrane</option>
			<option value="/apache_upload/z_demos/032_portfolio/designtopx.php" >Designtopx</option>
		</select>
		<input type="submit" />
	</form>
</div>
<!--div id="footer">
	
	<form action="lib/websitehandler.php">
		<select name="website">
			<option value="allamericanbk.php" selected="selected" >Allamerican</option>
			<option value="johnmcrane.php" >Johnmcrane</option>
			<option value="designtopx.php" >Designtopx</option>
		</select>
		<input type="submit" />
	</form>
</div--><img class="close" src="images/001_05.png" />
<div id="fullContainer">
	<!--img class="close" src="images/001_05.png" /-->
	<img class="Home" id="image1" src="images/allamerican_home_full_04-24-10-757.png" />
	<img class="Answers" id="image2" src="images/allamerican_answers_full_04-24-10-757.png" />
	<img class="Evaluation" id="image3" src="images/allamerican_evaluation_full_04-24-10-757.png" />
	<img class="Join" id="image4" src="images/allamerican_join_full_04-24-10-757.png" />
</div>
</div>
<div id="subcontainer">
	<ul>
		<li class="first">This website plays nice with:</li>
		<li class="chrome">Chrome</li>
		<li class="firefox">Firefox</li>
		<li class="opera">Opera</li>
		<li class="safari">Safari</li>
	</ul>
</div>