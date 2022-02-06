<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('macha-view-engine.php');
require_once('sharp-view-engine.php');
require_once('controller.php');
require_once('sharp-controller.php');

$controller = new Controller;
echo $controller->create_view_engine()->get_name();