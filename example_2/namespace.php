<?php

/*
namespace: 같은 이름을 가지고 있는 함수/상수/클래스가 충돌하는 것을 방지하기 위한 수단, 디렉토리와 유사한 개념
*/

require_once 'greeting_ko.php';
require_once 'greeting_en.php';

echo language\ko\welcome();
echo language\en\welcome();

require_once 'greeting_lang_mix.php';

echo language\english\welcome();
echo language\korea\welcome();

?>