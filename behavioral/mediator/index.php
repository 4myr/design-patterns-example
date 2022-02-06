<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('ui-control.php');
require_once('dialog-box.php');
require_once('button.php');
require_once('text-box.php');
require_once('list-box.php');
require_once('articles-dialog-box.php');

$articleBox = new ArticlesDialogBox();