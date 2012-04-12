<?php
$canvas = imagecreatetruecolor(304,179);
//$red = imagecolorallocate($canvas, 0xFF, 0x00, 0x00);
$white=imagecolorallocate($canvas, 255,255,255);
//$black = imagecolorallocate($canvas, 0x00, 0x00, 0x00);
//$teal=imagecolorallocate($canvas,21,127,255);

// Make the background transparent
//imagefilledrectangle($canvas, 0, 0, 304, 179, $white);
//imagecolortransparent($canvas, $white);


$icon1 = imagecreatefrompng('images/milky (11).png');
$icon2 = imagecreatefrompng('images/milky (12).png');
$icon3 = imagecreatefrompng('images/milky (13).png');
$icon4 = imagecreatefrompng('images/milky (14).png');
$icon5 = imagecreatefrompng('images/milky (15).png');
$icon6 = imagecreatefrompng('images/milky (16).png');

imagecopy($canvas, $icon1, 275, 102, 0, 0, 100, 100);
imagecopy($canvas, $icon2, 0, 120, 0, 0, 100, 100);

Header ('Content-type: image/png');
imagepng($canvas);
imagedestroy($canvas); 
?>

