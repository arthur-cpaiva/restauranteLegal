<?php

require __DIR__ . "/config/Database.php";
require __DIR__ . "/models/prato.php";

use RestauranteLegal\Config\Database;
use RestauranteLegal\Models\Prato;

$meuBancoDeDados = new Database();
$minhaConexao = $meuBancoDeDados->conectar();


if (is_string($meuBancoDeDados)) {
    echo $minhaConexao;
} else {
}


$meuPrato = new Prato(1, "Feijoada", "Deliciosa Feijoada", 45.99);

echo $meuPrato->getPratoHTML();
