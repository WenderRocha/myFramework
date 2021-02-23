<?php

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action
{

    public function index()
    {
        $this->view->dados = array(
            'titulo' => 'meu site',
            'nome' => 'joao da silva'
        );

        $this->render('index', 'layout1');
    }

    public function sobre_nos()
    {
        $this->render('sobreNos', 'layout2');
    }


}
