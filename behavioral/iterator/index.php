<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require('iterator.php');
require('browse-history.php');

$history = new BrowseHistory();

$history->push('google');
$history->push('yahoo');
$history->push('bing');

$iterator = $history->createIterator();
while($iterator->hasNext()) {
    echo $iterator->current();
    $iterator->next();
}