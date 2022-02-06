<?php

class Message {
    private string $message;
    public function __construct($message)
    {
        $this->message = $message;
    }

    public function get_message()
    {
        if (strlen($this->message) > 5) return $this->message;
        else die('Message cannot be lower than 5 characters');
    }
}