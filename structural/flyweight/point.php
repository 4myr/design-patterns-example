<?php

class Point {
    private int $x;
    private int $y;
    private PointIcon $point_icon;

    public function __construct(int $x, int $y, PointIcon $point_icon)
    {
        $this->x = $x;
        $this->y = $y;
        $this->point_icon = $point_icon;
        echo "Point $x, $y created with " . $point_icon->get_icon() . " icon<br>";
    }
}