<?php
/*
mkdir(name, authority): 디렉토리 생성
rmdir(): 디렉토리 삭제
*/

//mkdir("1/2/3/4", 0700, true);   //0700 -> 모든 권한 부여, true -> 여러개의 디렉토리를 한 번에 생성함
mkdir("test", 0700, true);
?>