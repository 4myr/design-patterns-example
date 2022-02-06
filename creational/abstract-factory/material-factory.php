<?php

class MaterialFactory implements WidgetFactory {
    public function createButton()
    {
        echo 'Creating Material Button<br>';
    }
    public function createTextBox()
    {
        echo 'Creating Material TextBox<br>';
    }
}