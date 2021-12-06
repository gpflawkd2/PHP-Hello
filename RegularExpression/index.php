<?php

/**
 * 정규표현식
 * http://docs.php.net/manual/en/book.pcre.php
 */

//괄호안에 모든 문자열 검색: \(.+\)

/*
pattern modifier(https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php)
 - i: 패턴 매칭을 할 때 대소문자를 구분하지 않도록 함
 - m: multi line mode (모든 행의 데이터를 검색)
*/

// /php/i -> /는 구분자, php는 검색어, i는 pattern modifier
if(preg_match("/php/i", "PHP is the web scripting language of choice.")){
    //echo "A match was found.";
} else {
    //echo "A match was not found.";
}

//======================================================================================
/**
 * String Match (Regex)
 * 
 * Case 1. preg_match
 */

 preg_match('/^(https?\:)\/\/(.*)(\..*)$/','http://example.com',$matches);
 //var_dump($matches);


/**
 * Case 2. preg_match_all
 */

$html = <<<'HTML'
<section>
    <h1>Lorem Ipsum</h1>
    <article>
        <h2>What is Lorem Ipsum?</h2>
    </article> 
</section>
HTML;

// //1: 역참조 -> 첫번째 그룹에 있는 문자열 조건이 그대로 들어오게 됨
preg_match_all('/<(h[1-6])>(.*)<\/\\1>/', $html, $matches);

//var_dump($matches);


/**
 * Replace
 */

//$1: 첫번째 그룹, $2: 두번째 그룹
//preg_replace('/^(.*)@(.*)$/','http://$2?user=$1', 'pronist@naver.com');    // => http://naver.com?user=pronist

//preg_replace() 함수와 동일하게 동작함
preg_filter('/^(.*)@(.*)$/','http://$2?user=$1', 'pronist@naver.com');

echo preg_replace_callback(
    '/^(.*)@(.*)$/',
    function ($matches){
        //var_dump($matches);   // => array(3) { [0]=> string(17) "pronist@naver.com" [1]=> string(7) "pronist" [2]=> string(9) "naver.com" }
        //,의 의미: 첫번째 배열값은 생략
        [, $username, $domain] = $matches;
        return 'http://'.$domain.'?user='.$username; 
    },
    'pronist@naver.com'
);


/**
 * Filter
 */
var_dump(preg_grep('/^(.*)@(.*)$/',[
    'php://stdout',
    'pronist@naver.com'
]));    // => array(1) { [1]=> string(17) "pronist@naver.com" }


/**
 * Escape Regex string
 */
preg_quote('^().*$?:[]');

?> 