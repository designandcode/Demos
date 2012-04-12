<?php
function updater($one,$two,$three)
{
$list = array (
    "$one,$two,$three"
);

$fp = fopen("data.store.csv", 'a');

foreach ($list as $line) {
    fputcsv($fp, split(',', $line));
}

fclose($fp);
}
?>
<?php

echo updater($_GET['input1'],$_GET['input2'],$_GET['input3']);

?>

<?php include ("lib.inc.csvtoxml.php"); ?>