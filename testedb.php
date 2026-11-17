<?php

require __DIR__ . "/config/Database.php";
require __DIR__ . "/models/Prato.php";
require __DIR__ . "/models/Bebida.php";
require __DIR__ . "/models/Sobremesa.php";

use API\Config\Database;
use API\Models\Prato;
use API\Models\Bebida;
use API\Models\Sobremesa;
 
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

echo "Bebidas<br>";
$minhaBebida = new Bebida(1, "Coca-Cola", "Refrigerante de 350ml", 0, 5.99);
echo $minhaBebida->getBebidaHTML();

//Sobremesas
$minhaSobremesa = new Sobremesa(1, "Pudim", "Pudim de leite condensado", 12.99);
echo $minhaSobremesa->getSobremesaHTML();

try {
    $meuSegundoPrato = new Prato(2, "Lasanha", "Lasanha de carne com molho branco", 39.99);
    echo $meuSegundoPrato->getPratoHTML();
} catch (\Throwable $th) {
    echo "Erro: " . $th->getMessage();
}
