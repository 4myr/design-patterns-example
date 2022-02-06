<?php

class ImageStorage {
    private Compressor $compress;
    private Filter $filter;

    public function __construct(Compressor $compressor, Filter $filter) {
        $this->compressor = $compressor;
        $this->filter = $filter;
    }

    public function store($fileName) {
        $this->compressor->compress();
        $this->filter->apply();
        echo 'Storing ' . $fileName . '<br>';
    }
}