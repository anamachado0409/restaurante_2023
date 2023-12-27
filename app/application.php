<?php

/*Responsável pela inicialização do Sistema */

date_default_timezone_set("America/Sao_Paulo");

require_once('Configs/framework.php');

require_once(COMPOSER_PATH . '/autoload.php');

\Core\Configs::createConfigsDB();

require_once('Configs/app.php');

require_once('Core/helpers.php');

require_once('Configs/routers.php');
// require_once('Core/View.php');
// require_once('Controllers/Home.php');
