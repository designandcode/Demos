<?php
echo ("foo");
$im = imagegrabscreen();
imagepng($im, "screenshots/myscreenshot.png");
imagedestroy($im);


?>