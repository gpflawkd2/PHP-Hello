<?php

/**
 * String Types
 * 
 * http://docs.php.net/manual/en/language.types.php
 */

//echo "Hello, world";
//echo 'Hello, world';
//var_dump(1234);
//var_dump("1234");

echo "Hello"." "."world";   //문자와 문자결합시 .을 사용함

/**
 * Type Casting
 */

(string)10;     //->"10"
(string)true;   //->"1"
(string)false;  //->""
(string)1.234;  //->"1.234"

echo '그는 "안녕하세요" 라고 말했다.\n';
echo "그는 \"안녕하세요\" 라고 말했다.";    //escaping

?>