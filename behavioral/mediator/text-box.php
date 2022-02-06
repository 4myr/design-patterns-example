<?php

class TextBox extends UIControl {
    public function textChanged()
    {
        $this->owner->changed($this);
    }
}