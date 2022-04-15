<?php

namespace App;

use MF\Init\Bootstrap;

class Routes extends Bootstrap {

    protected function initRoutes(): void
    {
        $routes = [

            ['route' => '/', 'controller' => 'indexController', 'action' => 'index']
        ];

        $this->setRoutes($routes);
    }
}