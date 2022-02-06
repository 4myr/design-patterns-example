<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('authentication.php');
require_once('message.php');
require_once('notification-server.php');
require_once('notification-service.php');


// violation :
// $server = new NotificationServer;
// $authentication = new Authentication('amyr', 'amyr');
// $message = new Message('salam amyr');
// $server->send_notification($authentication, $message, 'amyr');

// solution:
$service = new NotificationService();
$service->send_notification('amyr', 'amyr', 'salam amyr', 'info@amyr.ir');