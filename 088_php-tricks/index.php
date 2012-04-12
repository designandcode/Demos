<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<html>
<head>
<title>My First PHP Page</title>
<link href="http://localhost:8080/php/hello.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/jQuery/library/jquery-1.3.2.js"></script>
<script type="text/javascript" src="/jQuery/library/jquery.cycle.lite.v1.0.js"></script>
<script type="text/javascript" src="http://localhost:8080/PHP/hello.js"></script>
</head>
<body>
<p>
<br />
Document Directory
<ul class="cool_background"><li><a href="#PHPBasics">PHP Basics</a></li>
<li><a href="#PHPSearch">PHP Search</a></li>
<li><a href="#CSVMagic">CSV Magic</a></li>
<li><a href="#PHPWebservice">PHP Webservice</a></li>
<li><a href="#moreCSVMagic">More CSV Magic</a></li> </ul>
<ul class="cool_background">
<li><a href="#JavascriptMayhem">jQuery+PHP=*heart*</a></li>
<li><a href="#jQueryPeekaboo">jQuery Peekaboo</a></li>
<li><a href="#PHPWebservice2">PHP Webservice 2</a></li>
<li><a href="#PHPString_anchor">PHP String Builder</a></li>
<li><a href="#jQuerySpanBuilder">jQuerySpanBuilder</a></li>
</ul>
<ul class="cool_background">
<li><a href="#PHP-tagCloud">PHP-tagCloud</a></li>
</ul>
</p>
<br />
<p>
<hr>
<a name="PHPBasics"></a>
<?php
//Printing "strings" using PHP
/*
echo "Hello World!";
echo "<br />";
$myString = "Hello! ";
$phprocks = "PHP Rocks!  ";
echo $myString;
echo "<h5>$phprocks.. I love using PHP!</h5>";
echo "<br />";
echo "<br />";
$phpString = $myString . $phprocks;
echo $phpString . "Fella";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
*/
?>
</p>
<p>
<h4>Tizag Art Supply Order Form</h4>
<form action="hello.php" method="post">
<fieldset> 
<select name="item"> 
<option >Paint</option>
<option >Brushes</option>
<option type="selected">Erasers</option>
</select>
Quantity: <input name="quantity" type="text" value="Enter Text Here" /> 
<input type="submit" name="submit1"/>
</fieldset>
</p>
<p class="fontweight1">Joe Customer <br />
<?php
//form processor
/*
$quantity = $_GET['quantity'];
$item = $_GET['item'];
echo "You ordered ". $quantity . " " . $item . ".<br />";
echo "Thank you for ordering from Tizag Art Supplies!";
*/
?>
</p>
<p>
<?php
//simple "While" loop
/*
$brush_price = 5; 
$counter = 10;

echo "<table border=\"1\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";
while ( $counter <= 100 ) {
	echo "<tr><td>";
	echo $counter;
	echo "</td><td>";
	echo $brush_price * $counter;
	echo "</td></tr>";
	$counter = $counter + 10;
}
echo "</table>";
*/
?>
</p>
<p>
<?php
//simple "for each" with Table
/*
$employeeAges;
$employeeAges["Lisa"] = "28";
$employeeAges["Jack"] = "16";
$employeeAges["Ryan"] = "35";
$employeeAges["Rachel"] = "46";
$employeeAges["Grace"] = "34";

echo "<table border=\"1\" >";
echo "<tr><th>Name</th>";
echo "<th>Age</th></tr>";

foreach( $employeeAges as $key => $value)
{
	echo "<tr><td>";
	echo $key;
	echo "</td><td>";
	echo $value;
	echo "</td></tr>";
}
echo "</table>";
*/
?>
</p>
<p class="fontweight1">
<?php
//form processor + append external .txt (hello.txt) file
/*$item_name = $_POST['item_name'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$myFile = "hello.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $item_name . ", ";
fwrite($fh, $stringData);
$stringData = $first_name . ", ";
fwrite($fh, $stringData);
$stringData = $last_name . "\n";
fwrite($fh, $stringData);
fclose($fh);
echo "Thank You " . $first_name . "!" . " Your data has been updated.";
*/
?>
</p><br /><br /><br />
<p>
<?php

//simpleXML as array
//$xml = simplexml_load_file("hello.xml");
//foreach ($xml->item as $item) 
/*
{
   echo $id->subject, '<br />';
}
	echo "<br /><br /><br />";
*/
	//simpleXML as specific node
//	echo $xml->item[0]->title;

	?><br /><br />
</p>

<p>
<!--Source:  <a href="http://www.feedroll.com/rssviewer/">http://www.feedroll.com/rssviewer/</a>
<script language="javascript" type="text/javascript" src="http://www.feedroll.com/rssviewer/view_rss.php?type=js&source_id=25383&feed_width=200&frame_color=000000&title_textcolor=000000&title_bgcolor=FFFFFF&box_textcolor=0000FF&box_bgcolor=FFFFFF&feed_showborder=0&feed_spacing=2&feed_align=left&feed_textsize=12&feed_textfont=Times New Roman, serif&feed_maxitems=15&feed_desclimit=&feed_compact=1&feed_xmlbutton=0&link_openblank=1"></script>
-->
</p>

<hr>
<p>
<!-- <h3>Upcoming Google Developer Events</h3>
<h5>Courtesy: <a href="http://code.google.com/apis/gdata/json.html">http://code.google.com/apis/gdata/json.html</a></h5><br />
<div id="agenda"></div>

<script>
  function listEvents(root) {
    var feed = root.feed;
    var entries = feed.entry || [];
    var html = ['<ul>'];

    for (var i = 0; i < entries.length; ++i) {
      var entry = entries[i];
      var title = entry.title.$t;
      var start = (entry['gd$when']) ? entry['gd$when'][0].startTime : "";	

      html.push('<li>', start, ' ', title, '</li>');
    }

    html.push('</ul>');
    document.getElementById("agenda").innerHTML = html.join("");
  }
</script>

<script src="http://www.google.com/calendar/feeds/developer-calendar@google.com/public/full?alt=json-in-script&callback=listEvents">
</script>
-->
</p>
<hr>
<p>
<!--
<div style="font-family:Arial, sans-serif; "></div>
		<h1>ChipIn! XML to JSON with Yahoo Pipes example</h1>
	<p style="text-align:center;" class="status"><span>$<span id="raised">??</span> <i>of</i> $<span id="total">15,000</span></span><b id="bar" style="width:0%"></b></p>
	<p style="text-align:center;font-size:80%;"><a href="#"><img src="/html/images/chipin.png" alt="ChipIn!" border="0"></a><br>
	This campaign tracker is 
	powered by <a href="http://www.chipin.com/">ChipIn!</a>.	</p>
	<script>
		function myfunction(o) {
			var o = o.value.items[0];
			var $ = function(id) { return document.getElementById(id) };
			$('raised').innerHTML = o.collectedAmount;
			$('total').innerHTML = Math.round(o.targetAmount,0);
			var w = Math.round((o.collectedAmount / o.targetAmount)*100, 1);
			$('bar').style.width = w + '%';				
		}
	</script>
	<script src="http://pipes.yahoo.com/pipes/pipe.run?_id=0DT6pR0I3hGdnARWrbQIDg&_render=json&_callback=myfunction"></script>
-->
</p>
<br />
<br />
<br />
<p>
<!--
<div id="main">
<span id="aNew">REFERENCE-1</span><br/>
<span id="linkNew">REFERENCE-2</span>
</div>
<script>
		function feedFunction(p)
{				
var p = p.value.items[0];
{
var newSpan = document.createElement("span");
{
newSpan.id = "aNew"; 
newSpan.className ="dynamicSpan"; 			
newSpan.innerHTML = "<a href='"+p.link+"'>"+p.title+"</a>"+"<br /><br />";
main.appendChild(newSpan);
}
}
}

	</script>
	<script src="http://pipes.yahoo.com/pipes/pipe.run?_id=ksz9RAjR3RG9NNqg_w6H4A&_render=json&_callback=feedFunction"></script>

<script>	
	function feedFunction(p)
{				
var p = p.value.items[1];
{
var newSpan = document.createElement("span");
{
newSpan.id = "aNew"; 
newSpan.className ="dynamicSpan"; 			
newSpan.innerHTML = "<a href='"+p.link+"'>"+p.title+"</a>"+"<br /><br />";
main.appendChild(newSpan);
}
}
}

	</script>
	<script src="http://pipes.yahoo.com/pipes/pipe.run?_id=ksz9RAjR3RG9NNqg_w6H4A&_render=json&_callback=feedFunction"></script>


<script>	
	function feedFunction(p)
{				
var p = p.value.items[2];
{
var newSpan = document.createElement("span");
{
newSpan.id = "aNew"; 
newSpan.className ="dynamicSpan"; 			
newSpan.innerHTML = "<a href='"+p.link+"'>"+p.title+"</a>"+"<br /><br />";
main.appendChild(newSpan);
}
}
}

	</script>
	<script src="http://pipes.yahoo.com/pipes/pipe.run?_id=ksz9RAjR3RG9NNqg_w6H4A&_render=json&_callback=feedFunction"></script>
-->
</p>
<hr>
<br />
<p>
<a name="PHPSearch"></a>
Various Array PHP Search functions
<?php
/*
echo "<br />";
echo "<br />";
echo "1. ";
// create an array of strings called $fruitBasket:
$fruitBasket = array( "Apple", "Orange", "Mango", "Lemon", "Pear" );
// use the in_array() function to check if "Apple" is in the array:
if( in_array("Apple", $fruitBasket) )
{
  echo "Apple is in the array";
}
else
{
  echo "Apple is not in the array";
}

echo "<br />";
echo "<br />";

echo "2. ";
*/

/*function myfunction($v) 
{
if ($v==="Horse")
	{
	return true;
	}
return false;
}
$a=array(0=>"Dog",1=>"Cat",2=>"Horse",3=>"Horse",4=>"Horse");
$b=(array_filter($a,"myfunction"));

echo "Horse appears: " . count($b, 1) . " times";

*/
?>
</p>
<br /><br />
<p>
<form action="hello.php" method="GET">
<fieldset name="Open_Edit_txt"> 
<select name="item_name" value="Paint"> 
<option>Paint</option>
<option>Brushes</option>
<option>Erasers</option>
</select>
<input name="first_name" type="text" value="firstname"/><br />
<input name="last_name" type="text" value="lastname"/><br />  
<input type="submit" name="submit4"/>
</fieldset>
</form><br /><br />
<?php
//form processor + append external .txt (hello.txt) file
/*
$item_name = $_GET['item_name'];
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$myFile = "hello2.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $item_name . " | ";
fwrite($fh, $stringData);
$stringData = $first_name . " | ";
fwrite($fh, $stringData);
$stringData = $last_name . "\r\n";
fwrite($fh, $stringData);
fclose($fh);
echo "Thank You " . $first_name . "!" . " Your data has been updated.";
*/
?>
</p>
<p>
<?php
/*
$fp = fopen('hello2.txt','r');
if (!$fp) {echo 'ERROR: Unable to open file.</table></body></html>'; exit;}

while (!feof($fp)) {
	$line = fgets($fp,1024); //use 2048 if very long lines
	list ($item, $firstname, $lastname) = split ('\|', $line);
	echo 

$item . $firstname . $lastname;
	$fp++;
}

fclose($fp);

*/ ?>
</p>
<p>

</p>
<p>
<?php
//this function counts the frequency of words in a text file

function wordCountTxt($myFile="hello3.txt")
{

$fp = fopen($myFile,'r');
if (!$fp) {echo 'ERROR: Unable to open file.</table></body></html>'; exit;}

while (!feof($fp)) {
	$theData = fread($fp, filesize($myFile));
	$newArray = explode("|",$theData);
	
	
	$c = array_count_values($newArray);
	$s = arsort($c);
	
	foreach ($c as $key => $val) {
	if ($key !='')
    echo $key . " " . "(" . $val . ")" . "<br />";
}
}
fclose($fp);
}

echo wordCountTxt($myFile="hello3.txt");


?>
</p>
<hr>
<p>
<?php
//this is a call back function (line 354) which counts the frequency of words in a different text document
//echo wordCountTxt($myFile="hello4.txt");
?>
</p>
<p>
<?php
/*
$n=array(0=>"Dog",1=>"Cat",2=>"Horse",3=>"Horse",4=>"Horse");
$c = array_count_values($n);
$s = arsort($c);


foreach ($c as $key => $val) {
//    echo $key . " " . "(" . $val . ")" . "<br />";
	echo "<a href=http://www.google.com/search?q=" . $key . ">" . $key . " " . "(" . $val . ")" . "</a>" . "<br />";
}
*/
?>
</p>
<p>
<?php
/*
$myFile = "noupe.xml";
$fp = fopen($myFile,'r');
if (!$fp) {echo 'ERROR: Unable to open file.</table></body></html>'; exit;}

while (!feof($fp)) {
	$theData = fread($fp, filesize($myFile));
	$theData = strtolower($theData);
	$wordFilter = array ("with", "how", "for", "your", "this", "using", "will", "new", "that", "border", "can", "strong", "out", "here", "from", "thr", "check", "file", "are", "some", "more", "link", "name", "art", "rel", "simple", "have", "comments", "post", "great", "use", "feedflare", "them", "visit", "files", "updated", "logofaves", "all", "add", "total", "page", "ways", "org", "uri", "time", "one", "summary", "any", "category", "make", "term");
	$theData = str_replace($wordFilter, " ", $theData);
	$theData = ereg_replace("[^a-z]", " ", $theData);
	$newArray = explode(" ",$theData);
	
	
	$c = array_count_values($newArray);
	$s = arsort($c);
	
	foreach ($c as $key => $val) {
	if (strlen($key) > 2 && $val < 160 && $val > 20 && $key != $wordFilter)
	
    echo $key . " " . "(" . $val . ")" . "<br />";
}
}
fclose($fp);
*/
?>
</p>
<hr>
<p>
<?php
/*
$string = "This is some text and numbers 12345 and symbols !г$%^&"; 

$new_string = ereg_replace("[^A-Za-z0-9]", " ", $string); 

echo $new_string 
*/
?>
<br /><br />
</p>
<hr>
<p>
<a name="CSVMagic"></a>
<?php

//This prints each line as columns of the CSV individually
/*
echo "<table border=\"1\">";
echo "<tr><th>State</th>";
echo "<th>Current</th>";
echo "<th>High</th>";
echo "<th>Percent</th></tr>";


$fp = fopen('state_unemployment_data_3-09.csv','r');
if (!$fp) {echo 'ERROR: Unable to open file.</table></body></html>'; exit;}

while (!feof($fp)) {
	$line = fgets($fp,1024); //use 2048 if very long lines
	
	list ($state, $current, $high, $percent) = explode (',', $line);
	
echo
"<tr><td>" . $state . "</td><td>" . $current . "</td><td>" .
$high . "</td><td>" . $percent . "</td></tr>";


 
	$fp++;
}
echo "</table>";

fclose($fp);

*/
?>
</p>
<hr>
<p>
PHP Generated Drop down list for all 50 states! <br />
<?php
// 50 states dropdown list function
/*
function statesList()
{
echo "<form action=\"\">";
	echo "<select>";
	
$fp = fopen('state_unemployment_data_3-09.csv','r');
if (!$fp) {echo 'ERROR: Unable to open file.</table></body></html>'; exit;}

while (!feof($fp)) {
	$line = fgetcsv($fp,1024); //use 2048 if very long lines
	
//	print $line[0] . "<BR>";
	
	
	echo "<option value=\"$line[0]\">" . $line[0] . "</option>";
}
	echo "</select></form>";
fclose($fp);
}

echo statesList();
*/
?>
</p>
<hr>
<p>
<?php

//$row = 1;
/*
$handle = fopen("blogroll.csv", "r");
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data);


	//echo $data[0];
	echo "<br />";
*/	

/*	echo "<p> $num fields in line $row: <br /></p>\n";*/
    
	/*
    for ($c=0; $c < $num; $c++) {
        echo $data[$c] . " ";
    } 

	}
fclose($handle);
*/
?>

</p>
<p>
<!--
<div id="main2">
<span id="aNew"></span><br/>
<span id="linkNew"></span>
</div>
<script>
		function feedFunction(p)
{				
var p = p.value.items[0];
{
var newSpan = document.createElement("span");
{
newSpan.id = "aNew"; 
newSpan.className ="dynamicSpan"; 			
newSpan.innerHTML = "<a href='"+p.link+"'>"+p.title+"</a>"+"<br /><br />";
main2.appendChild(newSpan);
}
}
}

	</script>
	<script src="http://pipes.yahoo.com/pipes/pipe.run?_id=lDV62Usv3hG7x40RQBJ3AQ&_render=json&_callback=feedFunction"></script>
-->
</p>
<hr>
<a name="PHPWebservice"></a>
<p>
<!--<iframe src ="http://localhost:8080/php/indeed.php" width="200px" height="600px" frameborder="0">
<p>Your browser does not support iframes.</p>
</iframe>-->
</p>
<p>
<h1>LINE 610 - SimpleXmlElement object</h1>
<?php

$feed = file_get_contents('noupe.xml');
$rss = new SimpleXmlElement($feed);

//foreach($rss->entry[0] as $entry) {
$i=0;
while($i<=4)
	{
   echo "<p><a href=\"" . $rss->entry[$i]->id . "\">" . $rss->entry[$i]->title . "</a></p>";
	$i++;
   }
 
   //	}

   ?>
</p>
<hr>
<a name="moreCSVMagic"></a>
<p>
<a href="javascript:void(0)" name="show_pg1" id="show_pg1">show Page1<a/>
<a href="javascript:void(0)" name="show_pg2" id="show_pg2">show Page2<a/>
<br />
<div>
<div>

<?php
//stateUnemployment() function defined
/*
function stateUnemployment()
{
$handle = @fopen('state_unemployment_data_3-09.csv','r'); 
if ($handle) { 
   while (!feof($handle)) { 
	// $rows[] = fgets($handle, 1024);
	$rows[]=fgetcsv($handle,1000,',');
      } 
*/
	  
/*
$row[]=
Array 	
( 
[0] => Array 
	( 
	[0] => Alabama [1] => 9.0 [2] => 14.4 [3] => 37.5 
	) 
[1] => Array 
	( 
	[0] => Alaska [1] => 8.5 [2] => 11.5 [3] => 26.1 
	) 
[2] => Array 
	( 
	[0] => Arizona [1] => 7.8 [2] => 11.5 [3] => 32.2 
	)
[3]-[50] =>	...
	(
	[0] => ...
	)
)
*/
   
// print_r($rows);
//   for ($c=0;$c<10;$c++)

/*
   $cs = func_get_args();
   foreach ($cs as $c)
   {
  echo $rows[$c][0] . " " . $rows[$c][1] . " " . $rows[$c][2] . " " . $rows[$c][3] . "<br />";
  }
//   echo $rows[41][0] . " " . $rows[41][1] . " " . $rows[41][2] . " " . $rows[41][3] . "<br />";
   
      
   fclose($handle); 
}
}

echo stateUnemployment("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
*/
?>
</div>
<div id="state_pg2">
<?php
/*
echo stateUnemployment("10", "11", "12", "13", "14", "15", "16", "17", "18", "19");
*/

?>
</div>
<div>
<?php
/*
echo stateUnemployment("20", "21", "22", "23", "24", "25", "26", "27", "28", "29");
*/

?>
</div>
</div>
</p>
<br /><br />
<p>
<?php

//$str = "Hello,fri3nd,you're,looking,good,today!";

//$lookingArray=str_word_count($str, 1, 'рсуч3');

//print_r($lookingArray);

//$lookingArray = arsort($lookingArray);

//echo $lookingArray[1];

//print_r(str_word_count($str, 1, 'рсуч3'));

//echo str_word_count($str);

?>
</p>
<br /><br />
<p>
<!--
<select name="language" onclick="getValue()">
<option value="empty">- - - - - - - - - </option>
<option value="Washington">Washington</option>
<option value="Baltimore">Baltimore</option>
<option value="NewYork">New York</option>
<option value="<Miami">Miami</option>
</select>
-->

</p>
<a name="JavascriptMayhem"></a>
<p>
<div>
<select name="language21" id="language21" onchange="getValue()">
<option value="empty">- - - - - - - - - </option>
<option value="Washington">Washington</option>
<option value="Baltimore">Baltimore</option>
<option value="NewYork">New York</option>
<option value="Miami">Miami</option>
</select>

<!--<input type="text" name="language21" id="language21" onfocus="getValue()"> -->

<br /><br /><span id="food">Here is some text</span>
</div>
</p>
<p>
<?php
//callback a function declared in line 569
//echo stateUnemployment("40", "41", "42", "43", "44", "45", "46", "47", "48", "49");
?>
</p>
<br /><br />
<p>
<script type="text/javascript">
$(function() {
    $('#slideshow1').cycle();
    
    $('#slideshow2').cycle({
        prev:   '#prev',
        next:   '#next',
		delay:  0, 
		speed:  0,
        timeout: 0
    });
    
    $('#slideshow3').cycle({
        delay: 2000,
        speed: 500,
        before: onBefore
    });
    
    function onBefore() {
        $('#title').html(this.alt);
    }
});
</script>
<a id="prev" href="#"><img src="http://localhost:8080/html/images/Rewind.png" /></a>&nbsp;&nbsp;&nbsp;
<a id="next" href="#"><img src="http://localhost:8080/html/images/Forward.png" /></a>
<div id="slideshow2" class="pics">
<img src="http://localhost:8080/html/images/page3-button-blue.jpeg" />
<img src="http://localhost:8080/html/images/page2-button-orange.jpeg" />
<img src="http://localhost:8080/html/images/home-button-blue.jpeg" />
</div>
</p>
<br /><br />
<p>
<script type="text/javascript">
$(function() {
    $('#slideshow1').cycle();
    
    $('#slideshow4').cycle({
        prev:   '#prev4',
        next:   '#next4',
		delay:  0, 
		speed:  0,
        timeout: 0
    });
    
    $('#slideshow3').cycle({
        delay: 2000,
        speed: 500,
        before: onBefore
    });
    
    function onBefore() {
        $('#title').html(this.alt);
    }
});
</script>
<a id="prev4" href="#">prev</a>&nbsp;&nbsp;&nbsp;<a id="next4" href="#">next</a>
<div id="slideshow4" class="pics">
<span id="state_pg1">
<?php 
/*
echo stateUnemployment("0", "1", "2", "3", "4", "5", "6", "7", "8", "9"); 
*/
?> 
</span>
<span id="state_pg2">
<?php 
/*
echo stateUnemployment("10", "11", "12", "13", "14", "15", "16", "17", "18", "19");
 */
?> 
</span>

</div>
</p>
<br /><br />
<p>
<a id="page1_1" href="javascript:void(0)"><img src="http://localhost:8080/html/images/ltblue_swatch.jpg" /></a>&nbsp;&nbsp;&nbsp;
<a id="page2_1" href="javascript:void(0)"><img src="http://localhost:8080/html/images/mintgreen_swatch.jpg" /></a>
<div id="imageGallery_container">
<div id="imageGallery">
<img src="http://localhost:8080/html/images/home-button-blue.jpeg" />
</div>
</div>
</p>
<p>

<?php
//prints a random row from a csv file

/*
$newCSV=@fopen('blogroll.csv','r');
if ($newCSV) {
	while (!feof($newCSV)) {
	$rows[]=fgetcsv($newCSV,1000,',');
	}
	
$rand=rand(0,2);
$rand2=rand(3,5);
$rand3=rand(6,8);
$rand4=rand(9,11);
$rand5=rand(12,14);
//$rand6=rand(6,8);
	
//$rand = func_get_args(rand(0,2));	
	
echo $rows[$rand][0] . " " . $rows[$rand][1] . "<br />" .
	$rows[$rand2][0] . " " . $rows[$rand2][1] . "<br />" .
	$rows[$rand3][0] . " " . $rows[$rand3][1] . "<br />" .
	$rows[$rand4][0] . " " . $rows[$rand4][1] . "<br />" .
	$rows[$rand5][0] . " " . $rows[$rand5][1] . "<br />";
//	$rows[$rand6][0] . " " . $rows[$rand6][1] . "<br />" . 
	
}

fclose($newCSV); 

*/
?>
</p>
<p>


</p>

<p>

<!--<div id="main">
<span id="aNew">REFERENCE-1</span><br/>
<span id="linkNew">REFERENCE-2</span>
</div>-->
<!--<script>
//http://tinyurl.com/66zsob forms the basis for this script
function feedFunction(obj) {	
    //this is the div I'm writing the content to	
    var tDiv = document.getElementById("linkNew2");	
    var from_user, bgcolor, text, created_at, profile_image_url, new_userURL, to_user_id, to_user, id, from_user_id, iso_language_code, source;	
    //start the ul	
    tDiv.innerHTML = "<ul>"	
    for (i=0;i<obj.results.length;i++) {	
    	//Look at me use the JavaScript modulus operator to do even/odd rows.
      	if(i % 2) {
        	bgcolor="#efefef"
        } else {
       		bgcolor="#ddd"	
        }
        //we need to get some data out of the object
        //and populate some variables.
        //i could do this inline in the string below, 
        //but this is way easier for you to read
		profile_image_url = obj.results[i].profile_image_url;
        to_user_id=obj.results[i].to_user_id;
		to_user=obj.results[i].to_user;
		from_user = obj.results[i].from_user;
		from_user_id=obj.results[i].from_user_id;
		id=obj.results[i].id;
		text = obj.results[i].text;
        created_at = obj.results[i].created_at;
		iso_language_code=obj.results[i].iso_language_code;
		source=obj.results[i].source;
        new_userURL = "http://twitter.com/"+from_user;
	    //and here I mash it all up into a fancy li
   		//tDiv.innerHTML +="<li style='background-color:"+bgcolor+"'><strong><a href='"+new_userURL+"'>"+from_user+"</a></strong>: "+text+" <span class='time'>("+created_at+" GMT)</span> </li>";
		tDiv.innerHTML +="<li id='tweetlist-style'><strong><a href='"+new_userURL+"'>"+from_user+"</a></strong>: "+text+" <span class='time'>("+created_at+" GMT)</span> </li>";
	}	
    //and close the UL
    tDiv.innerHTML += "</ul>";
}
</script>-->

<div>
TweetBox <br />
<br />
<div id="tweetbox">
<div id="tweets">
<div id="main2">
<span id="aNew2">Latest Tweets</span><br/>
<span id="linkNew2"><a href="http://twitter.com/web2000">Visit My Twitter Page!</a></span>
</div>
</div>
<?php
// http://search.twitter.com/search.json?callback=feedFunction&q=web2000+OR+%40web2000+OR+%23web2000

// http://search.twitter.com/search?q=twitter would become http://search.twitter.com/search.json?q=twitter
//<script src="http://search.twitter.com/search.json?callback=feedFunction&q=from%3Aal3x"></script>

/*
echo "<script src=\"http://search.twitter.com/search.json?callback=feedFunction&q=from%3Aweb2000\"></script>";
*/

//echo "<script src=\"http://search.twitter.com/search.json?callback=feedFunction&q=devo\">" . "</script>";
?>
<!--<script src="http://search.twitter.com/search.json?callback=feedFunction&q=devo"></script>-->
</div>
<?php
// http://search.twitter.com/search.json?callback=feedFunction&q=web2000+OR+%40web2000+OR+%23web2000

// http://search.twitter.com/search?q=twitter would become http://search.twitter.com/search.json?q=twitter
//echo "<script src=\"http://search.twitter.com/search.json?callback=feedFunction&q=devo\">" . "</script>";
?>
<!--<script src="http://search.twitter.com/search.json?callback=feedFunction&q=devo"></script>-->
</div>

</p>


<p>
<!--
<div class="footer_content" id="footer_content">
<div id="footer_container">

</div>
<div id="footer_clickme" ><img  src="http://localhost:8080/html/images/24x24_greenrightarrow.gif" /></div>
</div>
-->


</p>
<p>



</p>
<a name="jQueryPeekaboo"></a>
<p>

<div id="footer_new">
<div id="footer_container">
<div id="footer_clickme" ><img  src="http://localhost:8080/html/images/24x24_greenrightarrow.gif" /></div>
<div id="footer_content">

HERE IS SOME TEXT<br /><br /><br /><br /><br />HERE IS SOME MORE TEXT</div>
</div>
</div>

</p>
<a name="PHPWebservice2"></a>
<p>
Google Chart API - Demonstration <br />
<img src="http://chart.apis.google.com/chart?chs=250x100&amp;chd=t:60,40&amp;cht=p3&amp;chl=Hello|World" alt="Sample chart" />
<br /><br />
Create a Chart on the fly (Basic)
<br />
<form action="#PHPWebservice2" method="GET">
<select name="chart_type">
<option value="&amp;cht=p3">Pie Chart</option>
<option value="&amp;cht=bvs">Bar Chart</option>
</select>
<input type="radio" name="size" value="chs=250x100"/>Small &nbsp; 
<input type="radio" name="size" value="chs=500x200" checked="checked"/>Large <br />
<input type="submit" value="Submit"/>
</form>
<br />
<?php
/*
$domain=$_SERVER['HTTP_HOST'];
$path=$_SERVER['SCRIPT_NAME'];
$queryString=$_SERVER['QUERY_STRING'];
$urlComplete=$domain . $path . $queryString;
$chartType=$_GET['chart_type'];
$chartSize=$_GET['size'];
*/

//echo $domain . "<br />";
//echo $path;
//echo $queryString;


//if ($urlComplete == 'localhost:8080/php/hello.php' /*&& $queryString = null*/)
//echo "<img src=\"http://localhost:8080/html/images/home-button-blue.jpeg\" />";

//else
//	echo "<img src=\"http://chart.apis.google.com/chart?" . $chartSize ."&amp;chd=t:60,40" . $chartType . "&amp;chl=Hello|World\"" . " alt=\"Sample chart\"" . " />";

?>
</p>
<p>

<a name="PHPString_anchor"></a>
This class? turns a group of PHP (as html) and joins them with the proper " and \"
example:<br />
<code>
&lt;a href=&quot;javascript:void(0)&quot; name=&quot;show_pg1&quot; id=&quot;show_pg1&quot;&gt;show Page1&lt;a/&gt;
<!--<a href="javascript:void(0)" name="show_pg1" id="show_pg1">show Page1<a/>--></code><br /><br />
becomes<br />
<code>$stringComplete=&quot;&lt;a href=\&quot;javascript:void(0)\&quot; name=\&quot;show_pg1\&quot; id=\&quot;show_pg1\&quot;&gt;show Page1&lt;a/&gt;&quot;;
<!--$stringComplete="<a href=\"javascript:void(0)\" name=\"show_pg1\" id=\"show_pg1\">" . "show" . " " . "Page1" . "<a/>";--></code>
</p>
<p>
Implementation <br />
<form action="#PHPString_anchor" method="GET">
<input type="hidden" name="begQuote" value='"'/>
<input type="hidden" name="endQuote" value='";'/>
<input type="hidden" name="stringBeg" value="$" />
<input type="hidden" name="stringEnd" value="=" />
Enter String Name: &nbsp; $<input type="text" name="stringName" /><br />
Paste HTML: &nbsp; <input type="text" name="html" /><br />
<input type="submit" value="submit"/>
</form>
<?php

//function stringifyHTML()
//{
/*
$domain=$_SERVER['HTTP_HOST'];
$path=$_SERVER['SCRIPT_NAME'];
$queryString=$_SERVER['QUERY_STRING'];
$urlComplete=$domain . $path . $queryString;
$begQuote=$_GET ['begQuote'];
$endQuote=$_GET ['endQuote'];
$stringName=$_GET ['stringName']; 
$stringBeg=$_GET ['stringBeg'];
$stringEnd=$_GET ['stringEnd'];
$url=$_GET['html'];
$url=htmlentities($url); 
*/

//$begQuote=ereg_replace('\"', ' "', $begQuote);

//if ($urlComplete == 'localhost:8080/php/hello.php' /*&& $queryString = null*/)
//echo "your query will go here";
	//$url=ereg_replace('"', '\"', $url);
/*
else
{
echo   $stringBeg . $stringName . $stringEnd . '"' . $url . '";';
echo "<br />";
echo "<a href=\"javascript:void(0)\" name=\"show_pg1\" id=\"show_pg1\">show Page1<a/>";
}
*/
//}

//echo stringifyHTML();

?>

</p>

<hr>
<a name="jQuerySpanBuilder"></a>
<p>
Click Me!: <img id="newSpanButton" src="http://localhost:8080/html/images/more_red.png" />
<img id="spanClose" src="http://localhost:8080/html/images/more_blue.png" /><br />

<input type="text" name="spanText" id="spanText"  />

<div class="spanBuilder">
<div id="message_flash_container">
<div id="message_flash">Message received!</div>
<div id="message_flash_2">Message deleted!</div>
</div>
<a href="javascript:void(0)" id="newSpanBuilt">OLD Span</a>

</div>
<br /><br />

<hr>
<p>
<a name="PHP-tagCloud"></a>
PHP tag cloud
<ul>
<li>access data</li> <li>count word frequency</li> <li>CSS - show data</li> <li>PHP print data</li>
</ul>
<br /><br />
Challenges:<br />
<ol> <li>How to access data</li> <li>Math - word count linked to CSS formatting</li>
</ol>
<br />
Math - <br/><br />
if word frequency between 1-10; echo "something"<br /><br />-or-
<br />
case; <br />
&nbsp; &nbsp; &nbsp;  echo something; <br />
break; <br />
case; <br />
etc..<br /><br />-or-
<br />
IMPLEMENTATION<br /><br />
<div class="tagcontainer">
<?php
/*
$myFile = "noupe.xml";
$fp = fopen($myFile,'r');
if (!$fp) {echo 'ERROR: Unable to open file.</table></body></html>'; exit;}

while (!feof($fp)) {
	$theData = fread($fp, filesize($myFile));
	$theData = strtolower($theData);
	$wordFilter = array ("with", "how", "for", "your", "this", "using", "will", "new", "that", "border", "can", "strong", "out", "here", "from", "thr", "check", "file", "are", "some", "more", "link", "name", "art", "rel", "simple", "have", "comments", "post", "great", "use", "feedflare", "them", "visit", "files", "updated", "logofaves", "all", "add", "total", "page", "ways", "org", "uri", "time", "one", "summary", "any", "category", "make", "term");
	$theData = str_replace($wordFilter, " ", $theData);
	$theData = ereg_replace("[^a-z]", " ", $theData);
	$newArray = explode(" ",$theData);
	
	
	$c = array_count_values($newArray);
	//$s = arsort($c);
	
	foreach ($c as $key => $val) {
	if (strlen($key) > 2 && $val < 55 && $val > 20 && $key != $wordFilter)
	{
	echo "<span id=\"tagsmall\">";
	echo "<a href=http://www.google.com/search?q=" . $key . ">" . $key .  "(" . $val . ")" . "</a>" . "&nbsp;&nbsp;";
    //echo $key . " " . "(" . $val . ")" . "<br />";
	echo "</span>";
	}
	elseif (strlen($key) > 2 && $val < 90 && $val > 55 && $key != $wordFilter)
	{
	echo "<span id=\"tagsmall-medium\">";
	echo "<a href=http://www.google.com/search?q=" . $key . ">" . $key .  "(" . $val . ")" . "</a>" . "&nbsp;&nbsp;";
    //echo $key . " " . "(" . $val . ")" . "<br />";
	echo "</span>";
	}
	elseif (strlen($key) > 2 && $val < 125 && $val > 90 && $key != $wordFilter)
	{
	echo "<span id=\"tagmedium\">";
	echo "<a href=http://www.google.com/search?q=" . $key . ">" . $key .  "(" . $val . ")" . "</a>" . "&nbsp;&nbsp;";
    //echo $key . " " . "(" . $val . ")" . "<br />";
	echo "</span>";
	}
	elseif (strlen($key) > 2 && $val < 160 && $val > 125 && $key != $wordFilter)
	{
	echo "<span id=\"taglarge\">";
	echo "<a href=http://www.google.com/search?q=" . $key . ">" . $key .  "(" . $val . ")" . "</a>" . "&nbsp;&nbsp;";
    //echo $key . " " . "(" . $val . ")" . "<br />";
	echo "</span>";
	}
}
}
fclose($fp);
*/
?>
</div>
</p>
<br /><br />
<hr>

<p>
<div class="background_loader_container">
<div class="background_loader">
<!--<span id="background_loader_image_0"><img src="http://localhost:8080/html/images/lime-on-white-wallpapers_13086_267x200.jpg" /></span>-->
<span id="background_loader_image_1"><img src="http://localhost:8080/html/images/lime-on-white-wallpapers_13086_267x200.jpg" /></span>
<span id="background_loader_image_2"><img src="http://localhost:8080/html/images/albumart-Copy[0].jpg" /></span>
<span id="background_loader_image_3"><img src="http://localhost:8080/html/images/albumart-Copy[1].jpg" /></span>
</div>
<div id="background_loader_overlay">
<span id="quickie">TEXT GOES HERE!</span><br />
<img src="http://localhost:8080/html/images/rss_icon_glass_blue64.PNG" />
</div>





</div>
<br /><img id="next_arrow" src="http://localhost:8080/html/images/24x24_bluerightarrow.gif" />
</p>
<br /><br />



<p>
<div class="twitter_feed"><img src="http://localhost:8080/html/images/twit.png" />
</div>
<div id="twitter_feed_2"></div>
</p>
<br /><br />
<p>

</p>

<br />
<p>
<!--<script src="http://pipes.yahoo.com/js/listbadge.js">{"pipe_id":"zModm4pP3hGOBva7pgt1Yg","_btype":"list"}</script>-->
<br />
<!--<script src="http://pipes.yahoo.com/js/listbadge.js">{"pipe_id":"zModm4pP3hGOBva7pgt1Yg","_btype":"list","width":"200","height":"300"}</script>-->

</p>
<p>

<div class="demos-main">
<div id="demos-screenshot">
<img src="http://localhost:8080/html/images/apps.JPG" />
</div>
<div id="demos-content-title">
<span>Coming Soon!</span>
</div>
<div id="demos-content">
Presented here soon will be applications that will enhance your internet experience in the spirit of web 2.0. You know, tools to help you do more and stay connected
to the fast changing internet community.
</div>
</div>
</p>
<p>
<img id="bluearrow" src="http://localhost:8080/html/images/24x24_bluerightarrow.gif" />
<div id="showmethediv">
</div>
</p>
<hr>
<p>


<?php
/*
function appendText($myFilez="Twitter_follow_50_recruiters.txt")
{

$fp = fopen($myFilez,'r');
if (!$fp) {echo 'ERROR: Unable to open file.</table></body></html>'; exit;}

while (!feof($fp)) {
	$theData = fread($fp, filesize($myFilez));
	$newArray = explode(",",$theData);
	
	
	//$c = array_count_values($newArray);
	//$s = arsort($c);
	
	foreach ($newArray as $key => $val) 
	{
    //echo $key . " " . "(" . $val . ")" . "<br />";
	echo "<a href=\"http://twitter.com/" . $val . '"' . ">" . $val . "</a><br />";
	
}
}
fclose($fp);
}

echo "Twitter_follow_50_recruiters" . "<br />";
echo appendText($myFilez="Twitter_follow_50_recruiters.txt");
echo "<hr>";
echo "Twitter_follow_450_iphone_Developers" . "<br />";
echo appendText($myFilez="Twitter_follow_450_iphone_Developers.txt");
//"<a href=\"http://twitter.com/" . $value . '"' . ">" . $value . "</a>";


*/
?>

</p>
<p>
Function: quick letter wheel using range() <br />
<?php
/*
foreach (range('a', 'z') as $char) {
  print "<div id=\"letterwheel\"><a href='http://localhost:8080/php/hello.php?letter=$char'>$char</a></div>";
}
*/
?>

</p><br />
<p>
Function: Get Remote IP Address in PHP using $_SERVER['REMOTE_ADDR'] <br />
<?
/*
function getRemoteIPAddress() {  
    $ip = $_SERVER['REMOTE_ADDR'];  
    return $ip;  
}  

echo "your ip address is: <strong>" . getRemoteIPAddress() . "</strong>";
*/
?>

</p>
<p>
Function:  More uses for the $_SERVER[] function <br />
others include $_SERVER['HTTP_REFERER'] is where they came from.<br />
$_SERVER['REQUEST_URI'] is the page they want to view.<br /><br />

<?php
/*
function getRemoteBrowser() {  
    $browser = $_SERVER['HTTP_USER_AGENT'];  
    return $browser;  
}  

echo "your browser is: <strong>" . getRemoteBrowser() . "</strong>";
*/
?>

</p>
<p>
Function: Generate An Authentication Code in PHP using rand() <br />
<?php

# This particular code will generate a random string  
# that is 25 charicters long 25 comes from the number  
# that is in the for loop  
/*
$string = "abcdefghijklmnopqrstuvwxyz0123456789";  
for($i=0;$i<25;$i++){  
    $pos = rand(0,36);  
    $str .= $string{$pos};  
}  
echo $str; 
*/ 
# If you have a database you can save the string in  
# there, and send the user an email with the code in  
# it they then can click a link or copy the code  
# and you can then verify that that is the correct email  
# or verify what ever you want to verify  

?>

</p>
<p>
Uses: $_SERVER['REQUEST_URI'] to get current address from address bar<br />
<?php
//we need to set a var to find what page we are on
/*
$pageOn = basename($_SERVER['REQUEST_URI']);
//this is used for the title bar
$mItem = $pageOn;
*/
?>
<?php
/*
echo $pageOn;
*/
?>
<div class="navigation">
<ul>
<li><a href="hello.php"<?php /*if($pageOn == 'hello.php'){ */?> id="selected"<?php /* } */?>>home</a></li>
<li><a href="hello.php?books"<?php /*if($pageOn == 'hello.php?books'){ */?> id="selected"<?php /* } */?>>books</a></li>
<li><a href="hello.php?movies"<?php /*if($pageOn == 'hello.php?movies'){ */?> id="selected"<?php /*} */?>>movies</a></li>
<li><a href="hello.php?contact"<?php /*if($pageOn == 'hello.php?contact'){ */?> id="selected"<?php /*} */?>>contact</a></li>
</ul>
</div>
</p>
<p>
Testing GD image creation functionality<br />
Calling an image created in a standalone script file<br />
<code style="color:blue;">&lt;img src="http://localhost:8080/php/phpcanvasGD.php" /></code><br />

<!--<img src="http://localhost:8080/php/phpcanvasGD.php" />-->

<br />
<p>
<img src="http://localhost:8080/html/images/Apple_3.png" width="64px" height="64px" > <br />
<img src="http://localhost:8080/html/images/Apple_3.png" >
</p>
<p>
Code Below shows the current mouse position on the page
</p>
<p class="pointer">


</p>
<p>
Code Below shows the current mouse click position within this div
</p>
<p>
	<div id="click" style="background-color:#efefef;
	width:300px;
	height:50px;
	text-align:center;
	font:1.2em Arial;
	line-height:50px;">
	
	</div>
</p>
<p>
	<div id="container" style="position:relative; margin-left:30px; width:900px; height:120px; border:1px solid black;">
		<div class="column-left" style="position:absolute; left:1%; top:10px; width:200px; height:70px; border: 1px solid red; padding:.25em;">
			<div style="position:relative; width:100%; height:20px; border:1px dashed red;">
				<span style="position:relative; left:0%;"><img src="http://localhost:8080/html/images/24x24_bluerightarrow.gif" /></span>
			</div>
			<div style="position:relative; width:100%; height:20px; border:1px dashed red;">
				<span style="position:relative; left:35%;"><img src="http://localhost:8080/html/images/24x24_bluerightarrow.gif" /></span>
			</div>
			<div style="position:relative; width:100%; height:20px; border:1px dashed red;">
				<span style="position:relative; left:70%;"><img src="http://localhost:8080/html/images/24x24_bluerightarrow.gif" /></span>
			</div>
		</div>
		<div style="position:absolute; left:33%; top:10px; width:200px; height:80px; border: 1px solid red; padding:.25em;">
			<div style="position:relative; width:100%; height:20px; border:1px dashed red;">
				<span style="position:relative; left:0%;"><img src="http://localhost:8080/html/images/24x24_bluerightarrow.gif" /></span>
			</div>
			<div style="position:relative; width:100%; height:20px; border:1px dashed red;">
				<span style="position:relative; left:35%;"><img src="http://localhost:8080/html/images/24x24_bluerightarrow.gif" /></span>
			</div>
			<div style="position:relative; width:100%; height:20px; border:1px dashed red;">
				<span style="position:relative; left:70%;"><img src="http://localhost:8080/html/images/24x24_bluerightarrow.gif" /></span>
			</div>
		</div>
		<div style="position:absolute; left:67%; top:10px; width:200px; height:80px; border: 1px solid red; padding:.25em;">
			<div style="position:relative; width:100%; height:20px; border:1px dashed red;">
				<span style="position:relative; left:0%;"><img src="http://localhost:8080/html/images/24x24_bluerightarrow.gif" /></span>
			</div>
			<div style="position:relative; width:100%; height:20px; border:1px dashed red;">
				<span style="position:relative; left:35%;"><img src="http://localhost:8080/html/images/24x24_bluerightarrow.gif" /></span>
			</div>
			<div style="position:relative; width:100%; height:20px; border:1px dashed red;">
				<span style="position:relative; left:70%;"><img src="http://localhost:8080/html/images/24x24_bluerightarrow.gif" /></span>
			</div>
		</div>
	</div>

</p>
<hr>
PHP file handling<br />
<p>
<form action="hello.php" method="POST">
<textarea rows="20" cols="20" name="csvstring">

</textarea>
 <!--<input type="hidden" name="comma" value="," />-->
<input type="submit" name="submit1" value="Update" />

</form>
<form action="hello.php?deleteSuccess" method="GET" >
<input type="hidden" name="text" />
<input type="submit" name="submit2" value="Delete" />
</form>
</p>
<p>

<?php
/*
$aFileToAppend='appendme.txt';
$txtSubmit=$_POST['csvstring'];


if ($_GET['submit2']!="Delete")
{
$fp=fopen($aFileToAppend, 'a') or die("can't open file");

fwrite($fp, $txtSubmit);
fclose($fp);
*/
/*************END APPEND FILE **************/
/*
function getText($myFilez="foo")
{

$fpGet = fopen($myFilez,'r');
if (!$fpGet) {echo 'ERROR: Unable to open file.</table></body></html>'; exit;}

while (!feof($fpGet)) {
	$theData = fread($fpGet, 1024);
	$newArray = explode(",",$theData);
	
	
	//$c = array_count_values($newArray);
	//$s = arsort($c);
	
	foreach ($newArray as $key => $val) 
	{
    //echo $key . " " . "(" . $val . ")" . "<br />";
	//echo "<a href=\"http://twitter.com/" . $val . '"' . ">" . $val . "</a><br />";
	
	echo "<a href=' $val '>  $val </a><br />";
}
}
fclose($fpGet);
}

echo "ActioScript/Flex/Flash" . "<br />";
echo getText($myFilez="appendme.txt");
echo "<hr>";
//echo "Twitter_follow_450_iphone_Developers" . "<br />";
//echo appendText($myFilez="Twitter_follow_450_iphone_Developers.txt");
//"<a href=\"http://twitter.com/" . $value . '"' . ">" . $value . "</a>";
}
*/
?>
<?php
/*
function deleteTxtFile()
{
$aFileToAppend='appendme.txt';


$fp=fopen($aFileToAppend, 'w') or die("can't open file");


//$fpread=fopen($aFileToAppend, 1024);
fclose($fp);

}

$deleteMe=$_GET['submit2'];
if ($deleteMe=="Delete")

echo deleteTxtFile();
*/
?>
</p>
<p>
Enter H1 text here!
<form action="hello.php?textToFormatSuccess" method="GET">
<!--<input type="text" name="textToFormat" />-->
<textarea rows="20" cols="20" name="textToFormat"></textarea>
<input type="submit" value="Click to Update" name="SubmTextToFormat"/>
</form>
<?php
/*
function enclose($textToEnclose='some text')
{
//$p=array('<p>','</p>');

$csvSubmit=$_GET['textToFormat'];
$csvParse=explode("^",$csvSubmit);

//$format=parse_str($csvParse[0]);
//$h1=array("<h1>", "</h1>");
//csvParse[0]=array("'<' . $csvParse[0] . '>'", "'</' . $csvParse[0] . '>'");
//print_r($p);

//$textToEnclose='Here is some text to enclose';

return '<' . $csvParse[0] . '>' . $csvParse[1] . '</' . $csvParse[0] . '>';
}

echo enclose($textToEnclose='Here is some MORE text to enclose');
*/
?>


</p>
<p>

<?php
/*
echo htmlentities(enclose($textToEnclose='Here is some MORE text to enclose'));
*/
?>
</p>
<p>
<!--
 <div id="defaultedDiv">
 
 </div>
-->

</p>
<?PHP
$a = '125'; //$a is string
var_dump($a);
echo "<br />";

$a *= 1; //this convert $a to integer
var_dump($a);
echo "<br />";

$a *= 2.7898; //$a is converted to float
var_dump($a);
echo "<br />";

$a .= ''; //now $a is string again
var_dump($a);
echo "<br />";

$a = NULL; //and finally $a is null
var_dump($a);
echo "<br /><br />";
?>
<?php
echo "<strong>Using array/foreach to display:</strong><br />";
/*
$a = '125';
$a *= 1;
$a *= 2.7898;
$a .= '';
$a = NULL;
*/
$b = array(0=>$a = '125',1=>$a *= 1,2=>$a *= 2.7898,3=>$a .= '',4=>$a = NULL);

foreach( $b as $key => $val){
	var_dump($val);
echo "<br />";
}

?>
<br />
<h2>My First Regex</h2>
<p>Checking to ensure that my $zipcode (10607) is within range of zipcodes 106[xx]</p>
<?php

$zipcode='10607';

echo 'Question: Hello, my zipcode is: <strong>' . $zipcode . '</strong>. Is it in range? <br />';

if(preg_match('/^106[0-9]{2}$/', $zipcode))


	echo 'Answer: Yes, your zipcode <strong>' . $zipcode . '</strong> is in range.';

else

	echo 'Answer: Sorry, your zipcode<strong>' .$zipcode .  '</strong> is out of range.';


?>



</body>
</html>
<?php
//session_unset();
//session_destroy();
//ob_end_flush();
?>

<?php

function midTruncate($longString,$strlength)
{
//$longString = 'abcdefghijklmnopqrstuvwxyz0123456789z.jpg';
$separator = '/.../';
$separatorlength = strlen($separator) ;
$maxlength = $strlength - $separatorlength;
$start = $maxlength / 2 ;
$trunc =  strlen($longString) - $maxlength;


echo '<br /><br />';
echo substr_replace($longString, $separator, $start, $trunc);

//prints "abcdefghij/.../56789z.jpg"
}

echo midTruncate('abcdefghijklmnopqrstuvwxyz0123456789z.jpg',25);
?>
<br /><br />
<?php
$text = '<div style="width:300px">Sample sentence from KomunitasWeb, regex has become popular in web programming. Now we learn regex. According to wikipedia, Regular expressions (abbreviated as regex or regexp, with plural forms regexes, regexps, or regexen) are written in a formal language that can be interpreted by a regular expression processor</div>';
 
$text = preg_replace("/\b(regex)\b/i", '<span style="background:#5fc9f6">regex</span>', $text);
 
echo $text;

?>
<br /><br />
<?php

$info = array(array('coffee', 'brown', 'caffeine'),array('water','wet','moist'));

// Listing all the variables
list($item1,$item2) = $info;
echo "<strong>$item1[0]</strong> is <strong>$item1[1]</strong> and <strong>$item1[2]</strong> makes it special.</br>";
echo "<strong>$item2[0]</strong> is <strong>$item2[1]</strong> and <strong>$item2[2]</strong> makes it special.</br>";

?>

<?php
/*
$list = array (
    'aaa,bbb,ccc,dddd',
    '123,456,789',
    '"aaa","bbb"'
);

$fp = fopen('file.csv', 'a');

foreach ($list as $line) {
    fputcsv($fp, split(',', $line));
}

fclose($fp);
*/
?>

<?php
//$row = 1;

/*
$handle = fopen("file.csv", "r");
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
*/

    //$num = count($data);
    //echo "<p> $num fields in line $row: <br /></p>\n";
    //$row++;
    //for ($c=0; $c < $num; $c++) {
      //  echo $data[$c] . "<br />\n";
	  
/*	  
    echo '<strong>'.$data[0].'</strong><br />'
		.$data[1]. '<br />' .$data[2] . '<br />'
		.$data[3] . '<br />';
	}
*/
	
//}


//fclose($handle);
?>
<?php

$r = 0;

$r += 1;



//$s = rand(0,15);

//$t = $r;

//$u .= $r;

//$r += $s;

//$t = $r;

echo '<br />' . $r . '<br />';
//echo '<br />' . $u . '<br />';
//echo '<br />' . $s . '<br />';
//echo '<br />' . $t . '<br />'

?>
<?

echo strtoupper('Block');



?>
<br />
<?php
$old = array('Block', 'inline');
$new = array_map('strtoupper', $old);

print_r($old);
echo '<br />';
print_r($new);
 // $new is now array('BLOCK', 'INLINE');
?>
<br />
<?php
$json ='{"id":1,"name":"foo","interest":["wordpress","php"]} ';  
$obj=json_decode($json); 
echo $obj->interest[1]; //prints php  
?>
<br />
<?php
function create_slug($string){  
    $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);  
    return $slug;  
}  

echo create_slug('does this thing work or not');
?>
<br /><br /><br />
<strong>Print the last 5 items in an array of 10 in reverse order</strong>
<br /><br />
<?php

$states = array("Alabama","Alaska","Connecticut","New Jersey","New York","Pennsylvania","Rhode Island","Tennessee","Utah","Vermont","Wyoming");
$count = count($states);
echo "<ol>";
for ($i=$count - 1;$i>=$count - 5;$i--)
		
		{
			echo "<li>" . $states[$i] . "</li>";
		}

echo "</ol>";
?>

<form action="hello.php" method="POST">
<input type="text" name="firstname" disabled="disabled" value="Foo"/>
<input type="checkbox" name="email[]" value="Bar" />
<input type="checkbox" name="email[]" value="Baz" />
<input type="Submit" />
</form>
<?php

//$testArray = array('firstname'=>'Mike','lastname'=>'Thomas','email'=>'');


//$testArray = array('firstname'=>'Mike','lastname'=>'Thomas','email'=>'');
//$val = array_values($_POST);
//$key = array_keys($_POST);

/*
foreach ($_POST as $key=>$val){

if (!empty($val)){

	echo $key . ' => ' . $val . '<br />';
	
	}
}	
*/

foreach ($_POST['email'] as $key=>$val){

	if (!empty($val)){

		//echo $_POST['email'][0];
		echo $key . ' => ' . $val . '<br />';

	}
}

?>

<h2>PHP templating</h2>
<p>
<?php echo highlight_string('<p>
	<ul>
		<?php	$foo = array(1=>"foo","bar","baz");
				$count = count($foo);
				for ($i=1; $i<=$count; $i++) 
		{?>
			<li class="item<?= $i ?>"><?= $foo[$i] ?></li>
		<?php }?>
	</ul>
</p>', true);
?>
</p>
<p>
	<ul>
		<?php 	$foo = array(1=>'foo','bar','baz');
				$count = count($foo);
				for ($i=1; $i<=$count; $i++) 
		{?>
			<li class="item<?= $i ?>"><?= $foo[$i] ?></li>
		<?php }?>
	</ul>
</p>
<h2>PHP templating 2</h2>
<p>
<?php echo highlight_string('<p>
	<ul>
		<?php	$foo = array(1=>"foo","bar","baz"); 
				$count = count($foo);
				for ($i=1; $i<=$count; $i++): ?>
			<li class="item<?= $i ?>"><?= $foo[$i] ?></li>
		<?php endfor ?>	
	</ul>
</p>', true);
?>
</p>
<p>
	<ul>
		<?php 	$foo = array(1=>'foo','bar','baz'); 
				$count = count($foo);
				for ($i=1; $i<=$count; $i++): ?>
			<li class="item<?= $i ?>"><?= $foo[$i] ?></li>
		<?php endfor ?>	
	</ul>
</p>
<p>
<?php

/*1) __LINE__: This constant is used to indicate the current line number of the file.

2) __DIR__ :  This constant is used to indicate the current directory in which the file is present 

3) __FILE__ : This constant is used to indicate the full path of the file

4) __CLASS__ : Returns the class name 

5) __FUNCTION__ : Returns the function name

6) __METHOD__ : Returns the function name 

7) __NAMESPACE__ : Displays the namespace in which we are working.
*/

function fun_co(){

echo __LINE__."<BR/>";

echo __FILE__."<BR/>";

echo __DIR__."<BR/>";

echo __FUNCTION__."<BR/>";

echo __METHOD__."<BR/>";

}

fun_co();

?>
</p>	
<!--This website features:
	basic HTML Markup
	PHP server-side scripting
	utilizes a linked style sheet which is used to format the elements on the page
	utilizes a linked javascript page that - 
	-->