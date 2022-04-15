<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

    protected function initRoutes(): void
    {
        $routes = [

            ['route' => '/', 'controller' => 'indexController', 'action' => 'index'],
            ['route' => '/sobre-nos', 'controller' => 'indexController', 'action' => 'sobre'],
            ['route' => '/contato', 'controller' => 'indexController', 'action' => 'contato'],
        ];

        $this->setRoutes($routes);
    }
}