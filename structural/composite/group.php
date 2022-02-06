<?php

class Group implements Component {
    private array $components = [];

    public function add(Component $component) {
        $this->components[] = $component;
    }

    public function render() {
        echo 'Rendering a group<br>';
        foreach($this->components as $component) {
            $component->render();
            // echo class_name($component) . '<br>';
        }
        echo 'Render done.<br><br>';
    }

}