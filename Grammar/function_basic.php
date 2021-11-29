<?php

/**
 * Define Function
 */
function foo(){
    echo "Hello World";
}

foo();  // -> Hello, world
echo '<br />';


/**
 * Variables Function
 */
$fn = 'foo';
$fn();  // -> Hello, world


/**
 * Define Function with Parameters
 */

//Parameters 자료형을 지정할 수 있음
 function foo1(string $arg1){
    echo $arg1;
 }

 foo1('Hello World');
 echo '<br />';


/**
 * Default Parameter(기본값)
 */
function get_argumentss($arg=100){
    return $arg;
}
echo get_argumentss(1);
echo ',';
echo get_argumentss();
echo '<br />';


/**
 * Define Function with Rest Parameters
 */
function foo3(...$args){
    var_dump($args);    //배열
}

foo3('Hello World', 'Whho Are You?', 'Bye');
echo '<br />';


/**
 * Call Function with with Spread
 */
function foo4($arg1, $arg2, $arg3){
    var_dump($arg1, $arg2, $arg3);
}

$args = ['Hello, world', 'Who are you?', 'Bye'];

foo4(...$args);
echo '<br />';


/**
 * return value
 */
function hi(){
    return 'Hello, world';
}

echo hi();  // -> Hello, world
echo '<br />';

/**
 * return with context
 */
function hi2($is){
    if($is){
        return 'Hello, world';
    }
    return 'Bye';
}

echo hi2(true);
echo '<br />';


/**
 * return variables
 */
function foo5($arg){
    return $arg;
}

foo5('Hello, world');
echo '<br />';
?>