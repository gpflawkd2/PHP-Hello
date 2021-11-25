<?php
/**
 * Logical Operators
 */

//and, or, xor

//true and true;
var_dump(true && true);     // -> true
//true or false;
var_dump(true || []);       // -> true
//xor: 다른 경우 true가 나옴
var_dump(true xor false);   // -> true
var_dump(!true);            // -> false

?>