<?php
/**
 * Bitwise Operators
 */

$bin = 0b0101;  // -> 5

echo $bin | 0b0100;  // -> 0b0101 -> 5
echo $bin & 0b0100;  // -> 0b0100

 // ^: xor(다른 경우 true가 나옴)
echo $bin ^ 0b0100;  // -> 0b0001 -> 1(true)

// <<, >>: shift 연산자(bit를 한칸씩 이동시킴)
echo $bin << 1; // -> 0b1010

// ~: Not 연산자(2의 보수 - 음수표현)
echo ~$bin;  // 0b1010-> -6

?>