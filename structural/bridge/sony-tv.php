<?php

class SonyTV implements Device {
    public function turn_on()
    {
        echo 'SonyTV has turned on.<br>';
    }
    public function turn_off()
    {
        echo 'SonyTV has turned off.<br>';
    }
    public function set_channel(int $number)
    {
        echo 'SonyTV has switched to channel ' . $number . '.<br>';
    }
}