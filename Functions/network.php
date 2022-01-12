<?php
/**
 * http://docs.php.net/manual/en/book.network.php
 */

/**
 * HTTP Header
 */

//Set(Response Header)
header('X-Header: Hello, world');
//Remove
header_remove('X-Header');

//header('Location');
//header('Cache-Control');
//header('HTTP/1.1 200 OK');

/**
 * HTTP Response Code
 */

// Case 1. http_response_code : 코드만 전송 가능

//http_response_code(200);    //200: OK
//http_response_code(200);    //200대: Success
//http_response_code(500);    //500대: Server Error
//http_response_code(300);    //300대: About Contents & Redirect
//http_response_code(400);    //400대: Bad Request

http_response_code(404);

// Case 2. header
header('HTTP/1.1 404 Not Found');
header('HTTP/1.1 302 Redirect');

?>