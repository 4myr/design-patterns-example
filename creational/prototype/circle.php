<?php

class Circle implements Component {
    private int $radius;

    public function clone() {
        $circle = new Circle();
        $circle->setRadius($this->radius);
        return $circle;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }
    
    public function render() {
        echo 'Circle rendered<br>';
    }
}