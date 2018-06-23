<?php

include APP_PATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR .
    "autoload.php";

spl_autoload_register(function ($className) {
    $path = APP_PATH . DIRECTORY_SEPARATOR .
        str_replace('\\', DIRECTORY_SEPARATOR, $className) . ".php";
    if (file_exists($path)) {
        require_once $path;
    }
});


