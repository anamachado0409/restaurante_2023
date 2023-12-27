<?php

use Models\Config;
use Models\Produto;

require_once('../app/application.php');

$model = new Produto(2);
// $model->valor_un = 10;
//$model->save();
//$model->save(['name'=>'Root_User', 'value'=>'Joaquim']);
//$model->delete();


pre($model->getData());
// all($model);

function all($model){
    $configs = $model->all();
    array_walk($configs, function($config){
    echo $config->id . " | " . $config->nome . " | " . $config->valor_un . "<hr>"; 
    });
}