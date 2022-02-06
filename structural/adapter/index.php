<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('image.php');
require_once('filter.php');
require_once('sun-filter.php');
require_once('adaFilters/caramel.php');
require_once('caramel-adapter.php');

$image = new Image('amyr.png');
$image->apply_filter(new CaramelAdapter);