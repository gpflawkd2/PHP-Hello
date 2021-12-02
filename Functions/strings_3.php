<?php
/**
 * Replace
 */
echo str_replace('Hello', 'Hi', 'Hello, world');


/**
 * Repeat
 */
echo str_repeat('*', 5);


/**
 * Split
 * 글자수로 쪼개기
 */
var_dump(str_split('Hello, world', 3));


/**
 * Word Count
 * 단어별로 쪼개기
 */
var_dump(str_word_count('Hello, world', 1));


/**
 * Compare
 * 같으면 0, 크면 1, 작으면 음수 반환
 */
strcmp('Hello, world', 'Hello, world');


/**
 * Position
 * 문자열의 위치 반환
 */
strpos('Hello, world', 'o');


/**
 * First Position
 * 찾는 문자를 포함한 뒤 문자열 반환
 */
strpbrk('Hello, world', 'o');  //o, world


/**
 * Length
 */
strlen('Hello, world');


/**
 * Reverse
 */
echo strrev('Hello, world');

?>