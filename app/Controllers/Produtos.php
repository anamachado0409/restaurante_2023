<?php

namespace Controllers;
use Core\Controller;
use Core\View;

class Produtos extends Controller{
    public function index()
    {
        $view = new View('produtos.lista');
        $view->nome = 'x-salada'; //seta um valor a view
        $view->valor = 55.5;
        $view->show();
    }

    public function produto($id = 0){
        $view = new View('produtos.item');
        $view->nome = 'x-tudo'; //seta um valor a view
        $view->valor = 27.90;
        $view->id = $id;
        $view->show();  
    }
}