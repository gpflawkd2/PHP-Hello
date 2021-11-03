<?php
/*
getcwd(): 현재 파일이 동작하고 있는 디렉토리 확인
chdir(): 경로 이동
*/
echo getcwd().'<br />';
chdir('../');  //(../) -> 현재 디렉토리의 부모 디렉토리로 이동
//echo getcwd().'<br />';
?>