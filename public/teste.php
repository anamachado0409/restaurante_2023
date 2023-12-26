<?php

use Models\Config;
use Models\Produto;

require_once('../app/application.php');

$config = new Config();
$config->name = 'ENDERECO';
$config->value = 'Rua 13, nº 515';
$config->insert(['alteracao_data' => date('Y-m-d H:i:s')]);
// pre($model->insert(['name'=>'HELP_CENTER','value'=>'999999999']));localhost/phpmyadmin
pre($config->all());