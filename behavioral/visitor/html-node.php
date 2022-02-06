<?php

interface HTMLNode {
    public function execute(Operation $operation);
}