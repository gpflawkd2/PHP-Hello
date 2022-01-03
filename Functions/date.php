<?php
/**
 * http://docs.php.net/manual/en/book.datetime.php
 */

/**
 * Timezone
 * http://docs.php.net/manual/en/timezones.php
 */

 //Set
 date_default_timezone_set('Asia/Seoul');
 //Get
 date_default_timezone_get();


/**
 *  Get time: Unix Timestamp
 */
$t = time();
// Case 1. localtime
var_dump(localtime($t, true));

// Case 2. getdate
var_dump(getdate($t));


/**
 *  Timestamp format
 */
// Case 1. strftime
strftime('%d%m%Y %H:%M:%S', $t);   //03012022 15:43:32

// Case 2. date
date('d/m/Y H:i:s',$t);            //03/01/2022 15:43:32


/**
 *  Make a timestamp
 */
$timestamp = mktime('1', '15', '30');  //1641140130
date('d/m/Y H:i:s',$timestamp);        //03/01/2022 01:15:30


/**
 *  Parsing String time
 */
//strptime(strftime('%d%m%Y %H:%M:%S', $t), '%d%m%Y %H:%M:%S'); //Windows 환경에서 제공 안함


/**
 * String to time
 */

//strtotime('now');
//strtotime('+1 day');
//strtotime('+2 days');

$timestamp = strtotime('+2 days');
echo date('d/m/Y H:i:s', $timestamp); // 2일 경과: 05/01/2022 15:57:49

/**
 * Script time execution time check
 * 실행시간 체크
 */
$stime = microtime(true);

sleep(1);
echo microtime(true)-$stime;

?>