<?php
/*
include: 존재하지 않는 파일 로드시 warning 발생
require: 존재하지 않는 파일 로드시 fatal error 발생(엄격)
~_once: 단 한번만 로드
*/
require 'greeting_en.php';
require_once 'greeting_en.php';
echo welcome();
?>