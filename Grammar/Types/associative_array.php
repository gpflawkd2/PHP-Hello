<?php
/*
연관배열
*/

//$grades = array('egoing'=>10, 'k8805'=>6, 'sorialgi'=>80);

$grades = [];
$grades['egoing'] = 10;
$grades['k8805'] = 6;
$grades['sorialgi'] = 80;

//var_dump($grades);
echo $grades['sorialgi'];
echo '<br />';

foreach($grades as $key => $value){
    echo "key: {$key} value: {$value}<br />";
}

?>