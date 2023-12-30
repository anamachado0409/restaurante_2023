<?php


namespace Controllers;

use Core\Controller;
use Core\View;
use Core\Styles;
use Core\Scripts;

class ErrorController extends Controller{
    
    public function page404()
    {
        $view = new View("page404", "blank");
        $view->setTitle('Erro 404');
        $view->show();
    }
    public function page500()
    {
        $view = new View("page500", "blank");
        $view->setTitle('Erro 500');
        $view->show();
    }
}