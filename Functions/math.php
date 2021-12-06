<?php
/**
 * 수학관련 함수
 * http://docs.php.net/manual/en/book.math.php
 */

/**
  * Absolute
  * 절대값
  */
abs(-1);


/**
 * Floating Point
 * 소숫점 처리(올림, 내림)
 */

ceil(6.7);  // => 7 (올림)
floor(6.2); // => 6 (내림)
round(6.56, 1); // => 6.6 (반올림)


/**
 * Hex -> dec
 * 16진수 -> 10진수
 */
$bytes = random_bytes(2);

$hex = bin2hex($bytes); //2진수 -> 16진수
echo hexdec($hex);  //16진수 -> 10진수

//$hex = hexdec('F'); // => 15


/**
 * Max, Min
 */
max(range(1,5));   // => 5 
min([1,2,3,4,5]);  // => 1

/**
 * a^b
 */

 // 2의 4승
2 ** 4;    // => 16
pow(2, 4); // => 16


/**
 * Create a random int
 */
rand(0, 10);


/**
 * Square root
 * 제곱근
 */
echo sqrt(16); // => 4
?>