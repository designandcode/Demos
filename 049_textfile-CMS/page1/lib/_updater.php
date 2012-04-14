<?php





function setTxt(){

$file = $_GET['file'];

//$myFile = "../txt/firstContent.txt";
$myFile = "../txt/" . $file . ".txt";
$fh = fopen($myFile, 'w');

$newText = $_GET['newText'];

fwrite($fh, $newText);
fclose($fh);

//header('Location: index-editor.php');
}

setTxt();

?>



<!--
$myFile = "testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "Floppy Jalopy\n";
fwrite($fh, $stringData);
$stringData = "Pointy Pinto\n";
fwrite($fh, $stringData);
fclose($fh);
-->