<?php
/**
 * PHP Extension
 * 확장 기능 로드
 */

//Loaded
var_dump(extension_loaded('mbstring'));

//Gets
var_dump(get_loaded_extensions());


/**
 * include Path
 */

//Set
//set_include_path(__DIR__, '../example');
set_include_path('../example');
//ini_set('include_path', '../example');

include 'greeting_ko.php';

echo language\ko\welcome();

//Get
var_dump(get_include_path());

//Reset
restore_include_path();


/**
 * Get included Files
 * 현재 페이지에 포함된 파일 리스트
 */
var_dump(get_included_files());


/**
 * Get php information
 */
phpinfo();


/**
 * php.ini
 */
//Set
ini_set('session.gc_maxlifetime', 1440);

//Get
var_dump(ini_get('session.gc_maxlifetime'));  //->1440

//Reset
ini_restore('session.gc_maxlifetime');


/**
 * Environment Variables
 * 환경변수 설정
 */

 /**
 * Case 1. put&getenv
 */
//Set
putenv('APP_ENV=' . 'production');
//Get
var_dump(getenv('APP_ENV'));  //->production

 /**
 * Case 2. $_ENV
 */
//Set
$_ENV['APP_ENV'] = 'development';
//Get
$_ENV['APP_ENV'];
?>