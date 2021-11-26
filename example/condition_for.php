<?php
/**
 * for
 */

for($i = 1; $i <= 10; $i++){
    echo $i;
}

/**
 * for with array
 */

$messages = [
    'Hello, world',
    'Who are you?',
    'Bye'
];

for($i = 0; $i < count($messages); $i++){
    echo $messages[$i] . '<br />';
}

/**
 * foreach (as [$key =>] $value)
 */

 $response = [
     //'name' => 'PHP',
     //'category' => 0,
     'message' => [
         'Hello world',
         'Who are you?',
         'Bye',
     ]
 ];

 foreach($response as $key => $value){
    //echo $value . '<br />';
    foreach($value as $msg){
        echo $msg . '<br />';
    }
 }

 
/**
 * break [Level]
 * Level을 줄 수 있음
 */
for($i = 1; $i <= 10; $i++){
    for($j = 0; $j < 10; $j++){
        break 2;
        echo $j;
    }
    echo $i;
}

/**
 * continue [Level]
 * Level을 줄 수 있음
 */

 $sum = 0;

for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 10; $j++){
        continue 2;
    }
    $sum += $i;
}

echo $sum;

?>