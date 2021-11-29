<?php
/**
 * Access Global Variables
 * 전역 변수 접근
 */
$message = 'Hello, world';

function foo(){
    //global $mesage;
    $GLOBALS['message'] = 'Who are you?';
    //$message = 'Who are you?';

    //echo $mesage;
}

foo();
echo $message;

/**
 * Static Variables
 * 정적 변수
 */
function foo2(){
    static $count = 0;
    return ++$count;
}

echo foo2();
echo foo2();


/**
 * Closure
 */

function foo3($arg){
    //use를 써주어야 전역변수에 접근 가능함
    return function() use($arg){
        return $GLOBALS['message'];
        //return $arg;
    };
}

$func = foo3('Hello, world');
echo $func();

?>