<?php

/**
 * http://docs.php.net/manual/en/book.filter.php
 * 데이터 유효성 검증
 */

/**
 * Filter
 * filter_var(): 일치하면 해당 데이터가 노출됨
 */
 $message = filter_var(10, FILTER_SANITIZE_STRING);
 $message = filter_var('Hello, world', FILTER_SANITIZE_STRING);
 $message = filter_var('test@naver.com', FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL);

filter_var('Hello, world', FILTER_CALLBACK, [
     'options' => function($value){
         return $value;
         //return 1;
     }
]);

/**
 * Fix
 */
filter_var('<html><head></haad></html>', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

/**
 * Has
 * 해당 파라미터가 있는지 확인
 */
filter_has_var(INPUT_SERVER, 'REMOTE_ADDR');

/**
 * Request
 * $_POST, $_GET, $_COOKIE, $_SESSION, $_SERVER, $_REQUEST 해당
 */

filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_VALIDATE_IP);



if(array_key_exists('REMOTE_ADDR', $_SERVER)){
    filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP);
}

//보안과 관련있으므로 filter_input()을 사용하여 데이터를 받도록 하자
//$comment = $_GET['message'];
$comment = filter_input(INPUT_GET, 'message', FILTER_SANITIZE_STRING);


?>