<?php

/*
함수
*/

function numbering(){
    $i = 0;
    while ($i < 10) {
        echo $i;
        $i += 1;
    }
}
numbering();
numbering();

function get_member1(){
    return 'egoing';
}
 
 
function get_member2(){
    return 'k8805';
}
 
echo get_member1();
echo ',';
echo get_member2();
echo '<br />';

function get_argument($arg){
    return $arg;
}
 
print get_argument(1);
print get_argument(2);
echo '<br />';

function get_arguments($arg1, $arg2){
    return $arg1 + $arg2;
}
echo get_arguments(10, 20);
echo get_arguments(20, 30);
echo '<br />';

//인자의 기본값
function get_argumentss($arg1=100){
    return $arg1;
}
echo get_argumentss(1);
echo ',';
echo get_argumentss();
echo '<br />';

?>