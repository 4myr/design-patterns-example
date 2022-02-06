<?php

class AnchorNode implements HTMLNode {
    public function execute(Operation $operation)
    {
        $operation->apply($this);
        echo get_class($operation) . ' has applied on anchor node<br>';
    }
}