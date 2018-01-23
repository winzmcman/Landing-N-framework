<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('BASE_DIR', getcwd());

define('FRAMEWORK_DIR', getcwd() . '/framework');

require(FRAMEWORK_DIR . "/engine.php");



$app = new Engine;