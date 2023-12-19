<?php

require_once('../app/application.php');
use Controllers\Home;
use Core\Router;


$url = '/';
if(isset($_GET['url'])){
    $url = $_GET['url'];
}

$router = Router::getRouterByUrl($url);

if($router){
    $controller = $router->getController();
    call_user_func_array(
        [
            new $controller,$router->getAction()
        ],
        array_values($router->getParameters())
    );
} else {
    die('page 404');
}