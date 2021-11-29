<?php
/**
 * First class Function
 * 일급 객체 함수
 */

//익명함수
$foo = function(){
    return 'Hello, world';
};

echo $foo();
echo '<br />';

function foo1($callback){
    echo $callback();
}

foo1(
    function (){
        return 'Hello, world';
    }
);
echo '<br />';


/**
 * Higher-order Function
 * 고차함수
 * 함수를 다루는 함수 -> 함수형 프로그래밍
 */
function foo2(){
    return function (){
        return 'Hello, world';
    };
}

$func = foo2();
echo $func();

/**
 * Arrow Functions
 * https://wiki.php.net/rfc/arrow_functions_v2
 * 
 * PHP 7.4 <=
 */

$message = 'Hello, world';

function foo3($callback){
    echo $callback();
}

// case 1
// foo3(function () use ($message){
//     return $message;
// });

//foo3(fn() => $message);

// case 2
$fn = function($var){
    return 'Hello, world';
};

$fn = fn($var) => 'Hello, world';   //Multi Line은 지원하지 않음

?>