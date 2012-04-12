<?php
// The file
$filename = 'images/srcFerrari-612-Scaglietti-001';
//$percent = 0.7;
$thumb = 150;


// Get new dimensions
list($width, $height) = getimagesize($filename . '.jpg');
$new_width = $thumb;
$new_height = $thumb;

// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename . '.jpg');
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Output
imagejpeg($image_p, $filename . '_thumb.jpg');
imagedestroy($image_p);
?>




