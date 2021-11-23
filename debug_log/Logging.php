<?php
/*
Debugging 함수
 - var_dump();
 - print_r();
 - var_export();
*/

$test = array(1,2,3);
//error_log($test); //오류발생

//로그파일에 기록
error_log(var_export($test, 1));

?>