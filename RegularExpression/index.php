<?php

/*
정규표현식
*/

//괄호안에 모든 문자열 검색: \(.+\)

/*
pattern modifier(https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php)
 - i: 패턴 매칭을 할 때 대소문자를 구분하지 않도록 함
 - m: multi line mode (모든 행의 데이터를 검색)
*/

// /php/i -> /는 구분자, php는 검색어, i는 pattern modifier
if(preg_match("/php/i", "PHP is the web scripting language of choice.")){
    echo "A match was found.";
} else {
    echo "A match was not found.";
}

?> 