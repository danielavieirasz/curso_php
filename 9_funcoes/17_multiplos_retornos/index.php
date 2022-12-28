<?php

function alteraDados($nome,$idade){
    $nome = "Sra. $nome";
    $idade = "$idade anos";

    return [$nome, $idade];

}

$dados = alteraDados("Daniela", 28);

print_r($dados);

echo "<br>";

echo "Olá $dados[0], você tem $dados[1]";