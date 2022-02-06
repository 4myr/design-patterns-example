<?php

class SunFilter implements Filter {
    private string $name = 'sun';
    public function __construct()
    {
        $this->name = 'sun';
    }
    function apply(Image $image) {
        echo 'SunFilter->apply() called. <br>';
    }

    public function get_name() {
        return $this->name;
    }
}