<?php

class Button extends UIControl {
    public function clicked()
    {
        $this->owner->changed($this);
    }
}