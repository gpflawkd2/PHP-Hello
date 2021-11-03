<?php
/*
scandir(): 디렉토리 검색
*/
$dir    = './'; //현재 디렉토리
$files1 = scandir($dir);
$files2 = scandir($dir, 1); //두번째인자 -> 1: 역순으로 정렬
 
print_r($files1);
print_r($files2);

?>