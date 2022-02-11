<?php

/**
 * File handling
 */

// file path
$path = dirname(__DIR__, 1).'/README.md';   // -> D:\GitHub\PHP-Hello/README.md
// file handler
$fh = fopen($path, 'r');    //r: reading, r+: reading/writing, w: writing


/**
 * File Reading
 */

// Case 1. functions
// -> string
file_get_contents($path);
// -> array
file($path);
// -> output stream
readfile($path);

// -> output stream(parameter에 $fh 리소스를 전달)
fpassthru($fh);

// -> string
// filesize() : 해당파일의 length 확인가능
fread($fh, filesize($path));

// Case 2. with Loop
while (($line = fgets($fh)) && !feof($fh)) {
    var_dump($line);
}


/**
 * File pointer
 */

// Set(포인터 위치 0으로 지정)
fseek($fh, 0, SEEK_SET);
// GET(포인터 위치 출력)
ftell($fh);    // -> 0
// is ended: 파일의 끝인지 체크
feof($fh);    // -> true/false
// Reset(파일 포인터 초기화)
rewind($fh);


/**
 * File Writing
 */

$path = '../file/writeme2.txt';
$fh = fopen($path, 'a');    //덮어쓰기도 가능

// Case 1. file_put_contents
file_put_contents($path, 'file writing test');

// Case 2. file handler
rewind($fh);
// -> output stream
fwrite($fh, 'Hello');
// -> output stream(force)
fflush($fh);


/**
 * File slice
 * 원본이 변경되므로 사용시 주의
 */

$fh = fopen($path, 'r+');

ftruncate($fh, rand(1, filesize($path)));


/**
 * File handler close
 */

fclose($fh);

?>