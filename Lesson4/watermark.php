<?php
header('Content-Type: image/png');

$im = imagecreatefromjpeg('media/img.jpg');

$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);

$text = 'Wyatt Miller is awesome';

$font = 'media/PAPYRUS.TTF';

imagettftext($im, 52, 55, 6, 800, $black, $font, $text);

imagettftext($im, 52, 55, 5, 800, $white, $font, $text);

imagepng($im);

imagedestroy($im);
?>
