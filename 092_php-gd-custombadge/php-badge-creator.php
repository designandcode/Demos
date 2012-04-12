<?php
$im = imagecreatefrompng('images/dummy.png');
//$im = imagecreatetruecolor(500, 500);
//imagepng($im, "images/dummy.png");

//echo imagesx($im) . ' x ' . imagesy($im);

//$background = imagecolorallocatealpha($im, 0xFF, 0x00, 0x00, 127);
/*
$red = imagecolorallocate($im, 0xFF, 0x00, 0x00);
$white=imagecolorallocate($im, 255,255,255);
$black = imagecolorallocate($im, 0x00, 0x00, 0x00);
$teal=imagecolorallocate($im,21,127,255);
*/
//$black = imagecolorallocatealpha($im, 0x00, 0x00, 0x00, 127);

// Make the background transparent
//imagefilledrectangle($im, 0, 0, 500, 40, $white);
//imagecolortransparent($im, $white);

Header ('Content-type: image/png');
imagepng($im);
imagedestroy($im); 
?>

