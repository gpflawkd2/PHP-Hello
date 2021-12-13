<?php
/**
 * http://docs.php.net/manual/en/book.var.php
 */

$message = 'Hello, world';

/**
 * Type
 */
// Get
gettype($message);
// Set
settype($message, 'int');
//settype($message, 'double');

// Int
is_int(10);
// string
is_string('Hello, world');

// array(배열 체크)
// is_iterable();
is_array([]);


/**
 * Value Check
 */
isset($message);   // -> 1

$message = null;
empty($message);   // -> 1


/**
 * Convert to
 */
// int -> boolean
boolval(0);

// int -> string
strval(10);


/**
 * Print
 */
$var = [
    'message' => 'Hello, world'
];

// for Reading
print_r($var);
// for Debug
var_dump($var);
// for Expresion(php가 인식할 수 있는 형태로 바꾸어줌)
var_export($var);


/**
 * serialize
 * 배열의 직렬화
 */
$serializedArray = serialize($var);
$arr = unserialize($serializedArray);

//var_dump($arr);

/**
 * Free
 * 변수 할당 제거
 */
unset($arr);

/**
 * Get defined...
 * 정의된 변수 Or 상수 정보 확인
 */
// Variables
get_defined_vars();
// Constants
get_defined_constants();


/**
 * Constants
 */
const MESSAGE = 'Hi';
if (defined('MESSAGE')){
    echo constant('MESSAGE');
}

?>