<?php

/*
반복문
    - while
    - for
*/

/* while */
$i = 0;

while($i < 10){
    echo 'coding everybody';
    echo "<br />";
    //$i += 1;
    $i++;
}

/* for */
for($j = 0; $j < 10; $j++){

    if($j === 5){
        //break;    //종료
        continue;   //해당 조건만 제외하고 반복문 계속 실행
    }

    //echo "coding everybody".$j."<br />";
    echo "coding everybody{$j}<br />";
    //echo "coding everybody".($j*2)."<br />";
}

for($i = 0; $i < 10; $i++){    
    for($j = 0; $j < 10; $j++){  
        echo "coding everybody{$i}{$j}<br />";
    }
}

?>