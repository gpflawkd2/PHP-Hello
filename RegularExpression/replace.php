<?php

/*
정규표현식 치환
*/

//1. ${숫자}, $숫자 조합의 활용
$string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';

//${숫자} = \{숫자} -> ${1}: 첫번째 등장하는 서브패턴의 값 -> result: April
//$숫자 = \숫자 -> $3: 세번째 등장하는 서브패턴의 값 -> 2003
$replacement = '${1}1,$3';

// April1,2003
echo preg_replace($pattern, $replacement, $string);
echo "<br />";


//2. 배열을 이용한 변경
$string2 = 'The quick brown fox jumped over the lazy dog.';
$patterns = array();
$patterns[0] = '/quick/';
$patterns[1] = '/brown/';
$patterns[2] = '/fox/';

//php는 배열의 값이 생성되는 순서대로 치환되기 때문에 $replacements Array의 index 값에 영향을 주지 않는다.
$replacements = array();
$replacements[2] = 'bear';
$replacements[1] = 'black';
$replacements[0] = 'slow';

echo preg_replace($patterns, $replacements, $string2);
echo "<br />";


//3. 날짜패턴 변경
$patterns3 = array ('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/', '/^\s*{(\w+)}\s*=/');

// $숫자 = \숫자 -> \1: 첫번째 등장하는 서브패턴의 값
$replace = array ('\3/\4/\1\2', '$\1 =');

//서브패턴
// 19,99,5,27
// startDate

// $startDate = 5/27/1999
echo preg_replace($patterns3, $replace, '{startDate} = 1999-5-27');


?>