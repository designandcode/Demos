<?php

$title = $_POST['title'];
$link = $_POST['link'];
$guid = $_POST['guid'];
$pubDate = $_POST['pubDate'];
$description = htmlentities($_POST['description']);
?>

<?php
function updater($one,$two,$three,$four,$five)
{
$list = array (
    "$one,$two,$three,$four,$five"
);

$fp = fopen("class.lib/data.store.csv", 'a');

foreach ($list as $line) {
    fputcsv($fp, split(',', $line));
}

fclose($fp);
}
?>
<?php

echo updater($title,$link,$guid,$pubDate,$description);

?>
<?php include ("class.lib/lib.inc.csvtoxml.php"); ?>