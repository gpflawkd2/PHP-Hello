<?php

//echo $_COOKIE['cookie1']."<br />";
//echo time()-$_COOKIE['cookie2'];

session_start();
echo $_SESSION['title'];

?>