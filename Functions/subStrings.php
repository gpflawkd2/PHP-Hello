<?php
/**
 * Sub String
 * 구분자 기준으로 뒤 문자열 반환
 */
strstr("http://example.com", '//');


/**
 * Token
 */
strtok("http://example.com", '//');


/**
 * Slice
 * index 기준
 */
substr('Hello, world', 7, strlen('Hello, world')-1);   //world
substr('Hello, world', 7);   //world


/**
 * Compare
 * 같으면 0, 크면 1, 작으면 음수 반환
 */
substr_compare('Hello, world', 'world', -5);   //-5 -> 뒤에서부터 index 계산


/**
 * Replace
 * 범위지정(string, 찾는 문자열,index, length)
 */

 //0번째 index에서 5자리 길이까지의 텍스트를 Hi로 변환
 substr_replace('Hello, world', 'Hi', 0, 5);   //->Hi, world


/**
 * Count
 * 찾는 문자의 수 반환
 * (string, 찾는 문자, start index)
 */
substr_count('Hello, world', 'l', -5); // -> 1
substr_count('Hello, world', 'l', 0);  // -> 3


/**
 * Wrapping
 * 글자수만큼 자르기
 */
echo wordwrap('Hello, world', 5);    // 유연 -> Hello, world
echo "<br />";
echo wordwrap('Hello, sdfdsfdsfsf', 5, "\n", true); // 엄격 -> Hello , sdfds fdsfs f
echo "<br />";
echo wordwrap('Hello, asasassa', 5, "\n", false);   // 유연 -> Hello, asasassa
?>