<?php
// Load the stamp and the photo to apply the watermark to
$stamp = imagecreatefrompng('text.png');
$im = imagecreatefrompng('original.png');
 
// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);  //폭
$sy = imagesy($stamp);  //길이
 
// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
//(기존 이미지 식별자,복사할 이미지 식별자, 복제할 이미지가 위치할 X축 좌표, 복제할 이미지가 위치할 Y축 좌표, 복제할 이미지 X축 좌표, 복제할 이미지 Y축 좌표, 복제할 이미지 끝점 X축 좌표, 복제할 이미지 끝점 Y축 좌표)
 
// Output and free memory
header('Content-type: image/png');
imagepng($im);  //png 이미지 전송
imagedestroy($im);
?>