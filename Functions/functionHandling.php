<?php
/**
 * http://docs.php.net/manual/en/book.funchand.php
 */

// function overriding
 function foo(){
    /**
     * Get Params number
     */
    $argCount = func_num_args();

    switch($argCount){
        case 1:
            echo func_get_arg(0);
            break;
        default:
            var_dump(func_num_args());
    }
 }

exit;

/**
 * Call
 * call_user_func(함수명, param, param)
 */
//foo();
call_user_func('foo', 'Hello, world', 10);


/**
 * Call function when existing script
 * register_shutdown_function(): php 스크립트가 끝났을 때 호출되는 함수
 */
register_shutdown_function(function (){
    echo 'Exit';
});


/**
 * Check function exist
 */
var_dump(function_exists('foo'));


/**
 * Get defined functions
 * 정의된 함수 확인
 */
var_dump(get_defined_functions());
?>