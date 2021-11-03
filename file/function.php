<?php

/*
copy($file, $newfile): 파일 복사
file_get_contents($file): 파일 읽어오기
file_put_contents($file): 파일 생성
fopen("c:\\folder\\resource.txt", "r"): 파일 열기 (https://www.php.net/manual/en/function.fopen.php)
fread(fopen("c:\\folder\\resource.txt", "r"), filesize($file)): 파일 읽기 (https://www.php.net/manual/en/function.fread.php)
is_readable($file): 읽기 권한 체크
is_writable($file): 쓰기 권한 체크
file_exists($file): 존재 여부 체크
*/

$file = './writeme.txt';

//echo file_get_contents($file);

//file_put_contents($file, 'coding everybody');

//네트워크 상의 파일 접근
//$homepage = file_get_contents('https://deardeer.kr/benefit');
$homepage = file_get_contents('http://php.net/manual/en/function.file-get-contents.php');
//echo $homepage;

?>