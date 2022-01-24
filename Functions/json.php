<?php
/**
 * http://docs.php.net/manual/en/book.json.php
 * JavaScript Object Notation
 */

/**
 * JSON Encode/Decode
 */
$jsonEncoded = json_encode([
    'message' => 'Hello, world'
]);

var_dump(json_decode($jsonEncoded, true));

//Restful 환경에서 빈번하게 사용됨
echo $jsonEncoded;

?>