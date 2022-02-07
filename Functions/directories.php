<?php
/**
 * http://docs.php.net/manual/en/book.dir.php
 */

/**
 * Change a directory
 * 현재 디렉터리를 바꿈
 */

chdir(__DIR__); //현재 디렉터리


/**
 * Get current working directory
 */
getcwd();


/**
 * Reading a directory
 * 많이 사용됨
 */
$files = scandir(__DIR__.'/..');    //상위 폴더의 디렉터리 조회

//var_dump($files);


/**
 * Directory Handling
 */

//Open
$dir = opendir(__DIR__.'/..');

//Read
while ($name=readdir($dir)){
    var_dump($name);
}

//Reset(커서 초기화)
rewinddir($dir);

//Close
closedir($dir);
?>