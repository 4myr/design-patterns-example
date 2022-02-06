<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('canvas.php');
require_once('tool.php');
require_once('selection.php');
require_once('brush.php');
require_once('eraser.php');

$canvas = new Canvas(new Eraser());
$canvas->mouseDown();
$canvas->mouseUp();