<?php

class NotificationServer {
    public function send_notification(Authentication $auth, Message $message, string $target)
    {
        $auth->authenticate();
        $text = $message->get_message();
        echo 'sending `' . $text . '` to `' . $target . '`<br>';
    }
}