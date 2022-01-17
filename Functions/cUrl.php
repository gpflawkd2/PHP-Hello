<?php
/**
 * http://docs.php.net/manual/en/book.curl.php
 * Client URL
 * PHP를 http client로 사용
 * 자주 사용 안함
 * ex) API 모듈 연동 및 전송
 */

/**
  * cURL Handling
  */

//Init
$ch = curl_init();

//Set Options(GET)
$queryString = http_build_query([
    'message' => 'Hello, world'
]);

curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_URL, 'http://localhost:81?'.$queryString);

//Excution
curl_exec($ch);

//Reset
curl_reset($ch);


//SET Options(POST)
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'message' => 'Hello, world'
]);
curl_setopt($ch, CURLOPT_URL, 'http://localhost:81');

//Excution
curl_exec($ch);

//Close
curl_close($ch);

?>