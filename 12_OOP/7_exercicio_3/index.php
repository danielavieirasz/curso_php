<?php

class Pessoas {

    public $nome;
    public $idade;

    function  andar($m){
        echo "E andou $m metros <br>";
    }
}

$daniela = new Pessoas;

$daniela->nome = "Daniela";
$daniela->idade = 28;

echo "O nome dela é $daniela->nome e tem $daniela->idade anos <br>";

$daniela->andar(20);

$joaquim =new Pessoas;

$joaquim->nome = "Joaquim";
$joaquim->idade = 32;
echo "O nome  é $joaquim->nome  e tem $joaquim->idade anos <br>";
$joaquim->andar(200);