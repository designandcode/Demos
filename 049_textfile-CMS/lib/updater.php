<?php





function setTxt(){

$file = $_GET['file'];
$page = $_GET['page'];

if ($page == "index"){
//$myFile = "../txt/firstContent.txt";
$myFile = "../txt/" . $file . ".txt";
$fh = fopen($myFile, 'w');
}else{
$myFile = "../" . $page . "/txt/" . $file . ".txt";
$fh = fopen($myFile, 'w');
}

$newText = $_GET['newText'];

fwrite($fh, $newText);
fclose($fh);

header('Location: http://localhost:8080/apache_upload/z_demos/049_textfile-CMS/index-editor.php');
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