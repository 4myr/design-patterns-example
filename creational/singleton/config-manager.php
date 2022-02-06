<?php

class ConfigManager {
    private array $config = [];
    private static $instance;

    private function __construct() {}


    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new ConfigManager();
        }
        return self::$instance;
    }

    public function set($key, $value) {
        $this->config[$key] = $value;
    }
    public function get($key) {
        return isset($this->config[$key]) ? 
            $this->config[$key] :
            null;
    }

}