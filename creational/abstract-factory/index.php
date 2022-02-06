<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('widget-factory.php');
require_once('material-factory.php');
require_once('ant-factory.php');

$widget = new MaterialFactory();
$widget->createButton();
$widget->createTextBox();