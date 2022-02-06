<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once('stream.php');
require_once('cloud-stream.php');
require_once('encrypt-stream.php');
require_once('compress-stream.php');

$stream = new CompressStream(new EncryptStream(new CloudStream()));
echo $stream->write('amyr');