<?php

/**
 * Socket Client
 * 
 * javascript WebSocket 사용
 */
$sock = stream_socket_client('tcp://127.0.0.1:81', $errono, $errstr);

/**
 * Get data from Server
 */
echo fread($sock, 1024);


/**
 * Send data to Server
 */
fwrite($sock, 'Hello, world from Client');


/**
 * Close a client
 */
fclose($sock);


?>