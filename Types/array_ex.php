<?php

$messages = [
    'Hello,world',
    'Who are you?',
    'Bye'
];

/**
 * Insert
 */

 //$messages[] ='whoops';
 $messages[3] = 'whoops';
 
 var_dump($messages);


 /**
 * Select
 */
echo $messages[3];

 /**
 * Update
 */
$messages[3] = 'Do you know?';
echo $messages[3];

 /**
 * Delete
 */

 //할당해제
unset($messages[3]);

?>