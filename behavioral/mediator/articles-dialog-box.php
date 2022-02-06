<?php

class ArticlesDialogBox extends DialogBox {
    public function __construct()
    {
        $button = new Button($this);
        $textbox = new TextBox($this);
        $listbox = new ListBox($this);
        $button->clicked();
        $textbox->textChanged();
    }
    public function changed(UIControl $control)
    {
        echo get_class($control) . ' has changed<br>';
    }
}