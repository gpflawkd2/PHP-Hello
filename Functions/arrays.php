<?php

/**
 * http://docs.php.net/manual/en/book.array.php
 */

$blog = [
    'title' => 'Lorem Ipsum',
    'categories' => [
        'all' => [
            [
                'title' => 'What is Lorem Ipsum?',
                'content' => 'Lorem Ipsum is simple dummy text.'
            ],
            [
                'title' => 'Why do we use it?',
                'content' => 'It is a long established fact.'
            ],
            [
                'title' => 'Where dose it come from?',
                'content' => 'Country to popular belief.'
            ],
        ],
    ],
];


/**
 * Push a element
 */
array_push($blog['categories']['all'], [
    'title' => 'Add Title',
    'content' => 'Add Contents'
]);


/**
 * Delete a element
 */
//마지막에 들어간 요소 삭제
array_pop($blog['categories']['all']);


/**
 * Filtering
 */
var_dump(array_filter($blog['categories']['all'], function ($post){
    return $post['title'] == 'What is Lorem Ipsum?';
}));


/**
 * Validate key
 * Key가 존재하는지 체크
 */
array_key_exists('title', $blog);  // => 1


/**
 * Make an array from another array
 */
//title Copy
var_dump(array_map(function ($post){
    return $post['title'];
}, $blog['categories']['all']));

//var_dump($blog);


/**
 * Find a key
 */
array_search('Lorem Ipsum', $blog); // => title

/**************************************************************/

/**
 * Generate Numbers array
 */
$numbers = [1,2,3,4,5];
//range(1,5);


/**
 * Folding
 * 요소단위
 */
// $carry = null, $num = 1부터 시작
var_dump(array_reduce($numbers, function ($carry, $num){
    //var_dump($carry, $num);
    echo $carry;
    echo $num;
    return $carry += $num * 2;
}));


/**
 * Check element in array
 * 값 존재유무 체크
 */
in_array(3, $numbers);


/**
 * Get array keys
 * Key 반환
 */
array_keys($numbers);


/**
 * Get array values
 * 값 반환
 */
array_values($numbers);


/**
 * Make a array from variables
 */
$message = 'Hello, world';
$useCount = 0;
$pi = 3.14;
$is_visited = false;
$temp = null;

var_dump(compact('message','useCount','pi','is_visited','temp'));

/*
array(5) {
    ["message"]=>
    string(12) "Hello, world"
    ["useCount"]=>
    int(0)
    ["pi"]=>
    float(3.14)
    ["is_visited"]=>
    bool(false)
    ["temp"]=>
    NULL
  }
*/

?>