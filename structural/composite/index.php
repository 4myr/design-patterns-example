<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('component.php');
require_once('shape.php');
require_once('group.php');

$group1 = new Group();
$group2 = new Group();
$shape1 = new Shape();
$shape2 = new Shape();
$group1->add($shape1);
$group1->add($shape2);
$group1->render();

$group2->add($group1);
$group2->render();