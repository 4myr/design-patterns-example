<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('filter.php');
require_once('compressor.php');
require_once('jpeg-compressor.php');
require_once('png-compressor.php');
require_once('bw-filter.php');
require_once('high-constrant-filter.php');
require_once('image-storage.php');


$image_storage = new ImageStorage(new PngCompressor, new HighConstrantFilter);
$image_storage->store('file.png');