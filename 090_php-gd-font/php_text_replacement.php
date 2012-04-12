<?php
//refer to http://www.php.net/manual/en/function.imagefttext.php
 // Create a 300x100 image
$textToDisplay=$_GET['text'];
//$textToDisplay='Top Electronics Deals';

//$textToDisplay='skidoosh';
//$im = imagecreatetruecolor($width, $height);
$im = imagecreatetruecolor(500, 40);
//$background = imagecolorallocatealpha($im, 0xFF, 0x00, 0x00, 127);
$red = imagecolorallocate($im, 0xFF, 0x00, 0x00);
$white=imagecolorallocate($im, 255,255,255);
$black = imagecolorallocate($im, 0x00, 0x00, 0x00);
$teal=imagecolorallocate($im,21,127,255);
//$black = imagecolorallocatealpha($im, 0x00, 0x00, 0x00, 127);

// Make the background transparent
imagefilledrectangle($im, 0, 0, 500, 40, $white);
imagecolortransparent($im, $white);
//imagefilledrectangle($im, 0, 0, 299, 99, $background);

// Make the background red
//imagefilledrectangle($im, 0, 0, 500, 40, $white);

// Path to our ttf font file
//$font_file = './Cheapmot.TTF';
//$font_file = './FFFFORWA.TTF';
//$font_file = './NEUROPOL.TTF';
//$font_file = './Yahoo.TTF';
$font_file='./' . $_GET['font'] . '.TTF';

// Draw the text 'PHP Manual' using font size 13
//imagefttext($im, 13, 0, 105, 55, $black, $font_file, 'PHP Manual');

//Draw the text in url string http://localhost:8080/php/php_text_replacement.php?text=Skidoosh
//where $_GET['text'] = Skidoosh (or whatever is called)



imagefttext($im, 23, 0, 0, 30, $teal, $font_file, $textToDisplay);
//imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )
// Output image to the browser
header('Content-Type: image/png');

imagepng($im);
imagedestroy($im); 
/***********************************************/  
/*
header("Content-type: image/png");

$string = "This is my test string.";

$font=imageloadfont('Cheapmot.TTF');
//$font  = 4;
$width  = imagefontwidth($font) * strlen($string);
$height = imagefontheight($font);

$image = imagecreatetruecolor ($width,$height);
$white = imagecolorallocate ($image,255,255,255);
$black = imagecolorallocate ($image,0,0,0);
imagefill($image,0,0,$white);

imagestring ($image,$font,0,0,$string,$black);

imagepng ($image);
imagedestroy($image);
*/
/**********************************************/
/*
Parameters

image 

An image resource, returned by one of the image creation functions, such as imagecreatetruecolor().
font 

Can be 1, 2, 3, 4, 5 for built-in fonts in latin2 encoding (where higher numbers corresponding to larger fonts) or any of your own font identifiers registered with imageloadfont(). 
x 

x-coordinate of the upper left corner. 
y 

y-coordinate of the upper left corner. 
string 

The string to be written. 
color 

A color identifier created with imagecolorallocate().
*/
?>
