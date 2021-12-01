<?php
/**
 * Set assert options
 * ini_set() 함수로 변경 불가능
 * 
 * PHP.ini
 * 
 * zend.assertions = 1
 */

 //Active
 assert_options(ASSERT_ACTIVE, true);

 //Stop testing on failure
 assert_options(ASSERT_BAIL, false);

 //PHP Trace
 assert_options(ASSERT_WARNING, true);

 //Callback
 assert_options(ASSERT_CALLBACK, "assertFailure");

 function assertFailure(...$args){
    var_dump($args);    //배열
}


 /**
 * Assert
 * 테스트 & 검증
 */
assert(false, __LINE__);


?>