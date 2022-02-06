<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require('../../fx/button.php');
require('../../fx/command.php');
require('composite-command.php');
require('resize-command.php');
require('bw-command.php');

$composite = new CompositeCommand();
$composite->add(new ResizeCommand);
$composite->add(new BWCommand);
$composite->add(new BWCommand);
$composite->add(new BWCommand);
$composite->add(new ResizeCommand);
(new Button($composite))->click();