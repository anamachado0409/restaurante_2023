<?php

require_once('../app/application.php');
use Controllers\Home;

$controller = new Home();
$controller->index();
/*use Core\View;

$tela = new View('produtos.produtos','main');  '../app/Views/produtos.php'    Para carregar outras paginas, basta troca o nome main pelo nome da pagina desejada 
$tela->show();*/
