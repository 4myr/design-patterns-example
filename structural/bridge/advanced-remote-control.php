<?php


class AdvancedRemoteControl extends RemoteControl {
    private Device $device;
    public function __construct(Device $device) {
        parent::__construct($device);
        $this->device = $device;
    }
    public function set_channel(int $number)
    {
        $this->device->set_channel($number);
    }
}