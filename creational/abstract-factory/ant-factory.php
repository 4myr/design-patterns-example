<?php

class AntFactory implements WidgetFactory {
    public function createButton()
    {
        echo 'Creating Ant Button<br>';
    }
    public function createTextBox()
    {
        echo 'Creating Ant TextBox<br>';
    }
}