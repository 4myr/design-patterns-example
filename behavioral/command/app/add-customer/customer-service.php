<?php

class CustomerService {
    private string $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function add_customer()
    {
        echo "Add customer with name: $this->name<br>";
    }
}