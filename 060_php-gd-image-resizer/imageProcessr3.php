<?php
// The file
$filename = 'images/srcFerrari-612-Scaglietti-004';
//$percent = 0.7;
$thumb_max = 300;


// Get new dimensions
list($width, $height) = getimagesize($filename . '.jpg');
$ratio = $width / $height;	//$one = (float) 1; //echo is_float($one); //echo is_int(1); //echo is_float($ratio); 
if ($ratio >= (float) 1) {
	$new_width = $thumb_max;	//echo $new_width;
	$new_height = $thumb_max / $ratio;
} elseif ($ratio < (float) 1) {
	$new_width = $thumb_max * $ratio;
	$new_height = $thumb_max;
}

// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename . '.jpg');
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Output
imagejpeg($image_p, $filename . '_thumb.jpg');
imagedestroy($image_p);
?>




