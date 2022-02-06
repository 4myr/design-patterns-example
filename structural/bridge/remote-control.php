<?php

class RemoteControl {
    private Device $device;

    public function __construct(Device $device) {
        $this->device = $device;
    }

    public function turn_on()
    {
        $this->device->turn_on();    
    }
    
    public function turn_off()
    {
        $this->device->turn_off();    
    }
}