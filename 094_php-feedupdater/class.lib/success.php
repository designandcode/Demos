<?php

$foobarz = $_POST['foobarz'];
settype($foobarz,"integer");

/*
$my_t_sec=gettimeofday();
$my_t_sec_md5= md5($my_t_sec[sec]);


$my_t=gettimeofday();

if ($my_t[sec] - $foobarz > 10)
	header("Location: http://dealfreezer.com/demos/demo37/accessdenied.html");
*/
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>EMPTY</title>
<style type="text/css">
body {
	background-color:#797979;
	margin:0;
	
}
#form{
	background:url(../formdesign.png) no-repeat top left;
	width:469px;
	height:332px;
	position:relative;
	float:left;
	margin-top:55px;
	margin-left:15px;
}
#form span{
	position:relative;
	float:left;
	margin-top:55px;
	margin-left:15px;
}

</style>
</head>
<body>
<?php

$title = $_POST['title'];
$link = $_POST['link'];
$guid = $_POST['guid'];
$pubDate = $_POST['pubDate'];
$description = $_POST['description'];
?>

<?php
function updater($one,$two,$three,$four,$five)
{
$list = array (
    "$one,$two,$three,$four,$five"
);

$fp = fopen("data.store.csv", 'a');

foreach ($list as $line) {
    fputcsv($fp, split(',', $line));
}

fclose($fp);
}
?>
<?php

echo updater($title,$link,$guid,$pubDate,stripslashes($description));

?>
<div id="form">
<span>
<?php 

//if ($my_t[sec] - $foobarz < 10)
//{
include ("lib.inc.csvtoxml.php");
//} 

?>
</span>
</div>
</body>
</html>