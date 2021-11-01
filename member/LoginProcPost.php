<?php
echo $_POST['id'].','.$_POST['password'];

if($_POST['id'] === 'test'){
    if($_POST['password'] === '1111'){
        echo 'right';
    } else {
        echo 'password wrong';
    }   
} else {
    echo 'id wrong';
}

/* and(&&) */
if($_POST['id'] === 'test' && $_POST['password'] === '1111'){
    echo 'right';
} else {
    echo 'wrong';
}

/* or */
if($_POST['id'] === 'egoing' or $_POST['id'] === 'k8805' or $_POST['id'] === 'test'){
    echo 'right';
} else {
    echo 'wrong';
}

/* and(&&), or 혼합 */
if(
    ($_POST['id'] === 'egoing' or $_POST['id'] === 'k8805' or $_POST['id'] === 'test')
    and $_POST['password'] === '1111'){
    echo 'right';
} else {
    echo 'wrong';
}

?>