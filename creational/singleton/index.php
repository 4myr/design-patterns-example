<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('config-manager.php');

$config = ConfigManager::getInstance();
$config->set('app_name', 'Singleton Design Pattern');
$config = ConfigManager::getInstance();
echo 'APP Name: ' . $config->get('app_name');