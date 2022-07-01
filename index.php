<?php

require_once __DIR__.'/vendor/autoload.php';

// dependências
use \App\WebService\ViaCEP;

if (!isset($argv[1])) {
    die("Cep não definido\n");
}

$dados = ViaCEP::consultarCEP($argv[1]);

print_r($dados);