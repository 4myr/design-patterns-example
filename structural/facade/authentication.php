<?php

class Authentication {
    private string $username;
    private string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function authenticate()
    {
        if ($this->username == 'amyr' && $this->password == 'amyr') return true;
        else die('Authentication failed.');
    }
}