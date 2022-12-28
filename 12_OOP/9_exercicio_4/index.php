<?php

class Car{
    
    public $cor;
    public $tetoSolar;
    public $velocidadeMaxima;

        function setVelocidadeMaxima($vel){
            $this ->velocidadeMaxima = $vel;
 
        }
        function getVelocidadeMaxima(){
            echo "A velocidade maxima deste carro é de: $this->velocidadeMaxima km/h <br>";
        }
}

$bmw = new Car;
$bmw->cor = "branca";
$bmw->tetoSolar = true;

$bmw->setVelocidadeMaxima(200);

$bmw->getVelocidadeMaxima();

$ferrari = new Car;
$ferrari->setVelocidadeMaxima(300);

$ferrari->getVelocidadeMaxima();