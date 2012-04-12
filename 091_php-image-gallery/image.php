<?php


$image =  $_GET['filename'];
$size = $_GET['size'];

echo "<img src=$image />";

echo "<br /><br /><a href=\"index.php?size=$size\">&lsaquo;&lsaquo;&nbsp;Back to Gallery</a>";

?>