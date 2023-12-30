<?php

require_once('../app/application.php');
use Core\Action;


$url = '/';
if(isset($_GET['url'])){
    $url = $_GET['url'];
}

Action::createActionByUrl($url)->run();

