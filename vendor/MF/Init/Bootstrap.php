<?php

namespace MF\Init;

abstract class Bootstrap {

    private array $routes;

    protected abstract function initRoutes();

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());

    }

    /**
     * @return array
     */
    protected function getRoutes()
    {
        return $this->routes;
    }

    /**
     * @param array $routes
     */
    protected function setRoutes(array $routes): void
    {
        $this->routes = $routes;
    }



    protected function run(string $url): void
    {
        $r_route = [];

        foreach ($this->getRoutes() as $route) {
            ($url == $route['route']) ? $r_route = $route : '';
        }

        if(!empty($r_route)) {

            $class = "App\\Controllers\\".ucfirst($r_route['controller']);
            $action = $r_route['action'];

            $controller = new $class;

            if(method_exists($controller, $action )){
                $controller->$action();
                return;
            }

            throw new \Exception("o metodo informado 
                                            ({$action}) não foi encontado no controller
                                            ({$r_route['controller']})");


        }else{
            header('Location: 404.html');
        }


    }

    protected function getUrl(): string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

}