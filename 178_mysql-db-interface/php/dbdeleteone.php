<?php include_once('helpers/functions.php'); ?>
<?php

extract($_POST);


$record = array('book_id' => $book_id);
//$values = array('title' => $title,'author' => $author,'price' => $price);

$db = new Model('shop', 'books');

$db->deleteOne($record);

header("Location: ../dbdelete.php");

?>