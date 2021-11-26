<?php
/**
 * Arthemetic Operators
 * 산술 연산자
 * +, -, /, *, %(나머지 연산자)
 */

 4%3;   // -> 1

 // **: 거듭제곱
 2 ** 4; // -> 16


//---------------------------------------------------------------------------------
/**
 * Incrementing/Decrementing Operators
 */

$count = 0;

// 후위증감연산자
echo $count++;

// 전위증감연산자
echo ++$count;

//---------------------------------------------------------------------------------
/**
 * Assignment Operators
 * 할당 연산자
 * =, +=, -=, /=, *=, **=, &=, !=, ^=, <<==, >>==, .=
 */

$counts = 0;
//$counts = $counts + 1;
echo $counts += 1;  // -> 1

$message = 'Hello';

//문자열 결합
$message .= 'world';

echo $message;  // -> Hello, world

?>