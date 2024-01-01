<?php

namespace Core;

class Controller{
    public function redirect($action = 'index', $method = 'GET', $parameters = []){
        action(get_class($this), $action, $method, $parameters)->redirect();
    }
}