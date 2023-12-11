<?php

use Core\Router;

Router::get("/",Controllers\Home::class);
Router::get("/produtos",Controllers\Produtos::class);
Router::get("/produto/5",Controllers\Produtos::class,'produto');