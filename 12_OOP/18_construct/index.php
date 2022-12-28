<?php

class Car{

   public $portas;
   public $cor;
   public $marca;

   function __construct($portas,$cor,$marca) {
    
    $this->portas = $portas;
    $this->cor = $cor;
    $this->marca =$marca;
   }
   
}

$ferrari = new Car(4,"vermelha","Ferrari");

echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor <br>";

$palio = new Car(4,"preto","palio");

echo "O carro é da marca $palio->marca e tem a cor $palio->cor <br>";