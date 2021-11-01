<?php

/*
배열(https://www.php.net/manual/en/ref.array.php)
*/

//php 5.4 이전 버전에서는 아래와 같이 사용해야함
//$member = array('egoing', 'k8805', 'sorialgi');

$member = ['egoing', 'k8805', 'sorialgi'];

//echo $member[0].'<br />';
//echo $member[1].'<br />';

function get_members(){
    return ['egoing', 'k8805', 'sorialgi'];
}

//1)변수에 담아 출력
$tmp =  get_members();
echo $tmp[1];
echo '<br />';

//2)그대로 출력 : php 5.4 이후 버전부터 사용 가능
echo get_members()[1];
echo '<br />';

//배열 + 반복문 예제
$members = get_members();
 
//count(배열명) : 배열의 크기
for($i = 0; $i < count($members); $i++){
    //ucfirst() : 첫글자를 대문자로 변환
    echo ucfirst($members[$i]).'<br />';
}

//제일 끝에 배열을 추가: push()
//제일 끝에 있는 배열을 제거: pop()
//첫번째 있는 값을 추가: unshift()
//첫번째 있는 값을 제거: shift()
//오름차순 정렬: sort()
//내림차순 정렬: rsort()

$li = ['c', 'e', 'a', 'b', 'd', 'z'];

//array_push($li, 'f');
//array_unshift($li, 'z');
//array_shift($li);
array_pop($li);
rsort($li);

var_dump($li);

?>