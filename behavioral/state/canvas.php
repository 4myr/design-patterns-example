<?php

class Canvas {
    private Tool $currentTool;

    public function __construct(Tool $currentTool) {
        $this->currentTool = $currentTool;
    }

    public function mouseUp() {
        $this->currentTool->mouseUp();
    }

    public function mouseDown() {
        $this->currentTool->mouseDown();
    }
    
    public function get_current_tool(): Tool {
        return $this->currentTool;
    }
}