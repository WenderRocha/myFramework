<?php

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action
{

    public function index()
    {
        $data['title'] = 'Teste inicial';

        echo $this->view("index/index", $data);
    }

}