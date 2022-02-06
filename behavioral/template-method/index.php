<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require('audit-trail.php');
require('task.php');
require('report-generator.php');
require('transfer-money.php');

$task = new TransferMoney();
$task->execute();
$task->execute();