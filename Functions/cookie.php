<?php
/**
 * http://docs.php.net/manual/en/function.setcookie.php
 */

/**
 * Cookie
 * 브라우저에 저장되는  데이터
 */

setcookie('myCookie', 'Hello, world');

/**
 * Get a Cookie
 */
echo $_COOKIE['myCookie'];

/**
 * Remove a Cookie
 */
setcookie('myCookie', '', time() - 3600);

?>