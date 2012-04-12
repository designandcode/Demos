<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>EMPTY</title>
<style type="text/css">
body {
	background-color:#797979;
	margin:0;
	
}
/******************************/
/***BEGIN IMAGE GALLERY CSS*************/
.container{
  position:relative;
  /*max-width:972px;*/
  width:72%;
  margin:6% auto auto;
  padding-bottom:2%;
}

.container img{
	border:4px solid #fff;
	position:relative;
	float:left;
	margin:3% 0 0 3%;
	max-width:88%;
}
/***END IMAGE GALLERY CSS*************/
/***************************/

.highlight{
	border:1px solid red;
}

a.toggle:link,a.toggle:hover,a.toggle:visited,a.toggle:active{
	color:#fff;
	cursor:pointer;
}

a.back:link{
	color:#999;
	cursor:pointer;
}
a.back:hover,a.back:visited,a.back:active{
	color:#fff;
	cursor:pointer;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!--script type="text/javascript" src="jQuery/jquery-1.3.2.js"></script-->
<!--script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script-->
</head>
<body>
<div class="container" style="margin-top:1%;padding-bottom:0;height:50px;clear:right;">
<?php
$size=$_GET['size'];
if ($size!=small)
echo '<a class="toggle" href="index.php?size=small"><span style="position:absolute;top:2%;left:8%;text-decoration:underline;">View Small </a><br /><br /><a class="back" href=".">Back to Article</a></span>';

elseif ($size==small) echo '<a class="toggle" href="index.php"><span style="position:absolute;top:2%;left:8%;text-decoration:underline;">View Large</a><br /><br /><a class="back" href=".">Back to Article</a></span>';
?>

</div>
<div class="container">
	<?php 
	
	$filenames=glob("gallery/*.*", GLOB_NOSORT);
	rsort($filenames);

//foreach (glob("gallery/*.*", GLOB_NOSORT) as $filename) {
    //echo "$filename size " . filesize($filename) . "\n";
foreach ($filenames as $filename){
	if ($size==small)
	echo "<a href=\"image.php?filename=$filename&size=$size\"><img src=$filename width=128 /></a>";

else echo "<a href=\"image.php?filename=$filename&size=$size\"><img src=$filename /></a>";
}



?>
</div>
</body>
</html>