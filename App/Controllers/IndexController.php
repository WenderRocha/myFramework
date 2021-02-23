<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

use App\Models\User;


class IndexController extends Action
{

    public function index()
    {

        $user = Container::getModel('User');
        $this->view->dados = $user->getUsers();

        $this->render('index', 'layout1');
    }

    public function sobre_nos()
    {
        $this->render('sobreNos', 'layout2');
    }


}
