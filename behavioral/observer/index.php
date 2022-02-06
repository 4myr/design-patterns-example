<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('subject.php');
require_once('observer.php');
require_once('data-source.php');
require_once('spreadsheet.php');
require_once('chart.php');

$data_source = new DataSource();
$data_source->add_observer(new Spreadsheet);
$data_source->add_observer(new Chart);
$data_source->set_value(3);