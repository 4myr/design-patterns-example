<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once("editor.php");
require_once("editor-state.php");
require_once("history.php");

$history = new History();
$editor = new Editor();

$editor->setContent('a');
$history->push($editor->createState());
echo $editor->getContent();


$editor->setContent('b');
$history->push($editor->createState());
echo $editor->getContent();

$editor->setContent('c');
$history->push($editor->createState());
echo $editor->getContent();

$editor->restore($history->pop());
$editor->restore($history->pop());
echo $editor->getContent();