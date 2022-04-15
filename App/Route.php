<?php

namespace App;

class Route{

    public function initRoutes()
    {
        $routes['home'] = [
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        ];

        $routes['sobrenos'] = [
            'route' => '/sobre-nos',
            'controller' => 'indexController',
            'action' => 'index'
        ];

    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}