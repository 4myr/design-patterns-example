<?php

interface Device {
    public function turn_on();
    public function turn_off();
    public function set_channel(int $number);
}