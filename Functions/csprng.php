<?php
/**
 * http://docs.php.net/manual/en/book.csprng.php
 */

/**
 * rand() vs random_int()
 * 첫 숫자와 마지막 숫자를 포함
 */
rand(1,5);
random_int(1, 5);   //safe


/**
 * Create a random bytes
 */
$bytes = random_bytes(32);

?>