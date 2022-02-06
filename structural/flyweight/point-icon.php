<?php

class PointIcon {
    private string $type;
    private string $icon;
    
    public function __construct($type, $icon)
    {
        $this->type = $type;
        $this->icon = $icon;
    }

    public function get_icon()
    {
        return $this->icon;
    }
}