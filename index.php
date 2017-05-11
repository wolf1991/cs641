<?php

// include 'ChromePhp.php';
session_start();

// define path
define('APP_PATH', __DIR__.'/');

// debug mode
define('APP_DEBUG', true);

// root url
define('APP_URL', 'http://cs641.com/cs641avsx');
// define('APP_URL', 'http://localhost:81/cs641avsx');

// loading framework
require './fastphp/Fastphp.php';
$loader = require './vendor/autoload.php';

// ChromePhp::log("每次都有??");