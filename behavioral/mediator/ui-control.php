<?php

class UIControl {
    protected DialogBox $owner;
    public function __construct($owner)
    {
        $this->owner = $owner;
    }
}