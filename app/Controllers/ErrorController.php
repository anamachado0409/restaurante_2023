<?php


namespace Controllers;

use Core\Controller;
use Core\View;
use Core\Styles;
use Core\Scripts;

class ErrorController extends Controller{
    
    public function Page404()
    {
        $view = new View("page404", "blank");
        $view->setTitle('Erro 404');
        Scripts::addScript("alert('oi')");
        $view->show();
    }
    public function Page500()
    {
        $view = new View("page500", "blank");
        $view->setTitle('Erro 500');
        $view->show();
    }
}