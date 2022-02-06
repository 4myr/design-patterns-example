<?php

class CaramelAdapter implements Filter {
    private string $name = 'caramel';
    private Caramel $caramel;
    public function __construct()
    {
        $this->caramel = new Caramel;
    }
    public function apply(Image $image) {
        $this->caramel->init($image);
        $this->caramel->apply_filter();
    }

    public function get_name()
    {
        return $this->name;
    }
}