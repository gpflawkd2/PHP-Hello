<?php
/**
 * Comparison Operators
 */

/* == : 동등 비교 연산자(true, false) */
/* === : 자료형까지 비교(엄격한 비교) */
echo "1==2 : ";
var_dump(1==2); #false
echo '<br />';
echo "1==1 : ";
var_dump(1==1); #true
echo '<br />';
echo '"one"=="two" : ';
var_dump("one"=="two"); #false
echo '<br />';

echo var_dump(1 === "1"); #false
echo '<br />';

/* !=, <> : 부정 비교 연산자(true, false) */
/* !== : 자료형까지 비교(엄격한 비교) */
echo "1!=2 : ";
var_dump(1!=2); #true
//var_dump(1<>2); #true
echo '<br />';
echo "1!=1 : ";
var_dump(1!=1); #false
echo '<br />';
echo '"one"!="two" : ';
var_dump("one"!="two"); #true
echo '<br />';

echo var_dump(1 !== "1"); #true
echo '<br />';

// 부등호
echo var_dump(10 > 20); #false
echo '<br />';
'ab' < 'ac';    // => true

//우주선 연산자
// 10 이 20 보다 크면 1, 같으면 0, 작으면 -1을 반환함
echo var_dump(10 <=> 20); // => -1

?>