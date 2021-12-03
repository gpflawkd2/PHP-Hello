<?php
/**
 * http://docs.php.net/manual/en/book.password.php
 */

/**
 * Create a hash value for password
 */
$hash = password_hash('Hello, world', PASSWORD_DEFAULT);
//$hash = crypt('Hello, world', 'rl');

/**
 * Varify password hash
 */
var_dump(password_verify('Hello, world', $hash));

/**
 * Get info
 */
var_dump(password_get_info($hash));

/**
 * Rehash
 * 패스워드 갱신
 */
$hash = password_hash('Hello, world', PASSWORD_DEFAULT, [
     'cost' => 10
]);

// cost가 높을수록 좋음
$options = [ 'cost' => 11 ];

var_dump(password_needs_rehash($hash, PASSWORD_DEFAULT, $options));

?>