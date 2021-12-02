<?php
/**
 * Print formatted string
 * 
 * %s String
 * %d Int
 * %f Float
 */
 $message = 'Hello, world';

 printf("%s", $message);
 printf("%d", 1424);
 printf("%10.2f", 14.245); // 10 -> 10자리로 채우기, .2 -> 소숫점 둘째자리까지

 //printf("%s, %d", $message, 10);
 printf("%s, %d", ...[$message, 10]);
 vprintf("%s, %d", [$message, 10]); //vprintf(): 배열을 받을 수 있음, 다른 기능은 printf() 함수와 동일

 
 /**
  * Buffering
  */
 echo $buf = sprintf("%s", 'Hello, world');
 //sprintf("%s, %d", ...[$message, 10]);
 echo vsprintf("%s, %d", [
     $message, 10
 ]);
?>