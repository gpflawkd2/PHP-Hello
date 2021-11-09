<?php
/*
정규표현식 Patterns
*/

//^(캐럿)~: ~로 시작하는 텍스트를 검색
//~$: ~로 끝나는 텍스트를 검색
//.(포인트): 모든 문자(Any Character)를 매칭함

//Escaping
//\(역슬래시)$: $를 문자열로 인식

//[]: 후보군 지정, 대괄호 안의 텍스트는 문자하나를 의미함

//예제
//[oyu]: o, y, u를 포함하는 1개의 문자
//[dH]: d, H를 포함하는 1개의 문자
//[owy][yow]: o, w, y로 시작하는 1개의 문자와 y, o, w로 끝나는 1개의 문자

if(preg_match("/[oyu]/", "How do you do?")){
    echo "[oyu] was found.";
} else {
    echo "[oyu] was not found.";
}

// - : Range 기호

if(preg_match("/[C-K]/", "ABCDEFGHIJKLMNOPQRSTUVWXYZ")){
    echo "[C-K] was found.";
} else {
    echo "[C-K] was not found.";
}

if(preg_match("/[a-d]/", "abcdefghijklmnopqrstuvwxyz 0123456789")){
    echo "[a-d] was found.";
} else {
    echo "[a-d] was not found.";
}

if(preg_match("/[C-Ka-d2-6]/", "abcdefghijklmnopqrstuvwxyz 0123456789")){
    echo "[C-Ka-d2-6] was found.";
} else {
    echo "[C-Ka-d2-6] was not found.";
}

//[^~]: 대괄호 안에서 캐럿 사용시 부정(not)을 의미함

if(preg_match("/[^CDghi45]/", "ABCDEFGHIJKLMNOPQRSTUVWXYZ abcdefghijklmnopqrstuvwxyz 0123456789")){
    echo "[^CDghi45] was found.";
} else {
    echo "[^CDghi45] was not found.";
}

if(preg_match("/[^W-Z]/", "ABCDEFGHIJKLMNOPQRSTUVWXYZ abcdefghijklmnopqrstuvwxyz 0123456789")){
    echo "[^W-Z] was found.";
} else {
    echo "[^W-Z] was not found.";
}

//(~|~|~): 서브 패턴, 하위 표현식

if(preg_match("/(on|ues|rida)/", "Monday Tuesday Friday")){
    echo "(on|ues|rida) was found.";
} else {
    echo "(on|ues|rida) was not found.";
}

if(preg_match("/(Mon|Tues|Fri)day/", "Monday Tuesday Friday")){
    echo "(Mon|Tues|Fri)day was found.";
} else {
    echo "(Mon|Tues|Fri)day was not found.";
}

if(preg_match("/..(id|esd|nd)ay/", "Monday Tuesday Friday")){
    echo "..(id|esd|nd)ay was found.";
} else {
    echo "..(id|esd|nd)ay was not found.";
}

/*
수량자: 어떠한 패턴이 얼만큼 등장하는가?
 1) *: * 앞에 등장하는 패턴이 0~여러 개인 경우 ex) a*b: b 앞에 a가 있는 경우와 없는 경우 모두 해당  
 2) +: + 앞에 등장하는 패턴이 1~여러 개인 경우 ex) a+b: b 앞에 a가 있는 경우만 해당
 3) ?: ? 앞에 등장하는 패턴이 없거나 하나인 경우 ex) a?b: b 앞에 a가 없거나 하나만 있는 경우만 해당
 4) {}: 수량 지정
        - .{5}: 5자리 문자
        - [els]{1,3}: e, l, s를 포함하는 1~3자리 문자
        - [a-z]{3,}: a-z 소문자를 포함하는 3자리 이상의 문자
 5) *?, +?, ??: 수량자 뒤에 ?가 붙으면 가장 적은 자릿 수를 의미함
        - r.*?: r만 해당
        - r.+?: r + 하나의 문자만 해당
        - r.??: r만 해당
 6) 탐욕스런 수량자: <div>.+</div>
 7) 게으른 수량자: <div>.+?</div> -> 딱 원하는 것만 검색해 낼 수 있음
*/

/*
문자 그룹(Character Class)
 1) \w: word (알파벳 + 숫자 + _ 포함)
 2) \W: word가 아닌 것
 3) \s: 공백
 4) \S: 공백이 아닌 것
 3) \d: digit (0~9까지의 숫자)
 4) \D: digit가 아닌 것
 5) \b: word boundary -> 앞 or 뒤 위치에 따라 다른 결과가 나옴
 6) \B: \b와 반대로 동작함
 7) \A: 시작점
 8) \Z: 끝점
 9) ?=
     - (?=X): X라는 문자열을 검색하는데는 사용하지만 문자를 선택할 때는 X를 제외함
     - (?=\w): 어떤 문자는 문자열을 검색하는데는 사용하지만 문자를 선택할 때는 그 문자를 제외함
*/

?> 