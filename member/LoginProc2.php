<?php

session_start();
$id = 'test';
$pwd = '123456';

if(!empty($_POST['id']) && !empty($_POST['password'])){
    if($_POST['id'] == $id && $_POST['password'] == $pwd){
        $_SESSION['is_login'] = true;
        $_SESSION['nickname'] = 'gpflawkd2';
        header('Location: /mypage/mypage.php');
        exit;
    }
}

echo '로그인 하지 못했습니다.';

?>