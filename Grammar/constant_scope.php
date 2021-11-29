<?php
/**
 * Constant Scope
 */
// 함수 내부에서는 const 키워드를 사용할 수 없음
function foo(){
    define('MESSAGE', 'Hello world');
}

foo();

//echo MESSAGE;   // -> Hello, world


/**
 * Callbacks (Don't need 'use')
 */
$foo = function(){
    return MESSAGE;
};

echo $foo();

?>