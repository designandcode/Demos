<?php
/* ../learning/Display JSON Data with jQuery and Ajax _ www.9lessons.pdf */
$table = 'db';
$count = 'count';
$countVal = '4';

echo '
{	"'.$table.'" : { "count" : "4",
				 "records" : {
				 "124" : ["124", "cooldood137", "43.1922532075705,-76.2615720447455"],
				 "345" : ["345", "jillchill9", "45.1922532075705,-78.2615720447455"],
				 "987" : ["987", "bobdabanka", "42.6922532075705,-75.6615720447455"],
				 "654" : ["654", "foobarlounge", "46.1922532075705,-79.2615720447455"],
				 "674" : ["674", "ohai!lolcat", "56.1922532075705,-69.2615720447455"]
				 }
				}
				}
';

?>

