<?php
header("Content-type: image/png");  //헤더정보는 가장 먼저 나와야함
$string = $_GET['text'];
$im     = imagecreatefrompng("button.png"); //image에 대한 식별자
$blue   = imagecolorallocate($im, 60, 87, 156);     //이미지색상할당(RGB값 인자로 전달)

// imagesx() : 캔버스의 폭
$x      = (imagesx($im) - 7.5 * strlen($string)) / 2;

imagestring($im, 4, $x, 9, $string, $blue);  //(image 식별자, font, X축 좌표, Y축 좌표, 입력내용, 색상 식별자)
imagepng($im);  //png 이미지 전송
imagedestroy($im); //이미지 자원 해제
?>