<?php

interface Operation {
    public function apply(HTMLNode $node); // we can do it using method overloading
}