<?php

class Caramel {
    private Image $image;

    public function init(Image $image)
    {
        $this->image = $image;    
    }

    public function apply_filter() {
        echo 'Caramel 3rd-library filter has applied on ' . $this->image->get_file_name() . '.<br>';
    }
}