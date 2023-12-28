<?php

use Core\Router;

// Rotas do sistema
Router::get("/",Controllers\Home::class);
Router::get("/produtos",Controllers\Produtos::class);
Router::get("/produto",Controllers\Produtos::class,'produto');
Router::get("/produto/{id}/novo",Controllers\Produtos::class,'produto');
Router::get("/produto/{id}/{nome_usuario}",Controllers\Produtos::class,'produto');


// Rotas do framework
Router::get("/404",Controllers\ErrorController::class, 'page404');
Router::get("/500",Controllers\ErrorController::class, 'page500');


//"(\{[a-z0-9_]{1,}\})"; expressao regular para encontrar algo no banco de dados.