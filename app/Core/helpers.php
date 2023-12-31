<?php  //simplifica chamada de classes

use Core\Action;

if(!function_exists('pre')){
    function pre($data){
        echo '<pre>';
        var_dump($data); //print_r
        echo '</pre><hr>';
    }
}

if(!function_exists('action')){
    function action($controller, $action = 'index', $method = 'GET', $parameters = []){
        return new Action($controller, $action, $method, $parameters);
    }
}

if(!function_exists('value')){
    function value(&$var, $default = ''){
        return isset($var) ? $var : $default;
    }
}