<?php
/**
 * http://docs.php.net/manual/en/book.strings.php
 */

/**
 * Add slashes at Quotes
 */

$str = "Is your name O'Reilly?";

//Add
//$slashe = addslashes("'");
$slashe = addslashes($str);
echo  $slashe;
//Remove
echo stripslashes($slashe);


/**
 * Binary to Hex
 * 임의의 토큰 발행시 사용
 */
$bytes = random_bytes(32);

echo $hex = bin2hex($bytes); //2진수 -> 16진수
echo hex2bin($hex); //16진수 -> 2진수


/**
 * One way hash(Encryption)
 * 
 * sha1, md5 Not recommended
 */
echo crypt('Hello, world', 'secret');


/**
 * Split, Join
 */
$url = 'http://example.com';

//split
$exp = explode('//', $url);
//join
echo implode('//', $exp);


/**
 * HTML Entities
 */

$html = <<<'HTML'
<html>
    <body>Hello, world</body>
</html>
HTML;

//Encode(html -> text 변환)
//$encoded = htmlentities($html);
$encoded = htmlspecialchars($html);

//Decode(text -> html 변환)
//echo html_entity_decode($encoded);
echo htmlspecialchars_decode($encoded);


/**
 * Strip HTML Tags
 */

//일부 태그만 나오게~
echo strip_tags($html, '<body>');   //<body>Hello, world</body>
//echo strip_tags($html);


/**
 * \n -> <br> tag
 * 작은 따옴표에선 \n 사용 불가능
 */
 echo nl2br("Hello,\nworld");


/**
 * Char
 * 아스키코드
 */
//char -> num
ord('A');   // -> 65
//num -> char
chr(65);


/**
 * Parse Query String
 * Query String 배열로 반환
 */

$arr = [];
$qs = 'lang=php&addr=217.0.0.1';

parse_str($qs, $arr);
var_dump($arr);


/**
 * Number Format
 */
echo number_format(123456789);


/**
 * Case
 * 대소문자 변환
 */
//대문자
echo strtoupper('Hello, world');
//소문자
echo strtolower('Hello, world');


/**
 * Reomove Spaces
 */
trim(' Hello, world ');


/**
 * Replace
 */
echo strtr('Hello, world', ['Hello, world' => '안녕하세요']);
?>