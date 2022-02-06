<?php

class Image {
    private string $fileName;
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function apply_filter(Filter $filter) {
        $filter->apply($this);
        echo 'applying ' . $filter->get_name() . ' on image ' . $this->fileName . '<br>';
    }

    public function get_file_name()
    {
        return $this->fileName;
    }
}