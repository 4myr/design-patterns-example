<?php

class ListBox extends UIControl {
    public function itemSelected()
    {
        $this->owner->changed($this);
    }
}