<?php
/**
 * http://docs.php.net/manual/en/book.url.php
 */

/**
 * base64 Encode/Decode
 */
//Encode
$base64Encoded = base64_encode('Hello, world');
//Decode
base64_decode($base64Encoded);


/**
 * (as Http client) Get Headers
 * header 정보를 얻어옴
 * PHP가 Client로서 동작함
 */
get_headers('http://example.com');


/**
 * (as Http client) Get meta tags
 * meta 정보를 얻어옴
 * PHP가 Client로서 동작함
 */
get_meta_tags('http://example.com');


/**
 * Build a query string
 */

 //http_build_query(많이 사용함)
$queryString = http_build_query([
     'lang' => 'php',
     'message' => 'Hello, world'
 ]);


/**
 * parse URL
 */
parse_url('http://example.com');  //array(2) { ["scheme"]=> string(4) "http" ["host"]=> string(11) "example.com" }

parse_url('http://example.com?'.$queryString);
//array(3) { ["scheme"]=> string(4) "http" ["host"]=> string(11) "example.com" ["query"]=> string(31) "lang=php&message=Hello%2C+world" }

/**
 * URL Encode/Decode
 */

//Encode
$urlEncoded = urlencode('안녕하세요');
//Decode
echo urldecode($urlEncoded);

 ?>