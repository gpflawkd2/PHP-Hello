<?php
/**
 * http://docs.php.net/manual/en/book.filesystem.php
 */

/**
 * from Path
 */

__FILE__;  //-> D:\GitHub\PHP-Hello\Functions\filesystem.php

// 경로의 마지막 구문을 출력
basename(__FILE__);    //-> filesystem.php

// 현재 파일의 상위 디렉터리 출력(*)
dirname(__FILE__, 2);  // -> D:\GitHub\PHP-Hello

// 현재 파일의 디렉터리 출력(*)
dirname(__FILE__);  // -> D:\GitHub\PHP-Hello\Functions


/**
 * to Absolute Path
 * 절대경로
 */

 //.(점): 현재 디렉터리를 가리킴
realpath('.'); // -> D:\GitHub\PHP-Hello\Functions


/**
 * Get path info
 * 많이 사용함
 */

pathinfo(__DIR__);
//array(3) { ["dirname"]=> string(19) "D:\GitHub\PHP-Hello" ["basename"]=> string(9) "Functions" ["filename"]=> string(9) "Functions" } 

pathinfo(__File__);   //파일 확장자 포함
//array(4) { ["dirname"]=> string(29) "D:\GitHub\PHP-Hello\Functions" ["basename"]=> string(14) "filesystem.php" ["extension"]=> string(3) "php" ["filename"]=> string(10) "filesystem" }


/**
 * Find Files
 */

// * 와일드카드 -> *.php -> 파일이름에 상관없이 .php 해당하는 파일을 모두 검색함
glob('./*.php');  // -> 해당폴더의 확장자가 .php 인 파일을 모두 검색


/**
 * File name check
 * fnmatch(): 매칭되는 파일명을 검색
 */

var_dump(fnmatch('*.php', 'filesystem.php'));


/**
 * File(Directory) Control
 */

// Copy
copy('../file/writeme.txt','../file/writeme2.txt');

// Make a directory
mkdir('./test');

// Remove a file
unlink('../file/writeme2.txt');

// Remove a directory
rmdir('./test');

?>