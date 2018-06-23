<?php

namespace Structure;

use Bramus\Router\Router;

class App
{
    /**
     * @var Router
     */
    protected $router;

    protected $matchedRouteController;
    protected $matchedRouteAction;
    protected $matchedRouteArgument;
    protected $routeNamespace;


    protected $controller;
    /**
     * @var Logger
     */
    protected $logger;
    static $instance;

    /**
     * @return App
     */
    static function getInstance()
    {
        if (!static::$instance) {
            static::$instance = new App();
        }
        return static::$instance;
    }


    private function __construct()
    {
    }

    public function run()
    {
        $this->router->run();

        $className = $this->routeNamespace . "\\" . ucfirst($this->matchedRouteController) . 'Controller';
        $actionName = ucfirst($this->matchedRouteAction) . "Action";
        $this->controller = new $className();

        call_user_func_array([$this->controller, $actionName], [$this->matchedRouteArgument]);

    }

    /**
     * @return \Bramus\Router\Router
     */
    public function getRouter()
    {
        if (!$this->router) {
            $this->router = new \Bramus\Router\Router();
        }
        return $this->router;
    }

    public function setRouteNamespace($namespace)
    {
        $this->routeNamespace = $namespace;
    }

    public function setMatchedRoute($controllerName = "index", $actionName = "index", $argument = null)
    {
        $this->matchedRouteController = $controllerName;
        $this->matchedRouteAction = $actionName;
        $this->matchedRouteArgument = $argument;
    }

    public function getLogger()
    {
        if (!$this->logger) {
            $this->logger = new Logger();
        }
        return $this->logger;
    }

}