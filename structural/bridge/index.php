<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('device.php');
require_once('remote-control.php');
require_once('advanced-remote-control.php');
require_once('sony-tv.php');
require_once('samsung-tv.php');

$tv = new SonyTV();
$remote = new AdvancedRemoteControl($tv);
$remote->turn_on();
$remote->set_channel(6);
$remote->turn_off(6);