<?php
class Editor {
    private string $content;
    
    public function createState(): EditorState {
        return new EditorState($this->content);
    }

    public function restore(EditorState $state) {
        $this->setContent($state->content);
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }
}