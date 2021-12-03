<?php
/**
 * http://docs.php.net/manual/en/book.hash.php
 */

/**
 * Get hash algorithms
 */
//var_dump(hash_algos());

/**
 * Create a hash
 */
$hash = hash('sha256', 'Hello, world');
//$hash = crypt('Hello, world', 'secret');

/**
 * Check a hask
 * 해쉬값이 유효한지 체크
 */
var_dump(hash_equals($hash, hash('sha256', 'Hello, world')));

/**
 * Hash Handler
 */
$h = hash_init('sha256');
hash_update($h, 'Hello, world');

hash_final($h);

/**
 * HMAC
 * Hash-based Message Authentication Code
 * 해쉬기반 메세지 인증
 * 
 * key -> "secret"
 */
var_dump(hash_hmac_algos());

$hash = hash_hmac('sha256','Hello, world', 'secret');
echo hash_equals($hash, hash_hmac('sha256','Hello, world', 'secret'));
?>