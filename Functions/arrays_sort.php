<?php
/**
 * Sort by value
 */
$numbers = range(1,5);

//sort($number);    //오름차순
rsort($numbers);     //내림차순

var_dump($numbers);

/**
 * Assoc sort by value
 * 연관배열
 */
$arr = [
    'r' => 'Bye',
    'c' => 'Who are you?',
    'a' => 'Hello, world'
];

//값을 기준으로 정렬
//asort($arr);  //오름차순
arsort($arr);   //내림차순

var_dump($arr);


/**
 * Sort By Key
 * Key를 기준으로 정렬
 */

 //ksort($arr); //오름차순
 krsort($arr);  //내림차순

var_dump($arr);


/**
 * Sort By callback
 */

 //uasort(): 값을 기준
 //uksort(): Key값을 기준
usort($numbers, function ($a, $b){
    return $a > $b; //오름차순 정렬
});

var_dump($numbers);

/*
array(5) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
  [4]=>
  int(5)
}
*/
?>