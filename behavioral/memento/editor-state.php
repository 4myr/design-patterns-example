<?php
class EditorState {
    public string $content;

    public function __construct($content) {
        $this->content = $content;
    }
}