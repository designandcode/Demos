<?php

/* Define sitewide constants */

/* Base Directory */
$split = explode('/', __DIR__);
$basedir = '/';
for($i=1;$i<4;$i++){
	$basedir .= $split[$i] . '/';
}

define ("BASE_DIR", $basedir);
//define("BASE_DIR", "");  //Override if necessary

/* Database */
//define ("DB_NAME", "dbname");


/* Upload Directory */



/* Base URL */


?>