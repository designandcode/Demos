<?php
	
	include_once('helpers/functions.php');
	
	$db = new Model("shop", "books" );
	
	if($_POST){
		$db->createOne($_POST);
	} elseif($_GET){
		$db->createOne($_GET);
	} else{
		$db->createOne($values);
	}
	
	
	header("Location: " . $_SERVER['HTTP_REFERER']);

?>