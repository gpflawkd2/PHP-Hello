<?php
/**
 * http://docs.php.net/manual/en/book.session.php
 */

/**
 * Session
 * 서버단에 저장되는 정보
 */

/**
 * Set Session save path
 */
session_save_path('./sessions');

/**
 * Start a Session
 */
session_start();

/**
 * Set Sesion value with Key
 */
$_SESSION['mySession'] = 'Hello, world';
//echo $_SESSION['mySession'];

/**
 * Get Session id
 */
session_id();

/**
 * Get Session name
 */
session_name();

/**
 * Run GC(Garbage Collection)
 * 유효기간이 경과된 세션을 파괴
 */
session_gc();

/**
 * Set/Get Session Cookie info
 */

//Set
session_set_cookie_params(3600);    //쿠기 수명 지정

//Get
var_dump(session_get_cookie_params());

/**
 * Remove a Session value
 */
unset($_SESSION['mySession']);

/**
 * Reset Session
 * 세션 초기화
 */
session_unset();

/**
 * Remove Session file
 * (권장하지 않음)
 */
session_destroy();

/**
 * Get Session Status
 */
session_status();

/**
 * Close Session
 */
session_commit();

/**
 * Regenerate Session id
 * 세션 아이디 재발급
 */
session_regenerate_id();


?>