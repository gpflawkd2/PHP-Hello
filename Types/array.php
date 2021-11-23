<?php

/**
 * Define Array
 * https://www.php.net/manual/en/ref.array.php
 */

//php 5.4 이전 버전에서는 아래와 같이 사용해야함
//$messages = array('Hello,world', 'Who are you?', 'Bye');

$messages = [
    'Hello,world',
    'Who are you?',
    'Bye'
];

//echo $messages[0].'<br />';
//echo $messages[1].'<br />';

/**
 * Define Array with key(index)
 */

$messages = [
    0 => 'Hello,world',
    'message' => 'Who are you?',
    'Bye'
];

 /**
 * Destructuring(할당)
 */

list($message) = $messages;
//var_dump($message);

//,첫번째 값은 생략하겠다는 의미
[,$message] = $messages;
//list(,$message) = $messages;

//key값으로 지정
//[0 => $message] = $messages;
['message' => $message] = $messages;

var_dump($message);


/**
 * Spread Operator in Array Expression(배열합치기)
 * https://wiki.php.net/rfc/spread_operator_for_array
 * 
 * PHP 7.4 <
 */

$messages = [
    'Hello, world'
];

//$messages = [
//    'Hello,world',
//    'Who are you?',
//    'Bye'
//];

$messages = [
    ...$messages,
    'Who are you',
    'Bye'
];
?>