<?php

require __DIR__ . "/config/Database.php";
require __DIR__ . "/models/Prato.php";

use API\Config\Database;
use API\Models\Prato;
 
$meuBancoDeDados = new Database();
$minhaConexao = $meuBancoDeDados->conectar();

if (is_string($minhaConexao)) {
    echo $minhaConexao;
} else {
    echo "Conectou!! <br>";
}

$meuPrato = new Prato(1, "Feijoada", "Feijoada completa com arroz, farofa e couve", 45.99);

//var_dump($meuPrato);

echo $meuPrato->getPratoHTML();