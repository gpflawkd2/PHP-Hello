<?php
/**
 * Classify Http methods
 * PHP 내장 서버 관련 셋팅
 * 자주 사용 안함
 */

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        echo filter_input(INPUT_GET, 'message');
    break;
    case 'POST':
       print_r($_POST);
    break;
    default:
        http_response_code(404);
}

?>