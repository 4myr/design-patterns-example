<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('component.php');
require_once('circle.php');

$circle = new Circle();
$circle->setRadius(20);
echo 'Primary circle radius: ' . $circle->getRadius() . '<br>';
$clonedCircle = $circle->clone();
echo 'Cloned circle radius: ' . $clonedCircle->getRadius() . '<br>';