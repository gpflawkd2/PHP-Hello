<?php
/**
 * Log Level
 */
error_reporting(E_ALL & ~E_NOTICE);

/**
 * Send Error 
 * https://www.php.net/manual/en/function.error-log.php
 */
//file 로 로그 저장
 error_log('Hello world', 3, '../Logs/log.log');

 /**
 * Backtrace
 */
function foo(){
    //debug_print_backtrace();  //호출한 페이지 URL
    var_dump(debug_backtrace());
}

//foo();

 /**
 * Error Handling
 * https://www.php.net/manual/en/errorfunc.constants.php
 */
// Set
set_error_handler(function ($errno, $errstr){
    //$errno : 에러번호
    switch($errno){
        case E_USER_ERROR;
            var_dump($errstr);
            break;
    }
});

//Reset
//restore_error_handler();

 /**
 * Trigger Custom Error
 * 에러 메시지와 에러 타입 전송
 */
trigger_error('Hello, world', E_USER_ERROR);
//trigger_error('Hello, world', E_USER_WARNING);

?>