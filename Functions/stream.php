<?php
/**
 * http://docs.php.net/manual/en/book.stream.php
 * 
 * file handling, cUrl handling => Stream에 해당
 */

/**
 * Stream Context
 * 
 * http://docs.php.net/manual/en/context.php
 */

 $context = stream_context_create();

stream_context_set_option($context, [
    'http' => [
        'method' => 'GET',
    ]
]);

file_get_contents('http://localhost:81', false, $context);

/**
 * Stream Filter
 */

 stream_get_filters();
// array(8) { [0]=> string(15) "convert.iconv.*" [1]=> string(12) "string.rot13" [2]=> string(14) "string.toupper" [3]=> string(14) "string.tolower" [4]=> string(9) "convert.*" [5]=> string(8) "consumed" [6]=> string(7) "dechunk" [7]=> string(6) "zlib.*" } 

$fh = fopen(dirname(__DIR__, 1).'/README.md', 'r');

stream_filter_append($fh, 'string.toupper');

stream_get_contents($fh);

/**
 * Stream Wrappers
 * 
 * http://docs.php.net/manual/en/wrappers.php
 */

stream_get_wrappers();
// array(11) { [0]=> string(3) "php" [1]=> string(4) "file" [2]=> string(4) "glob" [3]=> string(4) "data" [4]=> string(4) "http" [5]=> string(3) "ftp" [6]=> string(3) "zip" [7]=> string(13) "compress.zlib" [8]=> string(5) "https" [9]=> string(4) "ftps" [10]=> string(4) "phar" }

$fh = fopen('php://output', 'w');

fwrite($fh, 'Hello, world');

//file_put_contents('php://output', 'Hello, world');

?>