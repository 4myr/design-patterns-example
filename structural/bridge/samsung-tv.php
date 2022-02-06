<?php

class SamsungTV implements Device {
    public function turn_on()
    {
        echo 'SamsungTV has turned on.<br>';
    }
    public function turn_off()
    {
        echo 'SamsungTV has turned off.<br>';
    }
    public function set_channel(int $number)
    {
        echo 'SamsungTV has switched to channel ' . $number . '.<br>';
    }
}