<?php

use Structure\App;


App::getInstance()->setRouteNamespace("Structure\\Controller");

$router = \Structure\App::getInstance()->getRouter();

$router->all("", function () {
    App::getInstance()->setMatchedRoute();
});

$router->all("hakkimizda", function () {
    App::getInstance()->setMatchedRoute("aboutus");
});

$router->all("([^/]+)", function ($controllerName) {
    App::getInstance()->setMatchedRoute($controllerName);
});
//App::getInstance()->setMatchedRoute($controllerName);
$router->all("([^/]+)/([^/]+)", function ($controllerName, $actionName) {
    App::getInstance()->setMatchedRoute($controllerName, $actionName);
});
$router->all("([^/]+)/([^/]+)/([^/]+)", function ($controllerName, $actionName, $argument) {
    App::getInstance()->setMatchedRoute($controllerName, $actionName, $argument);
});


