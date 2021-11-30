<?php
/**
 * 같은 폴더내에 있어야함
 * include: 존재하지 않는 파일 로드시 warning 발생
 * require: 존재하지 않는 파일 로드시 fatal error 발생(엄격)
 * ~_once: 단 한번만 로드
 */

//require 'greeting_en.php';
//require_once 'greeting_en.php';

//echo welcome();

/**
 * Return
 */

$args = include 'greeting_en.php';

var_dump($args);

?>