<?php

namespace Controllers\Usuarios;
use Core\Controller;
use Core\View;
use Core\Request;


class Cadastro extends Controller{

    public function index(){
        $view = new View('usuarios.cadastro', 'blank');
        $view->show();
    }

    public function salvar($request){
        pre($request->all());
    }
}