<?php

/**
 * Socket Server
 * 
 * tcp port, tcp ip를 사용하여 통신
 * php 사용
 * 하나의 응용프로그램으로 동작
 * 
 * 테스트방법: http://localhost:81/socket/socketServer.php 실행 -> http://localhost:81/socket/socketClient.php 실행
 */ 
$server = stream_socket_server('tcp://127.0.0.1:81', $errono, $errstr);


/**
 * Listening
 */
while ($sock = stream_socket_accept($server)){
    echo stream_socket_get_name($sock, true);

    /**
     * Send data to Client
     */
    fwrite($sock, 'Hello, world from Server', 1024);

    /**
     * Get data from Client
     */
    echo stream_get_contents($sock);

    /**
     * Close Connection
     */
    fclose($sock);
}


/**
 * Close socket server
 */
fclose($server);

?>