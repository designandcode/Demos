<?php 

$parts = preg_split('/helpers/', __FILE__);




foreach(glob($parts[0].'functions\*.php') as $function){
	include($function);
}



?>