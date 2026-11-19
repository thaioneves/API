<?php

require __DIR__ . "/config/Database.php";
require __DIR__ . "/models/Prato.php";
require __DIR__ . "/models/Bebida.php";
require __DIR__ . "/models/Sobremesa.php";
require __DIR__ . "/models/Marmita.php";

use API\Config\Database;
use API\Models\Prato;
use API\Models\Bebida;
use API\Models\Sobremesa;
use API\Models\Marmita;
 
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
$minhaBebida = new Bebida(1, "Coca-Cola", 350, false, 5.99);
echo $minhaBebida->getBebidaHTML();

echo "Sobremesas<br>";
$minhaSobremesa = new Sobremesa(1, "Pudim", "Pudim de leite condensado", 12.99);
echo $minhaSobremesa->getSobremesaHTML();

echo "Marmitas<br>";
$minhaMarmita = new Marmita(1, "Marmita Simples", "Prato principal com arroz e feijão", 19.99);
echo $minhaMarmita->getMarmitaHTML();
try {
    $meuSegundoPrato = new Prato(2, "Lasanha", "Lasanha de carne com molho branco", 39.99);
    echo $meuSegundoPrato->getPratoHTML();
} catch (\Throwable $th) {
    echo "Erro: " . $th->getMessage();
}

try {
    $meuSegundaBebida = new Bebida(1, "Guaraná", 350, false, 4.99);
    echo $meuSegundaBebida->getBebidaHTML();
} catch (\Throwable $th) {
    echo "Erro: " . $th->getMessage();
}
try {
    $meuSegundaSobremesa = new Sobremesa(1, "bolo", "Descrição da sobremesa", 4.99);
    echo $meuSegundaSobremesa->getSobremesaHTML();
} catch (\Throwable $th) {
    echo "Erro: " . $th->getMessage();
}

