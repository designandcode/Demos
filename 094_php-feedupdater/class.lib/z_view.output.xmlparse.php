
<?php $xml=simplexml_load_file('data.store.xml'); 

$count = count($xml);
?>



<?php foreach ($xml->xpath("/base/section[position()< $count]") as $section)


	{
	echo
	
	
	$section->title1 . '<br />' . $section->title2 . '<br />' . $section->thumbnail1 . '<br /><br />';
	
	}



 ?>

