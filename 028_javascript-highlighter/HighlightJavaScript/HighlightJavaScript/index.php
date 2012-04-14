<?php include_once('format_javascript.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Highlighting Code with PHP</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
</head>

<body>

	<div id="page-wrap">

		<h1>Highlighting</h1>
		
		<h2>PHP Highlighting</h2>
		
		<p>
		      <?php highlight_string('<?php 
  $i = 1; 
  
  function rockOut() {
      alert("wah wah wah");
  }
?>'); ?>
		</p>
		
		<h2>JavaScript Highlighting</h2>
		
		<?php
		    $data = "        if (true) {
   echo 'The value is true';
} else {
   echo 'The value is false';
}"; // $data is a string of JS code, which could have originated from a file using file_get_contents();
            
            echo format_javascript($data);
            
            $testBigJS = file_get_contents('js/css-tricks.js');
            
            echo "<h2>Bigger File, grabbed with file_get_contents</h2>";
            
            echo format_javascript($testBigJS);
            
        ?>
	
	</div>
	
</body>

</html>