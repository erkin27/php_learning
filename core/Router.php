<?php

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static();

        require $file;

        return $router;
    }

    public function direct($uri, $requestType)
    {
        //for example - about/culture

        if (key_exists($uri, $this->routes[$requestType])) {

            return $this->routes[$requestType][$uri];

        }

        throw new Exception("No route defined for this URI");
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
}