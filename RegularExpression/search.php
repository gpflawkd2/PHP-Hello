<?php

/*
정규표현식 검색
*/

//1. word boundary(\b)
//web이라는 특정 단어만 검색
if (preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}
 
if (preg_match("/\bweb\b/i", "PHP is the website scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}

echo "<br />";


//2. 캡쳐링: 소괄호()로 묶어주면 독립된 데이터로 추출 가능

$subject = 'coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000';

//array(1) { [0]=> string(24) "http://opentutorials.org" }
//preg_match('~http://\w+\.\w+~', $subject, $match);

//array(2) { [0]=> string(24) "http://opentutorials.org" [1]=> string(24) "http://opentutorials.org" }
//preg_match('~(http://\w+\.\w+)~', $subject, $match);

//array(3) { [0]=> string(42) "http://opentutorials.org egoing@egoing.com" [1]=> string(24) "http://opentutorials.org" [2]=> string(17) "egoing@egoing.com" }
preg_match('~(http://\w+\.\w+)\s(\w+@\w+\.\w+)~', $subject, $match);

var_dump($match);
echo "<br />";
echo "homepage:".$match[1];
echo "<br />";
echo "email:".$match[2];
echo "<br />";


//3. ?: 기호는 $matches라는 변수에 캡쳐링된 해당 텍스트가 포함되지 않도록 함

// get host name from URL(www.php.net)
preg_match('@^(?:http://)?([^/]+)@i', "http://www.php.net/index.html", $matches);
print_r($matches);
$host = $matches[1];
echo "<br />";
 
// get last two segments of host name(php.net)
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "domain name is: {$matches[0]}\n";
echo "<br />";


//4. Back Reference
// ?P<keyValue> -> [keyValue] => foobar

$str = 'foobar: 2008';

preg_match('/(?P<name>\w+): (?P<digit>\d+)/', $str, $matches);
 
/* This also works in PHP 5.2.2 (PCRE 7.0) and later, however 
 * the above form is recommended for backwards compatibility */
// preg_match('/(?<name>\w+): (?<digit>\d+)/', $str, $matches);
 
// Array ( [0] => foobar: 2008 [name] => foobar [1] => foobar [digit] => 2008 [2] => 2008 )
print_r($matches);

?> 