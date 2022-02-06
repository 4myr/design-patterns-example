<?php

interface Filter {
    public function apply(Image $image);
    public function get_name();
}