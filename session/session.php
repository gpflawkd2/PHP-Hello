<?php
/*
session: SID(session ID)를 식별자로 서버에 데이터를 저장
*/

//session_save_path('./session');

//로직의 초입에 사용
session_start();

$_SESSION['title'] = '생활코딩2';

echo $_SESSION['title'];

?>