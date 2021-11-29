<?php
/**
 * Define Variables
 * https://www.php.net/manual/en/language.types.php
 */

$message = 'Hello, world';  //String
$userCount = 0;             //Int
$pi = 3.14;                 //Double
$is_visited = false;        //Boolean
$temp = null;               //NULL

/**
 * Using Variables
 */

 echo $message;

/**
 * Using Variables in String
 */
// -> The message is Hello, world;
"The message is {$message}";

//작은 따옴표를 사용할 경우 변수로 인식하지 못함
'The message is {$message}';

/**
 * Here Doc, Now Doc
 * Here Doc: 변수 사용 가능
 * Now Doc: 작은 따옴표 사용, 변수 인지 못함 ex)echo <<<'HTML'
 */

echo <<<HTML
<html>
    <head>
        <title>$message</title>
    </head>
</html>
HTML;

//'<html><head></head></html>';

/**
 * Free
 */
unset($message);
//echo $message;

?>