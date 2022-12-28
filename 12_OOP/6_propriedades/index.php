<?php

class Car {

    public $rodas = 4;
    public $aro =20;
    public $vermelho;

    function ligar(){
        echo "  Vrummm <br>";
    }
}

$ferrari = new Car;

echo $ferrari->aro . "<br>"; 
echo $ferrari->rodas . "<br>";

$ferrari->cor = "azul";

echo $ferrari->cor . "<br>";

$ferrari->ligar();
echo $ferrari->ligar();