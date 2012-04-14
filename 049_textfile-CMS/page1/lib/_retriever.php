<?php



function getTxt($file){
$myFile = "txt/" . $file . ".txt";

if (file_exists($myFile)){
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;
}

else{

$fh = fopen($myFile, 'w');
fwrite($fh, "default");
}
//if (!$fh) { echo "no file here"; }

}

?>