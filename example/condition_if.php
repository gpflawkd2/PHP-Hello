<?php

/**
 * if
 */
 // [], '', false, 0, null -> false

if(true){
    echo 'Hello, world';
}

/**
 * if ~ else
 */

if(false){
    echo 'Hello, world';
} else {
    echo 'Bye';
}

/**
 * if ~ elseif ~ else
 */

if(false){
    echo 'Hello, world';
} elseif(true) {
    echo 'Who are you?';
} else {
    echo 'Bye';
}

/**
 * Define Variables in If Context
 */

if($message = 'Hello, world'){
    echo $message;
}

//Alternative Context
if(false):
    echo 'Hello, world';
elseif(true):
    echo 'Who are you?';
else:
    echo 'Bye';
endif;

/* 0(false), 1(true) */
//0외에 값이 없는 배열, 빈문자열, NULL, 문자 0 등도 0으로 간주
if (1 and 1) {
    echo 1;
}
if (1 and 0) {
    echo 2;
}
if (0 and 1) {
    echo 3;
}
if (0 and 0) {
    echo 4;
}
?>