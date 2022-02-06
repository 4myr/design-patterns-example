<?php

class NotificationService {
    public function send_notification($username, $password, $message_text, $target)
    {
        $server = new NotificationServer;
        $authentication = new Authentication($username, $password);
        $message = new Message($message_text);
        $server->send_notification($authentication, $message, $target);
    }
}