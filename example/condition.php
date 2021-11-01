<?php

/*
조건문
    - and(&&) : 좌항과 우항이 모두 참(true)일때 참(true)
    - or : 좌우항중 하나라도 참(true)이면 참(true)
    - ! : 부정의 의미
    - Boolean : true/false ** 0 -> false, 0이 아닌 다른 숫자 -> true **
*/

/* and(&&) */
if (true and true) {    //true
    echo 1;
}
if (true and false) {   //false
    echo 2;
}
if (false and true) {   //false
    echo 3;
}
if (false and false) {  //false
    echo 4;
}

/* or */
if (true or true) { //true
    echo 1;
}
if (true or false) {    //true
    echo 2;
}
if (false or true) {    //true
    echo 3;
}
if (false or false) {   //false
    echo 4;
}

/* ! */
if (!true and !true){   //false
    echo 1;
}
if (!true and !false){  //false
    echo 2;
}
if (!false and !true){  //false
    echo 3;
}
if (!false and !false){ //true
    echo 4;
}

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