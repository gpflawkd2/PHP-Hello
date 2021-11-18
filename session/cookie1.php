<?php

setcookie('cookie1','생활코딩');
// 현재시간부터 60초 이후까지만 cookie가 유효함
setcookie('cookie2', time(), time()+60);

?>