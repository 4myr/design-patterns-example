<?php

class HighlightOperation implements Operation {
    public function apply($node)
    {
        // we can use switch case here instead of method overloading approach
        echo 'applying highlight on ' . get_class($node) . '<br>'; 
    }
}