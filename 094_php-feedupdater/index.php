<?php

$url = rawurldecode($_GET['url']);


$url=explode("&",$url);



$my_t=gettimeofday();

$my_t[sec] *= 1000;
settype($my_t[sec],"float");

settype($url[3],"float");


//if ($url[2]  != '78alph02831' || !isset($url[2]) /*|| $my_t[sec] - $url[3]>10000*/)
//	header("Location: http://dealfreezer.com/demos/demo37/accessdenied.html");

?>
<?php
$pageOn = $_SERVER['HTTP_HOST'];

//$title =  $_GET['title'];


$urlA = '<a href="' . $url[0] . '" rel="nofollow" >' . ltrim($url[4],"www.") . '</a>';

//$url[1]='This_is_the title*&^!_';
$url[1] = trim(preg_replace('/([^A-Za-z0-9-]+)/',' ',$url[1]));

$now = date("D d M Y G:i:s T");
//Wed 28 Oct 2009 18:37:00 GMT

/******************************************************************************/
$filename = glob("images/*.*");

function imagizer($filename)
	{
	return '<div style="position:relative; height:265px;"><div style="position:absolute; clip:rect(0px 256px 256px 0px);"><img src="http://localhost:8080/apache_upload/lemonade-blog/demos/demo37/' . $filename . '" alt="image" /></div></div>';
	//width=256 height=256
	//style="position:absolute; clip:rect(0px,128px,128px,0px);"
	}

$images = array_map('imagizer', $filename);	

//print_r($images);
echo '<br />';
/*	
print_r($filename);
echo '<br />';
echo $filename[0];
*/

echo '<br />';

$urlB = "/$url[1]/";


//$article01 = array_values(preg_grep('/article01/', $images));
$article02 = array_values(preg_grep($urlB, $images));


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
	font:13px Trebuchet MS, Arial, Helvetica, Sans-Serif;
}
#form{
	background:url(formdesign.png) no-repeat top left;
	width:469px;
	height:332px;
	position:relative;
	float:left;
	margin-top:55px;
	margin-left:15px;
}
#form form{
	position:relative;
	float:left;
	margin-top:55px;
	margin-left:15px;
}
fieldset{
	border:none;
	width:330px;
}
div{
	padding:0 0 5px;
}
input.title{
	color:#3399FF;
	font-size:14px;
	font-weight:bold;
}
input.readonly{
	color:#999;
}
label span{
	color:blue;
}
textarea{
	color:#3399FF;
}
.clear{
	position:relative;
	clear:left;
}
.pad-left:{
	padding-left:35px;
}
.push-30{
	position:relative;
	float:left;
	margin-left:30px;
}

</style>
</head>
<body>
<div id="form">
<form action="class.lib/success.php" method="post" >
<fieldset>
	<div>
		<label for="title"><span>Title</span></label>
		<input type="text" size="50" name="title" class="title" value="<?php echo $url[1]; ?>" />
		<input type="text" size="50" name="title" class="title" value="<?php echo $url[1]; ?>" />
	</div>
	<div>
		<label for="title"><span>Enter Description Here:</span></label>
		<textarea rows="10" cols="50" name="description"><?php for ($i=0;$i<5;$i++) { echo $article02[$i]; } ?><br /><span style="font-size:12px;">via: <?php echo $urlA; ?></span><br /><br /><br /></textarea>
		<input type="hidden" value="<?php echo $url[0]; ?>" name="link" />
		<input type="hidden" value="<?php echo $url[0]; ?>" name="guid" />
	</div>	
	<div>
		<input type="text" size="28" readonly="readonly" class="readonly" value="<?php echo $now ?>" name="pubDate" />
		<input type="hidden" value="<?php $my_t_sec=gettimeofday(); echo $my_t_sec[sec]; ?>" name="foobarz" />
		<span class="pad-left"><button type="submit">Send</button></span>
	</div>
</fieldset>
</form>
</div>
</body>
</html>