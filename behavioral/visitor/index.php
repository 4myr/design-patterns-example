<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('html-node.php');
require_once('operation.php');
require_once('heading-node.php');
require_once('anchor-node.php');
require_once('highlight.php');

$heading = new HeadingNode();
$heading->execute(new HighlightOperation);