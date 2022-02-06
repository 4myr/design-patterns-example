<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('point-icon.php');
require_once('point-icon-factory.php');
require_once('point.php');
require_once('point-service.php');

$pointIconFactory = new PointIconFactory();
new Point(2, 5, $pointIconFactory->get_point_icon('coffee'));
new Point(1, 50, $pointIconFactory->get_point_icon('coffee'));
new Point(5, 7, $pointIconFactory->get_point_icon('resturant'));
new Point(8, 3, $pointIconFactory->get_point_icon('coffee'));
new Point(4, 5, $pointIconFactory->get_point_icon('resturant'));
new Point(5, 7, $pointIconFactory->get_point_icon('coffee'));
new Point(5, 7, $pointIconFactory->get_point_icon('resturant'));
new Point(5, 7, $pointIconFactory->get_point_icon('coffee'));