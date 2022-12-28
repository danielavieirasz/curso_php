<?php

class Cachorro{
    
    function latir(){
        echo "AU-AU <br>";

    }
    function andar($m){
        echo "O cachorro andou $m metros <br>";
    }
}

$viraLata = new Cachorro;
$pastorAlemao = new Cachorro;

$viraLata->latir();
$viraLata->andar(1000);


$pastorAlemao -> latir();
$pastorAlemao->andar(50);
