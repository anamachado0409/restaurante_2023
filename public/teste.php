<?php

use Models\Config;
use Models\Produto;

require_once('../app/application.php');

$config = new Config(2);
echo $config->name . " = " . $config->value;