<?php

class PointIconFactory {
    private array $icons = [];
    public function get_point_icon(string $type)
    {
        if (!isset($this->icons[$type])) {
            echo "Point icon $type created.<br>";
            $this->icons[$type] = new PointIcon($type, "$type.png");
        }
        return $this->icons[$type];
    }
}