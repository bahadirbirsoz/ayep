<?php

if (!defined("APP_PATH")) {
    define("APP_PATH", __DIR__);
}

include_once APP_PATH . DIRECTORY_SEPARATOR . "config" .
    DIRECTORY_SEPARATOR . 'bootstrap.php';

$app = \Structure\App::getInstance();
//$app = \Structure\App::getInstance();
$app->run();




