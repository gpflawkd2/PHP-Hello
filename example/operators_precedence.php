<?php
/**
 * Operator Precedence
 * 
 * Arthemetic(산술) > Comparison(비교) > Logical(논리)
 */

 true && (10 < 20) == true && (10 > 20);

 //step1
 true && (true == true) && false;

 //step2
 true && true && false;

 //step3
 true && false; // -> false

?>