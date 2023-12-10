<?php

require_once('../app/application.php');
use Controllers\Home;
use Core\Router;


// $controller = new Home();
// $controller->index();

$url = '/';
if(isset($_GET['url'])){
    $url = $_GET['url'];
}

$router = Router::getRouterByUrl($url);

if($router){
    $controller = $router->getController();
    $action = $router->getAction();
    $controller = new $controller();
    $controller->$action();
} else {
    die('page 404');
}


//echo $_GET['url']; testa se o arquivo .htaccess está funcionando


/*use Core\View;
$tela = new View('produtos.produtos','main');  '../app/Views/produtos.php'    Para carregar outras paginas, basta troca o nome main pelo nome da pagina desejada 
$tela->show();*/
