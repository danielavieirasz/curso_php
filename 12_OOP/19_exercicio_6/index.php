<?php

class Cachorro{
    
    public $raca;
    public $patas;
    public $cor;
    public $nome;

    function __construct($raca,$nome,$cor,$patas)
    {
        $this->raca=$raca;
        $this->nome=$nome;
        $this->cor=$cor;
        $this->patas=$patas;
    }
}

$frederico = new Cachorro("vira-lata","Freed","Preto",4);

echo "O meu cachorro é $frederico->raca ,se chama $frederico->nome é da cor $frederico->cor e tem $frederico->patas patas <br>";

