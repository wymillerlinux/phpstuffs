<?php
$width = 75;
$height = 30;

$image = imagecreate($width, $height);
$md5 = md5(rand(0,999));

$pass = substr($md5, 10, 5);

$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);
$grey = imagecolorallocate($image, 204, 204, 204);

imagefill($image, 0, 0, $white);

imagestring($image, 10, 20, 8, $pass, $black);

imagerectangle($image,0,0,$width-1,$height-1,$grey);
imageline($image, 0, $height/4, $width, $height/4, $grey);
imageline($image, $width/4, 0, $width/4, $height, $grey);
imageline($image, 0, $height/2, $width, $height/2, $grey);
imageline($image, $width/2, 0, $width/2, $height, $grey);

header("Content-Type: image/jpeg");

imageJpeg($image);
imagedestroy($image);
?>
