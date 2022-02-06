<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('presentation.php');
require_once('presentation-builder.php');
require_once('pdf-builder.php');
require_once('movie-builder.php');

$builder = new PdfBuilder();
$presentation = new Presentation($builder);
$builder->add_slide('slide 1');
$builder->add_slide('slide 2');
$builder->add_slide('slide 3');
$presentation->export();
$builder->get_pdf($presentation);